/**
 * HEIC to JPEG Converter
 * Convierte automáticamente imágenes HEIC (iPhone) a JPEG antes de subirlas
 * Requiere: heic2any library
 */

class HEICConverter {
    constructor() {
        this.isConverting = false;
        this.loadLibrary();
    }

    /**
     * Carga la librería heic2any dinámicamente
     */
    loadLibrary() {
        if (typeof heic2any === 'undefined') {
            const script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/npm/heic2any@0.0.4/dist/heic2any.min.js';
            script.async = true;
            document.head.appendChild(script);
        }
    }

    /**
     * Detecta si un archivo es HEIC por extensión o tipo MIME
     */
    isHEIC(file) {
        const filename = file.name.toLowerCase();
        const extension = filename.split('.').pop();
        const mimeType = (file.type || '').toLowerCase();
        
        console.log('🔍 Detectando HEIC:', {
            filename: file.name,
            extension: extension,
            mimeType: mimeType
        });
        
        // Detectar por extensión (más confiable que MIME)
        const isHEICByExtension = extension === 'heic' || extension === 'heif';
        
        // Detectar por MIME type
        const isHEICByMime = mimeType.includes('heic') || mimeType.includes('heif');
        
        const result = isHEICByExtension || isHEICByMime;
        
        console.log('🔍 Resultado detección:', result);
        
        return result;
    }

    /**
     * Detecta si el navegador soporta la conversión
     */
    isSupported() {
        return typeof heic2any !== 'undefined' || typeof window.heic2any !== 'undefined';
    }

    /**
     * Convierte un archivo HEIC a JPEG
     * @param {File} file - Archivo HEIC a convertir
     * @returns {Promise<File>} - Archivo JPEG convertido
     */
async convert(file) {
    // Verificar que la librería esté cargada
    if (typeof heic2any === 'undefined') {
        throw new Error('La librería heic2any no está disponible. Por favor, recarga la página.');
    }

    try {
        console.log(`🔄 Convirtiendo ${file.name} de HEIC a JPEG...`);
        console.log(`📊 Tamaño original: ${this.formatFileSize(file.size)}`);
        
        // Convertir con timeout de 30 segundos
        const conversionPromise = heic2any({
            blob: file,
            toType: 'image/jpeg',
            quality: 0.9
        });

        const timeoutPromise = new Promise((_, reject) => 
            setTimeout(() => reject(new Error('Conversión tardó más de 30 segundos')), 30000)
        );

        const convertedBlob = await Promise.race([conversionPromise, timeoutPromise]);

        console.log('✅ Blob convertido:', convertedBlob);

        // Crear nuevo archivo File desde el Blob convertido
        const originalName = file.name.replace(/\.heic$/i, '').replace(/\.heif$/i, '');
        const newFile = new File(
            [convertedBlob], 
            `${originalName}.jpg`, 
            { type: 'image/jpeg' }
        );

        console.log(`✅ Conversión exitosa: ${file.name} (${this.formatFileSize(file.size)}) → ${newFile.name} (${this.formatFileSize(newFile.size)})`);
        
        return newFile;

    } catch (error) {
        console.error('❌ Error detallado al convertir HEIC:', error);
        
        // Mensaje más específico según el error
        if (error.message.includes('timeout') || error.message.includes('30 segundos')) {
            throw new Error('La conversión está tardando demasiado. El archivo puede ser muy grande o estar corrupto.');
        } else if (error.message.includes('not a HEIC')) {
            throw new Error('El archivo no es un HEIC válido.');
        } else {
            throw new Error(`No se pudo convertir la imagen HEIC. Intenta convertirla manualmente a JPG primero. Error: ${error.message}`);
        }
    }
}

    /**
     * Procesa un FileList completo, convirtiendo HEICs automáticamente
     * @param {FileList|Array} files - Lista de archivos
     * @param {Function} onProgress - Callback de progreso (opcional)
     * @returns {Promise<Array>} - Array de archivos procesados
     */
    async processFiles(files, onProgress = null) {
        const filesArray = Array.from(files);
        const processedFiles = [];
        let heicCount = 0;

        for (let i = 0; i < filesArray.length; i++) {
            const file = filesArray[i];
            
            if (this.isHEIC(file)) {
                heicCount++;
                
                if (onProgress) {
                    onProgress({
                        current: i + 1,
                        total: filesArray.length,
                        filename: file.name,
                        status: 'converting'
                    });
                }

                try {
                    const convertedFile = await this.convert(file);
                    processedFiles.push(convertedFile);
                } catch (error) {
                    console.error(`Error convirtiendo ${file.name}:`, error);
                    
                    if (onProgress) {
                        onProgress({
                            current: i + 1,
                            total: filesArray.length,
                            filename: file.name,
                            status: 'error',
                            error: error.message
                        });
                    }
                    
                    // Continuar con el siguiente archivo
                    continue;
                }
            } else {
                // No es HEIC, agregar tal cual
                processedFiles.push(file);
                
                if (onProgress) {
                    onProgress({
                        current: i + 1,
                        total: filesArray.length,
                        filename: file.name,
                        status: 'ready'
                    });
                }
            }
        }

        if (heicCount > 0) {
            console.log(`🎉 ${heicCount} imagen(es) HEIC convertida(s) automáticamente a JPEG`);
        }

        return processedFiles;
    }

    /**
     * Formatea el tamaño de archivo a formato legible
     */
    formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
    }

    /**
     * Muestra un mensaje de conversión en pantalla
     */
    showConversionMessage(message, type = 'info') {
        // Crear elemento de mensaje si no existe
        let messageEl = document.getElementById('heic-conversion-message');
        
        if (!messageEl) {
            messageEl = document.createElement('div');
            messageEl.id = 'heic-conversion-message';
            messageEl.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                padding: 15px 20px;
                border-radius: 8px;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
                font-size: 14px;
                z-index: 10000;
                max-width: 350px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                animation: slideIn 0.3s ease-out;
            `;
            document.body.appendChild(messageEl);
        }

        // Estilos según tipo
        const styles = {
            info: { bg: '#3498db', color: '#fff', icon: '🔄' },
            success: { bg: '#2ecc71', color: '#fff', icon: '✅' },
            error: { bg: '#e74c3c', color: '#fff', icon: '❌' },
            warning: { bg: '#f39c12', color: '#fff', icon: '⚠️' }
        };

        const style = styles[type] || styles.info;
        messageEl.style.background = style.bg;
        messageEl.style.color = style.color;
        messageEl.innerHTML = `${style.icon} ${message}`;

        // Auto-ocultar después de 5 segundos
        setTimeout(() => {
            if (messageEl && messageEl.parentNode) {
                messageEl.style.animation = 'slideOut 0.3s ease-in';
                setTimeout(() => messageEl.remove(), 300);
            }
        }, 5000);
    }
}

// Agregar animaciones CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(400px);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Exportar instancia global
window.heicConverter = new HEICConverter();
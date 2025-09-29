<?php
namespace App\Service;

use Intervention\Image\ImageManagerStatic as Image;
use Cake\Log\Log;

class ImageProcessorService
{
    /**
     * Configuración de tamaños para diferentes tipos de imágenes
     */
    private const SIZES = [
        'banner' => [
            'full' => 1920,      // Para visualización completa en desktop
            'medium' => 1200,    // Para tablets
            'thumb' => 600       // Para cards/previews
        ],
        'gallery' => [
            'full' => 1600,      // Para lightbox/visualización
            'medium' => 800,     // Para vista normal
            'thumb' => 400       // Para grids
        ]
    ];

    /**
     * Calidades de compresión
     */
    private const QUALITY = [
        'webp' => 90,
        'jpeg' => 85
    ];

    /**
     * Tamaño máximo en MB permitido (15MB)
     */
    private const MAX_FILE_SIZE = 15 * 1024 * 1024;

    /**
     * Formatos permitidos (MIME types)
     */
    private const ALLOWED_MIMES = [
        'image/jpeg',
        'image/jpg', 
        'image/png',
        'image/webp'
    ];

    /**
     * Extensiones permitidas
     */
    private const ALLOWED_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp'];

    /**
     * Formatos NO soportados con mensajes específicos
     */
    private const UNSUPPORTED_FORMATS = [
        'heic' => 'HEIC (iPhone)',
        'heif' => 'HEIF (iPhone)',
        'avif' => 'AVIF',
        'jxl' => 'JPEG XL'
    ];

    /**
     * Procesa y guarda una imagen en múltiples tamaños y formatos
     * 
     * @param \Laminas\Diactoros\UploadedFile $file Archivo subido
     * @param string $type Tipo de imagen: 'banner' o 'gallery'
     * @param string $directory Directorio base (ej: 'bannersBlog', 'gallery')
     * @return array Array con las rutas de todas las versiones generadas
     * @throws \Exception Si hay error en el procesamiento
     */
    public function processImage($file, string $type = 'gallery', string $directory = 'gallery'): array
    {
        // Validación completa del archivo
        $validation = $this->validateImage($file);
        if (!empty($validation['errors'])) {
            throw new \Exception(implode('. ', $validation['errors']));
        }

        // Generar nombre único
        $filename = $this->generateUniqueFilename($file);
        $basePath = WWW_ROOT . 'img' . DS . $directory;
        
        // Crear directorios si no existen
        $this->ensureDirectoryExists($basePath);
        $this->ensureDirectoryExists($basePath . DS . 'thumbs');
        $this->ensureDirectoryExists($basePath . DS . 'medium');

        // Cargar imagen con Intervention
        try {
            $image = Image::make($file->getStream()->getMetadata('uri'));
        } catch (\Exception $e) {
            Log::error("Error al cargar imagen: " . $e->getMessage(), ['scope' => 'image_processor']);
            throw new \Exception("No se pudo procesar la imagen. Asegúrate de que sea un formato válido (JPG, PNG, WebP)");
        }
        
        // Obtener dimensiones originales
        $originalWidth = $image->width();
        $originalHeight = $image->height();
        
        Log::info("Procesando imagen: {$filename} ({$originalWidth}x{$originalHeight}, " . 
                  round($file->getSize() / 1024 / 1024, 2) . "MB)", 
                  ['scope' => 'image_processor']);

        $results = [
            'original' => null,
            'full' => null,
            'medium' => null,
            'thumb' => null,
            'sizes' => []
        ];

        try {
            // 1. Guardar versión FULL comprimida en WebP
            $fullWidth = self::SIZES[$type]['full'];
            if ($originalWidth > $fullWidth) {
                $fullImage = clone $image;
                $fullImage->resize($fullWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $fullPath = $basePath . DS . $filename . '.webp';
                $fullImage->save($fullPath, self::QUALITY['webp'], 'webp');
                $results['full'] = $directory . '/' . $filename . '.webp';
                $results['sizes']['full'] = filesize($fullPath);
                
                Log::info("✓ Full WebP creado: " . round(filesize($fullPath) / 1024, 2) . "KB", 
                         ['scope' => 'image_processor']);
            } else {
                // Si la imagen original es más pequeña, solo comprimirla
                $fullPath = $basePath . DS . $filename . '.webp';
                $image->save($fullPath, self::QUALITY['webp'], 'webp');
                $results['full'] = $directory . '/' . $filename . '.webp';
                $results['sizes']['full'] = filesize($fullPath);
            }

            // 2. Crear versión MEDIUM
            $mediumWidth = self::SIZES[$type]['medium'];
            $mediumImage = clone $image;
            $mediumImage->resize($mediumWidth, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $mediumPath = $basePath . DS . 'medium' . DS . $filename . '.webp';
            $mediumImage->save($mediumPath, self::QUALITY['webp'], 'webp');
            $results['medium'] = $directory . '/medium/' . $filename . '.webp';
            $results['sizes']['medium'] = filesize($mediumPath);
            
            Log::info("✓ Medium WebP creado: " . round(filesize($mediumPath) / 1024, 2) . "KB", 
                     ['scope' => 'image_processor']);

            // 3. Crear THUMBNAIL
            $thumbWidth = self::SIZES[$type]['thumb'];
            $thumbImage = clone $image;
            $thumbImage->resize($thumbWidth, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbPath = $basePath . DS . 'thumbs' . DS . $filename . '.webp';
            $thumbImage->save($thumbPath, self::QUALITY['webp'], 'webp');
            $results['thumb'] = $directory . '/thumbs/' . $filename . '.webp';
            $results['sizes']['thumb'] = filesize($thumbPath);
            
            Log::info("✓ Thumbnail WebP creado: " . round(filesize($thumbPath) / 1024, 2) . "KB", 
                     ['scope' => 'image_processor']);

            // 4. Guardar fallback JPEG (solo versión full para compatibilidad)
            $jpegPath = $basePath . DS . $filename . '.jpg';
            if ($originalWidth > $fullWidth) {
                $jpegImage = clone $image;
                $jpegImage->resize($fullWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $jpegImage->save($jpegPath, self::QUALITY['jpeg'], 'jpg');
            } else {
                $image->save($jpegPath, self::QUALITY['jpeg'], 'jpg');
            }
            $results['original'] = $directory . '/' . $filename . '.jpg';
            $results['sizes']['jpeg_fallback'] = filesize($jpegPath);
            
            Log::info("✓ JPEG fallback creado: " . round(filesize($jpegPath) / 1024, 2) . "KB", 
                     ['scope' => 'image_processor']);

            // Log del resumen
            $totalSaved = $file->getSize() - array_sum($results['sizes']);
            $percentSaved = round(($totalSaved / $file->getSize()) * 100, 1);
            
            Log::info("🎉 Procesamiento completado - Ahorro: " . 
                     round($totalSaved / 1024 / 1024, 2) . "MB ({$percentSaved}%)", 
                     ['scope' => 'image_processor']);

            // Limpiar memoria
            $image->destroy();

            return $results;

        } catch (\Exception $e) {
            Log::error("Error procesando imagen: " . $e->getMessage(), 
                      ['scope' => 'image_processor']);
            throw new \Exception("Error al procesar la imagen: " . $e->getMessage());
        }
    }

    /**
     * Elimina todas las versiones de una imagen
     * 
     * @param string $imagePath Ruta relativa de la imagen (ej: 'gallery/imagen.jpg')
     * @return bool
     */
    public function deleteImage(string $imagePath): bool
    {
        $basePath = WWW_ROOT . 'img' . DS;
        $pathInfo = pathinfo($imagePath);
        
        $directory = $pathInfo['dirname'];
        $filename = $pathInfo['filename'];
        
        $filesToDelete = [
            $basePath . $imagePath, // Original
            $basePath . $directory . DS . $filename . '.webp',
            $basePath . $directory . DS . $filename . '.jpg',
            $basePath . $directory . DS . 'thumbs' . DS . $filename . '.webp',
            $basePath . $directory . DS . 'medium' . DS . $filename . '.webp',
        ];

        $deleted = 0;
        foreach ($filesToDelete as $file) {
            if (file_exists($file)) {
                if (unlink($file)) {
                    $deleted++;
                    Log::info("✓ Archivo eliminado: " . basename($file), 
                             ['scope' => 'image_processor']);
                }
            }
        }

        return $deleted > 0;
    }

    /**
     * Genera un nombre de archivo único
     */
    private function generateUniqueFilename($file): string
    {
        $extension = pathinfo($file->getClientFilename(), PATHINFO_EXTENSION);
        $baseName = pathinfo($file->getClientFilename(), PATHINFO_FILENAME);
        
        // Sanitizar nombre
        $baseName = preg_replace('/[^a-zA-Z0-9_-]/', '', $baseName);
        $baseName = substr($baseName, 0, 30); // Limitar longitud
        
        return time() . '_' . uniqid() . '_' . $baseName;
    }

    /**
     * Asegura que un directorio exista
     */
    private function ensureDirectoryExists(string $path): void
    {
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
            Log::info("Directorio creado: {$path}", ['scope' => 'image_processor']);
        }
    }

    /**
     * Obtiene información sobre los tamaños configurados
     */
    public static function getSizeConfig(string $type = 'gallery'): array
    {
        return self::SIZES[$type] ?? self::SIZES['gallery'];
    }

    /**
     * Valida si un archivo es una imagen válida
     * 
     * @param \Laminas\Diactoros\UploadedFile $file
     * @return array ['valid' => bool, 'errors' => array, 'warnings' => array]
     */
    public function validateImage($file): array
    {
        $errors = [];
        $warnings = [];

        // Verificar que el archivo se subió correctamente
        if (!$file || $file->getError() !== UPLOAD_ERR_OK) {
            $errors[] = 'Error al subir el archivo';
            return ['valid' => false, 'errors' => $errors, 'warnings' => $warnings];
        }

        // Obtener información del archivo
        $clientFilename = $file->getClientFilename();
        $extension = strtolower(pathinfo($clientFilename, PATHINFO_EXTENSION));
        $mimeType = $file->getClientMediaType();
        $fileSize = $file->getSize();

        // ⚠️ CRÍTICO: DETECTAR HEIC/HEIF PRIMERO (ANTES DE TODO)
        if (in_array($extension, ['heic', 'heif'])) {
            $errors[] = "❌ Formato HEIC/HEIF (iPhone) no soportado. Por favor, convierte la imagen a JPG o PNG antes de subirla.\n\n" .
                    "📱 En iPhone: Ajustes > Cámara > Formatos > Selecciona 'Más compatible'\n\n" .
                    "💡 Alternativa: Usa una app de conversión o abre la foto y guárdala como JPG desde Fotos.";
            return ['valid' => false, 'errors' => $errors, 'warnings' => $warnings];
        }

        // Detectar HEIC por MIME type también
        if (strpos($mimeType, 'heic') !== false || strpos($mimeType, 'heif') !== false) {
            $errors[] = "❌ Formato HEIC/HEIF (iPhone) detectado por tipo MIME. Por favor, convierte la imagen a JPG o PNG antes de subirla.\n\n" .
                    "📱 En iPhone: Ajustes > Cámara > Formatos > Selecciona 'Más compatible'";
            return ['valid' => false, 'errors' => $errors, 'warnings' => $warnings];
        }

        // 1. VALIDAR TAMAÑO
        if ($fileSize > self::MAX_FILE_SIZE) {
            $maxSizeMB = self::MAX_FILE_SIZE / 1024 / 1024;
            $currentSizeMB = round($fileSize / 1024 / 1024, 2);
            $errors[] = "El archivo pesa {$currentSizeMB}MB y excede el límite de {$maxSizeMB}MB";
        }

        // 2. VALIDAR EXTENSIÓN
        if (!in_array($extension, self::ALLOWED_EXTENSIONS)) {
            $errors[] = "Extensión de archivo '.{$extension}' no permitida. Solo se aceptan: " . 
                    implode(', ', self::ALLOWED_EXTENSIONS);
        }

        // 3. VALIDAR MIME TYPE
        if (!in_array($mimeType, self::ALLOWED_MIMES)) {
            $errors[] = "Tipo de archivo '{$mimeType}' no permitido. Solo imágenes JPG, PNG y WebP";
        }

        // 4. VERIFICAR QUE SEA UNA IMAGEN REAL (intento de carga)
        try {
            $tempPath = $file->getStream()->getMetadata('uri');
            
            // Leer primeros bytes para detectar HEIC por firma de archivo
            $handle = @fopen($tempPath, 'rb');
            if ($handle) {
                $header = fread($handle, 12);
                fclose($handle);
                
                // Detectar HEIC por firmas de bytes
                if (strpos($header, 'ftyp') !== false && 
                    (strpos($header, 'heic') !== false || 
                    strpos($header, 'mif1') !== false || 
                    strpos($header, 'hevc') !== false ||
                    strpos($header, 'heix') !== false)) {
                    $errors[] = "❌ Detectado formato HEIC por firma de archivo. Este formato de iPhone no es compatible.\n\n" .
                            "📱 Solución: Cambia el formato de cámara en Ajustes > Cámara > Formatos > 'Más compatible'";
                    return ['valid' => false, 'errors' => $errors, 'warnings' => $warnings];
                }
            }
            
            $imageInfo = @getimagesize($tempPath);
            
            if ($imageInfo === false) {
                $errors[] = "El archivo no es una imagen válida o está corrupto. Si es una foto de iPhone en formato HEIC, por favor conviértela a JPG primero.";
            } else {
                // Validar dimensiones mínimas
                [$width, $height] = $imageInfo;
                
                if ($width < 300 || $height < 300) {
                    $warnings[] = "La imagen es muy pequeña ({$width}x{$height}px). Se recomienda al menos 800x800px para mejor calidad";
                }
            }
        } catch (\Exception $e) {
            $errors[] = "No se pudo verificar la integridad de la imagen: " . $e->getMessage();
        }

        return [
            'valid' => empty($errors),
            'errors' => $errors,
            'warnings' => $warnings
        ];
    }

    /**
     * Obtiene un mensaje de ayuda para formatos no soportados
     */
    public static function getHelpMessage(string $format): string
    {
        $messages = [
            'heic' => "Las fotos de iPhone vienen en formato HEIC por defecto. Para cambiar esto:\n" .
                     "1. Ve a Configuración > Cámara > Formatos\n" .
                     "2. Selecciona 'Más compatible'\n" .
                     "O usa una aplicación para convertir HEIC a JPG antes de subir.",
            
            'heif' => "Formato HEIF no soportado. Convierte la imagen a JPG o PNG antes de subir.",
        ];

        return $messages[$format] ?? "Formato no soportado. Usa JPG, PNG o WebP.";
    }
}
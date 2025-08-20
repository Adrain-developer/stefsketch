<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    min-height: 100vh;
    color: #2d3748;
}

.main-content {
    padding: 20px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-container {
    max-width: 800px;
    width: 100%;
    background: #f7fafc;
    border-radius: 30px;
    padding: 40px;
    box-shadow: 
        20px 20px 60px #d1d9e6,
        -20px -20px 60px #ffffff;
    position: relative;
    overflow: hidden;
}

.form-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #667eea, #764ba2, #f093fb, #f5576c);
    background-size: 300% 300%;
    animation: gradientShift 3s ease infinite;
}

@keyframes gradientShift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.form-header {
    text-align: center;
    margin-bottom: 40px;
}

.form-title {
    font-size: clamp(28px, 5vw, 36px);
    font-weight: 800;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 10px;
    letter-spacing: -0.5px;
}

.form-subtitle {
    color: #718096;
    font-size: 16px;
    font-weight: 500;
}

.form-group {
    margin-bottom: 32px;
    position: relative;
}

.form-label {
    display: block;
    font-weight: 600;
    font-size: 16px;
    color: #4a5568;
    margin-bottom: 12px;
    letter-spacing: -0.2px;
}

.form-input, .form-textarea {
    width: 100%;
    padding: 18px 24px;
    border: none;
    border-radius: 20px;
    font-size: 16px;
    font-family: inherit;
    background: #f7fafc;
    color: #2d3748;
    box-shadow: 
        inset 8px 8px 20px #d1d9e6,
        inset -8px -8px 20px #ffffff;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    outline: none;
    resize: none;
}

.form-textarea {
    min-height: 120px;
    resize: vertical;
}

.form-input:focus, .form-textarea:focus {
    box-shadow: 
        inset 6px 6px 15px #d1d9e6,
        inset -6px -6px 15px #ffffff,
        0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-input::placeholder, .form-textarea::placeholder {
    color: #a0aec0;
}

/* Drag & Drop Zone */
.drag-drop-zone {
    position: relative;
    width: 100%;
    min-height: 300px;
    border: 3px dashed #cbd5e0;
    border-radius: 24px;
    background: #f7fafc;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 
        inset 12px 12px 30px #d1d9e6,
        inset -12px -12px 30px #ffffff;
    overflow: hidden;
}

.drag-drop-zone.drag-over {
    border-color: #667eea;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);
    transform: scale(1.02);
    box-shadow: 
        inset 8px 8px 20px #d1d9e6,
        inset -8px -8px 20px #ffffff,
        0 0 20px rgba(102, 126, 234, 0.2);
}

.drag-drop-zone.has-file {
    border-color: #48bb78;
    background: linear-gradient(135deg, rgba(72, 187, 120, 0.05) 0%, rgba(56, 178, 172, 0.05) 100%);
}

.upload-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 36px;
    margin-bottom: 20px;
    box-shadow: 
        8px 8px 20px #d1d9e6,
        -8px -8px 20px #ffffff;
    transition: all 0.3s ease;
}

.drag-drop-zone:hover .upload-icon {
    transform: scale(1.1);
}

.upload-text {
    text-align: center;
    color: #4a5568;
}

.upload-title {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 8px;
}

.upload-subtitle {
    font-size: 14px;
    color: #718096;
}

.file-input {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
}

/* Preview Image */
.image-preview {
    position: relative;
    display: none;
    max-width: 100%;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 
        12px 12px 30px #d1d9e6,
        -12px -12px 30px #ffffff;
}

.preview-image {
    width: 100%;
    height: auto;
    max-height: 300px;
    object-fit: cover;
    display: block;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, transparent 30%, transparent 70%, rgba(0,0,0,0.7) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.image-preview:hover .image-overlay {
    opacity: 1;
}

.remove-image {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 40px;
    height: 40px;
    background: rgba(239, 68, 68, 0.9);
    border: none;
    border-radius: 50%;
    color: white;
    font-size: 20px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
}

.remove-image:hover {
    background: #ef4444;
    transform: scale(1.1);
}

.change-image {
    background: rgba(102, 126, 234, 0.9);
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

.change-image:hover {
    background: #667eea;
    transform: translateY(-2px);
}

/* Form Buttons */
.form-actions {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 40px;
}

.btn {
    padding: 16px 32px;
    border: none;
    border-radius: 20px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    min-width: 140px;
}

.btn-primary {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    box-shadow: 
        8px 8px 20px #d1d9e6,
        -8px -8px 20px #ffffff;
}

.btn-secondary {
    background: #f7fafc;
    color: #4a5568;
    box-shadow: 
        8px 8px 20px #d1d9e6,
        -8px -8px 20px #ffffff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 
        12px 12px 25px #d1d9e6,
        -12px -12px 25px #ffffff;
}

.btn:active {
    transform: translateY(0);
    box-shadow: 
        4px 4px 10px #d1d9e6,
        -4px -4px 10px #ffffff;
}

.btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.6s;
}

.btn:hover::before {
    left: 100%;
}

/* Loading State */
.btn.loading {
    pointer-events: none;
    opacity: 0.7;
}

.loading-spinner {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 2px solid rgba(255,255,255,0.3);
    border-top: 2px solid white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin-right: 8px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Progress Bar */
.upload-progress {
    display: none;
    width: 100%;
    height: 8px;
    background: #e2e8f0;
    border-radius: 4px;
    overflow: hidden;
    margin-top: 20px;
    box-shadow: 
        inset 2px 2px 5px #d1d9e6,
        inset -2px -2px 5px #ffffff;
}

.progress-bar {
    height: 100%;
    background: linear-gradient(90deg, #667eea, #764ba2);
    border-radius: 4px;
    transition: width 0.3s ease;
    width: 0%;
}

/* Error States */
.error-message {
    color: #e53e3e;
    font-size: 14px;
    margin-top: 8px;
    display: none;
    animation: shake 0.5s ease-in-out;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    75% { transform: translateX(5px); }
}

.form-group.error .form-input,
.form-group.error .form-textarea,
.form-group.error .drag-drop-zone {
    box-shadow: 
        inset 8px 8px 20px #f8d7da,
        inset -8px -8px 20px #ffffff,
        0 0 0 3px rgba(229, 62, 62, 0.1);
}

/* Mobile Responsive */
@media (max-width: 767px) {
    .main-content {
        padding: 10px;
    }
    
    .form-container {
        padding: 20px;
        border-radius: 20px;
    }

    .form-actions {
        flex-direction: column;
        align-items: stretch;
    }

    .btn {
        width: 100%;
        margin-bottom: 10px;
    }

    .drag-drop-zone {
        min-height: 200px;
    }

    .upload-icon {
        width: 60px;
        height: 60px;
        font-size: 24px;
    }
}

/* Success Animation */
@keyframes successPulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.success-animation {
    animation: successPulse 0.6s ease-in-out;
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

.drag-drop-zone:focus-within {
    outline: 2px solid #667eea;
    outline-offset: 2px;
}
</style>

<div class="main-content">
    <div class="form-container">
        <div class="form-header">
            <h1 class="form-title"><?= $this->fetch('title') ?: 'Nueva Categoría' ?></h1>
            <p class="form-subtitle">Completa los datos para crear una nueva categoría</p>
        </div>

        <?= $this->Form->create($blogCategory, [
            'enctype' => 'multipart/form-data',
            'id' => 'categoryForm',
            'class' => 'category-form'
        ]) ?>

        <div class="form-group">
            <label class="form-label" for="name">Nombre de la categoría</label>
            <?= $this->Form->control('name', [
                'label' => false,
                'class' => 'form-input',
                'placeholder' => 'Ej: Tecnología, Diseño Web, Marketing...',
                'required' => true,
                'id' => 'name'
            ]) ?>
            <div class="error-message" id="name-error"></div>
        </div>

        <div class="form-group">
            <label class="form-label" for="description">Descripción</label>
            <?= $this->Form->control('description', [
                'type' => 'textarea',
                'label' => false,
                'class' => 'form-textarea',
                'placeholder' => 'Describe brevemente de qué trata esta categoría...',
                'id' => 'description'
            ]) ?>
            <div class="error-message" id="description-error"></div>
        </div>

        <div class="form-group">
            <label class="form-label">Imagen de la categoría</label>
            
            <div class="drag-drop-zone" id="dragDropZone">
                <div class="upload-icon">📁</div>
                <div class="upload-text">
                    <div class="upload-title">Arrastra tu imagen aquí</div>
                    <div class="upload-subtitle">o haz clic para seleccionar (JPG, PNG, máx. 5MB)</div>
                </div>
                
                <?= $this->Form->control('image', [
                    'type' => 'file',
                    'label' => false,
                    'class' => 'file-input',
                    'accept' => 'image/jpeg,image/png,image/webp',
                    'id' => 'imageInput'
                ]) ?>
            </div>

            <div class="image-preview" id="imagePreview">
                <img src="" alt="Vista previa" class="preview-image" id="previewImg">
                <div class="image-overlay">
                    <button type="button" class="change-image" id="changeImage">Cambiar imagen</button>
                </div>
                <button type="button" class="remove-image" id="removeImage">×</button>
            </div>

            <div class="upload-progress" id="uploadProgress">
                <div class="progress-bar" id="progressBar"></div>
            </div>
            
            <div class="error-message" id="image-error"></div>
        </div>

        <div class="form-actions">
            <?= $this->Html->link('Cancelar', ['action' => 'index'], [
                'class' => 'btn btn-secondary'
            ]) ?>
            
            <?= $this->Form->button('Guardar Categoría', [
                'type' => 'submit',
                'class' => 'btn btn-primary',
                'id' => 'submitBtn'
            ]) ?>
        </div>

        <?= $this->Form->end() ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dragDropZone = document.getElementById('dragDropZone');
    const fileInput = document.getElementById('imageInput');
    const imagePreview = document.getElementById('imagePreview');
    const previewImg = document.getElementById('previewImg');
    const removeBtn = document.getElementById('removeImage');
    const changeBtn = document.getElementById('changeImage');
    const uploadProgress = document.getElementById('uploadProgress');
    const progressBar = document.getElementById('progressBar');
    const form = document.getElementById('categoryForm');
    const submitBtn = document.getElementById('submitBtn');

    // Drag and Drop functionality
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dragDropZone.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        dragDropZone.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dragDropZone.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
        dragDropZone.classList.add('drag-over');
    }

    function unhighlight(e) {
        dragDropZone.classList.remove('drag-over');
    }

    dragDropZone.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        handleFiles(files);
    }

    // File input change
    fileInput.addEventListener('change', function(e) {
        handleFiles(e.target.files);
    });

    // Click to open file dialog
    dragDropZone.addEventListener('click', function() {
        if (!dragDropZone.classList.contains('has-file')) {
            fileInput.click();
        }
    });

    function handleFiles(files) {
        if (files.length > 0) {
            const file = files[0];
            
            // Validate file
            if (!validateFile(file)) {
                return;
            }

            // Show upload progress
            showUploadProgress();
            
            // Simulate upload progress
            simulateUpload(() => {
                displayImage(file);
                hideUploadProgress();
            });
        }
    }

    function validateFile(file) {
        const maxSize = 5 * 1024 * 1024; // 5MB
        const allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
        
        clearError('image-error');

        if (!allowedTypes.includes(file.type)) {
            showError('image-error', 'Por favor selecciona una imagen válida (JPG, PNG, WEBP)');
            return false;
        }

        if (file.size > maxSize) {
            showError('image-error', 'La imagen es muy grande. Máximo 5MB permitidos');
            return false;
        }

        return true;
    }

    function displayImage(file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            dragDropZone.style.display = 'none';
            imagePreview.style.display = 'block';
            dragDropZone.classList.add('has-file');
        };
        
        reader.readAsDataURL(file);
    }

    function showUploadProgress() {
        uploadProgress.style.display = 'block';
        progressBar.style.width = '0%';
    }

    function hideUploadProgress() {
        setTimeout(() => {
            uploadProgress.style.display = 'none';
            progressBar.style.width = '0%';
        }, 500);
    }

    function simulateUpload(callback) {
        let progress = 0;
        const interval = setInterval(() => {
            progress += Math.random() * 15;
            if (progress >= 100) {
                progress = 100;
                progressBar.style.width = progress + '%';
                clearInterval(interval);
                setTimeout(callback, 300);
            } else {
                progressBar.style.width = progress + '%';
            }
        }, 100);
    }

    // Remove image
    removeBtn.addEventListener('click', function() {
        fileInput.value = '';
        previewImg.src = '';
        imagePreview.style.display = 'none';
        dragDropZone.style.display = 'flex';
        dragDropZone.classList.remove('has-file');
        clearError('image-error');
    });

    // Change image
    changeBtn.addEventListener('click', function() {
        fileInput.click();
    });

    // Form validation
    form.addEventListener('submit', function(e) {
        if (!validateForm()) {
            e.preventDefault();
            return false;
        }

        // Show loading state
        submitBtn.classList.add('loading');
        submitBtn.innerHTML = '<span class="loading-spinner"></span>Guardando...';
    });

    function validateForm() {
        let isValid = true;
        
        // Validate name
        const name = document.getElementById('name').value.trim();
        if (!name) {
            showError('name-error', 'El nombre de la categoría es obligatorio');
            isValid = false;
        } else if (name.length < 2) {
            showError('name-error', 'El nombre debe tener al menos 2 caracteres');
            isValid = false;
        } else {
            clearError('name-error');
        }

        // Validate description
        const description = document.getElementById('description').value.trim();
        if (description && description.length > 500) {
            showError('description-error', 'La descripción no puede exceder los 500 caracteres');
            isValid = false;
        } else {
            clearError('description-error');
        }

        return isValid;
    }

    function showError(elementId, message) {
        const errorElement = document.getElementById(elementId);
        const formGroup = errorElement.closest('.form-group');
        
        errorElement.textContent = message;
        errorElement.style.display = 'block';
        formGroup.classList.add('error');
    }

    function clearError(elementId) {
        const errorElement = document.getElementById(elementId);
        const formGroup = errorElement.closest('.form-group');
        
        errorElement.style.display = 'none';
        formGroup.classList.remove('error');
    }

    // Real-time validation
    document.getElementById('name').addEventListener('input', function() {
        const value = this.value.trim();
        if (value && value.length >= 2) {
            clearError('name-error');
        }
    });

    document.getElementById('description').addEventListener('input', function() {
        const value = this.value.trim();
        if (value.length <= 500) {
            clearError('description-error');
        }
    });

    // Entrada animada del formulario
    setTimeout(() => {
        document.querySelector('.form-container').style.opacity = '1';
        document.querySelector('.form-container').style.transform = 'translateY(0)';
    }, 100);
});

// Prevenir el envío del formulario al arrastrar archivos sobre la página
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    document.addEventListener(eventName, function(e) {
        e.preventDefault();
        e.stopPropagation();
    }, false);
});
</script>
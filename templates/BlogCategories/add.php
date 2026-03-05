
<div class="main-content">
    <div class="form-container">
        <div class="form-header">
            <h1 class="form-title"><?= $this->fetch('title') ?: 'Nueva Categoría' ?></h1>
            <p class="form-subtitle">Ej: Personajes, Paisajes, Concept Art</p>
        </div>

        <?= $this->Form->create($blogCategory, [
            'enctype' => 'multipart/form-data',
            'id' => 'categoryForm',
            'class' => 'category-form'
        ]) ?>

        <div class="form-group">
            <label class="form-label" for="name">Nombre</label>
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
            <label class="form-label">Imagen</label>
            
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
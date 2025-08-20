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

.author-form-container {
    max-width: 900px;
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

.author-form-container::before {
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

/* Form Grid Layout */
.form-grid {
    display: grid;
    gap: 24px;
    grid-template-columns: 1fr;
}

@media (min-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr 1fr;
    }
    
    .full-width {
        grid-column: 1 / -1;
    }
}

.form-group {
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

/* Social Media Icons */
.social-input-group {
    position: relative;
}

.social-icon {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    z-index: 1;
}

.form-input.with-icon {
    padding-left: 55px;
}

.facebook-icon {
    color: #1877f2;
}

.instagram-icon {
    background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Drag & Drop Zone for Profile Picture */
.profile-upload-section {
    text-align: center;
}

.drag-drop-zone {
    position: relative;
    width: 100%;
    min-height: 280px;
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

/* Profile Image Preview */
.profile-preview {
    position: relative;
    display: none;
    max-width: 250px;
    margin: 0 auto;
    border-radius: 20%;
    overflow: hidden;
    box-shadow: 
        12px 12px 30px #d1d9e6,
        -12px -12px 30px #ffffff;
}

.preview-image {
    width: 100%;
    height: 250px;
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

.profile-preview:hover .image-overlay {
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

/* Password Security Indicator */
.password-group {
    position: relative;
}

.password-strength {
    display: flex;
    gap: 4px;
    margin-top: 8px;
}

.strength-bar {
    flex: 1;
    height: 4px;
    background: #e2e8f0;
    border-radius: 2px;
    transition: background-color 0.3s ease;
}

.strength-bar.active {
    background: #48bb78;
}

.strength-bar.weak {
    background: #f56565;
}

.strength-bar.medium {
    background: #ed8936;
}

.strength-bar.strong {
    background: #48bb78;
}

.password-hint {
    font-size: 12px;
    color: #718096;
    margin-top: 4px;
}

/* Submit Button */
.submit-section {
    grid-column: 1 / -1;
    margin-top: 20px;
}

.btn-submit {
    width: 100%;
    padding: 18px 32px;
    border: none;
    border-radius: 20px;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    box-shadow: 
        8px 8px 20px #d1d9e6,
        -8px -8px 20px #ffffff;
}

.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 
        12px 12px 25px #d1d9e6,
        -12px -12px 25px #ffffff;
}

.btn-submit:active {
    transform: translateY(0);
    box-shadow: 
        4px 4px 10px #d1d9e6,
        -4px -4px 10px #ffffff;
}

.btn-submit::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.6s;
}

.btn-submit:hover::before {
    left: 100%;
}

/* Loading State */
.btn-submit.loading {
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

/* Success State */
.form-group.success .form-input,
.form-group.success .form-textarea {
    box-shadow: 
        inset 8px 8px 20px #d4edda,
        inset -8px -8px 20px #ffffff,
        0 0 0 3px rgba(72, 187, 120, 0.1);
}

/* Mobile Responsive */
@media (max-width: 767px) {
    .main-content {
        padding: 10px;
    }
    
    .author-form-container {
        padding: 20px;
        border-radius: 20px;
    }

    .drag-drop-zone {
        min-height: 200px;
    }

    .upload-icon {
        width: 60px;
        height: 60px;
        font-size: 24px;
    }

    .preview-image {
        height: 200px;
    }
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

/* Form animation entrance */
.author-form-container {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.author-form-container.loaded {
    opacity: 1;
    transform: translateY(0);
}
</style>

<div class="main-content">
    <div class="author-form-container">
        <div class="form-header">
            <h1 class="form-title">Registro de Autor</h1>
            <p class="form-subtitle">Agrega tu información para comenzar a escribir post maravillosos y todo el 🌍 los pueda ver</p>
        </div>

        <?= $this->Form->create(null, [
            'type' => 'file',
            'id' => 'authorForm',
            'class' => 'author-registration-form'
        ]) ?>

        <div class="form-grid">
            <!-- Nombre completo -->
            <div class="form-group">
                <label class="form-label" for="name">Nombre completo</label>
                <?= $this->Form->control('name', [
                    'label' => false,
                    'class' => 'form-input',
                    'placeholder' => 'Tu nombre completo',
                    'required' => true,
                    'id' => 'name'
                ]) ?>
                <div class="error-message" id="name-error"></div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label class="form-label" for="email">Correo electrónico</label>
                <?= $this->Form->control('email', [
                    'type' => 'email',
                    'label' => false,
                    'class' => 'form-input',
                    'placeholder' => 'será tu usuario de acceso',
                    'required' => true,
                    'id' => 'email'
                ]) ?>
                <div class="error-message" id="email-error"></div>
            </div>

            <!-- Biografía -->
            <div class="form-group full-width">
                <label class="form-label" for="bio">Biografía</label>
                <?= $this->Form->control('bio', [
                    'type' => 'textarea',
                    'label' => false,
                    'class' => 'form-textarea',
                    'placeholder' => 'Cuéntanos sobre ti, tu experiencia y lo que te apasiona escribir...',
                    'id' => 'bio'
                ]) ?>
                <div class="error-message" id="bio-error"></div>
            </div>

            <!-- Facebook -->
            <div class="form-group">
                <label class="form-label" for="facebook">Facebook</label>
                <div class="social-input-group">
                    <span class="social-icon facebook-icon">📘</span>
                    <?= $this->Form->control('facebook', [
                        'label' => false,
                        'class' => 'form-input with-icon',
                        'placeholder' => 'facebook.com/tuperfil',
                        'id' => 'facebook'
                    ]) ?>
                </div>
                <div class="error-message" id="facebook-error"></div>
            </div>

            <!-- Instagram -->
            <div class="form-group">
                <label class="form-label" for="instagram">Instagram</label>
                <div class="social-input-group">
                    <span class="social-icon instagram-icon">📷</span>
                    <?= $this->Form->control('instagram', [
                        'label' => false,
                        'class' => 'form-input with-icon',
                        'placeholder' => 'instagram.com/tuperfil',
                        'id' => 'instagram'
                    ]) ?>
                </div>
                <div class="error-message" id="instagram-error"></div>
            </div>

            <!-- Foto de perfil -->
            <div class="form-group full-width profile-upload-section">
                <label class="form-label">Foto de perfil</label>
                
                <div class="drag-drop-zone" id="dragDropZone">
                    <div class="upload-icon">👤</div>
                    <div class="upload-text">
                        <div class="upload-title">Arrastra tu foto aquí</div>
                        <div class="upload-subtitle">o haz clic para seleccionar (JPG, PNG, máx. 5MB)</div>
                    </div>
                    
                    <?= $this->Form->control('img', [
                        'type' => 'file',
                        'label' => false,
                        'class' => 'file-input',
                        'accept' => 'image/jpeg,image/png,image/webp',
                        'id' => 'imageInput'
                    ]) ?>
                </div>

                <div class="profile-preview" id="profilePreview">
                    <img src="" alt="Vista previa del perfil" class="preview-image" id="previewImg">
                    <div class="image-overlay">
                        <button type="button" class="change-image" id="changeImage">Cambiar foto</button>
                    </div>
                    <button type="button" class="remove-image" id="removeImage">×</button>
                </div>
                
                <div class="error-message" id="image-error"></div>
            </div>

            <!-- Contraseña -->
            <div class="form-group full-width password-group">
                <label class="form-label" for="password">Contraseña de acceso</label>
                <?= $this->Form->control('password', [
                    'type' => 'password',
                    'label' => false,
                    'class' => 'form-input',
                    'placeholder' => 'Crea una contraseña segura',
                    'required' => true,
                    'id' => 'password'
                ]) ?>
                <div class="password-strength" id="passwordStrength">
                    <div class="strength-bar"></div>
                    <div class="strength-bar"></div>
                    <div class="strength-bar"></div>
                    <div class="strength-bar"></div>
                </div>
                <div class="password-hint" id="passwordHint">
                    Mínimo 8 caracteres, incluye letras, números y símbolos
                </div>
                <div class="error-message" id="password-error"></div>
            </div>

            <!-- Botón de envío -->
            <div class="submit-section">
                <?= $this->Form->button('Registrarme', [
                    'type' => 'submit',
                    'class' => 'btn-submit',
                    'id' => 'submitBtn'
                ]) ?>
            </div>
        </div>

        <?= $this->Form->end() ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dragDropZone = document.getElementById('dragDropZone');
    const fileInput = document.getElementById('imageInput');
    const profilePreview = document.getElementById('profilePreview');
    const previewImg = document.getElementById('previewImg');
    const removeBtn = document.getElementById('removeImage');
    const changeBtn = document.getElementById('changeImage');
    const form = document.getElementById('authorForm');
    const submitBtn = document.getElementById('submitBtn');
    const passwordInput = document.getElementById('password');
    const passwordStrength = document.getElementById('passwordStrength');
    const passwordHint = document.getElementById('passwordHint');

    // Animación de entrada del formulario
    setTimeout(() => {
        document.querySelector('.author-form-container').classList.add('loaded');
    }, 100);

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
            
            if (!validateFile(file)) {
                return;
            }

            displayProfileImage(file);
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

    function displayProfileImage(file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            dragDropZone.style.display = 'none';
            profilePreview.style.display = 'block';
            dragDropZone.classList.add('has-file');
        };
        
        reader.readAsDataURL(file);
    }

    // Remove image
    removeBtn.addEventListener('click', function() {
        fileInput.value = '';
        previewImg.src = '';
        profilePreview.style.display = 'none';
        dragDropZone.style.display = 'flex';
        dragDropZone.classList.remove('has-file');
        clearError('image-error');
    });

    // Change image
    changeBtn.addEventListener('click', function() {
        fileInput.click();
    });

    // Password strength checker
    passwordInput.addEventListener('input', function() {
        const password = this.value;
        const strength = calculatePasswordStrength(password);
        updatePasswordStrength(strength);
    });

    function calculatePasswordStrength(password) {
        let score = 0;
        
        if (password.length >= 8) score++;
        if (/[a-z]/.test(password)) score++;
        if (/[A-Z]/.test(password)) score++;
        if (/[0-9]/.test(password)) score++;
        if (/[^A-Za-z0-9]/.test(password)) score++;
        
        return Math.min(score, 4);
    }

    function updatePasswordStrength(strength) {
        const bars = passwordStrength.querySelectorAll('.strength-bar');
        
        bars.forEach((bar, index) => {
            bar.classList.remove('active', 'weak', 'medium', 'strong');
            
            if (index < strength) {
                bar.classList.add('active');
                
                if (strength <= 2) {
                    bar.classList.add('weak');
                } else if (strength === 3) {
                    bar.classList.add('medium');
                } else {
                    bar.classList.add('strong');
                }
            }
        });

        // Update hint
        const hints = [
            'Muy débil - Añade más caracteres',
            'Débil - Incluye números y símbolos',
            'Regular - Añade mayúsculas',
            'Buena - ¡Casi perfecta!',
            'Excelente - ¡Contraseña muy segura!'
        ];
        
        passwordHint.textContent = hints[strength] || hints[0];
    }

    // Form validation
    form.addEventListener('submit', function(e) {
        if (!validateForm()) {
            e.preventDefault();
            return false;
        }

        // Show loading state
        submitBtn.classList.add('loading');
        submitBtn.innerHTML = '<span class="loading-spinner"></span>Registrando...';
    });

    function validateForm() {
        let isValid = true;
        
        // Validate name
        const name = document.getElementById('name').value.trim();
        if (!name) {
            showError('name-error', 'El nombre completo es obligatorio');
            isValid = false;
        } else if (name.length < 2) {
            showError('name-error', 'El nombre debe tener al menos 2 caracteres');
            isValid = false;
        } else {
            clearError('name-error');
            setSuccess('name');
        }

        // Validate email
        const email = document.getElementById('email').value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email) {
            showError('email-error', 'El correo electrónico es obligatorio');
            isValid = false;
        } else if (!emailRegex.test(email)) {
            showError('email-error', 'Por favor ingresa un correo electrónico válido');
            isValid = false;
        } else {
            clearError('email-error');
            setSuccess('email');
        }

        // Validate password
        const password = document.getElementById('password').value;
        if (!password) {
            showError('password-error', 'La contraseña es obligatoria');
            isValid = false;
        } else if (password.length < 8) {
            showError('password-error', 'La contraseña debe tener al menos 8 caracteres');
            isValid = false;
        } else {
            clearError('password-error');
            setSuccess('password');
        }

        return isValid;
    }

    function showError(elementId, message) {
        const errorElement = document.getElementById(elementId);
        const formGroup = errorElement.closest('.form-group');
        
        errorElement.textContent = message;
        errorElement.style.display = 'block';
        formGroup.classList.add('error');
        formGroup.classList.remove('success');
    }

    function clearError(elementId) {
        const errorElement = document.getElementById(elementId);
        const formGroup = errorElement.closest('.form-group');
        
        errorElement.style.display = 'none';
        formGroup.classList.remove('error');
    }

    function setSuccess(fieldId) {
        const field = document.getElementById(fieldId);
        const formGroup = field.closest('.form-group');
        formGroup.classList.add('success');
        formGroup.classList.remove('error');
    }

    // Real-time validation
    document.getElementById('name').addEventListener('input', function() {
        const value = this.value.trim();
        if (value && value.length >= 2) {
            clearError('name-error');
            setSuccess('name');
        } else if (value.length > 0) {
            clearError('name-error');
        }
    });

    document.getElementById('email').addEventListener('input', function() {
        const value = this.value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (value && emailRegex.test(value)) {
            clearError('email-error');
            setSuccess('email');
        } else if (value.length > 0) {
            clearError('email-error');
        }
    });

    document.getElementById('password').addEventListener('input', function() {
        const value = this.value;
        if (value && value.length >= 8) {
            clearError('password-error');
            setSuccess('password');
        } else if (value.length > 0) {
            clearError('password-error');
        }
    });

    // Social media URL formatting
    document.getElementById('facebook').addEventListener('blur', function() {
        let value = this.value.trim();
        if (value && !value.includes('facebook.com') && !value.startsWith('http')) {
            this.value = `https://facebook.com/${value}`;
        }
    });

    document.getElementById('instagram').addEventListener('blur', function() {
        let value = this.value.trim();
        if (value && !value.includes('instagram.com') && !value.startsWith('http')) {
            this.value = `https://instagram.com/${value}`;
        }
    });

    // Character counter for bio
    const bioTextarea = document.getElementById('bio');
    const bioGroup = bioTextarea.closest('.form-group');
    
    // Create character counter
    const charCounter = document.createElement('div');
    charCounter.style.cssText = `
        font-size: 12px;
        color: #718096;
        text-align: right;
        margin-top: 4px;
    `;
    bioGroup.appendChild(charCounter);

    bioTextarea.addEventListener('input', function() {
        const length = this.value.length;
        const maxLength = 500;
        charCounter.textContent = `${length}/${maxLength} caracteres`;
        
        if (length > maxLength) {
            charCounter.style.color = '#e53e3e';
            showError('bio-error', 'La biografía no puede exceder los 500 caracteres');
        } else {
            charCounter.style.color = '#718096';
            clearError('bio-error');
        }
    });

    // Trigger initial character count
    bioTextarea.dispatchEvent(new Event('input'));

    // Form field animations
    const inputs = document.querySelectorAll('.form-input, .form-textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });

        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });

    // Auto-resize textarea
    bioTextarea.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    });
});

// Prevenir el envío del formulario al arrastrar archivos sobre la página
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    document.addEventListener(eventName, function(e) {
        e.preventDefault();
        e.stopPropagation();
    }, false);
});

// Función para formatear URLs de redes sociales
function formatSocialUrl(url, platform) {
    if (!url) return '';
    
    // Si ya es una URL completa, retornarla
    if (url.startsWith('http://') || url.startsWith('https://')) {
        return url;
    }
    
    // Si contiene el dominio, agregar protocolo
    if (url.includes(`${platform}.com`)) {
        return `https://${url}`;
    }
    
    // Si es solo el username, crear URL completa
    const username = url.replace('@', '');
    return `https://${platform}.com/${username}`;
}

// Función para validar formato de imagen
function isValidImageFile(file) {
    const validTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
    return validTypes.includes(file.type);
}

// Función para redimensionar imagen si es muy grande
function resizeImage(file, maxWidth = 800, maxHeight = 600, quality = 0.8) {
    return new Promise((resolve) => {
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        const img = new Image();
        
        img.onload = function() {
            // Calcular nuevas dimensiones manteniendo aspecto
            let { width, height } = img;
            
            if (width > height) {
                if (width > maxWidth) {
                    height *= maxWidth / width;
                    width = maxWidth;
                }
            } else {
                if (height > maxHeight) {
                    width *= maxHeight / height;
                    height = maxHeight;
                }
            }
            
            canvas.width = width;
            canvas.height = height;
            
            // Dibujar imagen redimensionada
            ctx.drawImage(img, 0, 0, width, height);
            
            // Convertir a blob
            canvas.toBlob(resolve, file.type, quality);
        };
        
        img.src = URL.createObjectURL(file);
    });
}
</script>
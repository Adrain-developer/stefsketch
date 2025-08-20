<style>
        .login-container {
            background: #ffffffff;
            padding: 2.5rem;
            border-radius: 25px;
            width: 100%;
            max-width: 420px;
            transition: all 0.3s ease;
            margin-top: 60px;
        }

        .login-container:hover {
            box-shadow: 
                25px 25px 70px #c8d3e0,
                -25px -25px 70px #ffffff;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 2rem;
            font-weight: 300;
            font-size: 2rem;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #34495e;
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .input-container {
            position: relative;
        }

        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 100%;
            padding: 1rem 3rem 1rem 1.2rem;
            border: none;
            border-radius: 15px;
            background: #f0f4f8;
            box-shadow: 
                inset 8px 8px 16px #d1d9e6,
                inset -8px -8px 16px #ffffff;
            font-size: 1rem;
            color: #2c3e50;
            transition: all 0.3s ease;
            outline: none;
            box-sizing: border-box;
        }

        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="text"]:focus {
            box-shadow: 
                inset 12px 12px 20px #c8d3e0,
                inset -12px -12px 20px #ffffff;
            transform: scale(1.02);
        }

        input::placeholder {
            color: #95a5a6;
            font-style: italic;
        }

        .input-icon {
            position: absolute;
            right: 45px;
            top: 50%;
            transform: translateY(-50%);
            color: #7f8c8d;
            font-size: 1.1rem;
            pointer-events: none;
            z-index: 1;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #7f8c8d;
            font-size: 1.2rem;
            padding: 5px;
            border-radius: 50%;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .password-toggle:hover {
            background: rgba(52, 73, 94, 0.1);
            color: #34495e;
        }

        .password-toggle:focus {
            outline: 2px solid #3498db;
            outline-offset: 2px;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            gap: 10px;
        }

        .custom-checkbox {
            position: relative;
            display: inline-block;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            width: 20px;
            height: 20px;
        }

        .checkbox-label {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            color: #34495e;
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: none;
            letter-spacing: normal;
            margin-bottom: 0;
        }

        .checkbox-label::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border-radius: 6px;
            background: #f0f4f8;
            box-shadow: 
                inset 4px 4px 8px #d1d9e6,
                inset -4px -4px 8px #ffffff;
            transition: all 0.3s ease;
        }

        .checkbox-label::after {
            content: '✓';
            position: absolute;
            left: 4px;
            top: 50%;
            transform: translateY(-50%);
            color: #3498db;
            font-size: 14px;
            font-weight: bold;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .custom-checkbox input[type="checkbox"]:checked + .checkbox-label::before {
            box-shadow: 
                inset 6px 6px 12px #c8d3e0,
                inset -6px -6px 12px #ffffff;
        }

        .custom-checkbox input[type="checkbox"]:checked + .checkbox-label::after {
            opacity: 1;
        }

        .btn-submit {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 
                8px 8px 16px #d1d9e6,
                -8px -8px 16px #ffffff;
            margin-top: 1rem;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transform: translateY(-2px);
            box-shadow: 
                12px 12px 20px #c8d3e0,
                -12px -12px 20px #ffffff;
        }

        .btn-submit:active {
            transform: translateY(0);
            box-shadow: 
                inset 4px 4px 8px #c8d3e0,
                inset -4px -4px 8px #ffffff;
        }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .forgot-password {
            text-align: center;
            margin-top: 1.5rem;
        }

        .forgot-password a {
            color: #3498db;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #2980b9;
        }

        /* Loading animation */
        .btn-submit.loading {
            position: relative;
            color: transparent;
        }

        .btn-submit.loading::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid #ffffff;
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Error message styles */
        .error-message {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
            padding: 12px 16px;
            border-radius: 12px;
            margin-top: 10px;
            font-size: 0.85rem;
            box-shadow: 
                6px 6px 12px rgba(231, 76, 60, 0.3),
                -6px -6px 12px rgba(255, 255, 255, 0.8);
            animation: errorSlide 0.4s ease-out;
            position: relative;
            overflow: hidden;
        }

        .error-message::before {
            content: '⚠️';
            margin-right: 8px;
        }

        .error-message::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: errorShimmer 2s infinite;
        }

        @keyframes errorSlide {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes errorShimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        .success-message {
            background: linear-gradient(135deg, #27ae60, #229954);
            color: white;
            padding: 12px 16px;
            border-radius: 12px;
            margin-top: 10px;
            font-size: 0.85rem;
            box-shadow: 
                6px 6px 12px rgba(39, 174, 96, 0.3),
                -6px -6px 12px rgba(255, 255, 255, 0.8);
            animation: successSlide 0.4s ease-out;
        }

        .success-message::before {
            content: '✅';
            margin-right: 8px;
        }

        @keyframes successSlide {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .input-error {
            box-shadow: 
                inset 8px 8px 16px #f1c2c2,
                inset -8px -8px 16px #ffffff !important;
            border: 2px solid #e74c3c;
        }

        .form-validation {
            margin-top: 1rem;
        }

        /* Password strength indicator */
        .password-strength {
            margin-top: 5px;
            height: 4px;
            border-radius: 2px;
            background: #ecf0f1;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .password-strength-bar {
            height: 100%;
            width: 0%;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .strength-weak { background: #e74c3c; width: 25%; }
        .strength-fair { background: #f39c12; width: 50%; }
        .strength-good { background: #f1c40f; width: 75%; }
        .strength-strong { background: #27ae60; width: 100%; }

        .password-strength-text {
            font-size: 0.75rem;
            margin-top: 3px;
            color: #7f8c8d;
        }

        /* Flash message styles */
        .flash-message {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            max-width: 350px;
        }

        .flash-message .message {
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 10px;
            box-shadow: 
                8px 8px 16px rgba(0,0,0,0.1),
                -8px -8px 16px rgba(255,255,255,0.8);
            animation: flashSlide 0.5s ease-out;
        }

        .flash-message .message.success {
            background: linear-gradient(135deg, #27ae60, #229954);
            color: white;
        }

        .flash-message .message.error {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
        }

        @keyframes flashSlide {
            from {
                opacity: 0;
                transform: translateX(100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
           
            h2 {
                font-size: 1.8rem;
                margin-bottom: 1.5rem;
            }

            input[type="email"],
            input[type="password"],
            input[type="text"] {
                padding: 0.9rem 2.8rem 0.9rem 1rem;
                font-size: 0.95rem;
            }

            .btn-submit {
                padding: 0.9rem;
                font-size: 1rem;
            }

            .input-icon {
                right: 20px;
                font-size: 1rem;
            }

            .password-toggle {
                right: 12px;
                font-size: 1.1rem;
            }

            .flash-message {
                top: 10px;
                right: 10px;
                left: 10px;
                max-width: none;
            }
        }

        @media (max-width: 320px) {
           
            h2 {
                font-size: 1.6rem;
            }

            input[type="email"],
            input[type="password"],
            input[type="text"] {
                padding: 0.8rem 2.5rem 0.8rem 0.9rem;
            }
        }

        /* Accessibility improvements */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        /* Focus visible for better accessibility */
        input:focus-visible,
        button:focus-visible,
        a:focus-visible {
            outline: 2px solid #3498db;
            outline-offset: 2px;
        }

        /* High contrast mode support */
        @media (prefers-contrast: high) {
            .login-container {
                border: 2px solid #000;
            }
            
            input[type="email"],
            input[type="password"],
            input[type="text"] {
                border: 1px solid #000;
            }
        }
    </style>

 <div class="login-container">
    <h2>Iniciar sesión</h2>

    <?= $this->Form->create(null, ['id' => 'loginForm']) ?>

    <div class="form-group">
        <?= $this->Form->label('email', 'Correo electrónico') ?>
        <div class="input-container">
            <?= $this->Form->control('email', [
                'label' => false,
                'type' => 'email',
                'placeholder' => 'ejemplo@correo.com',
                'required' => true,
                'id' => 'email-input',
                'autocomplete' => 'email'
            ]) ?>
            <span class="input-icon">📧</span>
        </div>
        <div id="email-error" class="form-validation"></div>
    </div>

    <div class="form-group">
        <?= $this->Form->label('password', 'Contraseña') ?>
        <div class="input-container">
            <?= $this->Form->control('password', [
                'label' => false,
                'type' => 'password',
                'placeholder' => 'Tu contraseña',
                'required' => true,
                'id' => 'password-input',
                'autocomplete' => 'current-password'
            ]) ?>
            <!--<span class="input-icon">🔒</span>-->
            <button type="button" class="password-toggle" id="password-toggle" aria-label="Mostrar contraseña">
                👁️
            </button>
        </div>
        <div class="password-strength" id="password-strength" style="display: none;">
            <div class="password-strength-bar" id="password-strength-bar"></div>
        </div>
        <div class="password-strength-text" id="password-strength-text"></div>
        <div id="password-error" class="form-validation"></div>
    </div>

    <div class="checkbox-container">
        <div class="custom-checkbox">
            <?= $this->Form->control('remember_me', [
                'type' => 'checkbox',
                'label' => false,
                'id' => 'remember-checkbox'
            ]) ?>
            <label for="remember-checkbox" class="checkbox-label">Recordar contraseña</label>
        </div>
    </div>

    <?= $this->Form->button('Ingresar', [
        'class' => 'btn-submit',
        'id' => 'submit-btn',
        'type' => 'submit'
    ]) ?>

    <div class="forgot-password">
        <a href="#" onclick="showPasswordRecovery()" tabindex="0">¿Olvidaste tu contraseña?</a>
    </div>

    <?= $this->Form->end() ?>
</div>

<?php if ($this->request->getSession()->check('Flash.flash')): ?>
    <div class="flash-message">
        <?= $this->Flash->render() ?>
    </div>
<?php endif; ?>

<script>
    // DOM elements
    const emailInput = document.getElementById('email-input');
    const passwordInput = document.getElementById('password-input');
    const passwordToggle = document.getElementById('password-toggle');
    const submitBtn = document.getElementById('submit-btn');
    const loginForm = document.getElementById('loginForm');


    // Input focus effects
    const inputs = document.querySelectorAll('input[type="email"], input[type="password"], input[type="text"]');
    inputs.forEach(input => {
        input.addEventListener('focus', function () {
            this.parentElement.style.transform = 'scale(1.02)';
        });

        input.addEventListener('blur', function () {
            this.parentElement.style.transform = 'scale(1)';
        });
    });

    // Password toggle functionality
    let passwordVisible = false;
    passwordToggle.addEventListener('click', function() {
        passwordVisible = !passwordVisible;
        passwordInput.type = passwordVisible ? 'text' : 'password';
        this.textContent = passwordVisible ? '🙈' : '👁️';
        this.setAttribute('aria-label', passwordVisible ? 'Ocultar contraseña' : 'Mostrar contraseña');
    });

    // Keyboard support for password toggle
    passwordToggle.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            this.click();
        }
    });

    // Form validation
    function showError(inputId, message) {
        const errorDiv = document.getElementById(inputId + '-error');
        const input = document.getElementById(inputId + '-input');
        
        errorDiv.innerHTML = `<div class="error-message">${message}</div>`;
        input.classList.add('input-error');
        
        // Remove error after 5 seconds
        setTimeout(() => {
            hideError(inputId);
        }, 5000);
    }

    function hideError(inputId) {
        const errorDiv = document.getElementById(inputId + '-error');
        const input = document.getElementById(inputId + '-input');
        
        errorDiv.innerHTML = '';
        input.classList.remove('input-error');
    }

    function showSuccess(message) {
        const emailErrorDiv = document.getElementById('email-error');
        emailErrorDiv.innerHTML = `<div class="success-message">${message}</div>`;
        
        setTimeout(() => {
            emailErrorDiv.innerHTML = '';
        }, 3000);
    }

    // Email validation
    emailInput.addEventListener('blur', function() {
        const email = this.value.trim();
        if (email && !isValidEmail(email)) {
            showError('email', 'Por favor, ingresa un correo electrónico válido');
        } else if (email) {
            hideError('email');
        }
    });

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Password validation
    passwordInput.addEventListener('blur', function() {
        const password = this.value;
        if (password && password.length < 6) {
            showError('password', 'La contraseña debe tener al menos 6 caracteres');
        } else if (password) {
            hideError('password');
        }
    });

    // Form submission
    loginForm.addEventListener('submit', function(e) {
        let hasErrors = false;
        
        // Validate email
        const email = emailInput.value.trim();
        if (!email) {
            showError('email', 'El correo electrónico es requerido');
            hasErrors = true;
        } else if (!isValidEmail(email)) {
            showError('email', 'Por favor, ingresa un correo electrónico válido');
            hasErrors = true;
        }
        
        // Validate password
        const password = passwordInput.value;
        if (!password) {
            showError('password', 'La contraseña es requerida');
            hasErrors = true;
        } else if (password.length < 6) {
            showError('password', 'La contraseña debe tener al menos 6 caracteres');
            hasErrors = true;
        }
        
        if (hasErrors) {
            e.preventDefault();
            return false;
        }
        
        // Show loading state
        submitBtn.classList.add('loading');
        submitBtn.disabled = true;
        
    });

    // Clear errors when user starts typing
    emailInput.addEventListener('input', () => hideError('email'));
    passwordInput.addEventListener('input', () => hideError('password'));

    // Password recovery function
    function showPasswordRecovery() {
        // You can replace this with a modal or redirect to recovery page
        const email = emailInput.value.trim();
        if (email && isValidEmail(email)) {
            if (confirm(`¿Enviar instrucciones de recuperación a ${email}?`)) {
                showSuccess('Se han enviado las instrucciones de recuperación a tu correo');
                // Here you would typically send an AJAX request to your recovery endpoint
                // fetch('/users/forgot-password', { method: 'POST', body: JSON.stringify({email}) })
            }
        } else {
            alert('Por favor, ingresa primero un correo electrónico válido para recuperar tu contraseña.');
            emailInput.focus();
        }
    }

    // Auto-hide flash messages
    setTimeout(() => {
        const flashMessages = document.querySelectorAll('.flash-message .message');
        flashMessages.forEach(message => {
            message.style.opacity = '0';
            message.style.transform = 'translateX(100%)';
            setTimeout(() => message.remove(), 300);
        });
    }, 5000);

    // Remember me functionality (save email in memory storage)
    const rememberCheckbox = document.getElementById('remember-checkbox');
    
    // Memory storage for email (since localStorage isn't available)
    let rememberedEmail = '';
    
    // Load saved email on page load (you'll need to pass this from the controller)
    const savedEmailFromServer = '<?= $this->request->getCookie("remembered_email") ?? "" ?>';
    if (savedEmailFromServer) {
        emailInput.value = savedEmailFromServer;
        rememberCheckbox.checked = true;
        rememberedEmail = savedEmailFromServer;
    }
    
    // Save/remove email based on checkbox
    rememberCheckbox.addEventListener('change', function() {
        if (this.checked && emailInput.value) {
            rememberedEmail = emailInput.value;
            // The actual saving will be handled by the server when form is submitted
        } else {
            rememberedEmail = '';
            // Create a hidden input to tell server to remove the cookie
            const removeRememberInput = document.createElement('input');
            removeRememberInput.type = 'hidden';
            removeRememberInput.name = 'remove_remember';
            removeRememberInput.value = '1';
            loginForm.appendChild(removeRememberInput);
        }
    });

    // Update remembered email when email changes
    emailInput.addEventListener('blur', function() {
        if (rememberCheckbox.checked && this.value) {
            rememberedEmail = this.value;
        }
    });

    // Accessibility: Enter key support for forgot password link
    document.querySelector('.forgot-password a').addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            showPasswordRecovery();
        }
    });
</script>
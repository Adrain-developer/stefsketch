<?php
$this->assign('title', 'Iniciar Sesión | Stefsketch Admin');
?>

<style>
/* =========================================================
   LOGIN ESPECÍFICO - FULL SCREEN CENTRADO
   ========================================================= */
body {
    background: radial-gradient(circle at 50% -20%, rgba(40, 235, 227, 0.08), #000000 60%) !important;
}

/* Ocultar elementos del layout base que no van en el login */
.admin-topbar, .global-back-button, .modern-footer {
    display: none !important; 
}

.login-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.login-card {
    width: 100%;
    max-width: 450px;
    padding: 50px 40px !important;
    animation: fadeInDown 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.8), 0 0 40px rgba(40, 235, 227, 0.05) !important;
    position: relative;
    overflow: hidden;
}

/* Brillo superior en la tarjeta de login */
.login-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, #28ebe3, transparent);
    animation: scanline 2s linear infinite;
}

.login-logo {
    max-width: 180px;
    margin: 0 auto 30px auto;
    display: block;
    filter: drop-shadow(0 0 15px rgba(255, 255, 255, 0.1));
}

/* Mensajes de error */
.message {
    padding: 15px;
    border-radius: 12px;
    margin-bottom: 25px;
    text-align: center;
    font-weight: 600;
    font-size: 14px;
    backdrop-filter: blur(5px);
}
.message.error {
    background: rgba(229, 62, 62, 0.15);
    color: #fc8181;
    border: 1px solid rgba(229, 62, 62, 0.3);
}

/* =========================================================
   ESTILOS DEL PASSWORD TOGGLE (Ojo)
   ========================================================= */
.password-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.password-wrapper .form-input {
    padding-right: 50px !important; /* Espacio para que el texto no pise el ícono */
}

.password-toggle {
    position: absolute;
    right: 15px;
    background: none;
    border: none;
    color: rgba(255, 255, 255, 0.5);
    cursor: pointer;
    font-size: 18px;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    height: 100%;
}

.password-toggle:hover, .password-toggle.active {
    color: #28ebe3;
    transform: scale(1.1);
}

.password-toggle:focus {
    outline: none;
}

@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-40px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes scanline {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

@media (max-width: 480px) {
    .login-card { padding: 40px 25px !important; }
}
</style>

<div class="login-wrapper">
    <div class="form-container login-card">
        
        <?= $this->Html->image('logoBlanco.png', ['alt' => 'StefSketch Logo', 'class' => 'login-logo']) ?>
        
        <h2 class="form-title" style="text-align: center; font-size: 28px; margin-bottom: 10px;">Acceso Admin</h2>
        <p class="form-subtitle" style="text-align: center; margin-bottom: 30px;">Ingresa tus credenciales para continuar</p>

        <?= $this->Flash->render() ?>

        <?= $this->Form->create() ?>
        
        <div style="margin-bottom: 20px;">
            <label class="form-label" style="font-size: 14px;"><i class="fas fa-envelope" style="color: #28ebe3; margin-right: 8px;"></i> Correo Electrónico</label>
            <?= $this->Form->control('email', [
                'label' => false,
                'class' => 'form-input',
                'placeholder' => 'admin@stefsketch.com',
                'required' => true,
                'autofocus' => true,
                'templates' => [
                    'inputContainer' => '{{content}}' // Evita que CakePHP envuelva el input en un div extra
                ]
            ]) ?>
        </div>

        <div style="margin-bottom: 30px;">
            <label class="form-label" style="font-size: 14px;"><i class="fas fa-lock" style="color: #28ebe3; margin-right: 8px;"></i> Contraseña</label>
            <div class="password-wrapper">
                <?= $this->Form->control('password', [
                    'label' => false,
                    'class' => 'form-input',
                    'placeholder' => '••••••••',
                    'required' => true,
                    'id' => 'passwordField',
                    'templates' => [
                        'inputContainer' => '{{content}}' // Mantiene la estructura limpia para el CSS relative/absolute
                    ]
                ]) ?>
                <button type="button" class="password-toggle" id="togglePassword" aria-label="Mostrar contraseña">
                    <i class="fas fa-eye" id="eyeIcon"></i>
                </button>
            </div>
        </div>

        <div style="text-align: center;">
            <?= $this->Form->button('Iniciar Sesión <i class="fas fa-sign-in-alt" style="margin-left: 8px;"></i>', [
                'class' => 'btn btn-primary',
                'style' => 'width: 100%; padding: 16px; font-size: 16px;',
                'escapeTitle' => false
            ]) ?>
        </div>
        
        <?= $this->Form->end() ?>
        
        <div style="text-align: center; margin-top: 25px;">
            <p style="color: rgba(255,255,255,0.3); font-size: 12px; margin: 0;">&copy; <?= date('Y') ?> Stefsketch. Sistema Seguro.</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const togglePasswordBtn = document.getElementById('togglePassword');
    const passwordField = document.getElementById('passwordField');
    const eyeIcon = document.getElementById('eyeIcon');

    if (togglePasswordBtn && passwordField) {
        togglePasswordBtn.addEventListener('click', function() {
            // Alternar el tipo de input
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            
            // Alternar el ícono y color
            if (type === 'text') {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
                togglePasswordBtn.classList.add('active'); // Se ilumina en Cyan
            } else {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
                togglePasswordBtn.classList.remove('active'); // Vuelve al gris translúcido
            }
        });
    }
});
</script>
<?php
use League\CommonMark\CommonMarkConverter;
use Cake\ORM\TableRegistry;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Routing\Router;


/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
$url = $_SERVER['REQUEST_URI'];
$cakeDescription = 'Stefsketch';
?>


<!DOCTYPE html>
<html lang="es">

<head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')) ?>

    <?= $this->fetch('meta') ?>


    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon', '.png', ['type'=>'image/png']) ?>
    <?= $this->Html->meta('og:type', 'article'); ?>
    <?= $this->Html->meta('og:site_name', 'Mi Evento App'); ?>
    <?= $this->Html->css(['bootstrap.min', 'base'.'.css?ver=26-08:001', 'css2.css', 'footer_blog'.'.css?ver=6']) ?>
    <?= $this->Html->css(['easymde.min.css']) ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css?v=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <?php
    $user = $this->request->getAttribute('identity');
    if ($user) {
        echo $this->Html->meta('user-id', $user->id);
    }
    ?>

</head>
<style>
.submenu,
.sub-submenu {
    list-style: none;
    padding-left: 20px;
    display: none;
}

.menu-item:hover>.submenu,
.submenu-item:hover>.sub-submenu {
    display: block;
}

.arrow {
    float: right;
    font-size: 0.8em;
}

.menu-item {
    position: relative;
}

.submenu {
    list-style: none;
    padding-left: 20px;
    display: none;
    position: static;
    /* Cambiar de absolute a static */
}

/* Mostrar submenu al hacer clic en lugar de hover */
.menu-item.active>.submenu,
.menu-item:hover>.submenu {
    display: block;
}

/* Evitar que se oculte al hacer scroll */
.menu-item:focus-within>.submenu {
    display: block;
}

.menu-title {
    cursor: pointer;
    user-select: none;
}
</style>

<body>

    <header>

        <!-- ... contenido existente del header ... -->

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Logo -->
                    <div class="logo">

                    </div>
                </div>
            </div>
        </div>
        <!-- Botón Menú -->
        <div class="hamburger-container">
            <!-- Botón hamburguesa -->
            <button class="hamburger-button" aria-label="Menú">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- Overlay del menú -->
            <div class="menu-overlay"></div>
            <!-- Panel del menú -->
            <div class="menu-panel">
                <div class="menu-header">
                    <h2>Menú</h2>
                    <button class="close-button" aria-label="Cerrar menú"></button>
                </div>
                <nav class="menu-nav">
                    <ul class="menu-list">
                        <!-- Home Global -->
                        <li class="menu-item">
                            <a href="/" style="color: #777777;">
                                <div class="menu-title">🏠 Inicio</div>
                            </a>
                        </li>

                        <?php
        // Detectar contexto: Home vs Evento_view
        $currentController = $this->request->getParam('controller');
        $currentAction = $this->request->getParam('action');
        $isHome = ($currentController === 'Blog' && $currentAction === 'index');
        $isEventoView = ($currentController === 'Blog' && $currentAction === 'eventoView');
        ?>

                        <?php if ($isHome): ?>
                        <!-- MENÚ HOME: Solo mostrar tipos de trabajo -->
                        <li class="menu-item active">
                            <div class="menu-title">
                                🎨 Tipos de Trabajo
                                <span class="arrow">▼</span>
                            </div>
                            <ul class="submenu">
                                <?php if (isset($allEventTypes)): ?>
                                <?php foreach ($allEventTypes as $eventType): ?>
                                <li>
                                    <a href="/portafolio/<?= h($eventType->eventoslug) ?>">
                                        <?= h($eventType->name) ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </li>

                        <?php elseif ($isEventoView && isset($eventType)): ?>
                        <!-- MENÚ EVENTO_VIEW: Mostrar categorías y tags del EventType actual -->
                        <li class="menu-item">
                            <div class="menu-title">
                                📂 Categorías de <?= h($eventType->name) ?>
                                <span class="arrow">▼</span>
                            </div>
                            <ul class="submenu">
                                <li><a href="/portafolio/<?= h($eventType->eventoslug) ?>/temas">📋 Ver todas</a></li>
                                <?php if (isset($blogCategories)): ?>
                                <?php $count = 0; $total = count($blogCategories); ?>
                                <?php foreach ($blogCategories as $category): ?>
                                <?php if ($count < 5): ?>
                                <li>
                                    <a
                                        href="/portafolio/<?= h($eventType->eventoslug) ?>/temas/<?= h($category->slug) ?>">
                                        <?= h($category->name) ?> (<?= $category->count ?? 0 ?>)
                                    </a>
                                </li>
                                <?php $count++; ?>
                                <?php endif; ?>
                                <?php endforeach; ?>

                                <?php if ($total > 5): ?>
                                <li style="border-top: 1px solid #eee; margin-top: 5px; padding-top: 5px;">
                                    <a href="/portafolio/<?= h($eventType->eventoslug) ?>/temas"
                                        style="font-style: italic; color: #007bff;">
                                        ➕ Ver todas las categorías (<?= $total ?> total)
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <div class="menu-title">
                                🏷️ Tags/Técnicas
                                <span class="arrow">▼</span>
                            </div>
                            <ul class="submenu">
                                <li><a href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas">🔖 Ver todas</a>
                                </li>
                                <?php if (isset($blogTags)): ?>
                                <?php $tagCount = 0; $totalTags = count($blogTags); ?>
                                <?php foreach ($blogTags as $tag): ?>
                                <?php if ($tagCount < 5): ?>
                                <li>
                                    <a
                                        href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas/<?= h($tag->slug) ?>">
                                        #<?= h($tag->name) ?> (<?= $tag->count ?? 0 ?>)
                                    </a>
                                </li>
                                <?php $tagCount++; ?>
                                <?php endif; ?>
                                <?php endforeach; ?>

                                <?php if ($totalTags > 5): ?>
                                <li style="border-top: 1px solid #eee; margin-top: 5px; padding-top: 5px;">
                                    <a href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas"
                                        style="font-style: italic; color: #007bff;">
                                        ➕ Ver todas las técnicas (<?= $totalTags ?> total)
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <!-- Cambiar Tipo de Trabajo -->
                        <li class="menu-item">
                            <div class="menu-title">
                                🔄 Cambiar Trabajo
                                <span class="arrow">▼</span>
                            </div>
                            <ul class="submenu">
                                <?php if (isset($allEventTypes)): ?>
                                <?php foreach ($allEventTypes as $type): ?>
                                <li>
                                    <a href="/portafolio/<?= h($type->eventoslug) ?>"
                                        <?= ($type->id == $eventType->id) ? 'style="font-weight:bold;color:#007bff;"' : '' ?>>
                                        <?= h($type->name) ?> <?= ($type->id == $eventType->id) ? '(actual)' : '' ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </li>

                        <?php else: ?>
                        <!-- MENÚ POR DEFECTO: Para otras páginas -->
                        <li class="menu-item active">
                            <div class="menu-title">
                                🎨 Portafolio
                                <span class="arrow">▼</span>
                            </div>
                            <ul class="submenu">
                                <li><a href="/">Ver todo el portafolio</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <div class="col-12" style="text-align: center;">
                    <a href="https://Stefsketch.com/">
                        <?php echo $this->Html->image('.png', ['class' => 'logoprincipal','style' => 'width: 50%;margin-top: -18px;', 'alt' => 'LOGO' , 'loading' => 'lazy']); ?>
                    </a>
                </div>
            </div>
        </div>




    </header>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>


    <!-- Botón flotante fijo -->
    <a href="#" class="fixed-back-to-top" id="fixed-btn-up" title="Volver arriba">
        <i class="fas fa-arrow-up"></i>
    </a>


    <!--FOOTER DINÁMICO CON ACORDEÓN-->
    <footer class="modern-footer">
        <div class="footer-content">
            <!-- Navegación -->
            <div class="footer-navigation">
            </div>


            <!-- Brand / Logo -->
            <div class="footer-brand">

                <!-- Contenedor para el botón en footer -->
                <div id="footerContactContainer" class="footer-contact-container"></div>

                <?= $this->Html->image('.png', [
                'class' => 'footer-logo',
                'alt' => 'LOGO',
                'loading' => 'lazy'
            ]) ?>

                <div class="footer-info">
                    <p class="copyright">
                        <i class="fas fa-copyright"></i>
                        Derechos reservados <?= date("Y") ?>
                    </p>
                    <p class="powered-by">
                        Powered by <a href="https://adntecnologias.com" target="_blank"><strong>ADN
                                Tecnologías®</strong></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


<!-- Botón Flotante para Contacto -->
<button type="button" class="btn-floating-contact" id="floatingContactBtn" title="¡Contáctanos!">
    <span class="contact-btn-floating-icon">💬</span>
    <div class="contact-btn-content">
        <div class="contact-btn-icon">💬</div>
        <div class="contact-btn-text">
            <div class="contact-btn-title">¿Tienes un proyecto en mente?</div>
            <div class="contact-btn-subtitle">¡Hablemos y hagámoslo realidad!</div>
        </div>
    </div>
</button>

<!-- Modal de Contacto -->
<div class="custom-modal-overlay" id="contactModal" style="display: none;">
    <div class="custom-modal">
        <div class="custom-modal-header">
            <h5>💬 ¡Hablemos de tu proyecto!</h5>
            <button type="button" class="custom-modal-close" id="closeModalBtn">&times;</button>
        </div>
        <div class="custom-modal-body">
            <div id="contactFormContainer">
                <form id="floatingContactForm">
                    <!-- Honeypot anti-spam (campo oculto) -->
                    <div style="display: none;">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>
                    
                    <div class="form-group">
                        <label for="contactName" class="form-label">Nombre *</label>
                        <input type="text" class="form-control" id="contactName" name="name" required placeholder="Tu nombre completo">
                    </div>
                    
                    <div class="form-group">
                        <label for="contactEmail" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="contactEmail" name="email" required placeholder="tu@email.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="contactPhone" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="contactPhone" name="phone" placeholder="+52 123 456 7890">
                    </div>
                    
                    <div class="form-group">
                        <label for="contactMessage" class="form-label">Mensaje *</label>
                        <textarea class="form-control" id="contactMessage" name="message" rows="4" required placeholder="Cuéntanos sobre tu proyecto..."></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Contenedor para respuestas AJAX -->
            <div id="contactResponse" style="display: none;"></div>
        </div>
        <div class="custom-modal-footer">
            <button type="button" class="btn btn-secondary" id="cancelModalBtn">Cerrar</button>
            <button type="button" class="btn btn-primary" id="sendContactBtn">
                <span class="btn-text">📨 Enviar Mensaje</span>
                <span class="btn-loading" style="display: none;">
                    <span class="spinner"></span>
                    Enviando...
                </span>
            </button>
        </div>
    </div>
</div>

<!-- CSS para el botón flotante -->
<style>
.btn-floating-contact {
    position: fixed;
    bottom: 15px;
    left: 30px;
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #061455 0%, #40057d 100%);
    border: none;
    border-radius: 50%;
    color: white;
    font-size: 24px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    transition: all 1.2s 
cubic-bezier(0.25, 0.8, 0.25, 1);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.btn-floating-contact:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 25px rgba(0,0,0,0.4);
    color: white;
}

.btn-floating-contact:active {
    transform: scale(0.95);
}

/* Estado expandido en footer - Transición más dramática */
.btn-floating-contact.footer-mode {
    position: static;
    bottom: auto;
    right: auto;
    width: 100%;
    max-width: 400px;
    height: 80px;
    border-radius: 40px; /* Cambio gradual de círculo a rectángulo */
    background: linear-gradient(135deg, #061455 0%, #40057d 100%);
    box-shadow: 0 8px 30px rgba(102, 126, 234, 0.4);
    font-size: 16px;
    margin: 20px auto;
    flex-direction: row;
    text-align: left;
    padding: 0 30px;
    transform: scale(1);
}

.btn-floating-contact.footer-mode:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 12px 40px rgba(102, 126, 234, 0.5);
}

/* Contenido del botón - aparece más lento */
.contact-btn-content {
    display: flex;
    align-items: center;
    width: 100%;
    opacity: 0;
    transform: translateX(30px);
    transition: all 1s ease 0.6s; /* Delay más largo para que aparezca después */
}

.btn-floating-contact.footer-mode .contact-btn-content {
    opacity: 1;
    transform: translateX(0);
}

/* Icono flotante - desaparece gradualmente */
.contact-btn-floating-icon {
    transition: opacity 0.8s ease;
    position: absolute;
}

.btn-floating-contact.footer-mode .contact-btn-floating-icon {
    opacity: 0;
}

.contact-btn-icon {
    font-size: 28px;
    margin-right: 15px;
    transition: transform 0.3s ease;
}

.btn-floating-contact.footer-mode:hover .contact-btn-icon {
    transform: scale(1.1);
}

.contact-btn-text {
    flex: 1;
}

.contact-btn-title {
    font-size: 18px;
    font-weight: 600;
    margin: 0;
    line-height: 1.2;
}

.contact-btn-subtitle {
    font-size: 14px;
    opacity: 0.9;
    margin: 2px 0 0 0;
    line-height: 1.2;
}

/* Animación de pulso solo en modo flotante */
.btn-floating-contact:not(.footer-mode)::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 50%;
    animation: pulse 2s infinite;
    transition: opacity 0.8s ease;
}

.btn-floating-contact.footer-mode::before {
    opacity: 0;
}

@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(102, 126, 234, 0); }
    100% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0); }
}

/* Contenedor en footer - transición más lenta */
.footer-contact-container {
    display: flex;
    justify-content: center;
    padding: 30px 0; /* Más padding para mejor visualización */
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.8s ease;
}

.footer-contact-container.show {
    opacity: 1;
    transform: translateY(0);
}

/* Estados intermedios para mejor visualización */
.btn-floating-contact.transitioning {
    transform: scale(1.05);
}

/* Resto del CSS del modal permanece igual... */
.custom-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.custom-modal-overlay.show {
    opacity: 1;
    visibility: visible;
}

.custom-modal {
    background: white;
    border-radius: 15px;
    width: 90%;
    max-width: 500px;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    transform: scale(0.7) translateY(-50px);
    transition: transform 0.3s ease;
}

.custom-modal-overlay.show .custom-modal {
    transform: scale(1) translateY(0);
}

.custom-modal-header {
    padding: 25px 25px 15px;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.custom-modal-header h5 {
    margin: 0;
    font-size: 1.25rem;
    font-weight: 600;
    color: #333;
}

.custom-modal-close {
    background: none;
    border: none;
    font-size: 28px;
    cursor: pointer;
    color: #999;
    padding: 0;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.2s ease;
}

.custom-modal-close:hover {
    background: #f8f9fa;
    color: #333;
}

.custom-modal-body {
    padding: 25px;
}

.custom-modal-footer {
    padding: 15px 25px 25px;
    display: flex;
    gap: 10px;
    justify-content: flex-end;
}

/* Form Styles */
.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #333;
}

.form-control {
    display: block;
    width: 100%;
    padding: 12px 15px;
    font-size: 16px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    transition: all 0.3s ease;
    font-family: inherit;
}

.form-control:focus {
    border-color: #667eea;
    outline: 0;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-control::placeholder {
    color: #999;
}

textarea.form-control {
    resize: vertical;
    min-height: 120px;
}

/* Button Styles */
.btn {
    display: inline-block;
    padding: 12px 24px;
    border: 2px solid transparent;
    border-radius: 8px;
    text-decoration: none;
    cursor: pointer;
    font-size: 16px;
    font-weight: 500;
    transition: all 0.3s ease;
    min-width: 120px;
}

.btn-primary {
    color: white;
    background: linear-gradient(135deg, #061455 0%, #40057d 100%);
    border-color: transparent;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
}

.btn-primary:disabled {
    opacity: 0.6;
    transform: none;
    cursor: not-allowed;
}

.btn-secondary {
    color: #666;
    background: #f8f9fa;
    border-color: #e9ecef;
}

.btn-secondary:hover {
    background: #e9ecef;
    border-color: #dee2e6;
}

/* Spinner */
.spinner {
    display: inline-block;
    width: 16px;
    height: 16px;
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 50%;
    border-top: 2px solid white;
    animation: spin 1s linear infinite;
    margin-right: 8px;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

/* Alert Styles */
.alert {
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 0;
}

.alert-success {
    background: #d4edda;
    border: 1px solid #c3e6cb;
    color: #155724;
}

.alert-danger {
    background: #f8d7da;
    border: 1px solid #f5c6cb;
    color: #721c24;
}

/* Responsive */
@media (max-width: 768px) {
    .btn-floating-contact {
        bottom: 15px;
        left: 15px;
        width: 42px;
        height: 42px;
        font-size: 20px;
    }
    
    .btn-floating-contact.footer-mode {
        max-width: 90%;
        height: 70px;
        padding: 0 20px;
    }
    
    .contact-btn-title {
        font-size: 16px;
    }
    
    .contact-btn-subtitle {
        font-size: 13px;
    }
    
    .contact-btn-icon {
        font-size: 24px;
        margin-right: 12px;
    }
    
    .custom-modal {
        width: 95%;
        margin: 10px;
    }
    
    .custom-modal-header,
    .custom-modal-body,
    .custom-modal-footer {
        padding: 20px;
    }
}
</style>




    <?= $this->Html->script('jquery-3.5.1.min.js') ?>
    <!--<?= $this->Html->script('bootstrap.bundle.min.js') ?>-->
    <?= $this->Html->script('jquery.cookie.js') ?>
    <?= $this->Html->script('parallax.min.js') ?>
    <?= $this->Html->script('jquery.stickr.min.js') ?>
    <?= $this->Html->script('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js') ?>

    <?= $this->Html->script('jscustom-adn.js?ver=24-10-05') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/selectize@0.12.6/dist/css/selectize.default.css" />
    <script src="https://cdn.jsdelivr.net/npm/selectize@0.12.6/dist/js/standalone/selectize.min.js"></script>

    <?= $this->Html->script('easymde.min.js') ?>

    <!--Smoth scroll -->
    <script>
    $('a.smoth-scroll').on("click", function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 1
        }, 1000);
        e.preventDefault();
    });
    </script>
    <script>
    document.getElementById('btn-up').addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    </script>

    <script>
    // Funcionalidad del botón flotante fijo
    const fixedBackToTop = document.getElementById('fixed-btn-up');

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            fixedBackToTop.classList.add('show');
        } else {
            fixedBackToTop.classList.remove('show');
        }
    });

    fixedBackToTop.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    </script>

    <script>
    // ===== SCRIPT NOTIFICACIONES CORREGIDO =====
    const toggleBtn = document.getElementById('notification-toggle');
    const notifList = document.getElementById('notification-list');
    const countSpan = document.getElementById('notif-count');

    // Solo ejecutar si existen los elementos del widget
    if (toggleBtn && notifList && countSpan) {

        function escapeHtml(str) {
            if (!str) return '';
            const div = document.createElement('div');
            div.textContent = str;
            return div.innerHTML;
        }

        function markAsRead(notificationId) {
            if (!notificationId) return Promise.resolve();

            return fetch('/notifications/mark-read.json', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': document.querySelector('meta[name="csrfToken"]')?.content || ''
                    },
                    body: JSON.stringify({
                        ids: [notificationId]
                    })
                })
                .then(res => {
                    if (!res.ok) throw new Error(`HTTP ${res.status}`);
                    return res.json();
                });
        }

        function renderNotifications(notifications) {
            const ulElement = notifList.querySelector('ul');
            if (!ulElement) return;

            ulElement.innerHTML = '';

            if (!notifications || notifications.length === 0) {
                ulElement.innerHTML =
                    '<li style="padding:16px; text-align:center; color:#999;">No hay nuevas notificaciones</li>';
                return;
            }

            notifications.forEach(function(notif) {
                const li = document.createElement('li');

                const link = document.createElement('a');
                link.href = notif.url || '#';
                link.style.cssText = 'text-decoration: none; color: #333; display: block; padding: 8px 0;';
                link.innerHTML = `
                <strong>${escapeHtml(notif.title)}</strong><br>
                ${escapeHtml(notif.body || '')}<br>
                <small>${notif.created}</small>
            `;

                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    if (!notif.is_read) {
                        markAsRead(notif.id)
                            .then(() => fetchNotifications())
                            .catch(err => console.error('Error:', err));
                    }

                    setTimeout(() => {
                        if (notif.url) {
                            window.location.href = notif.url;
                        } else {
                            window.history.back();
                        }
                    }, 150);
                });

                li.appendChild(link);
                ulElement.appendChild(li);
            });
        }

        function fetchNotifications() {
            const userMeta = document.querySelector('meta[name="user-id"]');
            const endpoint = userMeta ? '/notifications/check.json' : '/notifications/public.json';

            fetch(endpoint, {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(res => {
                    if (!res.ok) throw new Error(`HTTP ${res.status}`);
                    return res.json();
                })
                .then(data => {
                    // 🔥 ACTUALIZAR EL CONTADOR SIEMPRE
                    const count = data.count || 0;
                    if (countSpan) {
                        countSpan.textContent = count;
                        console.log(`✅ Notificaciones actualizadas: ${count} nuevas`);
                    }
                    renderNotifications(data.data || []);
                })
                .catch(err => {
                    console.error('❌ Error al cargar notificaciones:', err);
                    // En caso de error, mostrar el contador inicial
                    countSpan.textContent = '?';
                });
        }

        // Toggle dropdown
        toggleBtn.addEventListener('click', function() {
            const isVisible = notifList.style.display === 'block';
            notifList.style.display = isVisible ? 'none' : 'block';

            if (!isVisible) {
                // ACTUALIZAR CADA VEZ que se abre el dropdown
                fetchNotifications();
            }
        });

        // 🔥 INICIALIZAR: Usar datos del servidor, luego actualizar
        fetchNotifications();

        // 🔥 REDUCIR INTERVALO para pruebas (después puedes volver a 30000)
        setInterval(fetchNotifications, 60000); // 10 segundos para debugging

        console.log('✅ Widget de notificaciones inicializado con sincronización real');
    }
    </script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const footerContainer = document.getElementById('footerContactContainer');
    const footer = document.querySelector('footer');
    const modal = document.getElementById('contactModal');
    const form = document.getElementById('floatingContactForm');
    const formContainer = document.getElementById('contactFormContainer');
    const responseContainer = document.getElementById('contactResponse');
    let isInFooterMode = false;
    let transitionTimeout = null;
    
    // ===== FUNCIONALIDAD DEL MODAL (sin cambios) =====
    function openModal() {
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        setTimeout(() => {
            modal.classList.add('show');
        }, 10);
    }
    
    function closeModal() {
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
            document.body.style.overflow = '';
            resetForm();
        }, 300);
    }
    
    function resetForm() {
        form.reset();
        formContainer.style.display = 'block';
        responseContainer.style.display = 'none';
        const sendBtn = document.getElementById('sendContactBtn');
        sendBtn.querySelector('.btn-text').style.display = 'inline-block';
        sendBtn.querySelector('.btn-loading').style.display = 'none';
        sendBtn.disabled = false;
    }
    
    document.addEventListener('click', function(e) {
        if (e.target.closest('#floatingContactBtn')) {
            e.preventDefault();
            openModal();
        }
        
        if (e.target.closest('#closeModalBtn, #cancelModalBtn')) {
            e.preventDefault();
            closeModal();
        }
    });
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            closeModal();
        }
    });
    
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    document.getElementById('sendContactBtn').addEventListener('click', function() {
        const sendBtn = this;
        
        const name = document.getElementById('contactName').value.trim();
        const email = document.getElementById('contactEmail').value.trim();
        const message = document.getElementById('contactMessage').value.trim();
        
        if (!name || !email || !message) {
            alert('Por favor completa todos los campos obligatorios.');
            return;
        }
        
        sendBtn.querySelector('.btn-text').style.display = 'none';
        sendBtn.querySelector('.btn-loading').style.display = 'inline-block';
        sendBtn.disabled = true;
        
        const formData = new FormData();
        formData.append('name', name);
        formData.append('email', email);
        formData.append('phone', document.getElementById('contactPhone').value);
        formData.append('message', message);
        
        const csrfToken = document.querySelector('meta[name="csrfToken"]').getAttribute('content');
        
        fetch('/leads/add', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-Token': csrfToken
            },
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            formContainer.style.display = 'none';
            responseContainer.style.display = 'block';
            responseContainer.innerHTML = data;
            
            sendBtn.querySelector('.btn-text').style.display = 'inline-block';
            sendBtn.querySelector('.btn-loading').style.display = 'none';
            sendBtn.disabled = false;
            
            if (data.includes('alert-success')) {
                setTimeout(() => {
                    closeModal();
                }, 3000);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            responseContainer.innerHTML = '<div class="alert alert-danger">Error de conexión. Intenta nuevamente.</div>';
            responseContainer.style.display = 'block';
            formContainer.style.display = 'none';
            
            sendBtn.querySelector('.btn-text').style.display = 'inline-block';
            sendBtn.querySelector('.btn-loading').style.display = 'none';
            sendBtn.disabled = false;
        });
    });
    
    // ===== TRANSICIÓN AL FOOTER MEJORADA =====
    function checkFooterPosition() {
        if (!footer) return;
        
        const floatingBtn = document.getElementById('floatingContactBtn');
        if (!floatingBtn) return;
        
        const footerRect = footer.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        
        // Detectar cuando el footer está completamente visible
        const footerFullyVisible = footerRect.top <= windowHeight - 50; // Más restrictivo
        const footerTopVisible = footerRect.top <= windowHeight + 50;
        
        if (footerFullyVisible && !isInFooterMode) {
            // Iniciar transición a footer
            isInFooterMode = true;
            
            // Agregar clase de transición para efecto visual
            floatingBtn.classList.add('transitioning');
            
            // Mover al footer container después de un pequeño delay
            setTimeout(() => {
                footerContainer.appendChild(floatingBtn);
                footerContainer.classList.add('show');
                
                // Activar modo footer después de mover
                setTimeout(() => {
                    floatingBtn.classList.remove('transitioning');
                    floatingBtn.classList.add('footer-mode');
                }, 100);
            }, 200);
            
        } else if (!footerTopVisible && isInFooterMode) {
            // Volver a modo flotante
            isInFooterMode = false;
            
            // Agregar clase de transición
            floatingBtn.classList.add('transitioning');
            floatingBtn.classList.remove('footer-mode');
            footerContainer.classList.remove('show');
            
            // Mover de vuelta después de la transición
            setTimeout(() => {
                floatingBtn.classList.remove('transitioning');
                document.body.appendChild(floatingBtn);
            }, 600); // Esperar que termine la transición
        }
    }
    
    // Throttle mejorado para mejor performance
    let scrollTimeout;
    let lastScrollTime = 0;
    window.addEventListener('scroll', function() {
        const now = Date.now();
        if (now - lastScrollTime > 50) { // Límite de 20 FPS
            lastScrollTime = now;
            if (scrollTimeout) clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(checkFooterPosition, 20);
        }
    });
    
    // Verificación inicial más tardía
    setTimeout(checkFooterPosition, 1000);
});
</script>


</body>

</html>

</html>
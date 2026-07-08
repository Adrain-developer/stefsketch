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
$cakeDescription = 'Stefsketch Admin';
?>

<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')) ?>
    
    <?= $this->fetch('meta') ?>

    <title>
        <?= $cakeDescription ?>: <?= $this->fetch('title') ?>
    </title>

    <?= $this->element('favicon') ?>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700&amp;subset=latin%2Clatin-ext&amp;display=swap' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Instrument+Sans%3A400%2C700%7CInstrument+Serif%3A400%7CPoppins%3A500%7CSource+Serif+Pro%3A400&amp;display=swap&amp;ver=6.8.2' type='text/css' media='all' />

    <?= $this->Html->css(['bootstrap.min', 'base'.'.css?ver=26-08:001', 'css2.css', 'footer_blog'.'.css?ver=3', 'custom-admin'.'.css?ver=5']) ?>
    <?= $this->Html->css(['easymde.min.css']) ?>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css?v=1.0"/>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/heic2any@0.0.4/dist/heic2any.min.js"></script>
    <?= $this->Html->script('heic-converter') ?>

    <style>
        /* ========================================
           MODALIDAD DARK & NEON GLOBAL
           ======================================== */
        body {
            background-color: #000000 !important;
            color: rgba(255, 255, 255, 0.8) !important;
            font-family: 'Open Sans', sans-serif !important;
        }

        /* Títulos */
        h1, h2, h3, h4, h5, h6, .menu-title, .title {
            color: #28ebe3 !important;
            font-family: 'Instrument Sans', sans-serif !important;
        }

        /* Enlaces */
        a {
            color: #28ebe3;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        a:hover {
            color: #1fd4cc;
        }

        /* Formularios CakePHP y Tablas modo oscuro */
        table, .table { color: rgba(255, 255, 255, 0.9) !important; }
        table th { color: #28ebe3 !important; border-bottom: 2px solid rgba(40, 235, 227, 0.3) !important; }
        table td { border-color: rgba(255, 255, 255, 0.1) !important; }

        input.form-control, select.form-control, textarea.form-control, .form-select {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            color: #fff !important;
            border-radius: 12px;
        }
        input.form-control:focus, select.form-control:focus, textarea.form-control:focus {
            background: rgba(255, 255, 255, 0.08) !important;
            border-color: #28ebe3 !important;
            box-shadow: 0 0 0 0.2rem rgba(40, 235, 227, 0.25) !important;
            outline: none;
        }
        .logoprincipal {
    width: 5%;
    text-align: center;
    margin-bottom: -20px;
    margin-top: 0px;
}
        /* Contenedores Principales (Glassmorphism) */
        .glass-card, .card {
            background: rgba(255, 255, 255, 0.03) !important;
            backdrop-filter: blur(12px) !important;
            -webkit-backdrop-filter: blur(12px) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 20px !important;
            padding: 40px 20px 20px 20px !important;
            color: #ffffff !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5) !important;
        }

        /* Botones Globales Admin (Basado en contactame-button) */
        .btn, .btn-primary, .btn-success, button[type="submit"] {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 30px;
            background: #28ebe3 !important;
            color: #000 !important;
            font-family: 'Instrument Sans', sans-serif !important;
            font-weight: 700;
            font-size: 15px;
            text-decoration: none;
            border-radius: 12px !important;
            border: none !important;
            transition: all 0.3s ease !important;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(40, 235, 227, 0.2) !important;
        }
        .btn:hover, .btn-primary:hover, .btn-success:hover, button[type="submit"]:hover {
            background: #1fd4cc !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(40, 235, 227, 0.4) !important;
            color: #000 !important;
        }

        .btn-danger, .btn-secondary {
            background: rgba(255,255,255,0.1) !important;
            color: #fff !important;
            box-shadow: none !important;
        }
        .btn-danger:hover {
            background: #ff4d4d !important;
            color: #fff !important;
            box-shadow: 0 4px 15px rgba(255, 77, 77, 0.3) !important;
        }

        /* ========================================
           COMPONENTES ESPECÍFICOS ADMIN
           ======================================== */
        /* Menú Hamburguesa Oscuro */
        .menu-panel {
            background-color: #111111 !important;
            border-left: 1px solid rgba(40, 235, 227, 0.2);
        }
        .menu-panel .menu-title { color: rgba(255, 255, 255, 0.8) !important; }
        .menu-panel .menu-item a:hover .menu-title { color: #28ebe3 !important; }
        .hamburger-button span { background-color: #28ebe3 !important; }
        .close-button::before, .close-button::after { background-color: #28ebe3 !important; }

        /* Botón Atrás */
        .global-back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
            background: rgba(40, 235, 227, 0.1);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            color: #28ebe3;
            border: 1px solid rgba(40, 235, 227, 0.3);
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transform: translateY(-20px);
            pointer-events: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .global-back-button.visible {
            opacity: 1;
            transform: translateY(0);
            pointer-events: all;
        }
        .global-back-button:hover {
            transform: scale(1.1) translateY(-2px);
            background: #28ebe3;
            color: #000;
            box-shadow: 0 6px 20px rgba(40, 235, 227, 0.4);
        }

        /* Footer Modernizado */
        .modern-footer {
            background-color: #000 !important;
            background-image: url(/img/footer_textura_morado2.jpg) !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
            background-size: cover !important;
            border-top: none;
            margin-top: 50px;
            position: relative;
        }
        .modern-footer::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.85); /* Overlay para oscurecer la textura */
            z-index: 0;
        }
        .footer-content { position: relative; z-index: 1; }
        .modern-footer p { color: rgba(255,255,255,0.7) !important; }
        .modern-footer a { color: #28ebe3 !important; font-weight: 500; }

        /* Toast UI-Layout */
        .toast-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 16px 24px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            font-weight: 500;
            z-index: 10000;
            opacity: 0;
            transform: translateY(-20px);
            transition: all 0.3s ease;
            pointer-events: none;
        }
        .toast-notification.show { opacity: 1; transform: translateY(0); }
        .toast-notification.error { background: rgba(255, 50, 50, 0.2); color: #ff6b6b; border-left: 4px solid #ff6b6b; backdrop-filter: blur(5px); }
        .toast-notification.success { background: rgba(40, 235, 227, 0.1); color: #28ebe3; border-left: 4px solid #28ebe3; backdrop-filter: blur(5px); }

        /* Fixes móviles */
        @media (max-width: 768px) {
            .global-back-button { width: 40px; height: 40px; top: 15px; left: 15px; font-size: 16px; }
            .glass-card { padding: 40px 15px 15px 15px !important; }
        }
        @media only screen and (max-width: 767px) {
    .logoprincipal {
        width: 20%;
        margin-top: 0px;
    }
}
    </style>

    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>

<a href="javascript:history.back()" class="global-back-button visible" title="Volver atrás">
    <i class="fas fa-arrow-left"></i>
</a>

<div id="toast" class="toast-notification"></div>

<header class="admin-topbar">
    <div class="col-12" style="text-align: center;">
              <a href="https://stefsketch.com/">
                <?= $this->Html->image('logoBlanco.png', ['class' => 'logoprincipal', 'alt' => 'LOGO' , 'loading' => 'lazy']) ?>
              </a>
            </div>

    <div class="hamburger-container">
        <button class="hamburger-button" aria-label="Menú">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="menu-overlay"></div>
        <div class="menu-panel">
            <div class="menu-header">
                <h2>Menú</h2>
                <button class="close-button" aria-label="Cerrar menú"></button>
            </div>
            <nav class="menu-nav">
                <ul class="menu-list">
                    <li class="menu-item"><a href="/"><div class="menu-title">Stef Sketch</div></a></li>
                    <li class="menu-item"><a href="/portafolio-posts"><div class="menu-title">Inicio</div></a></li>
                    <li class="menu-item"><a href="/event-types"><div class="menu-title">Tipo Trabajos</div></a></li>
                    <li class="menu-item"><a href="/blog-categories"><div class="menu-title">Categorías</div></a></li>
                    <li class="menu-item"><a href="/blog-tags"><div class="menu-title">Tag's</div></a></li>
                    <li class="menu-item"><a href="/leads"><div class="menu-title">Lead's</div></a></li>
                </ul>
            </nav>
            <div class="col-12" style="text-align: center;">
              <a href="https://stefsketch.com/">
                <?= $this->Html->image('logoBlanco.png', ['class' => 'logoprincipal','style' => 'width: 50%;margin-top: -18px;', 'alt' => 'LOGO' , 'loading' => 'lazy']) ?>
              </a>
            </div>
        </div>
    </div>
</header>

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

<a href="#" class="fixed-back-to-top" id="fixed-btn-up" title="Volver arriba" style="color:#28ebe3;">
    <i class="fas fa-arrow-up"></i>
</a>

<footer class="modern-footer">
    <div class="footer-content">
        <div class="footer-navigation"></div>

        <div class="footer-brand">
            <?= $this->Html->image('logoBlanco.png', [
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
                    Powered by <a href="https://adntecnologias.com" target="_blank"><strong>ADN Tecnologías®</strong></a>
                </p>
            </div>
        </div>
    </div>
</footer>

<?= $this->Html->script('jquery-3.5.1.min.js') ?>
<?= $this->Html->script('jquery.cookie.js') ?>
<?= $this->Html->script('parallax.min.js') ?>
<?= $this->Html->script('jquery.stickr.min.js') ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?= $this->Html->script('jscustom-adn.js?ver=24-10-05') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/selectize@0.12.6/dist/css/selectize.default.css" />
<script src="https://cdn.jsdelivr.net/npm/selectize@0.12.6/dist/js/standalone/selectize.min.js"></script>
<?= $this->Html->script('easymde.min.js') ?>

<script>
    // Smooth Scroll
    $('a.smoth-scroll').on("click", function (e) {
      var anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $(anchor.attr('href')).offset().top - 1
      }, 1000);
      e.preventDefault();
    });

    // Botón Subir (Fixed)
    const fixedBackToTop = document.getElementById('fixed-btn-up');
    if (fixedBackToTop) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                fixedBackToTop.classList.add('show');
            } else {
                fixedBackToTop.classList.remove('show');
            }
        });
        fixedBackToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Botón Atrás
    (function() {
        const backButton = document.querySelector('.global-back-button');
        let scrollThreshold = 100;
        if (backButton) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > scrollThreshold) {
                    backButton.classList.add('visible');
                } else {
                    backButton.classList.remove('visible');
                }
            });
        }
    })();
</script>

<script>
    <?php 
    $toast = $this->request->getSession()->read('toast');
    if ($toast): 
        $this->request->getSession()->delete('toast');
    ?>
        showToast('<?= h($toast['message']) ?>', '<?= h($toast['type']) ?>');
    <?php endif; ?>

    function showToast(message, type = 'success') {
        const toast = document.getElementById('toast');
        toast.textContent = message;
        toast.className = 'toast-notification ' + type;
        
        setTimeout(() => toast.classList.add('show'), 100);
        setTimeout(() => toast.classList.remove('show'), 3000);
    }
</script>

</body>
</html>
<?php
use League\CommonMark\CommonMarkConverter;


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
$cakeDescription = 'Mi EventoApp';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>
    <?php if(strpos($url, 'vipaccess') !== false){ ?>
      <meta property="og:title" content="Boletos QR Digitales">
    <?php }else{ ?>
      <meta property="og:title" content="Sorprende a tus invitados">
      <meta name="description" content="Invitaciones y Boletos QR">
    <?php }?>
    <?php if(strpos($url, 'misxv') !== false){?>
      <meta property="og:image" content="https://mieventoapp.com/webroot/img/miniaturas/mieventoappxvvert.jpeg">
    <?php }else if(strpos($url, 'boda') !== false){?>
      <meta property="og:image" content="https://mieventoapp.com/webroot/img/BannerMiniaturaBoda.jpg">
      <?php }else if(strpos($url, 'cumple') !== false){?>
      <meta property="og:image" content="https://mieventoapp.com/webroot/img/BannerMiniaturaCumpleDOS.jpg">
    <?php }else if(strpos($url, 'vipaccess') !== false){?>
      <meta property="og:image" content="https://mieventoapp.com/webroot/img/miniaturas/boletosQRminiatura.jpg">
      <?php }else {?>
        <?= $this->fetch('meta') ?>
    <?php }?>

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon', 'message_xv.png', ['type'=>'image/png']) ?>
    <?= $this->Html->css(['bootstrap.min', 'base'.'.css?ver=25-08:001', 'css2.css']) ?>
        <?= $this->Html->css(['easymde.min.css']) ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css?v=1.0"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- Google tag (gtag.js) --
<script async src="https://www.googletagmanager.com/gtag/js?id=G-12BZVRKWSX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-12BZVRKWSX');
</>-->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5QW6NF2749"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5QW6NF2749');
    </script>
</head>

<body>

<header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Logo -->
                    <div class="logo">
                      <?php if(strpos($url, 'misxv') !== false){?>
                        <a href="/misxv">
                        <?php echo $this->Html->image('Logomisxvsfinal.png', ['class' => 'parallax-slider', 'alt' => 'LOGO', 'style' => 'background-color: #161b26a8;border-radius: 8px;padding: 4px;']); ?>
                        </a>
                        <?php }else if(strpos($url, 'boda') !== false){?>
                          <a href="/boda">
                          <?php echo $this->Html->image('logovfinalBoda.png', ['class' => 'parallax-slider', 'alt' => 'LOGO', 'style' => 'background-color: #161b26a8;border-radius: 8px;padding: 4px;']); ?>
                          </a>
                          <?php }else if(strpos($url, 'bautizo') !== false){?>
                          <a href="/bautizo">
                          <?php echo $this->Html->image('logo-BAUTIZO.png', ['class' => 'parallax-slider', 'alt' => 'LOGO', 'style' => 'background-color: #161b26a8;border-radius: 8px;padding: 4px;']); ?>
                          </a>
                          <?php }else{?>
                            <a href="https://mieventoapp.com">
                          <?php echo $this->Html->image('EAlogoPrincipal.png', ['class' => 'parallax-slider', 'alt' => 'LOGO', 'width' => '180', 'style' => 'background-color: #161b26a8;border-radius: 8px;padding: 4px;', 'height' => '53']); ?>
                          </a>
                        <?php }?>
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
                <!-- Ítem con submenú -->
                <?php if(strpos($url, 'misxv') !== false || strpos($url, 'boda') !== false || strpos($url, 'bautizo') !== false) {?>
                <li class="menu-item">
                    <a href="https://mieventoapp.com/" style="color: #777777;">
                        <div class="menu-title">
                            Home
                        </div>
                    </a>
                </li>
                <?php }?>
                <?php if(strpos($url, 'misxv') !== false) {?>
                <li class="menu-item active">
                    <div class="menu-title">
                        Paquetes
                        <span class="arrow">▼</span>
                    </div>
                    <ul class="submenu">
                        <li><a href="/misxv/demosAmbar">✨ Ámbar</a></li>
                        <li><a href="/misxv/demosZafiro">🔮 Zafiro</a></li>
                        <li><a href="/misxv/demosDiamante">💎 Diamante</a></li>
                    </ul>
                </li>
                <?php }else if(strpos($url, 'boda') !== false){?>
                <li class="menu-item active">
                    <div class="menu-title">
                        Paquetes
                        <span class="arrow">▼</span>
                    </div>
                    <ul class="submenu">
                        <li><a href="/boda/demosAmbar">✨ Ámbar</a></li>
                        <li><a href="/boda/demosZafiro">🔮 Zafiro</a></li>
                        <li><a href="/boda/demosDiamante">💎 Diamante</a></li>
                    </ul>
                </li>
                <?php }?>
                <?php if(strpos($url, 'misxv') !== false || strpos($url, 'boda') !== false || strpos($url, 'bautizo') !== false) {?>
                    <li class="menu-item">
                <?php }else{?>
                    <li class="menu-item active">
                <?php }?>
                    <div class="menu-title">
                        Eventos
                        <span class="arrow">▼</span>
                    </div>
                        <ul class="submenu">
                        <li><a href="/boda">💍 Boda</a></li>
                        <li><a href="/misxv">👑 XV años</a></li>
                        <li><a href="/bautizo">🕊️ Bautizo</a></li>
                        <li><a href="/cumple">🎂 Cumpleaños</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <div class="menu-title">
                        Boletos QR
                        <span class="arrow">▼</span>
                    </div>
                    <ul class="submenu">
                        <li><a href="/invitaciones/vipaccess">VIPAccess</a></li>
                    </ul>
                </li>
                <!--<li class="menu-item">
                    <div class="menu-title">
                        Nosotros
                        <span class="arrow">▼</span>
                    </div>
                    <ul class="submenu">
                        <li><a href="/nosotros/historia">Historia</a></li>
                        <li><a href="/nosotros/equipo">Equipo</a></li>
                        <li><a href="/nosotros/contacto">Ventajas</a></li>
                        <li><a href="/nosotros/contacto">Preguntas frecuentes</a></li>
                    </ul>
                </li>-->
            </ul>
        </nav>
        <div class="col-12" style="text-align: center;">
          <a href="https://mieventoapp.com/">
            <?php echo $this->Html->image('LOGOPRINCIPAL.png', ['class' => 'logoprincipal','style' => 'width: 50%;margin-top: -18px;', 'alt' => 'LOGO' , 'loading' => 'lazy']); ?>
          </a>
        </div>
    </div>
</div>
    </header>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

<!--REVIEWS-->
<section style="background-color: #ffffff; padding: 30px 0 30px 0;">
    <div class="container">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">La opinión de nuestros clientes ❤️</h2>
                <p class="sub-title">Se parte de la emoción</p>
            </div>
        </div>
    </div>

    <div class="HeaderContainer__Inner-sc-1532ffp-0 gtiuwG es-header-container HeaderComponent__StyledHeader-sc-9lcg5s-0 fXNqIK">
    <div class="Header__Info-sc-criq3t-0 eJbfvz es-header-info">
        <div class="HeaderTitle__Container-sc-1nf903g-0 ittcQw es-header-title-container">
            <div
                class="Icon__IconContainer-sc-11wrh3u-0 croLud es-source-image HeaderTitle__StyledSourceImage-sc-1nf903g-1 iwosRd es-header-title-logo es-facebook-logo">
                <div>
                    <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 94 36" class="injected-svg"
                            data-src="https://static.elfsight.com/icons/app-all-in-one-reviews-logos-facebook-logo-multicolor.svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path fill="#0076FB"
                                d="M63.058 13.502c4.173 0 5.834 2.674 5.834 5.999 0 3.888-2.619 5.999-5.834 5.999-3.938 0-5.834-2.357-5.834-6 0-3.43 1.463-5.998 5.834-5.998Zm12.879 0c4.172 0 5.834 2.674 5.834 5.999 0 3.888-2.619 5.999-5.834 5.999-3.938 0-5.834-2.357-5.834-6 0-3.43 1.463-5.998 5.834-5.998Zm-62.245-.159c1.373 0 2.6.704 3.486 1.83v-1.495h3.36v11.417h-3.342l.018-1.477c-.885 1.143-2.15 1.864-3.522 1.864-2.692 0-4.877-2.34-4.877-6.07 0-3.764 2.185-6.069 4.877-6.069Zm34.085-5.7-.018 7.548c.885-1.144 2.15-1.865 3.522-1.865 2.691 0 4.877 2.34 4.877 6.07 0 3.764-2.186 6.069-4.877 6.069-1.373 0-2.601-.704-3.486-1.83v1.513l-3.486-.07V8.03l3.468-.387Zm-10.188 5.77c6.495.052 5.372 6.763 5.296 7.176l-.003.02v-.017H35.44s-.163 2.04 1.878 2.216c2.023.176 4.606-.598 4.606-.598l.74 2.305s-2.42 1.196-5.599.827c-3.197-.37-5.057-1.513-5.202-5.454 0 0-.975-6.51 5.726-6.474Zm-14.035 1.355c1.97-1.759 6.358-1.583 7.803-.545l-.848 2.463s-.633-.616-2.44-.598c0 0-2.672-.159-2.672 3.22v.175c0 3.36 2.673 3.22 2.673 3.22 1.806.035 2.439-.58 2.439-.598l.848 2.463c-1.463 1.038-5.834 1.213-7.803-.546-1.698-1.513-1.698-3.993-1.662-4.627-.036-.633-.036-3.096 1.662-4.627Zm62.986-7.16V18.78l3.558-5.138h3.74l-3.65 5.736L94 25.13h-3.613l-3.847-5.84v5.84h-3.504V7.96l3.504-.352ZM6.369 7.502h2.464v2.78H7.26s-1.427-.193-1.427 1.144v2.181h2.999l-.361 3.026H5.816v8.445H2.348V16.58H0v-2.974h2.439v-2.533s-.308-1.39.975-2.533c1.233-1.1 2.834-1.045 2.955-1.039Zm8.389 8.621c-1.229 0-2.24 1.09-2.24 2.234v2.182c0 1.143.993 2.234 2.24 2.234 1.228 0 2.24-1.09 2.24-2.234v-2.182c0-1.143-.994-2.234-2.24-2.234Zm48.264-.053c-1.283 0-2.312 1.091-2.312 2.235v2.181c0 1.144 1.047 2.234 2.312 2.234 1.282 0 2.312-1.09 2.312-2.234v-2.181c0-1.144-1.048-2.235-2.312-2.235Zm12.879 0c-1.283 0-2.312 1.091-2.312 2.235v2.181c0 1.144 1.047 2.234 2.312 2.234 1.282 0 2.312-1.09 2.312-2.234v-2.181c0-1.144-1.048-2.235-2.312-2.235Zm-25.668-.017c-1.228 0-2.24 1.09-2.24 2.234v2.181c0 1.144 1.012 2.235 2.24 2.235 1.229 0 2.24-1.091 2.24-2.235v-2.181c0-1.144-1.011-2.234-2.24-2.234Zm-12.698-.282c-2.348 0-2.168 2.534-2.168 2.534h4.336s.18-2.534-2.168-2.534Z">
                            </path>
                        </svg></div>
                </div>
            </div>
            <div class="HeaderTitle__Text-sc-1nf903g-2 hiuJfK es-header-title-text">Calificación</div>
        </div>
        <div class="Header__SourceInfo-sc-criq3t-1 igxRbY es-header-source-info">
            <div
                class="Rating__Container-sc-bk54oq-0 jHuwCI es-rating-container es-header-rating Header__StyledHeaderRating-sc-criq3t-2 fIgssJ">
                <div class="RatingValue__Container-sc-fl6036-0 grMzUy es-rating-value">4.9</div>
                <div class="RatingBar__Container-sc-qimg51-0 eyLxdR es-rating-bar-container">
                    <div
                        class="RatingItemFilledSvg__Container-sc-14jss50-0 ga-dIYY es-rating-item es-rating-stars-item-filled">
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Unfilled-sc-14jss50-2 bXVxrw cHATJH es-rating-item-unfilled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Filled-sc-14jss50-3 bXVxrw nUbNv es-rating-item-filled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                    <div
                        class="RatingItemFilledSvg__Container-sc-14jss50-0 ga-dIYY es-rating-item es-rating-stars-item-filled">
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Unfilled-sc-14jss50-2 bXVxrw cHATJH es-rating-item-unfilled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Filled-sc-14jss50-3 bXVxrw nUbNv es-rating-item-filled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                    <div
                        class="RatingItemFilledSvg__Container-sc-14jss50-0 ga-dIYY es-rating-item es-rating-stars-item-filled">
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Unfilled-sc-14jss50-2 bXVxrw cHATJH es-rating-item-unfilled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Filled-sc-14jss50-3 bXVxrw nUbNv es-rating-item-filled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                    <div
                        class="RatingItemFilledSvg__Container-sc-14jss50-0 ga-dIYY es-rating-item es-rating-stars-item-filled">
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Unfilled-sc-14jss50-2 bXVxrw cHATJH es-rating-item-unfilled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Filled-sc-14jss50-3 bXVxrw nUbNv es-rating-item-filled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                    <div
                        class="RatingItemFilledSvg__Container-sc-14jss50-0 ga-dIYY es-rating-item es-rating-stars-item-filled">
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Unfilled-sc-14jss50-2 bXVxrw cHATJH es-rating-item-unfilled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Filled-sc-14jss50-3 bXVxrw nUbNv es-rating-item-filled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                </div>
            </div>
            <div class="HeaderTotalReviews__Container-sc-14hjk3j-0 XXlQN es-header-total-reviews-container">
                <div class="HeaderTotalReviews__Value-sc-14hjk3j-1 eDjDjx es-header-total-reviews-value">47 opiniones</div>
            </div>
        </div>
    </div>
    <div
        class="HeaderWriteReviewButton__Component-sc-a5mrro-0 hznugL es-header-write-review-button-container Header__StyledHeaderWriteReviewButton-sc-criq3t-3 iSciCy">
        <a href="https://www.facebook.com/adntech21/reviews" target="blank" size="15" class="ButtonBase__ButtonContainer-sc-p43e7i-3 euBiGU es-header-write-review-button botonazulreview" type="button" tabindex="0"><span
                class="ButtonBase__Overlay-sc-p43e7i-4 jUXzLe"
                style="padding: 8px 20px; background-color: rgba(0, 0, 0, 0);"><span
                    class="ButtonBase__Ellipsis-sc-p43e7i-5 dqiKFy">Escribe una opinión</span></span></a></div>
</div>
    <div class="container swiperrev mySwiperrev swiper">
        <div class="swiper-wrapper" style="align-items: center;">
                   <!--Inicio comentario-->
                   <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">100% recomendable y siempre están apoyándote en todo momento y es un servicio exelente lo recomiendo ampliamente</div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/eddg.munive/posts/pfbid036DGknKyNpJsQthyu69NNeVPCUtU5brecbom645i7aUH6ocf8wmzWnCs9VqNkXKUfl"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/susymartinezfbrv.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/susana.martinezramirez.96/posts/pfbid02p2HRRnm8hFfQNqhQBhpFA9kX4H8Vaco96fyFM84LvuFGSshKfY5acZQSrX9W5brUl"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Susy Martinez Ramirez</span><br>Febrero 9, 2024
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
<!--Inicio comentario-->
            <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">Excelente atención y calidad del trabajo. 100% recomendable.</div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/eddg.munive/posts/pfbid036DGknKyNpJsQthyu69NNeVPCUtU5brecbom645i7aUH6ocf8wmzWnCs9VqNkXKUfl"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/rvwEdgarFB.jpeg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/eddg.munive/posts/pfbid036DGknKyNpJsQthyu69NNeVPCUtU5brecbom645i7aUH6ocf8wmzWnCs9VqNkXKUfl"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Edgar Munive</span><br>Enero 13, 2024
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
           <!--Inicio comentario-->
           <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">Súper recomendable su trabajo, realmente te hacen lo que pides y a todos mis invitados les encanto mi invitación 10 de 10.
Sin duda vuelvo a elegir una invitación con ellos.
                                </div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/cecii.arriaga.a/posts/pfbid033JS6y19oZLZkT4ET2Svbq5vEPtKEQXLSEHnnbrPmdM2v8PDMC51vahteiFKNByzYl"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/ceciarriarvfb.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/cecii.arriaga.a/posts/pfbid033JS6y19oZLZkT4ET2Svbq5vEPtKEQXLSEHnnbrPmdM2v8PDMC51vahteiFKNByzYl"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Cecy Arriaga</span><br>Enero 15, 2024
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
           <!--Inicio comentario-->
           <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">Mi hija y yo estamos encantadas con los resultados de la invitación de los XV años , la invitación inteligente es súper genial. La recomiendo al máximo. 
Gracias a Hanna que siempre me ayudo <a href="https://www.facebook.com/adntech21/reviews" target="blank" ><span class="nombrefb">Leer más...</span>
                                </div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/adntech21/reviews"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/keniaBoombenreviewfb.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/adntech21/reviews"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Kenia Boombon</span><br>Septiembre 8, 2023
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
           <!--Inicio comentario-->
           <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">Mega recomendable, el servicio fue excelente, tuvieron la invitación super rápido y nos encantó como quedó. No se van a arrepentir! 😌
                                </div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/adntech21/reviews"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/joseluismontesreviewfb.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/adntech21/reviews"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Jose Luis Montes</span><br>Enero 31, 2023
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
           <!--Inicio comentario-->
           <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">Super recomendado, muy buen servicio, todas mis dudas y lo q yo les pedí quedo genial. Super atentos. Y divina mi invitación. 🥰
                                </div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/adntech21/reviews"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/marceivonibarrareviewfb.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/adntech21/reviews"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Marce Ivon Ibarra</span><br>Julio 14, 2023
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
        <p>
          Escríbenos y comencemos.
        </p>
        <!-- Dropdown Contacto -->
        <div id="dropdownMenuContacto" class="dropdown">
        <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com%0A%0AHola 👋🏻%0ADeseo cotizar una Invitación digital!🥳" style="margin-bottom: 15px;">
                  <i class="fa fa-whatsapp"></i> 
                Adquirir ahora 
               </a>
        </div>
      </div>
  </div>
</section>

<!--FOOTER-->
    <footer class="text-center">
      <div class="col-12 row">
        <div class="col-6" style="text-align: left;">
          <?php if(strpos($url, 'misxv') !== false){?>
            <h6 style="font-size: small;">Invitaciones para XV's</h6>
              <a class="txt14px" href="/misxv">
                <p>Inicio</p>
              </a>
              <a class="txt14px" href="/misxv/demosDiamante">
                <p>Paquete Diamante</p>
              </a>
              <a class="txt14px" href="/misxv/demosZafiro">
                <p>Paquete Zafiro</p>
              </a>
              <a class="txt14px" href="/misxv/demosAmbar">
                <p>Paquete Ámbar</p>
              </a>
            <?php }else if(strpos($url, 'boda') !== false){?>
              <h6 style="font-size: small;">Invitaciones para Boda</h6>
              <a class="txt14px" href="/boda">
                <p>Inicio</p>
              </a>
              <a class="txt14px" href="/boda/demosDiamante">
                <p>Paquete Diamante</p>
              </a>
              <a class="txt14px" href="/boda/demosZafiro">
                <p>Paquete Zafiro</p>
              </a>
              <a class="txt14px" href="/boda/demosAmbar">
                <p>Paquete Ámbar</p>
              </a>
              <?php }else if(strpos($url, 'bautizo') !== false){?>
                <h6 style="font-size: small;">Invitaciones para Bautizo</h6>
              <a class="txt14px" href="/bautizo">
                <p>Inicio</p>
              </a>
              <a class="txt14px" href="/bautizo/demosDiamante">
                <p>Paquete Diamante</p>
              </a>
              <a class="txt14px" href="/bautizo/demosZafiro">
                <p>Paquete Zafiro</p>
              </a>
              <a class="txt14px" href="/bautizo/demosAmbar">
                <p>Paquete Ámbar</p>
              </a>
              <?php } else{?>
                <h6 style="font-size: small;">Eventos</h6>
              <a class="txt14px" href="/boda">
                <p>Boda</p>
              </a>
              <a class="txt14px" href="/misxv">
                <p>XV años</p>
              </a>
              <a class="txt14px" href="/bautizo">
                <p>Bautizo</p>
              </a>
              <a class="txt14px" href="/cumple">
                <p>Cumpleaños</p>
              </a>
              <a class="txt14px" href="/comunion">
                <p>1ra Comunión</p>
              </a>
                <?php }?>
          </div>
          <div class="col-6" style="text-align: right;">
            <h6 style="font-size: small;">Información</h6>
            <a class="txt14px" href="/home">
                <p>Inicio Mi Evento App</p>
              </a>
              <a class="txt14px" href="/somos#contacto">
                <p>Contactanos</p>
              </a>
              <a class="txt14px" href="/somos">
                <p>¿Quienes somos?</p>
              </a>
              <div class="">
                <?php echo $this->Html->image('garantia100.png', ['class' => 'footer-imgcalidad', 'alt' => 'LOGO', 'loading' => 'lazy']); ?>
              </div>
          </div>
      </div>
      <div class="">
        <?php echo $this->Html->image('formasPago.png', ['class' => 'fotterimgpagos', 'alt' => 'pagos', 'loading' => 'lazy']); ?>
      </div>
      <div class="">
        <?php echo $this->Html->image('LOGOPRINCIPAL.png', ['class' => 'logoprincipal','id' => 'btn-up', 'alt' => 'LOGO' , 'loading' => 'lazy']); ?>
      </div>
      <p>Derechos reservados <?= date("Y")?></p>  
      <p class="pwadnfooter">Powered by <a href="https://adntecnologias.com" target="_blank"><strong>ADN Tecnologías®</strong></a></p>
    </footer>

 <!-- Botón flotante WHATSAPP-->
<a href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com%0A%0AHola 👋🏻%0ADeseo una Invitación digital! 🥳" class="float-whatsapp" target="_blank">
    <img src="https://mieventoapp.com/img/logominiWhatsDOS.png" class="whatsapp-icon" alt="WhatsApp">
</a>
 <!-- Botón flotante promo --
 <button id="floatingButton" class="floating-button" aria-label="Abrir popup"></button>
<!-- Overlay del popup --
<div id="customPopupOverlay" class="custom-popup-overlay"></div>
<!-- Popup --
<div id="customPopup" class="custom-popup">
    <div class="custom-popup-content">
        <span id="customPopupClose" class="custom-popup-close">&times;</span>
        <img src="https://mieventoapp.com/img/bannerBuenFin2024_3.jpg" alt="Popup Image" class="custom-popup-image">
        <!-- Countdown --
        <div class="countdown-container">
            <div class="countdown-title">🥳 Aún quedan:</div>
            <div class="countdown-grid">
                <div class="countdown-item">
                    <p class="countdown-number" id="countdown-days" style="color: #fe0fa1;">00</p>
                    <p class="countdown-label" style="color: #fe0fa1;">Días</p>
                </div>
                <div class="countdown-item">
                    <p class="countdown-number" id="countdown-hours">00</p>
                    <p class="countdown-label">Horas</p>
                </div>
                <div class="countdown-item">
                    <p class="countdown-number" id="countdown-minutes">00</p>
                    <p class="countdown-label">Minutos</p>
                </div>
                <div class="countdown-item">
                    <p class="countdown-number" id="countdown-seconds">00</p>
                    <p class="countdown-label">Segundos</p>
                </div>
            </div>
                    <!-- Dropdown Contacto --
        <div class="dropdown" style="margin-top: 20px;text-shadow: 1px 2px 10px black;">
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com%0A%0AHola 👋🏻%0AMe gustaría aprovechar el descuentos del *BUEN FIN!* 🎁">
              <i class="fa fa-whatsapp"></i>
              Aprovechar descuento! <br>
          </a>
        </div>
        <spam class="microcopys">¡Solo 5 minutos!</spam>
        </div>
    </div>
</div>
<!--Fin Popup -->

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
    $('a.smoth-scroll').on("click", function (e) {
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

</body>

</html>
<?php

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

$cakeDescription = 'Invitaciones Digitales | Mi EventoApp';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Invitaciones digitales para tu evento de quince años">
    <meta property="og:title" content="Invitaciones digitales para tu evento">
    <meta property="og:description" content="Creamos y diseñamos invitaciones digitales para tu evento">
    <meta property="og:image" content="https://mieventoapp.com/webroot/img/miniaturas/mieventoappxvvert.jpeg">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon', 'message_xv.png', ['type'=>'image/png']) ?>

    <?= $this->Html->css(['bootstrap.min', 'base', 'css2']) ?>

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
</head>

<body>


  <!-- Loader -->
  <div class="preloader-area" style="display: none;">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="loader" style="display: none;">
          <?php echo $this->Html->image('logoMisXVdigBlanco.png', ['class' => 'parallax-slider', 'alt' => 'LOGO', 'width' => '180', 'height' => '53']); ?>
      </div>
    </div>
  </div>

    <header>
    
        <div class="container">
            <div class="row">

                <div class="col-md-3">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="Misxv">


                        <?php echo $this->Html->image('logoMisXVdigBlanco.png', ['class' => 'parallax-slider', 'alt' => 'LOGO', 'width' => '180', 'height' => '53']); ?>

                        </a>
                    </div>

                </div>

                <div class="col-md-9 d-flex justify-content-end">

                    <!-- Menu -->
                    <div class="outer-menu fixed">

                        <span class="menu-title">
                            Menu </span>

                        <input class="checkbox-toggle" type="checkbox">
                        <div class="hamburger">
                            <div></div>
                        </div>

                        <div class="menu">
                            <div>
                                <div>
                                    <ul>
                                        <!-- Menu -->

                                        <li><a href="" class="item-menu smoth-scroll">Inicio</a></li>

                                        <li><a href="" class="item-menu smoth-scroll">Modelos</a></li>

                                        <li><a href="" class="item-menu smoth-scroll">¿Qué incluyen?</a></li>

                                        <li><a href="" class="item-menu smoth-scroll">¿Cómo obtenerla?</a></li>
                                        
                                        <li><a href="" class="item-menu" data-toggle="modal" data-target="#modal-form-contacto" data-backdrop="static">Contacto</a></li>

                                      
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </header>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <footer class="text-center">
    Mi Evento App.  Derechos reservados.<br><?= date("Y")?></p>  
      <p>
      Powered by <a href="https://adntecnologias.com" target="_blank"><strong>ADN Tecnologías</strong></a></p>
    </footer>
    <?= $this->Html->script('jquery-3.5.1.min.js') ?>
    <?= $this->Html->script('bootstrap.bundle.min.js') ?>
    <?= $this->Html->script('jquery.cookie.js') ?>
    <?= $this->Html->script('change-lang.js') ?>
    <?= $this->Html->script('parallax.min.js') ?>
    <?= $this->Html->script('biomp.js') ?>
    <?= $this->Html->script('jquery.stickr.min.js') ?>
    <?= $this->Html->script('lottie_svg.min.js') ?>
    <!-- Loader -->
  <script>
    var prealoaderOption = $(window);

    prealoaderOption.on("load", function () {

      var preloader = $('.loader');
      var preloaderArea = $('.preloader-area');

      preloader.fadeOut(300);
      preloaderArea.delay(100).fadeOut(300);

    });
  </script>

  <!-- Cierro el menu al hacer click en item de menu -->
  <script>
    $('a.item-menu').on("click", function (e) {

      e.preventDefault();

      $('.outer-menu .checkbox-toggle').prop('checked', false);

    });
  </script>

   <!-- Smoth scroll -->
   <script>
    $('a.smoth-scroll').on("click", function (e) {
      var anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $(anchor.attr('href')).offset().top - 1
      }, 1000);
      e.preventDefault();
    });
  </script>

   <!-- Menu fijo en scroll -->
   <script>
    // PORTADA
    var alto = $('header').height() * 2;
    // console.log(alto);
    $(window).scroll(function () {
      if ($(document).scrollTop() > alto) {
        $('.outer-menu').addClass('fixed');
        $('.whatsapp-fixed').addClass('whatsapp-fixed-right');
      }
      if ($(document).scrollTop() < alto) {
        $('.outer-menu').removeClass('fixed');
        $('.whatsapp-fixed').removeClass('whatsapp-fixed-right');
      }
    });
  </script>


</body>

</html>
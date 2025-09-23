

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

<?php
$postsTable = TableRegistry::getTableLocator()->get('BlogPosts');
$eventsTable = TableRegistry::getTableLocator()->get('EventTypes');
// Cargar las notificaciones no leídas del usuario actual
$user = $this->request->getAttribute('identity');
$notifications = [];
if ($user) {
    $notificationsTable = TableRegistry::getTableLocator()->get('Notifications');
    $notifications = $notificationsTable->find()
        ->where(['user_id' => $user->id, 'is_read' => false])
        ->order(['created' => 'DESC'])
        ->limit(10)
        ->toArray();
}
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
    <?= $this->Html->meta('og:site_name', 'Stefsketch'); ?>
    <?= $this->Html->css(['bootstrap.min', 'base'.'.css?ver=26-08:001', 'css2.css', 'footer_blog'.'.css?ver=6']) ?>
        <?= $this->Html->css(['easymde.min.css']) ?>
        <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css?v=1.0"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

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

.menu-item:hover > .submenu,
.submenu-item:hover > .sub-submenu {
    display: block;
}

.arrow {
    float: right;
    font-size: 0.8em;
}
</style>

<body>

<header>

 <!-- ... contenido existente del header ... --
    
        



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
  
        

        <!-- Brand / Logo -->
        <div class="footer-brand">

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
                    Powered by <a href="https://adntecnologias.com" target="_blank"><strong>ADN Tecnologías®</strong></a>
                </p>
            </div>
        </div>
    </div>
</footer>
            

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



</body>

</html>

</html>
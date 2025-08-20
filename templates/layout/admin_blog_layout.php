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
$cakeDescription = 'Mi EventoApp';
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

    <?= $this->Html->meta('icon', 'LOGOPRINCIPAL.png', ['type'=>'image/png']) ?>
    <?php if (isset($blogPost)): ?>
        <?= $this->Html->meta('og:title', $blogPost->title); ?>
        <?= $this->Html->meta('og:description', $blogPost->subtitle); ?>
        <?= $this->Html->meta('og:image', $this->Url->build('/img/' . h($blogPost->banner), ['fullBase' => true])); ?>
        <?= $this->Html->meta('og:url', $this->Url->build(['controller' => 'Blog', 'action' => 'view', $blogPost->slug], ['fullBase' => true])); ?>
    <?php endif; ?>
    <?= $this->Html->meta('og:type', 'article'); ?>
    <?= $this->Html->meta('og:site_name', 'Mi Evento App'); ?>
    <?= $this->Html->css(['bootstrap.min', 'base'.'.css?ver=26-08:001', 'css2.css', 'footer_blog'.'.css?ver=3']) ?>
        <?= $this->Html->css(['easymde.min.css']) ?>
        <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                        <?php if (isset($eventType)): ?>
                        <a href="https://mieventoapp.com/blog/<?= h($eventType->eventoslug) ?>" >
                            <?php echo $this->Html->image('EAlogoPrincipal.png', ['class' => 'parallax-slider', 'alt' => 'LOGO', 'width' => '180', 'style' => 'background-color: #161b26a8;border-radius: 8px;padding: 4px;', 'height' => '53']); ?>
                        </a>
                        <?php endif; ?>
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
        <li class="menu-item">
            <a href="/blog" style="color: #777777;">
                <div class="menu-title">Inicio</div>
            </a>
        </li>

        <?php if (isset($eventTypesEntities) && !empty($eventTypesEntities)): ?>
            <?php foreach ($eventTypesEntities as $eventType): ?>
                <li class="menu-item">
                    <a href="/blog/<?= h($eventType->eventoslug) ?>">
                        <div class="menu-title">
                            <?= h($eventType->name) ?>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</nav>
        <div class="col-12" style="text-align: center;">
          <a href="https://mieventoapp.com/">
            <?php echo $this->Html->image('LOGOPRINCIPAL.png', ['class' => 'logoprincipal','style' => 'width: 50%;margin-top: -18px;', 'alt' => 'LOGO' , 'loading' => 'lazy']); ?>
          </a>
        </div>
    </div>
</div>
<!--<?php echo $this->element('notifications'); ?>-->
    <!-- Botón NOTIFICACIONES -->
    <div id="notification-widget">
    <button id="notification-toggle">
        🔔 <span id="notif-count"><?= count($notifications) ?></span>
    </button>
    <div id="notification-list" style="display:none;">
        <ul>
            <?php foreach ($notifications as $note) :
            if ($note->target_type === 'blog_post' && $note->target_id) {
                try {
                    $post = $postsTable->get($note->target_id, ['contain' => ['EventTypes']]);
                    $note->resolved_url = $postsTable->getPostUrl($post);
                } catch (RecordNotFoundException $e) {
                    $note->resolved_url = $note->url ?? '#';
                }
            } else {
                $note->resolved_url = $note->url ?? '#';
            } ?>

                
                <li>
                    <a href="<?=  $note->resolved_url ?>">
                        <strong><?= h($note->title) ?></strong><br>
                        <?= h($note->body) ?><br>
                        <small><?= $note->created->nice() ?></small>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

    
    </header>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
<!-- Botón flotante fijo -->
<a href="#" class="fixed-back-to-top" id="fixed-btn-up" title="Volver arriba">
    <i class="fas fa-arrow-up"></i>
</a>

<!-- FOOTER SIMPLE ADMIN -->
<footer class="modern-footer">
    <div class="footer-content">

       <!-- Eventos (boda, xv...) -->
<div class="footer-navigation">
    <?php if (isset($eventTypesEntities) && !empty($eventTypesEntities)): ?>
        <?php foreach ($eventTypesEntities as $eventType): ?>
            <div class="event-section">
                <h6 class="event-title">
                    <a href="/blog/<?= h($eventType->eventoslug) ?>" class="event-link"><?= h($eventType->name) ?></a>
                </h6>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

        <!-- Brand + Login/Logout -->
        <div class="footer-brand">
            <?= $this->Html->image('LOGOPRINCIPAL.png', [
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
document.addEventListener('DOMContentLoaded', function(){
    const btn = document.getElementById('notif-btn');
    const list = document.getElementById('notif-list');
    const countSpan = document.getElementById('notif-count');

    btn.addEventListener('click', () => {
        list.style.display = (list.style.display === 'block') ? 'none' : 'block';
    });

    function markAsRead(id) {
        fetch(`/notifications/mark-read/${id}`, {
            method: 'POST',
            headers: {
                'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            }
        }).then(res => {
            if(res.ok) {
                pollNotifications(); // refrescar después de marcar como leído
            }
        });
    }

    function pollNotifications() {
        fetch('/notifications/poll', {
            headers: {'Accept': 'application/json'}
        })
        .then(res => res.json())
        .then(data => {
            countSpan.textContent = data.notifications.length;
            if(data.notifications.length === 0) {
                list.innerHTML = '<p style="padding:10px;">No hay nuevas notificaciones</p>';
                return;
            }
            list.innerHTML = data.notifications.map(n => `
                <div style="border-bottom:1px solid #eee; padding:5px 10px; cursor:pointer;">
                    <a href="${n.url || '#'}" style="text-decoration:none; color:#333;" onclick="markAsRead(${n.id})">${n.message}</a>
                </div>
            `).join('');
        });
    }

    setInterval(pollNotifications, 10000); // cada 10 segundos
    pollNotifications();
});
</script>

<script>
document.getElementById('notification-toggle').addEventListener('click', function() {
    const list = document.getElementById('notification-list');
    list.style.display = (list.style.display === 'none') ? 'block' : 'none';
});
</script>
<script>
    function fetchNotifications() {
    fetch('/notifications/fetch', { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
        .then(response => response.json())
        .then(data => {
            const countElem = document.getElementById('notification-count');
            const listElem = document.getElementById('notification-list').querySelector('ul');
            countElem.textContent = data.notifications.length;

            listElem.innerHTML = '';
            data.notifications.forEach(note => {
                listElem.innerHTML += `
                    <li>
                        <a href="${note.url}">
                            <strong>${note.title}</strong><br>
                            ${note.body}<br>
                            <small>${new Date(note.created).toLocaleString()}</small>
                        </a>
                    </li>
                `;
            });
        });
}
// Ejecutar cada 30 segundos
setInterval(fetchNotifications, 30000);
</script>

</body>

</html>
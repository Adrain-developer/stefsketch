

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

 <!-- ... contenido existente del header ... -->
    
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
        <a href="/blog/<?= h($eventType->eventoslug) ?>" style="color: #777777;">
            <div class="menu-title">Inicio</div>
        </a>
    </li>

    <?php foreach ($menuStructure as $entry): ?>
        <?php $eventType = $entry['event']; ?>
        <li class="menu-item">
            <div class="menu-title">
                <?= h($eventType->name) ?>
                <span class="arrow">▼</span>
            </div>

            <ul class="submenu">
                <li>
                    <a href="/blog/<?= h($eventType->eventoslug) ?>/temas">
                        Todas las categorías
                    </a>
                </li>

                <?php foreach ($entry['categories'] as $catEntry): ?>
                    <?php $category = $catEntry['category']; ?>
                    <li class="submenu-item">
                        <a href="/blog/<?= h($eventType->eventoslug) ?>/temas/<?= h($category->slug) ?>">
                            <?= h($category->name) ?>
                        </a>

                        <?php if (!empty($catEntry['subcategories'])): ?>
                            <ul class="sub-submenu">
                                <?php foreach ($catEntry['subcategories'] as $subcategory): ?>
                                    <li>
                                        <a href="/blog/<?= h($eventType->eventoslug) ?>/temas/<?= h($category->slug) ?>/<?= h($subcategory->slug) ?>">
                                            <?= h($subcategory->name) ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
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


<?php
// Detectar el tipo de evento actual desde la URL
$path = $this->request->getPath(); // ej. /blog/xv/post-demo
$pathParts = explode('/', trim($path, '/'));
$currentEventSlug = $pathParts[1] ?? null;

// Reordenar el menú para poner el evento activo al principio
if ($currentEventSlug) {
    $activeEvent = null;
    foreach ($menuStructure as $key => $entry) {
        if ($entry['event']->eventoslug === $currentEventSlug) {
            $activeEvent = $entry;
            unset($menuStructure[$key]);
            break;
        }
    }
    if ($activeEvent) {
        $menuStructure = array_merge([$activeEvent], $menuStructure);
    }
}
?>

<!--FOOTER DINÁMICO CON ACORDEÓN-->
<footer class="modern-footer">
    <div class="footer-content">
        <!-- Navegación -->
        <div class="footer-navigation">
            <?php foreach ($menuStructure as $entry): ?>
                <?php
                  $firstCategory = true;
                  $isCurrentEvent = ($currentEventSlug && $entry['event']->eventoslug === $currentEventSlug);
                  ?>
                <?php $isActiveEvent = ($entry['event']->eventoslug === $currentEventSlug); ?>
                <div class="event-section <?= $isCurrentEvent ? 'active-event' : '' ?>">
                    <h6 class="event-title <?= $isActiveEvent ? 'active-event' : '' ?>" onclick="toggleEvent(this)">
                        <span>
                          <a class="category-link" href="/blog/<?= h($entry['event']->eventoslug) ?>">
                            <i class="fas fa-calendar-alt event-icon"></i>
                            <?= h($entry['event']->name) ?>
                          </a>
                        </span>
                        <i class="fas fa-chevron-down toggle-icon <?= $isActiveEvent ? 'rotated' : '' ?>"></i>
                    </h6>
                    
                    <div class="categories-list <?= $isActiveEvent ? 'active' : '' ?>">
                        <?php foreach ($entry['categories'] as $cat): ?>
                          <?php
                              $isFirstCategory = $firstCategory && $isCurrentEvent;
                              $firstCategory = false;
                              $categorySlug = $this->request->getParam('pass')[1] ?? null;
                              $subcatAnchor = $this->request->getParam('pass')[2] ?? null;
                              $currentUrl = $this->request->getRequestTarget(); // obtiene la URL completa
                          ?>
                            <div class="category-group">
                                <?php if (!empty($cat['subcategories'])): ?>
                                    <div class="category-item-footer <?= $isFirstCategory ? 'open' : '' ?>">
                                        <?php
                                          $isActiveCategory = strpos($currentUrl, '/temas/' . $cat['category']->slug) !== false;
                                        ?>
                                        <a class="category-link <?= $isActiveCategory ? 'active' : '' ?>" 
                                          href="/blog/<?= h($entry['event']->eventoslug) ?>/temas/<?= h($cat['category']->slug) ?>">
                                            <?= h($cat['category']->name) ?>
                                        </a>
                                        <button class="category-toggle" onclick="toggleCategory(this)">
                                            <i class="fas fa-chevron-down"></i>
                                        </button>
                                    </div>
                                    <ul class="subcategories <?= $isFirstCategory ? 'open' : 'collapsed' ?>">
                                        <?php foreach ($cat['subcategories'] as $subcat): ?>
                                          <?php
                                              $isActiveSubcat = strpos($currentUrl, '#' . $subcat->slug) !== false;
                                          ?>
                                          <li class="subcategory-item">
                                              <a class="subcategory-link <?= $isActiveSubcat ? 'active' : '' ?>"
                                                href="/blog/<?= h($entry['event']->eventoslug) ?>/temas/<?= h($cat['category']->slug) ?>/<?= h($subcat->slug) ?>">
                                                  <i class="fas fa-chevron-right"></i>
                                                  <?= h($subcat->name) ?>
                                              </a>
                                          </li>
                                      <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <a class="category-link" href="/blog/<?= h($entry['event']->eventoslug) ?>/temas/<?= h($cat['category']->slug) ?>">
                                        <?= h($cat['category']->name) ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        

        <!-- Brand / Logo -->
        <div class="footer-brand">

 <!-- ... contenido existente del footer ... -->
    <div class="subscription-form">
        <h3>Suscríbete para recibir notificaciones</h3>
        <form action="/users/subscribe" method="post">
            <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'subscribe']]) ?>
            <input type="email" name="email" placeholder="Ingresa tu correo" required>
            <button type="submit">Suscribirse</button>
            <?= $this->Form->end() ?>
        </form>
    </div>

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
            body: JSON.stringify({ids: [notificationId]})
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
            ulElement.innerHTML = '<li style="padding:16px; text-align:center; color:#999;">No hay nuevas notificaciones</li>';
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

</body>

</html>

</html>
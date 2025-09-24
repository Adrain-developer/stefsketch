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

</body>

</html>

</html>
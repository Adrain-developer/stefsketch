<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    /*
     * The default class to use for all routes
     *
     * The following route classes are supplied with CakePHP and are appropriate
     * to set as the default:
     *
     * - Route
     * - InflectedRoute
     * - DashedRoute
     *
     * If no call is made to `Router::defaultRouteClass()`, the class used is
     * `Route` (`Cake\Routing\Route\Route`)
     *
     * Note that `Route` does not do any inflections on URLs which will result in
     * inconsistently cased URLs when used with `{plugin}`, `{controller}` and
     * `{action}` markers.
     */
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {
    /*
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, templates/Pages/home.php)...
     */
    $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    /*
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $builder->connect('/pages/*', 'Pages::display');

    // RUTAS DEL BLOG - ORDEN ESPECÍFICO (de más específica a menos específica)

// RUTAS ESPECÍFICAS DE ADMINISTRACIÓN - DEBEN IR PRIMERO
// RUTAS ESPECÍFICAS DE ADMINISTRACIÓN - DEBEN IR PRIMERO
$builder->connect('/portafolio-posts', [
    'controller' => 'BlogPosts', 
    'action' => 'index'
]);

// Agregar nuevo proyecto
$builder->connect('/portafolio/add', [
    'controller' => 'BlogPosts', 
    'action' => 'add'
]);

// Editar proyecto específico
$builder->connect('/portafolio/edit/*', [
    'controller' => 'BlogPosts', 
    'action' => 'edit'
]);

// Eliminar proyecto específico
$builder->connect('/portafolio/delete/*', [
    'controller' => 'BlogPosts', 
    'action' => 'delete'
]);

$builder->connect('/portafolio-posts/update-views', [
    'controller' => 'BlogPosts', 
    'action' => 'updateViews'
]);


// 1. Ver todos los temas (categorías) de un tipo de evento
// Ruta: /portafolio/{eventoslug}/temas
$builder->connect('/portafolio/{eventoslug}/temas', [
    'controller' => 'Blog',
    'action' => 'eventoView',
    'showType' => 'categories'
])->setPass(['eventoslug', 'showType'])
  ->setPatterns(['eventoslug' => '[a-z0-9\-]+']);

// 2. Ver todas las etiquetas de un tipo de evento  
// Ruta: /portafolio/{eventoslug}/etiquetas
$builder->connect('/portafolio/{eventoslug}/etiquetas', [
    'controller' => 'Blog',
    'action' => 'eventoView',
    'showType' => 'tags'
])->setPass(['eventoslug', 'showType'])
  ->setPatterns(['eventoslug' => '[a-z0-9\-]+']);

// 3. NUEVA RUTA: Ver posts de una subcategoría específica
// Ruta: /portafolio/{eventoslug}/temas/{categorySlug}/{subcategorySlug}
$builder->connect('/portafolio/{eventoslug}/temas/{categorySlug}/{subcategorySlug}', [
    'controller' => 'Blog',
    'action' => 'eventoView'
])->setPass(['eventoslug', 'categorySlug', 'subcategorySlug'])
  ->setPatterns([
      'eventoslug' => '[a-z0-9\-]+',
      'categorySlug' => '[a-z0-9\-]+',
      'subcategorySlug' => '[a-z0-9\-]+'
  ]);

// 4. Ver todos los posts de una categoría específica
// Ruta: /portafolio/{eventoslug}/temas/{categorySlug}
$builder->connect('/portafolio/{eventoslug}/temas/{categorySlug}', [
    'controller' => 'Blog',
    'action' => 'eventoView'
])->setPass(['eventoslug', 'categorySlug'])
  ->setPatterns([
      'eventoslug' => '[a-z0-9\-]+', 
      'categorySlug' => '[a-z0-9\-]+'
  ]);

// 5. Ver todos los posts de una etiqueta específica
// Ruta: /portafolio/{eventoslug}/etiquetas/{tagSlug}
$builder->connect('/portafolio/{eventoslug}/etiquetas/{tagSlug}', [
    'controller' => 'Blog',
    'action' => 'eventoView'
])->setPass(['eventoslug', 'tagSlug'])
  ->setPatterns([
      'eventoslug' => '[a-z0-9\-]+', 
      'tagSlug' => '[a-z0-9\-]+'
  ]);

// 6. Ruta para vista de tipo de evento (ej: /portafolio/boda, /portafolio/xvs)
// Esta debe ir DESPUÉS de las rutas más específicas
$builder->connect('/portafolio/{eventoslug}', [
    'controller' => 'Blog',
    'action' => 'eventoView'
])->setPass(['eventoslug'])
  ->setPatterns(['eventoslug' => '[a-z0-9\-]+']);

// 7. Vista de un solo post por slug
// Ruta: /portafolio/{eventoslug}/{slug}
// Esta debe ir AL FINAL porque es muy general
$builder->connect('/portafolio/{eventoslug}/{slug}', [
    'controller' => 'Blog',
    'action' => 'view'
])->setPass(['eventoslug', 'slug'])
  ->setPatterns([
      'eventoslug' => '[a-z0-9\-]+',
      'slug' => '[a-z0-9\-]+'
  ]);

// 8. Índice general del portafolio
$builder->connect('/portafolio', ['controller' => 'Blog', 'action' => 'index']);


    
// ========== RUTAS DE NOTIFICACIONES ==========
// Al final de routes.php, antes del cierre
$builder->connect('/notifications/check.json', [
    'controller' => 'Notifications', 
    'action' => 'check',
    '_ext' => 'json'
]);

$builder->connect('/notifications/mark-read.json', [
    'controller' => 'Notifications', 
    'action' => 'markRead',
    '_ext' => 'json'
]);

$builder->connect('/notifications/public.json', [
    'controller' => 'Notifications', 
    'action' => 'publicNotifications',
    '_ext' => 'json'
]);
    

    // Rutas logs
    $builder->connect('/login', ['controller' => 'Users', 'action' => 'login']);
    $builder->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);

    /*
     * Connect catchall routes for all controllers.
     */
    $builder->fallbacks();
});


    /*
     * If you need a different set of middleware or none at all,
     * open new scope and define routes there.
     *
     * ```
     * $routes->scope('/api', function (RouteBuilder $builder) {
     *     // No $builder->applyMiddleware() here.
     *
     *     // Parse specified extensions from URLs
     *     // $builder->setExtensions(['json', 'xml']);
     *
     *     // Connect API actions here.
     * });
     * ```
     */
};

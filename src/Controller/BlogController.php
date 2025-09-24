<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class BlogController extends AppController
{
   public function initialize(): void
{
    parent::initialize();
    $this->viewBuilder()->setLayout('blog_layout'); // Usa templates/layout/blog_layout.php

    $this->loadModel('BlogPosts');
    $this->loadModel('EventTypes');
    $this->loadModel('BlogCategories');
    $this->loadModel('BlogTags');
    
    // ✨ NUEVO: Cargar el componente de auto-publicación
    //$this->loadComponent('WebScheduler', [
    //    'throttleMinutes' => 5, // Solo ejecutar cada 5 minutos
    //    'logFile' => 'web_scheduler'
    //]);
    
    // ✨ NUEVO: Ejecutar auto-publicación en cada carga de página
    //try {
    //    $this->WebScheduler->publishScheduledPosts();
    //} catch (\Exception $e) {
        // Si hay error, no afecta el funcionamiento del sitio
        // Solo se registra en los logs
    //}
}

public function beforeRender(\Cake\Event\EventInterface $event)
{
    parent::beforeRender($event);
    $this->buildBlogMenu();
}
    
public function index()
{
    // Obtener todos los EventTypes que tienen posts activos
    $allEventTypes = $this->EventTypes->find()
        ->orderAsc('EventTypes.name')
        ->toArray();
    
    $eventTypesWithPosts = [];
    
    // Para cada EventType, obtener sus mejores posts
    foreach ($allEventTypes as $eventType) {
        $posts = $this->BlogPosts->find()
            ->contain(['BlogCategories', 'BlogTags'])
            ->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.event_type_id' => $eventType->id,
                'BlogPosts.banner IS NOT' => null  // Solo posts con imagen
            ])
            ->order(['BlogPosts.created' => 'DESC'])
            ->limit(5)  // ← CAMBIO: Solo 5 posts por carrusel
            ->toArray();
        
        // Solo agregar EventTypes que tienen posts
        if (!empty($posts)) {
            $eventType->posts = $posts;
            $eventTypesWithPosts[] = $eventType;
        }
    }
    
    $this->set(compact('eventTypesWithPosts'));
}

public function eventoView($eventoslug = null, $param2 = null, $param3 = null)
{
    $this->loadModel('EventTypes');
    $this->loadModel('BlogPosts');
    $this->loadModel('BlogCategories');
    $this->loadModel('BlogSubcategories');
    $this->loadModel('Notifications');

    $categoryId = null;
    $tagId = null;

    $categorySlug = null;
    $subcategorySlug = null;
    $tagSlug = null;
    $showType = null;

    $eventType = $this->EventTypes->find()
        ->where(['eventoslug' => $eventoslug])
        ->firstOrFail();

    if ($param2 === 'categories' || $param2 === 'tags') {
        $showType = $param2;
    } elseif (!empty($param2)) {
        $currentUrl = $this->request->getRequestTarget();
        if (strpos($currentUrl, '/temas/') !== false) {
            $categorySlug = $param2;
            if (!empty($param3)) {
                $subcategorySlug = $param3;
            }
        } elseif (strpos($currentUrl, '/etiquetas/') !== false) {
            $tagSlug = $param2;
        }
    }

    $show = $this->request->getQuery('show') ?: $showType;

    $query = $this->BlogPosts->find()
        ->contain(['BlogCategories', 'BlogTags'])
        ->where([
            'BlogPosts.status' => 'activo',
            'BlogPosts.event_type_id' => $eventType->id,
            'BlogPosts.banner IS NOT' => null,
        ])
        ->order(['BlogPosts.modified' => 'DESC']);

    $pageTitle = 'Lo nuevo en ' . $eventType->name;
    $pageDescription = '';
    $mostrarTemas = false;
    $category = null;

    if ($show === 'categories') {
        $mostrarTemas = true;
        $pageTitle = 'Temas en ' . $eventType->name;
        $pageDescription = 'Explora los temas disponibles en ' . $eventType->name;
    }

    if ($show === 'tags') {
        $mostrarTemas = false;
        $pageTitle = 'Etiquetas en ' . $eventType->name;
        $pageDescription = 'Explora las etiquetas disponibles en ' . $eventType->name;
    }

    if (!empty($categorySlug)) {
        $category = $this->BlogPosts->BlogCategories->find()
            ->where(['slug' => $categorySlug])
            ->first();

        if ($category) {
            $categoryId = $category->id;

            if (empty($subcategorySlug)) {
                $query->where(['BlogPosts.blog_category_id' => $categoryId]);
                $pageTitle = 'Artículos sobre ' . $category->name . ' en ' . $eventType->name;
                $pageDescription = $category->description ?: $pageTitle;
            }
        } else {
            throw new \Cake\Http\Exception\NotFoundException('Categoría no encontrada');
        }
    }

    if (!empty($subcategorySlug)) {
        if (!$category) {
            throw new \Cake\Http\Exception\NotFoundException('Categoría no encontrada');
        }

        $subcategory = $this->BlogPosts->BlogSubcategories->find()
            ->where([
                'BlogSubcategories.slug' => $subcategorySlug,
            ])
            ->matching('BlogCategories', function ($q) use ($category) {
                return $q->where(['BlogCategories.id' => $category->id]);
            })
            ->first();

        if ($subcategory) {
            $query
                ->where(['BlogPosts.blog_category_id' => $category->id])
                ->matching('BlogSubcategories', function ($q) use ($subcategory) {
                    return $q->where(['BlogSubcategories.id' => $subcategory->id]);
                });

            $pageTitle = 'Artículos sobre ' . $subcategory->name . ' en ' . $category->name . ' - ' . $eventType->name;
            $pageDescription = $subcategory->description ?? $pageTitle;
        } else {
            throw new \Cake\Http\Exception\NotFoundException('Subcategoría no encontrada');
        }
    }

    if (!empty($tagSlug)) {
        $tag = $this->BlogPosts->BlogTags->find()
            ->where(['slug' => $tagSlug])
            ->first();

        if ($tag) {
            $tagId = $tag->id;
            $query->matching('BlogTags', function ($q) use ($tagId) {
                return $q->where(['BlogTags.id' => $tagId]);
            });
            $pageTitle = 'Artículos sobre ' . $tag->name . ' en ' . $eventType->name;
        } else {
            throw new \Cake\Http\Exception\NotFoundException('Etiqueta no encontrada');
        }
    }

    if ($show !== 'categories' && $show !== 'tags') {
        $this->paginate = ['limit' => 12];
        $posts = $this->paginate($query);
    } else {
        $posts = [];
    }

    // 🔄 LÓGICA SIMPLIFICADA: mostrar categorías y subcategorías siempre
    $organizedSubcategories = [];
    
    // SIEMPRE obtener las categorías que tienen posts activos
    $blogCategories = $this->BlogPosts->BlogCategories
        ->find()
        ->matching('BlogPosts', function ($q) use ($eventType) {
            return $q->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.event_type_id' => $eventType->id,
                'BlogPosts.banner IS NOT' => null
            ]);
        })
        ->distinct(['BlogCategories.id'])
        ->orderAsc('BlogCategories.name')
        ->all();

    // Obtener subcategorías para mostrar en acordeón (SIEMPRE, excepto cuando se muestran solo tags)
    if ($show !== 'tags') {
        // Obtener directamente la relación subcategoría -> categoría con conteo de posts
        $subcategoriesWithCounts = $this->BlogPosts->find()
            ->select([
                'subcategory_id' => 'BlogSubcategories.id',
                'subcategory_name' => 'BlogSubcategories.name',
                'subcategory_slug' => 'BlogSubcategories.slug',
                'category_id' => 'BlogCategories.id',
                'post_count' => 'COUNT(BlogPosts.id)'
            ])
            ->leftJoinWith('BlogSubcategories')
            ->leftJoinWith('BlogCategories')
            ->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.event_type_id' => $eventType->id,
                'BlogPosts.banner IS NOT' => null,
                'BlogSubcategories.id IS NOT' => null,
                'BlogCategories.id IS NOT' => null
            ])
            ->group([
                'BlogSubcategories.id',
                'BlogSubcategories.name', 
                'BlogSubcategories.slug',
                'BlogCategories.id'
            ])
            ->having(['COUNT(BlogPosts.id) >' => 0])
            ->orderAsc('BlogSubcategories.name')
            ->toArray();

        // Organizar los resultados por categoría
        foreach ($subcategoriesWithCounts as $subcatData) {
            $organizedSubcategories[$subcatData['category_id']][] = (object)[
                'id' => $subcatData['subcategory_id'],
                'name' => $subcatData['subcategory_name'],
                'slug' => $subcatData['subcategory_slug'],
                'count' => $subcatData['post_count']
            ];
        }
    }

    // Obtener categorías utilizadas (ya las tenemos arriba, no necesitamos duplicar)
    $breadcrumbCategories = collection($blogCategories)->combine('id', 'name')->toArray();

    // Tags (esta lógica ya funcionaba bien)
    $blogTags = $this->BlogPosts->BlogTags
        ->find()
        ->select([
            'BlogTags.id',
            'BlogTags.name',
            'BlogTags.slug',
            'count' => 'COUNT(BlogPosts.id)'
        ])
        ->leftJoinWith('BlogPosts', function ($q) use ($eventType) {
            return $q->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.event_type_id' => $eventType->id,
                'BlogPosts.banner IS NOT' => null,
            ]);
        })
        ->group(['BlogTags.id', 'BlogTags.name', 'BlogTags.slug'])
        ->having(['COUNT(BlogPosts.id) >' => 0])
        ->orderDesc('count')
        ->toArray();

    $breadcrumbTags = collection($blogTags)->combine('id', 'name')->toArray();

    // Posts más vistos
    if ($show !== 'categories' && $show !== 'tags') {
        $mostViewedPosts = $this->BlogPosts->find()
            ->where([
                'BlogPosts.event_type_id' => $eventType->id,
                'BlogPosts.status' => 'activo',
                'BlogPosts.banner IS NOT' => null,
            ])
            ->orderDesc('BlogPosts.views')
            ->limit(4)
            ->contain(['BlogCategories', 'BlogTags', 'BlogAuthors'])
            ->all();
    } else {
        $mostViewedPosts = [];
    }

    // Determinar qué categoría debe estar desplegada por defecto
    $firstCategoryId = null;
    if (!empty($blogCategories)) {
        $firstCategory = $blogCategories->first();
        $firstCategoryId = $firstCategory ? $firstCategory->id : null;
    }

    // Determinar categoría activa para el acordeón
    $activeCategoryId = null;
    if (!empty($categorySlug) && $category) {
        // Si estamos en una categoría específica, esa debe estar activa
        $activeCategoryId = $category->id;
    } elseif (!empty($subcategorySlug)) {
        // Si estamos en una subcategoría, su categoría padre debe estar activa
        $activeCategoryId = $category ? $category->id : $firstCategoryId;
    } else {
        // En la vista principal, la primera categoría debe estar activa
        $activeCategoryId = $firstCategoryId;
    }

    $this->set(compact(
        'eventType',
        'posts',
        'blogCategories',
        'blogTags',
        'categoryId',
        'tagId',
        'categorySlug',
        'subcategorySlug',
        'tagSlug',
        'breadcrumbCategories',
        'breadcrumbTags',
        'show',
        'pageTitle',
        'pageDescription',
        'mostrarTemas',
        'mostViewedPosts',
        'organizedSubcategories',
        'activeCategoryId'
    ));
}

    public function view($eventoslug = null, $slug = null)
{
    $this->request->allowMethod(['get']);

    // Obtener el tipo de evento por slug
    $eventType = $this->BlogPosts->EventTypes->find()
        ->where(['eventoslug' => $eventoslug])
        ->firstOrFail();

    // Buscar el post actual
    $blogPost = $this->loadModel('BlogPosts')->find()
        ->where([
            'BlogPosts.slug' => $slug,
            'BlogPosts.event_type_id' => $eventType->id,
            'BlogPosts.status' => 'activo',
        ])
        ->contain(['BlogAuthors', 'EventTypes', 'BlogTags', 'BlogCategories'])
        ->firstOrFail();

    // Aumentar vistas
    $this->BlogPosts->getConnection()->execute(
        'UPDATE blog_posts SET views = views + 1 WHERE id = ?',
        [$blogPost->id]
    );

    // Marcar notificaciones como leídas
    $user = $this->request->getAttribute('identity');
    if ($user) {
        $this->loadModel('Notifications');
        $notifications = $this->Notifications->find()
            ->where([
                'user_id' => $user->id,
                'target_type' => 'blog_post',
                'target_id' => $blogPost->id,
                'is_read' => false
            ])
            ->all();
        foreach ($notifications as $notification) {
            $notification->is_read = true;
            $this->Notifications->save($notification);
        }
    }

    // Post anterior (dentro de la misma categoría preferentemente)
    $prevPost = $this->BlogPosts->find()
        ->where([
            'BlogPosts.status' => 'activo',
            'BlogPosts.id <' => $blogPost->id,
            'BlogPosts.event_type_id' => $blogPost->event_type_id,
            'BlogPosts.blog_category_id' => $blogPost->blog_category_id
        ])
        ->order(['BlogPosts.id' => 'DESC'])
        ->first();

    if (!$prevPost) {
        // Si no hay más en la misma categoría, buscar dentro del mismo tipo de evento
        $prevPost = $this->BlogPosts->find()
            ->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.id <' => $blogPost->id,
                'BlogPosts.event_type_id' => $blogPost->event_type_id
            ])
            ->order(['BlogPosts.id' => 'DESC'])
            ->first();
    }

    // Post siguiente (dentro de la misma categoría preferentemente)
    $nextPost = $this->BlogPosts->find()
        ->where([
            'BlogPosts.status' => 'activo',
            'BlogPosts.id >' => $blogPost->id,
            'BlogPosts.event_type_id' => $blogPost->event_type_id,
            'BlogPosts.blog_category_id' => $blogPost->blog_category_id
        ])
        ->order(['BlogPosts.id' => 'ASC'])
        ->first();

    if (!$nextPost) {
        // Si no hay más en la misma categoría, buscar dentro del mismo tipo de evento
        $nextPost = $this->BlogPosts->find()
            ->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.id >' => $blogPost->id,
                'BlogPosts.event_type_id' => $blogPost->event_type_id
            ])
            ->order(['BlogPosts.id' => 'ASC'])
            ->first();
    }

    // Posts relacionados por categoría (excluyendo el actual)
    $relatedPosts = $this->BlogPosts->find()
        ->where([
            'BlogPosts.status' => 'activo',
            'BlogPosts.id !=' => $blogPost->id,
            'BlogPosts.event_type_id' => $blogPost->event_type_id,
            'BlogPosts.blog_category_id' => $blogPost->blog_category_id
        ])
        ->limit(4)
        ->order(['BlogPosts.created' => 'DESC'])
        ->all();

    // Posts populares (más vistos dentro del mismo tipo de evento)
    $popularPosts = $this->BlogPosts->find()
        ->where([
            'BlogPosts.status' => 'activo',
            'BlogPosts.event_type_id' => $blogPost->event_type_id
        ])
        ->order(['BlogPosts.views' => 'DESC'])
        ->limit(4)
        ->all();

    // Posts por tags en común
    $tagIds = collection($blogPost->blog_tags)->extract('id')->toList();
    $tagPosts = [];
    if (!empty($tagIds)) {
        $tagPosts = $this->BlogPosts->find()
            ->matching('BlogTags', function ($q) use ($tagIds) {
                return $q->where(['BlogTags.id IN' => $tagIds]);
            })
            ->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.id !=' => $blogPost->id,
                'BlogPosts.event_type_id' => $blogPost->event_type_id
            ])
            ->distinct(['BlogPosts.id'])
            ->limit(4)
            ->all();
    }

    // Posts del mismo autor (excluyendo el actual)
    $authorPosts = [];
    if (!empty($blogPost->blog_author_id)) {
        $authorPosts = $this->BlogPosts->find()
            ->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.blog_author_id' => $blogPost->blog_author_id,
                'BlogPosts.id !=' => $blogPost->id,
                'BlogPosts.event_type_id' => $blogPost->event_type_id
            ])
            ->order(['BlogPosts.created' => 'DESC'])
            ->limit(4)
            ->contain(['BlogCategories', 'EventTypes'])
            ->all();
    }

    $this->set(compact('blogPost', 'eventType', 'relatedPosts', 'popularPosts', 'tagPosts', 'nextPost', 'prevPost', 'authorPosts'));
}
    private function buildBlogMenu()
{
    $this->loadModel('EventTypes');
    $this->loadModel('BlogPosts');
    $this->loadModel('BlogCategories');
    $this->loadModel('BlogSubcategories');

    // Obtener todos los tipos de evento
    $eventTypes = $this->EventTypes->find('all')->orderAsc('name')->toArray();

    // Obtener todos los posts con sus relaciones
    $posts = $this->BlogPosts->find()
        ->contain([
            'BlogCategories',
            'BlogSubcategories',
        ])
        ->all();

    // Estructura del menú
    $menuStructure = [];

    foreach ($eventTypes as $eventType) {
        $menuStructure[$eventType->id] = [
            'event' => $eventType,
            'categories' => []
        ];

        // Filtrar los posts de este tipo de evento
        $eventPosts = $posts->filter(function ($post) use ($eventType) {
            return $post->event_type_id == $eventType->id;
        });

        $categories = [];

        foreach ($eventPosts as $post) {
            $category = $post->blog_category;
            if (!$category) continue;

            $categoryId = $category->id;

            if (!isset($categories[$categoryId])) {
                $categories[$categoryId] = [
                    'category' => $category,
                    'subcategories' => []
                ];
            }

            foreach ($post->blog_subcategories as $subcat) {
                $subcatId = $subcat->id;
                if (!isset($categories[$categoryId]['subcategories'][$subcatId])) {
                    $categories[$categoryId]['subcategories'][$subcatId] = $subcat;
                }
            }
        }

        // Convertir subcategorías a array plano
        foreach ($categories as &$catData) {
            $catData['subcategories'] = array_values($catData['subcategories']);
        }

        $menuStructure[$eventType->id]['categories'] = array_values($categories);
    }

    $this->set('menuStructure', $menuStructure);
}


}
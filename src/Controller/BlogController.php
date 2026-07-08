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
    
    $this->loadModel('EventTypes');
    
    // ⭐ NO pasar allEventTypes si estamos en view
    if ($this->request->getParam('action') !== 'view') {
        $allEventTypes = $this->EventTypes->find()->orderAsc('name')->toArray();
        $this->set(compact('allEventTypes'));
    }
    
    $this->buildBlogMenu();
}
    
public function index()
{
    $this->viewBuilder()->setLayout('ui-layout'); // ← Usar nuevo layout
    
    // Obtener todos los EventTypes que tienen posts activos
    $allEventTypes = $this->EventTypes->find()
        ->orderAsc('EventTypes.name')
        ->toArray();
    
    $eventTypesWithPosts = [];
    
    // Para cada EventType, obtener datos completos
    foreach ($allEventTypes as $eventType) {
    // Obtener posts del EventType
    $posts = $this->BlogPosts->find()
        ->contain(['BlogCategories'])
        ->where([
            'BlogPosts.status' => 'activo',
            'BlogPosts.event_type_id' => $eventType->id,
            'BlogPosts.banner IS NOT' => null
        ])
        ->order(['BlogPosts.created' => 'DESC'])
        ->toArray();
    
    if (!empty($posts)) {
        // Obtener la primera imagen (post más reciente)
        $eventType->featured_image = !empty($posts[0]->banner) ? $posts[0]->banner : null;
        
        // Contar posts totales
        $eventType->posts_count = count($posts);
        
        // ✅ AGREGAR ESTO: Obtener las últimas 4 imágenes
        $allImages = [];
        
        // Usar los posts ya obtenidos
        foreach ($posts as $post) {
            // Agregar banner si existe
            if (!empty($post->banner)) {
                $allImages[] = $post->banner;
            }
            
            // Agregar imágenes de galería si existen
            if (!empty($post->gallery)) {
                $gallery = json_decode($post->gallery, true);
                if (is_array($gallery)) {
                    foreach ($gallery as $galleryImage) {
                        if (!empty($galleryImage)) {
                            $allImages[] = $galleryImage;
                        }
                    }
                }
            }
        }
        
        // Obtener las últimas 4 imágenes únicas
        $allImages = array_unique($allImages);
        $eventType->recent_images = array_slice($allImages, 0, 4);
        // ✅ FIN AGREGAR
        
        // Obtener categorías únicas del EventType
        $categories = $this->BlogPosts->BlogCategories
            ->find()
            ->matching('BlogPosts', function ($q) use ($eventType) {
                return $q->where([
                    'BlogPosts.status' => 'activo',
                    'BlogPosts.event_type_id' => $eventType->id
                ]);
            })
            ->distinct(['BlogCategories.id'])
            ->orderAsc('BlogCategories.name')
            ->limit(3) // Máximo 3 categorías para no saturar
            ->toArray();
        
        $eventType->categories = $categories;
        $eventTypesWithPosts[] = $eventType;
    }
}

    // ✨ Post random con rotación de 24 horas
    $session = $this->request->getSession();
    $featuredPostId = $session->read('featured_post_id');
    $featuredPostTimestamp = $session->read('featured_post_timestamp');
    $currentTime = time();

    // Validar si han pasado 24 horas (86400 segundos)
    $needNewPost = false;
    $randomPost = null;

    if (!$featuredPostId || !$featuredPostTimestamp || ($currentTime - $featuredPostTimestamp) >= 86400) {
        // No hay post en sesión o han pasado 24 horas
        $needNewPost = true;
    } else {
        // Intentar cargar el post guardado en sesión con manejo de errores
        try {
            $randomPost = $this->BlogPosts->get($featuredPostId, [
                'contain' => ['BlogCategories', 'EventTypes']
            ]);

            // Validar que el post siga cumpliendo todos los requisitos
            if ($randomPost->status !== 'activo' ||
                empty($randomPost->banner) ||
                empty($randomPost->gallery) ||
                empty($randomPost->blog_category) ||
                empty($randomPost->event_type)) {
                $needNewPost = true;
                $randomPost = null;
            } else {
                // Validar que gallery tenga al menos 1 imagen válida
                $gallery = json_decode($randomPost->gallery, true);
                if (!is_array($gallery) || empty($gallery)) {
                    $needNewPost = true;
                    $randomPost = null;
                }
            }
        } catch (\Exception $e) {
            // Si el post fue eliminado o hay error, buscar uno nuevo
            $needNewPost = true;
            $randomPost = null;
        }
    }

    // Si necesitamos un nuevo post, buscarlo
    if ($needNewPost) {
        // Buscar posts que cumplan TODOS los requisitos
        $candidatePosts = $this->BlogPosts->find()
            ->contain(['BlogCategories', 'EventTypes'])
            ->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.banner IS NOT' => null,
                'BlogPosts.gallery IS NOT' => null,
                'BlogPosts.blog_category_id IS NOT' => null,
                'BlogPosts.event_type_id IS NOT' => null
            ])
            ->order(['RAND()'])
            ->limit(20) // Obtener varios candidatos para filtrar
            ->all();

        // Filtrar posts que tengan gallery con al menos 1 imagen válida
        $randomPost = null;
        foreach ($candidatePosts as $post) {
            $gallery = json_decode($post->gallery, true);

            // Validar que gallery sea array válido con al menos 1 imagen
            if (is_array($gallery) && !empty($gallery) &&
                !empty($post->blog_category) &&
                !empty($post->event_type)) {
                $randomPost = $post;
                break;
            }
        }

        // Guardar en sesión si encontramos un post válido
        if ($randomPost) {
            $session->write('featured_post_id', $randomPost->id);
            $session->write('featured_post_timestamp', $currentTime);
        }
    }
    
    
    // Banners parallax dinámicos de la portada (con fallback a los defaults)
    $this->loadModel('BlogBanners');
    $bannerImages = $this->BlogBanners->resolveForPublic();

    $this->set(compact('eventTypesWithPosts', 'randomPost', 'bannerImages'));
}

public function eventoView($eventoslug = null, $param2 = null, $param3 = null)
{
    $this->viewBuilder()->setLayout('ui-layout'); // ← Usar nuevo layout
    
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

    $this->loadModel('EventTypes');
    $allEventTypes = $this->EventTypes->find()->orderAsc('name')->toArray();
    $this->set(compact('allEventTypes'));

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

        if (isset($blogCategories)) {
        foreach ($blogCategories as $category) {
            $category->count = $this->BlogPosts->find()
                ->where([
                    'blog_category_id' => $category->id,
                    'event_type_id' => $eventType->id,
                    'status' => 'activo'
                ])
                ->count();
        }
    }

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
    $this->viewBuilder()->setLayout('ui-layout');
    $this->request->allowMethod(['get']);

    // 1. Obtener el tipo de evento por slug
    $eventType = $this->BlogPosts->EventTypes->find()
        ->where(['eventoslug' => $eventoslug])
        ->firstOrFail();

    // 2. Buscar el post actual con sus relaciones (SIN BlogAuthors)
    try {
        $blogPost = $this->loadModel('BlogPosts')->find()
            ->where([
                'BlogPosts.slug' => $slug,
                'BlogPosts.event_type_id' => $eventType->id,
                'BlogPosts.status' => 'activo',
            ])
            ->contain(['EventTypes', 'BlogTags', 'BlogCategories'])
            ->firstOrFail();
        } catch (\Cake\Datasource\Exception\RecordNotFoundException $e) {
            // Guardar mensaje en sesión para mostrarlo como toast
            $this->request->getSession()->write('toast', [
                'message' => 'Este proyecto ya no está disponible.',
                'type' => 'error'
            ]);
            return $this->redirect('/');
        }

    // 3. Aumentar contador de vistas
    $this->BlogPosts->getConnection()->execute(
        'UPDATE blog_posts SET views = views + 1 WHERE id = ?',
        [$blogPost->id]
    );

    // 4. Obtener post anterior (mismo EventType)
    $prevPost = $this->BlogPosts->find()
        ->where([
            'BlogPosts.event_type_id' => $eventType->id,
            'BlogPosts.status' => 'activo',
            'BlogPosts.created <' => $blogPost->created
        ])
        ->order(['BlogPosts.created' => 'DESC'])
        ->first();

    // 5. Obtener post siguiente (mismo EventType)
    $nextPost = $this->BlogPosts->find()
        ->where([
            'BlogPosts.event_type_id' => $eventType->id,
            'BlogPosts.status' => 'activo',
            'BlogPosts.created >' => $blogPost->created
        ])
        ->order(['BlogPosts.created' => 'ASC'])
        ->first();

    // 6. Posts relacionados por categoría (excluyendo el actual)
    $relatedPosts = [];
    if (!empty($blogPost->blog_category_id)) {
        $relatedPosts = $this->BlogPosts->find()
            ->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.blog_category_id' => $blogPost->blog_category_id,
                'BlogPosts.id !=' => $blogPost->id,
                'BlogPosts.banner IS NOT' => null
            ])
            ->order(['BlogPosts.created' => 'DESC'])
            ->limit(3)
            ->contain(['BlogCategories', 'EventTypes'])
            ->all();
    }

    // 7. Posts relacionados por tags (si tiene tags y necesitamos más relacionados)
    $tagPosts = [];
    if (!empty($blogPost->blog_tags) && count($relatedPosts) < 3) {
        $tagIds = collection($blogPost->blog_tags)->extract('id')->toArray();
        
        $tagPosts = $this->BlogPosts->find()
            ->matching('BlogTags', function ($q) use ($tagIds) {
                return $q->where(['BlogTags.id IN' => $tagIds]);
            })
            ->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.id !=' => $blogPost->id,
                'BlogPosts.event_type_id' => $blogPost->event_type_id,
                'BlogPosts.banner IS NOT' => null
            ])
            ->distinct(['BlogPosts.id'])
            ->limit(3 - count($relatedPosts))
            ->contain(['BlogCategories', 'EventTypes'])
            ->all();
    }

   // 8. Obtener todos los EventTypes disponibles
$allEventTypes = $this->BlogPosts->EventTypes->find()
    ->orderAsc('EventTypes.name')
    ->toArray();

// 9. Para cada EventType, agregar datos completos
$allEventTypesComplete = [];
foreach ($allEventTypes as $type) {
    // Obtener posts del tipo
    $posts = $this->BlogPosts->find()
        ->contain(['BlogCategories'])
        ->where([
            'BlogPosts.status' => 'activo',
            'BlogPosts.event_type_id' => $type->id,
            'BlogPosts.banner IS NOT' => null
        ])
        ->order(['BlogPosts.views' => 'DESC'])
        ->toArray();
    
    if (!empty($posts)) {
        // Featured image del post más visto
        $type->featured_image = $posts[0]->banner;
        
        // Categorías (máximo 3)
        $type->categories = $this->BlogPosts->BlogCategories
            ->find()
            ->matching('BlogPosts', function ($q) use ($type) {
                return $q->where([
                    'BlogPosts.status' => 'activo',
                    'BlogPosts.event_type_id' => $type->id
                ]);
            })
            ->distinct(['BlogCategories.id'])
            ->orderAsc('BlogCategories.name')
            ->limit(3)
            ->toArray();
        
        $type->posts_count = count($posts);
        $allEventTypesComplete[] = $type;
    }
}

$allEventTypes = $allEventTypesComplete;

// 10. Pasar variables a la vista
$this->set(compact(
    'blogPost',
    'eventType',
    'prevPost',
    'nextPost',
    'relatedPosts',
    'tagPosts',
    'allEventTypes'
));
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


    public function demo()
{
    $this->viewBuilder()->setLayout('ui-layout');
}

    public function historia()
    {
        $this->viewBuilder()->setLayout('ui-layout');

        // Obtener 3 posts aleatorios con banners
        $randomPosts = $this->BlogPosts->find()
            ->select(['id', 'title', 'banner'])
            ->where([
                'BlogPosts.status' => 'activo',
                'BlogPosts.banner IS NOT' => null
            ])
            ->order(['RAND()'])
            ->limit(3)
            ->toArray();
        
        // Asegurar que siempre tengamos 3 elementos (usar placeholder si faltan)
        $images = [
            $randomPosts[0]->banner ?? null,
            $randomPosts[1]->banner ?? null,
            $randomPosts[2]->banner ?? null
        ];
        
        $this->set(compact('images'));
    }

}
<?php
$this->loadHelper('Time');

$this->assign('title', 'Stefsketch | ' . h($eventType->name));
$this->Html->css(['https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css'], ['block' => true]);

?>


<?php
function formatNumberShort($n) {
    if ($n >= 1000000) return round($n / 1000000, 1) . 'M';
    if ($n >= 1000) return round($n / 1000, 1) . 'k';
    return $n;
}
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<?= $this->Html->css(['evento_view'.'.css?ver=1']) ?>


<div class="" style="margin-top: 100px;">

    <nav aria-label="breadcrumb" class="bc-enhanced__nav">
        <ol class="bc-enhanced__list">
            <li class="bc-enhanced__item">
                <a href="/portafolio/<?= h($eventType->eventoslug) ?>" class="bc-enhanced__link">Inicio</a>
            </li>

            <?php if (!empty($categoryId) && isset($breadcrumbCategories[$categoryId])): ?>
            <li class="bc-enhanced__item">
                <a href="/portafolio/<?= h($eventType->eventoslug) ?>/temas" class="bc-enhanced__link">Todos los
                    temas</a>
            </li>
            <li class="bc-enhanced__item <?= empty($subcategorySlug) ? 'bc-enhanced__item--active' : '' ?>">
                <?php if (!empty($subcategorySlug)): ?>
                <a href="/portafolio/<?= h($eventType->eventoslug) ?>/temas/<?= h($categorySlug) ?>"
                    class="bc-enhanced__link">
                    Tema: <?= h($breadcrumbCategories[$categoryId]) ?>
                </a>
                <?php else: ?>
                <span class="bc-enhanced__text">
                    Tema: <?= h($breadcrumbCategories[$categoryId]) ?>
                </span>
                <?php endif; ?>
            </li>

            <?php if (!empty($subcategorySlug)): ?>
            <li class="bc-enhanced__item bc-enhanced__item--active">
                <span class="bc-enhanced__text">
                    Subtema: <?= h($subcategorySlug) ?>
                </span>
            </li>
            <?php endif; ?>

            <?php elseif (!empty($tagId) && isset($breadcrumbTags[$tagId])): ?>
            <li class="bc-enhanced__item">
                <a href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas" class="bc-enhanced__link">Todas las
                    etiquetas</a>
            </li>
            <li class="bc-enhanced__item bc-enhanced__item--active">
                <span class="bc-enhanced__text">
                    Etiqueta: <?= h($breadcrumbTags[$tagId]) ?>
                </span>
            </li>

            <?php elseif ($show === 'categories'): ?>
            <li class="bc-enhanced__item bc-enhanced__item--active">
                <span class="bc-enhanced__text">
                    Todos los temas
                </span>
            </li>

            <?php elseif ($show === 'tags'): ?>
            <li class="bc-enhanced__item bc-enhanced__item--active">
                <span class="bc-enhanced__text">
                    Todas las etiquetas
                </span>
            </li>

            <?php else: ?>
            <li class="bc-enhanced__item">
                <a href="/portafolio/<?= h($eventType->eventoslug) ?>/temas" class="bc-enhanced__link">Ver todos los
                    temas</a>
            </li>
            <li class="bc-enhanced__item">
                <a href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas" class="bc-enhanced__link">Ver todas las
                    etiquetas</a>
            </li>
            <?php endif; ?>
        </ol>
    </nav>

    <?php if ($show === 'categories'): ?>
    <!-- SOLO Vista de todas las categorías/temas -->
    <div class="mb-4">
        <h2 class="mb-2">Explora todos los temas de <?= h($eventType->name) ?></h2>
        <p class="text-muted">Descubre contenido organizado por temas específicos</p>
    </div>

    <div class="row">
        <?php foreach ($blogCategories as $cat): ?>
        <div class="col-md-4 mb-4">
            <div class="glass-card p-4 h-100 d-flex flex-column">
                <?php if (!empty($cat->image)): ?>
                <div class="mb-3 text-center">
                    <img src="/img/<?= h($cat->image) ?>" alt="<?= h($cat->name) ?>" class="img-fluid rounded"
                        style="max-height: 120px; object-fit: cover;">
                </div>
                <?php endif; ?>

                <div class="flex-grow-1">
                    <h5 class="card-title">
                        <a href="/portafolio/<?= h($eventType->eventoslug) ?>/temas/<?= h($cat->slug) ?>"
                            class="text-decoration-none text-dark">
                            <?= h($cat->name) ?>
                        </a>
                    </h5>

                    <?php if (!empty($cat->description)): ?>
                    <p class="card-text text-muted small"><?= h($cat->description) ?></p>
                    <?php endif; ?>
                </div>

                <div class="mt-auto">
                    <span class="badge bg-primary">
                        <?= $cat->count ?> artículo<?= $cat->count > 1 ? 's' : '' ?>
                    </span>
                    <a href="/portafolio/<?= h($eventType->eventoslug) ?>/temas/<?= h($cat->slug) ?>"
                        class="btn btn-outline-primary btn-sm mt-2 w-100">
                        Ver artículos
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php elseif ($show === 'tags'): ?>
    <!-- SOLO Vista de todas las etiquetas -->
    <div class="mb-4">
        <h2 class="mb-2">Explora todas las etiquetas de <?= h($eventType->name) ?></h2>
        <p class="text-muted">Encuentra contenido por etiquetas específicas</p>
    </div>

    <div class="row">
        <?php foreach ($blogTags as $tag): ?>
        <div class="col-md-3 mb-3">
            <div class="glass-card p-3 text-center h-100">
                <a href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas/<?= h($tag->slug) ?>"
                    class="stretched-link text-decoration-none">
                    <div class="mb-2">
                        <span class="badge fs-6">#<?= h($tag->name) ?></span>
                    </div>
                    <small class="text-muted">
                        <?= $tag->count ?> post<?= $tag->count > 1 ? 's' : '' ?>
                    </small>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php else: ?>
    <!-- Vista normal de posts -->
    <div class="">
        <!-- Header -->
        <div class="blog-header">
            <h1 class="section-title"><?= h($pageTitle) ?></h1>
            <?php if (!empty($pageDescription)): ?>
            <p class="section-subtitle"><?= h($pageDescription) ?></p>
            <?php endif; ?>
        </div>

        <!-- Main Layout -->
        <div class="blog-layout">
            <!-- Posts Grid -->
            <main class="posts-section">
                <div class="posts-grid">
                    <?php foreach ($posts as $post): ?>
                    <article class="post-card animate-fade-in">
                        <a href="/portafolio/<?= h($eventType->eventoslug) ?>/<?= h($post->slug) ?>">
                            <img src="/img/<?= h($post->banner) ?>" alt="<?= h($post->title) ?>" class="post-card-image"
                                loading="lazy">
                            <div class="post-category">
                                <span><?= h($post->blog_category->name ?? '-') ?></span>
                            </div>
                            <div class="post-title-overlay">
                                <h3><?= h($post->title) ?></h3>
                            </div>
                            <!-- NUEVO: Preview con blur background -->
                            <div class="post-preview-overlay">
                                <p class="preview-text">
                                    <?= h(substr(preg_replace('/[#*`_~\[\]()>-]/', '', strip_tags($post->body)), 0, 120)) ?>...
                                </p>
                                </p>
                                <span class="read-more-btn">Leer más</span>
                            </div>
                            <button class="post-arrow-btn"></button>
                            <div class="post-tags">
                                <?php foreach ($post->blog_tags as $tag): ?>
                                <span class="tag-badge">🔖 <?= h($tag->name) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </a>
                    </article>
                    <?php endforeach; ?>
                </div>

                <div class="pagination-wrapper">
                    <ul class="pagination">
                        <?= $this->Paginator->first('« Primera') ?>
                        <?= $this->Paginator->prev('← Anterior') ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next('Siguiente →') ?>
                        <?= $this->Paginator->last('Última »') ?>
                    </ul>
                </div>
            </main>

            <!-- Sidebar -->
            <aside class="sidebar">
                <!-- Categorías y subcategorías con contador -->
                <div class="v2-sidebar-section">
                    <h3 class="v2-sidebar-title">
                        <a href="/portafolio/<?= h($eventType->eventoslug) ?>/temas"
                            class="text-decoration-none v2-sidebar-title-link">
                            Temas Populares
                        </a>
                    </h3>
                    <div class="v2-accordion" id="accordionCategorias">
                        <?php foreach ($blogCategories as $category): ?>
                        <?php
                $catId = $category->id;
                $subcats = $organizedSubcategories[$catId] ?? [];
                $subcatCount = count($subcats);
                $accordionId = 'cat_' . $catId;

                $isActiveCat = ($categorySlug === $category->slug);
                $shouldShowAccordion = ($activeCategoryId == $catId);

                $categoryUrl = "/portafolio/{$eventType->eventoslug}/temas/{$category->slug}";
                $collapseId = "collapse_{$accordionId}";
                $headingId = "heading_{$accordionId}";
            ?>
                        <div class="v2-accordion-item <?= $isActiveCat ? 'v2-accordion-item-active' : '' ?>">
                            <div class="v2-accordion-header d-flex justify-content-between align-items-center"
                                id="<?= $headingId ?>">
                                <a href="<?= h($categoryUrl) ?>"
                                    class="text-decoration-none v2-category-link <?= $isActiveCat ? 'v2-category-link-active' : '' ?>">
                                    <?= h($category->name) ?>
                                </a>
                                <?php if ($subcatCount > 0): ?>
                                <button class="v2-accordion-toggle btn btn-sm btn-link text-dark" type="button"
                                    data-toggle="collapse" data-target="#<?= $collapseId ?>"
                                    aria-expanded="<?= $shouldShowAccordion ? 'true' : 'false' ?>"
                                    aria-controls="<?= $collapseId ?>">
                                    <i
                                        class="fas <?= $shouldShowAccordion ? 'fa-chevron-up' : 'fa-chevron-down' ?>"></i>
                                </button>
                                <?php endif; ?>
                            </div>

                            <?php if ($subcatCount > 0): ?>
                            <div id="<?= $collapseId ?>"
                                class="v2-accordion-body collapse <?= $shouldShowAccordion ? 'show' : '' ?>"
                                aria-labelledby="<?= $headingId ?>" data-parent="#accordionCategorias">
                                <ul class="v2-sub-list list-group list-group-flush">
                                    <?php foreach ($subcats as $subcat): ?>
                                    <?php
                                    $isActiveSubcat = ($subcategorySlug === $subcat->slug && $categorySlug === $category->slug);
                                    $subcatUrl = "/portafolio/{$eventType->eventoslug}/temas/{$category->slug}/{$subcat->slug}";
                                ?>
                                    <li
                                        class="v2-sub-item list-group-item d-flex justify-content-between align-items-center <?= $isActiveSubcat ? 'v2-sub-item-active' : '' ?>">
                                        <a href="<?= h($subcatUrl) ?>"
                                            class="v2-sub-link <?= $isActiveSubcat ? 'v2-sub-link-active' : '' ?>">
                                            <?= $isActiveSubcat ? '<i class="fas fa-check-circle v2-active-check"></i> ' : '' ?><?= h($subcat->name) ?>
                                        </a>
                                        <span class="v2-sub-count badge badge-pill"><?= $subcat->count ?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Posts Más Vistos -->
                <div class="sidebar-section">
                    <h3 class="sidebar-title">Posts Más Vistos 🔥</h3>
                    <div class="popular-posts">
                        <?php if (!empty($mostViewedPosts)): ?>
                        <?php foreach ($mostViewedPosts as $post): ?>
                        <div class="popular-post">
                            <a href="/portafolio/<?= h($eventType->eventoslug) ?>/<?= h($post->slug) ?>">
                                <img src="/img/<?= h($post->banner) ?>" alt="Post popular" class="popular-post-image">
                            </a>
                            <a href="/portafolio/<?= h($eventType->eventoslug) ?>/<?= h($post->slug) ?>">
                                <div class="popular-post-content">
                                    <h4><?= h($post->title) ?></h4>
                                    <p class="popular-post-meta">
                                        <?= $this->Time->timeAgoInSpanish($post->modified) ?>
                                        • <?= formatNumberShort($post->views) ?> vistas
                                        <?php if (!empty($post->blog_author)): ?>
                                        • Por <?= h($post->blog_author->name ?? 'Autor Desconocido') ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Tags Disponibles -->
                <div class="sidebar-section">
                    <h3 class="sidebar-title">
                        <a href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas" class="text-decoration-none">
                            Explora por etiquetas
                        </a>
                    </h3>
                    <div class="tag-cloud">
                        <?php foreach ($blogTags as $tag): ?>
                        <a href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas/<?= h($tag->slug) ?>">
                            <span class="tag-badge2">
                                <?= h($tag->name) ?>
                                <span class="category-count">(<?= $tag->count ?>)</span>
                            </span>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </aside>
        </div>

        <!-- Sección: Categorías (solo en vista principal) -->
        <?php if (empty($categoryId) && empty($tagId)): ?>
        <h3 class="section-title text-center">Temas populares</h3>

        <div class="d-flex flex-wrap justify-content-center gap-4 mb-5">
            <?php foreach ($blogCategories as $category): ?>
            <a href="/portafolio/<?= h($eventType->eventoslug) ?>/temas/<?= h($category->slug) ?>"
                class="text-decoration-none text-center" style="width: 120px;">
                <div class="mx-auto rounded-circle overflow-hidden shadow"
                    style="width: 100px; height: 100px; background: white;">
                    <?php if (!empty($category->image)): ?>
                    <img src="/img/<?= h($category->image) ?>" alt="<?= h($category->name) ?>"
                        style="width: 100%; height: 100%; object-fit: cover;">
                    <?php else: ?>
                    <div style="width: 100%; height: 100%; background: #eee;"></div>
                    <?php endif; ?>
                </div>
                <div class="mt-2" style="font-size: 0.95rem; color: #333;">
                    <?= h($category->name) ?>
                </div>
                <span class="badge badge-pill badge-primary"><?= $category->count ?></span>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

    </div>

    <?php endif; ?>

</div>

<script>
// Auto-detect title lines and adjust arrow button position
document.addEventListener('DOMContentLoaded', function() {
    const postCards = document.querySelectorAll('.post-card');

    // JavaScript mejorado para coordinar preview y botón
    postCards.forEach(card => {
        const titleOverlay = card.querySelector('.post-title-overlay');
        const title = titleOverlay.querySelector('h3');
        const arrowBtn = card.querySelector('.post-arrow-btn');
        const previewOverlay = card.querySelector('.post-preview-overlay');

        // Calcular la altura del título para determinar cuántas líneas tiene
        const titleHeight = title.offsetHeight;

        // Mantener el preview centrado con pequeños ajustes según el título
        let previewOffset;
        if (titleHeight <= 24) { // Una línea
            previewOffset = -10; // Ligeramente hacia arriba
        } else if (titleHeight <= 48) { // Dos líneas
            previewOffset = 0; // Centro perfecto
        } else { // Tres líneas o más
            previewOffset = 10; // Ligeramente hacia abajo
        }

        // Establecer posición del preview (mantiene centrado)
        previewOverlay.style.top = '50%';
        previewOverlay.style.transform = `translate(-50%, calc(-50% + ${previewOffset}px))`;

        // ===== AQUÍ ES DONDE AJUSTAMOS LA POSICIÓN DEL BOTÓN =====

        // Obtener las medidas del preview y de la tarjeta
        const previewRect = previewOverlay.getBoundingClientRect();
        const cardRect = card.getBoundingClientRect();

        // Calcular el centro del preview como porcentaje de la tarjeta
        const previewCenterY = ((previewRect.top + previewRect.height / 2 - cardRect.top) / cardRect
            .height) * 100;

        // AJUSTE PRINCIPAL: Cambiar este valor para mover el botón más abajo
        // Valores más altos = botón más abajo
        // Valores más bajos = botón más arriba
        const buttonOffset = 13; // 🔧 CAMBIA ESTE NÚMERO:
        //    8 = más arriba (original)
        //    15 = moderadamente abajo
        //    20 = bastante abajo
        //    25 = muy abajo

        // Calcular posición final del botón (con límite máximo del 85% para evitar los tags)
        const arrowTopPercent = Math.min(previewCenterY + buttonOffset, 85);

        // Aplicar la posición al botón
        arrowBtn.style.top = `${arrowTopPercent}%`;

        // ===== MÉTODO ALTERNATIVO (más directo) =====
        // Si quieres un control más directo, puedes usar posiciones fijas:

        /*
        // Descomenta este bloque y comenta el código de arriba si prefieres posiciones fijas
        if (titleHeight <= 24) { // Una línea
            arrowBtn.style.top = '70%'; // Posición fija para títulos de una línea
        } else if (titleHeight <= 48) { // Dos líneas
            arrowBtn.style.top = '72%'; // Posición fija para títulos de dos líneas
        } else { // Tres líneas o más
            arrowBtn.style.top = '75%'; // Posición fija para títulos de tres líneas
        }
        */

        // Agregar clases CSS para coordinación de estilos
        if (titleHeight <= 24) {
            titleOverlay.className = 'post-title-overlay single-line';
        } else if (titleHeight <= 48) {
            titleOverlay.className = 'post-title-overlay two-lines';
        } else {
            titleOverlay.className = 'post-title-overlay three-lines';
        }
    });


    // Handle smooth scroll and click navigation for tags
    document.querySelectorAll('.post-tags').forEach(container => {
        let isDown = false;
        let startX;
        let scrollLeft;

        // Mouse events for drag scrolling
        container.addEventListener('mousedown', (e) => {
            isDown = true;
            container.style.cursor = 'grabbing';
            startX = e.pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
        });

        container.addEventListener('mouseleave', () => {
            isDown = false;
            container.style.cursor = 'grab';
        });

        container.addEventListener('mouseup', () => {
            isDown = false;
            container.style.cursor = 'grab';
        });

        container.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - container.offsetLeft;
            const walk = (x - startX) * 2;
            container.scrollLeft = scrollLeft - walk;
        });

        // Touch events for mobile
        container.addEventListener('touchstart', (e) => {
            startX = e.touches[0].pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
        });

        container.addEventListener('touchmove', (e) => {
            if (!startX) return;
            const x = e.touches[0].pageX - container.offsetLeft;
            const walk = (x - startX) * 2;
            container.scrollLeft = scrollLeft - walk;
        });

        // Wheel scrolling
        container.addEventListener('wheel', (e) => {
            if (container.scrollWidth > container.clientWidth) {
                e.preventDefault();
                container.scrollLeft += e.deltaY;
            }
        });

        // Set cursor style
        container.style.cursor = 'grab';
    });

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordions = document.querySelectorAll('#accordionCategorias .collapse');

    accordions.forEach(collapse => {
        collapse.addEventListener('shown.bs.collapse', function() {
            const button = this.previousElementSibling.querySelector('button .toggle-icon');
            if (button) button.textContent = '▲';
        });
        collapse.addEventListener('hidden.bs.collapse', function() {
            const button = this.previousElementSibling.querySelector('button .toggle-icon');
            if (button) button.textContent = '▼';
        });
    });
});
</script>
<script>
// JavaScript para manejar la rotación de las flechas del acordeón
$(document).ready(function() {
    // Escuchar el evento 'show.bs.collapse' de Bootstrap
    $('#accordionCategorias').on('show.bs.collapse', function(e) {
        // Encontrar el botón que activó el colapso
        const toggleButton = $(e.target).prev('.v2-accordion-header').find('.v2-accordion-toggle');
        // Quitar la clase de flecha hacia abajo y agregar la de flecha hacia arriba
        toggleButton.find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
        // Añadir la clase para rotar el icono
        toggleButton.addClass('v2-accordion-toggle-rotated');
    });

    // Escuchar el evento 'hide.bs.collapse' de Bootstrap
    $('#accordionCategorias').on('hide.bs.collapse', function(e) {
        // Encontrar el botón que activó el colapso
        const toggleButton = $(e.target).prev('.v2-accordion-header').find('.v2-accordion-toggle');
        // Quitar la clase de flecha hacia arriba y agregar la de flecha hacia abajo
        toggleButton.find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        // Quitar la clase para rotar el icono
        toggleButton.removeClass('v2-accordion-toggle-rotated');
    });

    // Inicializar el estado de las flechas al cargar la página si hay categorías abiertas
    $('.v2-accordion-body.show').each(function() {
        const toggleButton = $(this).prev('.v2-accordion-header').find('.v2-accordion-toggle');
        toggleButton.find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
        toggleButton.addClass('v2-accordion-toggle-rotated');
    });
});
</script>
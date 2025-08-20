<?php
$this->assign('title', $blogPost->title);
$url = urlencode($this->Url->build(['controller' => 'Blog', 'action' => 'view', $blogPost->slug], ['fullBase' => true]));
$title = urlencode($blogPost->title);
$this->Html->meta('description', $blogPost->subtitle);
$this->Html->meta('og:title', $blogPost->title);
$this->Html->meta('og:description', $blogPost->subtitle);
$this->Html->meta('og:image', $this->Url->build('/img/' . h($blogPost->banner), ['fullBase' => true]));
$this->Html->meta('og:url', $this->Url->build(['controller' => 'Blog', 'action' => 'view', $blogPost->slug], ['fullBase' => true]));
$this->Html->meta('og:type', 'article');
$this->Html->meta('og:site_name', 'Mi Evento App');
$this->Html->meta('twitter:card', 'summary_large_image');
$this->Html->meta('twitter:title', $blogPost->title);
$this->Html->meta('twitter:description', $blogPost->subtitle);
$this->Html->meta('twitter:image', $this->Url->build('/img/' . h($blogPost->banner), ['fullBase' => true]));
$this->Html->meta('twitter:url', $this->Url->build(['controller' => 'Blog', 'action' => 'view', $blogPost->slug], ['fullBase' => true]));
$this->Html->meta('twitter:site', '@MiEventoApp');
$this->Html->meta('twitter:creator', '@MiEventoApp');
$this->Html->meta('twitter:card', 'summary_large_image');


$meses = [1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre'];
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

pre code {
    color: #6399cf;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #494949;
    background: #e0e0e0;
    overflow-x: hidden;
    width: 100%;
    max-width: 100vw;
}

/* Hero Section con Parallax */
.hero-section {
    position: relative;
    height: 78vh;
    width: 100%;
    max-width: 100vw;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    min-width: 100%;
    height: 120%;
    object-fit: cover;
    object-position: center -175px;
    will-change: transform;
    transition: transform 0.1s ease-out;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgb(255 255 255 / 13%) 0%, rgb(185 185 185 / 16%) 30%, rgb(0 0 0 / 21%) 60%, rgb(0 0 0) 100%);
}

.hero-content {
    position: relative;
    z-index: 3;
    text-align: center;
    color: white;
    padding: 0 2rem;
    max-width: 800px;
    margin: 0 auto;
    width: 100%;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 300;
    margin-bottom: 1rem;
    text-shadow: 0 2px 15px rgba(0, 0, 0, 0.5);
    letter-spacing: -0.02em;
    word-wrap: break-word;
}

.hero-subtitle {
    font-size: 1.3rem;
    font-weight: 300;
    opacity: 0.9;
    text-shadow: 0 1px 8px rgba(0, 0, 0, 0.5);
    line-height: 1.4;
    margin-bottom: 3rem;
    word-wrap: break-word;
}

/* Botón de retroceso */
.back-button {
    position: fixed;
    top: 2rem;
    left: 2rem;
    z-index: 99999;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(10px);
    border: none;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    text-decoration: none;
}

.back-button:hover {
    background: rgba(0, 0, 0, 0.8);
    transform: scale(1.1);
}

/* Botón de compartir - Posición inicial en hero */
.share-button {
    position: absolute;
    bottom: 20rem;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(15px);
    border: 2px solid rgba(255, 255, 255, 0.2);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    color: white;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.share-button:hover {
    background: rgba(255, 255, 255, 0.25);
    transform: translateX(-50%) scale(1.1);
}

/* Botón de compartir - Posición fija como pestaña */
.share-button.sticky {
    position: fixed;
    bottom: 2rem;
    left: -15px;
    /* Oculto 3/4 partes */
    transform: translateX(0);
    width: 60px;
    height: 60px;
    background: rgba(30, 30, 30, 0.95);
    backdrop-filter: blur(15px);
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 0 30px 30px 0;
    z-index: 1000;
}

.share-button.sticky.expanded {
    left: 0;
    border-radius: 50%;
}

/* Menú de compartir */
.share-menu {
    position: fixed;
    left: 4.5rem;
    bottom: 2rem;
    z-index: 999;
    background: rgba(30, 30, 30, 0.95);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 1rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    opacity: 0;
    visibility: hidden;
    transform: translateX(-20px);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    min-width: 200px;
    max-width: calc(100vw - 6rem);
}

.share-menu.active {
    opacity: 1;
    visibility: visible;
    transform: translateX(0);
}

.share-menu a {
    display: block;
    padding: 0.8rem 1rem;
    color: #e0e0e0;
    text-decoration: none;
    border-radius: 10px;
    margin-bottom: 0.5rem;
    transition: all 0.3s ease;
    font-weight: 500;
    word-wrap: break-word;
}

.share-menu a:last-child {
    margin-bottom: 0;
}

.share-menu a:hover {
    background: rgba(214, 51, 132, 0.2);
    color: #ff6b9d;
}

/* Contenido principal */
.main-content {
    position: relative;
    background: linear-gradient(180deg, rgb(135 135 135 / 25%) 0%, rgb(255 255 255) 8%, rgb(255 255 255 / 85%) 50%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 1) 100%);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    margin-top: -10vh;
    z-index: 2;
    border-radius: 30px 30px 0 0;
    padding: 3rem 0;
    min-height: 100vh;
    width: 100%;
    max-width: 100vw;
    border-top: 0.5px solid #bbbbbbc4;
}

.content-wrapper {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 2rem;
    width: 100%;
}

.blog-meta {
    text-align: center;
    margin-bottom: 3rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid #efefef;
    width: 100%;
}

.blog-author {
    color: #434343;
    font-size: 0.95rem;
    margin-bottom: 0.5rem;
    word-wrap: break-word;
}

.blog-date {
    color: #5b5b5b;
    font-size: 0.9rem;
    word-wrap: break-word;
}

.blog-body {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #434343;
    margin-bottom: 4rem;
    width: 100%;
    overflow-wrap: break-word;
}

.blog-body p {
    margin-bottom: 1.5rem;
    word-wrap: break-word;
}

.blog-body h2,
.blog-body h3 {
    margin-top: 2.5rem;
    margin-bottom: 1rem;
    color: #ff6b9d;
    word-wrap: break-word;
}

/* Efecto Sticky para imágenes */
.sticky-image-container {
    position: relative;
    height: 70vh;
    margin: 4rem 0;
    overflow: hidden;
    width: 100%;
    max-width: 100%;
}

.sticky-image {
    position: sticky;
    top: 0;
    width: 100%;
    max-width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
    z-index: 1;
}

.sticky-content-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, #202125);
    height: 50%;
    z-index: 2;
    pointer-events: none;
}

/* Galería con efecto sticky */
.gallery-section {
    margin: 4rem 0;
    width: 100%;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
    width: 100%;
    max-width: 100%;
}

.gallery-item {
    position: relative;
    height: 60vh;
    margin-bottom: 4rem;
    width: 100%;
    max-width: 100%;
}

.fix-stiky-img-body {}

.img-fluid {
    top: 10vh;
    width: 100%;
    max-width: 100%;
    object-fit: cover;
    border-radius: 15px;
    transition: transform 0.3s ease;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    margin-top: 20px;
}

.img-fluid {
    transform: scale(1.02);
}

.gallery-item img {
    position: sticky;
    top: 10vh;
    width: 100%;
    max-width: 100%;
    height: 50vh;
    object-fit: cover;
    border-radius: 15px;
    transition: transform 0.3s ease;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
}

.gallery-item img:hover {
    transform: scale(1.02);
}

/* Sección de artículos relacionados */
.related-section {
    background: #fdcfae;
    padding: 4rem 0;
    margin-top: 4rem;
    width: 100%;
    max-width: 100vw;
}

.related-title {
    text-align: center;
    font-size: 2rem;
    font-weight: 300;
    color: #5f5f5f;
    margin-bottom: 3rem;
    word-wrap: break-word;
    padding: 0 2rem;
}

.related-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    width: 100%;
}

.blog-card {
    /*background: #2a2a2a;*/
    background: #2f0a17;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
    border: 1px solid #333;
    width: 100%;
    max-width: 100%;
}

.blog-card:hover {
    transform: translateY(-5px);
    border-color: #ff6b9d;
}

.blog-card img {
    width: 100%;
    max-width: 100%;
    height: 200px;
    object-fit: cover;
}

.blog-card-content {
    padding: 1.5rem;
    width: 100%;
}

.blog-card h4 {
    font-size: 1.2rem;
    margin-bottom: 1rem;
    color: #e0e0e0;
    word-wrap: break-word;
}

.blog-card a {
    color: inherit;
    text-decoration: none;
}

.btn-read-more {
    display: inline-block;
    padding: 0.8rem 1.5rem;
    background: #ff6b9d;
    color: white;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-read-more:hover {
    background: #e55a87;
    transform: translateY(-2px);
}

/* Navegación de artículos */
.article-navigation {
    display: flex;
    justify-content: space-between;
    gap: 2rem;
    margin: 4rem 0;
    padding: 0 2rem;
    width: 100%;
    max-width: 100%;
}

.nav-button {
    flex: 1;
    padding: 1.5rem;
    background: #2a2a2a;
    border: 1px solid #333;
    border-radius: 15px;
    text-decoration: none;
    color: #e0e0e0;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    text-align: center;
    word-wrap: break-word;
    max-width: 100%;
}

.nav-button:hover {
    transform: translateY(-3px);
    border-color: #ff6b9d;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
}

.nav-button.prev {
    text-align: left;
}

.nav-button.next {
    text-align: right;
}

/* Secciones adicionales */
.tags-section{
        padding: 4rem 0;
    margin-top: 4rem;
    width: 100%;
    max-width: 100vw;
}
.related-posts-by-author {
    width: 100%;
    max-width: 100vw;
    padding: 0 2rem;
}

.post-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin: 2rem 0;
    width: 100%;
    justify-content: center;
}

.tag-link {
    background: #fdeee4;
    color: #000000;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
    white-space: nowrap;
    transition: background-color 0.3s ease;
    flex-shrink: 0;
    border: 1px solid rgb(249 96 11);
    display: inline-block;
    padding: 0.5rem 1rem;
    margin: 2px;
}

.tag-link:hover {
    background: #ff6b9d;
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-section {
    height: 55vh;
    }
    header .logo {
        padding-right: 0px;
    }
        header .logo a img {
        width: 60% !important;
    }
    
    .hero-image {
        object-position: center center;
        height: 110%;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }

    .hero-subtitle {
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }

    .hero-content {
        padding: 0 1.5rem;
    }

    .back-button {
        top: 1rem;
        left: 1rem;
        width: 45px;
        height: 45px;
    }
    
    .share-button.sticky {
        bottom: 1.5rem;
        left: -12px;
        width: 50px;
        height: 50px;
    }

    .share-menu {
        left: 3.5rem;
        bottom: 1.5rem;
        min-width: 180px;
        max-width: calc(100vw - 5rem);
    }

    .content-wrapper {
        padding: 0 1.5rem;
    }

    .main-content {
        margin-top: -15vh;
        padding: 2rem 0;
    }

    .gallery-item {
        height: 50vh;
        margin-bottom: 2rem;
    }

    .gallery-item img {
        height: 40vh;
        top: 5vh;
    }

    .img-fluid {
        top: 0vh;
    }

    .sticky-image-container {
        height: 60vh;
    }

    .related-grid {
        grid-template-columns: 1fr;
        padding: 0 1.5rem;
    }

    .article-navigation {
        flex-direction: column;
        padding: 0 1.5rem;
    }
    
    .gallery-grid {
        grid-template-columns: 1fr;
    }
    
    .tags-section,
    .related-posts-by-author {
        padding: 0 1.5rem;
    }
}

@media (max-width: 480px) {
    .hero-image {
        object-position: center center;
        height: 105%;
    }

    .hero-title {
        font-size: 2rem;
    }

    .hero-subtitle {
        font-size: 1rem;
    }

    .share-button {
        bottom: 24.3rem;
        width: 50px;
        height: 50px;
    }
    
    .related-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding: 0 1rem;
    }
    
    .gallery-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
}
@media (max-width: 380px) {
    .share-button {
        bottom: 16.2rem;
    }
    
    .content-wrapper,
    .tags-section,
    .related-posts-by-author {
        padding: 0 1rem;
    }
    
    .related-grid {
        padding: 0 1rem;
    }
}

/* Animaciones para scroll */
@media (prefers-reduced-motion: no-preference) {
    .gallery-item img {
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .img-fluid {
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .sticky-image {
        transition: all 0.3s ease-out;
    }
}

.author-section img {
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    border: 3px solid white;
}
</style>

<!-- Botón de retroceso -->
<a href="javascript:history.back()" class="back-button">
    ←
</a>

<!-- Botón de compartir -->
<button class="share-button" id="shareButton" onclick="toggleShareMenu()">
    🔗
</button>

<!-- Menú de compartir -->
<div class="share-menu" id="shareMenu">
    <?php
        $url = urlencode($this->Url->build(['controller' => 'Blog',  h($eventType->eventoslug) , $blogPost->slug], ['fullBase' => true]));
        $title = urlencode($blogPost->title);
    ?>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $url ?>" target="_blank">📘 Facebook</a>
    <a href="https://twitter.com/intent/tweet?url=<?= $url ?>&text=<?= $title ?>" target="_blank">✖ X</a>
    <a href="https://wa.me/?text=Encontre este articulo que te puede interesar 👇🏻%0A%0A<?= $url ?>" target="_blank">💬 WhatsApp</a>
    <a href="mailto:?subject=<?= $title ?>&body=<?= $url ?>" target="_blank">📧 Email</a>
</div>

<!-- Hero Section -->
<section class="hero-section">
    <?php if (!empty($blogPost->banner)): ?>
    <img src="/img/<?= h($blogPost->banner) ?>" class="hero-image" alt="<?= h($blogPost->title) ?>" id="heroImage">
    <?php endif; ?>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title"><?= h($blogPost->title) ?></h1>
        <p class="hero-subtitle"><?= h($blogPost->subtitle) ?></p>
    </div>
</section>

<!-- Contenido Principal -->
<main class="main-content">
    <div class="content-wrapper">
        <!-- Meta información -->
        <div class="blog-meta">
            <div class="blog-author">
                Por 
                <?= h($blogPost->blog_author->name ?? 'Autor Desconocido') ?>
                <!-- Imagen del autor -->
                <?php if (!empty($blogPost->blog_author->img)): ?>
                    <img src="/img/<?= h($blogPost->blog_author->img) ?>"
                        alt="<?= h($blogPost->blog_author->name) ?>"
                        class="rounded-circle mb-2"
                        style="width: 40px; height: 40px; object-fit: cover;">
                <?php endif; ?>
                <!--<?= h($blogPost->event_type->name ?? 'Artículo') ?>-->
            </div>
            <div class="blog-date"> •
                <?php 
                    $meses = [1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre'];
                    echo $meses[(int)$blogPost->created->format('n')] . ' ' . $blogPost->created->format('d, Y');
                ?>
            </div>
        </div>

        <!-- Cuerpo del artículo -->
        <div class="blog-body">
            <?= $this->Blog->processContent($blogPost->body, $blogPost->gallery) ?>
        </div>

        <?php if (!empty($blogPost->blog_author)): ?>
        <div class="author-section mt-5 text-center">
            <!-- Imagen del autor -->
            <?php if (!empty($blogPost->blog_author->img)): ?>
                <img src="/img/<?= h($blogPost->blog_author->img) ?>"
                    alt="<?= h($blogPost->blog_author->name) ?>"
                    class="rounded-circle mb-2"
                    style="width: 80px; height: 80px; object-fit: cover;">
            <?php endif; ?>

            <!-- Nombre del autor -->
            <h5 class="mb-1"><?= h($blogPost->blog_author->name) ?></h5>

            <!-- Botón de biografía -->
            <?php if (!empty($blogPost->blog_author->bio)): ?>
                <button class="btn btn-sm btn-outline-primary mt-2" data-toggle="modal" data-target="#authorBioModal">
                    Leer biografía
                </button>
            <?php endif; ?>
        </div>

        <!-- Modal con biografía y redes -->
        <div class="modal fade" id="authorBioModal" tabindex="-1" role="dialog" aria-labelledby="authorBioModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-left">
              <div class="modal-header">
                <h5 class="modal-title" id="authorBioModalLabel">Sobre <?= h($blogPost->blog_author->name) ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p><?= nl2br(h($blogPost->blog_author->bio)) ?></p>

                <!-- Redes sociales -->
                <div class="social-links mt-3">
                  <?php if (!empty($blogPost->blog_author->facebook)): ?>
                    <a href="<?= h($blogPost->blog_author->facebook) ?>" target="_blank" class="btn btn-sm btn-outline-secondary mr-2">
                      <i class="fab fa-facebook-f"></i> Facebook
                    </a>
                  <?php endif; ?>
                  <?php if (!empty($blogPost->blog_author->instagram)): ?>
                    <a href="<?= h($blogPost->blog_author->instagram) ?>" target="_blank" class="btn btn-sm btn-outline-secondary mr-2">
                      <i class="fab fa-instagram"></i> Instagram
                    </a>
                  <?php endif; ?>
                  <?php if (!empty($blogPost->blog_author->tiktok)): ?>
                    <a href="<?= h($blogPost->blog_author->tiktok) ?>" target="_blank" class="btn btn-sm btn-outline-secondary">
                      <i class="fab fa-tiktok"></i> TikTok
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>

    </div>
</main>

<!-- Tags -->
<?php if (!empty($blogPost->blog_tags)): ?>
<section class="tags-section">
    <h3 class="related-title">Explora articulos por etiquetas</h3>
    <div class="post-tags">
        <?php foreach ($blogPost->blog_tags as $tag): ?>
        <a href="/blog/<?= h($eventType->eventoslug) ?>/etiquetas/<?= h($tag->slug) ?>"
            class="tag-link">#<?= h($tag->name) ?></a>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<!-- Artículos Relacionados -->
<?php if (!empty($relatedPosts)): ?>
<section class="related-section">
    <h3 class="related-title">También te puede interesar</h3>
    <div class="related-grid">
        <?php foreach ($relatedPosts as $related): ?>
        <article class="blog-card">
            <a href="/blog/<?= h($eventType->eventoslug) ?>/<?= $related->slug ?>">
                <?php if (!empty($related->banner)): ?>
                <img src="/img/<?= h($related->banner) ?>" alt="<?= h($related->title) ?>" loading="lazy">
                <?php endif; ?>
                <div class="blog-card-content">
                    <h4><?= h($related->title) ?></h4>
                    <a href="/blog/<?= h($eventType->eventoslug) ?>/<?= $related->slug ?>"
                        class="btn-read-more">Leer artículo</a>
                </div>
            </a>
        </article>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<!-- Más artículos del autor -->
<?php if (!empty($authorPosts)): ?>
<section class="related-posts-by-author mt-5">
    <div class="row">
    <h3 class="section-title" style="margin-right: 10px;">Más de <?= h($blogPost->blog_author->name) ?></h3>
    <!-- Imagen del autor -->
    <?php if (!empty($blogPost->blog_author->img)): ?>
        <img src="/img/<?= h($blogPost->blog_author->img) ?>"
            alt="<?= h($blogPost->blog_author->name) ?>"
            class="rounded-circle mb-2"
            style="width: 40px; height: 40px; object-fit: cover;">
    <?php endif; ?>
    </div>
    <div class="row">
        <?php foreach ($authorPosts as $post): ?>
            <div class="col-md-6 col-lg-3 mb-4">
                <a href="/blog/<?= h($post->event_type->eventoslug) ?>/<?= h($post->slug) ?>" class="card h-100 text-decoration-none shadow-sm">
                    <?php if (!empty($post->banner)): ?>
                        <img src="/img/<?= h($post->banner) ?>" alt="<?= h($post->title) ?>" class="card-img-top">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?= h($post->title) ?></h5>
                        <p class="card-text">
                            <?= h($post->blog_category->name ?? '') ?> • <?= $post->created->format('M d, Y') ?>
                        </p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<!-- Navegación entre artículos -->
<?php if (isset($prevPost) || isset($nextPost)): ?>
<nav class="article-navigation">
    <?php if ($prevPost): ?>
    <a href="/blog/<?= h($eventType->eventoslug) ?>/<?= $prevPost->slug ?>"
        class="nav-button prev">
        <div>← Artículo anterior</div>
        <strong><?= h($prevPost->title) ?></strong>
    </a>
    <?php endif; ?>
    <?php if ($nextPost): ?>
    <a href="/blog/<?= h($eventType->eventoslug) ?>/<?= $nextPost->slug ?>"
        class="nav-button next">
        <div>Siguiente artículo →</div>
        <strong><?= h($nextPost->title) ?></strong>
    </a>
    <?php endif; ?>
</nav>
<?php endif; ?>

<script>
// Variables globales
let isShareMenuOpen = false;
let lastScrollTop = 0;

// Efecto Parallax
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const heroImage = document.getElementById('heroImage');
    const shareButton = document.getElementById('shareButton');
    const heroSection = document.querySelector('.hero-section');

    if (heroImage) {
        // Efecto parallax más marcado
        const parallaxSpeed = 0.5;
        heroImage.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
    }

    // Manejo del botón de compartir
    if (shareButton && heroSection) {
        const heroBottom = heroSection.offsetHeight;

        if (scrolled > heroBottom - 200) {
            // Convertir a pestaña sticky
            shareButton.classList.add('sticky');
        } else {
            // Volver a posición original
            shareButton.classList.remove('sticky', 'expanded');
            const shareMenu = document.getElementById('shareMenu');
            shareMenu.classList.remove('active');
            isShareMenuOpen = false;
        }
    }
});

// Función para alternar el menú de compartir
function toggleShareMenu() {
    const shareButton = document.getElementById('shareButton');
    const shareMenu = document.getElementById('shareMenu');

    if (shareButton.classList.contains('sticky')) {
        // Modo pestaña sticky
        if (!isShareMenuOpen) {
            shareButton.classList.add('expanded');
            shareMenu.classList.add('active');
            isShareMenuOpen = true;
        } else {
            shareButton.classList.remove('expanded');
            shareMenu.classList.remove('active');
            isShareMenuOpen = false;
        }
    } else {
        // Modo normal en hero
        shareMenu.classList.toggle('active');
        isShareMenuOpen = shareMenu.classList.contains('active');
    }
}

// Cerrar menú al hacer clic fuera
document.addEventListener('click', (e) => {
    const shareButton = document.getElementById('shareButton');
    const shareMenu = document.getElementById('shareMenu');

    if (!shareButton.contains(e.target) && !shareMenu.contains(e.target)) {
        shareMenu.classList.remove('active');
        shareButton.classList.remove('expanded');
        isShareMenuOpen = false;
    }
});

// Optimización para efecto sticky en imágenes
const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
};

const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observar todas las imágenes sticky
document.addEventListener('DOMContentLoaded', () => {
    const stickyImages = document.querySelectorAll('.sticky-image');
    stickyImages.forEach(img => {
        imageObserver.observe(img);
    });
});

// Smooth scroll para navegación
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Prevenir comportamiento por defecto en enlaces de compartir
document.querySelectorAll('.share-menu a').forEach(link => {
    link.addEventListener('click', (e) => {
        // Cerrar menú después de hacer clic
        setTimeout(() => {
            document.getElementById('shareMenu').classList.remove('active');
            document.getElementById('shareButton').classList.remove('expanded');
            isShareMenuOpen = false;
        }, 100);
    });
});
</script>
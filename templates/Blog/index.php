<!-- ================================= -->
<!-- NUEVO HOME PORTFOLIO - templates/Blog/index.php -->
<!-- ================================= -->

<?php
$this->assign('title', 'Portafolio - Ilustraciones Digitales');
?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

<style>
/* ===== BASE MOBILE-FIRST ===== */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html, body {
    overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

/* ===== HERO PARALLAX SECTION ===== */
.hero-parallax {
    position: relative;
    height: 100vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero-bg-layer {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    will-change: transform;
}

.hero-bg-back {
    background-image: url('/img/hero-bg-back.jpg'); /* Imagen de fondo */
    transform: translateZ(0) scale(1.1);
}

.hero-bg-front {
    background-image: url('/img/hero-bg-front.png'); /* Imagen frontal con transparencia */
    transform: translateZ(0);
    opacity: 0.8;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.5) 100%);
    z-index: 2;
}

.hero-content {
    position: relative;
    z-index: 3;
    text-align: center;
    color: white;
    padding: 1rem;
    max-width: 90%;
}

.hero-title {
    font-size: clamp(2.5rem, 8vw, 5rem);
    font-weight: 700;
    text-shadow: 0 4px 8px rgba(0,0,0,0.5);
    margin-bottom: 1rem;
    opacity: 0;
    animation: fadeInUp 1s ease 0.5s forwards;
}

.hero-subtitle {
    font-size: clamp(1rem, 4vw, 1.5rem);
    font-weight: 300;
    text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    opacity: 0;
    animation: fadeInUp 1s ease 0.8s forwards;
    margin-bottom: 2rem;
}

.hero-scroll-indicator {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    opacity: 0;
    animation: fadeIn 1s ease 2s forwards, bounce 2s ease-in-out 3s infinite;
}

.scroll-arrow {
    width: 2rem;
    height: 2rem;
    border: 2px solid white;
    border-right: none;
    border-top: none;
    transform: rotate(45deg);
}

/* ===== SECCIONES EVENTTYPE ===== */
.portfolio-sections {
    padding: 2rem 1rem;
    max-width: 1400px;
    margin: 0 auto;
}

.section-eventtype {
    margin-bottom: 4rem;
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.section-title {
    font-size: clamp(1.5rem, 5vw, 2.5rem);
    font-weight: 600;
    color: #333;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.section-icon {
    font-size: 1.2em;
    opacity: 0.8;
}

.section-count {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 500;
}

.view-all-btn {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-decoration: none;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: 500;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

.view-all-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    color: white;
    text-decoration: none;
}

/* ===== CARRUSEL DE PROYECTOS ===== */
.projects-carousel {
    position: relative;
}

.swiper-container {
    overflow: visible;
    padding: 1rem 0 2rem 0;
}

.project-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    height: auto;
}

.project-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.project-image {
    position: relative;
    aspect-ratio: 4/3;
    overflow: hidden;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.project-card:hover .project-image img {
    transform: scale(1.05);
}

.project-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(102, 126, 234, 0.85), rgba(118, 75, 162, 0.85));
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.project-card:hover .project-overlay {
    opacity: 1;
}

.view-project-btn {
    background: white;
    color: #667eea;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transform: translateY(20px);
    transition: transform 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.project-card:hover .view-project-btn {
    transform: translateY(0);
}

.project-info {
    padding: 1.5rem;
}

.project-category {
    font-size: 0.75rem;
    color: #667eea;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.5rem;
    opacity: 0.8;
}

.project-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.75rem;
    line-height: 1.3;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.project-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.project-tag {
    background: #f0f2f5;
    color: #666;
    padding: 0.25rem 0.75rem;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 500;
}

/* ===== CONTROLES DEL SWIPER ===== */
.swiper-button-next,
.swiper-button-prev {
    width: 44px;
    height: 44px;
    background: white;
    border-radius: 50%;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    color: #667eea;
    margin-top: -22px;
    transition: all 0.3s ease;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    background: #667eea;
    color: white;
    transform: scale(1.1);
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 16px;
    font-weight: 600;
}

.swiper-pagination {
    position: relative;
    margin-top: 1rem;
}

.swiper-pagination-bullet {
    background: #ddd;
    opacity: 1;
    transition: all 0.3s ease;
}

.swiper-pagination-bullet-active {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    transform: scale(1.2);
}

/* ===== ANIMACIONES ===== */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateX(-50%) translateY(0);
    }
    40% {
        transform: translateX(-50%) translateY(-10px);
    }
    60% {
        transform: translateX(-50%) translateY(-5px);
    }
}

/* ===== RESPONSIVE TABLET ===== */
@media (min-width: 768px) {
    .portfolio-sections {
        padding: 3rem 2rem;
    }
    
    .section-eventtype {
        margin-bottom: 5rem;
    }
    
    .section-header {
        margin-bottom: 2.5rem;
    }
    
    .project-info {
        padding: 1.25rem;
    }
    
    .hero-content {
        max-width: 80%;
    }
}

/* ===== RESPONSIVE DESKTOP ===== */
@media (min-width: 1024px) {
    .portfolio-sections {
        padding: 4rem 2rem;
    }
    
    .section-eventtype {
        margin-bottom: 6rem;
    }
    
    .hero-bg-layer {
        background-attachment: fixed;
    }
    
    .hero-content {
        max-width: 70%;
    }
    
    .project-info {
        padding: 1.5rem;
    }
}

/* ===== RESPONSIVE XL ===== */
@media (min-width: 1440px) {
    .portfolio-sections {
        padding: 5rem 3rem;
    }
}

/* ===== ESTADOS DE CARGA ===== */
.project-card.loading {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading-shimmer 1.5s infinite;
}

@keyframes loading-shimmer {
    0% {
        background-position: 200% 0;
    }
    100% {
        background-position: -200% 0;
    }
}

/* ===== ACCESIBILIDAD ===== */
@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
    
    .hero-bg-layer {
        background-attachment: scroll;
    }
}

.project-card:focus-within {
    outline: 2px solid #667eea;
    outline-offset: 4px;
}

/* ===== MEJORAS DE PERFORMANCE ===== */
.project-image {
    contain: layout style paint;
}

.swiper-slide {
    will-change: transform;
}
</style>

<!-- HERO PARALLAX SECTION -->
<section class="hero-parallax">
    <div class="hero-bg-layer hero-bg-back"></div>
    <div class="hero-bg-layer hero-bg-front"></div>
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1 class="hero-title">Portafolio de Ilustraciones</h1>
        <p class="hero-subtitle">Arte Digital • Ilustración Tradicional • Comisiones</p>
    </div>
    
    <div class="hero-scroll-indicator">
        <div class="scroll-arrow"></div>
    </div>
</section>

<!-- SECCIONES POR EVENTTYPE -->
<main class="portfolio-sections">
    <?php foreach ($eventTypesWithPosts as $eventType): ?>
        <section class="section-eventtype">
            <header class="section-header">
                <h2 class="section-title">
                    <span class="section-icon"><?= $eventType->icon ?? '🎨' ?></span>
                    <?= h($eventType->name) ?>
                    <span class="section-count"><?= count($eventType->posts) ?></span>
                </h2>
                
                <a href="/portafolio/<?= h($eventType->eventoslug) ?>" class="view-all-btn">
                    Ver Todos
                    <span>→</span>
                </a>
            </header>
            
            <div class="projects-carousel">
                <div class="swiper-container" data-eventtype="<?= $eventType->id ?>">
                    <div class="swiper-wrapper">
                        <?php foreach ($eventType->posts as $post): ?>
                            <div class="swiper-slide">
                                <article class="project-card">
                                    <div class="project-image">
                                        <img src="/img/<?= h($post->banner) ?>" 
                                             alt="<?= h($post->title) ?>" 
                                             loading="lazy">
                                        <div class="project-overlay">
                                            <a href="/portafolio/<?= h($eventType->eventoslug) ?>/<?= h($post->slug) ?>" 
                                               class="view-project-btn">
                                                Ver Proyecto
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="project-info">
                                        <div class="project-category">
                                            <?= h($post->blog_category->name ?? 'General') ?>
                                        </div>
                                        <h3 class="project-title">
                                            <?= h($post->title) ?>
                                        </h3>
                                        
                                        <?php if (!empty($post->blog_tags)): ?>
                                            <div class="project-tags">
                                                <?php foreach (array_slice($post->blog_tags, 0, 3) as $tag): ?>
                                                    <span class="project-tag"><?= h($tag->name) ?></span>
                                                <?php endforeach; ?>
                                                <?php if (count($post->blog_tags) > 3): ?>
                                                    <span class="project-tag">+<?= count($post->blog_tags) - 3 ?></span>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
</main>

<!-- SCRIPTS -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== PARALLAX EFFECT =====
    function updateParallax() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.hero-bg-layer');
        
        parallaxElements.forEach((element, index) => {
            const speed = (index + 1) * 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    }
    
    // Solo aplicar parallax en desktop para mejor performance
    if (window.innerWidth >= 1024) {
        window.addEventListener('scroll', updateParallax);
    }
    
    // ===== INICIALIZAR SWIPERS =====
    const swiperContainers = document.querySelectorAll('.swiper-container');
    
    swiperContainers.forEach(container => {
        new Swiper(container, {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: false,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            pagination: {
                el: container.querySelector('.swiper-pagination'),
                clickable: true
            },
            navigation: {
                nextEl: container.querySelector('.swiper-button-next'),
                prevEl: container.querySelector('.swiper-button-prev')
            },
            breakpoints: {
                480: {
                    slidesPerView: 1.2,
                    spaceBetween: 16
                },
                640: {
                    slidesPerView: 1.8,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2.2,
                    spaceBetween: 24
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 28
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 32
                }
            },
            on: {
                init: function() {
                    // Lazy loading de imágenes
                    this.slides.forEach(slide => {
                        const img = slide.querySelector('img[loading="lazy"]');
                        if (img && 'IntersectionObserver' in window) {
                            const imageObserver = new IntersectionObserver((entries) => {
                                entries.forEach(entry => {
                                    if (entry.isIntersecting) {
                                        entry.target.src = entry.target.src;
                                        imageObserver.unobserve(entry.target);
                                    }
                                });
                            });
                            imageObserver.observe(img);
                        }
                    });
                }
            }
        });
    });
    
    // ===== SMOOTH SCROLL PARA SCROLL INDICATOR =====
    const scrollIndicator = document.querySelector('.hero-scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', () => {
            document.querySelector('.portfolio-sections').scrollIntoView({
                behavior: 'smooth'
            });
        });
    }
    
    // ===== INTERSECTION OBSERVER PARA ANIMACIONES =====
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        // Observar secciones para animaciones
        document.querySelectorAll('.section-eventtype').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.6s ease';
            observer.observe(section);
        });
    }
});

// ===== OPTIMIZACIÓN DE PERFORMANCE =====
// Throttle para parallax
function throttle(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}
</script>

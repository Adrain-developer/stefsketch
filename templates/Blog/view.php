<?php
$this->assign('title', $blogPost->title);
$url = urlencode($this->Url->build(['controller' => 'portafolio', 'action' => 'view', $blogPost->slug], ['fullBase' => true]));
$title = urlencode($blogPost->title);
$this->Html->meta('description', $blogPost->subtitle);
$this->Html->meta('og:title', $blogPost->title);
$this->Html->meta('og:description', $blogPost->subtitle);
$this->Html->meta('og:image', $this->Url->build('/img/' . h($blogPost->banner), ['fullBase' => true]));
$this->Html->meta('og:url', $this->Url->build(['controller' => 'portafolio', 'action' => 'view', $blogPost->slug], ['fullBase' => true]));
$this->Html->meta('og:type', 'article');
$this->Html->meta('og:site_name', 'Stefsketch');
$this->Html->meta('twitter:card', 'summary_large_image');
$this->Html->meta('twitter:title', $blogPost->title);
$this->Html->meta('twitter:description', $blogPost->subtitle);
$this->Html->meta('twitter:image', $this->Url->build('/img/' . h($blogPost->banner), ['fullBase' => true]));
$this->Html->meta('twitter:url', $this->Url->build(['controller' => 'portafolio', 'action' => 'view', $blogPost->slug], ['fullBase' => true]));
$this->Html->meta('twitter:site', '@Stefsketch');
$this->Html->meta('twitter:creator', '@Stefsketch');
$this->Html->meta('twitter:card', 'summary_large_image');


use League\CommonMark\CommonMarkConverter;
$converter = new CommonMarkConverter();
$bodyHtml = !empty($blogPost->body) ? $converter->convert($blogPost->body)->getContent() : '';
?>



<div class="container-wrap" data-nav-pos="none" data-rm-header="true">
    <div class="container main-content">
        <div class="">




<!-- Container Principal -->
<div class="">
    <div id="portfolio-extra">
        
        <!-- Row Principal con padding top -->
        <div id="fws_68d461f0f07aa" 
             data-column-margin="custom" 
             data-midnight="light"
             class="wpb_row vc_row-fluid vc_row full-width-section column-margin-4pct top_padding_phone_10px"
             style="padding-top: 140px; padding-bottom: 0px;">
            
            <!-- Background Layer -->
            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                <div class="inner-wrap row-bg-layer">
                    <div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000;"></div>
                </div>
            </div>

            <!-- Contenedor de Columnas -->
            <div class="row_col_wrap_12 col span_12 light left">
                
                <!-- ========== COLUMNA IZQUIERDA (STICKY) ========== -->
                <div class="vc_col-sm-4 wpb_column column_container vc_column_container col nectar-sticky-column-css has-animation no-extra-padding el_spacing_30px inherit_tablet inherit_phone"
                     data-padding-pos="all" 
                     data-has-bg-color="false" 
                     data-bg-color="" 
                     data-bg-opacity="1"
                     data-animation="fade-in" 
                     data-delay="0">
                    
                    <div class="n-sticky">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                
                                <!-- 1. TÍTULO DEL PROYECTO -->
                                <div class="nectar-responsive-text font_size_max_54px font_size_desktop_3vw font_size_tablet_5vw font_size_phone_34px font_line_height_1-1 nectar-link-underline-effect">
                                    <h3><?= h($blogPost->title) ?></h3>
                                </div>

                                <!-- 2. INNER ROW: Trabajo y Categoría -->
                                <div id="fws_68d461f0f0bc8" 
                                     data-midnight="" 
                                     data-column-margin="default"
                                     class="wpb_row vc_row-fluid vc_row inner_row" 
                                     style="">
                                    <div class="row-bg-wrap">
                                        <div class="row-bg"></div>
                                    </div>
                                    <div class="row_col_wrap_12_inner col span_12 left">
                                        
                                        <!-- Tipo de Trabajo -->
                                        <div class="vc_col-sm-6 vc_col-xs-6 wpb_column column_container vc_column_container col child_column no-extra-padding el_spacing_5px inherit_tablet inherit_phone"
                                             data-padding-pos="all" 
                                             data-has-bg-color="false"
                                             data-bg-color="" 
                                             data-bg-opacity="1" 
                                             data-animation=""
                                             data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="nectar-responsive-text font_line_height_1-2 nectar-link-underline-effect">
                                                        <h5>TRABAJO</h5>
                                                    </div>
                                                    <div class="nectar-responsive-text nectar-link-underline-effect">
                                                        <p><?= h($eventType->name ?? 'Sin tipo') ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if (!empty($blogPost->blog_category)): ?>
                                        <!-- Categoría -->
                                        <div class="vc_col-sm-6 vc_col-xs-6 wpb_column column_container vc_column_container col child_column no-extra-padding el_spacing_5px inherit_tablet inherit_phone"
                                             data-padding-pos="all" 
                                             data-has-bg-color="false"
                                             data-bg-color="" 
                                             data-bg-opacity="1" 
                                             data-animation=""
                                             data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="nectar-responsive-text font_line_height_1-2 nectar-link-underline-effect">
                                                        <h5>CATEGORÍA</h5>
                                                    </div>
                                                    <div class="nectar-responsive-text nectar-link-underline-effect">
                                                        <p><?= h($blogPost->blog_category->name ?? 'Sin categoría') ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                <?php if (!empty($bodyHtml)): ?>
                                <!-- 3. DESCRIPCIÓN DEL PROYECTO -->
                                <div id="fws_68d461f0f11cf" 
                                     data-midnight="" 
                                     data-column-margin="default"
                                     class="wpb_row vc_row-fluid vc_row inner_row" 
                                     style="">
                                    <div class="row-bg-wrap">
                                        <div class="row-bg"></div>
                                    </div>
                                    <div class="row_col_wrap_12_inner col span_12 left">
                                        <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding el_spacing_10px inherit_tablet inherit_phone"
                                             data-padding-pos="all" 
                                             data-has-bg-color="false"
                                             data-bg-color="" 
                                             data-bg-opacity="1" 
                                             data-animation=""
                                             data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="nectar-responsive-text font_line_height_1-2 nectar-link-underline-effect">
                                                        <h5>DESCRIPCIÓN</h5>
                                                    </div>
                                                    <div class="nectar-responsive-text nectar-link-underline-effect">
                                                        
                                                            <?= $bodyHtml ?>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <!-- 4. GRID DE TAGS/TÉCNICAS (NUEVO) -->
                                <?php if (!empty($blogPost->blog_tags)): ?>
                                <div id="fws_tags_grid" 
                                     data-midnight="" 
                                     data-column-margin="default"
                                     class="wpb_row vc_row-fluid vc_row inner_row" 
                                     style="">
                                    <div class="row-bg-wrap">
                                        <div class="row-bg"></div>
                                    </div>
                                    <div class="row_col_wrap_12_inner col span_12 left">
                                        <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding el_spacing_10px inherit_tablet inherit_phone"
                                             data-padding-pos="all" 
                                             data-has-bg-color="false"
                                             data-bg-color="" 
                                             data-bg-opacity="1" 
                                             data-animation=""
                                             data-delay="0">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="nectar-responsive-text font_line_height_1-2 nectar-link-underline-effect">
                                                        <h5>TÉCNICAS</h5>
                                                    </div>
                                                    <!-- Grid de Tags Pills -->
                                                    <div class="" style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 15px;">
                                                        <?php foreach ($blogPost->blog_tags as $tag): ?>
                                                            <div class="menu-item menu-item-type-custom menu-item-object-custom menu-item-btn-style-button_extra-color-1 menu-item-hover-text-reveal nectar-regular-menu-item menu-item-364">
                                                            <a href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas/<?= h($tag->slug) ?>" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-btn-style-button_extra-color-1 menu-item-hover-text-reveal nectar-regular-menu-item menu-item-364"><span
                                                                class="menu-title-text"><span
                                                                    class="nectar-text-reveal-button"><span
                                                                        class="nectar-text-reveal-button__text" style="color: white;" 
                                                                        data-text="#<?= h($tag->name) ?>">#<?= h($tag->name) ?></span></span></span></a>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN COLUMNA IZQUIERDA -->

               <!-- ========== COLUMNA DERECHA (IMÁGENES) ========== -->
                <div class="vc_col-sm-8 wpb_column column_container vc_column_container col has-animation no-extra-padding el_spacing_20px inherit_tablet inherit_phone"
                     data-padding-pos="all" 
                     data-has-bg-color="false" 
                     data-bg-color="" 
                     data-bg-opacity="1"
                     data-animation="fade-in" 
                     data-delay="150">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            
                            <!-- Imagen Principal (Banner) - PRIORIDAD ALTA -->
                            <?php if (!empty($blogPost->banner)): ?>
                            <div class="img-with-aniamtion-wrap center" 
                                 data-max-width="100%" 
                                 data-max-width-mobile="default"
                                 data-shadow="none" 
                                 data-animation="none" 
                                 data-border-radius="20px">
                                <div class="inner">
                                    <div class="hover-wrap">
                                        <div class="hover-wrap-inner">
                                            <img fetchpriority="high"
                                                 decoding="async"
                                                 class="img-with-animation skip-lazy" 
                                                 data-delay="0" 
                                                 height="auto" 
                                                 width="100%" 
                                                 data-animation="none" 
                                                 src="/img/<?= h($blogPost->banner) ?>" 
                                                 alt="<?= h($blogPost->title) ?>" 
                                                 loading="eager" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <!-- Galería de Imágenes - LAZY LOAD -->
                            <?php if (!empty($blogPost->gallery)): ?>
                                <?php 
                                $galleryImages = json_decode($blogPost->gallery, true);
                                if (is_array($galleryImages)):
                                    foreach ($galleryImages as $index => $image): 
                                ?>
                                <div class="img-with-aniamtion-wrap center" 
                                     data-max-width="100%" 
                                     data-max-width-mobile="default"
                                     data-shadow="none" 
                                     data-animation="none" 
                                     data-border-radius="20px"
                                     style="margin-top: 30px;">
                                    <div class="inner">
                                        <div class="hover-wrap">
                                            <div class="hover-wrap-inner">
                                                <img decoding="async"
                                                     class="img-with-animation skip-lazy" 
                                                     data-delay="0" 
                                                     height="auto" 
                                                     width="100%" 
                                                     data-animation="none" 
                                                     src="/img/<?= h($image) ?>" 
                                                     alt="<?= h($blogPost->title) ?> - Imagen <?= $index + 1 ?>" 
                                                     loading="lazy" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    endforeach;
                                endif;
                                ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <!-- FIN COLUMNA DERECHA -->

            </div>
        </div>
        <!-- FIN ROW PRINCIPAL -->

        <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                  <div class="inner-wrap row-bg-layer">
                    <div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000; "></div>
                  </div>
                </div>

              <div id="fws_68d46b1958a23" data-column-margin="default" data-midnight="light"
                class="wpb_row vc_row-fluid vc_row full-width-section" style="padding-top: 0px; padding-bottom: 0px; ">
                <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                  <div class="inner-wrap row-bg-layer">
                    <div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000; "></div>
                  </div>
                </div>
                <div class="row_col_wrap_12 col span_12 light left">
                  <div
                    class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone "
                    data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                    data-animation="" data-delay="0">
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">
                        <div class="divider-wrap" style="opacity: 0.25;" data-alignment="default">
                          <div style="margin-top: 12.5px; height: 1px; margin-bottom: 12.5px;" data-width="100%"
                            data-animate="yes" data-animation-delay="" data-color="white" class="divider-border"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


<!-- CSS para Navegación Previous/Next -->
<style>
/* Container Principal */


.project-navigation-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
    width: 100%;
}

/* Item de Navegación */
.project-nav-item {
    position: relative;
    height: 500px; /* Altura fija en lugar de vh */
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: #fff;
    transition: all 0.3s ease;
}

/* Full Width cuando solo hay un botón */
.project-nav-item.full-width {
    grid-column: 1 / -1;
    height: 250px; /* Altura menor cuando es full-width */
}

/* Background Image */
.project-nav-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.project-nav-bg-inner {
    width: 100%;
    height: 100%;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.project-nav-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Hover: Zoom en imagen */
.project-nav-item:hover .project-nav-img {
    transform: scale(1.08); /* Zoom más sutil */
}

/* Active/Click: Efecto Zoom Out → Zoom In (sumirse) */
.project-nav-item:active .project-nav-img {
    transform: scale(0.96);
    transition: transform 0.15s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Overlay Gradient */
.project-nav-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgb(0 0 0 / 36%) 0%, rgb(0 0 0) 100%);
    z-index: 2;
    transition: background 0.3s ease;
}

.project-nav-item:hover .project-nav-overlay {
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.4) 0%,
        rgba(0, 0, 0, 0.8) 100%
    );
}

/* Content */
.project-nav-content {
    position: relative;
    z-index: 3;
    text-align: center;
    padding: 0.3rem;
    max-width: 90%;
}

.project-nav-label {
    display: block;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 2px;
    text-transform: uppercase;
    opacity: 0.7;
    margin-bottom: 1rem;
}

.project-nav-title {
    font-size: clamp(24px, 3vw, 42px);
    font-weight: 300;
    line-height: 1.2;
    margin: 0;
    transition: transform 0.3s ease;
}

.project-nav-item:hover .project-nav-title {
    transform: translateY(-5px);
}

/* Arrow Indicators */
.project-nav-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    color: #fff;
    z-index: 4;
}

.arrow-left {
    left: -2rem;
}

.arrow-right {
    right: -2rem;
}

/* Hover: Mostrar flecha */
.project-nav-item:hover .project-nav-arrow {
    opacity: 1;
}

.prev-project:hover .arrow-left {
    transform: translateY(-50%) translateX(-10px);
}

.next-project:hover .arrow-right {
    transform: translateY(-50%) translateX(10px);
}

/* Responsive */
@media only screen and (max-width: 999px) {
    .project-navigation-grid {
        grid-template-columns: 1fr;
    }
    
    .project-nav-item {
        height: 400px; /* Altura fija para tablet */
    }
    
    .project-nav-item.full-width {
        height: 240px;
    }
    
    .project-nav-title {
        font-size: 28px;
    }
    
    .project-nav-arrow {
        display: none; /* Ocultar flechas en móvil */
    }
}

@media only screen and (max-width: 690px) {
    .project-nav-item {
        height: 320px; /* Altura fija para móvil */
    }
    
    .project-nav-item.full-width {
        height: 150px;
    }
    
    .project-nav-title {
        font-size: 22px;
    }
    
    .project-nav-label {
        font-size: 12px;
    }
}

/* Estilos para las imágenes de los posts */
.project-images {
    position: absolute;
    top: 20px;
    right: 20px;
    display: flex;
    gap: 8px;
    z-index: 2;
}

.project-image {
    width: 60px;
    height: 60px;
    border-radius: 8px;
    overflow: hidden;
    border: 2px solid rgba(255,255,255,0.3);
    transition: transform 0.3s ease;
}

.project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.project-image:hover {
    transform: scale(1.1);
}

/* Botón Ver Proyecto - Mejor posicionado */
.project-button {
    position: absolute;
    bottom: 30px;
    right: 30px;
    background: rgba(255,255,255,0.1);
    border: 2px solid rgba(255,255,255,0.3);
    color: white;
    padding: 12px 24px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: all 0.3s ease;
    z-index: 2;
    /* Asegurar que no se superponga */
    margin-left: 20px;
}

.project-button:hover {
    background: rgba(255,255,255,0.2);
    border-color: rgba(255,255,255,0.5);
    color: white;
    text-decoration: none;
    transform: translateY(-2px);
}
/* Asegurar posición relativa en el contenedor */
.nectar-hor-list-item {
    position: relative;
    /* Dar espacio suficiente para el botón */
    min-height: 150px;
    padding-bottom: 80px; /* Espacio para el botón */
}

/* Ajustar contenido para evitar superposición */
.nectar-hor-list-item .vc_column-inner {
    /* Dar margen a la derecha para evitar superposición con imágenes */
    margin-right: 280px; /* Espacio para las 4 imágenes */
    padding-right: 20px;
}

@media (max-width: 999px) {
    .nectar-hor-list-item .vc_column-inner {
        margin-right: 200px; /* Menos espacio en tablet */
    }
    
    .project-button {
        bottom: 25px;
        right: 25px;
        padding: 10px 20px;
        font-size: 13px;
    }
}

@media (max-width: 690px) {
    .project-images {
        top: 15px;
        right: 15px;
        gap: 6px;
        /* Reorganizar en móvil */
        flex-direction: column;
        max-width: 60px;
    }
    
    .project-image {
        width: 50px;
        height: 50px;
    }
    
    .project-button {
        bottom: 15px;
        right: 15px;
        padding: 10px 18px;
        font-size: 12px;
        /* Reducir margen en móvil */
        margin-left: 10px;
    }
    
    .nectar-hor-list-item {
        min-height: 120px;
        padding-bottom: 60px;
    }
    
    .nectar-hor-list-item .vc_column-inner {
        /* Menos margen en móvil */
        margin-right: 80px;
        padding-right: 15px;
    }
}
</style>

<div class="nectar-global-section salient_portfolio_hook_single_after_content">
            <div class="container normal-container row">
                <div id="fws_68d461f0f23a8" data-column-margin="default" data-midnight="light"
                    class="wpb_row vc_row-fluid vc_row full-width-section"
                    style="padding-top: 10px; padding-bottom: 10px; ">
                    <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay=""
                        data-bg-overlay="false">
                        <div class="inner-wrap row-bg-layer">
                            <div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000; ">
                            </div>
                        </div>
                    </div>
                    <div class="row_col_wrap_12 col span_12 light left">
                        <div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding el_spacing_0px inherit_tablet inherit_phone "
                            data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                            data-animation="" data-delay="0">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div id="fws_68d461f0f25d9" data-midnight="" data-column-margin="default"
                                        class="wpb_row vc_row-fluid vc_row inner_row"
                                        style="padding-top: 5%; padding-bottom: 5%; ">
                                        <div class="row-bg-wrap">
                                            <div class="row-bg"></div>
                                        </div>
                                        <?php if (isset($prevPost) || isset($nextPost)): ?>
                                        <div class="row_col_wrap_12_inner col span_12  left">
                                            <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "
                                                data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                data-bg-opacity="1" data-animation="" data-delay="0">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="nectar-scrolling-text font_size_7vw font_size_mobile_10vw text_space_medium "
                                                            data-style="default" data-s-dir="ltr" data-spacing="true"
                                                            data-outline-thickness="thin" data-s-speed="slow"
                                                            data-overflow="hidden">
                                                            <div class="nectar-scrolling-text-inner">
                                                                <div class="nectar-scrolling-text-inner__text-chunk">
                                                                    <h2>Explore More</h2>
                                                                </div>
                                                                <div class="nectar-scrolling-text-inner__text-chunk">
                                                                    <h2 aria-hidden="true">Explore More</h2>
                                                                </div>
                                                                <div class="nectar-scrolling-text-inner__text-chunk">
                                                                    <h2 aria-hidden="true">Explore More</h2>
                                                                </div>
                                                                <div class="nectar-scrolling-text-inner__text-chunk">
                                                                    <h2 aria-hidden="true">Explore More</h2>
                                                                </div>
                                                                 <div class="nectar-scrolling-text-inner__text-chunk">
                                                                    <h2 aria-hidden="true">Explore More</h2>
                                                                </div>
                                                                <div class="nectar-scrolling-text-inner__text-chunk">
                                                                    <h2 aria-hidden="true">Explore More</h2>
                                                                </div>
                                                                <div class="nectar-scrolling-text-inner__text-chunk">
                                                                    <h2 aria-hidden="true">Explore More</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

<!-- ========== NAVEGACIÓN PREVIOUS / NEXT ========== -->

<div class="project-navigation-wrap">
    <div class="project-navigation-grid">
        
        <!-- PREVIOUS PROJECT -->
        <?php if ($prevPost): ?>
        <a href="/portafolio/<?= h($eventType->eventoslug) ?>/<?= h($prevPost->slug) ?>" 
           class="project-nav-item prev-project <?= !$nextPost ? 'full-width' : '' ?>">
            <!-- Background Image -->
            <div class="project-nav-bg">
                <div class="project-nav-bg-inner">
                    <?php if (!empty($prevPost->banner)): ?>
                        <img src="/img/<?= h($prevPost->banner) ?>" 
                             alt="<?= h($prevPost->title) ?>" 
                             class="project-nav-img" />
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Overlay Gradient -->
            <div class="project-nav-overlay"></div>
            
            <!-- Content -->
            <div class="project-nav-content">
                <span class="project-nav-label">Previous Project</span>
                <h3 class="project-nav-title"><?= h($prevPost->title) ?></h3>
                
                <!-- Arrow Left -->
                <span class="project-nav-arrow arrow-left">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                         viewBox="0 0 256 256" height="48px" width="48px"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                    </svg>
                </span>
            </div>
        </a>
        <?php endif; ?>
        
        <!-- NEXT PROJECT -->
        <?php if ($nextPost): ?>
        <a href="/portafolio/<?= h($eventType->eventoslug) ?>/<?= h($nextPost->slug) ?>" 
           class="project-nav-item next-project <?= !$prevPost ? 'full-width' : '' ?>">
            <!-- Background Image -->
            <div class="project-nav-bg">
                <div class="project-nav-bg-inner">
                    <?php if (!empty($nextPost->banner)): ?>
                        <img src="/img/<?= h($nextPost->banner) ?>" 
                             alt="<?= h($nextPost->title) ?>" 
                             class="project-nav-img" />
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Overlay Gradient -->
            <div class="project-nav-overlay"></div>
            
            <!-- Content -->
            <div class="project-nav-content">
                <span class="project-nav-label">Next Project</span>
                <h3 class="project-nav-title"><?= h($nextPost->title) ?></h3>
                
                <!-- Arrow Right -->
                <span class="project-nav-arrow arrow-right">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                         viewBox="0 0 256 256" height="48px" width="48px"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
                    </svg>
                </span>
            </div>
        </a>
        <?php endif; ?>
        
    </div>
</div>
<?php endif; ?>


<!-- ============================================
     MASONRY GRID INTELIGENTE - MÁS PROYECTOS
     ============================================ -->
<div id="fws_68d46b1958e71" data-column-margin="custom" data-midnight="light"
  class="wpb_row vc_row-fluid vc_row full-width-section"
  style="padding-top: 60px; padding-bottom: 60px; background-color: #000000;">

  <div class="container">
    <div class="row">
      <div class="col span_12">

        <!-- Título de sección -->
        <div style="margin-bottom: 40px;">
          <div class="nectar-responsive-text font_size_max_90px font_size_desktop_5vw font_size_tablet_7vw font_line_height_1px nectar-link-underline-effect">
            <h2 style="color: #28ebe3 !important;">Más Proyectos</h2>
          </div>
          <div class="nectar-responsive-text nectar-link-underline-effect" style="color: rgba(255,255,255,0.6); max-width: 600px;">
            <p>Explora más categorías de proyectos y descubre mi trabajo en diferentes estilos y técnicas.</p>
          </div>
        </div>

        <!-- Masonry Grid -->
        <div class="stef-masonry-grid">
          <?php
          // Helper function para detectar orientación de imagen (umbrales mejorados)
          if (!function_exists('getImageOrientation')) {
              function getImageOrientation($imagePath) {
                  $fullPath = WWW_ROOT . 'img' . DS . $imagePath;
                  if (file_exists($fullPath)) {
                      $size = @getimagesize($fullPath);
                      if ($size) {
                          $width = $size[0];
                          $height = $size[1];
                          $ratio = $width / $height;

                          // Horizontal: ratio > 1.4 (más agresivo)
                          if ($ratio > 1.4) return 'horizontal';
                          // Vertical: ratio < 0.6 (más agresivo para mostrar verticales)
                          if ($ratio < 0.6) return 'vertical';
                          // Cuadrado o casi cuadrado
                          return 'square';
                      }
                  }
                  return 'square'; // Default
              }
          }

          // Iterar sobre event types
          $index = 0;
          foreach ($allEventTypes as $eventType):
              $orientation = 'square';
              $sizeClass = '';

              // Detectar orientación de la imagen featured
              if (!empty($eventType->featured_image)) {
                  $orientation = getImageOrientation($eventType->featured_image);
              }

              // Variar tamaños para crear un grid más interesante
              // Cada 5to elemento puede ser más grande
              if ($index % 5 == 0 && $orientation !== 'vertical') {
                  $sizeClass = 'large';
              } else {
                  $sizeClass = $orientation;
              }

              $index++;
          ?>

          <div class="stef-masonry-item <?= $sizeClass ?>"
               onclick="window.location.href='/portafolio/<?= h($eventType->eventoslug) ?>'">

            <!-- Imagen de fondo -->
            <img src="/img/<?= h($eventType->featured_image) ?>"
                 alt="<?= h($eventType->name) ?>"
                 class="stef-masonry-item__image"
                 loading="lazy">

            <!-- Overlay con contenido -->
            <div class="stef-masonry-item__overlay">
              <div class="stef-masonry-item__content">
                <h4 class="stef-masonry-item__title"><?= h($eventType->name) ?></h3>
                <p class="stef-masonry-item__count"><?= $eventType->posts_count ?> PROYECTOS</p>
                <a href="/portafolio/<?= h($eventType->eventoslug) ?>"
                   class="stef-masonry-item__button"
                   onclick="event.stopPropagation();">
                  Ver más
                  <span class="stef-masonry-item__arrow">→</span>
                </a>
              </div>
            </div>

          </div>

          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </div>
</div>

<script>
// ============================================
// MASONRY GRID INTELIGENTE - JavaScript
// ============================================
(function() {
    'use strict';

    function intelligentMasonryLayout() {
        const grid = document.querySelector('.stef-masonry-grid');
        if (!grid) return;

        const items = Array.from(grid.querySelectorAll('.stef-masonry-item'));
        if (items.length === 0) return;

        // Detectar si estamos en desktop
        const isDesktop = window.innerWidth > 768;

        if (!isDesktop) return; // En móvil dejamos el CSS como está

        let processedImages = 0;
        const totalImages = items.length;

        // Procesar cada item cuando su imagen cargue
        items.forEach((item, index) => {
            const img = item.querySelector('.stef-masonry-item__image');
            if (!img) return;

            const processImage = () => {
                const imgWidth = img.naturalWidth;
                const imgHeight = img.naturalHeight;

                if (imgWidth === 0 || imgHeight === 0) return;

                const ratio = imgWidth / imgHeight;

                // Remover clases existentes
                item.classList.remove('horizontal', 'vertical', 'square', 'large');

                // Reclasificar según ratio real
                if (ratio > 1.4) {
                    item.classList.add('horizontal');
                } else if (ratio < 0.6) {
                    item.classList.add('vertical');
                } else {
                    item.classList.add('square');
                }

                processedImages++;

                // Cuando todas las imágenes estén procesadas, optimizar el layout
                if (processedImages === totalImages) {
                    optimizeLayout(items);
                }
            };

            if (img.complete && img.naturalWidth > 0) {
                processImage();
            } else {
                img.addEventListener('load', processImage);
                img.addEventListener('error', () => {
                    processedImages++;
                    if (processedImages === totalImages) {
                        optimizeLayout(items);
                    }
                });
            }
        });
    }

    function optimizeLayout(items) {
        if (window.innerWidth <= 768) return;

        // Algoritmo para evitar huecos y balancear el grid
        let currentRow = [];
        let currentRowSpan = 0;
        const maxSpanPerRow = 3;

        items.forEach((item, index) => {
            const isHorizontal = item.classList.contains('horizontal');
            const isVertical = item.classList.contains('vertical');
            const span = isHorizontal ? 2 : 1;

            // Si el item actual no cabe en la fila, iniciamos nueva fila
            if (currentRowSpan + span > maxSpanPerRow) {
                // Si la fila actual solo tiene 1 span, intentar expandirlo
                if (currentRowSpan === 1 && currentRow.length === 1) {
                    // Convertir el último item a horizontal si es square
                    const lastItem = currentRow[0];
                    if (lastItem.classList.contains('square')) {
                        lastItem.classList.remove('square');
                        lastItem.classList.add('horizontal');
                    }
                }

                // Reset para nueva fila
                currentRow = [];
                currentRowSpan = 0;
            }

            currentRow.push(item);
            currentRowSpan += span;

            // Cada 4to-5to elemento intentar hacer large si es cuadrado
            if ((index % 4 === 0 || index % 5 === 0) &&
                item.classList.contains('square') &&
                currentRowSpan + 1 <= maxSpanPerRow) {

                // Solo si tenemos espacio para un large (2x2)
                const nextItem = items[index + 1];
                if (nextItem && currentRowSpan <= 1) {
                    item.classList.remove('square');
                    item.classList.add('large');
                }
            }
        });

        // Forzar repaint para aplicar cambios
        void grid.offsetWidth;
    }

    // Ejecutar cuando el DOM esté listo
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', intelligentMasonryLayout);
    } else {
        intelligentMasonryLayout();
    }

    // Re-ejecutar en resize (con debounce)
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(intelligentMasonryLayout, 250);
    });
})();
</script>






</div>
</div>


<style>
/* Asegurar que las imágenes sean responsive */
.img-with-aniamtion-wrap img {
    max-width: 100%;
    height: auto;
    display: block;
}
</style>
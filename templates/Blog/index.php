
<?php
$this->assign('title', 'Portafolio - Ilustraciones Digitales');
?>

<style>
    @media only screen and (max-width: 690px) {
    .wpb_column:not([class*=vc_col-xs]) {
        margin-bottom: -1px !important;
    }
}
</style>

<style id='dynamic-css-inline-css' type='text/css'>

.nectar-hor-list-item[data-columns="4"]>.nectar-list-item
 {
    width: 22% !important;
}

</style>
<style>

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


<div id="ajax-content-wrap">
    <div id="full_width_portfolio" data-featured-img="webroot/img/stefsketch-1.jpg">

        <div id="page-header-wrap" data-animate-in-effect="zoom-out" data-midnight="light" class="fullscreen-header"
            role="region" aria-label="Page Header">
            <div id="page-header-bg" class="fullscreen-header" data-padding-amt="normal"
                data-animate-in-effect="zoom-out" data-midnight="light" data-text-effect="" data-bg-pos="center"
                data-alignment="left" data-alignment-v="middle" data-parallax="1" data-height="350"
                style="background-color: #0a0a0a;  ">
                <div class="page-header-bg-image-wrap" id="nectar-page-header-p-wrap" data-parallax-speed="fast">
                    <div class="page-header-bg-image">
                        <img src="webroot/img/stefsketch-1.jpg" width="100%" height="100%" alt="Nectar Motors" />
                    </div>
                </div>
                <div class="page-header-overlay-color" data-overlay-opacity="default"
                    style="background-color: #0a0a0a;">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div class="col span_6 section-title no-date">
                                <div class="inner-wrap">
                                    <h1>Estefania Palma Apango</h1>
                                    <span class="subheader">Stefsketch</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->

                </div>
                <div class="scroll-down-wrap no-border"><a href="#" class="section-down-arrow "><svg
                            class="nectar-scroll-icon" viewBox="0 0 30 45" enable-background="new 0 0 30 45">
                            <path class="nectar-scroll-icon-path" fill="none" stroke="#ffffff" stroke-width="2"
                                stroke-miterlimit="10"
                                d="M15,1.118c12.352,0,13.967,12.88,13.967,12.88v18.76  c0,0-1.514,11.204-13.967,11.204S0.931,32.966,0.931,32.966V14.05C0.931,14.05,2.648,1.118,15,1.118z">
                            </path>
                        </svg></a></div>
            </div>

        </div>

        <div class="container-wrap">
            <div class="container main-content" role="main">
                <div class="row">

                    <div id="fws_68d45a3a446ee" data-column-margin="default" data-midnight="light"
                        class="wpb_row vc_row-fluid vc_row top-level full-width-section"
                        style="padding-top: 0px; padding-bottom: 0px; ">
                        <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay=""
                            data-bg-overlay="false">
                            <div class="inner-wrap row-bg-layer">
                                <div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000; ">
                                </div>
                            </div>
                        </div>
                        <div class="row_col_wrap_12 col span_12 light left">
                            <div class="vc_col-sm-12 wpb_column column_container vc_column_container col has-animation el_spacing_20px bottom_padding_desktop_20px "
                                data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                                data-animation="slight-fade-in-from-bottom" data-delay="0">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div id="fws_68d45a3a44aad" data-midnight="" data-column-margin="default"
                                            class="wpb_row vc_row-fluid vc_row inner_row  top_padding_tablet_20px bottom_padding_tablet_0px"
                                            style="padding-top: 10px; padding-bottom: 10px; ">
                                            <div class="row-bg-wrap">
                                                <div class="row-bg"></div>
                                            </div>
                                            <div class="row_col_wrap_12_inner col span_12  left">
                                                <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "
                                                    data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                    data-bg-opacity="1" data-animation="" data-delay="0">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="nectar-split-heading " data-align="default"
                                                                data-m-align="inherit" data-text-effect="none"
                                                                data-animation-type="line-reveal-by-space"
                                                                data-animation-delay="0" data-animation-offset=""
                                                                data-m-rm-animation="" data-stagger=""
                                                                data-custom-font-size="false" data-has-fit-text="true">
                                                                <h1>Proyectos</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<!-- ============================================
     MASONRY GRID INTELIGENTE - PROYECTOS
     ============================================ -->
<div id="fws_68d46b1958e71" data-column-margin="custom" data-midnight="light"
  class="wpb_row vc_row-fluid vc_row full-width-section"
  style="padding-top: 30px; padding-bottom: 30px; background-color: #000000;">

  <div class="">
    <div class="row">
      <div class="col span_12">

        <!-- Masonry Grid -->
        <div class="stef-masonry-grid">
          <?php
          // Helper function para detectar orientación de imagen (umbrales mejorados)
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

          // Iterar sobre event types
          $index = 0;
          foreach ($eventTypesWithPosts as $eventType):
              $orientation = 'square';
              $sizeClass = '';

              // Detectar orientación de la imagen featured
              if (!empty($eventType->featured_image)) {
                  $orientation = getImageOrientation($eventType->featured_image);
              }

              // Variar tamaños para crear un grid más interesante
              // Cada 3er elemento puede ser más grande
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



                    <!-- Grid de EventTypes --
                    <div id="fws_68d45a3a452d0" data-column-margin="default" data-midnight="dark"
                        class="wpb_row vc_row-fluid vc_row full-width-section"
                        style="padding-top: 0px; padding-bottom: 0px; ">
                        <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay=""
                            data-bg-overlay="false">
                            <div class="inner-wrap row-bg-layer">
                                <div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000; ">
                                </div>
                            </div>
                        </div>
                        <div class="row_col_wrap_12 col span_12 dark left">
                            <div class="vc_col-sm-12 wpb_column column_container vc_column_container col has-animation no-extra-padding inherit_tablet inherit_phone "
                                data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                                data-animation="slight-fade-in-from-bottom" data-delay="100">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='nectar-post-grid-wrap text-color-light spacing-10px'
                                            data-el-settings='{"post_type":"portfolio","pagination":"none","image_size":"full","parallax_scrolling":"yes","aspect_ratio_image_size":"","category_position":"overlaid","category_display":"default","display_categories":"yes","display_excerpt":"0","excerpt_length":"20","display_date":"0","display_estimated_reading_time":"0","display_author":"0","author_functionality":"default","author_position":"default","color_overlay":"#0a0a0a","color_overlay_opacity":"0","color_overlay_hover_opacity":"0.2","card_bg_color":"","grid_style":"content_overlaid","hover_effect":"zoom","post_title_overlay":"","heading_tag":"default","heading_tag_render":"default","enable_gallery_lightbox":"0","category_style":"button","overlay_secondary_project_image":"","vertical_list_hover_effect":"none","vertical_list_read_more":"","vertical_list_read_more_style":"text","read_more_button":"0","animation":"none","custom_fields":"","custom_fields_location":"before_post_meta","display_type":"grid","text_content_layout":"corners"}'
                                            data-style='content_overlaid'
                                            data-query='{"post_type":"portfolio","posts_per_page":"-1","order":"DESC","orderby":"date","offset":"0","cpt_name":"post","custom_query_tax":"","ignore_sticky_posts":"","exclude_current_post":""}'
                                            data-load-more-color='black' data-load-more-text='Load More'>
                                            <div class="nectar-post-grid-filters" data-active-color="default"
                                                data-align="default" data-animation="none" data-sortable="">
                                                <div><a href="#" class="active all-filter" data-filter="-1"
                                                        data-total-count="5">All</a><a href="#" data-filter="branding"
                                                        data-total-count="1">Branding</a><a href="#"
                                                        data-filter="photography" data-total-count="2">Photography</a><a
                                                        href="#" data-filter="web-design" data-total-count="2">Web
                                                        Design</a></div>
                                            </div>

                                            <!-- Nectar Post Grid - Clases exactas del diseño --
                                            <div class="nectar-post-grid custom_font_size_3vw font_size_max_54px font_size_tablet_5vw font_size_phone_34px text-opacity-1 text-opacity-hover-1 overlaid-aspect-ratio-image-size-1-1 layout-default_alt category-position-before-title category-button-color-rgba__10_10_10_0--2__"
                                                data-lazy-skip="3" data-indicator="" data-indicator-style="default"
                                                data-indicator-text-color="#fff" data-indicator-color="#000"
                                                data-indicator-text="View" data-masonry="yes" data-columns="2"
                                                data-hover-effect="zoom" data-text-style="default"
                                                data-border-radius="25px" data-grid-item-height="30vh"
                                                data-grid-spacing="10px" data-text-layout="corners"
                                                data-text-color="light" data-text-hover-color="light"
                                                data-shadow-hover="" data-animation="none" data-animation-stagger="90"
                                                data-cat-click="static" style="--post-grid-border-radius:25px;">

                                                <?php foreach ($eventTypesWithPosts as $eventType): ?>
                                                <!-- EventType Card - Estructura EXACTA del diseño --
                                                <div class="nectar-post-grid-item" data-post-id="<?= $eventType->id ?>"
                                                    data-has-img="true">
                                                    <div class="inner">

                                                        <!-- Background Image Wrap - Estructura EXACTA --
                                                        <div class="nectar-post-grid-item-bg-wrap">
                                                            <div class="nectar-el-parallax-scroll"
                                                                data-scroll-animation="true"
                                                                data-scroll-animation-mobile="true"
                                                                data-scroll-animation-intensity="-0.75"
                                                                data-scroll-animation-lerp="1">
                                                                <div class="nectar-post-grid-item-bg-wrap">
                                                                    <div class="nectar-el-parallax-scroll"
                                                                        data-scroll-animation="true"
                                                                        data-scroll-animation-mobile="true"
                                                                        data-scroll-animation-intensity="-0.75"
                                                                        data-scroll-animation-lerp="1">
                                                                        <div
                                                                            class="nectar-post-grid-item-bg-wrap-inner">
                                                                            <div class="nectar-post-grid-item-bg">
                                                                                <img decoding="async" width="2048"
                                                                                    height="2048"
                                                                                    src="/img/<?= h($eventType->featured_image) ?>"
                                                                                    class="nectar-post-grid-item-bg__media"
                                                                                    alt="<?= h($eventType->name) ?>"
                                                                                    srcset="/img/<?= h($eventType->featured_image) ?> 2048w, 
                                                            /img/<?= h($eventType->featured_image) ?> 1024w, 
                                                            /img/<?= h($eventType->featured_image) ?> 768w, 
                                                            /img/<?= h($eventType->featured_image) ?> 480w"
                                                                                    sizes="(max-width: 2048px) 100vw, 2048px" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Overlay - Estructura EXACTA --
                                                        <div class="bg-overlay" style="background-color: #0a0a0a;"
                                                            data-opacity="0" data-hover-opacity="0.2">
                                                        </div>

                                                        <!-- Content - Estructura EXACTA --
                                                        <div class="content">

                                                            <!-- Arrow Indicator - Clase EXACTA --
                                                            <span class="nectar-post-grid__arrow-indicator">
                                                                <svg stroke="currentColor" fill="currentColor"
                                                                    stroke-width="0" viewBox="60 58 140 140"
                                                                    height="200px" width="200px"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M198,64V168a6,6,0,0,1-12,0V78.48L68.24,196.24a6,6,0,0,1-8.48-8.48L177.52,70H88a6,6,0,0,1,0-12H192A6,6,0,0,1,198,64Z">
                                                                    </path>
                                                                </svg>
                                                            </span>

                                                            <!-- Link Principal --
                                                            <a class="nectar-post-grid-link"
                                                                href="/portafolio/<?= h($eventType->eventoslug) ?>">
                                                                <span
                                                                    class="screen-reader-text"><?= h($eventType->name) ?></span>
                                                            </a>

                                                            <!-- Categorías - Estructura EXACTA --
                                                            <?php if (!empty($eventType->categories)): ?>
                                                            <span class="meta-category">
                                                                <?php foreach ($eventType->categories as $category): ?>
                                                                <a class="<?= h($category->slug) ?> style-button"
                                                                    href="/portafolio/<?= h($eventType->eventoslug) ?>/temas/<?= h($category->slug) ?>">
                                                                    <?= h($category->name) ?>
                                                                </a>
                                                                <?php endforeach; ?>
                                                            </span>
                                                            <?php endif; ?>

                                                            <!-- Item Main - Estructura EXACTA --
                                                            <div class="item-main">
                                                                <h3 class="post-heading">
                                                                    <span><?= h($eventType->name) ?></span>
                                                                </h3>
                                                                <span class="post-meta">
                                                                    <span
                                                                        class="meta-date"><?= $eventType->posts_count ?>
                                                                        proyectos</span>
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>

        <?php if ($randomPost && !empty($randomPost->blog_category) && !empty($randomPost->event_type)):
            // Decodificar galería con validación robusta
            $gallery = [];
            if (!empty($randomPost->gallery)) {
                $decoded = json_decode($randomPost->gallery, true);
                $gallery = (is_array($decoded) && !empty($decoded)) ? $decoded : [];
            }
            $galleryImg1 = $gallery[0] ?? null;
            $galleryImg2 = $gallery[1] ?? null;
        ?>


        <div class="container-wrap" data-nav-pos="after_project_2" data-rm-header="false">
            <div class="container main-content" style="padding-top: 65px;">
                <div class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding"
                                        data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                        data-bg-opacity="1" data-animation="" data-delay="0">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="nectar-split-heading " data-align="default"
                                                    data-m-align="inherit" data-text-effect="default"
                                                    data-animation-type="default" data-animation-delay="0"
                                                    data-animation-offset="" data-m-rm-animation="" data-stagger=""
                                                    data-custom-font-size="false">
                                                    <div class="heading-line">
                                                        <div>
                                                            <h2>ILUSTRACIÓN DEL DÍA</h2>
                                                        </div>
                                                    </div>
                                                </div>                                                                                                                                                                                           
                                            </div>
                                        </div>
                                    </div>
                <div class="row  ">
                    <div class="post-area col span_12">
                        <div id="portfolio-extra">

                        

                        <!-- Sección Post Dinámico -->
                        <div id="fws_68d462ae63b9c" data-column-margin="default" data-midnight="light"
                            class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top"
                            style="padding-top: 0px; padding-bottom: 0px;">
                        
                        <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                            <div class="inner-wrap row-bg-layer">
                                <div class="row-bg viewport-desktop using-bg-color" style="background-color: #111111;"></div>
                            </div>
                        </div>


                        
                        
                        <div class="row_col_wrap_12 col span_12 light left flip-in-vertical-wrap">
                            
                            <!-- Columna Izquierda -->
                            <div class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding"
                                data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" 
                                data-animation="" data-delay="0">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        
                                        <!-- Inner Row 1: Portada + Categoría -->
                                        <div id="fws_68d462ae63da7" data-midnight="" data-column-margin="default"
                                            class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex vc_row-o-content-middle">
                                            <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                            
                                            <div class="row_col_wrap_12_inner col span_12 left flip-in-vertical-wrap">
                                                
                                                <!-- Elemento 1: PORTADA DEL POST -->
                                                <div class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column has-animation padding-7-percent"
                                                    data-using-bg="true" data-bg-cover="true" data-padding-pos="all" 
                                                    data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" 
                                                    data-animation="flip-in-vertical" data-delay="0">
                                                    <div class="vc_column-inner">
                                                        <div class="column-image-bg-wrap column-bg-layer viewport-desktop"
                                                            data-bg-pos="center center" data-bg-animation="none" data-bg-overlay="false">
                                                            <div class="inner-wrap">
                                                                <div class="column-image-bg" style="" 
                                                                    data-nectar-img-src="/img/<?= h($randomPost->banner) ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_wrapper">
                                                            <div class="divider-wrap" data-alignment="default">
                                                                <div style="height: 260px;" class="divider"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Elemento 2: CATEGORÍA (Nombre + Imagen opcional) -->
                                                <div class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column has-animation padding-7-percent"
                                                    data-cfc="true" data-using-bg="true" data-padding-pos="all" 
                                                    data-has-bg-color="true" data-bg-color="#ffffff" data-bg-opacity="1" 
                                                    data-animation="flip-in-vertical" data-delay="100">
                                                    <div class="vc_column-inner">
                                                        <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                            <div class="column-bg-overlay" style="opacity: 1; background-color: #ffffff;"></div>
                                                        </div>
                                                        <div class="wpb_wrapper">
                                                            
                                                            <!-- Mostrar imagen de categoría si existe, sino ícono genérico -->
                                                            <?php if (!empty($randomPost->blog_category->image)): ?>
                                                            <div class="nectar_icon_wrap" data-style="default" data-padding="0px" data-color="black">
                                                                <div class="nectar_icon">
                                                                    <span class="im-icon-wrap" data-color="black" style="">
                                                                        <img src="/img/<?= h($randomPost->blog_category->image) ?>" 
                                                                            alt="<?= h($randomPost->blog_category->name) ?>" 
                                                                            style="width: 50%; height: 50%; object-fit: contain;">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <?php else: ?>
                                                            <div class="nectar_icon_wrap" data-style="default" data-padding="0px" data-color="black">
                                                                <div class="nectar_icon">
                                                                    <span class="im-icon-wrap" data-color="black" style="height: 40px; width: 40px;">
                                                                        <span>
                                                                            <svg role="presentation" version="1.1" xmlns="http://www.w3.org/2000/svg" 
                                                                                width="40" height="40" viewBox="0 0 32 32">
                                                                                <path d="M16 2c-7.732 0-14 6.268-14 14s6.268 14 14 14 14-6.268 14-14-6.268-14-14-14zM16 26c-5.514 0-10-4.486-10-10s4.486-10 10-10c5.514 0 10 4.486 10 10s-4.486 10-10 10z"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <?php endif; ?>
                                                            
                                                            <h4 style="font-size: 38px;color: #3f3f3f;line-height: 46px;text-align: left"
                                                                class="vc_custom_heading vc_do_custom_heading vc_custom_1484779752863">
                                                                <?= h($randomPost->blog_category->name) ?>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <!-- Inner Row 2: Nombre Post + Botón -->
                                        <div id="fws_68d462ae6488f" data-midnight="" data-column-margin="default"
                                            class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex vc_row-o-content-middle">
                                            <div class="row-bg-wrap"><div class="row-bg"></div></div>
                                            
                                            <div class="row_col_wrap_12_inner col span_12 left flip-in-vertical-wrap">
                                                
                                                <!-- Elemento 3: NOMBRE POST + BOTÓN -->
                                                <div class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column has-animation padding-7-percent"
                                                    data-using-bg="true" data-padding-pos="all" data-has-bg-color="true" 
                                                    data-bg-color="#9900ff" data-bg-opacity="1" 
                                                    data-animation="flip-in-vertical" data-delay="0">
                                                    <div class="vc_column-inner">
                                                        <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                            <div class="column-bg-overlay" style="opacity: 1; background-color: #9900ff;"></div>
                                                        </div>
                                                        <div class="wpb_wrapper">
                                                            
                                                            <h4 style="font-size: 38px;color: #ffffff;line-height: 46px;text-align: left"
                                                                class="vc_custom_heading vc_do_custom_heading vc_custom_1484778589853">
                                                                <?= h($randomPost->title) ?>
                                                            </h4>
                                                            
                                                            <div class="divider-wrap" data-alignment="default">
                                                                <div style="height: 100px;" class="divider"></div>
                                                            </div>
                                                            
                                                            <div class="nectar-cta" data-color="" data-using-bg="false" 
                                                                data-style="see-through" data-display="block" 
                                                                data-alignment="left" data-text-color="custom"
                                                                style="--nectar-text-color: #ffffff; --nectar-icon-gap: 10px;">
                                                               
                                                                <h5 style="color: #ffffff;"> <span class="text">
                                                                    </span><span class="link_wrap"><a
                                                                            class="link_text" role="button"
                                                                            href="/portafolio/<?= h($randomPost->event_type->eventoslug ?? 'proyecto') ?>/<?= h($randomPost->slug) ?>">VER PROYECTO<span
                                                                                class="arrow"></span></a></span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Elemento 4: 1RA IMAGEN DE GALERÍA -->
                                                <div class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column has-animation padding-9-percent"
                                                    data-using-bg="true" data-bg-cover="true" data-padding-pos="all" 
                                                    data-has-bg-color="<?= $galleryImg1 ? 'false' : 'true' ?>" 
                                                    data-bg-color="<?= $galleryImg1 ? '' : '#e0e0e0' ?>" 
                                                    data-bg-opacity="1" data-animation="flip-in-vertical" data-delay="100">
                                                    <div class="vc_column-inner">
                                                        <?php if ($galleryImg1): ?>
                                                        <div class="column-image-bg-wrap column-bg-layer viewport-desktop"
                                                            data-bg-pos="center center" data-bg-animation="none" data-bg-overlay="false">
                                                            <div class="inner-wrap">
                                                                <div class="column-image-bg" style="" 
                                                                    data-nectar-img-src="/img/<?= h($galleryImg1) ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php else: ?>
                                                        <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                                            <div class="column-bg-overlay" style="opacity: 1; background-color: #e0e0e0;"></div>
                                                        </div>
                                                        <?php endif; ?>
                                                        <div class="wpb_wrapper">
                                                            <div class="divider-wrap" data-alignment="default">
                                                                <div style="height: 150px;" class="divider"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Columna Derecha -->
                            <!-- Elemento 5: 2DA IMAGEN DE GALERÍA -->
                            <div class="vc_col-sm-6 wpb_column column_container vc_column_container col has-animation padding-9-percent"
                                data-using-bg="true" data-bg-cover="true" data-padding-pos="all" 
                                data-has-bg-color="<?= $galleryImg2 ? 'false' : 'true' ?>" 
                                data-bg-color="<?= $galleryImg2 ? '' : '#e0e0e0' ?>" 
                                data-bg-opacity="1" data-animation="flip-in-vertical" data-delay="200">
                                <div class="vc_column-inner">
                                    <?php if ($galleryImg2): ?>
                                    <div class="column-image-bg-wrap column-bg-layer viewport-desktop"
                                        data-bg-pos="center center" data-bg-animation="none" data-bg-overlay="false">
                                        <div class="inner-wrap">
                                            <div class="column-image-bg" style="" 
                                                data-nectar-img-src="/img/<?= h($galleryImg2) ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                        <div class="column-bg-overlay" style="opacity: 1; background-color: #e0e0e0;"></div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <?php endif; ?>

                    

                            <div id="fws_68d462ae659bc" data-column-margin="default" data-midnight="light"
                                data-top-percent="8%" data-bottom-percent="8%"
                                class="wpb_row vc_row-fluid vc_row full-width-section"
                                style="padding-top: calc(100vw * 0.08); padding-bottom: calc(100vw * 0.08); ">

                            </div>
                            <div id="fws_68d462ae65ff8" data-column-margin="default" data-midnight="light"
                                data-top-percent="20%" data-bottom-percent="20%"
                                class="wpb_row vc_row-fluid vc_row full-width-section parallax_section"
                                style="padding-top: calc(100vw * 0.20); padding-bottom: calc(100vw * 0.20); ">
                                <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay=""
                                    data-bg-overlay="false">
                                    <div class="inner-wrap row-bg-layer using-image">
                                        <div class="row-bg viewport-desktop using-image using-bg-color"
                                            data-parallax-speed="fast"
                                            style="background-position: center top; background-repeat: no-repeat; background-color: #111111; "
                                            data-nectar-img-src="webroot/img/fondoBannerAqua.jpg">
                                        </div>
                                    </div>
                                </div>
                                <!-- Tercera capa: Texturas parallax (opcional) - colocar imagen en img/texturasBannerParallax.png -->
                                <div class="texture-parallax-wrap" style="display: none;">
                                    <div class="texture-parallax-image">
                                        <img src="img/texturasBannerParallax.png" alt="Texturas decorativas">
                                    </div>
                                </div>
                                <!-- Segunda imagen parallax: Sirena -->
                                <div class="sirena-parallax-wrap">
                                    <div class="sirena-parallax-layer">
                                        <div class="sirena-parallax-image" data-parallax-speed="medium">
                                            <img src="img/sirenaBannerParallax.png" alt="Sirena ilustración">
                                        </div>
                                    </div>
                                </div>
                                <div class="row_col_wrap_12 col span_12 light left">
                                    <div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding"
                                        data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                        data-bg-opacity="1" data-animation="" data-delay="0">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="nectar-split-heading " data-align="default"
                                                    data-m-align="inherit" data-text-effect="default"
                                                    data-animation-type="default" data-animation-delay="0"
                                                    data-animation-offset="" data-m-rm-animation="" data-stagger=""
                                                    data-custom-font-size="false">
                                                    <div class="heading-line">
                                                        <div>
                                                            <h2 style="color: black !important;">¡Hola!</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1484775560863"
                                                    style=" max-width: 500px; display: inline-block;">
                                                    <p style="color: black;">
                                                        Soy Estefanía Palma, ilustradora mexicana de la ciudad de Puebla. Después de años creando con palabras, decidí darles forma y color.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="fws_68d462ae661e5" data-column-margin="default" data-midnight="light"
                                data-top-percent="8%" data-bottom-percent="8%"
                                class="wpb_row vc_row-fluid vc_row full-width-section"
                                style="padding-top: calc(100vw * 0.08); padding-bottom: calc(100vw * 0.08); ">
                                <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay=""
                                    data-bg-overlay="false">
                                    <div class="inner-wrap row-bg-layer">
                                        <div class="row-bg viewport-desktop using-bg-color"
                                            style="background-color: #111111; ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row_col_wrap_12 col span_12 light left">
                                    <div class="vc_col-sm-3 wpb_column column_container vc_column_container col no-extra-padding"
                                        data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                        data-bg-opacity="1" data-animation="" data-delay="0">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding"
                                        data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                        data-bg-opacity="1" data-animation="" data-delay="0">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper" style=" display: flex;flex-wrap: nowrap;flex-direction: row;align-items: center;">
                                                <div class="nectar-split-heading " data-align="default"
                                                    data-m-align="inherit" data-text-effect="default"
                                                    data-animation-type="default" data-animation-delay="0"
                                                    data-animation-offset="" data-m-rm-animation="" data-stagger=""
                                                    data-custom-font-size="false">
                                                    <div class="heading-line">
                                                        <div>
                                                            <h2>Cada ilustración es una historia, conoce la mía</h2>
                                                        </div>
                                                    </div>                                 
                                                </div>                                               
                                                <div id="fws_68d462ae6664a" data-midnight=""
                                                    data-column-margin="default"
                                                    class="wpb_row vc_row-fluid vc_row inner_row">
                                                    <div class="row-bg-wrap">
                                                        <div class="row-bg"></div>
                                                    </div>
                                                    <div class="row_col_wrap_12_inner col span_12  left">
                                                        <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding"
                                                            data-padding-pos="all" data-has-bg-color="false"
                                                            data-bg-color="" data-bg-opacity="1"
                                                            data-animation="fade-in-from-bottom" data-delay="0">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">

                                                                    <div class="nectar-3d-transparent-button"
                                                                         data-size="jumbo">
                                                                        <a href="/historia" role="button" class=""><span
                                                                                class="hidden-text">Aquí</span>
                                                                            <div class="inner-wrap">
                                                                                <div class="front-3d">
                                                                                    <svg>
                                                                                        <defs>
                                                                                            <mask>
                                                                                                <rect width="100%"
                                                                                                    height="100%"
                                                                                                    fill="#ffffff">
                                                                                                </rect>
                                                                                                <text
                                                                                                    class="mask-text button-text"
                                                                                                    fill="#000000"
                                                                                                    text-anchor="middle">Aquí</text>
                                                                                            </mask>
                                                                                        </defs>
                                                                                        <rect fill="#ffffff"
                                                                                            width="100%" height="100%">
                                                                                        </rect>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="back-3d">
                                                                                    <svg>
                                                                                        <rect stroke="#ffffff"
                                                                                            stroke-width="10"
                                                                                            fill="transparent"
                                                                                            width="100%" height="100%">
                                                                                        </rect>
                                                                                        <text class="button-text"
                                                                                            fill="#ffffff"
                                                                                            text-anchor="middle">Aquí</text>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/fullwidth-->

    <!--
<div class="sticky-container">
    <?php foreach ($eventTypesWithPosts as $eventType): ?>
        <div class="sticky-card" 
             style="background-image: url('/img/<?= h($eventType->featured_image) ?>');"
             onclick="window.location.href='/portafolio/<?= h($eventType->eventoslug) ?>'">
            
            <div class="card-header">
                <div class="category-pills">
                    <?php if (!empty($eventType->categories)): ?>
                        <?php foreach (array_slice($eventType->categories, 0, 3) as $category): ?>
                            <span class="pill"><?= h($category->name) ?></span>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                
                <div class="projects-count">
                    <?= $eventType->posts_count ?> proyectos
                </div>
            </div>
            
            <div class="card-content">
                <h2 class="card-title"><?= h($eventType->name) ?></h2>
                <button class="mobile-btn">Ver Trabajos</button>
            </div>
            
            <div></div>
        </div>
    <?php endforeach; ?>
</div>

<div class="view-cursor">VIEW</div>

-->





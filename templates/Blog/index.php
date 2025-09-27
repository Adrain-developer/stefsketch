<!-- ================================= -->
<!-- NUEVO HOME PORTFOLIO - templates/Blog/index.php -->
<!-- ================================= -->

<?php
$this->assign('title', 'Portafolio - Ilustraciones Digitales');
?>


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

        <!-- Grid de EventTypes -->
        <div id="fws_68d45a3a452d0" data-column-margin="default" data-midnight="dark"
            class="wpb_row vc_row-fluid vc_row full-width-section" style="padding-top: 0px; padding-bottom: 0px; ">
            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                <div class="inner-wrap row-bg-layer">
                    <div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000; "></div>
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
                                <div class="nectar-post-grid-filters" data-active-color="default" data-align="default"
                                    data-animation="none" data-sortable="">
                                    <div><a href="#" class="active all-filter" data-filter="-1"
                                            data-total-count="5">All</a><a href="#" data-filter="branding"
                                            data-total-count="1">Branding</a><a href="#" data-filter="photography"
                                            data-total-count="2">Photography</a><a href="#" data-filter="web-design"
                                            data-total-count="2">Web Design</a></div>
                                </div>

                                <!-- Nectar Post Grid - Clases exactas del diseño -->
                                <div class="nectar-post-grid custom_font_size_3vw font_size_max_54px font_size_tablet_5vw font_size_phone_34px text-opacity-1 text-opacity-hover-1 overlaid-aspect-ratio-image-size-1-1 layout-default_alt category-position-before-title category-button-color-rgba__10_10_10_0--2__"
                                    data-lazy-skip="3" data-indicator="" data-indicator-style="default"
                                    data-indicator-text-color="#fff" data-indicator-color="#000"
                                    data-indicator-text="View" data-masonry="yes" data-columns="2"
                                    data-hover-effect="zoom" data-text-style="default" data-border-radius="25px"
                                    data-grid-item-height="30vh" data-grid-spacing="10px" data-text-layout="corners"
                                    data-text-color="light" data-text-hover-color="light" data-shadow-hover=""
                                    data-animation="none" data-animation-stagger="90" data-cat-click="static"
                                    style="--post-grid-border-radius:25px;">

                                    <?php foreach ($eventTypesWithPosts as $eventType): ?>
                                    <!-- EventType Card - Estructura EXACTA del diseño -->
                                    <div class="nectar-post-grid-item" data-post-id="<?= $eventType->id ?>"
                                        data-has-img="true">
                                        <div class="inner">

                                            <!-- Background Image Wrap - Estructura EXACTA -->
                                            <div class="nectar-post-grid-item-bg-wrap">
                                                <div class="nectar-el-parallax-scroll" data-scroll-animation="true"
                                                    data-scroll-animation-mobile="true"
                                                    data-scroll-animation-intensity="-0.75"
                                                    data-scroll-animation-lerp="1">
                                                    <div class="nectar-post-grid-item-bg-wrap">
                                                        <div class="nectar-el-parallax-scroll"
                                                            data-scroll-animation="true"
                                                            data-scroll-animation-mobile="true"
                                                            data-scroll-animation-intensity="-0.75"
                                                            data-scroll-animation-lerp="1">
                                                            <div class="nectar-post-grid-item-bg-wrap-inner">
                                                                <div class="nectar-post-grid-item-bg">
                                                                    <img decoding="async" width="2048" height="2048"
                                                                        src="/img/<?= h($eventType->featured_image) ?>"
                                                                        class="nectar-post-grid-item-bg__media"
                                                                        alt="<?= h($eventType->name) ?>" srcset="/img/<?= h($eventType->featured_image) ?> 2048w, 
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

                                            <!-- Overlay - Estructura EXACTA -->
                                            <div class="bg-overlay" style="background-color: #0a0a0a;" data-opacity="0"
                                                data-hover-opacity="0.2">
                                            </div>

                                            <!-- Content - Estructura EXACTA -->
                                            <div class="content">

                                                <!-- Arrow Indicator - Clase EXACTA -->
                                                <span class="nectar-post-grid__arrow-indicator">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="60 58 140 140" height="200px" width="200px"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M198,64V168a6,6,0,0,1-12,0V78.48L68.24,196.24a6,6,0,0,1-8.48-8.48L177.52,70H88a6,6,0,0,1,0-12H192A6,6,0,0,1,198,64Z">
                                                        </path>
                                                    </svg>
                                                </span>

                                                <!-- Link Principal -->
                                                <a class="nectar-post-grid-link"
                                                    href="/portafolio/<?= h($eventType->eventoslug) ?>">
                                                    <span class="screen-reader-text"><?= h($eventType->name) ?></span>
                                                </a>

                                                <!-- Categorías - Estructura EXACTA -->
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

                                                <!-- Item Main - Estructura EXACTA -->
                                                <div class="item-main">
                                                    <h3 class="post-heading">
                                                        <span><?= h($eventType->name) ?></span>
                                                    </h3>
                                                    <span class="post-meta">
                                                        <span class="meta-date"><?= $eventType->posts_count ?>
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
                                                    </div>

                <div class="container-wrap" data-nav-pos="after_project_2" data-rm-header="false">
                    <div class="container main-content">
                        <div class="row  ">
                            <div class="post-area col span_12">
                                <div id="portfolio-extra">


                                    <div id="fws_68d462ae63b9c" data-column-margin="default" data-midnight="light"
                                        class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top"
                                        style="padding-top: 0px; padding-bottom: 0px; ">
                                        <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay=""
                                            data-bg-overlay="false">
                                            <div class="inner-wrap row-bg-layer">
                                                <div class="row-bg viewport-desktop using-bg-color"
                                                    style="background-color: #111111; ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row_col_wrap_12 col span_12 light left flip-in-vertical-wrap">
                                            <div class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding"
                                                data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                data-bg-opacity="1" data-animation="" data-delay="0">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="fws_68d462ae63da7" data-midnight=""
                                                            data-column-margin="default"
                                                            class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex vc_row-o-content-middle"
                                                            style="">
                                                            <div class="row-bg-wrap">
                                                                <div class="row-bg"></div>
                                                            </div>
                                                            <div
                                                                class="row_col_wrap_12_inner col span_12  left flip-in-vertical-wrap">
                                                                <div style=""
                                                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column has-animation padding-7-percent"
                                                                    data-using-bg="true" data-bg-cover="true"
                                                                    data-padding-pos="all" data-has-bg-color="false"
                                                                    data-bg-color="" data-bg-opacity="1"
                                                                    data-animation="flip-in-vertical" data-delay="0">
                                                                    <div class="vc_column-inner">
                                                                        <div class="column-image-bg-wrap column-bg-layer viewport-desktop"
                                                                            data-bg-pos="center center"
                                                                            data-bg-animation="none"
                                                                            data-bg-overlay="false">
                                                                            <div class="inner-wrap">
                                                                                <div class="column-image-bg" style=""
                                                                                    data-nectar-img-src="https://..com/salient/minimal-portfolio/wp-content/uploads/sites/15/2017/01/5.jpg">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wpb_wrapper">
                                                                            <div class="divider-wrap"
                                                                                data-alignment="default">
                                                                                <div style="height: 150px;"
                                                                                    class="divider">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div style=" color: #e2e2e2;"
                                                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column has-animation padding-7-percent"
                                                                    data-cfc="true" data-using-bg="true"
                                                                    data-padding-pos="all" data-has-bg-color="true"
                                                                    data-bg-color="#ffffff" data-bg-opacity="1"
                                                                    data-animation="flip-in-vertical" data-delay="100">
                                                                    <div class="vc_column-inner">
                                                                        <div class="column-bg-overlay-wrap column-bg-layer"
                                                                            data-bg-animation="none">
                                                                            <div class="column-bg-overlay"
                                                                                style="opacity: 1; background-color: #ffffff;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="wpb_wrapper">
                                                                            <div class="nectar_icon_wrap "
                                                                                data-style="default" data-padding="0px"
                                                                                data-color="black" style="">
                                                                                <div class="nectar_icon"><span
                                                                                        class="im-icon-wrap"
                                                                                        data-color="black"
                                                                                        style="height: 40px; width: 40px;"><span><svg
                                                                                                role="presentation"
                                                                                                version="1.1"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="40" height="40"
                                                                                                viewBox="0 0 32 32">
                                                                                                <path
                                                                                                    d="M24.804 24.533c-0.159 0-0.315-0.057-0.443-0.169-0.276-0.245-0.303-0.667-0.057-0.94 3.268-3.68 4.855-8.269 4.349-12.601-0.424-3.636-2.26-6.767-5.169-8.823-0.301-0.212-0.371-0.629-0.159-0.929s0.632-0.369 0.928-0.156c3.221 2.276 5.252 5.744 5.721 9.756 0.547 4.708-1.153 9.684-4.675 13.64-0.131 0.145-0.315 0.223-0.496 0.223zM12.724 31.211c-0.204 0-0.407-0.093-0.535-0.271-0.219-0.3-0.156-0.713 0.139-0.932 3.753-2.771 5.972-4.823 9.493-8.792 2.639-2.972 3.924-6.617 3.528-10.011-0.312-2.692-1.656-4.995-3.779-6.491-4.411-3.105-10.531-1.845-14.887 3.059-0.248 0.276-0.667 0.299-0.943 0.056-0.273-0.248-0.303-0.667-0.055-0.941 4.819-5.428 11.669-6.771 16.651-3.264 2.439 1.719 3.976 4.359 4.337 7.428 0.436 3.771-0.972 7.797-3.859 11.051-3.592 4.047-5.86 6.143-9.699 8.976-0.116 0.091-0.256 0.132-0.393 0.132zM13.989 25.997c-0.189 0-0.376-0.081-0.509-0.235-0.237-0.281-0.203-0.7 0.077-0.94 1.833-1.557 3.453-3.191 5.781-5.812 2.012-2.26 3-4.967 2.713-7.424-0.041-0.363 0.22-0.695 0.584-0.74 0.357-0.047 0.695 0.22 0.741 0.585 0.327 2.833-0.78 5.917-3.041 8.464-2.371 2.675-4.029 4.341-5.916 5.943-0.124 0.107-0.279 0.159-0.431 0.159zM2.592 15.979c-0.2 0-0.399-0.087-0.529-0.259-0.224-0.296-0.167-0.712 0.127-0.935 2.169-1.656 3.621-3.037 5.98-5.692 3.719-4.192 8.644-5.299 12.256-2.751 0.303 0.212 0.372 0.629 0.161 0.929-0.212 0.301-0.628 0.371-0.928 0.161-3.027-2.137-7.245-1.112-10.492 2.545-2.423 2.727-3.923 4.149-6.169 5.863-0.121 0.093-0.261 0.137-0.405 0.137zM7.417 26.857c-0.207 0-0.416-0.093-0.543-0.279-0.213-0.3-0.144-0.716 0.155-0.929 4.295-3.068 6.312-4.885 9.825-8.839 1.361-1.533 2.073-3.344 1.899-4.839-0.065-0.555-0.292-1.319-1.008-1.823-1.82-1.284-4.375 0.093-6.099 2.033-3.095 3.485-4.877 5.089-8.669 7.795-0.301 0.211-0.716 0.143-0.929-0.156-0.213-0.297-0.143-0.716 0.156-0.929 3.693-2.633 5.429-4.193 8.447-7.591 2.543-2.861 5.701-3.759 7.863-2.244 0.883 0.624 1.424 1.581 1.563 2.763 0.219 1.864-0.615 4.063-2.224 5.876-3.589 4.044-5.656 5.904-10.047 9.039-0.116 0.083-0.253 0.123-0.388 0.123zM4.896 23.961c-0.207 0-0.416-0.099-0.545-0.284-0.211-0.3-0.139-0.716 0.161-0.929 4.764-3.355 6.961-5.383 10.685-9.864 0.239-0.284 0.661-0.32 0.94-0.087 0.284 0.237 0.323 0.656 0.085 0.939-3.812 4.591-6.064 6.668-10.943 10.107-0.117 0.079-0.252 0.119-0.384 0.119z">
                                                                                                </path>
                                                                                            </svg></span></span></div>
                                                                            </div>
                                                                            <h4 style="font-size: 38px;color: #3f3f3f;line-height: 46px;text-align: left"
                                                                                class="vc_custom_heading vc_do_custom_heading vc_custom_1484779752863">
                                                                                Assembled Custom Just For You</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="fws_68d462ae6488f" data-midnight=""
                                                            data-column-margin="default"
                                                            class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex vc_row-o-content-middle"
                                                            style="">
                                                            <div class="row-bg-wrap">
                                                                <div class="row-bg"></div>
                                                            </div>
                                                            <div
                                                                class="row_col_wrap_12_inner col span_12  left flip-in-vertical-wrap">
                                                                <div style=""
                                                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column has-animation padding-7-percent"
                                                                    data-using-bg="true" data-padding-pos="all"
                                                                    data-has-bg-color="true" data-bg-color="#ff3a6f"
                                                                    data-bg-opacity="1"
                                                                    data-animation="flip-in-vertical" data-delay="0">
                                                                    <div class="vc_column-inner">
                                                                        <div class="column-bg-overlay-wrap column-bg-layer"
                                                                            data-bg-animation="none">
                                                                            <div class="column-bg-overlay"
                                                                                style="opacity: 1; background-color: #ff3a6f;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="wpb_wrapper">
                                                                            <div class="nectar_icon_wrap "
                                                                                data-style="default" data-padding="0px"
                                                                                data-color="white" style="">
                                                                                <div class="nectar_icon"><span
                                                                                        class="im-icon-wrap"
                                                                                        data-color="white"
                                                                                        style="height: 40px; width: 40px;"><span><svg
                                                                                                role="presentation"
                                                                                                version="1.1"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="40" height="40"
                                                                                                viewBox="0 0 32 32">
                                                                                                <path
                                                                                                    d="M27.667 23.229h-23.333c-2.389 0-4.333-1.943-4.333-4.333v-3.781c0-1.084 0.653-2.036 1.664-2.427l1.767-0.684 2.549-5.456c0.565-1.204 1.789-1.985 3.12-1.985h13.789c1.337 0 2.565 0.787 3.127 2l2.495 5.405 1.909 0.813c0.96 0.411 1.58 1.351 1.58 2.393v3.721c0 2.391-1.944 4.333-4.333 4.333zM9.1 5.896c-0.815 0-1.565 0.476-1.912 1.217l-2.663 5.696c-0.073 0.157-0.203 0.279-0.364 0.341l-2.016 0.779c-0.493 0.191-0.812 0.656-0.812 1.185v3.781c0 1.653 1.345 3 3 3h23.333c1.655 0 3-1.347 3-3v-3.721c0-0.509-0.303-0.969-0.771-1.167l-2.145-0.917c-0.151-0.065-0.273-0.187-0.344-0.333l-2.601-5.637c-0.344-0.747-1.095-1.227-1.916-1.227l-13.789 0.003zM16.028 15.341c-6.751 0-12.752-1.344-15.288-3.424-0.284-0.235-0.325-0.653-0.092-0.937 0.233-0.285 0.652-0.327 0.939-0.092 2.276 1.864 8.080 3.123 14.441 3.123 6.281 0 12.060-1.235 14.381-3.073 0.287-0.232 0.705-0.184 0.935 0.107 0.229 0.289 0.18 0.708-0.108 0.937-2.576 2.043-8.545 3.36-15.208 3.36zM5.249 19.979c-1.103 0-2-0.896-2-2 0-1.101 0.897-2 2-2s2 0.899 2 2c0 1.105-0.896 2-2 2zM5.249 17.312c-0.368 0-0.667 0.303-0.667 0.667 0 0.367 0.299 0.667 0.667 0.667s0.667-0.3 0.667-0.667c0-0.365-0.299-0.667-0.667-0.667zM26.584 19.979c-1.104 0-2-0.896-2-2 0-1.101 0.896-2 2-2 1.101 0 2 0.899 2 2 0 1.105-0.896 2-2 2zM26.584 17.312c-0.368 0-0.667 0.303-0.667 0.667 0 0.367 0.299 0.667 0.667 0.667 0.367 0 0.667-0.3 0.667-0.667 0-0.365-0.3-0.667-0.667-0.667zM6 27.437c-1.837 0-3.333-1.495-3.333-3.333v-2.208h1.333v2.208c0 1.101 0.897 2 2 2s2-0.899 2-2v-2.208h1.333v2.208c0 1.839-1.496 3.333-3.333 3.333zM26 27.437c-1.837 0-3.333-1.495-3.333-3.333v-2.208h1.333v2.208c0 1.101 0.897 2 2 2s2-0.899 2-2v-2.208h1.333v2.208c0 1.839-1.496 3.333-3.333 3.333zM21.333 19.229h-10.667c-0.368 0-0.667-0.3-0.667-0.667s0.299-0.667 0.667-0.667h10.667c0.367 0 0.667 0.3 0.667 0.667s-0.3 0.667-0.667 0.667zM8 9.287c-0.184 0-0.367-0.076-0.5-0.225-0.244-0.275-0.219-0.697 0.057-0.94l1.444-1.279c0.276-0.247 0.696-0.22 0.941 0.057 0.244 0.275 0.219 0.696-0.057 0.941l-1.444 1.279c-0.127 0.112-0.284 0.167-0.441 0.167zM8 11.841c-0.177 0-0.353-0.071-0.484-0.208-0.253-0.268-0.241-0.691 0.027-0.943l4.056-3.833c0.267-0.252 0.689-0.241 0.943 0.028 0.253 0.268 0.241 0.693-0.028 0.943l-4.056 3.833c-0.128 0.12-0.292 0.18-0.457 0.18z">
                                                                                                </path>
                                                                                            </svg></span></span></div>
                                                                            </div>
                                                                            <h4 style="font-size: 38px;color: #ffffff;line-height: 46px;text-align: left"
                                                                                class="vc_custom_heading vc_do_custom_heading vc_custom_1484778589853">
                                                                                Speed &amp; Beauty Combined</h4>
                                                                            <div class="divider-wrap"
                                                                                data-alignment="default">
                                                                                <div style="height: 100px;"
                                                                                    class="divider">
                                                                                </div>
                                                                            </div>
                                                                            <div class="nectar-cta " data-color=""
                                                                                data-using-bg="false"
                                                                                data-style="see-through"
                                                                                data-display="block"
                                                                                data-alignment="left"
                                                                                data-text-color="custom"
                                                                                style="--nectar-text-color: #ffffff; --nectar-icon-gap: 10px; ">
                                                                                <h5 style="color: #ffffff;"> <span
                                                                                        class="text">
                                                                                    </span><span class="link_wrap"><a
                                                                                            class="link_text"
                                                                                            role="button" href="#">Learn
                                                                                            More<span
                                                                                                class="arrow"></span></a></span>
                                                                                </h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div style=""
                                                                    class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column has-animation padding-7-percent"
                                                                    data-using-bg="true" data-bg-cover="true"
                                                                    data-padding-pos="all" data-has-bg-color="false"
                                                                    data-bg-color="" data-bg-opacity="1"
                                                                    data-animation="flip-in-vertical" data-delay="100">
                                                                    <div class="vc_column-inner">
                                                                        <div class="column-image-bg-wrap column-bg-layer viewport-desktop"
                                                                            data-bg-pos="center center"
                                                                            data-bg-animation="none"
                                                                            data-bg-overlay="false">
                                                                            <div class="inner-wrap">
                                                                                <div class="column-image-bg" style=""
                                                                                    data-nectar-img-src="https://..com/salient/minimal-portfolio/wp-content/uploads/sites/15/2017/01/1-1.jpg">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wpb_wrapper">
                                                                            <div class="divider-wrap"
                                                                                data-alignment="default">
                                                                                <div style="height: 150px;"
                                                                                    class="divider">
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

                                            <div style=""
                                                class="vc_col-sm-6 wpb_column column_container vc_column_container col has-animation padding-9-percent"
                                                data-using-bg="true" data-bg-cover="true" data-padding-pos="all"
                                                data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                                                data-animation="flip-in-vertical" data-delay="200">
                                                <div class="vc_column-inner">
                                                    <div class="column-image-bg-wrap column-bg-layer viewport-desktop"
                                                        data-bg-pos="center center" data-bg-animation="none"
                                                        data-bg-overlay="false">
                                                        <div class="inner-wrap">
                                                            <div class="column-image-bg" style=""
                                                                data-nectar-img-src="https://..com/salient/minimal-portfolio/wp-content/uploads/sites/15/2017/01/3-1.jpg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_wrapper">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="fws_68d462ae659bc" data-column-margin="default" data-midnight="light"
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
                                            <div class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding"
                                                data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                data-bg-opacity="1" data-animation="" data-delay="0">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="nectar-split-heading " data-align="default"
                                                            data-m-align="inherit" data-text-effect="default"
                                                            data-animation-type="default" data-animation-delay="0"
                                                            data-animation-offset="" data-m-rm-animation=""
                                                            data-stagger="" data-custom-font-size="false">
                                                            <div class="heading-line">
                                                                <div>
                                                                    <h2>We Successfully</h2>
                                                                </div>
                                                            </div>
                                                            <div class="heading-line">
                                                                <div>
                                                                    <h2>Have Redesigned</h2>
                                                                </div>
                                                            </div>
                                                            <div class="heading-line">
                                                                <div>
                                                                    <h2>The Wheel</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1484775560863"
                                                            style=" max-width: 500px; display: inline-block;">
                                                            <p>Far far away, behind the word mountains, far from the
                                                                countries Vokalia and Consonantia, there live the blind
                                                                texts. Separated they live in Bookmarksgrove right at
                                                                the
                                                                coast of the Semantics, a large language ocean.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding"
                                                data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                data-bg-opacity="1" data-animation="" data-delay="0">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                    data-nectar-img-src="webroot/img/stefsketch-1.jpg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row_col_wrap_12 col span_12 light left">
                                            <div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding"
                                                data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                data-bg-opacity="1" data-animation="" data-delay="0">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">

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
                                                    <div class="wpb_wrapper">
                                                        <div class="nectar-split-heading " data-align="default"
                                                            data-m-align="inherit" data-text-effect="default"
                                                            data-animation-type="default" data-animation-delay="0"
                                                            data-animation-offset="" data-m-rm-animation=""
                                                            data-stagger="" data-custom-font-size="false">
                                                            <div class="heading-line">
                                                                <div>
                                                                    <h2>The Future Is Now</h2>
                                                                </div>
                                                            </div>
                                                            <div class="heading-line">
                                                                <div>
                                                                    <h2>With Nectar Motors</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1484775567778">
                                                            <p>Far far away, behind the word mountains, far from the
                                                                countries Vokalia and Consonantia, there live the blind
                                                                texts. Separated they live in Bookmarksgrove right at
                                                                the
                                                                coast of the Semantics, a large language ocean.</p>
                                                        </div>

                                                        <div
                                                            class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1484775572510">
                                                            <p>A small river named Duden flows by their place and
                                                                supplies
                                                                it with the necessary regelialia. It is a paradisematic
                                                                country, in which roasted parts of sentences</p>
                                                        </div>

                                                        <div id="fws_68d462ae6664a" data-midnight=""
                                                            data-column-margin="default"
                                                            class="wpb_row vc_row-fluid vc_row inner_row" style="">
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
                                                                                style="margin-top: 40px; "
                                                                                data-size="jumbo">
                                                                                <a href="#" role="button" class=""><span
                                                                                        class="hidden-text">View
                                                                                        Configurator</span>
                                                                                    <div class="inner-wrap">
                                                                                        <div class="front-3d">
                                                                                            <svg>
                                                                                                <defs>
                                                                                                    <mask>
                                                                                                        <rect
                                                                                                            width="100%"
                                                                                                            height="100%"
                                                                                                            fill="#ffffff">
                                                                                                        </rect>
                                                                                                        <text
                                                                                                            class="mask-text button-text"
                                                                                                            fill="#000000"
                                                                                                            text-anchor="middle">View
                                                                                                            Configurator</text>
                                                                                                    </mask>
                                                                                                </defs>
                                                                                                <rect fill="#ffffff"
                                                                                                    width="100%"
                                                                                                    height="100%">
                                                                                                </rect>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="back-3d">
                                                                                            <svg>
                                                                                                <rect stroke="#ffffff"
                                                                                                    stroke-width="10"
                                                                                                    fill="transparent"
                                                                                                    width="100%"
                                                                                                    height="100%">
                                                                                                </rect>
                                                                                                <text
                                                                                                    class="button-text"
                                                                                                    fill="#ffffff"
                                                                                                    text-anchor="middle">View
                                                                                                    Configurator</text>
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

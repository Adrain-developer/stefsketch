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

    <?= $this->Html->css([
        'ui/build/estilos-cinta',
        'ui/build/single0583',
    ]) ?>

<style id='dynamic-css-inline-css' type='text/css'>
    .featured-media-under-header__featured-media:not([data-format="video"]):not([data-format="audio"]):not([data-has-img="false"]){padding-bottom:50%;}.featured-media-under-header__featured-media .post-featured-img img{position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;object-position:top;}.single.single-post .container-wrap{padding-top:0;}.main-content .featured-media-under-header{padding:min(6vw,90px) 0;}.featured-media-under-header__featured-media:not([data-has-img="false"]){margin-top:min(6vw,90px);}.featured-media-under-header__featured-media:not([data-format="video"]):not([data-format="audio"]):not([data-has-img="false"]){overflow:hidden;position:relative;}.featured-media-under-header__meta-wrap{display:flex;flex-wrap:wrap;align-items:center;}.featured-media-under-header__meta-wrap .meta-author{display:inline-flex;align-items:center;}.featured-media-under-header__meta-wrap .meta-author img{margin-right:8px;width:28px;border-radius:100px;}.featured-media-under-header__featured-media .post-featured-img{display:block;line-height:0;top:auto;bottom:0;}.featured-media-under-header__featured-media[data-n-parallax-bg="true"] .post-featured-img{height:calc(100% + 75px);}@media only screen and (max-width:690px){.featured-media-under-header__featured-media[data-n-parallax-bg="true"] .post-featured-img{height:calc(100% + 45px);}.featured-media-under-header__meta-wrap{font-size:14px;}}.featured-media-under-header__featured-media[data-align="center"] .post-featured-img img{object-position:center;}.featured-media-under-header__featured-media[data-align="bottom"] .post-featured-img img{object-position:bottom;}.featured-media-under-header h1{margin:max(min(0.35em,35px),20px) 0 max(min(0.25em,25px),15px) 0;}.featured-media-under-header__cat-wrap .meta-category a{line-height:1;padding:7px 15px;margin-right:15px;}.featured-media-under-header__cat-wrap .meta-category a:not(:hover){background-color:rgba(0,0,0,0.05);}.featured-media-under-header__cat-wrap .meta-category a:hover{color:#fff;}.featured-media-under-header__meta-wrap a,.featured-media-under-header__cat-wrap a{color:inherit;}.featured-media-under-header__meta-wrap > span:not(:first-child):not(.rich-snippet-hidden):before{content:"·";padding:0 .5em;}.featured-media-under-header__excerpt{margin:0 0 20px 0;}@media only screen and (min-width:691px){[data-animate="fade_in"] .featured-media-under-header__cat-wrap,[data-animate="fade_in"].featured-media-under-header .entry-title,[data-animate="fade_in"] .featured-media-under-header__meta-wrap,[data-animate="fade_in"] .featured-media-under-header__featured-media,[data-animate="fade_in"] .featured-media-under-header__excerpt,[data-animate="fade_in"].featured-media-under-header + .row .content-inner{opacity:0;transform:translateY(50px);animation:nectar_featured_media_load 1s cubic-bezier(0.25,1,0.5,1) forwards;}[data-animate="fade_in"].featured-media-under-header + .row .content-inner:has(.nectar-scrolling-tabs){transform:translateY(0px);animation:nectar_featured_media_load_simple 1s cubic-bezier(0.25,1,0.5,1) forwards;}[data-animate="fade_in"] .featured-media-under-header__cat-wrap{animation-delay:0.1s;}[data-animate="fade_in"].featured-media-under-header .entry-title{animation-delay:0.2s;}[data-animate="fade_in"] .featured-media-under-header__excerpt{animation-delay:0.3s;}[data-animate="fade_in"] .featured-media-under-header__meta-wrap{animation-delay:0.3s;}[data-animate="fade_in"] .featured-media-under-header__featured-media{animation-delay:0.4s;}[data-animate="fade_in"].featured-media-under-header + .row .content-inner{animation-delay:0.5s;}}@keyframes nectar_featured_media_load{0%{transform:translateY(50px);opacity:0;}100%{transform:translateY(0px);opacity:1;}}@keyframes nectar_featured_media_load_simple{0%{opacity:0;}100%{opacity:1;}}.featured-media-under-header__content{display:flex;flex-direction:column;align-items:center;text-align:center;max-width:1000px;margin:0 auto;}@media only screen and (min-width:691px){.featured-media-under-header__excerpt{max-width:75%;}}.featured-media-under-header__meta-wrap .meta-author img{margin-right:15px;width:50px;}.featured-media-under-header__meta-wrap .meta-author > span{text-align:left;line-height:1.5;}.featured-media-under-header__meta-wrap .meta-author > span span:not(.rich-snippet-hidden){display:block;}.featured-media-under-header__meta-wrap .meta-date,.featured-media-under-header__meta-wrap .meta-reading-time{font-size:.85em;}#header-space{background-color:#000000}@media only screen and (min-width:1000px){body #ajax-content-wrap.no-scroll{min-height:calc(100vh - 100px);height:calc(100vh - 100px)!important;}}@media only screen and (min-width:1000px){#page-header-wrap.fullscreen-header,#page-header-wrap.fullscreen-header #page-header-bg,html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header,.nectar_fullscreen_zoom_recent_projects,#nectar_fullscreen_rows:not(.afterLoaded) > div{height:calc(100vh - 99px);}.wpb_row.vc_row-o-full-height.top-level,.wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 99px);}html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header{top:100px;}.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container{height:calc(100vh - 98px)!important;}.admin-bar .nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.admin-bar .nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container{height:calc(100vh - 98px - 32px)!important;}}.admin-bar[class*="page-template-template-no-header"] .wpb_row.vc_row-o-full-height.top-level,.admin-bar[class*="page-template-template-no-header"] .wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 32px);}body[class*="page-template-template-no-header"] .wpb_row.vc_row-o-full-height.top-level,body[class*="page-template-template-no-header"] .wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:100vh;}@media only screen and (max-width:999px){.using-mobile-browser #nectar_fullscreen_rows:not(.afterLoaded):not([data-mobile-disable="on"]) > div{height:calc(100vh - 100px);}.using-mobile-browser .wpb_row.vc_row-o-full-height.top-level,.using-mobile-browser .wpb_row.vc_row-o-full-height.top-level > .col.span_12,[data-permanent-transparent="1"].using-mobile-browser .wpb_row.vc_row-o-full-height.top-level,[data-permanent-transparent="1"].using-mobile-browser .wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 100px);}html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header,.nectar_fullscreen_zoom_recent_projects,.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container,#nectar_fullscreen_rows:not(.afterLoaded):not([data-mobile-disable="on"]) > div{height:calc(100vh - 47px);}.wpb_row.vc_row-o-full-height.top-level,.wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 47px);}body[data-transparent-header="false"] #ajax-content-wrap.no-scroll{min-height:calc(100vh - 47px);height:calc(100vh - 47px);}}@media only screen and (min-width:1000px){#header-outer .column-margin-4pct.wpb_row > .span_12,#ajax-content-wrap .column-margin-4pct.wpb_row > .span_12,#ajax-content-wrap .column-margin-4pct.wpb_row .full-page-inner > .container > .span_12,#ajax-content-wrap .column-margin-4pct.wpb_row .full-page-inner > .span_12{margin-left:calc(4%/-2);margin-right:calc(4%/-2);}#header-outer .column-margin-4pct .wpb_column:not(.child_column),#header-outer .column-margin-4pct.inner_row > div > .child_column,#ajax-content-wrap .column-margin-4pct .wpb_column:not(.child_column),#ajax-content-wrap .column-margin-4pct.inner_row > div > .child_column{padding-left:calc(4%/2);padding-right:calc(4%/2);}}.wpb_column.el_spacing_30px > .vc_column-inner > .wpb_wrapper > div:not(:last-child),.wpb_column.el_spacing_30px > .n-sticky > .vc_column-inner > .wpb_wrapper > div:not(:last-child){margin-bottom:30px;}@media only screen and (min-width:1000px){html body{overflow:visible;}.vc_row:not(.vc_row-o-equal-height) .nectar-sticky-column-css.vc_column_container > .n-sticky{height:100%;}.nectar-sticky-column-css.vc_column_container > .n-sticky{width:100%;}.nectar-sticky-column-css.vc_column_container > .n-sticky > .vc_column-inner{position:sticky;top:var(--nectar-sticky-top-distance);}}.wpb_column.el_spacing_20px > .vc_column-inner > .wpb_wrapper > div:not(:last-child),.wpb_column.el_spacing_20px > .n-sticky > .vc_column-inner > .wpb_wrapper > div:not(:last-child){margin-bottom:20px;}.wpb_column.child_column.el_spacing_5px > .vc_column-inner > .wpb_wrapper > div:not(:last-child),.wpb_column.child_column.el_spacing_5px > .n-sticky > .vc_column-inner > .wpb_wrapper > div:not(:last-child){margin-bottom:5px;}.wpb_column.child_column.el_spacing_10px > .vc_column-inner > .wpb_wrapper > div:not(:last-child),.wpb_column.child_column.el_spacing_10px > .n-sticky > .vc_column-inner > .wpb_wrapper > div:not(:last-child){margin-bottom:10px;}.img-with-aniamtion-wrap[data-border-radius="20px"] .img-with-animation,.img-with-aniamtion-wrap[data-border-radius="20px"] .inner,.img-with-aniamtion-wrap[data-border-radius="20px"] .hover-wrap{border-radius:20px;}.img-with-aniamtion-wrap[data-border-radius="20px"]{--nectar-radius:20px;}.nectar-meta-category-el{display:flex;flex-wrap:wrap;gap:10px;}.nectar-meta-category-el a{color:inherit;position:relative;}@media only screen,print{.nectar-meta-category-el.alignment_left_desktop{justify-content:flex-start;}}.nectar-meta-category-el.style-default > a:before{height:1px;width:100%;background-color:currentColor;content:"";position:absolute;bottom:0;left:0;transform:scaleX(0);transition:transform 0.4s ease;transform-origin:right;}.nectar-meta-category-el.style-default > a:hover:before{transform:scaleX(1);transform-origin:left;}#ajax-content-wrap .nectar-responsive-text *,body .nectar-responsive-text *{margin-bottom:0;color:inherit;}#ajax-content-wrap .nectar-responsive-text[class*="font_size"] *,body .nectar-responsive-text[class*="font_size"] *{font-size:inherit;line-height:inherit;}.nectar-responsive-text.nectar-link-underline-effect a{text-decoration:none;}.nectar-responsive-text[data-inherit-heading-family] > *{font-family:inherit;font-weight:inherit;font-size:inherit;line-height:inherit;text-transform:inherit;letter-spacing:inherit;}@media only screen,print{body #ajax-content-wrap .font_size_desktop_3vw.font_size_max_54px.nectar-responsive-text,body .font_size_desktop_3vw.font_size_max_54px.nectar-responsive-text{font-size:min(54px,3vw);}}@media only screen,print{body #ajax-content-wrap .font_size_desktop_3vw.font_size_max_54px.nectar-responsive-text,body .font_size_desktop_3vw.font_size_max_54px.nectar-responsive-text,body #header-outer .font_size_desktop_3vw.font_size_max_54px.nectar-responsive-text{font-size:min(54px,3vw);}}@media only screen and (max-width:999px){body #ajax-content-wrap .font_size_tablet_5vw.font_size_max_54px.nectar-responsive-text,body .font_size_tablet_5vw.font_size_max_54px.nectar-responsive-text{font-size:min(54px,5vw);}}@media only screen and (max-width:999px){body #ajax-content-wrap .container-wrap .font_size_tablet_5vw.font_size_max_54px.nectar-responsive-text,body .container-wrap .font_size_tablet_5vw.font_size_max_54px.nectar-responsive-text,body #header-outer .font_size_tablet_5vw.font_size_max_54px.nectar-responsive-text{font-size:min(54px,5vw);}}@media only screen and (max-width:690px){html body #ajax-content-wrap .font_size_phone_34px.font_size_max_54px.nectar-responsive-text,html body .font_size_phone_34px.font_size_max_54px.nectar-responsive-text{font-size:min(54px,34px);}}@media only screen and (max-width:690px){html body #ajax-content-wrap .container-wrap .font_size_phone_34px.font_size_max_54px.nectar-responsive-text,html body .container-wrap .font_size_phone_34px.font_size_max_54px.nectar-responsive-text,html body #header-outer .font_size_phone_34px.font_size_max_54px.nectar-responsive-text{font-size:min(54px,34px);}}#ajax-content-wrap .font_line_height_1-1.nectar-responsive-text,body .font_line_height_1-1.nectar-responsive-text{line-height:1.1;}#ajax-content-wrap .font_line_height_1-2.nectar-responsive-text,body .font_line_height_1-2.nectar-responsive-text{line-height:1.2;}@media only screen and (max-width:999px){.nectar-meta-category-el.alignment_default_tablet{justify-content:flex-start;}}@media only screen and (max-width:999px){#ajax-content-wrap .column-margin-4pct.wpb_row > .span_12:has( > [class*="vc_col-xs"]:not(.vc_col-xs-12)){margin-left:calc(4%/-2);margin-right:calc(4%/-2);}#ajax-content-wrap .column-margin-4pct .wpb_column[class*="vc_col-xs"]:not(.vc_col-xs-12):not(.child_column),#ajax-content-wrap .column-margin-4pct.inner_row > div > .child_column[class*="vc_col-xs"]:not(.vc_col-xs-12){padding-left:calc(4%/2);padding-right:calc(4%/2);}}@media only screen and (max-width:999px) and (min-width:691px){#ajax-content-wrap .column-margin-4pct.wpb_row > .span_12:has(> [data-t-w-inherits="small_desktop"]){margin-left:calc(4%/-2);margin-right:calc(4%/-2);}#ajax-content-wrap .column-margin-4pct.wpb_row > .span_12:has(> [data-t-w-inherits="small_desktop"]) > .wpb_column{padding-left:calc(4%/2);padding-right:calc(4%/2);}}@media only screen and (max-width:999px){.nectar-sticky-column-css.vc_column_container > .n-sticky:not(.nectar-sticky-column-wrap--mobile) > .vc_column-inner{position:relative;}}@media only screen and (max-width:690px){.nectar-meta-category-el.alignment_default_phone{justify-content:flex-start;}}@media only screen and (max-width:690px){body .vc_row.top_padding_phone_10px{padding-top:10px!important;}}.screen-reader-text,.nectar-skip-to-content:not(:focus){border:0;clip:rect(1px,1px,1px,1px);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute!important;width:1px;word-wrap:normal!important;}.row .col img:not([srcset]){width:auto;}.row .col img.img-with-animation.nectar-lazy:not([srcset]){width:100%;}

    .nectar-post-grid .nectar-post-grid-item .nectar-post-grid-item-bg, .nectar-post-grid[data-hover-effect=slow_zoom] .nectar-post-grid-item:hover .nectar-post-grid-item-bg, .nectar-post-grid[data-hover-effect=zoom] .nectar-post-grid-item:hover .nectar-post-grid-item-bg {
        opacity: 0.6 !important;
    }

    @media only screen and (max-width: 690px) {
    body .vc_row.top_padding_phone_10px
 {
        padding-top: 78px !important;
    }
}

</style>


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

                                    </div>
                                </div>

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
                                                        <?php if (!empty($bodyHtml)): ?>
                                                            <?= $bodyHtml ?>
                                                        <?php else: ?>
                                                            <p>Sin descripción disponible.</p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

<!-- ========== NAVEGACIÓN PREVIOUS / NEXT ========== -->
<?php if (isset($prevPost) || isset($nextPost)): ?>
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


<div id="fws_68d46b1958e71" data-column-margin="custom" data-midnight="light" data-top-percent="8%"
  data-bottom-percent="8%" class="wpb_row vc_row-fluid vc_row full-width-section  column-margin-7pct"
  style="padding-top: calc(100vw * 0.08); padding-bottom: calc(100vw * 0.08); ">
  <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
    <div class="inner-wrap row-bg-layer">
      <div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000; "></div>
    </div>
  </div>
  <div class="row_col_wrap_12 col span_12 light left">
    <div
      class="vc_col-sm-4 wpb_column column_container vc_column_container col nectar-sticky-column-css no-extra-padding inherit_tablet inherit_phone "
      data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation=""
      data-delay="0">
      <div class="n-sticky">
        <div class="vc_column-inner">
          <div class="wpb_wrapper">
            <div
              class="nectar-responsive-text font_size_max_90px font_size_desktop_5vw font_size_tablet_7vw font_line_height_1px nectar-link-underline-effect">
              <h3>Proyectos</h3>
            </div>
            <div class="nectar-responsive-text nectar-link-underline-effect" style="color: rgba(255,255,255,0.6);">
              <p>Colores brillantes, elementos de la naturaleza y retratos femeninos. Disfruto experimentar con distintos medios, desde lo tradicional como acuarelas o pintura acrílica hasta ilustraciones digitales.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="vc_col-sm-8 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone "
    data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation=""
    data-delay="0">
    <div class="vc_column-inner">
        <div class="wpb_wrapper">
            <?php foreach ($allEventTypes as $eventType): ?>
            <div id="fws_68d46b19595e0" data-midnight="" data-column-margin="custom"
                class="wpb_row vc_row-fluid vc_row inner_row  column-margin-7pct" style="">
                <div class="row-bg-wrap">
                    <div class="row-bg"></div>
                </div>
                <div class="row_col_wrap_12_inner col span_12  left">
                    <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding el_spacing_5px inherit_tablet inherit_phone "
                        data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                        data-animation="slight-fade-in-from-bottom" data-delay="0">
                        <div
                            class="nectar-hor-list-item   has_border_animation nectar-waypoint-el border_color_424242 multiple-columns ">
                            
                            <!-- 1. IMÁGENES DE LOS POSTS (top-right) -->
                            <div class="project-images">
                                <?php if (isset($eventType->recent_posts) && !empty($eventType->recent_posts)): ?>
                                    <?php foreach (array_slice($eventType->recent_posts, 0, 4) as $post): ?>
                                        <?php if (!empty($post->banner)): ?>
                                            <div class="project-image">
                                                <img src="/img/<?= h($post->banner) ?>" 
                                                     alt="<?= h($post->title) ?>" 
                                                     loading="lazy">
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php elseif (!empty($eventType->featured_image)): ?>
                                    <!-- Fallback: usar featured_image si no hay recent_posts -->
                                    <div class="project-image">
                                        <img src="/img/<?= h($eventType->featured_image) ?>" 
                                             alt="<?= h($eventType->name) ?>" 
                                             loading="lazy">
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="nectar-responsive-text nectar-link-underline-effect"
                                        style="color: rgba(255,255,255,0.6);">
                                        <h6><?= $eventType->posts_count ?> proyectos</h6>
                                    </div>
                                    <div class="nectar-responsive-text nectar-link-underline-effect">
                                        <h4><?= h($eventType->name) ?></h4>
                                    </div>
                                    <div class="nectar-responsive-text nectar-link-underline-effect">
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- 2. BOTÓN VER PROYECTO (bottom-right) -->
                            <a href="/portafolio/<?= h($eventType->eventoslug) ?>" class="project-button">
                                Ver Proyecto
                            </a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
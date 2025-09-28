<?php
$this->loadHelper('Time');

$this->assign('title', h($eventType->name) . ' - Portafolio');
?>


<?php
function formatNumberShort($n) {
    if ($n >= 1000000) return round($n / 1000000, 1) . 'M';
    if ($n >= 1000) return round($n / 1000, 1) . 'k';
    return $n;
}
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

<style>
/* CSS del template Nectar - CRÍTICO para sticky y espaciado */
@media only screen and (min-width:1000px){
    html body{overflow:visible;}
    .vc_row:not(.vc_row-o-equal-height) .nectar-sticky-column-css.vc_column_container > .n-sticky{height:100%;}
    .nectar-sticky-column-css.vc_column_container > .n-sticky{width:100%;}
    .nectar-sticky-column-css.vc_column_container > .n-sticky > .vc_column-inner{
        position:sticky;
        top:var(--nectar-sticky-top-distance);
    }
}

.wpb_column.el_spacing_30px > .vc_column-inner > .wpb_wrapper > div:not(:last-child),
.wpb_column.el_spacing_30px > .n-sticky > .vc_column-inner > .wpb_wrapper > div:not(:last-child){
    margin-bottom:30px;
}

.wpb_column.el_spacing_20px > .vc_column-inner > .wpb_wrapper > div:not(:last-child),
.wpb_column.el_spacing_20px > .n-sticky > .vc_column-inner > .wpb_wrapper > div:not(:last-child){
    margin-bottom:20px;
}

@media only screen and (max-width:999px){
    .nectar-sticky-column-css.vc_column_container > .n-sticky:not(.nectar-sticky-column-wrap--mobile) > .vc_column-inner{
        position:relative;
    }
}

/* Estilos para Grid de Posts Nectar - Eliminados (ya vienen del template) */

/* Enlaces de filtro */
.filter-link {
    color: #fff;
    text-decoration: none;
    padding: 8px 0;
    display: block;
    transition: opacity 0.3s;
}

.filter-link:hover {
    opacity: 0.7;
}

.filter-link.active {
    font-weight: bold;
    opacity: 1;
}
</style>



<div class="container-wrap" data-nav-pos="none" data-rm-header="true">
    <div class="container main-content">
        <div class="">

<!-- Container Principal -->
<div class="">
    <div id="portfolio-extra">
        
        <!-- Row Principal -->
        <div id="fws_68d461f0f07aa" 
             data-column-margin="custom" 
             data-midnight="light"
             class="wpb_row vc_row-fluid vc_row full-width-section column-margin-4pct top_padding_phone_10px"
             style="padding-top: 140px; padding-bottom: 80px;">
            
            <!-- Background Layer -->
            <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay="" data-bg-overlay="false">
                <div class="inner-wrap row-bg-layer">
                    <div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000;"></div>
                </div>
            </div>

            <!-- Contenedor de Columnas -->
            <div class="row_col_wrap_12 col span_12 light left">
                
                <!-- ========== COLUMNA IZQUIERDA (STICKY) - FILTROS ========== -->
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
                                
                                <!-- 1. TÍTULO DEL EVENTTYPE -->
                                <div class="nectar-responsive-text font_size_max_54px font_size_desktop_3vw font_size_tablet_5vw font_size_phone_34px font_line_height_1-1 nectar-link-underline-effect">
                                    <h3><?= h($eventType->name) ?></h3>
                                    <p style="font-size: 16px; opacity: 0.7; margin-top: 10px;">
                                        <?= count($posts) ?> proyecto<?= count($posts) != 1 ? 's' : '' ?> disponible<?= count($posts) != 1 ? 's' : '' ?>
                                    </p>
                                </div>

                                <!-- 2. FILTROS POR CATEGORÍA -->
                                <?php if (!empty($blogCategories)): ?>
                                <div id="fws_categories_filter" 
                                     data-midnight="" 
                                     data-column-margin="default"
                                     class="wpb_row vc_row-fluid vc_row inner_row">
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
                                                        <h5>CATEGORÍAS</h5>
                                                    </div>
                                                    <div class="nectar-responsive-text nectar-link-underline-effect" style="margin-top: 15px;">
                                                        <a href="/portafolio/<?= h($eventType->eventoslug) ?>" 
                                                           class="filter-link <?= empty($categorySlug) && empty($tagSlug) ? 'active' : '' ?>">
                                                            Todas (<?= count($posts) ?>)
                                                        </a>
                                                        <?php foreach ($blogCategories as $cat): ?>
                                                            <a href="/portafolio/<?= h($eventType->eventoslug) ?>/temas/<?= h($cat->slug) ?>" 
                                                               class="filter-link <?= ($categorySlug === $cat->slug) ? 'active' : '' ?>">
                                                                <?= h($cat->name) ?> (<?= $cat->count ?? 0 ?>)
                                                            </a>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <!-- 3. FILTROS POR TAGS/TÉCNICAS -->
                                <?php if (!empty($blogTags)): ?>
                                <div id="fws_tags_filter" 
                                     data-midnight="" 
                                     data-column-margin="default"
                                     class="wpb_row vc_row-fluid vc_row inner_row">
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
                                                    <div class="nectar-responsive-text nectar-link-underline-effect" style="margin-top: 15px;">
                                                        <?php $tagCount = 0; ?>
                                                        <?php foreach ($blogTags as $tag): ?>
                                                            <?php if ($tagCount < 10): // Mostrar máximo 10 tags ?>
                                                                <a href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas/<?= h($tag->slug) ?>" 
                                                                   class="filter-link <?= ($tagSlug === $tag->slug) ? 'active' : '' ?>">
                                                                    #<?= h($tag->name) ?> (<?= $tag->count ?>)
                                                                </a>
                                                                <?php $tagCount++; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        
                                                        <?php if (count($blogTags) > 10): ?>
                                                            <a href="/portafolio/<?= h($eventType->eventoslug) ?>/etiquetas" 
                                                               class="filter-link" 
                                                               style="font-style: italic; opacity: 0.8;">
                                                                Ver todas las técnicas →
                                                            </a>
                                                        <?php endif; ?>
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

                <!-- ========== COLUMNA DERECHA - GRID DE POSTS ========== -->
                <div class="vc_col-sm-8 wpb_column column_container vc_column_container col has-animation no-extra-padding el_spacing_20px inherit_tablet inherit_phone"
                     data-padding-pos="all" 
                     data-has-bg-color="false" 
                     data-bg-color="" 
                     data-bg-opacity="1"
                     data-animation="fade-in" 
                     data-delay="150">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            
                            <?php if (!empty($posts)): ?>
                            <!-- Grid de Posts Nectar - Estructura EXACTA del view -->
                            <div class='nectar-post-grid-wrap text-color-light spacing-10px'
                                data-el-settings='{"post_type":"portfolio","pagination":"none","image_size":"large","parallax_scrolling":"yes","aspect_ratio_image_size":"","category_position":"default","category_display":"parent_only","display_categories":"yes","display_excerpt":"0","excerpt_length":"20","display_date":"0","display_estimated_reading_time":"0","display_author":"0","author_functionality":"default","author_position":"default","color_overlay":"#000000","color_overlay_opacity":"0.1","color_overlay_hover_opacity":"0.2","card_bg_color":"","grid_style":"content_overlaid","hover_effect":"zoom","post_title_overlay":"","heading_tag":"default","heading_tag_render":"default","enable_gallery_lightbox":"0","category_style":"button","overlay_secondary_project_image":"","vertical_list_hover_effect":"none","vertical_list_read_more":"","vertical_list_read_more_style":"text","read_more_button":"0","animation":"none","custom_fields":"","custom_fields_location":"before_post_meta","display_type":"grid","text_content_layout":"corners"}'
                                data-style='content_overlaid'
                                data-query='{"post_type":"portfolio","posts_per_page":"12","order":"DESC","orderby":"date","offset":"0","cpt_name":"post","custom_query_tax":"","ignore_sticky_posts":"","exclude_current_post":""}'
                                data-load-more-color='black' data-load-more-text='Load More'>
                               
                                <div class="nectar-post-grid custom_font_size_3vw font_size_max_54px font_size_tablet_5vw font_size_phone_34px text-opacity-1 text-opacity-hover-1 overlaid-aspect-ratio-image-size-1-1 category-position-before-title category-button-color-rgba__10_10_10_0--2__ "
                                    data-indicator="" data-indicator-style="default"
                                    data-indicator-text-color="#fff" data-indicator-color="#000"
                                    data-indicator-text="View" data-columns="2" data-hover-effect="zoom"
                                    data-text-style="default" data-border-radius="25px"
                                    data-grid-item-height="30vh" data-grid-spacing="10px"
                                    data-text-layout="corners" data-text-color="light"
                                    data-text-hover-color="light" data-shadow-hover="" data-animation="none"
                                    data-animation-stagger="90" data-cat-click="static"
                                    style="--post-grid-border-radius:25px;">

                                    <?php foreach ($posts as $post): ?>
                                    <!-- Post Card -->
                                    <div class="nectar-post-grid-item" data-post-id="<?= $post->id ?>"
                                        data-has-img="true">
                                        <div class="inner">
                                            <div class="nectar-post-grid-item-bg-wrap">
                                                <div class="nectar-el-parallax-scroll"
                                                    data-scroll-animation="true"
                                                    data-scroll-animation-mobile="true"
                                                    data-scroll-animation-intensity="-0.75"
                                                    data-scroll-animation-lerp="1">
                                                    <div class="nectar-post-grid-item-bg-wrap-inner">
                                                        <div class="nectar-post-grid-item-bg">
                                                            <img decoding="async" width="2048"
                                                                height="2048"
                                                                src="/img/<?= h($post->banner) ?>"
                                                                class="nectar-post-grid-item-bg__media"
                                                                alt="<?= h($post->title) ?>"
                                                                loading="lazy" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
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
                                                <a class="nectar-post-grid-link"
                                                    href="/portafolio/<?= h($eventType->eventoslug) ?>/<?= h($post->slug) ?>">
                                                    <span class="screen-reader-text"><?= h($post->title) ?></span>
                                                </a>
                                                <span class="meta-category">
                                                    <a class="style-button"
                                                        href="/portafolio/<?= h($eventType->eventoslug) ?>/temas/<?= h($post->blog_category->slug ?? '#') ?>">
                                                        <?= h($post->blog_category->name ?? 'Sin categoría') ?>
                                                    </a>
                                                </span>
                                                <div class="item-main">
                                                    <h3 class="post-heading">
                                                        <span><?= h($post->title) ?></span>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Paginación -->
                            <?php if ($this->Paginator->total() > 1): ?>
                            <div style="margin-top: 40px; text-align: center;">
                                <div class="pagination-wrapper">
                                    <?= $this->Paginator->first('« Primera', ['class' => 'filter-link']) ?>
                                    <?= $this->Paginator->prev('← Anterior', ['class' => 'filter-link']) ?>
                                    <?= $this->Paginator->numbers(['class' => 'filter-link']) ?>
                                    <?= $this->Paginator->next('Siguiente →', ['class' => 'filter-link']) ?>
                                    <?= $this->Paginator->last('Última »', ['class' => 'filter-link']) ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php else: ?>
                            <!-- Mensaje cuando no hay posts -->
                            <div style="text-align: center; padding: 60px 20px; color: rgba(255,255,255,0.6);">
                                <h3>No hay proyectos disponibles</h3>
                                <p>Prueba con otro filtro o categoría</p>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <!-- FIN COLUMNA DERECHA -->

            </div>
        </div>
        <!-- FIN ROW PRINCIPAL -->

    </div>
</div>
<!-- FIN CONTAINER PRINCIPAL -->

        </div>
    </div>
</div>
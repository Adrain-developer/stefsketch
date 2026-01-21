<?php
use League\CommonMark\CommonMarkConverter;
use Cake\ORM\TableRegistry;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Routing\Router;


/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
$url = $_SERVER['REQUEST_URI'];
$cakeDescription = 'Stefsketch';
?>

<?php
$postsTable = TableRegistry::getTableLocator()->get('BlogPosts');
$eventsTable = TableRegistry::getTableLocator()->get('EventTypes');
// Cargar las notificaciones no leídas del usuario actual
$user = $this->request->getAttribute('identity');
$notifications = [];
if ($user) {
    $notificationsTable = TableRegistry::getTableLocator()->get('Notifications');
    $notifications = $notificationsTable->find()
        ->where(['user_id' => $user->id, 'is_read' => false])
        ->order(['created' => 'DESC'])
        ->limit(10)
        ->toArray();
}
?>

<!DOCTYPE html>
<html lang="es" class="no-js">

<head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')) ?>

    <?= $this->fetch('meta') ?>


    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <style>
    img:is([sizes="auto"i], [sizes^="auto,"i]) {
        contain-intrinsic-size: 3000px 1500px
    }
    </style>

    <?= $this->Html->meta('icon', '.png', ['type'=>'image/png']) ?>

    <?= $this->Html->meta('og:type', 'portafolio'); ?>
    <?= $this->Html->meta('og:site_name', 'Stefsketch'); ?>

    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    

    <?= $this->Html->css([
        'ui/build/global-styles-inline-css',
        'ui/build/bannerparallax',
        'ui/build/js_composer.css?ver=17.9.962',
        'ui/build/grid-system0583',
        'ui/build/style0583',
        'ui/build/main-styles-inline-css',
        'ui/build/header/header-perma-transparent0583',
        'ui/build/elements/element-scrolling-text0583',
        'ui/build/elements/element-post-grid0583',
        'ui/build/responsive0583',
        'ui/build/skin-material0583',
        'ui/build/menu-dynamic030a',
        'ui/build/plugins/js_composer0583',
        'ui/salient-dynamic-styles-multi-id-430cde',
        'ui/build/dynamic-css-inline-css',
        'ui/style0583',
        'ui/build/footer-style',
        'ui/build/style-non-critical0583',
        'ui/build/plugins/jquery.fancybox3d36',
        'ui/build/plugins/lenis0583',
        'ui/build/off-canvas/core0583',
        'ui/build/off-canvas/fullscreen-legacy0583',
    ]) ?>

    <style id='dynamic-css-inline-css' type='text/css'>
        #header-space{background-color:#000000}@media only screen and (min-width:1000px){body #ajax-content-wrap.no-scroll{min-height:calc(100vh - 100px);height:calc(100vh - 100px)!important;}}@media only screen and (min-width:1000px){#page-header-wrap.fullscreen-header,#page-header-wrap.fullscreen-header #page-header-bg,html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header,.nectar_fullscreen_zoom_recent_projects,#nectar_fullscreen_rows:not(.afterLoaded) > div{height:calc(100vh - 99px);}.wpb_row.vc_row-o-full-height.top-level,.wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 99px);}html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header{top:100px;}.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container{height:calc(100vh - 98px)!important;}.admin-bar .nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.admin-bar .nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container{height:calc(100vh - 98px - 32px)!important;}}.admin-bar[class*="page-template-template-no-header"] .wpb_row.vc_row-o-full-height.top-level,.admin-bar[class*="page-template-template-no-header"] .wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 32px);}body[class*="page-template-template-no-header"] .wpb_row.vc_row-o-full-height.top-level,body[class*="page-template-template-no-header"] .wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:100vh;}@media only screen and (max-width:999px){.using-mobile-browser #nectar_fullscreen_rows:not(.afterLoaded):not([data-mobile-disable="on"]) > div{height:calc(100vh - 100px);}.using-mobile-browser .wpb_row.vc_row-o-full-height.top-level,.using-mobile-browser .wpb_row.vc_row-o-full-height.top-level > .col.span_12,[data-permanent-transparent="1"].using-mobile-browser .wpb_row.vc_row-o-full-height.top-level,[data-permanent-transparent="1"].using-mobile-browser .wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 100px);}html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header,.nectar_fullscreen_zoom_recent_projects,.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container,#nectar_fullscreen_rows:not(.afterLoaded):not([data-mobile-disable="on"]) > div{height:calc(100vh - 47px);}.wpb_row.vc_row-o-full-height.top-level,.wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 47px);}body[data-transparent-header="false"] #ajax-content-wrap.no-scroll{min-height:calc(100vh - 47px);height:calc(100vh - 47px);}}#nectar_fullscreen_rows{background-color:transparent;}#ajax-content-wrap .vc_row.left_padding_18pct .row_col_wrap_12,.nectar-global-section .vc_row.left_padding_18pct .row_col_wrap_12{padding-left:18%;}#ajax-content-wrap .vc_row.right_padding_18pct .row_col_wrap_12,.nectar-global-section .vc_row.right_padding_18pct .row_col_wrap_12{padding-right:18%;}@media only screen and (min-width:1000px){#header-outer .column-margin-7pct.wpb_row > .span_12,#ajax-content-wrap .column-margin-7pct.wpb_row > .span_12,#ajax-content-wrap .column-margin-7pct.wpb_row .full-page-inner > .container > .span_12,#ajax-content-wrap .column-margin-7pct.wpb_row .full-page-inner > .span_12{margin-left:calc(7%/-2);margin-right:calc(7%/-2);}#header-outer .column-margin-7pct .wpb_column:not(.child_column),#header-outer .column-margin-7pct.inner_row > div > .child_column,#ajax-content-wrap .column-margin-7pct .wpb_column:not(.child_column),#ajax-content-wrap .column-margin-7pct.inner_row > div > .child_column{padding-left:calc(7%/2);padding-right:calc(7%/2);}}body .container-wrap .wpb_row[data-column-margin="none"]:not(.full-width-section):not(.full-width-content),html body .wpb_row[data-column-margin="none"]:not(.full-width-section):not(.full-width-content){margin-bottom:0;}body .container-wrap .vc_row-fluid[data-column-margin="none"] > .span_12,html body .vc_row-fluid[data-column-margin="none"] > .span_12,body .container-wrap .vc_row-fluid[data-column-margin="none"] .full-page-inner > .container > .span_12,body .container-wrap .vc_row-fluid[data-column-margin="none"] .full-page-inner > .span_12{margin-left:0;margin-right:0;}body .container-wrap .vc_row-fluid[data-column-margin="none"] .wpb_column:not(.child_column),body .container-wrap .inner_row[data-column-margin="none"] .child_column,html body .vc_row-fluid[data-column-margin="none"] .wpb_column:not(.child_column),html body .inner_row[data-column-margin="none"] .child_column{padding-left:0;padding-right:0;}@media only screen and (min-width:1000px){html body{overflow:visible;}.vc_row:not(.vc_row-o-equal-height) .nectar-sticky-column-css.vc_column_container > .n-sticky{height:100%;}.nectar-sticky-column-css.vc_column_container > .n-sticky{width:100%;}.nectar-sticky-column-css.vc_column_container > .n-sticky > .vc_column-inner{position:sticky;top:var(--nectar-sticky-top-distance);}}.wpb_column.el_spacing_30px > .vc_column-inner > .wpb_wrapper > div:not(:last-child),.wpb_column.el_spacing_30px > .n-sticky > .vc_column-inner > .wpb_wrapper > div:not(:last-child){margin-bottom:30px;}.wpb_column.child_column.el_spacing_5px > .vc_column-inner > .wpb_wrapper > div:not(:last-child),.wpb_column.child_column.el_spacing_5px > .n-sticky > .vc_column-inner > .wpb_wrapper > div:not(:last-child){margin-bottom:5px;}.img-with-aniamtion-wrap.custom-width-40pct .inner{max-width:40%;}.img-with-aniamtion-wrap[data-border-radius="20px"] .img-with-animation,.img-with-aniamtion-wrap[data-border-radius="20px"] .inner,.img-with-aniamtion-wrap[data-border-radius="20px"] .hover-wrap{border-radius:20px;}.img-with-aniamtion-wrap[data-border-radius="20px"]{--nectar-radius:20px;}.img-with-aniamtion-wrap[data-max-width="custom"].center .inner{display:inline-block;}.nectar-split-heading .heading-line{display:block;overflow:hidden;position:relative}.nectar-split-heading .heading-line >div{display:block;transform:translateY(200%);-webkit-transform:translateY(200%)}.nectar-split-heading h1{margin-bottom:0}.nectar-split-heading > * > *{text-indent:0;}@media only screen and (min-width:1000px){.nectar-split-heading[data-custom-font-size="true"] h1,.nectar-split-heading[data-custom-font-size="true"] h2,.row .nectar-split-heading[data-custom-font-size="true"] h3,.row .nectar-split-heading[data-custom-font-size="true"] h4,.row .nectar-split-heading[data-custom-font-size="true"] h5,.row .nectar-split-heading[data-custom-font-size="true"] h6,.row .nectar-split-heading[data-custom-font-size="true"] i{font-size:inherit;line-height:inherit;}}.nectar-split-heading.font_line_height_0-9{line-height:0.9!important;}.nectar-split-heading.font_line_height_0-9 *{line-height:0.9!important;}@media only screen,print{body #ajax-content-wrap .font_size_11vw.font_size_max_200px.nectar-split-heading,body .font_size_11vw.font_size_max_200px.nectar-split-heading{font-size:min(200px,11vw)!important;}}@media only screen,print{body #ajax-content-wrap .font_size_11vw.font_size_max_200px.nectar-split-heading,body .font_size_11vw.font_size_max_200px.nectar-split-heading,body #header-outer .font_size_11vw.font_size_max_200px.nectar-split-heading{font-size:min(200px,11vw)!important;}}@media only screen and (max-width:999px){body #ajax-content-wrap .font_size_tablet_11vw.font_size_max_200px.nectar-split-heading,body .font_size_tablet_11vw.font_size_max_200px.nectar-split-heading{font-size:min(200px,11vw)!important;}}@media only screen and (max-width:999px){body #ajax-content-wrap .container-wrap .font_size_tablet_11vw.font_size_max_200px.nectar-split-heading,body .container-wrap .font_size_tablet_11vw.font_size_max_200px.nectar-split-heading,body #header-outer .font_size_tablet_11vw.font_size_max_200px.nectar-split-heading{font-size:min(200px,11vw)!important;}}#ajax-content-wrap .font_line_height_0-9.nectar-split-heading,body .font_line_height_0-9.nectar-split-heading{line-height:0.9;}.centered-text .nectar-split-heading[data-animation-type="line-reveal-by-space"] h1,.centered-text .nectar-split-heading[data-animation-type="line-reveal-by-space"] h2,.centered-text .nectar-split-heading[data-animation-type="line-reveal-by-space"] h3,.centered-text .nectar-split-heading[data-animation-type="line-reveal-by-space"] h4{margin:0 auto;}.nectar-split-heading[data-animation-type="line-reveal-by-space"]:not(.markup-generated){opacity:0;}.nectar-split-heading[data-animation-type="line-reveal-by-space"]:not(.markup-generated).animated-in{opacity:1;}.nectar-split-heading[data-animation-type="line-reveal-by-space"] > * > span{position:relative;display:inline-block;overflow:hidden;}.nectar-split-heading[data-animation-type="line-reveal-by-space"] span{vertical-align:bottom;}.nectar-split-heading[data-animation-type="line-reveal-by-space"] span{line-height:1.2;}@media only screen and (min-width:1000px){.nectar-split-heading[data-animation-type="line-reveal-by-space"]:not(.markup-generated) > *{line-height:1.2;}}@media only screen and (max-width:999px){.nectar-split-heading[data-animation-type="line-reveal-by-space"]:not([data-m-rm-animation="true"]):not(.markup-generated) > *{line-height:1.2;}}.nectar-split-heading[data-animation-type="line-reveal-by-space"][data-stagger="true"]:not([data-text-effect*="letter-reveal"]) span .inner{transition:transform 1.2s cubic-bezier(0.25,1,0.5,1),opacity 1.2s cubic-bezier(0.25,1,0.5,1),filter 1.2s cubic-bezier(0.25,1,0.5,1);}.nectar-split-heading[data-animation-type="line-reveal-by-space"] span .inner{position:relative;display:inline-block;-webkit-transform:translateY(1.3em);transform:translateY(1.3em);}.nectar-split-heading[data-animation-type="line-reveal-by-space"] span .inner.animated{-webkit-transform:none;transform:none;opacity:1;}.nectar-split-heading[data-text-effect="none"]{opacity:1!important;}.nectar-split-heading[data-animation-type="line-reveal-by-space"][data-align="left"]{display:flex;justify-content:flex-start;}.nectar-split-heading[data-animation-type="line-reveal-by-space"][data-align="center"]{display:flex;justify-content:center;}.nectar-split-heading[data-animation-type="line-reveal-by-space"][data-align="right"]{display:flex;justify-content:flex-end;}@media only screen and (max-width:999px){.nectar-split-heading[data-animation-type="line-reveal-by-space"][data-m-align="left"]{display:flex;justify-content:flex-start;}.nectar-split-heading[data-animation-type="line-reveal-by-space"][data-m-align="center"]{display:flex;justify-content:center;}.nectar-split-heading[data-animation-type="line-reveal-by-space"][data-m-align="right"]{display:flex;justify-content:flex-end;}}#ajax-content-wrap .border_color_424242.nectar-hor-list-item{border:none;transition:opacity 1.1s cubic-bezier(0.65,0,0.25,1);}#ajax-content-wrap .border_color_424242.nectar-hor-list-item:after{position:absolute;z-index:10;bottom:0;left:0;width:100%;height:1px;content:"";display:block;transform:scaleX(0);transform-origin:left;transition:transform 1.1s cubic-bezier(0.65,0,0.25,1);}#ajax-content-wrap .border_color_424242.nectar-hor-list-item.animated-in:after{transform:scaleX(1);}#ajax-content-wrap .border_color_424242.nectar-hor-list-item:after{background-color:#424242;}.nectar-text-inline-images{position:relative;opacity:0;transition:opacity 0.2s ease;}@media only screen and (max-width:999px){.nectar-text-inline-images--rm-mobile-animation{transition:none;}}body .nectar-text-inline-images a{color:inherit;}.nectar-text-inline-images .nectar-text-inline-images__inner > *:last-child{margin-bottom:0;}.nectar-text-inline-images__marker{display:inline-block;position:relative;min-width:10px;clip-path:inset(6%);}body .row .nectar-text-inline-images__marker img{position:absolute;top:0;left:0;height:100%;max-width:none;width:auto;}.nectar-text-inline-images__marker video{object-fit:cover;position:absolute;width:100%;height:100%;top:0;left:0;}.nectar-text-inline-images--calculated{opacity:1;}.nectar-text-inline-images .nectar-text-inline-images__marker[data-img-size="large__h_rect"] img{aspect-ratio:1.6/1;object-fit:cover;}.nectar-text-inline-images.image_size_large__h_rect .nectar-text-inline-images__marker img{width:large__h_rect;}.nectar-text-inline-images--roundness--10px .nectar-text-inline-images__marker{clip-path:inset(8% 5% round 10px);}@media only screen and (min-width:1000px){body .row .nectar-text-inline-images.font_size_desktop_4vw *{font-size:4vw;line-height:1.4;}}#ajax-content-wrap .nectar-responsive-text *,body .nectar-responsive-text *{margin-bottom:0;color:inherit;}#ajax-content-wrap .nectar-responsive-text[class*="font_size"] *,body .nectar-responsive-text[class*="font_size"] *{font-size:inherit;line-height:inherit;}.nectar-responsive-text.nectar-link-underline-effect a{text-decoration:none;}.nectar-responsive-text[data-inherit-heading-family] > *{font-family:inherit;font-weight:inherit;font-size:inherit;line-height:inherit;text-transform:inherit;letter-spacing:inherit;}@media only screen,print{body #ajax-content-wrap .font_size_desktop_5vw.font_size_max_90px.nectar-responsive-text,body .font_size_desktop_5vw.font_size_max_90px.nectar-responsive-text{font-size:min(90px,5vw);}}@media only screen,print{body #ajax-content-wrap .font_size_desktop_5vw.font_size_max_90px.nectar-responsive-text,body .font_size_desktop_5vw.font_size_max_90px.nectar-responsive-text,body #header-outer .font_size_desktop_5vw.font_size_max_90px.nectar-responsive-text{font-size:min(90px,5vw);}}@media only screen and (max-width:999px){body #ajax-content-wrap .font_size_tablet_7vw.font_size_max_90px.nectar-responsive-text,body .font_size_tablet_7vw.font_size_max_90px.nectar-responsive-text{font-size:min(90px,7vw);}}@media only screen and (max-width:999px){body #ajax-content-wrap .container-wrap .font_size_tablet_7vw.font_size_max_90px.nectar-responsive-text,body .container-wrap .font_size_tablet_7vw.font_size_max_90px.nectar-responsive-text,body #header-outer .font_size_tablet_7vw.font_size_max_90px.nectar-responsive-text{font-size:min(90px,7vw);}}#ajax-content-wrap .font_line_height_1px.nectar-responsive-text,body .font_line_height_1px.nectar-responsive-text{line-height:1;}@media only screen and (max-width:999px){#ajax-content-wrap .column-margin-7pct.wpb_row > .span_12:has( > [class*="vc_col-xs"]:not(.vc_col-xs-12)){margin-left:calc(7%/-2);margin-right:calc(7%/-2);}#ajax-content-wrap .column-margin-7pct .wpb_column[class*="vc_col-xs"]:not(.vc_col-xs-12):not(.child_column),#ajax-content-wrap .column-margin-7pct.inner_row > div > .child_column[class*="vc_col-xs"]:not(.vc_col-xs-12){padding-left:calc(7%/2);padding-right:calc(7%/2);}}@media only screen and (max-width:999px){.nectar-split-heading[data-m-rm-animation="true"]{opacity:1!important;}}@media only screen and (max-width:999px){#ajax-content-wrap .vc_row.left_padding_tablet_18pct .row_col_wrap_12{padding-left:18%!important;}}@media only screen and (max-width:999px){.vc_row.bottom_padding_tablet_15pct{padding-bottom:15%!important;}}@media only screen and (max-width:999px){body .row .nectar-text-inline-images.font_size_tablet_6vw *{font-size:6vw;line-height:1.4;}}@media only screen and (max-width:999px){.nectar-split-heading.font_size_tablet_11vw *{font-size:inherit!important;}}@media only screen and (max-width:999px){#ajax-content-wrap .vc_row.right_padding_tablet_18pct .row_col_wrap_12{padding-right:18%!important;}}@media only screen and (max-width:999px){.vc_row.inner_row.top_padding_tablet_20px{padding-top:20px!important;}}@media only screen and (max-width:999px) and (min-width:691px){#ajax-content-wrap .column-margin-7pct.wpb_row > .span_12:has(> [data-t-w-inherits="small_desktop"]){margin-left:calc(7%/-2);margin-right:calc(7%/-2);}#ajax-content-wrap .column-margin-7pct.wpb_row > .span_12:has(> [data-t-w-inherits="small_desktop"]) > .wpb_column{padding-left:calc(7%/2);padding-right:calc(7%/2);}}@media only screen and (max-width:999px){#ajax-content-wrap .nectar-hor-list-item.multiple-columns[data-columns="4"]{display:flex;flex-wrap:wrap;--list-gap:30px;grid-row-gap:5px;grid-column-gap:var(--list-gap);}#ajax-content-wrap .nectar-hor-list-item.multiple-columns[data-columns="4"] .nectar-list-item{width:calc(50% - var(--list-gap))!important;padding-bottom:0;}}@media only screen and (max-width:999px){.vc_row.inner_row.top_padding_tablet_0px{padding-top:0px!important;}}@media only screen and (max-width:999px){.nectar-sticky-column-css.vc_column_container > .n-sticky:not(.nectar-sticky-column-wrap--mobile) > .vc_column-inner{position:relative;}}@media only screen and (max-width:999px){body .img-with-aniamtion-wrap.custom-width-tablet-50pct .inner{max-width:50%;}}@media only screen and (max-width:690px){body .vc_row.top_padding_phone_10pct{padding-top:10%!important;}}@media only screen and (max-width:690px){body .row .nectar-text-inline-images.font_size_phone_7vw *{font-size:7vw;line-height:1.4;}}@media only screen and (max-width:690px){body #ajax-content-wrap .vc_row.left_padding_phone_8pct .row_col_wrap_12{padding-left:8%!important;}}@media only screen and (max-width:690px){body #ajax-content-wrap .vc_row.right_padding_phone_8pct .row_col_wrap_12{padding-right:8%!important;}}@media only screen and (max-width:690px){body .img-with-aniamtion-wrap.custom-width-phone-60pct .inner{max-width:60%;}}.screen-reader-text,.nectar-skip-to-content:not(:focus){border:0;clip:rect(1px,1px,1px,1px);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute!important;width:1px;word-wrap:normal!important;}.row .col img:not([srcset]){width:auto;}.row .col img.img-with-animation.nectar-lazy:not([srcset]){width:100%;}

        #page-header-bg.fullscreen-header,#page-header-wrap.fullscreen-header{width:100%;position:relative;transition:none;-webkit-transition:none;z-index:2}#page-header-wrap.fullscreen-header{background-color:#2b2b2b}#page-header-bg.fullscreen-header .span_6{opacity:1}#page-header-bg.fullscreen-header[data-alignment-v="middle"] .span_6{top:50%!important}.default-blog-title.fullscreen-header{position:relative}@media only screen and (min-width :1px) and (max-width :999px){#page-header-bg[data-parallax="1"][data-alignment-v="middle"].fullscreen-header .span_6{-webkit-transform:translateY(-50%)!important;transform:translateY(-50%)!important;}#page-header-bg[data-parallax="1"][data-alignment-v="middle"].fullscreen-header .nectar-particles .span_6{-webkit-transform:none!important;transform:none!important;}#page-header-bg.fullscreen-header .row{top:0!important;}}.no-rgba #header-space{display:none;}@media only screen and (max-width:999px){body #header-space[data-header-mobile-fixed="1"]{display:none;}#header-outer[data-mobile-fixed="false"]{position:absolute;}}@media only screen and (max-width:999px){body:not(.nectar-no-flex-height) #header-space[data-secondary-header-display="full"]:not([data-header-mobile-fixed="false"]){display:block!important;margin-bottom:-50px;}#header-space[data-secondary-header-display="full"][data-header-mobile-fixed="false"]{display:none;}}@media only screen and (min-width:1000px){#header-space{display:none;}.nectar-slider-wrap.first-section,.parallax_slider_outer.first-section,.full-width-content.first-section,.parallax_slider_outer.first-section .swiper-slide .content,.nectar-slider-wrap.first-section .swiper-slide .content,#page-header-bg,.nder-page-header,#page-header-wrap,.full-width-section.first-section{margin-top:0!important;}body #page-header-bg,body #page-header-wrap{height:84px;}body #search-outer{z-index:100000;}}@media only screen and (min-width:1000px){#page-header-wrap.fullscreen-header,#page-header-wrap.fullscreen-header #page-header-bg,html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header,.nectar_fullscreen_zoom_recent_projects,#nectar_fullscreen_rows:not(.afterLoaded) > div{height:100vh;}.wpb_row.vc_row-o-full-height.top-level,.wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:100vh;}#page-header-bg[data-alignment-v="middle"] .span_6 .inner-wrap,#page-header-bg[data-alignment-v="top"] .span_6 .inner-wrap,.blog-archive-header.color-bg .container{padding-top:calc(79px + var(--nectar_hook_before_nav_content_height,0px));}#page-header-wrap.container #page-header-bg .span_6 .inner-wrap{padding-top:0;}.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container{height:calc(100vh + 2px)!important;}.admin-bar .nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.admin-bar .nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container{height:calc(100vh - 30px)!important;}}@media only screen and (max-width:999px){#page-header-bg[data-alignment-v="middle"]:not(.fullscreen-header) .span_6 .inner-wrap,#page-header-bg[data-alignment-v="top"] .span_6 .inner-wrap,.blog-archive-header.color-bg .container{padding-top:calc(49px + var(--nectar_hook_before_nav_content_height,0px));}.vc_row.top-level.full-width-section:not(.full-width-ns) > .span_12,#page-header-bg[data-alignment-v="bottom"] .span_6 .inner-wrap{padding-top:24px;}}@media only screen and (max-width:690px){.vc_row.top-level.full-width-section:not(.full-width-ns) > .span_12{padding-top:49px;}.vc_row.top-level.full-width-content .nectar-recent-posts-single_featured .recent-post-container > .inner-wrap{padding-top:24px;}}@media only screen and (max-width:999px){.full-width-ns .nectar-slider-wrap .swiper-slide[data-y-pos="middle"] .content,.full-width-ns .nectar-slider-wrap .swiper-slide[data-y-pos="top"] .content{padding-top:30px;}}@media only screen and (max-width:999px){.using-mobile-browser #page-header-wrap.fullscreen-header,.using-mobile-browser #page-header-wrap.fullscreen-header #page-header-bg{height:calc(100vh - 76px);}.using-mobile-browser #nectar_fullscreen_rows:not(.afterLoaded):not([data-mobile-disable="on"]) > div{height:calc(100vh - 76px);}.using-mobile-browser .wpb_row.vc_row-o-full-height.top-level,.using-mobile-browser .wpb_row.vc_row-o-full-height.top-level > .col.span_12,[data-permanent-transparent="1"].using-mobile-browser .wpb_row.vc_row-o-full-height.top-level,[data-permanent-transparent="1"].using-mobile-browser .wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 76px);}#page-header-wrap.fullscreen-header,#page-header-wrap.fullscreen-header #page-header-bg,html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header,.nectar_fullscreen_zoom_recent_projects,.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container,#nectar_fullscreen_rows:not(.afterLoaded):not([data-mobile-disable="on"]) > div{height:calc(100vh - 1px);}.wpb_row.vc_row-o-full-height.top-level,.wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 1px);}body[data-transparent-header="false"] #ajax-content-wrap.no-scroll{min-height:calc(100vh - 1px);height:calc(100vh - 1px);}}.col.padding-9-percent > .vc_column-inner,.col.padding-9-percent > .n-sticky > .vc_column-inner{padding:calc(600px * 0.09);}@media only screen and (max-width:690px){.col.padding-9-percent > .vc_column-inner,.col.padding-9-percent > .n-sticky > .vc_column-inner{padding:calc(100vw * 0.09);}}@media only screen and (min-width:1000px){.col.padding-9-percent > .vc_column-inner,.col.padding-9-percent > .n-sticky > .vc_column-inner{padding:calc((100vw - 180px) * 0.09);}.column_container:not(.vc_col-sm-12) .col.padding-9-percent > .vc_column-inner{padding:calc((100vw - 180px) * 0.045);}}@media only screen and (min-width:1425px){.col.padding-9-percent > .vc_column-inner{padding:calc(1245px * 0.09);}.column_container:not(.vc_col-sm-12) .col.padding-9-percent > .vc_column-inner{padding:calc(1245px * 0.045);}}.full-width-content .col.padding-9-percent > .vc_column-inner{padding:calc(100vw * 0.09);}@media only screen and (max-width:999px){.full-width-content .col.padding-9-percent > .vc_column-inner{padding:calc(100vw * 0.09);}}@media only screen and (min-width:1000px){.full-width-content .column_container:not(.vc_col-sm-12) .col.padding-9-percent > .vc_column-inner{padding:calc(100vw * 0.045);}}.col.padding-4-percent > .vc_column-inner,.col.padding-4-percent > .n-sticky > .vc_column-inner{padding:calc(600px * 0.06);}@media only screen and (max-width:690px){.col.padding-4-percent > .vc_column-inner,.col.padding-4-percent > .n-sticky > .vc_column-inner{padding:calc(100vw * 0.06);}}@media only screen and (min-width:1000px){.col.padding-4-percent > .vc_column-inner,.col.padding-4-percent > .n-sticky > .vc_column-inner{padding:calc((100vw - 180px) * 0.04);}.column_container:not(.vc_col-sm-12) .col.padding-4-percent > .vc_column-inner{padding:calc((100vw - 180px) * 0.02);}}@media only screen and (min-width:1425px){.col.padding-4-percent > .vc_column-inner{padding:calc(1245px * 0.04);}.column_container:not(.vc_col-sm-12) .col.padding-4-percent > .vc_column-inner{padding:calc(1245px * 0.02);}}.full-width-content .col.padding-4-percent > .vc_column-inner{padding:calc(100vw * 0.04);}@media only screen and (max-width:999px){.full-width-content .col.padding-4-percent > .vc_column-inner{padding:calc(100vw * 0.06);}}@media only screen and (min-width:1000px){.full-width-content .column_container:not(.vc_col-sm-12) .col.padding-4-percent > .vc_column-inner{padding:calc(100vw * 0.02);}}.col.padding-7-percent > .vc_column-inner,.col.padding-7-percent > .n-sticky > .vc_column-inner{padding:calc(600px * 0.07);}@media only screen and (max-width:690px){.col.padding-7-percent > .vc_column-inner,.col.padding-7-percent > .n-sticky > .vc_column-inner{padding:calc(100vw * 0.07);}}@media only screen and (min-width:1000px){.col.padding-7-percent > .vc_column-inner,.col.padding-7-percent > .n-sticky > .vc_column-inner{padding:calc((100vw - 180px) * 0.07);}.column_container:not(.vc_col-sm-12) .col.padding-7-percent > .vc_column-inner{padding:calc((100vw - 180px) * 0.035);}}@media only screen and (min-width:1425px){.col.padding-7-percent > .vc_column-inner{padding:calc(1245px * 0.07);}.column_container:not(.vc_col-sm-12) .col.padding-7-percent > .vc_column-inner{padding:calc(1245px * 0.035);}}.full-width-content .col.padding-7-percent > .vc_column-inner{padding:calc(100vw * 0.07);}@media only screen and (max-width:999px){.full-width-content .col.padding-7-percent > .vc_column-inner{padding:calc(100vw * 0.07);}}@media only screen and (min-width:1000px){.full-width-content .column_container:not(.vc_col-sm-12) .col.padding-7-percent > .vc_column-inner{padding:calc(100vw * 0.035);}}.wpb_column[data-cfc="true"] h1,.wpb_column[data-cfc="true"] h2,.wpb_column[data-cfc="true"] h3,.wpb_column[data-cfc="true"] h4,.wpb_column[data-cfc="true"] h5,.wpb_column[data-cfc="true"] h6,.wpb_column[data-cfc="true"] p{color:inherit}.nectar_icon_wrap i{vertical-align:middle;top:0;}.nectar_icon_wrap i[class*="nectar-brands"]{display:inline-block;}.wpb_wrapper > .nectar_icon_wrap{margin-bottom:0;}.nectar_icon_wrap i{transition:color .25s ease;}.nectar_icon_wrap path{transition:fill .25s ease;}.nectar-pulsate i{display:block;border-radius:200px;background-color:currentColor;position:relative;}.nectar-pulsate i:after{display:block;position:absolute;top:50%;left:50%;content:"";width:100%;height:100%;margin:-50% auto auto -50%;-webkit-transform-origin:50% 50%;transform-origin:50% 50%;border-radius:50%;background-color:currentColor;opacity:1;z-index:11;pointer-events:none;animation:nectar_pulsate 2s cubic-bezier(.2,1,.2,1) infinite;}@keyframes nectar_pulsate{0%{opacity:0.6;transform:scale(1);}100%{opacity:0;transform:scale(3);}}.nectar_icon_wrap[data-style*="default"][data-color*="extra-color-gradient"] .nectar_icon i{border-radius:0!important;text-align:center;}.nectar_icon_wrap[data-style*="default"][data-color*="extra-color-gradient"] .nectar_icon i:before{vertical-align:top;}.nectar_icon_wrap[data-style*="default"][data-color*="extra-color-gradient"] .nectar_icon i[class*="fa-"],.nectar_icon_wrap[data-style*="default"][data-color*="extra-color-gradient"] .nectar_icon i[class^="icon-"]{vertical-align:baseline;}.iconsmind-Finger-Print:before{content:"\eb39"}.iconsmind-Car-3:before{content:"\e9c6"}.nectar-3d-transparent-button{font-weight:700;font-size:12px;line-height:20px;visibility:hidden}.nectar-3d-transparent-button{display:inline-block}.nectar-3d-transparent-button a{display:block}.nectar-3d-transparent-button .hidden-text{height:1em;line-height:1.5;overflow:hidden}.nectar-3d-transparent-button .hidden-text{display:block;height:0;position:absolute}body .nectar-3d-transparent-button{position:relative;margin-bottom:0}.nectar-3d-transparent-button .inner-wrap{-webkit-perspective:2000px;perspective:2000px;position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;display:block}.nectar-3d-transparent-button .front-3d{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;display:block}.nectar-3d-transparent-button .back-3d{position:relative;top:0;right:0;bottom:0;left:0;width:100%;height:100%;display:block}.nectar-3d-transparent-button .back-3d{-webkit-transform-origin:50% 50% -2.3em;transform-origin:50% 50% -2.3em}.nectar-3d-transparent-button .front-3d{-webkit-transform-origin:50% 50% -2.3em;transform-origin:50% 50% -2.3em;-webkit-transform:rotateX(-90deg);transform:rotateX(-90deg)}.nectar-3d-transparent-button:hover .front-3d{-webkit-transform:rotateX(0deg);transform:rotateX(0deg)}.nectar-3d-transparent-button:hover .back-3d{-webkit-transform:rotateX(90deg);transform:rotateX(90deg)}.nectar-3d-transparent-button .back-3d,.nectar-3d-transparent-button .front-3d{transition:-webkit-transform .25s cubic-bezier(.2,.65,.4,1);transition:transform .25s cubic-bezier(.2,.65,.4,1);transition:transform .25s cubic-bezier(.2,.65,.4,1),-webkit-transform .25s cubic-bezier(.2,.65,.4,1)}.nectar-3d-transparent-button .back-3d,.nectar-3d-transparent-button .front-3d{-webkit-backface-visibility:hidden;backface-visibility:hidden}.nectar-3d-transparent-button .back-3d svg,.nectar-3d-transparent-button .front-3d svg{display:block}.screen-reader-text,.nectar-skip-to-content:not(:focus){border:0;clip:rect(1px,1px,1px,1px);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute!important;width:1px;word-wrap:normal!important;}.row .col img:not([srcset]){width:auto;}.row .col img.img-with-animation.nectar-lazy:not([srcset]){width:100%;}
    </style>

    <link rel='stylesheet' id='nectar_default_font_open_sans-css'
        href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700&amp;subset=latin%2Clatin-ext&amp;display=swap'
        type='text/css' media='all' />

    <link rel='stylesheet' id='redux-google-fonts-salient_redux-css'
        href='https://fonts.googleapis.com/css?family=Instrument+Sans%3A400%2C700%7CInstrument+Serif%3A400%7CPoppins%3A500%7CSource+Serif+Pro%3A400&amp;display=swap&amp;ver=6.8.2'
        type='text/css' media='all' />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript">
        var root = document.getElementsByTagName("html")[0];
        root.setAttribute("class", "js");
    </script>

    <style data-type="vc_custom-css">
        .nectar-split-heading[data-has-fit-text="true"] {
            will-change: font-size;
    }
    </style><noscript>
        <style>
        .wpb_animate_when_almost_visible {
            opacity: 1;
        }
        </style>
    </noscript>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <?php
    $user = $this->request->getAttribute('identity');
    if ($user) {
        echo $this->Html->meta('user-id', $user->id);
    }
    ?>

</head>


<!-- Toast Notification -->
<div id="toast" class="toast-notification"></div>

<style>
.toast-notification {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 16px 24px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    font-weight: 500;
    z-index: 10000;
    opacity: 0;
    transform: translateY(-20px);
    transition: all 0.3s ease;
    pointer-events: none;
}

.toast-notification.show {
    opacity: 1;
    transform: translateY(0);
}

.toast-notification.error {
    background: #fee;
    color: #c00;
    border-left: 4px solid #c00;
}

.toast-notification.success {
    background: #efe;
    color: #0a0;
    border-left: 4px solid #0a0;
}

body h2{
    color: #28ebe3 !important;
}

.light h1 {
    color: #28ebe3 !important;
}

body h3, .row .col h3, .toggle > h3.toggle-title a, .ascend #respond h3, .ascend h3#comments, .woocommerce ul.products li.product.text_on_hover h3, .masonry.classic_enhanced .masonry-blog-item h3.title, .woocommerce ul.products li.product.material h3, .woocommerce-page ul.products li.product.material h3, .portfolio-items[data-ps="8"] .col h3, .nectar-hor-list-item[data-font-family="h3"], .woocommerce ul.products li.product h2, .nectar-quick-view-box h1, .nectar-ext-menu-item .inherit-h3 .menu-title-text, #slide-out-widget-area .nectar-ext-menu-item .inherit-h3, #mobile-menu .nectar-ext-menu-item .inherit-h3, #ajax-content-wrap .nectar-inherit-h3, #header-outer .nectar-inherit-h3, [data-inherit-heading-family="h3"], .nectar-quick-view-box div.product h1.product_title.nectar-inherit-h3, .nectar-quick-view-box div.product .summary p.price.nectar-inherit-h3, body.woocommerce div.product p.price.nectar-inherit-h3 ins {
    font-family: Instrument Sans !important;
    font-size: 32px;
}
 #header-outer:not(.transparent) #top #logo{
    color: #28ebe3 !important;
    font-size: 50px;
 }
 @media (max-width: 767px){
     #header-outer:not(.transparent) #top #logo{
    font-size: 20px;
 }
 }

  .wpb_column.instance-21 > .vc_column-inner > .column-bg-overlay-wrap > .column-bg-overlay {
       background-image: url(/img/footer_textura_morado.jpg) !important;
    background-repeat: no-repeat !important;
    background-position: center !important;
    background-size: cover !important;
 }

 body #ajax-content-wrap .font_size_desktop_7vw.font_size_max_130px.nectar-cta *, body .font_size_desktop_7vw.font_size_max_130px.nectar-cta *, body #header-outer .font_size_desktop_7vw.font_size_max_130px.nectar-cta * {
    font-size: min(130px, 7vw);
    color: white;
}

/* Botón Contáctame */
.contactame-button {
    display: inline-block;
    padding: 18px 50px;
    background: #28ebe3;
    color: #000 !important;
    font-family: 'Instrument Sans', sans-serif;
    font-weight: 700;
    font-size: 18px;
    text-decoration: none;
    border-radius: 14px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 4px 15px rgba(40, 235, 227, 0.3);
}

.contactame-button:hover {
    background: #1fd4cc;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(40, 235, 227, 0.5);
    color: #000 !important;
}

.contactame-button:active {
    transform: translateY(0);
}

/* Iconos de Redes Sociales */
.social-icons-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
    margin: 20px 0;
       
}

.social-icon-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    color: #fff !important;
    font-size: 30px;
    text-decoration: none;
    transition: all 0.3s ease;
     border-radius: 50%;
}

.social-icon-btn:hover {
    background: #28ebe3;
    color: #000 !important;
    border-color: #28ebe3;
    transform: translateY(-2px);
}

.social-icon-btn i {
    line-height: 1;
}

/* Responsive Styles */
@media only screen and (max-width: 999px) {
    .contactame-button {
        padding: 16px 40px;
        font-size: 16px;
    }

    .social-icons-container {
        gap: 15px;
    }
}

@media only screen and (max-width: 690px) {
    .contactame-button {
        padding: 14px 35px;
        font-size: 14px;
        letter-spacing: 0.5px;
    }

    .social-icons-container {
        gap: 12px;
        margin: 15px 0;
    }
}

/* Header Social Icons */
#header-outer .col.span_3 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.header-social-icons {
    display: flex;
    gap: 15px;
    margin-top: 15px;
    justify-content: flex-start;
    flex-wrap: wrap;
    clear: both;
    width: 100%;
    padding-bottom: 15px;
}

.header-social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background: transparent;
    border-radius: 50%;
    color: #fff !important;
    font-size: 16px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.header-social-icon:hover {
    background: #28ebe3;
    color: #000 !important;
    border-color: #28ebe3;
    transform: translateY(-2px);
}

.header-social-icon i {
    line-height: 1;
}

/* Header Social Icons - Responsive */
@media only screen and (max-width: 999px) {
    .header-social-icons {
        gap: 12px;
        margin-top: 12px;
    }

    .header-social-icon {
        width: 28px;
        height: 28px;
        font-size: 14px;
    }
}

@media only screen and (max-width: 690px) {
    .header-social-icons {
        gap: 10px;
        margin-top: 10px;
    }

    .header-social-icon {
        width: 26px;
        height: 26px;
        font-size: 13px;
    }
}

/* Ajuste para el logo cuando tiene social icons debajo */
#header-outer #top #logo {
    margin-bottom: 0;
}

/* Second Footer - Legal */
.second-footer {
    background: #000;
    color: #fff;
    padding: 60px 20px 0px;
    text-align: center;
}

.second-footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 30px;
}

/* Logo y Marca */
.footer-brand {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.footer-logo {
    max-width: 200px;
    height: auto;
}

.footer-brand-name {
padding-bottom: 4px;
font-size: 30px;
}

/* Email */
.footer-email {
    font-size: 18px;
}

.footer-email a {
    color: #28ebe3;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    border-bottom: 2px solid transparent;
}

.footer-email a:hover {
    color: #1fd4cc;
    border-bottom-color: #1fd4cc;
}

/* Legal Text */
.footer-legal {
    max-width: 900px;
    line-height: 1.8;
}

.footer-legal p {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.7);
    font-weight: 300;
    padding-bottom: 2px;
}

.footer-legal .current-year {
    font-weight: 500;
    color: #fff;
}

/* Responsive Second Footer */
@media only screen and (max-width: 999px) {
    .second-footer {
        padding: 50px 20px 0px;
    }

    .footer-email {
        font-size: 16px;
    }

    .footer-legal p {
        font-size: 12px;
        line-height: 1.7;
    }
}

@media only screen and (max-width: 690px) {
    .second-footer {
        padding: 40px 15px 0px;
    }

    .second-footer-content {
        gap: 25px;
    }

    .footer-email {
        font-size: 15px;
    }

    .footer-legal p {
        font-size: 11px;
        line-height: 1.6;
        margin: 10px 0;
    }
}

/* ============================================
   MASONRY GRID INTELIGENTE - REUTILIZABLE
   ============================================ */

.stef-masonry-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    padding: 40px 0;
    width: 100%;
}

.stef-masonry-item {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-height: 280px;
    background: #000;
}

/* Tamaños inteligentes según orientación */
.stef-masonry-item.horizontal {
    grid-column: span 2;
}

.stef-masonry-item.vertical {
    grid-row: span 2;
}

.stef-masonry-item.large {
    grid-column: span 2;
    grid-row: span 2;
}

/* Imagen de fondo */
.stef-masonry-item__image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.stef-masonry-item:hover .stef-masonry-item__image {
    transform: scale(1.1);
}

/* Overlay morado con transparencia (solo desktop) */
.stef-masonry-item__overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(153, 0, 255, 0);
    transition: background 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 30px;
    z-index: 2;
}

/* En desktop: overlay aparece en hover */
@media (min-width: 769px) {
    .stef-masonry-item:hover .stef-masonry-item__overlay {
        background: rgba(153, 0, 255, 0.85);
    }

    /* Contenido oculto por defecto en desktop */
    .stef-masonry-item__content {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.3s ease;
    }

    .stef-masonry-item:hover .stef-masonry-item__content {
        opacity: 1;
        transform: translateY(0);
    }
}

/* En móvil: overlay siempre visible */
@media (max-width: 768px) {
    .stef-masonry-item__overlay {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0) 100%);
    }

    .stef-masonry-item__content {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Contenido del item */
.stef-masonry-item__title {
    font-family: 'Instrument Sans', sans-serif;
    font-size: 28px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 8px 0;
    line-height: 1.2;
}

.stef-masonry-item__count {
    font-family: 'Instrument Sans', sans-serif;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
    margin: 0 0 15px 0;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.stef-masonry-item__button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    background: transparent;
    border: 2px solid #fff;
    border-radius: 8px;
    color: #fff;
    font-family: 'Instrument Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.stef-masonry-item__button:hover {
    background: #fff;
    color: #9900ff;
    transform: translateX(5px);
}

.stef-masonry-item__arrow {
    font-size: 18px;
    transition: transform 0.3s ease;
}

.stef-masonry-item__button:hover .stef-masonry-item__arrow {
    transform: translateX(5px);
}

/* Hover effect para todo el item */
.stef-masonry-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(153, 0, 255, 0.3);
}

/* Responsive: Tablet */
@media (max-width: 1024px) {
    .stef-masonry-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        padding: 30px 0;
    }

    .stef-masonry-item__title {
        font-size: 24px;
    }

    .stef-masonry-item.horizontal {
        grid-column: span 2;
    }

    .stef-masonry-item.vertical {
        grid-row: span 1;
    }
}

/* Responsive: Móvil */
@media (max-width: 768px) {
    .stef-masonry-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        padding: 20px 0;
    }

    .stef-masonry-item {
        min-height: 200px;
    }

    .stef-masonry-item__overlay {
        padding: 20px;
    }

    .stef-masonry-item__title {
        font-size: 18px;
    }

    .stef-masonry-item__count {
        font-size: 12px;
        margin-bottom: 10px;
    }

    .stef-masonry-item__button {
        padding: 10px 18px;
        font-size: 12px;
    }

    /* En móvil: imagen horizontal toma toda la fila */
    .stef-masonry-item.horizontal {
        grid-column: span 2;
        min-height: 180px;
    }

    /* En móvil: vertical ocupa 1 columna */
    .stef-masonry-item.vertical {
        grid-column: span 1;
        grid-row: span 1;
        min-height: 250px;
    }

    /* Large items en móvil */
    .stef-masonry-item.large {
        grid-column: span 2;
        grid-row: span 1;
    }
}

/* Extra pequeño (teléfonos pequeños) */
@media (max-width: 480px) {
    .stef-masonry-grid {
        gap: 8px;
    }

    .stef-masonry-item {
        min-height: 180px;
    }

    .stef-masonry-item__title {
        font-size: 16px;
    }

    .stef-masonry-item__overlay {
        padding: 15px;
    }

    .stef-masonry-item.vertical {
        min-height: 220px;
    }
}

/* Animaciones de entrada */
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

.stef-masonry-item {
    animation: fadeInUp 0.6s ease-out backwards;
}

.stef-masonry-item:nth-child(1) { animation-delay: 0.05s; }
.stef-masonry-item:nth-child(2) { animation-delay: 0.1s; }
.stef-masonry-item:nth-child(3) { animation-delay: 0.15s; }
.stef-masonry-item:nth-child(4) { animation-delay: 0.2s; }
.stef-masonry-item:nth-child(5) { animation-delay: 0.25s; }
.stef-masonry-item:nth-child(6) { animation-delay: 0.3s; }
.stef-masonry-item:nth-child(7) { animation-delay: 0.35s; }
.stef-masonry-item:nth-child(8) { animation-delay: 0.4s; }
.stef-masonry-item:nth-child(9) { animation-delay: 0.45s; }

</style>

<body
    class="home wp-singular page-template-default page page-id-9 wp-theme-salient wp-child-theme-salient-child material wpb-js-composer js-comp-ver-8.4.1 vc_responsive"
    data-footer-reveal="false" data-footer-reveal-shadow="none" data-header-format="default" data-body-border="off"
    data-boxed-style="" data-header-breakpoint="1000" data-dropdown-style="minimal" data-cae="easeOutCubic"
    data-cad="1300" data-megamenu-width="contained" data-aie="none" data-ls="fancybox" data-apte="standard"
    data-hhun="1" data-fancy-form-rcs="default" data-form-style="default" data-form-submit="regular" data-is="minimal"
    data-button-style="rounded_shadow" data-user-account-button="false" data-flex-cols="true" data-col-gap="default"
    data-header-inherit-rc="false" data-header-search="false" data-animated-anchors="true" data-ajax-transitions="false"
    data-full-width-header="false" data-slide-out-widget-area="true" data-slide-out-widget-area-style="fullscreen-alt"
    data-user-set-ocm="off" data-loading-animation="none" data-bg-header="false" data-responsive="1"
    data-ext-responsive="true" data-ext-padding="20" data-header-resize="0" data-header-color="custom" data-cart="false"
    data-remove-m-parallax="" data-remove-m-video-bgs="" data-m-animate="1" data-force-header-trans-color="light"
    data-smooth-scrolling="0" data-permanent-transparent="false">

    <div class="ocm-effect-wrap">
        <div class="ocm-effect-wrap-inner">
            <div id="header-space" data-header-mobile-fixed='1'></div>

            <div id="header-outer" data-has-menu="true" data-has-buttons="no" data-header-button_style="hover_scale"
                data-using-pr-menu="false" data-mobile-fixed="1" data-ptnm="false" data-lhe="text_reveal"
                data-user-set-bg="#000000" data-format="default" data-permanent-transparent="false" data-megamenu-rt="0"
                data-remove-fixed="1" data-header-resize="0" data-cart="false" data-transparency-option=""
                data-box-shadow="large" data-shrink-num="6" data-using-secondary="0" data-using-logo="0"
                data-logo-height="20" data-m-logo-height="24" data-padding="40" data-full-width="false"
                data-condense="false">

                <header id="top" role="banner" aria-label="Main Menu">
                    <div class="container">
                        <div class="row">
                            <div class="col span_3">
                                <a id="logo" href="/" data-supplied-ml-starting-dark="false"
                                    data-supplied-ml-starting="false" data-supplied-ml="false" class="no-image">
                                    Stefsketch</a>

                                <!-- Header Social Icons -->
                                <div class="header-social-icons">
                                    <a href="https://www.instagram.com/" target="_blank" rel="noopener" class="header-social-icon" aria-label="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.tiktok.com/" target="_blank" rel="noopener" class="header-social-icon" aria-label="TikTok">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener" class="header-social-icon" aria-label="LinkedIn">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://www.pinterest.com/" target="_blank" rel="noopener" class="header-social-icon" aria-label="Pinterest">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </div>
                            </div>
                            <!--/span_3-->

                            <div class="col span_9 col_last">
                                <div class="nectar-mobile-only mobile-header">
                                    <div class="inner">
                                        <ul id="menu-quantum-portfolio" class="sf-menu">
                                            <li class=" menu-item-btn-style-button_extra-color-1 menu-item-364">
                                                <a href="javascript:void(0);" class="open-contact-modal"><span
                                                        class="menu-title-text">Let&#8217;s Talk</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="slide-out-widget-area-toggle mobile-icon fullscreen-alt"
                                    data-custom-color="true" data-icon-animation="simple-transform">
                                    <div> <a href="#slide-out-widget-area" role="button" aria-label="Navigation Menu"
                                            aria-expanded="false" class="closed">
                                            <span class="screen-reader-text">Menu</span><span aria-hidden="true"> <i
                                                    class="lines-button x2" data-variant="even_lines"> <i
                                                        class="lines"></i> </i> </span> </a></div>
                                </div>

                                <nav aria-label="Main Menu">
                                    <ul class="sf-menu">
                                        <li id="menu-item-237"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item nectar-regular-menu-item menu-item-237">
                                            <a href="/" aria-current="page"><span class="menu-title-text"><span
                                                        class="nectar-text-reveal-button"><span
                                                            class="nectar-text-reveal-button__text"
                                                            data-text="Work's">Work's</span></span></span></a>
                                        </li>
                                        <li id="menu-item-236"
                                            class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-236">
                                            <a href="/historia"><span class="menu-title-text"><span
                                                        class="nectar-text-reveal-button"><span
                                                            class="nectar-text-reveal-button__text"
                                                            data-text="About">About</span></span></span></a>
                                        </li>
                                        <li id="menu-item-236"
                                            class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-236">
                                            <a href="/portafolio-posts"><span class="menu-title-text"><span
                                                        class="nectar-text-reveal-button"><span
                                                            class="nectar-text-reveal-button__text"
                                                            data-text="Admin">Admin</span></span></span></a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-btn-style-button_extra-color-1 menu-item-hover-text-reveal nectar-regular-menu-item menu-item-364">
                                            <a href="javascript:void(0);" class="open-contact-modal"><span
                                                    class="menu-title-text"><span
                                                        class="nectar-text-reveal-button"><span
                                                            class="nectar-text-reveal-button__text"
                                                            data-text="Let&#039;s Talk">Let&#8217;s
                                                            Talk</span></span></span></a>
                                        </li>
                                    </ul>
                                    <ul class="buttons sf-menu" data-user-set-ocm="off"></ul>

                                </nav>
                            </div>
                            <!--/span_9-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/container-->
                </header>
            </div>

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>


            <!-- Botón flotante fijo -->
            <a href="#" class="fixed-back-to-top" id="fixed-btn-up" title="Volver arriba">
                <i class="fas fa-arrow-up"></i>
            </a>


            <!--FOOTER-->
            <div class="nectar-global-section nectar_hook_global_section_footer" role="contentinfo">
                <div class="container normal-container row">
                    <div id="fws_68d45a3a47521" data-column-margin="default" data-midnight="dark"
                        class="wpb_row vc_row-fluid vc_row full-width-section  zindex-set" data-using-ctc="true"
                        style="padding-top: 10px; padding-bottom: 20px;  z-index: 1000;color: var(--nectar-page-text-color,#000000); ">
                        <div class="row-bg-wrap" data-bg-animation="none" data-bg-animation-delay=""
                            data-bg-overlay="false">
                            <div class="inner-wrap row-bg-layer">
                                <div class="row-bg viewport-desktop using-bg-color" style="background-color: #000000; ">
                                </div>
                            </div>
                        </div>
                        <div class="row_col_wrap_12 col span_12 custom left">
                            <div class="vc_col-sm-12 wpb_column column_container vc_column_container col el_spacing_20px tl_br_25px tr_br_25px bl_br_25px br_br_25px left_padding_desktop_30px top_padding_desktop_30px right_padding_desktop_30px bottom_padding_desktop_30px "
                                data-using-bg="true" data-padding-pos="all" data-has-bg-color="true"
                                data-bg-color="#ede8e4" data-bg-opacity="1" data-animation="" data-delay="0">
                                <div class="vc_column-inner" style="background-image: url(/img/footer_textura_morado.jpg) !important; background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;">
                                    <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                        <div class="column-bg-overlay" >
                                        </div>
                                    </div>
                                    <div class="wpb_wrapper">
                                        <div id="fws_68d45a3a478b5" data-midnight="" data-column-margin="default"
                                            class="wpb_row vc_row-fluid vc_row inner_row">
                                            <div class="row-bg-wrap">
                                                <div class="row-bg"></div>
                                            </div>

                                        </div>
                                        <div id="fws_68d45a3a47d6d" data-midnight="" data-column-margin="default"
                                            class="wpb_row vc_row-fluid vc_row inner_row">
                                            <div class="row-bg-wrap">
                                                <div class="row-bg"></div>
                                            </div>
                                            <div class="row_col_wrap_12_inner col span_12  left">
                                                <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding force-desktop-text-align-center inherit_tablet inherit_phone "
                                                    data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                    data-bg-opacity="1" data-animation="" data-delay="0">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="nectar-cta  alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit font_size_desktop_7vw font_size_phone_10vw font_size_max_130px "
                                                                data-color="default" data-using-bg="false"
                                                                data-style="text-reveal" data-display="block"
                                                                data-alignment="left" data-text-color="std"
                                                                style="--nectar-button-color: var(--nectar-default); --nectar-icon-gap: 10px; ">
                                                                <h2><span class="link_wrap"><a
                                                                            class="link_text open-contact-modal"
                                                                            role="button" href="#"><span
                                                                                class="text nectar-text-reveal-button__text"
                                                                                data-text="¡Colaboremos para darle vida a tu idea!">¿Tienes
                                                                                un proyecto en mente?</span></a></span>
                                                                </h2>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Botón Contáctame -->
                                       
                                        <div data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row">
                                            <div class="row-bg-wrap">
                                                <div class="row-bg"></div>
                                            </div>
                                            <div class="row_col_wrap_12_inner col span_12 left">
                                                <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding force-desktop-text-align-center inherit_tablet inherit_phone"
                                                    data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                    data-bg-opacity="1" data-animation="" data-delay="0">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <a href="javascript:void(0);" class="open-contact-modal contactame-button">
                                                                ¡CONTÁCTAME!
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="fws_68d45a3a48164" data-midnight="" data-column-margin="default"
                                            class="wpb_row vc_row-fluid vc_row inner_row social-icons-row">
                                            <div class="row-bg-wrap">
                                                <div class="row-bg"></div>
                                            </div>
                                            <div class="row_col_wrap_12_inner col span_12 left">
                                                <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding force-desktop-text-align-center inherit_tablet inherit_phone"
                                                    data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                    data-bg-opacity="1" data-animation="" data-delay="0">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="social-icons-container">
                                                                <a href="https://www.facebook.com/" target="_blank" rel="noopener" class="social-icon-btn" aria-label="Facebook">
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                                <a href="https://www.instagram.com/" target="_blank" rel="noopener" class="social-icon-btn" aria-label="Instagram">
                                                                    <i class="fab fa-instagram"></i>
                                                                </a>
                                                                <a href="https://www.youtube.com/" target="_blank" rel="noopener" class="social-icon-btn" aria-label="YouTube">
                                                                    <i class="fab fa-youtube"></i>
                                                                </a>
                                                                <a href="https://t.me/" target="_blank" rel="noopener" class="social-icon-btn" aria-label="Telegram">
                                                                    <i class="fab fa-telegram-plane"></i>
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

            <!--/footer-outer-->

            <!-- Second Footer - Legal Info -->
            <div class="second-footer" role="contentinfo">
                <div class="second-footer-content">
                    <!-- Logo y Nombre -->
                    <div class="footer-brand">
                        <p class="footer-brand-name">© Stef Sketch</p>
                        <img src="/img/stefsketch.png" alt="Stef Sketch Logo" class="footer-logo">
                    </div>

                    <!-- Email -->
                    <div class="footer-email">
                        <a href="mailto:hola@stefsketch.com">hola@stefsketch.com</a>
                    </div>

                    <!-- Legal Text -->
                    <div class="footer-legal">
                        <p>Todo el contenido del sitio web © Stef Sketch está prohibido para uso o reproducción total o parcial. Derechos reservados <span class="current-year"><?= date('Y') ?></span>.</p>
                        <p>Prohibido el uso o reproducción total o parcial de cualquier imagen del sitio. Derechos reservados <span class="current-year"><?= date('Y') ?></span>.</p>
                        <p>The use or total or partial reproduction of any image of the site is prohibited. All rights reserved <span class="current-year"><?= date('Y') ?></span>.</p>
                </div>
                <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding force-desktop-text-align-center force-tablet-text-align-center force-phone-text-align-center inherit_tablet inherit_phone "
                    data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                    data-bg-opacity="1" data-animation="" data-delay="0">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div
                                class="nectar-responsive-text font_line_height_1px nectar-link-underline-effect">
                                <h6>Made by <a href="">ADN Tecnologías</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>


            <div id="slide-out-widget-area-bg" class="fullscreen-alt solid">
                <div class="bg-inner"></div>
            </div>

            <div id="slide-out-widget-area" role="dialog" aria-modal="true" aria-label="Off Canvas Menu"
                class="fullscreen-alt" data-dropdown-func="default" data-back-txt="Back">

                <div class="inner-wrap">
                    <div class="inner" data-prepend-menu-mobile="false">

                        <a class="slide_out_area_close" href="#"><span class="screen-reader-text">Close Menu</span>
                            <span class="close-wrap"> <span class="close-line close-line1" role="presentation"></span>
                                <span class="close-line close-line2" role="presentation"></span> </span> </a>


                        <div class="off-canvas-menu-container mobile-only" role="navigation">


                            <ul class="menu">
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-237">
                                    <a href="/" aria-current="page">Work</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-236">
                                    <a href="/historia">About</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-236">
                                    <a href="/portafolio-posts">Admin</a>
                                </li>
                                

                            </ul>

                            <ul class="menu secondary-header-items">
                            </ul>
                        </div>

                    </div>

                    <div class="bottom-meta-wrap"></div>
                    <!--/bottom-meta-wrap-->
                </div>
                <!--/inner-wrap-->
            </div>
        </div>
        <!--/ajax-content-wrap-->

        </div>
        <!--/ocm-wrap-->
    </div>
    <!--/ocm-effect-wrap-->


    <!-- Modal de Contacto -->
    <div class="contact-modal-overlay" id="contactModal">
        <div class="contact-modal">
            <div class="contact-modal-header">
                <h3><i class="fa-regular fa-pen-to-square"></i> <span style="color: #28ebe3 !important;margin-left: 10px;">¡Tracemos algo maravilloso juntos! </span></h3>
                <button type="button" class="contact-modal-close" id="closeModalBtn">&times;</button>
            </div>
            <div class="contact-modal-body">
                <div id="contactFormContainer">
                    <form id="contactForm">
                        <!-- Honeypot anti-spam -->
                        <div style="display: none;">
                            <input type="text" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="contactName" class="form-label">Nombre *</label>
                            <input type="text" class="form-control" id="contactName" name="name" required
                                placeholder="Tu nombre completo">
                        </div>

                        <div class="form-group">
                            <label for="contactEmail" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="contactEmail" name="email" required
                                placeholder="tu@email.com">
                        </div>

                        <div class="form-group">
                            <label for="contactPhone" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="contactPhone" name="phone"
                                placeholder="+52 123 456 7890">
                        </div>

                        <div class="form-group">
                            <label for="contactMessage" class="form-label">Mensaje *</label>
                            <textarea class="form-control" id="contactMessage" name="message" rows="4" required
                                placeholder="Cuéntanos sobre tu proyecto..."></textarea>
                        </div>
                    </form>
                </div>

                <!-- Respuesta AJAX -->
                <div id="contactResponse" style="display: none;"></div>
            </div>
            <div class="contact-modal-footer">
                <button type="button" class="btn-cancel" id="cancelModalBtn">Cerrar</button>
                <button type="button" class="btn-submit" id="sendContactBtn">
                    <i class="fa-regular fa-envelope"></i><span class="btn-text" style="margin-left: 10px;"> Enviar</span>
                    <span class="btn-loading" style="display: none;">
                        <span class="spinner"></span> Enviando...
                    </span>
                </button>
            </div>
        </div>
    </div>

    <!-- CSS del Modal -->
    <style>
    /* Modal Overlay */
    .contact-modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 999999;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .contact-modal-overlay.show {
        display: flex;
        opacity: 1;
    }

    /* Modal Container */
    .contact-modal {
        background: #1a1a1a;
        color: #fff;
        border-radius: 20px;
        width: 90%;
        max-width: 550px;
        max-height: 90vh;
        overflow-y: auto;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        transform: scale(0.9) translateY(20px);
        transition: transform 0.3s ease;
    }

    .contact-modal-overlay.show .contact-modal {
        transform: scale(1) translateY(0);
    }

    /* Modal Header */
    .contact-modal-header {
        padding: 30px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .contact-modal-header h3 {
        margin: 0;
        font-size: 1.5rem;
        font-weight: 600;
    }

    .contact-modal-close {
        background: none;
        border: none;
        font-size: 32px;
        color: rgba(255, 255, 255, 0.6);
        cursor: pointer;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.2s ease;
    }

    .contact-modal-close:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
    }

    /* Modal Body */
    .contact-modal-body {
        padding: 30px;
    }

    /* Form Styles */
    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.9);
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 14px 18px;
        font-size: 16px;
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 25px;
        color: #fff;
        transition: all 0.3s ease;
        font-family: inherit;
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.3);
        outline: 0;
    }

    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 120px;
        border-radius: 20px;
    }

    /* Modal Footer */
    .contact-modal-footer {
        padding: 20px 30px 30px;
        display: flex;
        gap: 12px;
        justify-content: flex-end;
    }

    /* Buttons */
    .btn-cancel,
    .btn-submit {
        padding: 14px 28px;
        border: none;
        border-radius: 25px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: inherit;
    }

    .btn-cancel {
        background: rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.8);
    }

    .btn-cancel:hover {
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
    }

    .btn-submit {
        background: #28ebe3;
        color: #1a1a1a;
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(255, 255, 255, 0.2);
    }

    .btn-submit:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }

    /* Spinner */
    .spinner {
        display: inline-block;
        width: 14px;
        height: 14px;
        border: 2px solid rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        border-top-color: #1a1a1a;
        animation: spin 0.8s linear infinite;
        margin-right: 8px;
        vertical-align: middle;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    /* Alert Styles */
    .alert {
        padding: 16px 20px;
        border-radius: 12px;
        margin-bottom: 0;
        font-size: 15px;
    }

    .alert-success {
        background: rgba(72, 187, 120, 0.2);
        border: 1px solid rgba(72, 187, 120, 0.3);
        color: #68D391;
    }

    .alert-danger {
        background: rgba(245, 101, 101, 0.2);
        border: 1px solid rgba(245, 101, 101, 0.3);
        color: #FC8181;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .contact-modal {
            width: 95%;
            margin: 20px;
        }

        .contact-modal-header,
        .contact-modal-body,
        .contact-modal-footer {
            padding: 20px;
        }

        .contact-modal-header h3 {
            font-size: 1.25rem;
        }
    }

    @media only screen and (min-width: 1px) and (max-width: 999px) {
    #header-outer #top .col.span_3 #logo {
        display: contents;
    }
}
    </style>


    <?= $this->Html->script('ui/jquery.minf43b.js') ?>
    <?= $this->Html->script('ui/jquery-migrate.min5589.js') ?>

    <!-- inject:js -->
    <?= $this->Html->script('ui/build/third-party/jquery.easing.min4e44.js') ?>
    <?= $this->Html->script('ui/build/third-party/jquery.mousewheel.mina9d5.js') ?>
    <?= $this->Html->script('ui/build/priority0583.js') ?>
    <?= $this->Html->script('ui/build/third-party/transit.mine2dc.js') ?>
    <?= $this->Html->script('ui/build/third-party/waypoints05da.js') ?>
    <?= $this->Html->script('ui/portafolio/third-party/imagesLoaded.mineda1.js') ?>
    <?= $this->Html->script('ui/build/third-party/hoverintent.min3aa8.js') ?>
    <?= $this->Html->script('ui/build/third-party/jquery.fancybox0583.js') ?>
    <?= $this->Html->script('ui/build/third-party/anime.min8686.js') ?>
    <?= $this->Html->script('ui/build/elements/nectar-text-inline-images0583.js') ?>
    <?= $this->Html->script('ui/build/third-party/superfish0322.js') ?>
    <?= $this->Html->script('ui/build/init0583.js') ?>
    <?= $this->Html->script('ui/build/elements/nectar-fit-text0583.js') ?>
    <?= $this->Html->script('ui/build/nectar-smooth-scroll0583.js') ?>
    <?= $this->Html->script('ui/build/third-party/stickkit5152.js') ?>
    <?= $this->Html->script('ui/touchswipe.minddcb') ?>
    <?= $this->Html->script('ui/js_composer_front.min3787') ?>


    <script data-pagespeed-no-defer="" data-nowprocket="" data-wpacu-skip="" data-no-optimize="" type="text/javascript"
        src="webroot/js/ui/build/nectar-delay-javascript0583.js?ver=17.9.962" id="salient-delay-js-js"></script>

    <script type="text/javascript" id="nectar-frontend-js-extra">
    /* <![CDATA[ */
    var nectarOptions = {
        "delay_js": "1",
        "smooth_scroll": "true",
        "smooth_scroll_strength": "51",
        "quick_search": "false",
        "react_compat": "disabled",
        "header_entrance": "true",
        "body_border_func": "default",
        "disable_box_roll_mobile": "false",
        "body_border_mobile": "0",
        "dropdown_hover_intent": "default",
        "simplify_ocm_mobile": "0",
        "mobile_header_format": "default",
        "ocm_btn_position": "default",
        "left_header_dropdown_func": "default",
        "ajax_add_to_cart": "0",
        "ocm_remove_ext_menu_items": "remove_images",
        "woo_product_filter_toggle": "0",
        "woo_sidebar_toggles": "true",
        "woo_sticky_sidebar": "0",
        "woo_minimal_product_hover": "default",
        "woo_minimal_product_effect": "default",
        "woo_related_upsell_carousel": "false",
        "woo_product_variable_select": "default",
        "woo_using_cart_addons": "false",
        "view_transitions_effect": "reveal-from-bottom"
    };
    var nectar_front_i18n = {
        "menu": "Menu",
        "next": "Next",
        "previous": "Previous",
        "close": "Close"
    };
    /* ]]> */
    </script>


    <!--Smoth scroll -->
    <script>
    $('a.smoth-scroll').on("click", function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 1
        }, 1000);
        e.preventDefault();
    });
    </script>


    <script>
    // Funcionalidad del botón flotante fijo
    const fixedBackToTop = document.getElementById('fixed-btn-up');

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            fixedBackToTop.classList.add('show');
        } else {
            fixedBackToTop.classList.remove('show');
        }
    });

    fixedBackToTop.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    </script>

    <!-- JavaScript del Modal -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctaBtns = document.querySelectorAll('.open-contact-modal');
        const modal = document.getElementById('contactModal');
        const closeBtn = document.getElementById('closeModalBtn');
        const cancelBtn = document.getElementById('cancelModalBtn');
        const form = document.getElementById('contactForm');
        const formContainer = document.getElementById('contactFormContainer');
        const responseContainer = document.getElementById('contactResponse');
        const sendBtn = document.getElementById('sendContactBtn');

        if (ctaBtns.length === 0) {
            console.error('Botones CTA no encontrados');
            return;
        }

        // Abrir modal
        function openModal(e) {
            e.preventDefault();
            e.stopPropagation(); // ← AGREGADO: Detiene la propagación del evento
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            setTimeout(() => modal.classList.add('show'), 10);
            return false; // ← AGREGADO: Asegura que no se ejecute el href
        }

        // Cerrar modal
        function closeModal() {
            modal.classList.remove('show');
            setTimeout(() => {
                modal.style.display = 'none';
                document.body.style.overflow = '';
                resetForm();
            }, 300);
        }

        // Reset form
        function resetForm() {
            form.reset();
            formContainer.style.display = 'block';
            responseContainer.style.display = 'none';
            sendBtn.querySelector('.btn-text').style.display = 'inline';
            sendBtn.querySelector('.btn-loading').style.display = 'none';
            sendBtn.disabled = false;
        }

        // Event listeners para TODOS los botones con captura
        ctaBtns.forEach(btn => {
            btn.addEventListener('click', openModal, true); // ← CAMBIADO: agregado true para captura
        });

        closeBtn.addEventListener('click', closeModal);
        cancelBtn.addEventListener('click', closeModal);

        // Cerrar al hacer clic fuera
        modal.addEventListener('click', function(e) {
            if (e.target === modal) closeModal();
        });

        // Cerrar con ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('show')) {
                closeModal();
            }
        });

        // Enviar formulario
        sendBtn.addEventListener('click', function() {
            const name = document.getElementById('contactName').value.trim();
            const email = document.getElementById('contactEmail').value.trim();
            const message = document.getElementById('contactMessage').value.trim();

            if (!name || !email || !message) {
                alert('Por favor completa todos los campos obligatorios.');
                return;
            }

            // Loading state
            sendBtn.querySelector('.btn-text').style.display = 'none';
            sendBtn.querySelector('.btn-loading').style.display = 'inline';
            sendBtn.disabled = true;

            const formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('phone', document.getElementById('contactPhone').value);
            formData.append('message', message);

            const csrfToken = document.querySelector('meta[name="csrfToken"]').getAttribute('content');

            fetch('/leads/add', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-Token': csrfToken
                    },
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    formContainer.style.display = 'none';
                    responseContainer.style.display = 'block';
                    responseContainer.innerHTML = data;

                    sendBtn.querySelector('.btn-text').style.display = 'inline';
                    sendBtn.querySelector('.btn-loading').style.display = 'none';
                    sendBtn.disabled = false;

                    if (data.includes('alert-success')) {
                        setTimeout(closeModal, 3000);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    responseContainer.innerHTML =
                        '<div class="alert alert-danger">Error de conexión. Intenta nuevamente.</div>';
                    responseContainer.style.display = 'block';
                    formContainer.style.display = 'none';

                    sendBtn.querySelector('.btn-text').style.display = 'inline';
                    sendBtn.querySelector('.btn-loading').style.display = 'none';
                    sendBtn.disabled = false;
                });
        });
    });
    </script>
<script>
// Mostrar toast si existe mensaje en sesión
<?php 
$toast = $this->request->getSession()->read('toast');
if ($toast): 
    $this->request->getSession()->delete('toast');
?>
    showToast('<?= h($toast['message']) ?>', '<?= h($toast['type']) ?>');
<?php endif; ?>

function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    toast.textContent = message;
    toast.className = 'toast-notification ' + type;
    
    setTimeout(() => toast.classList.add('show'), 100);
    setTimeout(() => toast.classList.remove('show'), 3000);
}
</script>


</body>

</html>
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
<html lang="es">

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
        'ui/build/bannerparallax',
        'ui/build/footer-style',
        'ui/build/style-non-critical0583',
        'ui/build/plugins/jquery.fancybox3d36',
        'ui/build/plugins/lenis0583',
        'ui/build/off-canvas/core0583',
        'ui/build/off-canvas/fullscreen-legacy0583',
    ]) ?>

    <link rel='stylesheet' id='nectar_default_font_open_sans-css'
        href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700&amp;subset=latin%2Clatin-ext&amp;display=swap'
        type='text/css' media='all' />

    <link rel='stylesheet' id='redux-google-fonts-salient_redux-css'
        href='https://fonts.googleapis.com/css?family=Instrument+Sans%3A400%2C700%7CInstrument+Serif%3A400%7CPoppins%3A500%7CSource+Serif+Pro%3A400&amp;display=swap&amp;ver=6.8.2'
        type='text/css' media='all' />

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
                                <a id="logo" href="" data-supplied-ml-starting-dark="false"
                                    data-supplied-ml-starting="false" data-supplied-ml="false" class="no-image">
                                    Stefsketch</a>
                            </div>
                            <!--/span_3-->

                            <div class="col span_9 col_last">
                                <div class="nectar-mobile-only mobile-header">
                                    <div class="inner">
                                        <ul id="menu-quantum-portfolio" class="sf-menu">
                                            <li id="menu-item-364"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-btn-style-button_extra-color-1 menu-item-364">
                                                <a href=""><span class="menu-title-text">Let&#8217;s Talk</span></a>
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
                                            <a href="index.html" aria-current="page"><span class="menu-title-text"><span
                                                        class="nectar-text-reveal-button"><span
                                                            class="nectar-text-reveal-button__text"
                                                            data-text="Work">Work</span></span></span></a>
                                        </li>
                                        <li id="menu-item-236"
                                            class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-236">
                                            <a href="about/index.html"><span class="menu-title-text"><span
                                                        class="nectar-text-reveal-button"><span
                                                            class="nectar-text-reveal-button__text"
                                                            data-text="About">About</span></span></span></a>
                                        </li>
                                        <li id="menu-item-425"
                                            class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-425">
                                            <a target="_blank" rel="noopener" href=""><span
                                                    class="menu-title-text"><span
                                                        class="nectar-text-reveal-button"><span
                                                            class="nectar-text-reveal-button__text"
                                                            data-text="Demos">Demos</span></span></span></a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-btn-style-button_extra-color-1 menu-item-hover-text-reveal nectar-regular-menu-item menu-item-364">
                                            <a href=""><span class="menu-title-text"><span
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
                                <div class="vc_column-inner">
                                    <div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none">
                                        <div class="column-bg-overlay" style="opacity: 1; background-color: #ede8e4;">
                                        </div>
                                    </div>
                                    <div class="wpb_wrapper">
                                        <div class="divider-wrap" data-alignment="default">
                                            <div style="height: 4vw;" class="divider"></div>
                                        </div>
                                        <div id="fws_68d45a3a478b5" data-midnight="" data-column-margin="default"
                                            class="wpb_row vc_row-fluid vc_row inner_row">
                                            <div class="row-bg-wrap">
                                                <div class="row-bg"></div>
                                            </div>
                                            <div class="row_col_wrap_12_inner col span_12  left">
                                                <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding column_element_direction_desktop_horizontal force-desktop-text-align-center column_element_direction_tablet_horizontal column_element_direction_phone_horizontal el_spacing_10px inherit_tablet inherit_phone "
                                                    data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                    data-bg-opacity="1" data-animation="" data-delay="0">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="nectar_icon_wrap  nectar-pulsate"
                                                                data-style="default" data-padding="0px"
                                                                data-color="accent-color">
                                                                <div class="nectar_icon icon_color_custom_55c91c "><i
                                                                        style="font-size: 8px; line-height: 8px; height: 8px; width: 8px;"
                                                                        class=""></i>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="nectar-responsive-text nectar-link-underline-effect">
                                                                <p>Available for Work</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                                <h2><span class="link_wrap"><a class="link_text"
                                                                            role="button" href=""><span
                                                                                class="text nectar-text-reveal-button__text"
                                                                                data-text="¡Hablemos y hagámoslo realidad!">¿Tienes un proyecto en mente?</span></a></span></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="fws_68d45a3a48164" data-midnight="" data-column-margin="default"
                                            class="wpb_row vc_row-fluid vc_row inner_row">
                                            <div class="row-bg-wrap">
                                                <div class="row-bg"></div>
                                            </div>
                                            <div class="row_col_wrap_12_inner col span_12  left">
                                                <div class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding column_element_direction_desktop_horizontal force-desktop-text-align-center column_element_direction_tablet_horizontal el_spacing_10px inherit_tablet inherit_phone "
                                                    data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                    data-bg-opacity="1" data-animation="" data-delay="0">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="nectar-cta  alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit "
                                                                data-color="default" data-using-bg="false"
                                                                data-display="block" data-style="underline"
                                                                data-alignment="left" data-text-color="std"
                                                                style="margin-right: 10px; margin-left: 10px; --nectar-button-color: var(--nectar-default); --nectar-icon-gap: 10px; ">
                                                                <p> <span class="link_wrap"><a class="link_text"
                                                                            role="button" href="">Behance</a></span></p>
                                                            </div>
                                                            <div class="nectar-cta  alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit "
                                                                data-color="default" data-using-bg="false"
                                                                data-display="block" data-style="underline"
                                                                data-alignment="left" data-text-color="std"
                                                                style="margin-right: 10px; margin-left: 10px; --nectar-button-color: var(--nectar-default); --nectar-icon-gap: 10px; ">
                                                                <p> <span class="link_wrap"><a class="link_text"
                                                                            role="button" href="">Dribbble</a></span>
                                                                </p>
                                                            </div>
                                                            <div class="nectar-cta  alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit "
                                                                data-color="default" data-using-bg="false"
                                                                data-display="block" data-style="underline"
                                                                data-alignment="left" data-text-color="std"
                                                                style="margin-right: 10px; margin-left: 10px; --nectar-button-color: var(--nectar-default); --nectar-icon-gap: 10px; ">
                                                                <p> <span class="link_wrap"><a class="link_text"
                                                                            role="button" href="">Instagram</a></span>
                                                                </p>
                                                            </div>
                                                            <div class="nectar-cta  alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit "
                                                                data-color="default" data-using-bg="false"
                                                                data-display="block" data-style="underline"
                                                                data-alignment="left" data-text-color="std"
                                                                style="margin-right: 10px; margin-left: 10px; --nectar-button-color: var(--nectar-default); --nectar-icon-gap: 10px; ">
                                                                <p> <span class="link_wrap"><a class="link_text"
                                                                            role="button" href="">LinkedIn</a></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider-wrap" data-alignment="default">
                                            <div style="height: 3vw;" class="divider"></div>
                                        </div>
                                        <div id="fws_68d45a3a48572" data-midnight="" data-column-margin="10px"
                                            class="wpb_row vc_row-fluid vc_row inner_row">
                                            <div class="row-bg-wrap">
                                                <div class="row-bg"></div>
                                            </div>
                                            <div class="row_col_wrap_12_inner col span_12  left">
                                                <div class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column no-extra-padding force-tablet-text-align-center force-phone-text-align-center inherit_tablet inherit_phone "
                                                    data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                    data-bg-opacity="1" data-animation="" data-delay="0">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="nectar-responsive-text font_line_height_1px nectar-link-underline-effect">
                                                                <h6>© <span class="nectar-current-year">2025</span>. All
                                                                    rights reserved.</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column no-extra-padding force-desktop-text-align-right force-tablet-text-align-center force-phone-text-align-center inherit_tablet inherit_phone "
                                                    data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
                                                    data-bg-opacity="1" data-animation="" data-delay="0">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="nectar-responsive-text font_line_height_1px nectar-link-underline-effect">
                                                                <h6>Made by <a href="">DEMO</a></h6>
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
            <div id="footer-outer" data-midnight="light" data-cols="4" data-custom-color="false"
                data-disable-copyright="true" data-matching-section-color="true" data-copyright-line="false"
                data-using-bg-img="false" data-bg-img-overlay="0.8" data-full-width="false"
                data-using-widget-area="false" data-link-hover="default">


            </div>
            <!--/footer-outer-->


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
                                    <a href="index.html" aria-current="page">Work</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-236"><a
                                        href="about/index.html">About</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-425"><a
                                        target="_blank" href="">Demos</a></li>

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
    </div>
    <!--/ocm-effect-wrap-->

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
    <?= $this->Html->script('ui/build/third-party/superfish0322.js') ?>
    <?= $this->Html->script('ui/build/init0583.js') ?>
    <?= $this->Html->script('ui/build/elements/nectar-fit-text0583.js') ?>
    <?= $this->Html->script('ui/build/nectar-smooth-scroll0583.js') ?>
    <?= $this->Html->script('ui/touchswipe.minddcb') ?>
    <?= $this->Html->script('ui/js_composer_front.min3787') ?>
    <?= $this->Html->script('ui/build/nectar-delay-javascript0583.js') ?>


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



</body>

</html>
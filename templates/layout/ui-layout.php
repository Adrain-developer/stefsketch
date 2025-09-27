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
                                            <li 
                                                class=" menu-item-btn-style-button_extra-color-1 menu-item-364">
                                                <a href="javascript:void(0);" class="open-contact-modal"><span class="menu-title-text">Let&#8217;s Talk</span></a>
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
                                            <a href="javascript:void(0);" class="open-contact-modal"><span class="menu-title-text"><span
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
                                                                <h2><span class="link_wrap"><a class="link_text open-contact-modal" role="button" href="#"><span
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


    <!-- Modal de Contacto -->
<div class="contact-modal-overlay" id="contactModal">
    <div class="contact-modal">
        <div class="contact-modal-header">
            <h3>💬 ¡Hablemos de tu proyecto!</h3>
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
                        <input type="text" class="form-control" id="contactName" name="name" 
                            required placeholder="Tu nombre completo">
                    </div>
                    
                    <div class="form-group">
                        <label for="contactEmail" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="contactEmail" name="email" 
                            required placeholder="tu@email.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="contactPhone" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="contactPhone" name="phone" 
                            placeholder="+52 123 456 7890">
                    </div>
                    
                    <div class="form-group">
                        <label for="contactMessage" class="form-label">Mensaje *</label>
                        <textarea class="form-control" id="contactMessage" name="message" rows="4" 
                            required placeholder="Cuéntanos sobre tu proyecto..."></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Respuesta AJAX -->
            <div id="contactResponse" style="display: none;"></div>
        </div>
        <div class="contact-modal-footer">
            <button type="button" class="btn-cancel" id="cancelModalBtn">Cerrar</button>
            <button type="button" class="btn-submit" id="sendContactBtn">
                <span class="btn-text">📨 Enviar Mensaje</span>
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
    background: #fff;
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
    to { transform: rotate(360deg); }
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
    <?= $this->Html->script('ui/build/third-party/superfish0322.js') ?>
    <?= $this->Html->script('ui/build/init0583.js') ?>
    <?= $this->Html->script('ui/build/elements/nectar-fit-text0583.js') ?>
    <?= $this->Html->script('ui/build/nectar-smooth-scroll0583.js') ?>
    <?= $this->Html->script('ui/touchswipe.minddcb') ?>
    <?= $this->Html->script('ui/js_composer_front.min3787') ?>
    <?= $this->Html->script('ui/build/nectar-delay-javascript0583.js') ?>

 <script type="text/javascript" id="nectar-frontend-js-extra">
        /* <![CDATA[ */
        var nectarOptions = { "delay_js": "1", "smooth_scroll": "true", "smooth_scroll_strength": "51", "quick_search": "false", "react_compat": "disabled", "header_entrance": "true", "body_border_func": "default", "disable_box_roll_mobile": "false", "body_border_mobile": "0", "dropdown_hover_intent": "default", "simplify_ocm_mobile": "0", "mobile_header_format": "default", "ocm_btn_position": "default", "left_header_dropdown_func": "default", "ajax_add_to_cart": "0", "ocm_remove_ext_menu_items": "remove_images", "woo_product_filter_toggle": "0", "woo_sidebar_toggles": "true", "woo_sticky_sidebar": "0", "woo_minimal_product_hover": "default", "woo_minimal_product_effect": "default", "woo_related_upsell_carousel": "false", "woo_product_variable_select": "default", "woo_using_cart_addons": "false", "view_transitions_effect": "reveal-from-bottom" };
        var nectar_front_i18n = { "menu": "Menu", "next": "Next", "previous": "Previous", "close": "Close" };
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
            responseContainer.innerHTML = '<div class="alert alert-danger">Error de conexión. Intenta nuevamente.</div>';
            responseContainer.style.display = 'block';
            formContainer.style.display = 'none';
            
            sendBtn.querySelector('.btn-text').style.display = 'inline';
            sendBtn.querySelector('.btn-loading').style.display = 'none';
            sendBtn.disabled = false;
        });
    });
});
</script>



</body>

</html>
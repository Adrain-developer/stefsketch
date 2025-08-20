
<?= $this->Html->css(['bodaNB'.'.css?v=10-24-009']) ?>
<?= $this->Html->css(['infVersiones']) ?>
<?= $this->Html->css(['vipaccess'.'.css?v=10-24-011']) ?>

<?php $this->assign('title', 'XV Zafiro'); ?>
<?php
// Establecer la meta imagen para Open Graph
$this->Html->meta(
    ['property' => 'og:image', 'content' => 'https://mieventoapp.com/webroot/img/BannerMiniaturaxvs.jpg'],
    null,
    ['block' => true]
);
?>
<style>
    .swiper-slide {
width: 180px;
}
 section.modelos .modelo h4 {
    margin-bottom: 5px;
    color: #ad8bc0;
}
.texttitslider{
  font-weight: 700;
  width: 100%;
  display: inline-block;
  margin-bottom: 5px;
  font-size: 23px;
  text-align: center;
  color: #f8bdc0;
}
section.portada-vipaccess .bottom-portada-vipaccess {
  background: linear-gradient(283deg, #f4fef999, #8aa5ba75);
  border-radius: 0% 0% 50% 50% / 25% 25% 8% 8%;
  height: 90%;
}
.banner-call-to-action:before {
    background: linear-gradient(135deg, #8673a1 0%, #ebb0f3 25%, #8673a1 75%, #ebb0f3 100%);
}
.mtop3060 {
    margin-top: -200px !important;
}
section.portada-vipaccess h2 {
    font-size: 30px !important;
}
section.portada-vipaccess h4 {
    font-size: 30px !important;
}
section.portada-vipaccess .info-portada-vipaccess .box-info {
    padding-top: 25%;
}
@media only screen and (max-width: 767px) {
    .bannimgdemoweb {
        width: 50%;
        height: auto;
    }
    section.portada-vipaccess .bottom-portada-vipaccess{
        height:83%;
    }
}
  </style>

<section class="portada-vipaccess">
  <div class="rellax img-parallax parallax-element" data-rellax-speed="-7">
    <img style="opacity: 0.8;" src="https://mieventoapp.com/webroot/img/zafiroimgfondoparallax.webp" alt="xvs background">
</div>
<!-- Contenido portada -->
<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="info-portada-vipaccess d-flex justify-content-between align-items-center">

        <!-- Info -->
        <div class="box-info">
          <h2>Invitación Zafiro<br>
          para tus XV</h2>
          <h4 class="titvipaccess">
          Ve lo que incluye 👇🏻</h4>
          <div>
          <ul class="features" id="listaCaracteristicas">
              <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Nombre Festejada </li>
              <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Cuenta Regresiva </li>
              <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Pensamiento </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Mensaje de inicio y animación de sobre</li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Enlace a mapas con GPS (misa y recepción)</li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Foto Principal </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Confirmación de asistencia por llamada y WhatsApp</li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Código de vestimenta </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Padres, padrinos, damas de honor y chambelanes </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Música </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Mesas de regalos (Fisicas y Digitales) </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Álbum (hasta 5 fotos) </li>
          </ul>
          <button id="botonMostrarMas">Mostrar</button>
          </div>
          <div class="row">
          <a id="btnPortadaModelos" class="boton boton-secundarioxvs smoth-scroll" href="#modelos" style="width:50%">
              <i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
          <a class="boton boton-primario" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosZafiro%0A%0AHola 👋🏻%0ADeseo una invitación del paquete *Zafiro* 💎 para XV años 🥳" style="width: 50%;">
          <i class="fa fa-whatsapp"></i> 
            Adquirir ahora
          </a>
          </div>
        </div>
        <!-- Ilustracion dispositivos -->
        <div class="box-dispositivos" style="text-align: center;">
        <a class="smoth-scroll" href="#modelos">
          <picture>
            <img src="../img/bannerxvzafiro.webp" alt="mieventoapp" class="bannimgdemoweb" style="padding-top: 80px;margin-bottom: 100px;">
          </picture>
        </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Link a Ver demo -->
</div>
</div>
<!-- Curva divisoria portada -->
<div class="bottom-portada-vipaccess"></div>

</section>

<!-- Caracteristicas -->
<!-- Carrusel -->
   <section id="modelos" class="modelos mtop3060">
    <div class="container">

    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">Catálogo Zafiro</h2>
          <p class="sub-title" style="color: #676767;">Busca el tema ideal para tus XV 👇🏻</p>
        </div>
      </div>

      <div class="row modelos-list no-gutters">

<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Márfi Rosaé</h4>
        <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=681" target="_blank">
          <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=505.webp" alt="MieventoApp" loading="lazy">
        </a>
        <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
            <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=681" target="_blank">
            </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
        </div>
        <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=681%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Márfi Rosaé* del paquete *Zafiro* para *XV años*!🥳" 
              style="text-align: center; width: 100%;">
              <i class="fa fa-whatsapp"></i> 
              Solicitar
        </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Noiré</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=682" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=485.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=682" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=682%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Noiré* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Lilunzel</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=683" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=615.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=683" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=683%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Lilunzel* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">RosReina</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=684" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=494.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=684" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=684%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *RosReina* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Noir Rose</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=685" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=497.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=685" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=685%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Noir Rose* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Sky Butterfly</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=686" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=478.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=686" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=686%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Sky Butterfly* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">MarmGold</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=687" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=502.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=687" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=687%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Marmol & Gold* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Corona Rosa</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=688" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=490.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=688" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=688%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Corona Rosa* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Azul Plata</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=689" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=501.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=689" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=689%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Azul Plata* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Glitter Melón</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=690" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=481.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=690" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=690%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Glitter Melón* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Gold Roses</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=691" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=150.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=691" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=691%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Gold Roses* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Greenfly</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=692" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=500.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=692" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=692%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Greenfly* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Rosa y Azul</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=693" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=499.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=693" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=693%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Rosa y Azul* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Purplefly</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=694" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=492.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=694" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=694%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Purplefly* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Pink by</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=695" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=154.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=695" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=695%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Pink by* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Royal Blue</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=696" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=473.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=696" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=696%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Royal Blue* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Esmeralda</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=697" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=506.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=697" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=697%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Esmeralda* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Beige</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=698" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=488.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=698" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=698%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Beige* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Blue Spring</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=699" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=152.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=699" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=699%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Blue Spring* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Marc FL</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=700" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=498.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=700" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=700%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Marc FL* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Nature Paint</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=701" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=153.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=701" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=701%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Nature Paint* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Purple Touch</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=702" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=148.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=702" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=702%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Purple Touch* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Eiffel Dorada</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=703" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=486.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=703" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=703%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Eiffel Dorada* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Cenicienta Silver</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=704" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=496.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=704" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=704%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Cenicienta Silver* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Bella & Bestia LA</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=705" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=175.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=705" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=705%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Bella y Bestia LA* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Eiffel Channel</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=706" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=173.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=706" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=706%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Eiffel Channel* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Vaquerita</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=707" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=507.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=707" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=707%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Vaquerita* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Victoriana</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=708" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=520.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=708" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=708%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Victoriana* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Rosa GLD</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=709" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=480.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=709" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=709%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Rosa GLD* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Blue & Gold</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=710" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=487.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=710" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=710%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Blue y Gold* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Melón BK</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=711" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=504v2.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=711" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=711%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Melón BK* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Mariposas & Flores</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=712" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=491.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=712" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=712%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Mariposas y Flores* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Pink Butterfly</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=713" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=155.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=713" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=713%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Pink Butterfly* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Esmeralda y Plata</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=714" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=475.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=714" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=714%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Esmeralda y Plata* del paquete *Zafiro* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
    </div>

<!--fin demo-->
</div>
<!--FIN DEMOS-->
      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">

        <p style="color: #676767;">
          Escríbenos y comencemos.
        </p>

        <!-- Dropdown Contacto -->
        <div id="dropdownMenuContacto" class="dropdown">
        <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com//invitaciones/misxv/demosDiamante%0A%0AHola 👋🏻%0ADeseo una invitación *ZAFIRO* 💎 para XV años🥳" style="margin-bottom: 15px;">
                  <i class="fa fa-whatsapp"></i> 
                Adquirir ahora 
               </a>
             
            </div>
      </div>

    </div>   
</section>

  <section style="background-color: #ffffff;">
    <div class="container-fluid">
      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title">Más paquetes</h2>
            <p class="sub-title" style="color: #676767;">Que se ajustan a tu evento</p>
          </div>
        </div>

        <div class="row">

        <div class="col-sm-6">
            <div class="card text-center" style="background: linear-gradient(-45deg, #ffff0061, #eb8f19a8 50%, #ff5e476b);">
              <div class="title">
                <h2>Paquete<br>Ámbar</h2>
                <img style="width: 30%;border-radius: 50%; text-align: center;line-height: 100px;-webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);margin-bottom: 5px;" 
                src="https://mieventoapp.com/webroot/img/AmbarIcono.png" loading="lazy">
              </div>
              <div class="price">
                <!--<h4><sup>$</sup>599</h4>-->
              </div>
              <div class="option">
                <ul>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Nombre Festejada </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Cuenta Regresiva </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Pensamiento </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Dirección misa y recepción </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Botón a mapas </li>
                </ul>
              </div>
              <a class="boton-secundarioxvs" href="https://mieventoapp.com/misxv/demosAmbar"><i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosAmbar%0A%0AHola 👋🏻%0ADeseo una Invitación *Ámbar* para XV años 🥳"><i class="fa fa-whatsapp"></i>  Solicitar</a>
            </div>
          </div>
          <!-- END Col one -->

          <div class="col-sm-6">
            <div class="card text-center" style="background: linear-gradient(283deg, #f4fef9, #8aa5ba);">
              <div class="title">
                <h2>Paquete<br>Diamante</h2>
                <img style="width: 30%;border-radius: 50%; text-align: center;line-height: 100px;-webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);margin-bottom: 5px;" 
                src="https://mieventoapp.com/webroot/img/DiamanteIconoDOS.png" loading="lazy" alt="imgDiamante">
                <!--<i class="fa fa-diamond" aria-hidden="true"></i>-->
              </div>
              <div class="price">
                <!--<h4><sup>$</sup>899</h4>-->
              </div>
              <div class="option">
                <ul>
                  <li style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Todo lo que incluye el paquete <strong>Zafiro</strong>, más:</li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Mensaje de inicio y animación de sobre<span class="etiqueta-new"></span></li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Foto principal<span class="etiqueta-new"></span></li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Música automática<span class="etiqueta-new"></span></li> 
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Álbum (hasta 15 fotos)<span class="etiqueta-new"></span></li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Carrusel padrinos<span class="etiqueta-new"></span></li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Lista Damas de Honor<span class="etiqueta-new"></span></li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Itinerario</li>                  
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Menú</li>                  
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Sugerencia de hospedaje (hasta 3)</li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Hashtag Instagram para fotos</li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Animaciones<span class="etiqueta-new"></span></li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Stikers de temática<span class="etiqueta-new"></span></li>               
                </ul>
              </div>              
              <a class="boton-secundarioxvs" href="https://mieventoapp.com/misxv/demosDiamante"><i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosDiamante%0A%0AHola 👋🏻,%0ADeseo una Invitación *Diamante* 💎 para XV años 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col two -->
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #ffffff;">
    <div class="container-fluid">
      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title">Boletos QR</h2>
            <p class="sub-title" style="color: #676767;">Glamour y seguridad para el acceso a tu evento</p>
          </div>
        </div>
  <aside class="responsive-banner col-12 ">
        <a href="https://mieventoapp.com/invitaciones/vipaccess" target="_blank">
          <img class="imgBannerrsvp" src="https://mieventoapp.com/webroot/img/bannerVIPACCESSdos.gif" loading="lazy" alt="imgQR">
          <img class="imgBannerrsvomovil" src="https://mieventoapp.com/webroot/img/bannerVIPACCESSmovil.gif" loading="lazy" alt="imgQR">
        </a>
          <div class="container-envelope">
          <div class="botones-modelo" style="text-align: center; margin-top: -46px;">
            <a class="boton boton-secundarioxvs" href="https://mieventoapp.com/invitaciones/vipaccess" target="_blank">
              Más información </a>
          </div>
          </div>
        </aside>
</div>
</div>
</section>

<script>
  var rellax = new Rellax('.rellax');
</script>


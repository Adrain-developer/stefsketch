
<?= $this->Html->css(['bodaNB'.'.css?v=10-24-006']) ?>
<?= $this->Html->css(['infVersiones']) ?>
<?= $this->Html->css(['vipaccess'.'.css?v=10-24-006']) ?>
<?php $this->assign('title', 'XV Ámbar'); ?>
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
  color: #ad8bc0;
}
section.portada-vipaccess .bottom-portada-vipaccess {
  background: linear-gradient(-45deg, #ffff0061, #eb8f19a8 50%, #ff5e476b);
  border-radius: 0% 0% 50% 50% / 25% 25% 8% 8%;
  height: 75%;
}
.banner-call-to-action:before {
    background: linear-gradient(135deg, #8673a1 0%, #ebb0f3 25%, #8673a1 75%, #ebb0f3 100%);
}
.texttitslider{
  color: #a07c35;
  font-weight: 700;
  width: 100%;
  display: inline-block;
  margin-bottom: 5px;
  font-size: 23px;
  text-align: center;
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
.ulizquierda{
  text-align: left;
    font-size: 15px;
}
@media only screen and (max-width: 767px) {
    .bannimgdemoweb {
        width: 50%;
        height: auto;
    }
}
  </style>

<section class="portada-vipaccess">
  <div class="rellax img-parallax parallax-element" data-rellax-speed="-7">
    <img src="https://mieventoapp.com/webroot/img/ambarimgfondoparallaxCUATRO.webp" alt="Boda background">
</div>
<!-- Contenido portada -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="info-portada-vipaccess d-flex justify-content-between align-items-center">
        <!-- Info -->
        <div class="box-info" style="z-index: 9;">
        <div>
          <h2>Invitación Ámbar<br>
          para tus XV</h2>
          <h4 class="titvipaccess">
          ¿Que incluye? 👇🏻</h4>

          <ul class="features" id="listaCaracteristicas">
            <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Nombre de la festejada </li>
            <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Cuenta Regresiva </li>
            <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Pensamiento </li>
            <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Dirección misa y recepción </li>
            <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Botón a mapas </li>
          </ul>
          <button id="botonMostrarMas" style="width: 36%;padding: 12px 0px;">Mostrar</button>
          <a class="boton boton-primario" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosAmbar%0A%0AHola 👋🏻%0ADeseo una invitación del paquete *Ámbar* para XV años" 
          style="margin-bottom: 15px;padding: 10px 7px;margin-top: 20px;width: 60%;">
          <i class="fa fa-whatsapp"></i>
            Adquirir ahora
          </a>
          </div>
        </div>
        <!-- Ilustracion dispositivos -->
        <div class="box-dispositivos" style="text-align: center;">
          <picture>
            <img src="../img/minBannerxvs.webp" alt="mieventoapp" class="bannimgdemoweb">
          </picture>
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
   <!-- Modelos -->
   <section id="modelos" class="modelos mtop3060">
    <div class="container">

    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">Catálogo Ámbar</h2>
          <p class="sub-title" style="color: #676767;">Busca el tema ideal para tus XV 👇🏻</p>
        </div>
      </div>


      <div class="row modelos-list no-gutters">

      <div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Márfi Rosaé</h4>
        <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=646" target="_blank">
          <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=505.webp" alt="MieventoApp" loading="lazy">
        </a>
        <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
            <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=646" target="_blank">
            </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
        </div>
        <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=646%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Márfi Rosaé* del paquete Ámbar para *XV años* !🥳" 
              style="text-align: center; width: 100%;">
              <i class="fa fa-whatsapp"></i>
              Solicitar
        </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Noiré</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=647" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=485.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=647" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=647%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Noiré* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Lilunzel</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=648" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=615.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=648" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=648%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Lilunzel* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">RosReina</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=649" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=494.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=649" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=649%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *RosReina* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Noir Rose</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=650" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=497.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=650" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=650%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Noir Rose* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Sky Butterfly</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=651" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=478.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=651" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=651%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Sky Butterfly* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">MarmGold</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=652" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=502.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=652" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=652%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Marmol & Gold* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Corona Rosa</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=653" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=490.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=653" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=653%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Corona Rosa* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Azul Plata</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=654" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=501.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=654" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=654%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Azul Plata* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Glitter Melón</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=655" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=481.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=655" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=655%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Glitter Melón* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Gold Roses</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=656" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=150.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=656" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=656%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Gold Roses* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Greenfly</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=657" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=500.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=657" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=657%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Greenfly* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Rosa y Azul</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=658" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=499.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=658" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=658%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Rosa y Azul* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Purplefly</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=659" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=492.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=659" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=659%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Purplefly* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Pink by</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=660" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=154.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=660" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=660%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Pink by* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Royal Blue</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=661" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=473.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=661" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=661%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Royal Blue* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Esmeralda</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=662" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=506.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=662" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=662%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Esmeralda* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Beige</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=663" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=488.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=663" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=663%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Beige* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Blue Spring</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=664" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=152.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=664" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=664%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Blue Spring* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Marc FL</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=665" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=498.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=665" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=665%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Marc FL* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Nature Paint</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=666" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=153.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=666" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=666%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Nature Paint* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Purple Touch</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=667" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=148.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=667" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=667%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Purple Touch* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Eiffel Dorada</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=668" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=486.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=668" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=668%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Eiffel Dorada* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Cenicienta Silver</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=669" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=496.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=669" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=669%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Cenicienta Silver* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Bella & Bestia LA</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=670" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=175.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=670" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=670%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Bella y Bestia LA* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Eiffel Channel</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=671" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=173.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=671" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=671%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Eiffel Channel* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Vaquerita</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=673" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=507.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=673" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=673%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Vaquerita* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Victoriana</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=672" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=520.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=672" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=672%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Victoriana* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Rosa GLD</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=674" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=480.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=674" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=674%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Rosa GLD* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Blue & Gold</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=675" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=487.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=675" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=675%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Blue y Gold* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Melón BK</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=676" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=504v2.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=676" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=676%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Melón BK* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Mariposas & Flores</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=677" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=491.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=677" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=677%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Mariposas y Flores* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Pink Butterfly</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=678" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=155.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=678" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=678%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Pink Butterfly* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Esmeralda y Plata</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=679" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=475.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=679" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 10px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=679%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Esmeralda y Plata* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
</div>

<!--fin demos-->
      </div>
<!--FINDEMOS-->

      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">

        <p style="color: #676767;">
          Escríbenos y comencemos.
        </p>

        <!-- Dropdown Contacto -->
        <div id="dropdownMenuContacto" class="dropdown">
        <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com//invitaciones//misxv/demosAmbar%0A%0AHola 👋🏻%0ADeseo una invitación del paquete *Ámbar* para XV años" style="margin-bottom: 15px;">
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
            <div class="card text-center" style="background: linear-gradient(45deg, #5703ff66, #59f6f98a);">
            <!--<div class="rellax" data-rellax-speed="-5" data-rellax-percentage="0.5" data-rellax-zindex="5" style="opacity: 0.4;">
              <img src="https://mieventoapp.com//webroot/img/zafiroparallax.png" style="position: fixed;left: -6%;height: 35vh;margin-top: -26%;width: 65%;">
            </div>-->
              <div class="title">
                <h2>Paquete<br>Zafiro</h2>
                <img style="width: 30%;border-radius: 50%; text-align: center;line-height: 100px;-webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);margin-bottom: 5px;" 
                src="https://mieventoapp.com/webroot/img/ZafiroIcono.png" loading="lazy" alt="imgZafiro">
              </div>
              <div class="price">
                <!--<h4><sup>$</sup>899</h4>-->
              </div>
              <div class="option">
                <ul>
                  <li style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Todo lo que incluye el paquete ÁMBAR </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Música </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Mesas de regalo </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Álbum (5 fotos) </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Nuevo diseño dinámico </li>
                </ul>
              </div>
              <a class="boton-secundarioxvs" href="https://mieventoapp.com/misxv/demosZafiro"><i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/bodaZafiro%0A%0AHola 👋🏻,%0ADeseo una Invitación del paquete *Zafiro* para XV años 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col two -->
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
          <!-- END Col three -->
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

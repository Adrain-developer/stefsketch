
<?= $this->Html->css(['bodaNB'.'.css?v=24-10-019']) ?>
<?= $this->Html->css(['infVersiones']) ?>
<?= $this->Html->css(['vipaccess'.'.css?v=1.0504']) ?>

<?php $this->assign('title', 'Boda Zafiro'); ?>
<?php
// Establecer la meta imagen para Open Graph
$this->Html->meta(
    ['property' => 'og:image', 'content' => 'https://mieventoapp.com/webroot/img/BannerMiniaturaBoda.jpg'],
    null,
    ['block' => true]
);
?>
<style>
section.portada-vipaccess .bottom-portada-vipaccess {
  background: linear-gradient(283deg, #f4fef999, #8aa5ba75);
  border-radius: 0% 0% 50% 50% / 25% 25% 8% 8%;
}
section.portada-vipaccess h4 {
    font-size: 30px !important;
}
section.modelos .modelo h4 {
    color: #d2a35f;
}
    .swiper-slide {
    width: 180px;
}
section.portada-vipaccess h2 {
    font-size: 30px !important;
}
.texttitslider{
  color: #d2a35f;
  font-weight: 700;
  width: 100%;
  display: inline-block;
  margin-bottom: 5px;
  font-size: 23px;
  text-align: center;
}
.mtop3060 {
    margin-top: -5% !important;
}
section.portada-vipaccess .info-portada-vipaccess .box-info{
  padding-top: 30%;
}
@media only screen and (max-width: 767px) {
    section.portada-vipaccess .info-portada-vipaccess .box-dispositivos {
        max-width: 88% !important;
        margin-top: 90px;
        text-align: center;
        padding-bottom: 50px;
    }
    section.modelos {
        padding-top: 0% !important;
    }
  }
</style>

<section class="portada-vipaccess">
<div class="rellax img-parallax parallax-element" data-rellax-speed="-7">
    <img style="opacity: 0.8;" src="https://mieventoapp.com/webroot/img/zafiroimgfondoparallax.webp" alt="Boda background">
</div>
<!-- Contenido portada -->
<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="info-portada-vipaccess d-flex justify-content-between align-items-center">

        <!-- Info -->
        <div class=" box-info">
          <h2>Invitación Zafiro<br>
          para tu Boda</h2>
         <h4 class="titvipaccess">
         ¿Que incluye? 👇🏻</h4>
          <div>
          <ul class="features" id="listaCaracteristicas">
              <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Nombre Novios </li>
              <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Cuenta Regresiva </li>
              <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Pensamiento </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Enlace a mapas con GPS (misa y recepción)</li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Foto Principal </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Confirmación de asistencia por llamada y WhatsApp</li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Código de vestimenta </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Padres, padrinos y damas de honor </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Música </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Mesas de regalos (Fisicas y Digitales) </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Álbum (hasta 5 fotos) </li>
          </ul>
          <button id="botonMostrarMas">Mostrar</button>
          </div>
          <div class="row">
          <a id="btnPortadaModelos" class="boton boton-secundario smoth-scroll" href="#modelos" style="width:50%">
              <i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
          <a class="boton boton-primario" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda/demosZafiro&nbsp;Hola%20Deseo una invitación del paquete *Zafiro* para Boda🥳" style="width:50%">
          <i class="fa fa-whatsapp"></i>
            Adquirir ahora
          </a>
          </div>
        </div>


        <!-- Ilustracion dispositivos -->
        <div class="box-dispositivos" style="width: 50%;">
        <a class="smoth-scroll" href="#modelos">
          <picture>
            <img src="../img/bannerpetiteversion2.webp" alt="mieventoapp" class="bannimgdemoweb" loading="lazy">
          </picture>
        </a>
        </div>


      </div>

    </div>

  </div>


  <!-- Link a Ver -->
 

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
          <h2 class="title">Catálogo Zafiro</h2>
          <p class="sub-title" style="color: #676767;">Busca el tema ideal para tu Boda 👇🏻</p>
        </div>
      </div>

      <div class="row modelos-list no-gutters">

        <div class="col-4 col-md-2 modelo">
          <h4>Red Blooom</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=588" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=191.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=191.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=588" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=588%20%20Hola,%20Me gustaría adquirir la invitación *Red Blooom* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
        <h4>Silvera</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=589" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=188.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=188.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=589" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=589%20%20Hola,%20Me gustaría adquirir la invitación *Silvera* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Greeny</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=590" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=184.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=184.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=590" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=590%20%20Hola,%20Me gustaría adquirir la invitación ** del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Emeraldy</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=591" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=185.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=185.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=591" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=591%20%20Hola,%20Me gustaría adquirir la invitación *Emeraldy* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Girasuny</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=592" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=179.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=179.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=592" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=592%20%20Hola, %20Me gustaría adquirir la invitación *Girasuny* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Pure Gold</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=593" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=187.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=187.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=593" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=593%20%20Hola, %20Me gustaría adquirir la invitación *Pure Gold* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Azura</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=594" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=181.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=181.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=594" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=594%20%20Hola, %20Me gustaría adquirir la invitación *Azura* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Bluciel</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=596" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=183.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=183.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=596" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=596%20%20Hola, %20Me gustaría adquirir la invitación *Bluciel* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Otoñal</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=597" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=455.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=455.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=597" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=597%20%20Hola, %20Me gustaría adquirir la invitación *Otoñal* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Rosver</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=598" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=536.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=536.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=598" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=598%20%20Hola, %20Me gustaría adquirir la invitación *Rosver* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Purplea</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=599" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=537.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=537.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=599" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=599%20%20Hola, %20Me gustaría adquirir la invitación *Purplea* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Beige Rose</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=600" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=534.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=534.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=600" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=600%20%20Hola, %20Me gustaría adquirir la invitación *Beige Rose* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Satin & Blue</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=601" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=533.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=533.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=601" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=601%20%20Hola, %20Me gustaría adquirir la invitación *Satin y Blue* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Humy Azurosa</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=602" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=532.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=532.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=602" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=602%20%20Hola, %20Me gustaría adquirir la invitación *Humy Azurosa* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Marlon</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=603" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=180.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=180.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=603" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=603%20%20Hola, %20Me gustaría adquirir la invitación *Marlon* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
            <h4>Creamy Flower</h4>
            <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=604" target="_blank">
              <picture>
                <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=539.webp">
                <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=539.webp"
                  alt="MieventoApp" width="435" height="787" loading="lazy">
              </picture>
            </a>
            <div class="botones-modelo">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=604" target="_blank">
                <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
              
            </div>
            <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=604%20%20Hola, %20Me gustaría adquirir la invitación *Creamy Flower* del paquete *Zafiro* para *Boda*!🥳" 
                  style="margin-bottom: 15px;">
                  <i class="fa fa-whatsapp"></i>
                  Solicitar
            </a>
          </div>

          <div class="col-4 col-md-2 modelo">
          <h4>Lilac</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=605" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=178.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=178.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=605" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=605%20%20Hola, %20Me gustaría adquirir la invitación *Lilac* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Vinero</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=606" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=538.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=538.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=606" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=606%20%20Hola, %20Me gustaría adquirir la invitación *Vinero* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Gatsby</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=607" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=397.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=397.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=607" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=607%20%20Hola, %20Me gustaría adquirir la invitación *Gatsby* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Aquarela</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=608" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=190.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=190.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=608" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=608%20%20Hola, %20Me gustaría adquirir la invitación *Aquarela* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Colorex</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=609" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=189.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=189.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=609" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=609%20%20Hola, %20Me gustaría adquirir la invitación *Colorex* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Royal Platia</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=610" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=186.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=186.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=610" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=610%20%20Hola, %20Me gustaría adquirir la invitación *Royal Platia* del paquete *Zafiro* para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
            <h4>Alcatraz</h4>
            <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=595" target="_blank">
              <picture>
                <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=395.webp">
                <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=395.webp"
                  alt="MieventoApp" width="435" height="787" loading="lazy">
              </picture>
            </a>
            <div class="botones-modelo">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=595" target="_blank">
                <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
              
            </div>
            <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=595%20%20Hola, %20Me gustaría adquirir la invitación *Alcatraz* del paquete *Zafiro* para *Boda*!🥳" 
                  style="margin-bottom: 15px;">
                  <i class="fa fa-whatsapp"></i>
                  Solicitar
            </a>
          </div>


      </div>

<!--FINDEMOS-->


      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">

        <p style="color: #676767;">
          Escríbenos y comencemos.
        </p>

        <!-- Dropdown Contacto -->
        <div id="dropdownMenuContacto" class="dropdown">
        <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com//invitaciones/boda/demosPetite%20%20Hola%20Deseo una invitación *Zafiro* para Boda🥳" style="margin-bottom: 15px;">
                  <i class="fa fa-whatsapp"></i>
                Adquirir ahora 
               </a>
             
            </div>
      </div>

    </div>   
  </section>

  <section style="background-color: #ffffff; padding: 50px 0 50px 0;">
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
                src="https://mieventoapp.com/webroot/img/AmbarIcono.png">
              </div>
              <div class="price">
                <!--<h4><sup>$</sup>599</h4>-->
              </div>
              <div class="option">
                <ul>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Nombre Novios </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Cuenta Regresiva </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Pensamiento </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Dirección misa y recepción </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Botón a mapas </li>
                </ul>
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/boda/demosAmbar"><i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda/demosAmbar%20%20Hola%20Deseo una Invitación *Ámbar* para boda 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col one -->
          <div class="col-sm-6">
            <div class="card text-center" style="background: linear-gradient(283deg, #f4fef9, #8aa5ba);">
              <div class="title">
                <h2>Paquete<br>Diamante</h2>
                <img style="width: 30%;border-radius: 50%; text-align: center;line-height: 100px;-webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);margin-bottom: 5px;" 
                src="https://mieventoapp.com/webroot/img/DiamanteIconoDOS.png">
                <!--<i class="fa fa-diamond" aria-hidden="true"></i>-->
              </div>
              <div class="price">
                <!--<h4><sup>$</sup>899</h4>-->
              </div>
              <div class="option">
                <ul>
                  <li style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Todo lo que incluye el paquete <strong>Zafiro</strong> más:</li>
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
              <a class="boton-secundario" href="https://mieventoapp.com/boda/demosDiamante"><i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda/demosDiamante%20%20Hola%20Deseo una Invitación *Diamante* 💎 para boda 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col two -->
         
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #ffffff; padding: 50px 0 50px 0;">
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
          <img class="imgBannerrsvp" src="https://mieventoapp.com/webroot/img/bannerVIPACCESSdos.gif" />
          <img class="imgBannerrsvomovil" src="https://mieventoapp.com/webroot/img/bannerVIPACCESSmovil.gif" />
        </a>
          <div class="container-envelope">
          <div class="botones-modelo" style="text-align: center; margin-top: -46px;">
            <a class="boton boton-secundario" href="https://mieventoapp.com/invitaciones/vipaccess" target="_blank">
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

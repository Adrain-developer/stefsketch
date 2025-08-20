
<?= $this->Html->css(['bodaNB'.'.css?v=10-003']) ?>
<?= $this->Html->css(['infVersiones']) ?>
<?= $this->Html->css(['vipaccess'.'.css?v=1.0505']) ?>
<?php $this->assign('title', 'Boda Diamante'); ?>
<style>
  <?php
// Establecer la meta imagen para Open Graph
$this->Html->meta(
    ['property' => 'og:image', 'content' => 'https://mieventoapp.com/webroot/img/BannerMiniaturaBoda.jpg'],
    null,
    ['block' => true]
);
?>
section.portada-vipaccess .bottom-portada-vipaccess {
  background: linear-gradient(137deg, #f4fef975, #6088a88c);
  border-radius: 0% 0% 50% 50% / 25% 25% 8% 8%;
}
section.portada-vipaccess h4 {
    font-size: 30px !important;
}
section.modelos .modelo h4 {
    color: #d2a35f;
}
section.portada-vipaccess h2 {
    font-size: 30px !important;
}
    .swiper-slide {
    width: 180px;
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
/*estilos banner parallax*/
.parallax-container {
            position: relative;
            height: 120vh;
            overflow: hidden;
            background-color: #ffffff;
        }
        
        .parallax-layer {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

       /* Capa base (imagen de fondo) */
       .layer-bg {
            z-index: 1;
            top: -260px;
        }
        
        .layer-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        /* Capa del celular */
        .layer-phone {
          z-index: 4;
          display: flex;
          justify-content: center;
          align-items: flex-start;
          padding-top: 30vh;
          left: -430px;
          top: -255px;
        }

        .layer-phone img {
            width: 50%;
            height: auto;
            animation: phoneMove 6s ease-in-out infinite alternate;
        }

        /* Animación para floral 2 */
        @keyframes phoneMove {
            from {
                transform: translateY(-10px);
            }
            to {
                transform: translateY(10px);
            }
        }

        /* Capa de la persona */
        .layer-botones {
          z-index: 5;
          top: 550px;
          left: 766px;
        }

        .layer-botones img {
          width: 45%;
          max-width: 400px;
          height: auto;
          margin-right: 5%;
          margin-bottom: 10vh;
        }

        /* Capa de texto */
        .layer-text {
          z-index: 6;
          opacity: 0;
          transform: translateY(50px);
          transition: all 0.5s ease;
          position: absolute;
          bottom: 20%;
          left: 0;
          width: 100%;
          text-align: center;
          padding: 45px 2px 0px;
        }

        .layer-text.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .btnbannerparallax{
          width: 35%;
        }
        /* Ajustes responsive */
        @media (max-width: 768px) {
          .parallax-container {
            height: 105vh;
          }
          .layer-bg {
              top: -325px;
          }
            .layer-phone {
              left: 0px;
              top: -290px;
            }
            .layer-phone img {
              width: 115%;
            }
            .layer-botones {
              top: 600px;
              left: 45px;
            }
            .layer-botones img {
                width: 72%;
            }
            .btnbannerparallax{
          width: 80%;
        }
        }
        @media (max-width: 398px) {
          .parallax-container {
            height: 120vh;
          }
          .layer-bg {
              top: -260px;
          }
          .layer-botones {
            top: 640px;
            left: 39px;
          }
          .layer-phone {
            top: -170px;
          }
        }
</style>

<section class="portada-vipaccess">
<div class="rellax img-parallax parallax-element" data-rellax-speed="-7">
    <img style="opacity: 0.8;" src="https://mieventoapp.com/webroot/img/diamanterimgfondoparallax.webp" alt="Boda background">
</div>
<!-- Contenido portada -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="info-portada-vipaccess d-flex justify-content-between align-items-center">
        <!-- Info -->
        <div class="box-info">
          <h2>Invitación Diamante 💎<br>
          para tu Boda</h2>
          <h4 class="titvipaccess">
          Incluye: </h4>
          <div>
          <ul class="features" id="listaCaracteristicas">
              <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Nombre Novios </li>
              <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Cuenta Regresiva </li>
              <li class="oculto"> <i class="fa fa-check" aria-hidden="true"></i> Pensamiento </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Mensaje de inicio y animación de sobre</li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Enlace a mapas con GPS (misa y recepción)</li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Foto Principal </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Confirmación de asistencia por llamada y WhatsApp</li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Código de vestimenta </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Padres, padrinos y damas de honor </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Música </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Mesas de regalos (Fisicas y Digitales) </li>
              <li class="oculto"> <i class="fa fa-star" aria-hidden="true"></i> Álbum (hasta 15 fotos) </li>
          </ul>
          <button id="botonMostrarMas">Mostrar más</button>
          </div>
          <div class="row">
          <a id="btnPortadaModelos" class="boton boton-secundario smoth-scroll" href="#modelos" style="width:50%">
              <i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
          <a class="boton boton-primario" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda/demosDiamante%20%20Hola%20Deseo una invitación del paquete *Diamante* 💎 para Boda🥳" style="width: 50%;">
          <i class="fa fa-whatsapp"></i>
            Adquirir ahora
          </a>
          </div>
        </div>

        <!-- Ilustracion dispositivos -->
        <div class="box-dispositivos" style="width: 50%;">
        <a class="smoth-scroll" href="#modelos">
          <picture>
            <img src="../img/bannerbodaPetiteDOS.png" alt="mieventoapp" class="bannimgdemoweb" loading="lazy">
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

<section id="modelos" class="modelos mtop3060" style="background-color: #ffffff; padding: 50px 0 30px 0;">
  <div class="container">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
    </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">Catálogo Diamante 💎</h2>
          <p class="sub-title" style="color: #676767;">Busca el tema ideal para tu Boda 👇🏻</p>
        </div>
      </div>
    <div class="row modelos-list no-gutters">

      <div class="col-4 col-md-2 modelo">
          <h4>Red Blooom</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=191" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=191.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=191.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=191" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=191%20%20Hola,%20Me gustaría adquirir la invitación *Red Blooom* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Greeny</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=184" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=184.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=184.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=184" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=184%20%20Hola,%20Me gustaría adquirir la invitación ** del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Emeraldy</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=185" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=185.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=185.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=185" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=185%20%20Hola,%20Me gustaría adquirir la invitación *Emeraldy* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Girasuny</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=179" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=179.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=179.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=179" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=179%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Girasuny* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Pure Gold</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=187" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=187.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=187.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=187" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=187%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Pure Gold* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Azura</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=181" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=181.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=181.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=181" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=181%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Azura* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        </div>
<!--fin demos-->
      <!--fin piedras-->
      </div>
<!--FINDEMOS-->
    </div>   
  </section>

<!-- INICIO carrusel -->
  <section id="modelos" style="position: relative;background: #ffffff;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">Las más pedidas ❤️</h2>
          <p class="sub-title">La invitación que todos recordarán</p>
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #ffffff; padding: 0px 0 70px 0;position: relative;">
    <div class="">
<div class="swiper mySwiper" style="background-color: #ffffff;">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <h4 class="texttitslider">Silvera</h4>
        <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=188" target="_blank">
          <img src="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=188.webp" alt="MieventoApp" loading="lazy">
        </a>
        <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=188" target="_blank">
            </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
        </div>
        <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=188%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Silvera* Diamante 💎 para *Boda*!🥳" 
              style="text-align: center; width: 100%;">
              <i class="fa fa-whatsapp"></i>
              Solicitar
        </a>
      </div>

      <div class="swiper-slide">
        <h4 class="texttitslider">Pure Gold</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=187" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=187.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=187" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=187%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Pure Gold* Diamante 💎 para *Boda*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
      </div>
      <div class="swiper-slide">
        <h4 class="texttitslider">Otoñal</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=455" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=455.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=455" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=455%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Otoñal* Diamante 💎 para *Boda*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>
      <div class="swiper-slide">
        <h4 class="texttitslider">Marlon</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=180" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=180.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=180" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=180%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Marlon* Diamante 💎 para *Boda*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
      </div>
      <div class="swiper-slide">
        <h4 class="texttitslider">Alcatraz</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=395" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=395.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=395" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=395%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Alcatraz* Diamante 💎 para *Boda*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
      </div>
      <div class="swiper-slide">
        <h4 class="texttitslider">Satin & Blue</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=533" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=533.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=533" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=533%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Satin y Blue* Diamante 💎 para *Boda*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
      </div>
      <div class="swiper-slide">
        <h4 class="texttitslider">Royal Platia</h4>
            <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=563" target="_blank">
              <img src="https://mieventoapp.com/webroot/img/demowebpinvitaciones.webp" alt="MieventoApp" loading="lazy">
            </a>
            <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
                <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=563" target="_blank">
                </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            </div>
            <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=563%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Royal Platia* Diamante 💎 para *Boda*!🥳" 
                  style="text-align: center; width: 100%;">
                  <i class="fa fa-whatsapp"></i>
                  Solicitar
            </a>
      </div>
      <div class="swiper-slide">
        <h4 class="texttitslider">Gatsby</h4>
              <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=397" target="_blank">
                <img src="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=397.webp" alt="MieventoApp" loading="lazy">
              </a>
              <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
                  <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=397" target="_blank">
                  </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
              </div>
              <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                    href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=397%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Gatsby* Diamante 💎 para *Boda*!🥳" 
                    style="text-align: center; width: 100%;">
                    <i class="fa fa-whatsapp"></i>
                    Solicitar
              </a>
      </div>
      
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  </div>
  </section>
<!-- FIN carrusel -->
  <section id="modelos" class="modelos mtop3060">
  <div class="container">

    <div class="row modelos-list no-gutters">
        <div class="col-4 col-md-2 modelo">
            <h4>Alcatraz</h4>
            <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=395" target="_blank">
              <picture>
                <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=395.webp">
                <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=395.webp"
                  alt="MieventoApp" width="435" height="787" loading="lazy">
              </picture>
            </a>
            <div class="botones-modelo">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=395" target="_blank">
                <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
              
            </div>
            <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=395%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Alcatraz* del paquete *Diamante* 💎 para *Boda*!🥳" 
                  style="margin-bottom: 15px;">
                  <i class="fa fa-whatsapp"></i>
                  Solicitar
            </a>
          </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Bluciel</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=183" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=183.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=183.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=183" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=183%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Bluciel* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Otoñal</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=455" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=455.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=455.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=455" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=455%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Otoñal* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Rosver</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=536" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=536.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=536.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=536" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=536%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Rosver* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Purplea</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=537" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=537.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=537.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=537" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=537%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Purplea* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Beige Rose</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=534" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=534.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=534.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=534" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=534%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Beige Rose* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
                </a>
        </div>

        </div>
<!--fin demos-->
      </div>
<!--FINDEMOS-->
    </div>   
  </section>

   <!-- Modelos -->
   <section id="" class="modelos">
   <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h2 class="title">The Lux For Wedding</h2>
          <p class="sub-title">Diseño Exclusivo & Animaciones Premium<br>💍</p>
        </div>
      </div>
<!--FINDEMOS-->
    </div>
  </section>

<!--bannerParallax-->
<section style="background-color: #ffffff; padding: 0px 0 70px 0;">
<div class="parallax-container">
    <a href="https://invitaciones.adntecnologias.com/NuestraBoda/demo1.html" style="color: #212529;">
       <!-- Capa 1: Fondo -->
       <div class="parallax-layer layer-bg" data-rellax-speed="-7">
            <img src="https://mieventoapp.com/webroot/img/bannertheluxfondoBoda.jpg" alt="Fondo">
        </div>
        <!-- Capa 4: Mockup del celular -->
        <div class="parallax-layer layer-phone" data-rellax-speed="-1">
          <img src="https://mieventoapp.com/webroot/img/bannertheluxtransparente.png" alt="Mockup celular" loading="lazy">
        </div>
         <!-- Capa 5: Botones -->
         <div class="parallax-layer layer-botones" data-rellax-speed="1">
          <div class="botones-modelo">
            <a class="boton boton-secundario btnbannerparallax" href="https://invitaciones.adntecnologias.com/NuestraBoda/demo1.html" target="_blank" style="text-align: center;margin-bottom: 5px;">
              Ver diseño </a>
          </div>
          <a class="boton boton-primario btnbannerparallax" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                    href="https://api.whatsapp.com/send?phone=+522225062683&text=https://invitaciones.adntecnologias.com/NuestraBoda/demo1.html%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *The Lux for Wedding* 💍 para *Boda*!🥳" 
                    style="text-align: center;">
                    <i class="fa fa-whatsapp"></i>
                    ¡La quiero!
              </a>
        </div>
    </a>
  </div>
</section>
<!--FIN BannerQR-->

<section id="modelos" class="modelos mtop3060">
  <div class="container">

    <div class="row modelos-list no-gutters">
        <div class="col-4 col-md-2 modelo">
          <h4>Satin & Blue</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=533" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=533.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=533.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=533" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=533%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Satin y Blue* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Humy Azurosa</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=532" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=532.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=532.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=532" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=532%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Humy Azurosa* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Marlon</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=180" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=180.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=180.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=180" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=180%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Marlon* Petite para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
            <h4>Creamy Flower</h4>
            <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=539" target="_blank">
              <picture>
                <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=539.webp">
                <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=539.webp"
                  alt="MieventoApp" width="435" height="787" loading="lazy">
              </picture>
            </a>
            <div class="botones-modelo">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=539" target="_blank">
                <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
              
            </div>
            <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=539%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Creamy Flower* del paquete *Diamante* 💎 para *Boda*!🥳" 
                  style="margin-bottom: 15px;">
                  <i class="fa fa-whatsapp"></i>
                  Solicitar
            </a>
          </div>

          <div class="col-4 col-md-2 modelo">
          <h4>Lilac</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=178" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=178.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=178.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=178" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=178%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Lilac* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Vinero</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=538" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=538.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=538.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=538" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=538%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Vinero* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Gatsby</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=397" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=397.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=397.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=397" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=397%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Gatsby* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Aquarela</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=190" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=190.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=190.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=190" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=190%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Aquarela* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Colorex</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=189" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=189.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=189.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=189" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=189%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Colorex* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Royal Platia</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=186" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=186.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=186.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=186" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=186%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Royal Platia* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
        <h4>Silvera</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=188" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=188.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=188.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=188" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=188%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Silvera* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
                </a>
        </div>

        </div>
<!--fin demos-->
      </div>
<!--FINDEMOS-->

      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
        <p style="color: #676767;">
          Escríbenos y comencemos.
        </p>
        <!-- Dropdown Contacto -->
        <div id="dropdownMenuContacto" class="dropdown" style="z-index: 999;">
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com//invitaciones/boda/demosDiamante%0A%0AHola 👋🏻%0ADeseo una invitación *DIAMANTE* 💎 para Boda🥳" style="margin-bottom: 15px;">
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
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda/demosAmbar%0A%0AHola 👋🏻%0ADeseo una Invitación *Ámbar* para boda 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col one -->

          <div class="col-sm-6">
            <div class="card text-center" style="background: linear-gradient(45deg, #5703ff66, #59f6f98a);">
              <div class="title">
                <h2>Paquete<br>Zafiro</h2>
                <img style="width: 30%;border-radius: 50%; text-align: center;line-height: 100px;-webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);margin-bottom: 5px;" src="https://mieventoapp.com/webroot/img/ZafiroIcono.png">
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
              <a class="boton-secundario" href="https://mieventoapp.com/boda/demosZafiro"><i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/bodaZafiro%0A%0AHola 👋🏻%0ADeseo una Invitación del paquete *Zafiro* para boda 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col two -->         
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #ffffff; padding: 0px 0 50px 0;">
    <div class="container-fluid">
      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="">
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

<script>
        // Inicializar Rellax con opciones para móvil
        var rellax = new Rellax('.parallax-layer', {
            center: true,
            wrapper: null,
            round: true,
            vertical: true,
            horizontal: false
        });
        // Ajustar Rellax en resize
        window.addEventListener('resize', () => {
            rellax.refresh();
        });
    </script>



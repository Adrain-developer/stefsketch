
<?= $this->Html->css(['bodaNB'.'.css?ver=24-11:03']) ?>
<?= $this->Html->css(['infVersiones'.'.css?v=1.2']) ?>
<?php $this->assign('title', 'Boda Home'); ?>



<style>
  @media only screen and (max-width: 767px){
section.como-funciona {
    padding-top: 80px;
}
section.como-funciona .step-number {
    padding-bottom: 0px;
}
section.modelos {
    padding: 10px 0 30px;
  }
}
section.como-funciona .step-number {
    text-align: center;
    padding: 0px 0px;
}
section.portada-bodas .info-portada-bodas .box-info a.boton {
    padding: 18px 50px;
    margin-top: 20px;
}
.texttitslider{
      color: #d2a35f;
}
@media (min-width: 576px) {
    .flex-sm-row {
        width: max-content !important;
    }
}
.swiper-slide {
width: 180px;
}
section.modelos .modelo h4 {
    color: #d2a35f;
}
.row-Alcentro{
  align-content: space-around;
    align-items: center;
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


<div class="parallax-mirror mirrorbanner-principal">
  <?php echo $this->Html->image('bannereventosBoda.jpg', ['class' => 'parallax-slider full-imgprincipal', 'alt' => 'PORTADA']); ?>
</div>
<!-- Portada -->
<section id="portada-bodas" class="portada-bodas">

<!-- Contenido portada -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="info-portada d-flex justify-content-center justify-content-md-between align-items-center">

        <!-- Info -->
        <div class="box-info">
          <h1>Invitaciones únicas para tu día especial</h1>
          <p class="price">Diseños exclusivos listos en 48 horas</p>
          <div class="row botones-portada d-flex flex-column flex-sm-row justify-content-center align-items-center btnbannerpadding">
              <a class="boton btnpaquetes smoth-scroll" href="#botonPaquetes"><i class="fa fa-address-book"></i> Explorar Paquetes</a>
              <a id="btnPortadaModelos" class="boton boton-secundario smoth-scroll" href="#modelos" style="width: 65%;margin-bottom: 15px;">
                <i class="fa fa-book" aria-hidden="true"></i> Ver Diseños </a>
              <a class="boton boton-primario" target="_blank" style="width: 65%;" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda%0A%0AHola 👋🏻%0ADeseo una Invitación digital para *Boda* !🥳">
              <i class="fa fa-whatsapp"></i>
                Cotizar ahora 
              </a>
          </div>
        </div>
          <!-- Iframe -->
          <div class="box-iframe" style="">
        <a class=" smoth-scroll" href="#modelos"> 
        <picture>
          <source type="image/png" srcset="https://mieventoapp.com/webroot/img/bannerunobodahomeDOS.png">
          <?php echo $this->Html->image('https://mieventoapp.com/webroot/img/bannerunobodahomeDOS.png', ['alt' => 'demobanner', 'style' => 'filter: drop-shadow(2px 2px 6px #6969699c);width: 90%; margin-left: 20%;']); ?>
        </picture>
        </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Curva divisoria portada -->
<div class="bottom-portada-bodas"></div>

</section>

 <!-- Mock up (mobile) -->
 <div class="mockup-portada d-md-none d-flex justify-content-center align-items-center paddtp-100">
 <a class=" smoth-scroll" href="#modelos"> 
  <picture>
    <source type="image/png" srcset="https://mieventoapp.com/webroot/img/bannerunobodahomeDOS.png">
    <?php echo $this->Html->image('bannerunobodahomeDOS.png', ['alt' => 'demobanner', 'style' => 'filter: drop-shadow(2px 2px 6px #6969699c);width: 100%;']); ?>
  </picture>
  </a>
</div>

<!-- Caracteristicas -->

<!-- Caracteristicas 2 -->
<section id="ventajas" class="como-funciona" style="background-color: #ffffff;">
    <div class="container">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">¿Cómo obtenerla?</h2>
          <p class="sub-title">Solo 3 pasos para tu invitación perfecta</p>
        </div>
      </div>

      <!-- Items -->
      <div class="row animaciones-steps no-gutters">

        <div class="col-md-4">
          <div class="step-number step-number-1 col-12">
          <span class="number">1</span>
          
            <div class="row row-Alcentro">
              <div class="col-4">
                <img style="width: 150%;" 
                src="https://mieventoapp.com/webroot/img/iconoElige.webp">
              </div>
              <div class="col-8">
                <h4>Elige</h4>
                <p>Tu diseño favorito</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="step-number step-number-1 col-12">
            <span class="number">2</span>
            <div class="row row-Alcentro">
              <div class="col-8">
                <h4>Personalízalo</h4>
                <p>Por WhatsApp</p>
              </div>
              <div class="col-4" style="left: -10px;">
                <img style="width: 120%;" 
                src="https://mieventoapp.com/webroot/img/iconoEnvia.webp">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="step-number step-number-1 col-12">
          <span class="number">3</span>
            <div class="row row-Alcentro">
              <div class="col-4">
                <img style="width: 150%;" 
                src="https://mieventoapp.com/webroot/img/iconoComparte.gif">
              </div>
              <div class="col-8">
                <h4>¡Listo!🥳</h4>
                <p>Puedes compartir con tus invitados</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">

        <!--<p>
          Puedes tener hoy todas estas ventajas que ofrecen nuestras invitaciones digitales y sorprender a tus
          invitados. </p>-->

        <!-- Dropdown Contacto -->
        <div id="dropdownMenuContacto" class="dropdown">
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda%0A%0AHola 👋🏻%0ADeseo una Invitación digital para *Boda*!🥳">
              <i class="fa fa-whatsapp"></i>
              Comenzar diseño <br>
          </a>
        </div>
        <spam class="microcopys">¡Solo 5 minutos!</spam>
      </div>

    </div>

  </section>

 <!-- Versiones -->

 <section style="background-color: #ffffff; padding:10px 0 15px 0" >
    <div class="container-fluid">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="container" id="botonPaquetes">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title">Paquetes</h2>
            <p class="sub-title">Elige el paquete perfecto para tu día especial</p>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-4">
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
              <a class="boton-secundario" href="https://mieventoapp.com/boda/demosAmbar"><i class="fa fa-book" aria-hidden="true"></i> Ver ejemplos </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda/demosAmbar%0A%0AHola 👋🏻%0ADeseo una Invitación *Ámbar* para boda 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col one -->
          <div class="col-sm-4">
            <div class="card text-center" style="background: linear-gradient(45deg, #5703ff66, #59f6f98a);">
            <!--<div class="rellax" data-rellax-speed="-5" data-rellax-percentage="0.5" data-rellax-zindex="5" style="opacity: 0.4;">
              <img src="https://mieventoapp.com//webroot/img/zafiroparallax.png" style="position: fixed;left: -6%;height: 35vh;margin-top: -26%;width: 65%;">
            </div>-->
              <div class="title">
                <h2>Paquete<br>Zafiro</h2>
                <img style="width: 30%;border-radius: 50%; text-align: center;line-height: 100px;-webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);margin-bottom: 5px;" 
                src="https://mieventoapp.com/webroot/img/ZafiroIcono.png">
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
              <a class="boton-secundario" href="https://mieventoapp.com/boda/demosZafiro"><i class="fa fa-book" aria-hidden="true"></i> Ver ejemplos </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/bodaZafiro%0A%0AHola 👋🏻%0A%20Deseo una Invitación del paquete *Zafiro* para boda 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col two -->
          <div class="col-sm-4">
            <div class="card text-center" style="background: linear-gradient(283deg, #f4fef9, #8aa5ba);">
              <div class="title">
                <h2>Paquete<br>Diamante</h2>
                <img style="width: 30%;border-radius: 50%; text-align: center;line-height: 100px;-webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);margin-bottom: 5px;" src="https://mieventoapp.com/webroot/img/DiamanteIconoDOS.png">
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
              <a class="boton-secundario" href="https://mieventoapp.com/boda/demosDiamante"><i class="fa fa-book" aria-hidden="true"></i> Ver ejemplos </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda/demosDiamante%0A%0AHola 👋🏻%0ADeseo una Invitación *Diamante* 💎 para boda 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col three -->
        </div>
      </div>
    </div>
  </section>

<!--demos diamante-->
<section id="modelos" class="modelos">
    <div class="container">
      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
        <h2 class="title">Demos Diamante 💎</h2>
          <p class="sub-title">Glamur, estilo y moda</p>
        </div>
      </div>

      <div class="row modelos-list no-gutters" style="align-items: baseline;">

      <div class="col-4 col-md-2 modelo">
          <h4 class="texttitslider">Red Blooom</h4>
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
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=191%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Red Blooom* del paquete *Diamante* 💎 para *Boda*!🥳" 
                style="margin-bottom: 15px;font-size: 13px;">
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
                style="margin-bottom: 15px;font-size: 13px;">
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
                style="margin-bottom: 15px;font-size: 13px;">
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
                style="margin-bottom: 15px;font-size: 13px;">
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
                style="margin-bottom: 15px;font-size: 13px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

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
                style="margin-bottom: 15px;font-size: 13px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

</div>
<div class="col-12">
            <div class="card text-center" style="background: linear-gradient(283deg, #f4fef9, #8aa5ba);">
              <div class="title">
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/boda/demosDiamante"><i class="fa fa-book" aria-hidden="true"></i> Ver más</a>
            </div>
          </div>
          <!-- END Col three -->

</div>
</section>
<!--Fin demos diamante-->

<!--demos zafiro-->
<section id="zafiro" class="modelos">
    <div class="container">
      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
        <h2 class="title">Demos Zafiro</h2>
          <!--<p class="sub-title">Glamur, estilo y moda</p>-->
        </div>
      </div>

      <div class="row modelos-list no-gutters" style="align-items: baseline;">

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
                  style="margin-bottom: 15px;font-size: 13px;">
                  <i class="fa fa-whatsapp"></i>
                  Solicitar
            </a>
        </div>

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
                style="margin-bottom: 15px;font-size: 13px;">
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
                style="margin-bottom: 15px;font-size: 13px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

</div>
<div class="col-12">
            <div class="card text-center" style="background: linear-gradient(45deg, #5703ff66, #59f6f98a);">
              <div class="title">
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/boda/demosZafiro"><i class="fa fa-book" aria-hidden="true"></i> Ver más</a>
            </div>
          </div>
          <!-- END Col three -->
</div>
</section>
<!--Fin demos zafiro-->

<!--demos ambar-->
<section id="ambar" class="modelos">
    <div class="container">
      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
        <h2 class="title">Demos Ámbar</h2>
          <!--<p class="sub-title">Glamur, estilo y moda</p>-->
        </div>
      </div>

      <div class="row modelos-list no-gutters" style="align-items: baseline;">

      <div class="col-4 col-md-2 modelo">
          <h4>Emeraldy</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=564" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=185.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=185.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=564" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=564%0A%0AHola 👋🏻,%0AMe gustaría adquirir la invitación *Emeraldy* del paquete Ámbar para *Boda*!🥳" 
                style="margin-bottom: 15px;font-size: 13px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Humy Azurosa</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=555" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=532.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=532.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=555" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=555%0A%0AHola 👋🏻,%0AMe gustaría adquirir la invitación *Humy Azurosa* del paquete Ámbar para *Boda*!🥳" 
                style="margin-bottom: 15px;font-size: 13px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-2 modelo">
          <h4>Marlon</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=556" target="_blank">
            <picture>
              <source type="image/webp" srcset="https://mieventoapp.com/webroot/img/catalogo/boda/idInvitacion=180.webp">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=180.webp"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=556" target="_blank">
              <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver </a>
            
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=556%0A%0AHola 👋🏻,%0AMe gustaría adquirir la invitación *Marlon* Petite para *Boda*!🥳" 
                style="margin-bottom: 15px;font-size: 13px;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

</div>
<div class="col-12">
            <div class="card text-center" style="background: linear-gradient(-45deg, #ffff0061, #eb8f19a8 50%, #ff5e476b);">
              <div class="title">
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/boda/demosAmbar"><i class="fa fa-book" aria-hidden="true"></i> Ver más</a>
            </div>
          </div>
          <!-- END Col three -->
</div>
</section>
<!--Fin demos ambar-->

  <section id="modelos" class="modelos">
    <div class="container">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">Las más pedidas ❤️</h2>
          <p class="sub-title">La invitación que todos recordarán</p>
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #ffffff; padding: 0px 0 30px 0;">
    <div class="">
<div class="swiper mySwiper">
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
  <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
        <p>
          Escríbenos y comencemos.
        </p>
        <!-- Dropdown Contacto -->
        <div id="dropdownMenuContacto" class="dropdown">
        <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda%0A%0AHola 👋🏻%0ADeseo una Invitación del paquete Diamante 💎 para *Boda*!🥳" style="margin-bottom: 15px;">
                  <i class="fa fa-whatsapp"></i>
                  Cotizar ahora 
               </a>
             
        </div>
      </div>
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

  <section style="background-color: #ffffff; 10px 0 0px 0">
    <div class="container-fluid">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title">Catálogo</h2>
            <p class="sub-title"></p>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-4 col-12">
            <div class="card text-center" style="background: linear-gradient(-45deg, #ffff0061, #eb8f19a8 50%, #ff5e476b);">
              <div class="title">
                <h2 style="font-size: 18px;">Demos Ámbar</h2>
                <img style="width: 30%;border-radius: 50%; text-align: center;line-height: 100px;-webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);margin-bottom: 5px;" 
                src="https://mieventoapp.com/webroot/img/AmbarIcono.png">
              </div>
              <a style="width: 100% !important;" class="boton-secundario" href="https://mieventoapp.com/boda/demosAmbar"><i class="fa fa-book" aria-hidden="true"></i> Ver Cátalogo</a>
              <a style="width: 100% !important;" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda/demosAmbar%0A%0AHola 👋🏻%0ADeseo una Invitación del paquete *Ámbar* para boda 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
              
            </div>
          </div>
          <!-- END Col one -->
          <div class="col-sm-4 col-12">
            <div class="card text-center" style="background: linear-gradient(45deg, #5703ff66, #59f6f98a);">
              <div class="title">
                <h2 style="font-size: 18px;">Demos Zafiro</h2>
                <img style="width: 30%;border-radius: 50%; text-align: center;line-height: 100px;-webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);margin-bottom: 5px;" 
                src="https://mieventoapp.com/webroot/img/ZafiroIcono.png">
              </div>
              <a style="width: 100% !important;" class="boton-secundario" href="https://mieventoapp.com/boda/demosZafiro"><i class="fa fa-book" aria-hidden="true"></i> Ver Cátalogo</a>
              <a style="width: 100% !important;" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda/demosZafiro%0A%0AHola 👋🏻%0ADeseo una Invitación del paquete  *Zafiro* para boda 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
              
            </div>
          </div>
          <!-- END Col two -->
          <div class="col-sm-4 col-12">
            <div class="card text-center" style="background: linear-gradient(283deg, #f4fef9, #8aa5ba);">
              <div class="title">
                <h2 style="font-size: 18px;">Demos Diamante 💎</h2>
                <img style="width: 30%;border-radius: 50%; text-align: center;line-height: 100px;-webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);margin-bottom: 5px;" 
                src="https://mieventoapp.com/webroot/img/DiamanteIconoDOS.png">
              </div>
              <a style="width: 100% !important;" class="boton-secundario" href="https://mieventoapp.com/boda/demosDiamante"><i class="fa fa-book" aria-hidden="true"></i> Ver Cátalogo</a>
              <a style="width: 100% !important;" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda/demosDiamante%0A%0AHola 👋🏻%0ADeseo una Invitación del paquete  *DIAMANTE* 💎 para boda 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col three -->
        </div>
      </div>
    </div>
  </section>

<!--boletosQR-->
<section style="background-color: #ffffff; padding: 50px 0 1px 0;">
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
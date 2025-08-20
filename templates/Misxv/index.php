
<?= $this->Html->css(['bodaNB'.'.css?v=1.0-2b6']) ?>
<?= $this->Html->css(['infVersiones'.'.css?v=1.3']) ?>	
<?php $this->assign('title', 'XV Home'); ?>
<style>
section.como-funciona .step-number {
    text-align: center;
    padding: 0px 0px;
}
.boton-secundario{
  background: linear-gradient(180deg, #ebb0f3, #8673a1);
  color: #fff;
}
.divisionmorada{
  content: "";
    width: 50px;
    height: 2px;
    background: #8673a1 !important;
    margin-bottom: 15px;
}
section.como-funciona .step-number span.number {
        background: linear-gradient(360deg, #fe59fe, #ad8bc0);
}
section.modelos .modelo h4 {
  color: #ad8bc0;
}
.banner-call-to-action:before{
  background: linear-gradient(135deg, #8673a1 0%, #ebb0f3 25%, #8673a1 75%, #ebb0f3 100%);
}
section.portada-bodas .info-portada-bodas .box-info a.boton {
    padding: 18px 50px;
    margin-top: 20px;
}
.texttitslider{
      color: #ebb0f3;
}
.swiper-slide {
width: 180px;
}
section.modelos {
    padding: 10px 0 30px;
}
@media only screen and (max-width: 767px){
  section.como-funciona {
      padding-top: 80px;
  }
  section.como-funciona .step-number {
      padding-bottom: 0px;
  }
  section.portada-bodas .info-portada .box-info {
          max-width: 100%;
      }
}
</style>

<div class="parallax-mirror mirrorbanner-principal">
  <?php echo $this->Html->image('bannereventosXVsvDOS.jpg', ['class' => 'parallax-slider full-imgprincipal', 'style' => 'filter: brightness(0.7);', 'alt' => 'PORTADA']); ?>
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
              <a class="boton boton-secundario smoth-scroll" href="#btnPortadaModelos" style="width: 65%;margin-bottom: 15px;">
                <i class="fa fa-book" aria-hidden="true"></i> Ver Diseños </a>
              <a class="boton boton-primario" target="_blank" style="width: 65%;" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv%0A%0AHola 👋🏻%0ADeseo una Invitación digital para *XV años* !🥳">
              <i class="fa fa-whatsapp"></i>
                Cotizar ahora 
              </a>
          </div>
        </div>
       
        <!-- Iframe -->
        <div class="box-iframe" style="">
          <a class=" smoth-scroll" href="#modelos"> 
          <picture>
            <source type="image/png" srcset="https://mieventoapp.com/webroot/img/bannerxvsegundoMarzo.webp">
            <?php echo $this->Html->image('bannerxvsegundoMarzo.webp', ['alt' => 'demobanner', 'style' => 'filter: drop-shadow(2px 2px 6px #6969699c);width: 90%; margin-left: 20%;']); ?>
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
    <source type="image/png" srcset="https://mieventoapp.com/webroot/img/bannerxvsegundoMarzo.webp">
    <?php echo $this->Html->image('bannerxvsegundoMarzo.webp', ['alt' => 'demobanner', 'style' => 'filter: drop-shadow(2px 2px 6px #6969699c);width: 100%;']); ?>
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

        <!-- Dropdown Contacto -->
        <div id="dropdownMenuContacto" class="dropdown">
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv%0A%0AHola 👋🏻%0ADeseo una Invitación digital para *XV años*!🥳">
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
                <li> <i class="fa fa-check" aria-hidden="true"></i> Nombre Festejada </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Cuenta Regresiva </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Pensamiento </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Dirección misa y recepción </li>
                <li> <i class="fa fa-check" aria-hidden="true"></i> Botón a mapas </li>
                </ul>
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/misxv/demosAmbar"><i class="fa fa-book" aria-hidden="true"></i> Ver ejemplos </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosAmbar%0A%0AHola 👋🏻%0ADeseo una Invitación *Ámbar* para XV años 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col one -->
          <div class="col-sm-4">
            <div class="card text-center" style="background: linear-gradient(45deg, #5703ff66, #59f6f98a);">
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
              <a class="boton-secundario" href="https://mieventoapp.com/misxv/demosZafiro"><i class="fa fa-book" aria-hidden="true"></i> Ver ejemplos </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosZafiro%0A%0AHola 👋🏻%0A%20Deseo una Invitación del paquete *Zafiro* para XV años 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
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
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Lista Chambelanes<span class="etiqueta-new"></span></li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Itinerario</li>                  
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Menú</li>                  
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Sugerencia de hospedaje (hasta 3)</li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Hashtag Instagram para fotos</li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Animaciones<span class="etiqueta-new"></span></li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Stikers de temática<span class="etiqueta-new"></span></li>               
                </ul>
              </div>              
              <a class="boton-secundario" href="https://mieventoapp.com/misxv/demosDiamante"><i class="fa fa-book" aria-hidden="true"></i> Ver ejemplos </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosDiamante%0A%0AHola 👋🏻%0ADeseo una Invitación *Diamante* 💎 para XV años 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
            </div>
          </div>
          <!-- END Col three -->
        </div>
      </div>
    </div>
  </section>

  <section class="modelos">
    <div class="container">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
        <h2 id="btnPortadaModelos" class="title">Demos Diamante 💎</h2>
          <p class="sub-title">Elegancia, glamur y moda</p>
        </div>
      </div>

      <div class="row modelos-list no-gutters" style="align-items: baseline;">

<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Márfi Rosaé</h4>
        <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505" target="_blank">
          <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=505.webp" alt="MieventoApp" loading="lazy">
        </a>
        <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505" target="_blank">
            </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
        </div>
        <a class="boton boton-primario" style="font-size: 14px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Márfi Rosaé* del paquete *Diamante* para *XV años*!🥳" 
              style="text-align: center; width: 100%;">
              <i class="fa fa-whatsapp"></i> 
              Solicitar
        </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Noiré</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=485" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=485.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=485" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 14px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=485%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Noiré* del paquete *Diamante* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Lilunzel</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=615" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=615.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=615" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 14px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=615%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Lilunzel* del paquete *Diamante* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">RosReina</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=494" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=494.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=494" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 14px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=494%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *RosReina* del paquete *Diamante* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Noir Rose</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=497.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 14px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Noir Rose* del paquete *Diamante* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-4 col-md-2 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Sky Butterfly</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=478" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=478.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=478" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 14px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=478%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Sky Butterfly* del paquete *Diamante* para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>

</div>
<div class="col-12">
            <div class="card text-center" style="background: linear-gradient(283deg, #f4fef9, #8aa5ba);">
              <div class="title">
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/misxv/demosDiamante"><i class="fa fa-book" aria-hidden="true"></i> Ver más</a>
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

      <div class="col-4 col-md-4 modelo">
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

        <div class="col-4 col-md-4 modelo">
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

        <div class="col-4 col-md-4 modelo">
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

</div>
<div class="col-12">
            <div class="card text-center" style="background: linear-gradient(45deg, #5703ff66, #59f6f98a);">
              <div class="title">
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/misxv/demosZafiro"><i class="fa fa-book" aria-hidden="true"></i> Ver más</a>
            </div>
          </div>
          <!-- END Col three -->
</div>

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

      <div class="col-4 col-md-4 modelo">
      <h4 class="texttitslider">Noiré</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=647" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=485.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=647" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=647%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Noiré* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-4 modelo">
        <h4 class="texttitslider">Noir Rose</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=650" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=497.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=650" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=650%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Noir Rose* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

        <div class="col-4 col-md-4 modelo">
        <h4 class="texttitslider">Glitter Melón</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=655" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=481.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=655" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 13px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=655%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Glitter Melón* del paquete Ámbar para *XV años* !🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i>
                Solicitar
          </a>
        </div>

</div>
<div class="col-12">
            <div class="card text-center" style="background: linear-gradient(-45deg, #ffff0061, #eb8f19a8 50%, #ff5e476b);">
              <div class="title">
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/misxv/demosAmbar"><i class="fa fa-book" aria-hidden="true"></i> Ver más</a>
            </div>
          </div>
          <!-- END Col three -->
</div>
</section>
<!--Fin demos ambar-->

  <section id="" class="modelos">
    <div class="container">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">Las más pedidas ❤️</h2>
          <p class="sub-title">Amadas por todos</p>
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #ffffff;">
    <div class="">
<div class="swiper mySwiper">
  <!--inicia demo-->
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <h4 class="texttitslider">Purple Touch</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=148" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=148.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=148" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <div class="botones-modelo" style="margin-top:8px; text-align:center;">
          <a class="boton boton-primario" style="font-size: 18px; width: 100%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=148%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Purple Touch* Diamante para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
        </div>
      </div>
<!--termina demo-->
  <!--inicia demo-->

      <div class="swiper-slide">
      <h4 class="texttitslider">Blue & Gold</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=487" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=487.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=487" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <div class="botones-modelo" style="margin-top:8px; text-align:center;">
          <a class="boton boton-primario" style="font-size: 18px; width: 100%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=487%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Blue y Gold* Diamante para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
        </div>
        </div>
<!--termina demo-->
  <!--inicia demo-->
 
      <div class="swiper-slide">
      <h4 class="texttitslider">Bella & Bestia LA</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=175" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=175.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=175" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <div class="botones-modelo" style="margin-top:8px; text-align:center;">
          <a class="boton boton-primario" style="font-size: 18px; width: 100%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=175%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Bella y Bestia LA* Diamante para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
        </div>
        </div>
<!--termina demo-->
  <!--inicia demo-->
  
      <div class="swiper-slide">
      <h4 class="texttitslider">Noir Rose</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=497.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <div class="botones-modelo" style="margin-top:8px; text-align:center;">
          <a class="boton boton-primario" style="font-size: 18px; width: 100%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Noir Rose* Diamante para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
        </div>
        </div>
<!--termina demo-->
  <!--inicia demo-->

      <div class="swiper-slide">
      <h4 class="texttitslider">Esmeralda</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=506" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=506.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=506" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <div class="botones-modelo" style="margin-top:8px; text-align:center;">
          <a class="boton boton-primario" style="font-size: 18px; width: 100%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=506%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Esmeralda* Diamante para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
        </div>
        </div>
<!--termina demo-->
  <!--inicia demo-->

      <div class="swiper-slide">
      <h4 class="texttitslider">Mariposas & Flores</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=491" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=491.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=491" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <div class="botones-modelo" style="margin-top:8px; text-align:center;">
          <a class="boton boton-primario" style="font-size: 18px; width: 100%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=491%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Mariposas & Flores* Diamante para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
        </div>
        </div>
<!--termina demo-->
  <!--inicia demo-->

      <div class="swiper-slide">
      <h4 class="texttitslider">Royal Blue</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=473" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=473.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=473" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <div class="botones-modelo" style="margin-top:8px; text-align:center;">
          <a class="boton boton-primario" style="font-size: 18px; width: 100%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=473%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Royal Blue* Diamante para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
        </div>
        </div>
<!--termina demo-->
  <!--inicia demo-->
      <div class="swiper-slide">
      <h4 class="texttitslider">Melón BK</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=504" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=504v2.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=504" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <div class="botones-modelo" style="margin-top:8px; text-align:center;">
          <a class="boton boton-primario" style="font-size: 18px; width: 100%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=504%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Melón BK* Diamante para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
        </div>
        </div>
<!--termina demo-->
  <!--inicia demo-->
  <div class="swiper-slide">
      <h4 class="texttitslider">Márfi Rosaé</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=505.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <div class="botones-modelo" style="margin-top:8px; text-align:center;">
          <a class="boton boton-primario" style="font-size: 18px; width: 100%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Márfi Rosaé* Diamante para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
        </div>
    </div>
<!--termina demo-->
  <!--inicia demo-->
  <div class="swiper-slide">
      <h4 class="texttitslider">Cenicienta Silver</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=496" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=496.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-65px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundarioxvs" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=496" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <div class="botones-modelo" style="margin-top:8px; text-align:center;">
          <a class="boton boton-primario" style="font-size: 18px; width: 100%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=496%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Cenicienta Silver* Diamante para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
        </div>
        </div>
<!--termina demo-->

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  </section>

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
              <a style="width: 100% !important;" class="boton-secundario" href="https://mieventoapp.com/misxv/demosAmbar"><i class="fa fa-book" aria-hidden="true"></i> Ver Cátalogo</a>
              <a style="width: 100% !important;" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosAmbar%0A%0AHola 👋🏻%0ADeseo una Invitación del paquete *Ámbar* para *XV años* 🥳">
              <i class="fa fa-whatsapp"></i> Solicitar</a>
              
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
              <a style="width: 100% !important;" class="boton-secundario" href="https://mieventoapp.com/misxv/demosZafiro"><i class="fa fa-book" aria-hidden="true"></i> Ver Cátalogo</a>
              <a style="width: 100% !important;" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosZafiro%0A%0AHola 👋🏻%0ADeseo una Invitación del paquete  *Zafiro* para *XV años* 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
              
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
              <a style="width: 100% !important;" class="boton-secundario" href="https://mieventoapp.com/misxv/demosDiamante"><i class="fa fa-book" aria-hidden="true"></i> Ver Cátalogo</a>
              <a style="width: 100% !important;" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosDiamante%0A%0AHola 👋🏻%0ADeseo una Invitación del paquete  *DIAMANTE* 💎 para *XV años* 🥳"><i class="fa fa-whatsapp"></i> Solicitar</a>
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

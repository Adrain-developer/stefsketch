
<?= $this->Html->css(['bodaNB'.'.css?v=1.0-2b6']) ?>
<?= $this->Html->css(['infVersiones'.'.css?v=1.3']) ?>	
<?php $this->assign('title', 'Cumple Home'); ?>
<style>
section.como-funciona .step-number {
    text-align: center;
    padding: 0px 0px;
}
.boton-secundario{
  background: linear-gradient(180deg, #0b99f8, #78f1f3);
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
  color: #139cf8;
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
  <?php echo $this->Html->image('bannereventosCumpleanios.jpg', ['class' => 'parallax-slider full-imgprincipal', 'style' => 'filter: brightness(0.7);', 'alt' => 'PORTADA']); ?>
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
              <a class="boton boton-secundario smoth-scroll" href="#btnPortadaModelos" style="width: 65%;margin-bottom: 15px;">
                <i class="fa fa-book" aria-hidden="true"></i> Ver Diseños </a>
              <a class="boton boton-primario" target="_blank" style="width: 65%;" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/cunmple%0A%0AHola 👋🏻%0ADeseo una Invitación digital para un *Cumpleaños* !🥳">
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


  <section class="modelos">
    <div class="container">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
        <h2 id="btnPortadaModelos" class="title">Demos</h2>
          <p class="sub-title">Para cualquier evento</p>
        </div>
      </div>

      <div class="row modelos-list no-gutters" style="align-items: baseline;">

      <div class="col-6 col-md-3 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Bluey</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=724" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=724.png" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=724" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 14px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=724%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Bluey* para *Cumpleaños*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-6 col-md-3 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Paw Patrol</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=735" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=735.png" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=735" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 14px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=735%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Paw Patrol* para *Cumpleaños*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>


<div class="col-6 col-md-3 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Plim Plim</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=737" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=737.png" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=737" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 14px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=737%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Plim Plim* para *Cumpleaños*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>
<div class="col-6 col-md-3 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Lady Bug</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=736" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=736.png" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=736" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
          </div>
          <a class="boton boton-primario" style="font-size: 14px;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=736%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Lady Bug* para *Cumpleaños*!🥳" 
                style="text-align: center; width: 100%;">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
          </a>
</div>


<div class="col-12 col-md-12 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Super Mario Brs</h4>
        <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=739" target="_blank">
          <img src="https://mieventoapp.com/webroot/img/catalogo/banneridInvitacion=739.jpg" alt="MieventoApp" class="imgbnnlg" loading="lazy">
        </a>
        <div class="col-12 fix-align-btn">
            <div class="botones-modelo">
                <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=739" target="_blank">
                </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
            </div>
            <a class="boton boton-primario" style="font-size: 14px; text-align: center; width: 95%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=739%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Super Mario Brs* para *Cumpleaños*!🥳">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
            </a>
        </div>
</div>

<div class="col-12 col-md-12 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Spider-Man</h4>
        <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=738" target="_blank">
          <img src="https://mieventoapp.com/webroot/img/catalogo/banneridInvitacion=738.jpg" alt="MieventoApp" class="imgbnnlg" loading="lazy">
        </a>
        <div class="col-12 fix-align-btn">
            <div class="botones-modelo">
                <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=738" target="_blank">
                </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
            </div>
            <a class="boton boton-primario" style="font-size: 14px; text-align: center; width: 95%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=738%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Spider-Man* para *Cumpleaños*!🥳">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
            </a>
        </div>
</div>

<div class="col-12 col-md-12 modelo">
  <!--<h4>Black & Roses</h4>-->
  <h4 class="texttitslider">Sonic 3</h4>
        <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=734" target="_blank">
          <img src="https://mieventoapp.com/webroot/img/catalogo/banneridInvitacion=734.jpg" alt="MieventoApp" class="imgbnnlg" loading="lazy">
        </a>
        <div class="col-12 fix-align-btn">
            <div class="botones-modelo">
                <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=734" target="_blank">
                </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver</a>
            </div>
            <a class="boton boton-primario" style="font-size: 14px; text-align: center; width: 95%;" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=734%0A%0AHola 👋🏻%0AMe gustaría adquirir la invitación *Sonic 3* para *Cumpleaños*!🥳">
                <i class="fa fa-whatsapp"></i> 
                Solicitar
            </a>
        </div>
</div>



</div>

</section>
<!--Fin demos diamante-->




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

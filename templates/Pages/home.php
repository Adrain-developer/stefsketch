
<?= $this->Html->css(['bodaNB'.'.css?v=1.0-2b5']) ?>
<?= $this->Html->css(['infVersiones'.'.css?v=1.3']) ?>	

<?php $this->assign('title', 'Home'); ?>

<style>
section.como-funciona .step-number {
    text-align: center;
    padding: 0px 0px;
}
.boton-secundario{
  background: linear-gradient(135deg, #8673a1 0%, #ebb0f3 25%, #8673a1 75%, #ebb0f3 100%);
    color: #fff;
}
.outer-menu .hamburger{
  background: linear-gradient(135deg, #8673a1 0%, #ebb0f3 25%, #8673a1 75%, #ebb0f3 100%);
}
.divisionmorada{
  content: "";
    width: 50px;
    height: 2px;
    background: #8673a1 !important;
    margin-bottom: 15px;
}
section.como-funciona .step-number span.number {
  background: linear-gradient(119deg, #e161e1, #f38658) !important;
}
.banner-call-to-action:before{
  background: linear-gradient(135deg, #8673a1 0%, #ebb0f3 25%, #8673a1 75%, #ebb0f3 100%);
}
section.portada-bodas .info-portada-bodas .box-info a.boton {
    padding: 18px 50px;
    margin-top: 20px;
}
.texttitslider{
      color: #f8bdc0;
}
</style>

<div class="parallax-mirror mirrorbanner-principal">
  <?php echo $this->Html->image('bannerHomeFiesta1.jpg', ['class' => 'parallax-slider full-imgprincipal', 'style' => '', 'alt' => 'PORTADA']); ?>
</div>
<!-- Portada -->
<section id="portada-bodas" class="portada-bodas" style="height: 55vh;">
<!-- Contenido portada -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="info-portada d-flex justify-content-center justify-content-md-between align-items-center">
        <!-- Info -->
        <div class="box-info">
          <h1>Invitaciones únicas para tu día especial</h1>
          <p class="price">Diseños exclusivos listos en 48 horas</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Curva divisoria portada -->
<div class="bottom-portada-bodas"></div>
</section>

<!-- Caracteristicas -->

<!-- Inicio Eventos -->
<section id="ventajas" class="como-funciona" style="background-color: #ffffff;">
    <div class="container">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">Eventos 🎉</h2>
          <p class="sub-title">Invitaciones para todo tipo de eventos</p>
        </div>
      </div>
      </div>
      <div class="container">
        <div class="row">
            <!-- Tarjeta Boda -->
            <!-- Tarjeta Boda -->
            <div class="col-12 col-md-4">
            <a href="https://mieventoapp.com/boda">
                <div class="neumorph-card wedding-card">
                        <div class="card-background rellaxevento" data-rellax-speed="-2">
                            <img src="https://mieventoapp.com/img/bannereventosBoda.jpg" alt="Imagen de boda" loading="lazy">
                        </div>
                        <div class="card-content">
                            <h2 class="card-title">Boda</h2>
                            <p class="card-text">La invitación ideal para tu boda</p>
                        </div>
                </div>
                </a>
            </div>
            <!-- Tarjeta XV años -->
            <div class="col-12 col-md-4">
              <a href="https://mieventoapp.com/misxv">
                  <div class="neumorph-card xv-card">
                          <div class="card-background rellaxevento" data-rellax-speed="-2">
                              <img src="https://mieventoapp.com/img/bannereventosXVsvDOS.jpg" alt="Imagen de XV años" loading="lazy">
                          </div>
                          <div class="card-content">
                              <h2 class="card-title">XV Años</h2>
                              <p class="card-text">La invitación perfecta para tus XV años</p>
                          </div>
                  </div>
              </a>
            </div>
            <!-- INICIO cumpleaños -->
            <div class="col-12 col-md-4">
              <a href="https://mieventoapp.com/cumple">
                  <div class="neumorph-card cumple-card">
                          <div class="card-background rellaxevento" data-rellax-speed="-2">
                              <img src="https://mieventoapp.com/img/bannereventosCumpleanios.jpg" alt="Imagen de XV años" loading="lazy">
                          </div>
                          <div class="card-content">
                              <h2 class="card-title">Cumpleaños</h2>
                              <p class="card-text">Encuentra la invitación para tu evento</p>
                          </div>
                  </div>
              </a>
            </div>
            <!-- FIN cumpleaños -->
        </div>
    </div>

      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
        <!-- Dropdown Contacto -->
        <div id="dropdownMenuContacto" class="dropdown">
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com%0A%0AHola 👋🏻%0ADeseo una Invitación digital!🥳">
              <i class="fa fa-whatsapp"></i>
              Comenzar diseño <br>
          </a>
        </div>
        <spam class="microcopys">¡Solo 5 minutos!</spam>
      </div>
    </div>

  </section>
  <!-- Fin eventos-->
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
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com%0A%0AHola 👋🏻%0ADeseo una Invitación digital!🥳">
              <i class="fa fa-whatsapp"></i>
              Comenzar diseño <br>
          </a>
        </div>
        <spam class="microcopys">¡Solo 5 minutos!</spam>
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
        // Inicializar Rellax
        var rellaxevento = new Rellax('.rellaxevento');
    </script>


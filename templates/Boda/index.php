
<?= $this->Html->css(['bodaNB']) ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-5QW6NF2749"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-5QW6NF2749');
	</script>

<style>
  @media only screen and (max-width: 767px){
section.como-funciona {
    padding-top: 80px;
}
  }
  section.modelos {
    background-color: #fff;
    padding: 10px 0 60px;
    position: relative;
}
@media only screen and (max-width: 767px){
section.como-funciona .step-number {
    padding-bottom: 0px;
}
}
section.como-funciona .step-number {
    text-align: center;
    padding: 0px 0px;
}
.divisionmorada{
  content: "";
    width: 50px;
    height: 2px;
    background-color: #8673a1;
    margin-bottom: 15px;
}

.mirrorbanner-principal{
  visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 850px;
}
@media (max-width: 767px){
  .mirrorbanner-principal{
    left: -450px;
    z-index: -100; 
    position: fixed; 
    top: 0px; 
    overflow: hidden; 
    transform: translate3d(0px, 0px, 0px); 
    height: 850px
}
}
.full-imgprincipal{
  height: 839px;
    width: 1374px;
    max-width: 1190%;
}
@media (max-width: 767px){
  .full-imgprincipal{
  height: 839px;
}
}
.responsive-banner{
  margin: 25px 0 25px 0;
}

</style>

<div class="parallax-mirror mirrorbanner-principal">
  <?php echo $this->Html->image('portadabodas.jpg', ['class' => 'parallax-slider full-imgprincipal', 'alt' => 'PORTADA']); ?>
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
          
          <h1>Invitaciones <br> digitales para <br>Boda</h1>

          <p class="price">¡Tu invitación en solo días! </p>



          <div class="botones-portada d-flex flex-column flex-sm-row justify-content-center align-items-center">

              <a class="boton boton-primario" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv%20%20Hola%20Deseo una Invitación digital para XV años!🥳" style="margin-bottom: 15px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Adquirir ahora 
              </a>
            <a id="btnPortadaModelos" class="boton boton-secundario smoth-scroll"
              href="#modelos">
              Ver Catálogo </a>

          </div>

        </div>

        <!-- Iframe -->
        <div class="box-iframe" style="">


          <div class="circulo-scrollea d-flex flex-column justify-content-center align-items-center">
            <span>¡Desliza!</span>

            <img class=""
              src="img/flecha_scrolea.svg" alt=""
              width="12" height="21">

          </div>

          <img class="flecha-scrollea"
            src="img/flecha_scrollea.svg" alt=""
            width="40" height="108">

          <div class="mockup-phone" style="position: relative; top: 90.875px;">
            <style type="text/css">
              .bio-mp-screen::-webkit-scrollbar {
                width: 6px;
                height: 6px;
              }

              .bio-mp-screen::-webkit-scrollbar-track {
                background: none;
                -webkit-border-radius: 10px;
                border-radius: 10px;
              }

              .bio-mp-screen::-webkit-scrollbar-thumb {
                -webkit-border-radius: 10px;
                border-radius: 10px;
                background: #777;
              }

              .bio-mp-screen::-webkit-scrollbar-thumb:window-inactive {
                background: #777;
              }
            </style>
            <div id="preview"
              style="width: 360px; height: 663.77px; overflow: hidden; transform-origin: 0px 0px 0px;">
              <div
                style="position: relative; top: 0px; left: 0px; width: 557px; height: 1027px; background: none; transform-origin: 0px 0px 0px; transform: scale(0.64632);">
                <img src="img/mobile-portada.webp"
                  style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"><iframe
                  src="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505"
                  class="bio-mp-screen"
                  style="position: absolute; top: 160px; left: 89.5px; width: 375px; height: 700px; border: 0px;"></iframe>
              </div>
            </div>
          </div>


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

<picture>
  <source type="image/png" srcset="https://mieventoapp.com/webroot/img/demos-banner.png">
  <?php echo $this->Html->image('demos-banner.png', ['alt' => 'demobanner', 'width' => '400', 'height' => '300']); ?>
</picture>

</div>

<!-- Caracteristicas -->




<!-- Caracteristicas 2 -->
<section id="ventajas" class="como-funciona" style="background-color: #ffffff;">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h2 class="title">¿Cómo obtenerla?</h2>
          <p class="sub-title">Super fácil!</p>

        

        </div>
      </div>




      <!-- Items -->
      <div class="row animaciones-steps no-gutters">

        <div class="col-md-4">
          <div class="step-number step-number-1">
            <span class="number">1</span>
            <h4>Elige</h4>
            <p>El tema que más te guste</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step-number step-number-1">
            <span class="number">2</span>
            <h4>Envíanos</h4>
            <p>La información que te solicitemos vía WhatsApp</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step-number step-number-1">
            <span class="number">3</span>
            <h4>Comparte</h4>
            <p>La invitación con todos tus invitados</p>
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
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv%20%20Hola%20Deseo una Invitación digital para XV años!🥳" style="margin-bottom: 15px;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Adquirir ahora 
              </a>
             
            </div>
      </div>

    </div>



  </section>


  <!-- Caracteristicas Modelo --
  <section id="caracteristicas-modelo" class="caracteristicas-modelo">
    <div class="container">
      <div class="row">
        <!-- Caracteristicas --
        <div class="col-md-6">



          <h2 class="title">
            Paquete VIPAccess </h2>
          <p class="sub-title">
          ¿Qué incluyen? </p>


          <!-- Listado --
          <div class="accordion" id="accordionList">

            <div class="acordeon-header d-flex justify-content-end">
              <!--<span>Incluido</span>--
              <span>¿Qué es?</span>
            </div>



            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item18">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item18" aria-expanded="true"
                  aria-controls="collapse-Item18">
                  Envío ilimitado </a>


                <div class="iconos-item d-flex justify-content-around">

                  <!--<span class="incluido-item"></span>-->

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item18"
                    aria-expanded="true" aria-controls="collapse-Item18"></a>

                </div>

              </div>

              <div id="collapse-Item18" class="collapse" aria-labelledby="item18" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    A través de WhatsApp, Correo Electrónico, Redes Sociales y cualquier plataforma digital </p>
                </div>
              </div>


            </div>
            <!-- /Item -->




            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item17">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item17" aria-expanded="true"
                  aria-controls="collapse-Item17">
                  Música de fondo </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item17"
                    aria-expanded="true" aria-controls="collapse-Item17"></a>

                </div>

              </div>

              <div id="collapse-Item17" class="collapse" aria-labelledby="item17" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Vuestra canción sonará de fondo en la invitación </p>
                </div>
              </div>


            </div>
            <!-- /Item -->








            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item1">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item1" aria-expanded="true"
                  aria-controls="collapse-Item1">
                  Cuenta Regresiva </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item1"
                    aria-expanded="true" aria-controls="collapse-Item1"></a>

                </div>

              </div>

              <div id="collapse-Item1" class="collapse" aria-labelledby="item1" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Emocionante cuenta regresiva en tiempo real directo a la fecha de tu evento </p>
                </div>
              </div>


            </div>
            <!-- /Item -->


            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item2">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item2" aria-expanded="true"
                  aria-controls="collapse-Item2">

                  Ubicación e Indicaciones </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item2"
                    aria-expanded="true" aria-controls="collapse-Item2"></a>

                </div>

              </div>

              <div id="collapse-Item2" class="collapse" aria-labelledby="item2" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Mapa interactivo con la ubicación del evento, tus invitados llegarán sin complicaciones </p>
                </div>
              </div>


            </div>
            <!-- /Item --



            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item3">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item3" aria-expanded="true"
                  aria-controls="collapse-Item3">

                  Lista de canciones </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item3"
                    aria-expanded="true" aria-controls="collapse-Item3"></a>

                </div>

              </div>

              <div id="collapse-Item3" class="collapse" aria-labelledby="item3" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Tus invitados pueden crear la lista de canciones que no pueden faltar en tu fiesta </p>
                </div>
              </div>


            </div>
            <!-- /Item -->




            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item4">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item4" aria-expanded="true"
                  aria-controls="collapse-Item4">

                  Regalos </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item4"
                    aria-expanded="true" aria-controls="collapse-Item4"></a>

                </div>

              </div>

              <div id="collapse-Item4" class="collapse" aria-labelledby="item4" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Tus invitados tienen la posibilidad de hacerte llegar sus regalos </p>
                </div>
              </div>


            </div>
            <!-- /Item -->



            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item5">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item5" aria-expanded="true"
                  aria-controls="collapse-Item5">


                  Agenda </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item5"
                    aria-expanded="true" aria-controls="collapse-Item5"></a>

                </div>

              </div>

              <div id="collapse-Item5" class="collapse" aria-labelledby="item5" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Tus invitados pueden agendar tu gran día con un solo clic en sus agendas </p>
                </div>
              </div>


            </div>
            <!-- /Item -->



            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item6">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item6" aria-expanded="true"
                  aria-controls="collapse-Item6">

                  Álbum de fotos </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item6"
                    aria-expanded="true" aria-controls="collapse-Item6"></a>

                </div>

              </div>

              <div id="collapse-Item6" class="collapse" aria-labelledby="item6" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Una historia única en un hermoso recorrido fotográfico </p>
                </div>
              </div>


            </div>
            <!-- /Item -->



            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item7">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item7" aria-expanded="true"
                  aria-controls="collapse-Item7">

                  Lista de asistentes (RSVP) </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item7"
                    aria-expanded="true" aria-controls="collapse-Item7"></a>

                </div>

              </div>

              <div id="collapse-Item7" class="collapse" aria-labelledby="item7" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Tus invitados pueden confirmar su presencia para ayudarte en la lista de invitados final </p>
                </div>
              </div>


            </div>
            <!-- /Item --



            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item8">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item8" aria-expanded="true"
                  aria-controls="collapse-Item8">
                  Instagram Wall </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item8"
                    aria-expanded="true" aria-controls="collapse-Item8"></a>

                </div>

              </div>

              <div id="collapse-Item8" class="collapse" aria-labelledby="item8" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Todas las publicaciones de tu evento en único lugar para que todos los invitados participen </p>
                </div>
              </div>


            </div>
            <!-- /Item --



            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item9">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item9" aria-expanded="true"
                  aria-controls="collapse-Item9">

                  Dress Code </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item9"
                    aria-expanded="true" aria-controls="collapse-Item9"></a>

                </div>

              </div>

              <div id="collapse-Item9" class="collapse" aria-labelledby="item9" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Informa a tus invitados el código o estilo de vestimenta elegido para tu gran día </p>
                </div>
              </div>


            </div>
            <!-- /Item --




            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item10">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item10" aria-expanded="true"
                  aria-controls="collapse-Item10">

                  Acceso VIP </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item10"
                    aria-expanded="true" aria-controls="collapse-Item10"></a>

                </div>

              </div>

              <div id="collapse-Item10" class="collapse" aria-labelledby="item10" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Configura tu invitación en modo privado, solo los invitados con acceso pueden verla </p>
                </div>
              </div>


            </div>
            <!-- /Item --



            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item11">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item11" aria-expanded="true"
                  aria-controls="collapse-Item11">
                  Acceso clientes </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item11"
                    aria-expanded="true" aria-controls="collapse-Item11"></a>

                </div>

              </div>

              <div id="collapse-Item11" class="collapse" aria-labelledby="item11" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Configura funciones de tu invitación, visualiza lista de invitados y de canciones sugeridas. </p>
                </div>
              </div>


            </div>
            <!-- /Item --



            <!-- Item --
            <div class="card item-caracteristica">

              <div class="card-header d-flex justify-content-between" id="item12">

                <a class="name-item" href="#" data-toggle="collapse" data-target="#collapse-Item12" aria-expanded="true"
                  aria-controls="collapse-Item12">
                  Link personalizable </a>


                <div class="iconos-item d-flex justify-content-around">

                  <span class="incluido-item"></span>

                  <a class="link-more-item" href="#" data-toggle="collapse" data-target="#collapse-Item12"
                    aria-expanded="true" aria-controls="collapse-Item12"></a>

                </div>

              </div>

              <div id="collapse-Item12" class="collapse" aria-labelledby="item12" data-parent="#accordionList">
                <div class="card-body">
                  <p>
                    Personaliza el link de tu invitación como más te guste </p>
                </div>
              </div>


            </div>
            <!-- /Item --



          </div>

          <div class="row d-flex justify-content-center">
            <a class="boton boton-primario" data-toggle="modal" data-target="#modal-form-solicitar-invitacion"
              data-backdrop="static" href=" #">
              ¡Lo quiero ahora! </a>
          </div>


          <!-- Share --
          <div class="share-model text-center">
            <p>Comparte este modelo </p>
            <div class="addthis_inline_share_toolbox"></div>
          </div>

        </div>



        <!-- Mockup --
        <div class="col-md-6 d-flex justify-content-end">


          <div class="box-iframe" >
            <div class="mockup-phone">
              <div id="preview"></div>
            </div>

            <div class="qr-info d-flex justify-content-center align-items-center" id="demoqr">

              <h2>
                <span>Fácil, rápido y seguro</span>
               
              </h2>
            </div>
            <div class="qr-info d-flex justify-content-center align-items-center">
              <img class="qr-modelo" data-src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=503.png" src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=503.png"  alt=""
              width="435" height="787" loading="lazy">

              </div>

          </div>

        </div>


      </div>
    </div>
  </section>-->




   <!-- Modelos -->


   <section id="modelos" class="modelos">
    <div class="container">


      <div class="row">
        <div class="col-md-12">
          <h2 class="title">Modelos</h2>
          <p class="sub-title">Para todos los gustos, encuentra el tuyo...</p>
        </div>
      </div>

      <div class="row modelos-list no-gutters">



        <div class="col-6 col-md-2 modelo">
          <!--<h4>Black & Roses</h4>-->
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=497.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=497.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>

        <div class="col-6 col-md-2 modelo">
          <!--<h4>Black & Roses</h4>-->
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=507" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=507.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=507.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=507" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>

        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=505.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=505.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=504" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=504.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=504.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=504" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=492" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=492.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=492.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=492" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=487" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=487.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=487.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=487" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=474" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=474.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=474.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=474" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=490" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=490.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=490.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=490" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=486" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=486.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=486.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=486" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=502" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=502.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=502.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=502" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=506" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=506.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=506.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=506" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=495" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=495.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=495.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=495" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
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



        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=488" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=488.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=488.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=488" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=500" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=500.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=500.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=500" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=503" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=503.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=503.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=503" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=162" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=162.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=162.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=162" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=498" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=498.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=498.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=498" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=482" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=482.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=482.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=482" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=484" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=484.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=484.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=484" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=146" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=146.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=146.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=146" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=154" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=154.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=154.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=154" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=477" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=477.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=477.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=477" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=485" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=485.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=485.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=485" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=148" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=148.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=148.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=148" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=475" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=475.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=475.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=475" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=479" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=479.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=479.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=479" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=480" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=480.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=480.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=480" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=472" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=472.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=472.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=472" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=153" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=153.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=153.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=153" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=481" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=481.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=481.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=481" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=489" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=489.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=489.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=489" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=491" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=491.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=491.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=491" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=499" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=499.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=499.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=499" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=155" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=155.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=155.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=155" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=473" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=473.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=473.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=473" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=478" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=478.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=478.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=478" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=151" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=151.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=151.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=151" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=483" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=483.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=483.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=483" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=159" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=159.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=159.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=159" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=173" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=173.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=173.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=173" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=152" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=152.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=152.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=152" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=158" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=158.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=158.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=158" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=172" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=172.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=172.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=172" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=494" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=494.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=494.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=494" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=147" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=147.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=147.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=147" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=149" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=149.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=149.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=149" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=175" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=175.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=175.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=175" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=501" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=501.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=501.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=501" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=174" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=174.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=174.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=174" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=496" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=496.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=496.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=496" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=150" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=150.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=150.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=150" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=163" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=163.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=163.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=163" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=164" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=164.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=164.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=164" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=493" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=493.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=493.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=493" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=476" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=476.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=476.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=476" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=165" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=165.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=165.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=165" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=145" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=145.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=145.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=145" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=144" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=144.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=144.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=144" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=171" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=171.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=171.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=171" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=156" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=156.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=156.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=156" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>


        <div class="col-6 col-md-2 modelo">
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=142" target="_blank">
            <picture>
              <!--<source type="image/webp" srcset="https://MieventoApp.io/public/images/modelo_35_es.webp">-->
              <source type="image/png" srcset="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=142.png">
              <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=142.png"
                alt="MieventoApp" width="435" height="787" loading="lazy">
            </picture>
          </a>
          <div class="botones-modelo">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=142" target="_blank">
              Ver ejemplo </a>
            <!--<a class="boton boton-primario" href="https://MieventoApp.io/es/modelo/marsala">Más detalles</a>-->
          </div>
        </div>

            </div>
<!--FINDEMOS-->
      <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">

        <p>
          Escríbenos y comencemos.
        </p>

        <!-- Dropdown Contacto -->
        <div id="dropdownMenuContacto" class="dropdown">
        <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank"
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv%20%20Hola%20Deseo una Invitación digital para XV años!🥳" style="margin-bottom: 15px;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Adquirir ahora 
               </a>
             
            </div>
      </div>


    </div>
  </section>


   <!-- Como funciona --
   <section id="como-funciona" class="como-funciona" style="background-color: #d6d6d6;">

  <div class="row text-center" style="margin-bottom: 20px;">
    <div class="col-sm-12" style="margin-bottom: 15px;">Aceptamos pagos vía PayPal, Mercado Pago y Transferencia bancaria</div>
    <div class="col-xs-6 text-center" style="margin-left: 30%;"><?php echo $this->Html->image('paypal_logo.png', ['alt' => 'mercado-pago', 'style' => 'width: 100px;']); ?></div>
    <div class="col-xs-6 text-center"><?php echo $this->Html->image('mercado_pago_logo.png', ['alt' => 'mercado-pago', 'style' => 'width: 100px;']); ?></div> 
  </div>

</section>-->


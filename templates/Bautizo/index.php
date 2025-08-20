
<?= $this->Html->css(['bodaNB'.'.css?v=1']) ?>
<?= $this->Html->css(['infVersiones'.'.css?v=1.2']) ?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css?v=1.0"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
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
@media only screen and (max-width: 767px){
section.como-funciona .step-number {
    padding-bottom: 0px;
}
}
section.como-funciona .step-number {
    text-align: center;
    padding: 0px 0px;
}
.boton-secundario{
  background: linear-gradient(135deg, #AED1E3 0%, #5dbff2 25%, #AED1E3 75%, #5dbff2 100%);
    color: #fff;
}
.outer-menu .hamburger{
  background: linear-gradient(135deg, #AED1E3 0%, #5dbff2 25%, #AED1E3 75%, #5dbff2 100%);
}
.divisionmorada{
  content: "";
    width: 50px;
    height: 2px;
    background: #5dbff2 !important;
    margin-bottom: 15px;
}
section.como-funciona .step-number span.number {
    background: #AED1E3 !important;
}
.banner-call-to-action:before{
  background: linear-gradient(135deg, #AED1E3 0%, #5dbff2 25%, #AED1E3 75%, #5dbff2 100%);
}
.boton{
  padding: 5px 30px;
}
section.portada-bodas .info-portada-bodas .box-info a.boton {
    padding: 18px 50px;
    margin-top: 20px;
}
.texttitslider{
      color: #AED1E3;
}
.swiper {
  width: 100%;
}
.swiper-slide {
background-position: center;
background-size: cover;
width: 180px;
display: grid;
align-content: center;
}
.swiper-slide img {
  display: block;
  width: 100%;
}
.swiper-3d .swiper-slide-shadow-left {
border-radius:25px
}
.swiper-3d .swiper-slide-shadow-right {
  border-radius:25px
}
.texttitslider{
  font-weight: 700;
  width: 100%;
  display: inline-block;
  margin-bottom: 5px;
  font-size: 23px;
  text-align: center;
}
.swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
font-size: 20px;
}
.swiper-button-next:after, .swiper-button-prev:after {
font-size: 20px;
}
.swiper-button-next, .swiper-button-prev {
  color: #ffffff;
  border-radius: 20px;
  width: 32px;
  height: 32px;
  background-color: rgba(17, 17, 17, 0.5);
  fill: rgb(255, 255, 255);
  box-shadow: rgba(0, 0, 0, 0.3) 0px 4px 12px 0px;
}
.review {
  text-align: center;
  font-size: 18px;
  background: #f2f2f2;
  height: max-content;
  padding: 24px;
  border-radius: 8px;
}
@media only screen and (max-width: 767px){
.review {
padding: 24px 50px;
}
}
.review img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.swiper-pagination-bullet {
  width: 7px;
  height: 7px;
  text-align: center;
  line-height: 20px;
  font-size: 12px;
  color: #000;
  opacity: 1;
  background: rgba(0, 0, 0, 0.2);
}
.swiper-pagination-bullet-active {
  color: #fff;
  background: #197bff;
}
</style>


<div class="parallax-mirror mirrorbanner-principal">
  <?php echo $this->Html->image('BannerUnoxvRosa.jpg', ['class' => 'parallax-slider full-imgprincipal', 'alt' => 'PORTADA']); ?>
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
          <h1>Invitaciones digitales para Bautizo</h1>
          <p class="price">¡Obtenla hoy mismo! </p>

          <div class="botones-portada d-flex flex-column justify-content-center align-items-center" style="padding-bottom: 15px;">
              <a class="boton boton-primario" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv%20%20Hola%20Deseo una Invitación digital para *XV años* !🥳" style="margin-bottom: 15px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Adquirir ahora 
              </a>
            <a id="btnPortadaModelos" class="boton boton-secundario smoth-scroll"
              href="#modelos">
              <i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
          </div>
        </div>
       
        <!-- Iframe -->
        <div class="box-iframe" style="">
        <a class=" smoth-scroll" href="#modelos"> 
  <picture>
    <source type="image/png" srcset="https://mieventoapp.com/webroot/img/bannerxvsegundoMarzo.webp">
    <?php echo $this->Html->image('bannerxvsegundoMarzo.webp', ['alt' => 'demobanner', 'style' => 'filter: drop-shadow(2px 2px 6px #6969699c);width: 100%; margin-left: 23%;']); ?>
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

      <div class="row">
        <div class="col-md-12">
        <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
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
            <p>El tema y el paquete que más te guste</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step-number step-number-1">
            <span class="number">2</span>
            <h4>Envíanos</h4>
            <p>La información de tu evento vía WhatsApp</p>
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
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv%20%20Hola%20Deseo una Invitación digital para *XV años*!🥳" style="margin-bottom: 15px;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Adquirir ahora 
              </a>
             
            </div>
      </div>

    </div>

  </section>

 <!-- Versiones -->

 <section style="background-color: #ffffff; 10px 0 0px 0">
    <div class="container-fluid">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title">Paquetes</h2>
            <p class="sub-title">Justo lo necesario para tu evento, tu eliges!</p>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-3">
            <div class="card text-center" style="background: linear-gradient(-45deg, #ffe0b5, #fc9d53 50%, #ff0000)">
              <div class="title">
                <h2>Basic</h2>
                <i class="fa fa-check-square-o" aria-hidden="true"></i>
              </div>
              <div class="price">
                <!--<h4><sup>$</sup>399</h4>-->
              </div>
              <div class="option">
                <ul>
                  <li> <i class="fa fa-check" aria-hidden="true"></i> Nombre de la Festejada </li>
                  <li> <i class="fa fa-check" aria-hidden="true"></i> Foto Principal </li>
                  <li> <i class="fa fa-check" aria-hidden="true"></i> Cuenta Regresiva </li>
                  <li> <i class="fa fa-check" aria-hidden="true"></i> Dirección misa y recepción </li>
                  <li> <i class="fa fa-check" aria-hidden="true"></i> Pensamiento </li>
                </ul>
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/misxv/demosBasic"><i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosBasic%20%20Hola%20Deseo una Invitación *Basic* para XV años 🥳"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg> Solicitar</a>
            </div>
          </div>
          <!-- END Col one -->
          <div class="col-sm-3">
            <div class="card text-center" style="background: linear-gradient(-45deg, #7138bb, #69ff9f)">
              <div class="title">
                <h2>Essential</h2>
                <i class="fa fa-gift" aria-hidden="true"></i>
              </div>
              <div class="price">
                <!--<h4><sup>$</sup>599</h4>-->
              </div>
              <div class="option">
                <ul>
                  <li style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Todo lo que incluye el paquete BASIC </li>
                  <li> <i class="fa fa-check" aria-hidden="true"></i> Confirmación de asistencia por llamada y WhatsApp</li>
                  <li> <i class="fa fa-check" aria-hidden="true"></i> Código de vestimenta </li>
                  <li> <i class="fa fa-check" aria-hidden="true"></i> Padres, padrinos, chambelanes y damas de honor </li>
                </ul>
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/misxvdemosEssential"><i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosEssential%20%20Hola%20Deseo una Invitación *Essential* para XV años 🥳"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg> Solicitar</a>
            </div>
          </div>
          <!-- END Col one -->
          <div class="col-sm-3">
            <div class="card text-center" style="background: linear-gradient(45deg, #fffb03, #9659f9);">
              <div class="title">
                <h2>Petite</h2>
                <i class="fa fa-heart" aria-hidden="true"></i>
              </div>
              <div class="price">
                <!--<h4><sup>$</sup>899</h4>-->
              </div>
              <div class="option">
                <ul>
                  <li style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Todo lo que incluye el paquete ESSENTIAL </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Música </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Mesas de regalo </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Álbum (5 fotos) </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Nuevo diseño dinámico </li>
                </ul>
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/misxv/demosPetite"><i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosPetite%20%20Hola%20Deseo una Invitación *Petite* para XV años 🥳"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg> Solicitar</a>
            </div>
          </div>
          <!-- END Col two -->
          <div class="col-sm-3">
            <div class="card text-center" style="background: linear-gradient(-45deg, #ff00e5, #2f35ff)">
              <div class="title">
                <h2>Premium</h2>
                <i class="fa fa-diamond" aria-hidden="true"></i>
              </div>
              <div class="price">
                <!--<h4><sup>$</sup>1199</h4>-->
              </div>
              <div class="option">
                <ul>
                  <li style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> Todo lo que incluye el paquete PETITE </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Mensaje de inicio</li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Animación de sobre </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Música automática </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Álbum (15 fotos) </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Itinerario </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Menú </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Sugerencia de hospedaje </li>
                  <li> <i class="fa fa-star" aria-hidden="true"></i> Recordatorios semanas y días antes de tu evento </li>
                </ul>
              </div>
              <a class="boton-secundario" href="https://mieventoapp.com/misxv/demosPremium"><i class="fa fa-book" aria-hidden="true"></i> Ver Catálogo </a>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosPremium%20%20Hola%20Deseo una Invitación *PREMIUM* 💎 para XV años 🥳"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg> Solicitar</a>
            </div>
          </div>
          <!-- END Col three -->
        </div>
      </div>
    </div>
  </section>

  <section id="modelos" class="modelos">
  <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title">Nuevos diseños 🔥</h2>
          <p class="sub-title">Lo ultimo en tendencia</p>
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #ffffff; padding: 0px 0 30px 0;">
    <div class="">
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <h4 class="texttitslider">Márfi Rosaé</h4>
        <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505" target="_blank">
          <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=505.webp" alt="MieventoApp" loading="lazy">
        </a>
        <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
            <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505" target="_blank">
            </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
        </div>
        <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=505%20%20Hola, %20Me gustaría adquirir la invitación *Márfi Rosaé* Premium para *XV años*!🥳" 
              style="text-align: center; width: 100%;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
              Solicitar
        </a>
      </div>

      <div class="swiper-slide">
        <h4 class="texttitslider">Noiré</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=485" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=485.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=485" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=485%20%20Hola, %20Me gustaría adquirir la invitación *Noiré* Premium para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Solicitar
          </a>
      </div>
      <div class="swiper-slide">
        <h4 class="texttitslider">Lilunzel</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=615" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=615.png" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=615" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=615%20%20Hola, %20Me gustaría adquirir la invitación *Lilunzel* Premium para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Solicitar
          </a>
        </div>
      <div class="swiper-slide">
        <h4 class="texttitslider">RosReina</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=494" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=494.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=494" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=494%20%20Hola, %20Me gustaría adquirir la invitación *RosReina* Premium para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Solicitar
          </a>
      </div>
      <div class="swiper-slide">
        <h4 class="texttitslider">Noir Rose</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=497.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=497%20%20Hola, %20Me gustaría adquirir la invitación *Noir Rose* Premium para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Solicitar
          </a>
      </div>
      <div class="swiper-slide">
        <h4 class="texttitslider">Sky Butterfly</h4>
          <a href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=478" target="_blank">
            <img src="https://mieventoapp.com/webroot/img/catalogo/idInvitacion=478.webp" alt="MieventoApp" loading="lazy">
          </a>
          <div class="botones-modelo" style="margin-top:-45px; text-align:center; margin-bottom:5px">
              <a class="boton boton-secundario" href="https://adntecnologias.com/web/invitaciones/ver?idInvitacion=478" target="_blank">
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=478%20%20Hola, %20Me gustaría adquirir la invitación *Sky Butterfly* Premium para *XV años*!🥳" 
                style="text-align: center; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Solicitar
          </a>
      </div>
     
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  </div>
  </section>

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
            </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
        </div>
        <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
              href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=188%20%20Hola, %20Me gustaría adquirir la invitación *Silvera* Basic para *Boda*!🥳" 
              style="text-align: center; width: 100%;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
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
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=187%20%20Hola, %20Me gustaría adquirir la invitación *Pure Gold* Basic para *Boda*!🥳" 
                style="text-align: center; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
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
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=455%20%20Hola, %20Me gustaría adquirir la invitación *Otoñal* Basic para *Boda*!🥳" 
                style="text-align: center; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
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
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=180%20%20Hola, %20Me gustaría adquirir la invitación *Marlon* Basic para *Boda*!🥳" 
                style="text-align: center; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
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
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=395%20%20Hola, %20Me gustaría adquirir la invitación *Alcatraz* Basic para *Boda*!🥳" 
                style="text-align: center; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
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
              </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
          </div>
          <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=533%20%20Hola, %20Me gustaría adquirir la invitación *Satin y Blue* Basic para *Boda*!🥳" 
                style="text-align: center; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
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
                </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
            </div>
            <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=563%20%20Hola, %20Me gustaría adquirir la invitación *Royal Platia* Basic para *Boda*!🥳" 
                  style="text-align: center; width: 100%;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
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
                  </i> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Ver demo </a>
              </div>
              <a class="boton boton-primario" msj="Hola MieventoApp!" numberto="+52 2225062683" target="_blank" 
                    href="https://api.whatsapp.com/send?phone=+522225062683&text=https://adntecnologias.com/web/invitaciones/ver?idInvitacion=397%20%20Hola, %20Me gustaría adquirir la invitación *Gatsby* Basic para *Boda*!🥳" 
                    style="text-align: center; width: 100%;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
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
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv%20%20Hola%20Deseo una Invitación digital para *XV años*!🥳" style="margin-bottom: 15px;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Adquirir ahora 
               </a>
             
        </div>
      </div>
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
        <div class="col-sm-3 col-6">
            <div class="card text-center" style="background: linear-gradient(-45deg, #ffe0b5, #fc9d53 50%, #ff0000); height: 193px;">
              <div class="title">
                <h2 style="font-size: 18px;">Demos<br>Basic</h2>
              </div>
              <a style="width: 100px !important;" class="boton-secundario" href="https://mieventoapp.com/misxv/demosBasic"><i class="fa fa-book" aria-hidden="true"></i> Ver </a>
              <a style="width: 100px !important;" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosBasic%20%20Hola%20Deseo una Invitación *Basic* para XV años 🥳"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg> Solicitar</a>
              
            </div>
          </div>
          <!-- END Col one -->
          <div class="col-sm-3 col-6">
            <div class="card text-center" style="background: linear-gradient(-45deg, #7138bb, #69ff9f); height: 193px;">
              <div class="title">
                <h2 style="font-size: 18px;">Demos Essential</h2>
              </div>
              <a style="width: 100px !important;" class="boton-secundario" href="https://mieventoapp.com/misxv/demosEssential"><i class="fa fa-book" aria-hidden="true"></i> Ver </a>
              <a style="width: 100px !important;" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosEssential%20%20Hola%20Deseo una Invitación *Essential* para XV años 🥳"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg> Solicitar</a>
              
            </div>
          </div>
          <!-- END Col one -->
          <div class="col-sm-3 col-6">
            <div class="card text-center" style="background: linear-gradient(45deg, #fffb03, #9659f9); height: 193px;">
              <div class="title">
                <h2 style="font-size: 18px;">Demos Petite</h2>
              </div>
              <a style="width: 100px !important;" class="boton-secundario" href="https://mieventoapp.com/misxv/demosPetite"><i class="fa fa-book" aria-hidden="true"></i> Ver </a>
              <a style="width: 100px !important;" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosPetite%20%20Hola%20Deseo una Invitación *Petite* para XV años 🥳"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg> Solicitar</a>
              
            </div>
          </div>
          <!-- END Col two -->
          <div class="col-sm-3 col-6">
            <div class="card text-center" style="background: linear-gradient(-45deg, #ff00e5, #2f35ff); height: 193px;">
              <div class="title">
                <h2 style="font-size: 18px;">Demos Premium</h2>
              </div>
              <a style="width: 100px !important;" class="boton-secundario" href="https://mieventoapp.com/misxv/demosPremium"><i class="fa fa-book" aria-hidden="true"></i> Ver </a>
              <a style="width: 100px !important;" target="_blank" href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/misxv/demosPremium%20%20Hola%20Deseo una Invitación *PREMIUM* 💎 para XV años 🥳"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg> Solicitar</a>
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

<!--REVIEWS-->
  <section style="background-color: #ffffff; padding: 30px 0 30px 0;">
    <div class="container">
    <div class="banner-call-to-action d-flex justify-content-center align-items-center flex-column">
      </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">La opinión de nuestros clientes ❤️</h2>
                <p class="sub-title">Se parte de la emoción</p>
            </div>
        </div>
    </div>


    <div
    class="HeaderContainer__Inner-sc-1532ffp-0 gtiuwG es-header-container HeaderComponent__StyledHeader-sc-9lcg5s-0 fXNqIK">
    <div class="Header__Info-sc-criq3t-0 eJbfvz es-header-info">
        <div class="HeaderTitle__Container-sc-1nf903g-0 ittcQw es-header-title-container">
            <div
                class="Icon__IconContainer-sc-11wrh3u-0 croLud es-source-image HeaderTitle__StyledSourceImage-sc-1nf903g-1 iwosRd es-header-title-logo es-facebook-logo">
                <div>
                    <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 94 36" class="injected-svg"
                            data-src="https://static.elfsight.com/icons/app-all-in-one-reviews-logos-facebook-logo-multicolor.svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path fill="#0076FB"
                                d="M63.058 13.502c4.173 0 5.834 2.674 5.834 5.999 0 3.888-2.619 5.999-5.834 5.999-3.938 0-5.834-2.357-5.834-6 0-3.43 1.463-5.998 5.834-5.998Zm12.879 0c4.172 0 5.834 2.674 5.834 5.999 0 3.888-2.619 5.999-5.834 5.999-3.938 0-5.834-2.357-5.834-6 0-3.43 1.463-5.998 5.834-5.998Zm-62.245-.159c1.373 0 2.6.704 3.486 1.83v-1.495h3.36v11.417h-3.342l.018-1.477c-.885 1.143-2.15 1.864-3.522 1.864-2.692 0-4.877-2.34-4.877-6.07 0-3.764 2.185-6.069 4.877-6.069Zm34.085-5.7-.018 7.548c.885-1.144 2.15-1.865 3.522-1.865 2.691 0 4.877 2.34 4.877 6.07 0 3.764-2.186 6.069-4.877 6.069-1.373 0-2.601-.704-3.486-1.83v1.513l-3.486-.07V8.03l3.468-.387Zm-10.188 5.77c6.495.052 5.372 6.763 5.296 7.176l-.003.02v-.017H35.44s-.163 2.04 1.878 2.216c2.023.176 4.606-.598 4.606-.598l.74 2.305s-2.42 1.196-5.599.827c-3.197-.37-5.057-1.513-5.202-5.454 0 0-.975-6.51 5.726-6.474Zm-14.035 1.355c1.97-1.759 6.358-1.583 7.803-.545l-.848 2.463s-.633-.616-2.44-.598c0 0-2.672-.159-2.672 3.22v.175c0 3.36 2.673 3.22 2.673 3.22 1.806.035 2.439-.58 2.439-.598l.848 2.463c-1.463 1.038-5.834 1.213-7.803-.546-1.698-1.513-1.698-3.993-1.662-4.627-.036-.633-.036-3.096 1.662-4.627Zm62.986-7.16V18.78l3.558-5.138h3.74l-3.65 5.736L94 25.13h-3.613l-3.847-5.84v5.84h-3.504V7.96l3.504-.352ZM6.369 7.502h2.464v2.78H7.26s-1.427-.193-1.427 1.144v2.181h2.999l-.361 3.026H5.816v8.445H2.348V16.58H0v-2.974h2.439v-2.533s-.308-1.39.975-2.533c1.233-1.1 2.834-1.045 2.955-1.039Zm8.389 8.621c-1.229 0-2.24 1.09-2.24 2.234v2.182c0 1.143.993 2.234 2.24 2.234 1.228 0 2.24-1.09 2.24-2.234v-2.182c0-1.143-.994-2.234-2.24-2.234Zm48.264-.053c-1.283 0-2.312 1.091-2.312 2.235v2.181c0 1.144 1.047 2.234 2.312 2.234 1.282 0 2.312-1.09 2.312-2.234v-2.181c0-1.144-1.048-2.235-2.312-2.235Zm12.879 0c-1.283 0-2.312 1.091-2.312 2.235v2.181c0 1.144 1.047 2.234 2.312 2.234 1.282 0 2.312-1.09 2.312-2.234v-2.181c0-1.144-1.048-2.235-2.312-2.235Zm-25.668-.017c-1.228 0-2.24 1.09-2.24 2.234v2.181c0 1.144 1.012 2.235 2.24 2.235 1.229 0 2.24-1.091 2.24-2.235v-2.181c0-1.144-1.011-2.234-2.24-2.234Zm-12.698-.282c-2.348 0-2.168 2.534-2.168 2.534h4.336s.18-2.534-2.168-2.534Z">
                            </path>
                        </svg></div>
                </div>
            </div>
            <div class="HeaderTitle__Text-sc-1nf903g-2 hiuJfK es-header-title-text">Calificación</div>
        </div>
        <div class="Header__SourceInfo-sc-criq3t-1 igxRbY es-header-source-info">
            <div
                class="Rating__Container-sc-bk54oq-0 jHuwCI es-rating-container es-header-rating Header__StyledHeaderRating-sc-criq3t-2 fIgssJ">
                <div class="RatingValue__Container-sc-fl6036-0 grMzUy es-rating-value">4.9</div>
                <div class="RatingBar__Container-sc-qimg51-0 eyLxdR es-rating-bar-container">
                    <div
                        class="RatingItemFilledSvg__Container-sc-14jss50-0 ga-dIYY es-rating-item es-rating-stars-item-filled">
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Unfilled-sc-14jss50-2 bXVxrw cHATJH es-rating-item-unfilled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Filled-sc-14jss50-3 bXVxrw nUbNv es-rating-item-filled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                    <div
                        class="RatingItemFilledSvg__Container-sc-14jss50-0 ga-dIYY es-rating-item es-rating-stars-item-filled">
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Unfilled-sc-14jss50-2 bXVxrw cHATJH es-rating-item-unfilled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Filled-sc-14jss50-3 bXVxrw nUbNv es-rating-item-filled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                    <div
                        class="RatingItemFilledSvg__Container-sc-14jss50-0 ga-dIYY es-rating-item es-rating-stars-item-filled">
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Unfilled-sc-14jss50-2 bXVxrw cHATJH es-rating-item-unfilled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Filled-sc-14jss50-3 bXVxrw nUbNv es-rating-item-filled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                    <div
                        class="RatingItemFilledSvg__Container-sc-14jss50-0 ga-dIYY es-rating-item es-rating-stars-item-filled">
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Unfilled-sc-14jss50-2 bXVxrw cHATJH es-rating-item-unfilled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Filled-sc-14jss50-3 bXVxrw nUbNv es-rating-item-filled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                    <div
                        class="RatingItemFilledSvg__Container-sc-14jss50-0 ga-dIYY es-rating-item es-rating-stars-item-filled">
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Unfilled-sc-14jss50-2 bXVxrw cHATJH es-rating-item-unfilled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                        <div
                            class="RatingItemFilledSvg__ContainerAbsolute-sc-14jss50-1 RatingItemFilledSvg__Filled-sc-14jss50-3 bXVxrw nUbNv es-rating-item-filled">
                            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3796_102578)">
                                    <path
                                        d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                        fill="none"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3796_102578">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                </div>
            </div>
            <div class="HeaderTotalReviews__Container-sc-14hjk3j-0 XXlQN es-header-total-reviews-container">
                <div class="HeaderTotalReviews__Value-sc-14hjk3j-1 eDjDjx es-header-total-reviews-value">47 opiniones</div>
            </div>
        </div>
    </div>
    <div
        class="HeaderWriteReviewButton__Component-sc-a5mrro-0 hznugL es-header-write-review-button-container Header__StyledHeaderWriteReviewButton-sc-criq3t-3 iSciCy">
        <a href="https://www.facebook.com/adntech21/reviews" target="blank" size="15" class="ButtonBase__ButtonContainer-sc-p43e7i-3 euBiGU es-header-write-review-button botonazulreview" type="button" tabindex="0"><span
                class="ButtonBase__Overlay-sc-p43e7i-4 jUXzLe"
                style="padding: 8px 20px; background-color: rgba(0, 0, 0, 0);"><span
                    class="ButtonBase__Ellipsis-sc-p43e7i-5 dqiKFy">Escribe una opinión</span></span></a></div>
</div>



    <div class="container swiperrev mySwiperrev swiper">
        <div class="swiper-wrapper" style="align-items: center;">
                   <!--Inicio comentario-->
                   <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">100% recomendable y siempre están apoyándote en todo momento y es un servicio exelente lo recomiendo ampliamente</div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/eddg.munive/posts/pfbid036DGknKyNpJsQthyu69NNeVPCUtU5brecbom645i7aUH6ocf8wmzWnCs9VqNkXKUfl"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/susymartinezfbrv.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/susana.martinezramirez.96/posts/pfbid02p2HRRnm8hFfQNqhQBhpFA9kX4H8Vaco96fyFM84LvuFGSshKfY5acZQSrX9W5brUl"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Susy Martinez Ramirez</span><br>Febrero 9, 2024
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
<!--Inicio comentario-->
            <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">Excelente atención y calidad del trabajo. 100% recomendable.</div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/eddg.munive/posts/pfbid036DGknKyNpJsQthyu69NNeVPCUtU5brecbom645i7aUH6ocf8wmzWnCs9VqNkXKUfl"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/rvwEdgarFB.jpeg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/eddg.munive/posts/pfbid036DGknKyNpJsQthyu69NNeVPCUtU5brecbom645i7aUH6ocf8wmzWnCs9VqNkXKUfl"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Edgar Munive</span><br>Enero 13, 2024
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
           <!--Inicio comentario-->
           <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">Súper recomendable su trabajo, realmente te hacen lo que pides y a todos mis invitados les encanto mi invitación 10 de 10.
Sin duda vuelvo a elegir una invitación con ellos.
                                </div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/cecii.arriaga.a/posts/pfbid033JS6y19oZLZkT4ET2Svbq5vEPtKEQXLSEHnnbrPmdM2v8PDMC51vahteiFKNByzYl"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/ceciarriarvfb.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/cecii.arriaga.a/posts/pfbid033JS6y19oZLZkT4ET2Svbq5vEPtKEQXLSEHnnbrPmdM2v8PDMC51vahteiFKNByzYl"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Cecy Arriaga</span><br>Enero 15, 2024
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
           <!--Inicio comentario-->
           <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">Mi hija y yo estamos encantadas con los resultados de la invitación de los XV años , la invitación inteligente es súper genial. La recomiendo al máximo. 
Gracias a Hanna que siempre me ayudo <a href="https://www.facebook.com/adntech21/reviews" target="blank" ><span class="nombrefb">Leer más...</span>
                                </div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/adntech21/reviews"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/keniaBoombenreviewfb.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/adntech21/reviews"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Kenia Boombon</span><br>Septiembre 8, 2023
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
           <!--Inicio comentario-->
           <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">Mega recomendable, el servicio fue excelente, tuvieron la invitación super rápido y nos encantó como quedó. No se van a arrepentir! 😌
                                </div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/adntech21/reviews"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/joseluismontesreviewfb.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/adntech21/reviews"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Jose Luis Montes</span><br>Enero 31, 2023
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
           <!--Inicio comentario-->
           <div class="swiper-slide">
                <div class=" review">
                    <div class="bxloCP">
                        <div class="YusbI">
                            <div class="bXVxrw">
                                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="SimpleShortener__Inner-sc-19xjxqz-1 biILtm">
                                <div class="es-review-content-text">Super recomendado, muy buen servicio, todas mis dudas y lo q yo les pedí quedo genial. Super atentos. Y divina mi invitación. 🥰
                                </div>
                            </div>
                            <div class="bXVxrw row" style="margin-left:5px; margin-top:10px; align-items: center;">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <div>
                                    <a href="https://www.facebook.com/adntech21/reviews"
                                        target="_blank">
                                        <p class="textrev">Publicado en<br> <span style="color:#197bff; font-weight: 600;">Facebook</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:5px; margin-top:10px; align-items: center;margin: 20px;">
                    <div class="fotoperfilfb">
                        <div class="fRYNlR">
                            <div class="gJOYgw">
                                <img class="UobXQ" src="https://mieventoapp.com/webroot/img/review/marceivonibarrareviewfb.jpg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/adntech21/reviews"
                            target="_blank">
                            <p class="nombrefb"><span style="color:#000000; font-weight: 600;">Marce Ivon Ibarra</span><br>Julio 14, 2023
                            </p>
                        </a>
                    </div>
                </div>
            </div>
<!--Fin comentario-->
        </div>
        <div class="swiper-pagination"></div>
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
                  href="https://api.whatsapp.com/send?phone=+522225062683&text=https://mieventoapp.com/boda%20%20Hola%20Deseo una Invitación digital para *Boda*!🥳" style="margin-bottom: 15px;">
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

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      speed: 600,
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 40,
        stretch: 10,
        depth: 100,
        modifier: 1,
        slideShadows: false,
        scale: 0.8,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 6,
          spaceBetween: 20,
        },
      },
    });
  </script>

<script>
    var swiperrev = new Swiper(".mySwiperrev", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 5,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      },
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

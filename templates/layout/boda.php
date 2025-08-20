<html lang="es-ES">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boda de Manuela y Lauro</title>
    <!-- Listado de css con version dinamica segun modificacion de archivo -->
    <?= $this->Html->css(['bootstrap.min', 'boda/slick', 'boda/slick-theme', 'boda/jquery.fancybox.min', 'boda/addEvent', 'boda/aos', 'boda/style', 'boda/responsive', 'css2']) ?>
    <!--<link rel="stylesheet" href="./Boda de Manuel y Laura_files/bootstrap.min.css">
    <link rel="stylesheet" href="./Boda de Manuel y Laura_files/slick.css">
    <link rel="stylesheet" href="./Boda de Manuel y Laura_files/slick-theme.css">
    <link rel="stylesheet" href="./Boda de Manuel y Laura_files/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./Boda de Manuel y Laura_files/addEvent.css">
    <link rel="stylesheet" href="./Boda de Manuel y Laura_files/aos.css">
    <link rel="stylesheet" href="./Boda de Manuel y Laura_files/style.css">
    <link rel="stylesheet" href="./Boda de Manuel y Laura_files/responsive.css">-->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
   

    <!--<script type="text/javascript" id="www-widgetapi-script" src="./Boda de Manuel y Laura_files/www-widgetapi.js.download" async=""></script>
    <script type="text/javascript" charset="UTF-8" src="./Boda de Manuel y Laura_files/common.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="./Boda de Manuel y Laura_files/util.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="./Boda de Manuel y Laura_files/map.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="./Boda de Manuel y Laura_files/marker.js.download"></script>-->

    <?= $this->Html->script('jquery-3.5.1.min.js') ?>
    <?= $this->Html->script('bootstrap.bundle.min.js') ?>
    <?= $this->Html->script('boda/www-widgetapi.js') ?>
    <?= $this->Html->script('boda/common.js') ?>
    <?= $this->Html->script('boda/util.js') ?>
    <?= $this->Html->script('boda/map.js') ?>
    <?= $this->Html->script('boda/marker.js') ?>
    <style type="text/css" id="ate_helper_css">
        .addeventatc_dropdown .drop_markup {
            background-color: #f4f4f4;
        }

        .addeventatc_dropdown .frs a {
            margin: 0 !important;
            padding: 0 !important;
            font-style: normal !important;
            font-weight: normal !important;
            line-height: 110% !important;
            background-color: #fff !important;
            text-decoration: none;
            font-size: 9px !important;
            color: #cacaca !important;
            display: inline-block;
        }

        .addeventatc_dropdown .frs a:hover {
            color: #999 !important;
        }

        .addeventatc .start,
        .addeventatc .end,
        .addeventatc .timezone,
        .addeventatc .title,
        .addeventatc .description,
        .addeventatc .location,
        .addeventatc .organizer,
        .addeventatc .organizer_email,
        .addeventatc .facebook_event,
        .addeventatc .all_day_event,
        .addeventatc .date_format,
        .addeventatc .alarm_reminder,
        .addeventatc .recurring,
        .addeventatc .attendees,
        .addeventatc .client,
        .addeventatc .calname,
        .addeventatc .uid,
        .addeventatc .sequence,
        .addeventatc .status,
        .addeventatc .method,
        .addeventatc .transp {
            display: none !important;
        }
    </style>
</head>

<body class="modal-open" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" style="padding-right: 10px;">
    <div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 930px; width: 839.3px;"><img class="parallax-slider" src="./Boda de Manuel y Laura_files/portada.webp" style="transform: translate3d(-65px, 0px, 0px); position: absolute; height: 742px; width: 970px; max-width: none;"></div>
    <div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; height: 886.588px; width: 1526px;"><img class="parallax-slider" src="./Boda de Manuel y Laura_files/instagram.webp" style="position: absolute; height: 790px; width: 1526px; max-width: none;"></div>


    <div class="preloader-area" style="display: none;">

        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="loader" style="display: none;"></div>
        </div>

    </div>

    
</body>
<!-- Animacion loader -->
<script>
  let svgContainerLoader = document.querySelector('.loader');

  let animLoader = bodymovin.loadAnimation({
    wrapper: svgContainerLoader,
    animType: 'svg',
    loop: true,
    path: _pathProducto + "img/corazon.json"
  });
</script>
<!-- Loader -->
<script>
  var prealoaderOption = $(window);

  prealoaderOption.on("load", function() {

    var preloader = $('.loader');
    var preloaderArea = $('.preloader-area');

    preloader.fadeOut(500);
    preloaderArea.delay(100).fadeOut(500);

    // Detengo animacion loader
    animLoader.destroy();

    // Cargo animacion AOS
    setTimeout(function() {
      AOS.init();
    }, 100);

  });
</script>
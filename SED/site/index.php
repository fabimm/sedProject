<?php session_start();?><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Beauty & Health</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:300%7CRoboto:300,300i%7CRoboto+Condensed:300">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->

    <!--BELLEZA
    - Consejos para el cuidado de la piel (Fabi Mayén Nov. 10, 2018)
    - Elimina los puntos negros de manera fácil y económica (Kathy Gomar Nov. 11, 2018)
    - Trucos sencillos para eliminar las ojeras (José Aldana Oct. 30, 2018)
    - Cómo lograr un contour natural (Fabi Mayén Feb. 28, 2018)
    - Como disminuir las estrías de manera natural (Ulises Galeano May. 25, 2018)
    SALUD
    - Eliminar el sarro de tus dientes en 5 minutos (Walter Del Cid Mar. 22, 2018)
    - Desayunos saludables (Manuel Guerra Abr. 18, 2018)
    - Ejercicios para bajar de peso (Ivania Aguilar Jan. 7, 2018)
    - Beneficios de la flor de jamaica (María Estrada Mar. 6, 2018)
    - Beneficios del chocolate amargo para la salud (Kathy Gomar Sep. 26, 2018)
    -->

  </head>
  <body>
    <!-- Page-->
    <div class="page">
      <div class="preloader">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
      <!-- Page Header-->
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-sidebar_reverse rd-navbar_inverse" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-sidebar" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-sidebar" data-xl-layout="rd-navbar-sidebar" data-xxl-device-layout="rd-navbar-sidebar" data-xxl-layout="rd-navbar-sidebar" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="50px" data-xl-stick-up-offset="50px" data-xxl-stick-up-offset="50px" data-body-class="rd-navbar-absolute" data-md-hover-on="false" data-lg-hover-on="false">
            <div class="rd-navbar-inner rd-navbar-search-wrap rd-navbar-search-collapsable-wrap">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel rd-navbar-search_not-collapsable">
                <div class="rd-navbar-panel__aside">
                  <button class="rd-navbar-toggle rd-navbar-search_collapsable" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                </div>
                <div class="rd-navbar-panel__main rd-navbar-search_collapsable">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><img src="images/BH-logo.png" alt="" width="144" height="25"/></a></div>
                </div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="index.php">Inicio</a>
                  </li>         
                  <?php include('includes/buttonsUser.php') ?>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--BOTONES DE INICIO DE SESION-->
      <!-- Swiper-->
      <section class="rd-parallax">
        <div class="rd-parallax-layer" data-type="html" data-speed="1">
          <div class="swiper-container swiper-slider swiper-slider_fullheight" data-simulate-touch="false" data-loop="true" data-autoplay="5500">
            <div class="swiper-wrapper">
              <div class="swiper-slide bg-gray-lighter custom-parallax-wrap" data-slide-bg="images/belleza-slider-slide-1920x1080.jpg">
                <div class="swiper-slide-caption custom-parallax" data-speed="0.5" data-fade="true">
                  <div class="container">
                    <h1 data-caption-animate="fadeInLeftSmall"><span>Beauty & Health</span></h1>
                    <h3 data-caption-animate="fadeInLeftSmall" data-caption-delay="200">La nueva generación de salud</h3>
                    <?php if(!isset($_SESSION['login_user']))
                    echo '<div class="group-lg group-middle"><a class="button button-gray-light-outline" data-caption-animate="fadeInLeftSmall" data-caption-delay="350" href="login.php">Iniciar Sesión</a></div>';
                    ?>                  
                    </div>
                </div>
              </div>
              <div class="swiper-slide bg-default custom-parallax-wrap" data-slide-bg="images/salud-slider-slide-1920x1080.jpg">
                <div class="swiper-slide-caption custom-parallax" data-speed="0.5" data-fade="true">
                  <div class="container">
                    <h2 class="text-width-2" data-caption-animate="fadeInLeftSmall">
                       Descubre todo el potencial
                       de la salud
                       </h2>
                       <?php if(!isset($_SESSION['login_user']))
                    echo '<a class="button button-gray-light-outline" data-caption-animate="fadeInLeftSmall" data-caption-delay="200" href="login.php">Iniciar Sesión</a>';
                    ?>   
                    </div>
                </div>
              </div>
              <div class="swiper-slide bg-secondary-8 custom-parallax-wrap" data-slide-bg="images/belleza-m-slider-slide-1920x1080.jpg" style="background-position: center top;">
                <div class="swiper-slide-caption custom-parallax" data-speed="0.5" data-fade="true">
                  <div class="container">
                    <h2 data-caption-animate="fadeInLeftSmall">Consejos y trucos de belleza</h2>
                   
                    <div class="group-lg group-middle"><a class="button button-gray-light-outline" data-caption-animate="fadeInLeftSmall" data-caption-delay="350" href="login.php">Iniciar Sesión</a></div>
                  </div>
                </div>
              </div>
            </div>
            <!--BOTONES DE INICIO DE SESION-->
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <!-- Swiper Navigation-->
            <div class="swiper-button-prev linear-icon-chevron-left"></div>
            <div class="swiper-button-next linear-icon-chevron-right"></div>
          </div>
        </div>
      </section>
<!--SECCION DE TEMAS VARIADOS-->
      <section class="text-center">
        <div class="container-fluid">
          <div class="row no-gutters">
            <div class="col-lg-6">
              <div class="post-fashion-style post-fashion-style-big">
                <figure><img src="images/cuidado-piel-960x724.png" alt="" width="960" height="724"/>
                </figure>
                <div class="caption">
                  <div class="post-fashion-style-title">
                    <h5><a href="belleza1.php">Consejos para el cuidado de la piel</a></h5>
                  </div>
                  <ul class="post-fashion-style-meta">
                    <li>
                      <time datetime="2016">Nov. 10, 2018</time>
                    </li>
                    <li><a href="belleza1.php">por Fabi Mayén</a></li>
                  </ul>
                  <div class="post-fashion-style-footer"><a class="button button-link" href="belleza1.php">Leer más</a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 bg-accent">
              <div class="row no-gutters">
                <div class="col-md-6">
                  <div class="post-fashion-style">
                    <figure><img src="images/index-2-480x362.jpg" alt="" width="480" height="362"/>
                    </figure>
                    <div class="caption">
                      <div class="post-fashion-style-title">
                        <h5><a href="belleza2.php">Elimina los puntos negros de manera fácil</a></h5>
                      </div>
                      <ul class="post-fashion-style-meta">
                        <li>
                          <time datetime="2016">Nov. 11, 2018</time>
                        </li>
                        <li><a href="belleza2.php">por Kathy Gomar</a></li>
                      </ul>
                      <div class="post-fashion-style-footer"><a class="button button-link" href="belleza2.php">Leer más</a></div>
                    </div>
                  </div>
                  <div class="post-fashion-style">
                    <figure><img src="images/index-1-960x724.jpg" alt="" width="480" height="362"/>
                    </figure>
                    <div class="caption">
                      <div class="post-fashion-style-title">
                        <h5><a href="belleza3.php">Trucos sencillos para eliminar ojeras</a></h5>
                      </div>
                      <ul class="post-fashion-style-meta">
                        <li>
                          <time datetime="2016">Oct. 30, 2018</time>
                        </li>
                        <li><a href="belleza3.php">por José Aldana</a></li>
                      </ul>
                      <div class="post-fashion-style-footer"><a class="button button-link" href="belleza3.php">Leer más</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="post-fashion-style">
                    <figure><img src="images/index-4-480x362.jpg" alt="" width="480" height="362"/>
                    </figure>
                    <div class="caption">
                      <div class="post-fashion-style-title">
                        <h5><a href="belleza4.php">Cómo lograr un contour natural</a></h5>
                      </div>
                      <ul class="post-fashion-style-meta">
                        <li>
                          <time datetime="2016">Feb. 28, 2018</time>
                        </li>
                        <li><a href="belleza4.php">por Fabi Mayén</a></li>
                      </ul>
                      <div class="post-fashion-style-footer"><a class="button button-link" href="belleza4.php">Leer más</a></div>
                    </div>
                  </div>
                  <div class="post-fashion-style">
                    <figure><img src="images/index-5-480x362.jpg" alt="" width="480" height="362"/>
                    </figure>
                    <div class="caption">
                      <div class="post-fashion-style-title">
                        <h5><a href="salud1.php">Elimina el sarro de tus dientes</a></h5>
                      </div>
                      <ul class="post-fashion-style-meta">
                        <li>
                          <time datetime="2016">Mar. 22, 2018</time>
                        </li>
                        <li><a href="salud1.php">por Walter D Cid</a></li>
                      </ul>
                      <div class="post-fashion-style-footer"><a class="button button-link" href="salud1.php">Leer más</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<!--SECCION DIVIDIDA POR SALUD Y BELLEZA-->

<!--BELLEZA-->
      <section class="section-lg bg-default">
        <div class="container">
          <div class="row isotope-wrap">
            <div class="col-sm-12">
              <ul class="list-nav isotope-filters isotope-filters-horizontal text-center">
                <li><a class="active" data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">Belleza</a></li>
                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Salud</a></li>
              </ul>
              <div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
                <div class="col-12 col-md-6 isotope-item" data-filter="Category 1">
                  <div class="post-fashion-style post-fashion-style-medium">
                    <figure><img src="images/index-isotope-1-652x492.jpg" alt="" width="652" height="492"/>
                    </figure>
                    <div class="caption">
                      <div class="post-fashion-style-title">
                        <h5><a href="belleza1.php">Consejos para el cuidado de la piel</a></h5>
                      </div>
                      <ul class="post-fashion-style-meta">
                        <li>
                          <time datetime="2016">Nov. 10, 2018</time>
                        </li>
                        <li><a href="belleza1.php">por Fabi Mayén</a></li>
                      </ul>
                      <div class="post-fashion-style-footer"><a class="button button-link" href="belleza1.php">Leer más</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 isotope-item" data-filter="Category 1">
                  <div class="post-fashion-style post-fashion-style-medium">
                    <figure><img src="images/index-isotope-2-652x492.jpg" alt="" width="652" height="492"/>
                    </figure>
                    <div class="caption">
                      <div class="post-fashion-style-title">
                        <h5><a href="belleza2.php">Elimina los puntos negros</a></h5>
                      </div>
                      <ul class="post-fashion-style-meta">
                        <li>
                          <time datetime="2016">Nov. 11, 2018</time>
                        </li>
                        <li><a href="belleza2.php">por Kathy Gomar</a></li>
                      </ul>
                      <div class="post-fashion-style-footer"><a class="button button-link" href="belleza2.php">Leer más</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 isotope-item" data-filter="Category 1">
                  <article class="unit flex-sm-row unit-spacing-sm post-classic__img-left">
                    <div class="unit-left">
                      <figure class="figure-inline text-center text-sm-left"><img src="images/index-isotope-3-301x226.jpg" alt="" width="301" height="226"/>
                      </figure>
                    </div>
                    <div class="unit-body post-inline">
                      <div class="post-inline__header">
                        <div class="post-inline__header-meta"><span class="post-inline__time">Oct. 30, 2018</span><a class="post-inline__author meta-author" href="belleza3.php">por José Aldana</a></div>
                        <h5><a href="belleza3.php">Trucos sencillos para eliminar ojeras</a></h5>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-12 col-md-6 isotope-item" data-filter="Category 1">
                  <article class="unit flex-sm-row unit-spacing-sm post-classic__img-left">
                    <div class="unit-left">
                      <figure class="figure-inline text-center text-sm-left"><img src="images/index-isotope-4-301x226.jpg" alt="" width="301" height="226"/>
                      </figure>
                    </div>
                    <div class="unit-body post-inline">
                      <div class="post-inline__header">
                        <div class="post-inline__header-meta"><span class="post-inline__time">Feb. 28, 2018</span><a class="post-inline__author meta-author" href="belleza4.php">por Fabi Mayén</a></div>
                        <h5><a href="belleza4.php">Cómo lograr un contour natural</a></h5>
                      </div>
                    </div>
                  </article>
                </div>
                
<!--SALUD-->
                <div class="col-12 col-md-6 isotope-item" data-filter="Category 2">
                  <div class="post-fashion-style post-fashion-style-medium">
                    <figure><img src="images/index-isotope-7-652x492.jpg" alt="" width="652" height="492"/>
                    </figure>
                    <div class="caption">
                      <div class="post-fashion-style-title">
                        <h5><a href="salud1.php">Elimina el sarro de tus dientes</a></h5>
                      </div>
                      <ul class="post-fashion-style-meta">
                        <li>
                          <time datetime="2016">Mar. 22, 2018</time>
                        </li>
                        <li><a href="salud1.php">por Walter Del Cid</a></li>
                      </ul>
                      <div class="post-fashion-style-footer"><a class="button button-link" href="image-post.php">Leer más</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 isotope-item" data-filter="Category 2">
                  <div class="post-fashion-style post-fashion-style-medium">
                    <figure><img src="images/index-isotope-8-652x492.jpg" alt="" width="652" height="492"/>
                    </figure>
                    <div class="caption">
                      <div class="post-fashion-style-title">
                        <h5><a href="salud2.php">Desayunos saludables</a></h5>
                      </div>
                      <ul class="post-fashion-style-meta">
                        <li>
                          <time datetime="2016">Aug. 15, 2018</time>
                        </li>
                        <li><a href="salud2.php">por José Aldana</a></li>
                      </ul>
                      <div class="post-fashion-style-footer"><a class="button button-link" href="image-post.php">Leer más</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 isotope-item" data-filter="Category 2">
                  <article class="unit flex-sm-row unit-spacing-sm post-classic__img-left">
                    <div class="unit-left">
                      <figure class="figure-inline text-center text-sm-left"><img src="images/index-isotope-9-301x226.jpg" alt="" width="301" height="226"/>
                      </figure>
                    </div>
                    <div class="unit-body post-inline">
                      <div class="post-inline__header">
                        <div class="post-inline__header-meta"><span class="post-inline__time">Jan. 7, 2018</span><a class="post-inline__author meta-author" href="salud3.php">por Ivania Aguilar</a></div>
                        <h5><a href="salud3.php">Ejercicios para bajar de peso</a></h5>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-12 col-md-6 isotope-item" data-filter="Category 2">
                  <article class="unit flex-sm-row unit-spacing-sm post-classic__img-left">
                    <div class="unit-left">
                      <figure class="figure-inline text-center text-sm-left"><img src="images/index-isotope-10-301x226.jpg" alt="" width="301" height="226"/>
                      </figure>
                    </div>
                    <div class="unit-body post-inline">
                      <div class="post-inline__header">
                        <div class="post-inline__header-meta"><span class="post-inline__time">Mar. 6, 2018</span><a class="post-inline__author meta-author" href="salud4.php">por María Estrada</a></div>
                        <h5><a href="salud4.php">Beneficios de la flor de jamaica</a></h5>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


<!--MENSAJE ANTES DE SUSCRIBIR-->
      <!-- Divider-->
      <div class="container">
        <div class="divider"></div>
      </div>

      <!-- Page Footer-->
      <footer class="footer-minimal">
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-md-10 col-xl-6">
              <h5>¡PUEDES SUSCRIBIRTE PARA TENER ACCESO A LOS TEMAS MÁS EXCLUSIVOS!</h5>
              <br>
              <!-- RD Mailform-->
              <div class="center"">
                <button class="button button-gray-light-outline text-center" type="submit">Suscribete!</button>
              </div>
              <ul class="list-inline-sm footer-minimal__list">
                <li><a class="icon icon-sm icon-gray-4 fa fa-facebook" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-4 fa fa-twitter" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-4 fa fa-google-plus" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-4 fa fa-vimeo" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-4 fa fa-youtube" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-4 fa fa-pinterest" href="#"></a></li>
              </ul>
              <p class="rights"><span>BEAUTY&HEALTH</span><span>&nbsp;</span><span>©</span><span>&nbsp;</span><span class="copyright-year"></span>.</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
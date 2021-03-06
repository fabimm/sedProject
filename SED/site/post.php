<?php  include('includes/checkUserLogged.php');  ?>

<?php

      $id_pub = pg_escape_string($db,$_GET['id']);
      $sql = "SELECT * FROM publicacion INNER JOIN categoria on categoria_pub= id_cat  WHERE id_pub= '$id_pub'";
     
      $result = pg_exec($db,$sql);
      
      $post =pg_fetch_array($result,NULL, PGSQL_ASSOC);
      $count = pg_numrows($result);
      if($count == 0) {
        //  header("location: notfound.php");
      }
   
?>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete']) ) {
      $id_pub = pg_escape_string($db,$_GET['id']);
      $sql = "DELETE FROM publicacion WHERE id_pub= '$id_pub'";
     
      $result = pg_exec($db,$sql);
      
      $post =pg_fetch_array($result,NULL, PGSQL_ASSOC);
      
      
         header("location: index.php");
      
    }
   
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title><?php echo $post["titulo_pub"]?></title>
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
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page">
      <div class="preloader">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
      <!-- Page header-->
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-sidebar_reverse rd-navbar_inverse" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-sidebar" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-sidebar" data-xl-layout="rd-navbar-sidebar" data-xxl-device-layout="rd-navbar-sidebar" data-xxl-layout="rd-navbar-sidebar" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="50px" data-xl-stick-up-offset="50px" data-xxl-stick-up-offset="50px" data-body-class="" data-md-hover-on="false" data-lg-hover-on="false">
            <div class="rd-navbar-inner rd-navbar-search-wrap rd-navbar-search-collapsable-wrap">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel rd-navbar-search_not-collapsable">
                <div class="rd-navbar-panel__aside">
                  <button class="rd-navbar-toggle rd-navbar-search_collapsable" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                </div>
              <div class="rd-navbar-panel__main rd-navbar-search_collapsable">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><img src="images/BH-logo.png" alt="" width="154" height="35"/></a></div>
                </div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="index.php">Inicio</a>
                  </li>
                  <?php                      include('includes/buttonsUser.php')                   ?>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="breadcrumbs-custom">
        <div class="container">
          <div class="breadcrumbs-custom__inner">
            <p class="breadcrumbs-custom__title"><?php echo $post["nombre_cat"].":".$post["titulo_pub"]?></p>
          </div>
        </div>
      </section>
      <section class="section-xxl text-center bg-image-1">
        <div class="container nonstandart-post-header"><img class="img-circle" src="<?php echo $post["photo_pub"]?>" alt="" width="109" height="109"/>
          <p class="heading-4"><?php echo $post["autor_pub"]?></p>
          <h2><?php echo $post["titulo_pub"]?></h2>
          <div class="post-meta">
            <div class="group">
              <div class="icon-list-wrap icon icon-gray linear-icon-clock3"><a>
                  <time datetime="2017"><?php echo $post["fecha_pub"]?></time></a></div>
            </div>
          </div>
          <ul class="list-inline-sm">
            <li><a class="icon-sm fa-facebook icon" href="#"></a></li>
            <li><a class="icon-sm fa-twitter icon" href="#"></a></li>
            <li><a class="icon-sm fa-google-plus icon" href="#"></a></li>
            <li><a class="icon-sm fa-vimeo icon" href="#"></a></li>
            <li><a class="icon-sm fa-youtube icon" href="#"></a></li>
            <li><a class="icon-sm fa-pinterest-p icon" href="#"></a></li>
          </ul>
        </div>
      </section>
      <!--IMAGEN GRANDE-->
      <section class="bg-default section-md">
        <div class="container">
          <div class="row row-60 justify-content-sm-center">
            <div class="col-lg-8 section-divided__main">
              <div class="section-sm post-single-body">
             
              <?php echo $post["contenido_pub"]?>

              <?php include('includes/deletePost.php')?>
              </div>

              <section class="section-sm">
                <div class="row row-60 justify-content-md-between post-nav-links">
                  <div class="col-md-6 text-md-left"><a class="unit flex-row unit-spacing-md align-items-center" href="belleza2.php">
                      <div class="unit-left"><span class="icon icon-md linear-icon-arrow-left"></span></div>
                      <div class="unit-body">
                        <p class="small">Elimina los puntos negros de manera fácil y económica</p>
                      </div></a></div>
                  <div class="col-md-6 text-md-right"><a class="unit flex-row unit-spacing-md align-items-center" href="salud1.php">
                      <div class="unit-body">
                        <p class="small">Eliminar el sarro de tus dientes en 5 minutos</p>
                      </div>
                      <div class="unit__right"><span class="icon icon-md linear-icon-arrow-right"></span></div></a></div>
                </div>
              </section>

              <section class="section-sm">
                <h5>Últimas Publicaciones</h5>
                <div class="row row-60">
                  <div class="col-md-6">
                    <!-- Post classic-->
                    <article class="post-classic post-minimal"><img src="images/puntos-negros.jpg" alt="" width="418" height="315"/>
                      <div class="post-classic-title">
                        <h5><a href="belleza2.php">Elimina los puntos negros de manera fácil y económica</a></h5>
                      </div>
                      <div class="post-meta">
                        <div class="post-inline__header-meta"><a href="belleza2.php">
                            <time datetime="2017">Nov. 11, 2018</time></a><a class="meta-author" href="belleza2.php">por Kathy Gomar</a></div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <!-- Post classic-->
                    <article class="post-classic post-minimal"><img src="images/ojeras-hombre-belleza1.jpg" alt="" width="886" height="668"/>
                      <div class="post-classic-title">
                        <h5><a href="belleza3.php">Trucos sencillos para eliminar las ojeras</a></h5>
                      </div>
                      <div class="post-meta">
                        <div class="post-inline__header-meta"><a href="belleza3.php">
                            <time datetime="2017">Oct. 30, 2016</time></a><a class="meta-author" href="belleza3.php">por José Aldana</a></div>
                      </div>
                    </article>
                  </div>
                </div>
              </section>
              
      <!-- Page Footer-->
      <footer class="footer-minimal">
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-md-10 col-xl-6">
              <h5>NO TE PUEDES PERDER DEL MEJOR CONTENIDO ¿QUÉ ESTÁS ESPERANDO?</h5>
              <!-- RD Mailform-->
              <!--<div class="center"> <br>
                <button class="button button-gray-light-outline" type="submit">Suscríbete</button>
              </div>-->
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
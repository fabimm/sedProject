<?php  include('includes/checkUserLogged.php');  ?>
<?php

if(isset($_SESSION['login_user'])) {
  if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']=='f'){
    header("location: index.php");
  }
}

?>

<?php
     if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      //pg_escape_string(..)//pg_escape_string(..)
      $titulo = pg_escape_string($db,$_POST['titulo']);
<<<<<<< HEAD
      $contenido = pg_escape_string($db,$_POST['contenido']); 
=======
      $contenido = pg_escape_string($db,md5($_POST['contenido'])); 
>>>>>>> e7fdf2031606644ca4f0599e8b3d54b3068fed5a
      $fotoautor = pg_escape_string($db,$_POST['photo_autor']); 
      $autor = pg_escape_string($db,$_POST['autor']); 
      $categoria = pg_escape_string($db,$_POST['categoria']); 
      $fotopost= pg_escape_string($db,$_POST['photo_post']); 
      $sql = "INSERT INTO publicacion(titulo_pub,contenido_pub,photo_pub,fecha_pub,categoria_pub,autor_pub,autor_photo) values('$titulo','$contenido','$fotopost',NOW(),$categoria,'$autor','$fotoautor')";
      $result = pg_exec($db,$sql);
      if (!$result) {
        echo "No se ha podido guardar su post, lo sentimos.\n";     
      }else{
        echo "Su post se ha guardado correctamente.\n";   
      }
   }
   
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Crear Post</title>
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
            <p class="breadcrumbs-custom__title">Creando Post</p>
          </div>
        </div>
      </section>
      <section class="section-xxl text-center bg-image-1">
        <!-- <div class="container nonstandart-post-header"><img class="img-circle" src="<?php echo $post["photo_pub"]?>" alt="" width="109" height="109"/> -->
          <!-- <p class="heading-4"><?php echo $post["autor_pub"]?></p> -->
          <!-- <h2><?php echo $post["titulo_pub"]?></h2> -->
          <div class="post-meta">
            <div class="group">
              <div class="icon-list-wrap icon icon-gray linear-icon-clock3"><a>
                  <!-- <time datetime="2017"><?php echo $post["titulo_pub"]?></time></a></div> -->
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
             
              <form class="form-horizontal" action="" method="post">
              
                  <div class="input-group">
                  <label class="control-label col-sm-3" for="email">Titulo:</label>
                  <input id="titulo" type="text" class="form-control col-sm-9" name="titulo" placeholder="Titulo">
                </div>
                <div class="input-group">
                  <label class="control-label col-sm-3" for='categoria'>Selecciona la categoria:</label><br>
                  <select name="categoria" class="form-control col-sm-9">
                  <?php
                  $sql = "SELECT nombre_cat,id_cat FROM categoria"; 
                  $result = pg_exec($db,$sql);
                    while ($categoria = pg_fetch_array($result)) {
                      echo '<option value="'.$categoria["id_cat"].'">'.$categoria["nombre_cat"].'</option>';   
                    }   
                  ?>
                  </select>
                  </div>
                <div class="input-group">
                  <label class="control-label col-sm-3" for="email">Contenido:</label>
                  <input id="contenido" type="text" class="form-control col-sm-9" name="contenido" placeholder="Contenido">
                </div>
                <div class="input-group">
                  <label class="control-label col-sm-3" for="email">Autor:</label>
                  <input id="autor" type="text" class="form-control col-sm-9" name="autor" placeholder="Nombre">
                </div>
                <div class="input-group">
                  <label class="control-label col-sm-3" for="email">Foto Autor(URL):</label>
                  <input id="fotoautor" type="text" class="form-control col-sm-9" name="photo_autor" placeholder="URL">
                </div>
                <div class="input-group">
                  <label class="control-label col-sm-3" for="email">Foto Post(URL):</label>
                  <input id="fotopost" type="text" class="form-control col-sm-9" name="photo_post" placeholder="URL">
                </div>
                <input type="submit">
              </form> 
  
              </div>
      </div>
              
      <!-- Page Footer-->
      <footer class="footer-minimal">
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=pjoziehm7v114o51d2cq0qhu2pw7dta0dxwwngvr1yt5xrx1"></script> 
    <script>
      tinymce.init({
        selector: '#contenido',
        theme: 'modern',
        toolbar: 'undo redo | formatselect | bold italic underline  | bullist numlist |  alignleft aligncenter alignright alignjustify | outdent indent  | link image',
        plugins : 'advlist autolink link spellchecker lists spellchecker autoresize image',
    
        menubar: false,
        nowrap : false,
        });
      $('form').bind('form-pre-serialize', function(e) {
          tinyMCE.triggerSave();
      });
    </script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
<?php
  include('config.php');
  $sql = "SELECT nombre_cat,id_cat FROM categoria";
 
  $result = pg_exec($db,$sql);

  $cadena='';
//   if($count == 0) {
//     //  header("location: notfound.php");
//   }else{

    while ($categoria = pg_fetch_array($result)) {
        $cadena = $cadena.'<li><a href="#">'.$categoria["nombre_cat"].'</a><ul class="rd-navbar-dropdown">';
        $sql = "SELECT titulo_pub,id_pub FROM publicacion where categoria_pub =".$categoria["id_cat"];
        $result2 = pg_exec($db,$sql);
        
        while ($post2 = pg_fetch_array($result2)) {
            // print_r ($post2);
           $cadena=$cadena. '<li><a href="post.php?id='.$post2["id_pub"].'">'.$post2["titulo_pub"]. '</a></li>';
        }
        $cadena = $cadena.'</ul></li>';
      }
      
      echo $cadena;
      
//   }
                 
if(isset($_SESSION['login_user'])) {
    // echo $_SESSION['login_user'];
    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']=='t'){
        echo "<li><a href='create.php'>Crear post </a>";
        // echo '<li>El valor es:'.$_SESSION['is_admin'].'</a>';
    }
    echo "<li><a href='logout.php'>Cerrar Sesion</a>";
}else{
    echo "<li><a href='login.php'>Iniciar Sesion</a>";
    echo "<li><a href='register.php'>Registrarse</a>";
}
?>
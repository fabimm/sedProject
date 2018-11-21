<?php
if(!isset($_COOKIE['token'])) {
    echo "No hay cookie";

    if(isset($_SESSION['login_user'])) {
      echo "segun esto existe**";
      // header("location: index.php");
   }
    // header("location: login.php");
} else {
    $token = $_COOKIE['token'];
    $sql = "SELECT id_us,username FROM usuario WHERE token = '$token'";
     $result = pg_exec($db,$sql);
     $count = pg_numrows($result);
     $row =pg_fetch_array($result,NULL, PGSQL_ASSOC);
     echo "Hay cookie ".$token."**";
     if($count == 0) {
        echo "Hay cookie pero el token es invalido**";
        unset($_COOKIE['token']);
        $_SESSION['login_user'] = $row['username'];
        header("location: login.php");
         }else if($page=="login"){
            echo "Hay cookie pero el token es valido**";
        $_SESSION['login_user'] = $row['username'];
        header("location: index.php");
     }
}


?>
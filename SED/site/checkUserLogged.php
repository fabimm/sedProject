<?php
include("config.php");
session_start([   'cookie_lifetime' => 7200,   'read_and_close'  => true, ]);
if(!isset($_SESSION['login_user'])) {
    echo "No se ha seteado en la sesion la variable login_user";
    
    if(isset($_COOKIE['token'])){
    unset($_COOKIE['token']);
    }
    // vaciarla
    $_SESSION = array();
    // destruirla
    session_destroy();
    // header("location: login.php");
}
    
?>
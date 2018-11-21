<?php
include("config.php");
session_start();
if(!isset($_SESSION['login_user'])) {
    // echo "No se ha seteado en la sesion la variable login_user";
    header("location: login.php");
    if(!isset($_COOKIE['token'])){
    unset($_COOKIE['token']);
    }
}
?>
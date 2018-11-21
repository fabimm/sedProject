<?php
session_start();
echo "La cookie era:".$_COOKIE['token']."   ";
// setcookie("token",null, time()-3600);
setcookie('token', null, -1, '/');
unset($_COOKIE['token']);
// echo "La cookie es:".$_COOKIE['token']."   ";
unset($_SESSION['login_user']);

// vaciarla
$_SESSION = array();
// destruirla
session_destroy();
header("location: index.php");

?>
<?php
if(isset($_SESSION['login_user'])) {
    // echo $_SESSION['login_user'];
    echo "<li><a href='logout.php'>Cerrar Sesion</a>";
}else{
    echo "<li><a href='login.php'>Iniciar Sesion</a>";
    echo "<li><a href='register.php'>Registrarse</a>";
}
?>
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      //pg_escape_string(..)//pg_escape_string(..)
      $myusername = pg_escape_string($db,$_POST['username']);
      $mypassword = pg_escape_string($db,md5($_POST['password'])); 
      echo md5($_POST['password']);
      $sql = "SELECT id_us FROM usuario WHERE username = '$myusername' and contrasenia_us = '$mypassword'";
     // pg_exec(...) //pg_exec(..)
      $result = pg_exec($db,$sql);
      //pg_fetch_array(..) //pg_fetch_array(..)
      $row =pg_fetch_array($result,NULL, PGSQL_ASSOC);
      $active = $row['active'];
      //pg_numrows(..) // pg_numrows(..)
      $count = pg_numrows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //   $_SESSION['myusername']="something";
        //  session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:300%7CRoboto:300,300i%7CRoboto+Condensed:300">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
<meta charset="utf-8">
    <style>
    @charset "UTF-8";
    body {font-family: Arial, Helvetica, sans-serif;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #000000;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
    }
        
    @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
    }
    </style>
</head>
<tittle>
<body background="images/login-background.jpg">

<p class="heading-4"><center><br><br><br><br><br><br><p class="heading-4">Haz clic aquí para iniciar sesión</p></br></center></p>

<center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Iniciar Sesión</button></center>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    

    <div class="container">
      <label for="username"><b>Usuario</b></label>
      <input type="text" placeholder="Ingrese su usuario" name="username" required>

      <!-- <label for="psw"><b>Apellido</b></label>
      <input type="password" placeholder="Ingrese su apellido" name="uapellido" required> -->

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Ingrese su contraseña" name="password" required>
        
      <button type="submit">Iniciar Sesión</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Recuérdame
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
      <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

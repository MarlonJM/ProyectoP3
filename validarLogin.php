<?php
include 'phpclass/conectar.php';
include 'phpclass/sesion.php';


if (isset($_POST['user'])) {
    $user = $_POST['user'];
}

if (isset($_POST['password'])) {
    $pass = $_POST['password'];
}

echo ($user ." and ". $pass);

if(!empty($user) && !empty($pass)) {

    $con = new Sesion();
    $con->validarLogin($user, $pass);
    
} else {

    header("Location: login.php?error=datos-incorrectos");
}


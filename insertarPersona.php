<?php
include 'phpclass/conectar.php';
include 'phpclass/persona.php';

if(isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}

if(isset($_POST['primerapellido'])) {
    $primerapellido = $_POST['primerapellido'];
}

if(isset($_POST['correo'])) {
    $correo = $_POST['correo'];
}
if(isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
}
if(isset($_POST['clave'])) {
    $clave = $_POST['clave'];
}

$persona = new Persona();
$user = new Persona();

if($persona->InsertarPersona($nombre, $primerapellido, $correo)) {
    
} else {
    header('Location: index.php?error=true');
}

if($user->InsertarUsuario($usuario, $clave, 30)) {
	header('Location: login.php');
} else {

}
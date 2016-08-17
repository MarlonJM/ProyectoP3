<?php
include 'phpclass/conectar.php';
include 'phpclass/sesion.php';

session_start();

if(empty($_SESSION['id_persona'])) {
	header("Location: login.php?error=acceso-denegado");
}

//incluir en las paginas con restriccion



















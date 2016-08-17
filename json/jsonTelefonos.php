<?php
include '../phpclass/conectar.php';
include '../phpclass/persona.php';

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

if (!empty($id)) {
	$con = new Persona();
	$tel = $con->getTelefono($id);
	echo json_encode($tel);
}else {
	header("Location: index.php?error=true");
}
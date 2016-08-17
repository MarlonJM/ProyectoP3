<?php
include '../phpclass/conectar.php';
include '../phpclass/persona.php';

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

if (!empty($id)) {
	$con = new Persona();
	$estudios = $con->getEstudios($id);
	echo json_encode($estudios);
}else {
	header("Location: index.php?error=true");
}
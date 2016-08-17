<?php
include '../phpclass/conectar.php';
include '../phpclass/persona.php';

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

if (!empty($id)) {
	$con = new Persona();
	$galeria = $con->getGaleria($id);
	echo json_encode($galeria);
}else {
	header("Location: index.php?error=true");
}
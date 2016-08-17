<?php
include '../phpclass/conectar.php';
include '../phpclass/persona.php';

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

if (!empty($id)) {
	$con = new Persona();
	$pasatiempos = $con->getPasatiempos($id);
	echo json_encode($pasatiempos);
}else {
	header("Location: index.php?error=true");
}
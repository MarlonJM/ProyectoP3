<?php
include '../phpclass/conectar.php';
include '../phpclass/persona.php';

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

if (!empty($id)) {
	$con = new Persona();
	$personas = $con->getPersona($id);
	echo json_encode($personas);
}else {
	header("Location: index.php?error=true");
}


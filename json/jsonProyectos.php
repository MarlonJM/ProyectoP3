<?php
include '../phpclass/conectar.php';
include '../phpclass/persona.php';

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

if (!empty($id)) {
	$con = new Persona();
	$proyectos = $con->getProyectos($id);
	echo json_encode($proyectos);
}else {
	header("Location: index.php?error=true");
}
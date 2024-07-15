<?php
	$nom = $_POST['nombre'];
	$apepat = $_POST['apepat'];
	$apemat = $_POST['apemat'];
	$edad = $_POST['edad'];
	$nacion = $_POST['nacionalidad'];
	$ciudad = $_POST['ciudad'];
	$tel = $_POST['telefono'];
	$rfc = $_POST['rfc'];
	$id = $_GET['id'];
	

	
	require_once('../../controller/personaController.php');
	$obj = new personaController();
	$obj->update($id, $nom, $apepat, $apemat, intval($edad), $nacion, $ciudad, $tel, $rfc);
	
?>
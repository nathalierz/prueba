<?php
	$nom = $_POST['nombre'];
	$apepat = $_POST['apepat'];
	$apemat = $_POST['apemat'];
	$edad = $_POST['edad'];
	$nacion = $_POST['nacionalidad'];
	$ciudad = $_POST['ciudad'];
	$tel = $_POST['telefono'];
	$rfc = $_POST['rfc'];

	include('../../controller/personaController.php');
	$obj = new personaController();
	$obj->store($nom, $apepat, $apemat, intval($edad), $nacion,	$ciudad, $tel, $rfc);
	
?>
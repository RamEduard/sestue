<?php
	require("../seguridad/usuario.sesion.class.php");
	session_start();
	print_r($_SESSION['objeto']);
	$objUsuarioSesion = $_SESSION['objeto'];
	if($objUsuarioSesion->existeUsuario()){
		echo 'Existe';
	}
	else
		echo 'No existe';
?>
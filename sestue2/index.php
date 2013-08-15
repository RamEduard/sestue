<?php
	//No ver errores
	error_reporting(null);
	//Iniciar variables de sesion
	session_start();
	//Requerimiento de las clases Db
	require("bd/db_consultas.class.php");
	//Instancias de las clases Db
	$db = Db::getInstance();
	//Consultar si existen usuarios nuevos ademas del administrador
	$sql = "SELECT c_alias_pk FROM t_usuarios";
	$usuarios = $db->select($sql);
	
	if (!$usuarios[1]){
		header('location:registrousuario.php');
	}
	else if (!$_SESSION['user']){
		header('location:login.php');
	}
	else{
		header('location:vista/index.php');
	}
	
	//*************************************************************
	//print_r($usuarios);

?>

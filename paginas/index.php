<?php
	//No ver errores
	error_reporting("E_ALL");

	//Requerimiento de los ficheros de las clases que se usaran en el archivo
	require("../clases/db.class.php");
	require("../clases/index.class.php");
	require("../clases/usuario.sesion.class.php");

	//Iniciar variables de sesion
	session_start();

	//Objetos a usar en el archivo
	$db = Db::getInstance();
	$index = Index::getInstance();
	if ($_SESSION['objeto'])
		$usuarioSesion = $_SESSION['objeto'];

	//Consultar si existen usuarios nuevos ademas del administrador
	$sql = "SELECT c_alias_pk FROM t_usuarios";
	$usuarios = $db->select($sql);
	
	if (!$usuarios[1]){
		header('location:registrousuario.php');
	}
	else if(!$_SESSION['objeto']){
		header("location:login.php");
	}
	else if($usuarioSesion->existeUsuario()){
		//Obtener array con datos del usuario
		$datosUser = $usuarioSesion->getUsuarioSesion();
		//Armar el index principal
		$mensaje = '
		<h2>Bienvenido!</h2>
        <p>Hola! Bienvenidos al Software Educativo: Soporte Tecnico a Usuarios y Equipos (SESTUE).</p>
        <p>En esta aplicacion aprendera como realizar un trabajo de investigacion, a traves de las normas mas conocidas para trabajos de investigacion y tesis UPEL y APA, y el Manual del Colegio Universitario Francisco de Miranda.</p>
        <p>En el menu de arriba contiene de manera general lo que integra y aborda SESTUE </p>
		';
		//Mostrar Html
		$index->construirHtml("SESTUE | Principal", $datosUser[1], $mensaje, $datosUser[2]);
	}

?>
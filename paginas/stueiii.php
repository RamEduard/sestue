<?php
	//Requerimiento de archivos de consulta y html
	require("../clases/db.class.php");
	require("../clases/usuario.sesion.class.php");
	require("../clases/index.class.php");

	//Hago instancia las clases Db y Html
	$db = Db::getInstance();
	$index = Index::getInstance();
	if ($_SESSION['objeto'])
		$usuarioSesion = $_SESSION['objeto'];
	
	if(!$_SESSION['objeto']){
		header("location:inicio.sesion.php");
	}
	else if($usuarioSesion->existeUsuario()){
		//Obtener array con datos del usuario
		$datosUser = $usuarioSesion->getUsuarioSesion();
		//Armar el html
		$mensaje = '
        <h2>Soporte técnico a usuarios y equipos III</h2>
        <p>Hola! Bienvenidos al Software Educativo: Soporte Tecnico a Usuarios y Equipos (SESTUE).</p>
        <p>En esta aplicacion aprendera como realizar un trabajo de investigacion, a traves de las normas mas conocidas para trabajos de investigacion y tesis UPEL y APA, y el Manual del Colegio Universitario Francisco de Miranda.</p>
        <p>En el menu de arriba contiene de manera general lo que integra y aborda SESTUE </p>
		';
		//salida html
		$index->construirHtml("SESTUE | Soporte Técnico a Usuarios y Equipos III", $datosUser[1], $mensaje, $datosUser[2]);
	}
	else
	{
		echo "<script>
				location.href='inicio.sesion.php';
			 </script>";
	}
?>

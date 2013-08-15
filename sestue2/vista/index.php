<?php
	//No ver errores
	error_reporting(null);
	//Iniciar variables de sesion
	session_start();
	//Requerimiento de archivos de consulta y html
	require("salida_html/html.class.php");
	//Instancias de las clases Db y Html
	$html = Html::getInstance();
	
	if ($_SESSION["user"]!=""){
		$mensaje = '
		<h2>Bienvenido!</h2>
        <p>Hola! Bienvenidos al Software Educativo: Soporte Tecnico a Usuarios y Equipos (SESTUE).</p>
        <p>En esta aplicacion aprendera como realizar un trabajo de investigacion, a traves de las normas mas conocidas para trabajos de investigacion y tesis UPEL y APA, y el Manual del Colegio Universitario Francisco de Miranda.</p>
        <p>En el menu de arriba contiene de manera general lo que integra y aborda SESTUE </p>
		';
		$html->constuirHtml("SESTUE| Principal", $_SESSION["niv_user"], $mensaje, $_SESSION["NA"]);
	}
	else
	{
		echo "<script>
				alert('Debe iniciar sesion para poder acceder');
				location.href='../login.php';
			 </script>";
	}
?>

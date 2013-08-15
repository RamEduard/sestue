<?php
	usleep(200000);
	session_start();
	require("../bd/db_consultas.php");
	require("salida_html/html.php");
	$mensaje="Hola mundo";
	$menu = "<li><a>Menu1</a></li>";
	html("Prototipo", $menu, $mensaje, $_SESSION["NA"]);
?>

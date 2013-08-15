<?php
	//No ver errores
	error_reporting(null);
	//Iniciar variables de sesion
	session_start();
	//Requerimiento de las clase Db y Html
	require("../bd/db_consultas.class.php");
	require("salida_html/html.class.php");
	//Instancias de las clases Db y Html
	$db = Db::getInstance();
	$html = Html::getInstance();
	
	if ($_SESSION["user"]!=""){
		$mensaje = '
		<fieldset width=50>
			<legend><h2>Preguntar:</h2></legend>
			<form method="post" action="">
				<input type="text" name="pregunta" placeholder="Introduzca su pregunta" required/>
				<input type="submit" name="buscar" value="Buscar" />
			</form>
		</fieldset>
		';
		$html->constuirHtml("SESTUE| Preguntas", 3, $mensaje, $_SESSION["NA"]);
	}
	else{
		echo "<script>
				alert('Debe iniciar sesion para poder acceder');
				location.href='../login.php';
			 </script>";
	}
	if (isset($_POST["buscar"])){
		
	}
?>

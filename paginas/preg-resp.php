<?php
	//Requerimiento de archivos de consulta y html
	require("../clases/db.class.php");
	require("../clases/usuario.sesion.class.php");
	require("../clases/index.class.php");
	require("../clases/formulario.class.php");

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
		//Armar el formulario
		//Instanciamos un formulario de la clase Formulario
		$formPreg = new Formulario("pregunta", "preg-resp.php", "post", 0,"registro-usuario",0,0);
		$formPreg->agregarLeyenda("<h3>Preguntar</h3>",0,0,0);
		$formPreg->tab(4);
		$formPreg->agregarInput("text", "pregunta", "", "Introduzca su pregunta", 0,"input-text",0);
		$formPreg->agregarInput("submit", "buscar", "Buscar", 0,0,0,0);
		$formPreg->ln();
		$formPreg->tab(3);
		$formPreg->cerrarLeyenda();
		$formPreg->tab(2);
		$formPreg->cerrarFormulario();
		$formPregHtml = $formPreg->obtenerHtml();
		//salida html
	}
	else{
		echo "<script>
				location.href='inicio.sesion.php';
			 </script>";
	}
	if (isset($_POST["buscar"])){
		$formPregHtml = "Busqueda";
	}
	$index->construirHtml("SESTUE| Preguntas", $datosUser[1], $formPregHtml, $datosUser[2]);
?>

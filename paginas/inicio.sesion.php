<?php
	//Requerimiento de archivos de clases
    require("../config/config.php");
	

	//Objetos que seran usados en el archivo
	$db = Db::getInstance();
	$index = Index::getInstance();
	if ($_SESSION['objeto']){
		$usuarioSesion = $_SESSION['objeto'];
		if($usuarioSesion->existeUsuario()) 
			header('location:index.php');
	}

	//Consultar si existen usuarios nuevos ademas del administrador
	$sql = "SELECT c_alias_pk FROM t_usuarios";
	$usuarios = $db->select($sql);
	
	if (!$usuarios[1]){
		header('location:registrousuario.php');
	}
	else{
		//Caracteristicas del formulario
		$nombreForm = "login";
		$accionForm = "../accion-form/login.accion.php";
		$metodoForm = "post";
		$claseForm = "login";
		$idForm = "login";
		$htmlExtraForm = null;
		//Se crea el objeto para construir el formulario de la pagina de **Inicio de Sesion**
		//Aqui se abre el formulario como etiqueta de html en el objeto
		$formLogin = new Formulario($nombreForm, $accionForm, $metodoForm, $claseForm, $idForm, $htmlExtraForm);

		//Agregar un salto de linea y una tabulacion
		$formLogin->ln(1);
		$formLogin->tab(3);
		
		// Se le agrega una leyenda si se quiere
		  $titulo = "<h3>Entrar al sistema</h3>"; 
		  $alineacion = "center";
		  $formLogin->agregarLeyenda($titulo, 0, 0, $alineacion);
		 
		
		/* Para agregar inputs
		 * $formLogin->agregarInput($tipoDelInput, $nombreDelInput, $valorDelInput, $mensajeDelInput, $claseDelInput, $idDelInput, $htmlExtraDelInput);
		 */
		
		//Primer input: User
		//Atributos extra del input User
		$atributosExtraUser	= 'maxlength=10 onkeypress="return permite(event, 2)" autofocus required';
		$formLogin->agregarInput("text", "user", null, "Nombre/Alias de usuario", null, "user", $atributosExtraUser);

		//Agregar un salto de linea y una tabulacion
		$formLogin->ln(1);
		$formLogin->tab(3);

		//Segundo input: Password
		//Atributos extras del input Password
		$atributosExtraPass = 'maxlength=8 onkeypress="return permite(event, 3)" required';
		$formLogin->agregarInput("password", "password", null, "Clave de usuario", null, "password", $atributosExtraPass);		

		//Agregar un salto de linea y una tabulacion
		$formLogin->ln(1);
		$formLogin->tab(3);

		//Agregar el link de recordar clave
		$formLogin->agregarHtmlExtra('<a href="remember.php">Recordar contraseña</a>');

		//Agregar un salto de linea y una tabulacion
		$formLogin->ln(1);
		$formLogin->tab(3);

		//Tercer input: Submit
		$formLogin->agregarInput("submit", "entrar", "Entrar", null, null, "boton", null);

		//Agregar un salto de linea y una tabulacion
		$formLogin->ln(1);
		$formLogin->tab(2);

		//Cerrar la leyenda
		$formLogin->cerrarLeyenda();
		//Cerrar el formulario
		$formLogin->cerrarFormulario();

		//Obtener el html del formulario
		$formLoginHtml = $formLogin->obtenerHtml();

	}
	$index->construirHtml("SESTUE | Entrar", 1, $formLoginHtml, "");
	//*************************************************************	
?>

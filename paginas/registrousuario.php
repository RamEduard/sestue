<?php
	//Requerimiento de archivos de consulta y html
	# Con este archivo se evita requerir las clases desde los archivos
	# y hacer session_start()
    require("../lib/config/config.php");

	//Objetos que seran usados en el archivo
	$db = Db::getInstance();
	#$index = Index::getInstance();
	$template = Templates::getInstance($_SESSION['estilo']);
	//Construccion del formulario de Registro de usuario
	$formRegistroUser = new Formulario("registro-usuario","../controllers/registro.usuario.accion.php","post",0,"registro-usuario",'style="min-width:300px;max-width:500px;margin:auto"');
	$formRegistroUser->tab(3);
	$formRegistroUser->agregarLeyenda("<h3>Registrar nuevo usuario</h3>",0,0,"center");
	$formRegistroUser->tab(3);
	$formRegistroUser->agregarEtiqueta("Usuario: ", 0, "label");
	$atributosExtraUser = 'onkeypress="return permite(event, 2)" autofocus required';
	$formRegistroUser->agregarInput("text", "user", "", "Solo letras. Ej.: UsuarioEjemplo", "form-control", "input-text", $atributosExtraUser);
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->agregarEtiqueta("Clave: ", 0, "label");
	$atributosExtraPass = 'maxlength=8  onkeypress="return permite(event, 3)" required';
	$formRegistroUser->agregarInput("password", "password", "", "Solo letras y numeros. Ej.: Usu4r1o0", "form-control", "p", $atributosExtraPass);
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->agregarEtiqueta("Confirme su clave: ", 0, "label");
	$formRegistroUser->agregarInput("password", "password2", "", "Introduzca su clave nuevamente", "form-control", "p2", $atributosExtraPass);
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->agregarEtiqueta("Palabra secreta: ", 0, "label");
	$atributosExtraInputs = 'onkeypress="return permite(event, 2)" required';
	$formRegistroUser->agregarInput("text", "psecreta", "", "Palabra sin simbolos para recordar su clave", "form-control", "input-text", $atributosExtraInputs);
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->agregarEtiqueta("Nombre(s): ", 0, "label");
	$formRegistroUser->agregarInput("text", "names", "", "Introduzca su(s) nombre(s)", "form-control", "input-text", $atributosExtraInputs);
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->agregarEtiqueta("Apellido(s): ", 0, "label");
	$formRegistroUser->agregarInput("text", "lastname", "", "Introduzca su(s) apellido(s)", "form-control", "input-text", $atributosExtraInputs);
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->agregarEtiqueta("Cedula/Pasaporte: ", 0, "label");
	$atributosExtraCiPp = 'onkeypress="return permite(event, 1)" required';
	$formRegistroUser->agregarInput("text", "ci", "", "Introduzca su numero de cedula/pasaporte", "form-control", "input-text", $atributosExtraCiPp);
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->agregarEtiqueta("Carnet: ", 0, "label");
	$atributosExtraCarnet = 'maxlength=9 onkeypress="return permite(event, 1)" required';
	$formRegistroUser->agregarInput("text", "carnet", "", "Introduzca su numero de carnet", "form-control", "input-text", $atributosExtraCarnet);
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->agregarEtiqueta("Rol: ", 0, "label");
	$formRegistroUser->agregarSelect("rol","","form-control",0,"required");
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(5);
	$formRegistroUser->agregarOpcSel("","Seleccione");
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(5);
	$formRegistroUser->agregarOpcSel("3","Estudiante");
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(5);
	$formRegistroUser->agregarOpcSel("4","Profesor");
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->cerrarSelect();
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->agregarInput("submit","guardar","Guardar","form-control","btn btn-log btn-success btn-block","boton",0);
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(4);
	$formRegistroUser->cerrarLeyenda();
	$formRegistroUser->ln(1);
	$formRegistroUser->tab(3);
	$formRegistroUser->cerrarFormulario();

	//Se obtiene el Html del Formulario
	$formRegistroUserHtml = $formRegistroUser->obtenerHtml();

	//Salida del html
	#$index->construirHtml("SESTUE | Registrarse", 1, $formRegistroUserHtml, "");
	print $template->getPage('SESTUE | Entrar', $formRegistroUserHtml, 'registrarse');
?>

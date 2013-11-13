<?php
	//Requerimiento de archivos de clases
    require("../lib/config/config.php");
	

	//Objetos que seran usados en el archivo
	$db = Db::getInstance();
	#$index = Index::getInstance();
	$template = Templates::getInstance($_SESSION['estilo']);
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
		$mensaje='
			<form class="form-signin" action="../controllers/login.accion.php" method=post style="width:300px; margin:auto;">
		        <h2 class="form-signin-heading">Entrar al sistema</h2>
		        <input name="user" type="text" class="form-control" maxlength=10 onkeypress="return permite(event, 2)" autofocus required title="Ingrese su nombre de usuario">
		        <input name="password" type="password" class="form-control" maxlength=8 onkeypress="return permite(event, 3)" required title="Ingrese su clave">
		        <label class="checkbox">
		          <button type="button" onclick="location.href=\'remember.php\'">Recordar contraseña</button>
		        </label>
		        <button name="entrar" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		    </form>
		';
	}
	#$index->construirHtml("SESTUE | Entrar", 1, $formLoginHtml, "");
	print $template->getPage('SESTUE | Principal', $mensaje, 'login');
	//*************************************************************	
?>

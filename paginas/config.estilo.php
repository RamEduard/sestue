<?php
	//Requerimiento de archivos de consulta y html
	# Con este archivo se evita requerir las clases desde los archivos
	# y hacer session_start()
    require("../config/config.php");

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
	else if($usuarioSesion->existeUsuario()){
		//Obtener array con datos del usuario
		$datosUser = $usuarioSesion->getUsuarioSesion();
		//Armar el index principal
		$mensaje = '
		<form method="post">
			<select name="estilo">
				<option selected value="">Seleccione</option>
				<option value="default">Predeterminado (recomendado)</option>
				<option value="azul">Azul (recomendado)</option>
				<option value="azul-default">Azul ligero</option>
				<option value="verde">Verde (no recomendado)</option>
				<option value="gris">Gris (no recomendado)</option>
			</select>
			<input type="submit" name="aceptar" value="Aceptar" />
		</form>
		';
	}

	if (isset($_POST["estilo"])){
		$estilo = $_POST["estilo"];
		//Se actualiza el estilo del usuario
		$sql = "UPDATE `sestuebd`.`t_usuarios` SET `c_estilo_css_pag` = '$estilo' WHERE `c_alias_pk` = '$datosUser[0]';";
		if($db->ejecutarSql($sql)){
			$_SESSION['estilo'] = $estilo;
			$mensaje .= '<script>
				location.href="config.estilo.php"</script>';
		}
		else{
			echo '<script>alert("Ramon");</script>';
		}
	}
	//Mostrar Html
	$index->construirHtml("SESTUE | Principal", $datosUser[1], $mensaje, $datosUser[2]);
?>

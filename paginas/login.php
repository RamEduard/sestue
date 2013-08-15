<?php
	usleep(200000);
	//No ver errores
	error_reporting(1);

	//Iniciar variables de sesion
	session_start();

	//Requerimiento de archivos de consulta y html
	require("../clases/db.class.php");
	require("../clases/index.class.php");
	require("../clases/usuario.sesion.class.php");

	//Objetos Db y Html
	$db = Db::getInstance();
	$index = Index::getInstance();
	$usuarioSesion = UsuarioSesion::getInstance();

	//Consultar si existen usuarios nuevos ademas del administrador
	$sql = "SELECT c_alias_pk FROM t_usuarios";
	$usuarios = $db->select($sql);
	
	if (!$usuarios[1]){
		header('location:registrousuario.php');
	}
	else{
		$mensaje .= '    	
			<h2 align="center">Entrar al sistema</h2>
			<center>
			<form method="post" action="">
			<table border="2" rules="no">
				<tr>
					<td>
						Usuario: 
					</td>
					<td>
						<input type="text" name="user" onkeypress="return permite(event, 2)" placeholder="Nombre/Alias de usuario" required autofocus maxlength=10/>
					</td>
				</tr>
				<tr>
					<td>
						Clave: 
					</td>
					<td>
						<input type="password" name="password" onkeypress="return permite(event, 3)" placeholder="Clave de usuario" required maxlength=8 />
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Entrar" name="entrar" />
						<a href="remember.php">Recordar contraseña</a>
					</td>
				</tr>
			</table>
			</form>
			</center>
		';
	}
	$index->construirHtml("SESTUE | Entrar", 1, $mensaje, "");
	//*************************************************************
	//print_r($usuarios);

	if (isset($_POST["entrar"])){

		$user = $_POST["user"];
		$pass = $_POST["password"];

		$session = "SELECT c_alias_pk, c_clave, c_nombres, c_apellidos, c_rol FROM t_usuarios WHERE c_alias_pk='".$user."' AND c_clave=MD5('".$pass."')";
		$result_session = $db->select($session);

		if (!$result_session){
			echo "<script>
					alert('Usuario no encontrado o no coincide con la clave');
					location.href='login.php';
			</script>";
		}
		else
		{
			$usuarioSesion->setUsuarioSesion($result_session[0][0], $result_session[0][4], $result_session[0][2]." ".$result_session[0][3]);
			$_SESSION['objeto'] = $usuarioSesion;
			echo "<script>
					location.href='../index.php';
				 </script>";
		}
		
	}
	
?>

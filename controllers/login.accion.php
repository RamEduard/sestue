<?php
	//Requerimiento de archivos de consulta y html
	# Con este archivo se evita requerir las clases desde los archivos
	# y hacer session_start()
    require("../lib/config/config.php");
	

	#Objetos que seran usados en el archivo
	#Objeto de los usuarios en bd
	$userObj = new Usuarios();
	#Objeto para crear la sesion del usuario
	$usuarioSesion = UsuarioSesion::getInstance();
	
	if (isset($_POST["entrar"])){

		$user = $_POST["user"];
		$pass = md5($_POST["password"]);

		$result_session = $userObj->selectUsuario($user,$pass);
		
		if (empty($result_session)){
			echo "<script>
					alert('Usuario no encontrado o no coincide con la clave');
					location.href='../admin/index.sestue';
			</script>";
		}
		else
		{
			$usuarioSesion->setUsuarioSesion($result_session[0][0], $result_session[0][3], $result_session[0][1]." ".$result_session[0][2]);
			$_SESSION['objeto'] = $usuarioSesion;
			$_SESSION['date_time'] = date("Y-n-j H:i:s");
			header("location:../admin/index.sestue");
		}
		
	}
	else{
		header("location:../admin/index.sestue");
	}
?>

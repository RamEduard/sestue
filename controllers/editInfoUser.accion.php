<?php
	if(!empty($_POST['user'])){
		
		$alias = $_POST['user']['alias'];
		$levelUser = $_POST['user']['level'];
		$name = $_POST['user']['name'];
		$lastname = $_POST['user']['lastname'];

		#Se adquieren todas las clases
		# Con este archivo se evita requerir las clases desde los archivos
		# y hacer session_start()
		include '../lib/config/config.php';
		
		#Clase usuarios de la bd
		$objUser = new Usuarios();

		if($objUser->updateUsuario($alias, $name, $lastname)){
			$US = $_SESSION['objeto'];
			$US->setUsuarioSesion($alias, null, $name." ".$lastname);
			$_SESSION['objeto'] = $US;
		}

		echo "<script>
				alert('Actualizacion exitosa!');
				location.href='../admin/editInfoUser.sestue';
		</script>";

	}
	else{
		header("location:../admin/editInfoUser.sestue");
	}
?>
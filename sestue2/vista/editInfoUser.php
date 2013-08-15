<?php
	usleep(200000);
	//iniciar variables de sesion
	session_start();
	//No ver errores
	error_reporting(0);
	//Requerimiento de archivos de consulta y html
	require("../bd/db_consultas.class.php");
	require("salida_html/html.class.php");
	//Hago instancia las clases Db y Html
	$db = Db::getInstance();
	$html = Html::getInstance();
	
	if ($_SESSION["user"]!=""){
		$usuario = $db->select("SELECT  c_cedula_pk, c_carnet_pk, c_nombres, c_apellidos FROM t_usuarios WHERE c_alias_pk='".$_SESSION['user']."'");
		$mensaje = '
		<h2>Editar datos de usuario</h2>
        <form method="post">
			<table align="center">
				<tr>
					<td>Nombres: </td>
					<td>
						<input type="text" name="nombres" value="'.$usuario[0][2].'" />
					</td>
				</tr>
				<tr>
					<td>Apellidos: </td>
					<td>
						<input type="text" name="apellidos" value="'.$usuario[0][3].'" />
					</td>
				</tr>
				<tr>
					<td>Cedula: </td>
					<td>
						<input type="text" name="cedula" value="'.$usuario[0][0].'" />
					</td>
				</tr>
				<tr>
					<td>Carnet: </td>
					<td>
						<input type="text" name="carnet" value="'.$usuario[0][1].'" />
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="guardar" value="Guardar" />
					</td>
				</tr>
			</table>
        </form>
		';
		$html->constuirHtml("SESTUE| Principal", 3, $mensaje, "");
	}
	else
	{
		echo "<script>
				alert('Debe iniciar sesion para poder acceder');
				location.href='../login.php';
			 </script>";
	}
	
	if(isset($_POST['guardar'])){
		if ($usuario[0][0] != $_POST['cedula'] or $usuario[0][1] != $_POST['carnet'] or $usuario[0][2] != $_POST['nombres'] or $usuario[0][3] != $_POST['apellidos']){
			$sql = "UPDATE t_usuarios SET c_cedula_pk=".$_POST['cedula'].", c_carnet_pk=".$_POST['carnet'].", c_nombres='".$_POST['nombres']."', c_apellidos='".$_POST['apellidos']."' WHERE c_alias_pk = '".$_SESSION['user']."'";
			if($db->ejecutarSql($sql)){
				$_SESSION['NA'] = $_POST['nombres']." ".$_POST['apellidos'];
				echo "<script>
					alert('Actualizacion exitosa!');
					location.href='editInfoUser.php';
					</script>";
			}
			else{
				echo "<script>
					alert('Error en la actualizacion.');
					location.href='editInfoUser.php';
					</script>";
			}
		}
		else{
			echo "<script>
					location.href='editInfoUser.php';
					</script>";
		}
	}
	
?>

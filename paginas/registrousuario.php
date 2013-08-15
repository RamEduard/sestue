<?php
	usleep(200000);
	//No ver errores
	error_reporting(E_ALL);
	//Requerimiento de archivos de consulta y html
	require("bd/db_consultas.class.php");
	require("vista/salida_html/html.class.php");
	//Hago instancia las clases Db y Html
	$db = Db::getInstance();
	$html = Html::getInstance();
	
	$mensaje = '
	<form method="post" action="">				
		<center>
		<table border="0" cellspacing=0 cellpadding=2 bordercolor="666633" rules="no">
			<tr>
				<td align="right">
					Usuario: 
				</td>
				<td>
					<input type="text" name="user" size=30  placeholder="Solo letras. Ej.: UsuarioEjemplo" onkeypress="return permite(event, 2)" autofocus required />
					<font color="red">*</font>
				</td>
			</tr>
			<tr>
				<td align="right">
					Clave: 
				</td>
				<td>
					<input type="password" id="p" name="password" size=30 maxlength=8 required placeholder="Solo letras y numeros. Ej.: Usu4r1o0" onkeypress="return permite(event, 3)"/>
					<font color="red">*</font>
				</td>
			</tr>
			<tr>
				<td align="right">
					Confirme su clave: 
				</td>
				<td>
					<input type="password" id="p2" name="password2" size=30 required maxlength=8 placeholder="Introduzca su clave nuevamente" onkeypress="return permite(event, 3)" onchange="validaPass()"/>
					<font color="red">*</font>
				</td>
			</tr>
			<tr>
				<td align="right">
					Palabra secreta: 
				</td>
				<td>
					<input type="text" name="psecreta" size=30 placeholder="Palabra sin simbolos para recordar su clave" required onkeypress="return permite(event, 2)"/>
					<font color="red">*</font>
				</td>
			</tr>
			<tr>
				<td align="right">
					Nombres: 
				</td>
				<td>
					<input type="text" name="names" size=30 required placeholder="Introduzca su(s) nombre(s)" onkeypress="return permite(event, 2)"/>
					<font color="red">*</font>
				</td>
			</tr>
			<tr>
				<td align="right">
					Apellidos: 
				</td>
				<td>
					<input type="text" name="lastname" size=30 required placeholder="Introduzca su(s) apellido(s)" onkeypress="return permite(event, 2)"/>
					<font color="red">*</font>
				</td>
			</tr>
			<tr>
				<td align="right">
					Cédula: 
				</td>
				<td>
					<input type="text" name="ci" size=30 required placeholder="Introduzca su numero de cedula" onkeypress="return permite(event, 1)"/>
					<font color="red">*</font>
				</td>
			</tr>
			<tr>
				<td align="right">
					Carnet: 
				</td>
				<td>
					<input type="text" name="carnet" size=30 required placeholder="Introduzca su numero de carnet" onkeypress="return permite(event, 1)"/>
					<font color="red">*</font>
				</td>
			</tr>
			<tr>
				<td align="right">
					Rol: 
				</td>
				<td>
					<select name="rol" required>
						<option value=""> Seleccione </option>
						<option value="3"> Estudiante </option>
						<option value="4"> Profesor </option>
					</select>
					<font color="red">*</font>
				</td>
		 	</tr>
		 	<tr>
				<td></td>
				<td>
					<input type="submit" name="guardar" Value="      Guardar      " />
				</td>
		 	</tr>
		 </table>					 	
	</form>
	';
	//Salida del html
	$html->constuirHtml("SESTUE | Registrarse", 2, $mensaje, "");
	
	if(isset($_POST['guardar'])){
		$sql = "INSERT INTO `t_usuarios` VALUES ('".$_POST['ci']."','".$_POST['carnet']."','".$_POST['names']."','".$_POST['lastname']."','".$_POST['user']."',MD5('".$_POST['password']."'),'".$_POST['psecreta']."', '".$_POST['rol']."')";
		$sqlAlias = "SELECT c_alias_pk FROM t_usuarios WHERE c_alias_pk='".$_POST['user']."'";
		$sqlCedula = "SELECT c_cedula_pk FROM t_usuarios WHERE c_cedula_pk='".$_POST['ci']."'";
		$sqlCarnet = "SELECT c_cedula_pk FROM t_usuarios WHERE c_carnet_pk='".$_POST['carnet']."'";
		//echo $sqlAlias."<br>".$sqlCedula."<br>".$sqlCarnet."<br>";
		if($db->select($sqlAlias)){
			echo "<script>
					alert('Nombre de usuario ya existente.'); 
					location.href='registrousuario.php'
				  </script>";
		}
		else if($db->select($sqlCedula)){
			echo "<script> 
					alert('Cedula de usuario ya registrada.'); 
					location.href='registrousuario.php'
				  </script>";
		}
		else if($db->select($sqlCarnet)){
			echo "<script> 
					alert('Carnet de usuario ya registrado.'); 
					location.href='registrousuario.php'
				  </script>";
		}
		else if ($db->ejecutarSql($sql)){
			echo "<script> 
					alert('Registro exitoso');
					location.href='./';
				  </script>";
		}
		else{
			echo "<script>alert('Ocurrio un problema en la base de datos y no se guardaron sus datos');</script>
				";
		}
	}
?>

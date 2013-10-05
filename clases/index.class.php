<?php

class Index{
	private $host, $html,$menu, $estilo;
	static $_instance;
	/*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
	private function __construct(){
		$this->host = "http://".$_SERVER["HTTP_HOST"];
		$this->estilo = ESTILO_CSS;
	}
	/*Evitamos el clonaje del objeto. Patrón Singleton*/
	private function __clone(){ }
	//funcion encargada de crear, si es necesario, el objeto. Esta es la funcion que debemos
	//llamar desde fuera de la clase para instanciarla
	public static function getInstance(){
		if (!(self::$_instance instanceof self)){
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	private function construirMenu($numMenu){
		if ($numMenu==1){
			$this->menu = '
		<li><a href="inicio.sesion.php">Iniciar sesion</a></li>
		<li><a href="registrousuario.php">Registrar otro usuario</a></li>
			';
		}
		else if ($numMenu==3){ 
			$this->menu = '
		<li><a href="index.php">Inicio</a></li>
		<li><a href="stuei.php">Soporte Técnico a Usuarios y Equipos I</a></li>
        <li><a href="stueii.php">Soporte Técnico a Usuarios y Equipos II</a></li>
        <li><a href="stueiii.php">Soporte Técnico a Usuarios y Equipos III</a></li>
        <li><a href="preg-resp.php">Preguntas Frecuentes</a></li>
			';
		}
		else if($numMenu==4){
			$this->menu = '
		<li><a href="#">Menu Profesor</a></li>
			';
		}
		else if($numMenu==5){
			$this->menu = '
		<li><a href="#">Menu administrador</a></li>
			';
		}
		return $this->menu;
	}
	public function construirHtml($tituloPag, $numMenu, $contenido, $piePag){
		$menu = $this->construirMenu($numMenu);
		$this->html = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>'.$tituloPag.'</title>
	<style type="text/css">@import url('.$this->host.'/sestue/css/'.$this->estilo.'.css);</style>
	<style type="text/css">@import url('.$this->host.'/sestue/css/marcos.css);</style>
	<style type="text/css">@import url('.$this->host.'/sestue/css/css.css);</style>
	<script type="text/javascript" src="'.$this->host.'/sestue/js/restringirCaracteres.js"></script>
	<script type="text/javascript" src="'.$this->host.'/sestue/js/jquery.js"></script>
	<script type="text/javascript" src="'.$this->host.'/sestue/js/js.js"></script>
<body>
<div id="marco">
	<div id="encabezado">
		<!---<h1>sestue</h1>--->
		<img src="/sestue/img/sestue.png">
	</div>
	<div id="menu">
		'.$menu.'
	</div>
	<div id="contenido">
		<div id="esquina-der">
			<div id="esquina-izq"></div>
		</div>
		<div id="contenido-central">
			'.$contenido.'
		</div>
	</div>
		';
		if ($piePag){
			$this->html .= '
	<div id="pie-pagina">
		<p color="black">'.$piePag.' 
		<a id="reg" href="'.$this->host.'/sestue/paginas/config.estilo.php"> Cambiar tema</a> 
		<a id="reg" href="'.$this->host.'/sestue/paginas/editInfoUser.php"> Editar datos</a> 
		<a id="reg" href="'.$this->host.'/sestue/paginas/cerrar.sesion.php"> Cerrar Sesión</a>
	</div>
			';
		}
		$this->html .= '
</div>
</body>
</html>
		';
		echo $this->html;
	}
}
?>

<?php
/**
 * Description of BootstrapSestue
 * @author Ramon Serrano <ramon_calle-88@gmail.com
 */
#include '/var/www/sestue/lib/config/config.php';
class BootstrapSestue{
	/**
	 * @var $instance
	 */
	private static $instance;
	/**
	 * @var $dir_path
	 */
	private $dir_path;
	/**
	 * @var $html
	 */
	private $html;
	/**
	 * @param 
	 * Crear objetos a traves de __construct
	 */
	public function __construct(){
		$this->dir_path = DIR."themes/bootstrap/";
	}
	/**
	 * @param 
	 * No permitir la clonacion del objeto
	 */
	private function __clone(){ }
	/**
	 * @param 
	 * Iniciar las etiquetas html del documento
	 */
	private function __mainBootstrap(){
		$this->html = 	'
						<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
						<html lang="es">
						';
	}
	/**
	 * @param 
	 * Terminar las etiquetas html del documento
	 */
	private function __endBootstrap(){
		$this->html .= '</html>';
	}
	private function setTitle($pageTitle){
		$this->html .= "<title>$pageTitle</title>";
	}
	private function setHeaders($headerExtras = null){
		$this->html .= '
						<head>
						    <meta charset="utf-8">
						    <meta http-equiv="X-UA-Compatible" content="IE=edge">
						    <meta name="viewport" content="width=device-width, initial-scale=1.0">
						    <meta name="description" content="">
						    <meta name="author" content="">
						    <link rel="shortcut icon" href="ico/favicon.png">

						    <!-- Bootstrap core CSS -->
						    <link href="css/bootstrap.css" rel="stylesheet">

						    <!-- Custom styles for this template -->
						    <link href="css/starter-template.css" rel="stylesheet">

						    <!-- Just for debugging purposes. Don\'t actually copy this line! -->
						    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

						    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
						    <!--[if lt IE 9]>
						      <script src="js/html5shiv.js"></script>
						      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
						    <![endif]-->
						</head>
						<body>
						';
	}
	/**
	 * @param $perfilUser
	 * Setear la variable menu para el html
	 */
	private function setMenuByPerfilUser($perfilUser){
		switch ($perfilUser) {
			case 1:
				# Login
				$this->html .= '
								<div class="navbar navbar-inverse navbar-fixed-top">
							      	<div class="container">
							        <div class="navbar-header">
							          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							            <span class="icon-bar"></span>
							            <span class="icon-bar"></span>
							            <span class="icon-bar"></span>
							          </button>
							          <a class="navbar-brand" href="#">Project name</a>
							        </div>
							        <div class="collapse navbar-collapse">
							          <ul class="nav navbar-nav">
							            <li class="active"><a href="#">Home</a></li>
							            <li><a href="#about">About</a></li>
							            <li><a href="#contact">Contact</a></li>
							          </ul>
							        </div><!--/.nav-collapse -->
							      </div>
							    </div>
								';
				break;
			case 2:
				# code...
				break;
			case 3:
				# code...
				break;
			case 4:
				# code...
				break;	
			case 5:
				# code...
				break;
			default:
				# code...
				break;
		}
	}
	private function setContentPage($contentPage){
		$this->html .= '
							<div class="container">
						      <div class="starter-template">
						        '.$contentPage.'
						      </div>
						    </div><!-- /.container -->
						</body>
						';
	}
	private function setFooter($contentHtml = null){
		$this->html .= '';
	}
	
	private function setMenu($perfilUser = null){
		if(!empty($perfilUser)){
			return $this->setMenuByPerfilUser($perfilUser);
		}
		else{
			throw new Exception("No se encontro perfil del usuario.", 1);
		}
	}
	public function getPage($pageTitle = null, $contentPage = null, $arrayUser = null){
		if(!empty($pageTitle) and !empty($contentPage)){
			$this->__mainBootstrap();
			$this->setTitle($pageTitle);
			$this->setHeaders();
			$this->setMenu($arrayUser[1]);
			$this->setContentPage($contentPage);
			$this->setFooter();
			$this->__endBootstrap();
			return $this->html;	
		}
		else{
			throw new Exception("No se puede crear pagina sin el titulo o el contenido", 1);
		}
	}
}
/*print_r($t = new BootstrapSestue());
$us = UsuarioSesion::getInstance();
$us->setUsuarioSesion("login", 1, "Nombre y Apellido");
print_r($us);
print $t->getPage('ejemplo', 'contenido', $us->getUsuarioSesion());
*/
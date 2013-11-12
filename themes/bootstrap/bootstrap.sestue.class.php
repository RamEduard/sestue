<?php

/**
 * Description of BootstrapSestue
 * @author Ramon Serrano <ramon_calle-88@hotmail.com>
 */
class BootstrapSestue extends Templates {

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
     * @var $objUser
     */
    private $objUser;

    /**
     * @param 
     * Crear objetos a traves de __construct
     */
    public function __construct() {
        $this->dir_path = $this->getHost() . "bootstrap/";
        if ($this->objUser = $this->validateUser()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param 
     * No permitir la clonacion del objeto
     */
    private function __clone() {
        
    }

    /**
     * @param 
     * Iniciar las etiquetas html del documento
     */
    private function __mainBootstrap() {
        $this->html = '
						<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
						<html lang="es">
						';
    }

    /**
     * @param 
     * Terminar las etiquetas html del documento
     */
    private function __endBootstrap() {
        $this->html .= '</html>';
    }

    private function setTitle($pageTitle) {
        $this->html .= "<title>$pageTitle</title>";
    }

    private function setHeaders($headerExtras = null) {
        $this->html .= '
						<head>
						    <meta charset="utf-8">
						    <meta http-equiv="X-UA-Compatible" content="IE=edge">
						    <meta name="viewport" content="width=device-width, initial-scale=1.0">
						    <meta name="description" content="Softawre Educativo para Soporte Técnico a Usuarios y Equipos del Colegio Universitario Francisco de Miranda">
						    <meta name="author" content="Ramón Serrano">
						    <link rel="shortcut icon" href="ico/favicon.png">

						    <!-- Bootstrap core CSS -->
						    <link href="' . $this->dir_path . 'css/bootstrap.css" rel="stylesheet">
                                                    
                                                    <!-- Bootswatch min css -->
                                                    <link href="' . $this->dir_path . 'css/bootswatch.min.css" rel="stylesheet">

						    <!-- Custom styles for this template -->
						    <link href="' . $this->dir_path . 'css/starter-template.css" rel="stylesheet">

						    <!-- Just for debugging purposes. Don\'t actually copy this line! -->
						    <!--[if lt IE 9]><script src="' . $this->dir_path . 'js/ie8-responsive-file-warning.js"></script><![endif]-->

						    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
						    <!--[if lt IE 9]>
						      <script src="' . $this->dir_path . 'js/html5shiv.js"></script>
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
    private function setMenuByPerfilUser($perfilUser = null) {
        switch ($perfilUser) {
            case 1:
                # Login
                $this->html .= '
								<div class="navbar navbar-default navbar-fixed-top">
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
                # Estudiante
                $this->html .= '
								<div class="navbar navbar-default navbar-fixed-top">
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

    private function setContentPage($contentPage) {
        $this->html .= '
                                                    <div class="container">
						      <div class="starter-template">
						        ' . $contentPage . '
						      </div>
						    
						
						';
    }

    private function setFooter($contentHtml = null) {
        $this->html .= '
                                <footer>
                                    <div class="row">
                                      <div class="col-lg-12">

                                        <ul class="list-unstyled">
                                          <li class="pull-right"><a href="#top">Back to top</a></li>
                                          <li><a href="http://news.bootswatch.com" onclick="pageTracker._link(this.href); return false;">Blog</a></li>
                                          <li><a href="http://feeds.feedburner.com/bootswatch">RSS</a></li>
                                          <li><a href="https://twitter.com/thomashpark">Twitter</a></li>
                                          <li><a href="https://github.com/thomaspark/bootswatch/">GitHub</a></li>
                                          <li><a href="../help/#api">API</a></li>
                                          <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=F22JEM3Q78JC2">Donate</a></li>
                                        </ul>
                                        <p>Made by <a href="http://thomaspark.me">Thomas Park</a>. Contact him at <a href="mailto:hello@thomaspark.me">hello@thomaspark.me</a>.</p>
                                        <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>.</p>
                                        <p>Based on <a href="http://getbootstrap.com">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts">Google</a>. Favicon by <a href="https://twitter.com/geraldhiller">Gerald Hiller</a>.</p>

                                      </div>
                                    </div>

                                  </footer>
                              </div><!-- /.container -->
                        </body>
                      ';
    }

    public function getPage($pageTitle = null, $contentPage = null, $exception = null) {
        if(empty($this->objUser) or $this->objUser == NULL or $exception == null){
            $this->__mainBootstrap();
            $this->setTitle($pageTitle);
            $this->setHeaders();
            $this->html .= '
                        <div class="panel panel-warning" style="width:20%">
                            <div class="panel-heading">
                                <h3 class="panel-title">No puede ver contenido de la página</h3>
                            </div>
                            <div class="panel-body">
                                Debe iniciar sesión para poder ver el contenido de esta página.<br>
                                <button class="btn btn-primary" onclick="location.href=\'/sestue/paginas/inicio.sesion.php\'" style="float:right">Iniciar sesión</button>
                            </div>
                            
                        </div>
                        ';
            $this->__endBootstrap();
            return $this->html;
        }
        elseif (( !empty($pageTitle) and !empty($contentPage) ) and $exception == true){
            $this->__mainBootstrap();
            $this->setTitle($pageTitle);
            $this->setHeaders();
            $this->setMenuByPerfilUser($perfilUser);
            $this->setContentPage($contentPage);
            $this->setFooter();
            $this->__endBootstrap();
            return $this->html;
        } else {
            throw new Exception("No se puede crear pagina sin el titulo o el contenido", 1);
        }
    }

}


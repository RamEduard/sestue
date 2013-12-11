<?php
/**
 * Description of BootstrapSestue
 *
 * @author Ramón Serrano
 */
class BootstrapSestue extends Templates {

    /**
     * @param 
     * Crear objetos a traves de __construct
     */
    public function __construct() {
        $this->dir_path = $this->getHost() . "bootstrap/";
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
						    <!-- Icon -->
                <link href="' . $this->dir_path .'img/ico.png" rel="shortcut icon" type="image/png"/>

						    <!-- Bootstrap core CSS -->
						    <link href="' . $this->dir_path . 'css/bootstrap.css" rel="stylesheet">
                                                    
                <!-- Bootswatch min css -->
                <link href="' . $this->dir_path . 'css/bootswatch.min.css" rel="stylesheet">

						    <!-- Just for debugging purposes. Don\'t actually copy this line! -->
						    <!--[if lt IE 9]><script src="' . $this->dir_path . 'js/ie8-responsive-file-warning.js"></script><![endif]-->

						    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
						    <!--[if lt IE 9]>
						      <script src="' . $this->dir_path . 'js/html5shiv.js"></script>
						      <script src="' . $this->dir_path . 'js/respond.min.js"></script>
						    <![endif]-->
                <script src="' . $this->dir_path . 'js/jquery.min.js"></script>
                <script src="' . $this->dir_path . 'js/bootstrap.min.js"></script>
                <script type="text/javascript" src="/sestue/lib/js/restringirCaracteres.js"></script>
						</head>
						<body>
						';
    }

    /**
     * @param $exception
     * Setear la variable menu para el html
     */
    private function setMenu( $exception = null ) {
      if( $exception == null ){
        
                $this->html .= '
		<div class="navbar navbar-default navbar-fixed-top">
                 <img id="gobierno-menu" src="' . $this->dir_path . 'img/gobierno2.png" width="100%" height="53"/>
                 <div class="container">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
                        <a class="navbar-brand" href="' . DIR_PAGES . 'index.php" title="Inicio"><span class="glyphicon glyphicon-home"></span> ' . APP_NAME . '</a>
                    </div>
                    <div class="collapse navbar-collapse">
			       <ul class="nav navbar-nav">
                          <li class="dropdown" title="Soporte Técnico a Usuarios y Equipos I">
                            <a href="#"class="dropdown-toggle" data-toggle="dropdown">Trimestre I<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="' . DIR_PAGES . 'stuei.php">Ver Módulo</a></li>
                              <li class="divider"></li>
                              <li><a href="' . DIR_PAGES . 'actividadT1.php">Hacer Actividades</a></li>
                            </ul>
                          </li>
							            <li class="dropdown" title="Soporte Técnico a Usuarios y Equipos II">
                            <a href="#"class="dropdown-toggle" data-toggle="dropdown">Trimestre II<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="' . DIR_PAGES . 'stueii.php">Ver Módulo</a></li>
                              <li class="divider"></li>
                              <li><a href="' . DIR_PAGES . 'actividadT2.php">Hacer Actividades</a></li>
                            </ul>
                          </li>
							            <li class="dropdown" title="Soporte Técnico a Usuarios y Equipos III">
                            <a href="#"class="dropdown-toggle" data-toggle="dropdown">Trimestre III<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="' . DIR_PAGES . 'stueiii.php">Ver Módulo</a></li>
                              <li class="divider"></li>
                              <li><a href="' . DIR_PAGES . 'actividadT3.php">Hacer Actividades</a></li>
                            </ul>
                          </li>
                          <li title="Archivos de interés"><a href="' . DIR_PAGES . 'interes.php">Archivos de interés</a></li>
                          <li title="Preguntas frecuentes"><a href="' . DIR_PAGES . 'preg-resp.php">Preguntas frecuentes</a></li>
                        </ul>
                     </div><!--/.nav-collapse -->
		          </div>
            </div>
            ';
                
      }
      elseif ($exception) {
        
      }
    }

    private function setContentPage($contentPage) {
        $this->html .= '
                <div class="container" style="margin-top:80px;">
						      ' . $contentPage . '
						    
						
						';
    }

    private function setFooter($contentHtml = null) {
        $this->html .= '
                                <!--<footer>
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

                                  </footer>-->
                              </div><!-- /.container -->
                        </body>
                      ';
    }

    public function getPage($titlePage = null, $contentPage = null, $exception = null) {
        if (( !empty($titlePage) and !empty($contentPage) ) or $exception){
            $this->__mainBootstrap();
            $this->setTitle($titlePage);
            $this->setHeaders();
            $this->setMenu($exception);
            $this->setContentPage($contentPage);
            $this->setFooter();
            $this->__endBootstrap();
            return $this->html;
        } else {
            throw new Exception("No se puede crear pagina sin el título o el contenido", 1);
        }
    }

}

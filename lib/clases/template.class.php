<?php
/**
 * Descripcion de Template
 */
 class Template {
 	private $host, $html,$menu;
	static $_instance;
	/*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
	private function __construct(){
		$this->host = "http://".$_SERVER["HTTP_HOST"];
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

	private function __setHeader($title){
		$header = '
<head>
	<title>'.$title.'</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="'.$this->host.'/sestue/paginas/ejemplos/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 7]>
        <link href="'.$this->host.'/sestue/paginas/ejemplos/css/ie.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/other/lte-ie7.js"></script>
    <![endif]--> 

    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/jquery/jquery-migrate-1.1.1.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/jquery/globalize.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/other/excanvas.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/other/jquery.mousewheel.min.js"></script>
        
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/bootstrap/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/cookies/jquery.cookies.2.2.0.min.js"></script>    
    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/jflot/jquery.flot.js"></script>    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/jflot/jquery.flot.stack.js"></script>    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/jflot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/jflot/jquery.flot.resize.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/sparklines/jquery.sparkline.min.js"></script>        
    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/uniform/jquery.uniform.min.js"></script>

    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/select/select2.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/multiselect/jquery.multi-select.min.js"></script>

    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/epiechart/jquery.easy-pie-chart.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/sparklines/jquery.sparkline.min.js"></script>

    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/validationEngine/languages/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/validationEngine/jquery.validationEngine.js"></script>  
    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/datatables/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/shbrush/XRegExp.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/shbrush/shCore.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/shbrush/shBrushXml.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/shbrush/shBrushJScript.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/shbrush/shBrushCss.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/cleditor/jquery.cleditor.js"></script>        
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/ckeditor/ckeditor.js"></script>        

    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/fancybox/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/plupload/plupload.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/plupload/plupload.gears.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/plupload/plupload.silverlight.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/plupload/plupload.flash.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/plupload/plupload.browserplus.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/plupload/plupload.html4.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/plupload/plupload.html5.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>    
    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/plugins.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/charts.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/paginas/ejemplos/js/actions.js"></script>
</head>
    ';

    return $header;
		
	}

	private function __setMenu($nivelUsuario){
		
		if ($nivelUsuario==1){
			$this->menu = array(
				'
			<div class="top">
                <a href="index.php" class="logo"></a>
                <div class="search">
                    <div class="input-prepend">
                        <span class="add-on orange"><span class="icon-search icon-white"></span></span>
                        <input type="text" placeholder="search..."/>                                                      
                    </div>            
                </div>
            </div>
            <div class="nContainer">                
                <ul class="navigation">         
                    <li>
                        <a href="index.php" class="blblue">Inicio</a>
                    </li>
                    <li><a href="categorias.php" class="blred">Categorías</a></li>
                    <li>
                        <a href="#" class="blyellow">Productos</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="productos.php">Crear</a></li>
                            <li><a href="#">Ver creados</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="blgreen">Imágenes</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Mixology</a></li>
                            <li><a href="galeria.php">Galería</a></li>
                        </ul>
                    </li>
                    
                    <!--                
                    <li>
                        <a href="#" class="bldblue">Tables</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="tables.html">Simple</a></li>
                            <li><a href="tables_dynamic.html">Dynamic</a></li>                    
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="blpurple">Samples</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>                    
                    </li>
                    <li>
                        <a href="#" class="blorange">Other</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="files.html">File handling</a></li>
                            <li><a href="images.html">Images</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                    -->
                </ul>
                <a class="close">
                    <span class="ico-remove"></span>
                </a>
            </div>
				'
				, 
				'
			<li>
                    <a href="index.php" class="button">
                        <div class="icon">
                            <span class="ico-home"></span>
                        </div>                    
                        <div class="name">Inicio</div>
                    </a>                
                </li>
                <li>
                    <a href="categorias.php" class="button red">
                        <div class="icon">
                            <span class="ico-chart-4"></span>
                        </div>                    
                        <div class="name">Categorías</div>
                    </a>                
                </li> 
                <li>
                    <a href="#" class="button yellow">
                    <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-cog-2"></span>
                        </div>
                        <div class="name">Productos</div>
                    </a>
                    <ul class="sub">
                        <li><a href="productos.php">Crear</a></li>
                        <li><a href="#">Ver creados</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="button green">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-picture"></span>
                        </div>                    
                        <div class="name">Imágenes</div>
                    </a> 
                    <ul class="sub">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Mixology</a></li>
                        <li><a href="galeria.php">Galería</a></li>
                    </ul>
                </li>
                <!--                              
                <li>
                    <a href="#" class="button dblue">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-layout-7"></span>
                        </div>                    
                        <div class="name">Tables</div>
                    </a> 
                    <ul class="sub">
                        <li><a href="tables.html">Simple</a></li>
                        <li><a href="tables_dynamic.html">Dynamic</a></li>
                    </ul>                                        
                </li>
                <li>
                    <a href="#" class="button purple">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-box"></span>
                        </div>                    
                        <div class="name">Samples</div>
                    </a>                
                    <ul class="sub">
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>                                        
                </li>
                <li>
                    <a href="#" class="button orange">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-cloud"></span>
                        </div>                    
                        <div class="name">Other</div>
                    </a>                
                    <ul class="sub">
                        <li><a href="files.html">File handling</a></li>
                        <li><a href="images.html">Images</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="404.html">Error 404</a></li>
                    </ul>                                        
                </li>
                -->                
                <li>
                    <div class="user">
                        <img src="img/examples/users/dmitry_m.jpg" align="left"/>
                        <a href="#" class="name">
                            <span>Dmitry Ivaniuk</span>
                            <span class="sm">Administrator</span>
                        </a>
                    </div>
                    <div class="buttons">
                        <div class="sbutton green navButton">
                            <a href="#"><span class="ico-align-justify"></span></a>
                        </div>
                        <div class="sbutton blue">
                            <a href="#"><span class="ico-cogs"></span></a>
                            <div class="popup">
                                <div class="arrow"></div>
                                <div class="row-fluid">
                                    <div class="row-form">
                                        <div class="span12"><strong>SETTINGS</strong></div>
                                    </div>                                    
                                    <div class="row-form">
                                        <div class="span4">Navigation:</div>
                                        <div class="span8"><input type="radio" class="cNav" name="cNavButton" value="default"/> Default <input type="radio" class="cNav" name="cNavButton" value="bordered"/> Bordered</div>
                                    </div>                                    
                                    <div class="row-form">
                                        <div class="span4">Content:</div>
                                        <div class="span8"><input type="radio" class="cCont" name="cContent" value=""/> Responsive <input type="radio" class="cCont" name="cContent" value="fixed"/> Fixed</div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>                        
                    </div>
                </li>
				'
			);
		}
		else if ($nivelUsuario==3){ 
			$this->menu = array($sidebar, $navigation);
		}
		else if($nivelUsuario==4){
			$this->menu = array($sidebar, $navigation);
		}
		else if($nivelUsuario==5){
			$this->menu = array($sidebar, $navigation);
		}

	}
	private function __setBody($menuPrimero, $menuSegundo, $contenido){
		$body = '
<body>    
    <div id="loader"><img src="img/loader.gif"/></div>
    <div class="wrapper">
        <div class="sidebar">
        	'.$menuPrimero.'
        </div>
        <div class="body">
            
            <ul class="navigation">
            	'.$menuSegundo.'
            </ul>
            
            
            <div class="content">
                '.$contenido.'
            </div>
            
        </div>
        
    </div>
    
    <div class="dialog" id="source" style="display: none;" title="Source"></div>
    
</body>
		';
		return $body;
	}
	public function setPaginaHtml($title, $contenido, $nivelUsuario){
		$html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">';
		$html .= $this->__setHeader($title);
		$this->__setMenu($nivelUsuario);
		$html .= $this->__setBody($this->menu[0],$this->menu[1],$contenido);
		$html .= '</html>';
		echo $html;
	}
 }
 $t = Template::getInstance();
 $t->setPaginaHtml("Ejemplo", "cnote",1);
 //var_dump($t);
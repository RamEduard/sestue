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
	<title>SESTUE | '.$title.'</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="'.$this->host.'/sestue/lib/templates/aries/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 7]>
        <link href="'.$this->host.'/sestue/lib/templates/aries/css/ie.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/other/lte-ie7.js"></script>
    <![endif]--> 

    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/jquery/jquery-migrate-1.1.1.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/jquery/globalize.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/other/excanvas.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/other/jquery.mousewheel.min.js"></script>
        
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/bootstrap/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/cookies/jquery.cookies.2.2.0.min.js"></script>    
    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/jflot/jquery.flot.js"></script>    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/jflot/jquery.flot.stack.js"></script>    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/jflot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/jflot/jquery.flot.resize.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/sparklines/jquery.sparkline.min.js"></script>        
    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/uniform/jquery.uniform.min.js"></script>

    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/select/select2.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/multiselect/jquery.multi-select.min.js"></script>

    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/epiechart/jquery.easy-pie-chart.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/sparklines/jquery.sparkline.min.js"></script>

    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/validationEngine/languages/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/validationEngine/jquery.validationEngine.js"></script>  
    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/datatables/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/shbrush/XRegExp.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/shbrush/shCore.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/shbrush/shBrushXml.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/shbrush/shBrushJScript.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/shbrush/shBrushCss.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/cleditor/jquery.cleditor.js"></script>        
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/ckeditor/ckeditor.js"></script>        

    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/fancybox/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/plupload/plupload.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/plupload/plupload.gears.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/plupload/plupload.silverlight.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/plupload/plupload.flash.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/plupload/plupload.browserplus.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/plupload/plupload.html4.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/plupload/plupload.html5.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>    
    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/plugins.js"></script>
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/charts.js"></script>
    
    <script type="text/javascript" src="'.$this->host.'/sestue/lib/templates/aries/js/actions.js"></script>
</head>
    ';

    return $header;
		
	}

	private function __setMenu($nivelUsuario, $usuario){
		
		if ($nivelUsuario==1){
			$this->menu = array(
				'
			<div class="top">
                <a href="'.$this->host.'/sestue/paginas/index.php" class="logo"></a>
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
                        <a href="'.$this->host.'/sestue/paginas/index.php" class="blblue">Inicio</a>
                    </li>
                    <li><a href="'.$this->host.'/sestue/paginas/inicio.sesion.php" class="blred">Iniciar sesión</a></li>
                    <li><a href="#" class="blyellow">Registrar otro usuario</a></li>
                </ul>
                <a class="close">
                    <span class="ico-remove"></span>
                </a>
            </div>
				'
				, 
				'
			<li>
                    <a href="'.$this->host.'/sestue/paginas/index.php" class="button">
                        <div class="icon">
                            <span class="ico-home"></span>
                        </div>                    
                        <div class="name">Inicio</div>
                    </a>                
                </li>
                <li>
                    <a href="'.$this->host.'/sestue/paginas/inicio.sesion.php" class="button red" style="height:95px">
                        <div class="icon">
                            <span class="ico-chart-4"></span>
                        </div>                    
                        <div class="name">Iniciar sesión</div>
                    </a>                
                </li> 
                <li>
                    <a href="'.$this->host.'/sestue/paginas/registrousuario.php" class="button yellow" style="height:100px">
                        <div class="icon">
                            <span class="ico-cog-2"></span>
                        </div>
                        <div class="name">Registrar otro usuario</div>
                    </a>
                </li>
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
			$this->menu = array(
                '
            <div class="top">
                <a href="'.$this->host.'/sestue/paginas/index.php" class="logo"></a>
                <div class="search">
                    <div class="input-prepend">
                        <span class="add-on orange"><span class="icon-search icon-white"></span></span>
                        <input type="text" placeholder="search..."/>                                                      
                    </div>            
                </div>
            </div>
            <div class="nContainer">                
                <ul class="navigation">         
                    <li><a href="'.$this->host.'/sestue/paginas/index.php" class="blblue">Inicio</a></li>
                    <li>
                        <a href="'.$this->host.'/sestue/paginas/stuei.php" class="blred" title="Soporte Técnico a Usuarios y Equipos I">STUE I</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="#">Crear</a></li>
                            <li><a href="#">Ver creados</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="'.$this->host.'/sestue/paginas/stueii.php" class="blyellow" title="Soporte Técnico a Usuarios y Equipos II">STUE II</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="#">Crear</a></li>
                            <li><a href="#">Ver creados</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="'.$this->host.'/sestue/paginas/stueiii.php" class="blgreen" title="Soporte Técnico a Usuarios y Equipos III">STUE III</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="#">Crear</a></li>
                            <li><a href="#">Ver creados</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="'.$this->host.'/sestue/paginas/actividadesProyecto.php" class="bldblue" title="Actividades del proyecto">Actividades</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="#">Hacer actividad</a></li>
                            <li><a href="verActividades.php">Ver actividades</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="close">
                    <span class="ico-remove"></span>
                </a>
            </div>
                '
                , 
                '
                <li>
                    <a href="'.$this->host.'/sestue/paginas/index.php" class="button">
                        <div class="icon">
                            <span class="ico-home"></span>
                        </div>                    
                        <div class="name">Inicio</div>
                    </a>                
                </li>
                <li>
                    <a href="'.$this->host.'/sestue/paginas/stuei.php" class="button red" title="Soporte Técnico a Usuarios y Equipos I">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-chart-4"></span>
                        </div>                    
                        <div class="name">STUE I</div>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Crear</a></li>
                        <li><a href="#">Ver creados</a></li>
                    </ul>
                </li> 
                <li>
                    <a href="'.$this->host.'/sestue/paginas/stuei.php" class="button yellow" title="Soporte Técnico a Usuarios y Equipos II">
                    <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-cog-2"></span>
                        </div>
                        <div class="name">STUE II</div>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Crear</a></li>
                        <li><a href="#">Ver creados</a></li>
                    </ul>
                </li>
                <li>
                    <a href="'.$this->host.'/sestue/paginas/stuei.php" class="button green" title="Soporte Técnico a Usuarios y Equipos III">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-picture"></span>
                        </div>                    
                        <div class="name">STUE III</div>
                    </a> 
                    <ul class="sub">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Mixology</a></li>
                        <li><a href="galeria.php">Galería</a></li>
                    </ul>
                </li>
                                              
                <li>
                    <a href="'.$this->host.'/sestue/paginas/stuei.php" class="button dblue">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-layout-7"></span>
                        </div>                    
                        <div class="name">Actividades</div>
                    </a> 
                    <ul class="sub">
                        <li><a href="tables.html">Simple</a></li>
                        <li><a href="tables_dynamic.html">Dynamic</a></li>
                    </ul>                                        
                </li>
                <!--
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
                            <span>'.$usuario.'</span>
                            <span class="sm">Estudiante</span>
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
		else if($nivelUsuario==4){
			$this->menu = array(
                '
            <div class="top">
                <a href="'.$this->host.'/sestue/paginas/index.php" class="logo"></a>
                <div class="search">
                    <div class="input-prepend">
                        <span class="add-on orange"><span class="icon-search icon-white"></span></span>
                        <input type="text" placeholder="search..."/>                                                      
                    </div>            
                </div>
            </div>
            <div class="nContainer">                
                <ul class="navigation">         
                    <li><a href="'.$this->host.'/sestue/paginas/index.php" class="blblue">Inicio</a></li>
                    <li>
                        <a href="'.$this->host.'/sestue/paginas/stuei.php" class="blred" title="Soporte Técnico a Usuarios y Equipos I">STUE I</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="#">Crear</a></li>
                            <li><a href="#">Ver creados</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="'.$this->host.'/sestue/paginas/stueii.php" class="blyellow" title="Soporte Técnico a Usuarios y Equipos II">STUE II</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="#">Crear</a></li>
                            <li><a href="#">Ver creados</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="'.$this->host.'/sestue/paginas/stueiii.php" class="blgreen" title="Soporte Técnico a Usuarios y Equipos III">STUE III</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="#">Crear</a></li>
                            <li><a href="#">Ver creados</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="'.$this->host.'/sestue/paginas/actividadesProyecto.php" class="bldblue" title="Actividades del proyecto">Actividades</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="#">Hacer actividad</a></li>
                            <li><a href="verActividades.php">Ver actividades</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="close">
                    <span class="ico-remove"></span>
                </a>
            </div>
                '
                , 
                '
                <li>
                    <a href="'.$this->host.'/sestue/paginas/index.php" class="button">
                        <div class="icon">
                            <span class="ico-home"></span>
                        </div>                    
                        <div class="name">Inicio</div>
                    </a>                
                </li>
                <li>
                    <a href="'.$this->host.'/sestue/paginas/stuei.php" class="button red" title="Soporte Técnico a Usuarios y Equipos I">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-chart-4"></span>
                        </div>                    
                        <div class="name">STUE I</div>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Crear</a></li>
                        <li><a href="#">Ver creados</a></li>
                    </ul>
                </li> 
                <li>
                    <a href="'.$this->host.'/sestue/paginas/stuei.php" class="button yellow" title="Soporte Técnico a Usuarios y Equipos II">
                    <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-cog-2"></span>
                        </div>
                        <div class="name">STUE II</div>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Crear</a></li>
                        <li><a href="#">Ver creados</a></li>
                    </ul>
                </li>
                <li>
                    <a href="'.$this->host.'/sestue/paginas/stuei.php" class="button green" title="Soporte Técnico a Usuarios y Equipos III">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-picture"></span>
                        </div>                    
                        <div class="name">STUE III</div>
                    </a> 
                    <ul class="sub">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Mixology</a></li>
                        <li><a href="galeria.php">Galería</a></li>
                    </ul>
                </li>
                                              
                <li>
                    <a href="'.$this->host.'/sestue/paginas/stuei.php" class="button dblue">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-layout-7"></span>
                        </div>                    
                        <div class="name">Actividades</div>
                    </a> 
                    <ul class="sub">
                        <li><a href="tables.html">Simple</a></li>
                        <li><a href="tables_dynamic.html">Dynamic</a></li>
                    </ul>                                        
                </li>
                <!--
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
                            <span>'.$usuario.'</span>
                            <span class="sm">Profesor</span>
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
		else if($nivelUsuario==5){
			$this->menu = array($sidebar, $navigation);
		}

	}
	private function __setBody($menuPrimero, $menuSegundo, $titulo, $contenido){
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
    
    
</body>
		';
		return $body;
	}
	public function construirHtml($title = null, $nivelUsuario = null, $contenido = null, $usuario = null, $pagina = null){
        if ($pagina == "controller"){

        }
        else {
            $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">';
            $html .= $this->__setHeader($title);
            $this->__setMenu($nivelUsuario, $usuario);
            $html .= $this->__setBody( $this->menu[0], $this->menu[1], $title, $contenido);
            $html .= '</html>';
            echo $html;   
        }
	}
 }
 #$t = Template::getInstance();
 #$t->construirHtml("Ejemplo", "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>", 4, "Ramon Serrano", "Subtitle");
 //var_dump($t);
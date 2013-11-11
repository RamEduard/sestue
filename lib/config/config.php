<?php

/**
 * Descripcion de config
 * Fecha de creacion 05/10/2013
 * @author Ramon Serrano
 * @email <ramon_calle-88@hotmail.com
 */
    
    //No ver errores de PHP
    error_reporting(E_ALL);
    //Variables de Base de Datos
    define('DIR',$_SERVER['DOCUMENT_ROOT']."/sestue/");
    define("SERVIDOR_BD", "localhost");
    define("USUARIO_BD", "root");
    define('PASS_BD', 'ramon');
    define('BD', 'sestuebd');
    define ('CLASS_DB',             DIR.'/lib/clases/db.class.php');
    define ('CLASS_UsuarioSesion',  DIR.'/lib/clases/usuario.sesion.class.php');
    define ('CLASS_Index',          DIR.'/lib/clases/index.class.php');
    define ('CLASS_Formulario',     DIR.'/lib/clases/formulario.class.php');
    define ('CLASS_Template',     DIR.'/lib/clases/template.class.php');
    require(CLASS_DB);
	require(CLASS_UsuarioSesion);
	require(CLASS_Index);
	require(CLASS_Formulario);
    require (CLASS_Template);
	
	//Iniciar variables de sesion
	# Siempre se debera hacer despues de requerir los archivos
    session_start();
    
    //Configuracion de CSS
    if (!$_SESSION['estilo']){
	define('ESTILO_CSS','default');
    }
    else{
	define('ESTILO_CSS', $_SESSION['estilo']);
    }
?>

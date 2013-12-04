<?php 

/**
 * Descripcion de config
 * Fecha de creacion 05/10/2013
 * @author Ramon Serrano <ramon_calle-88@hotmail.com>
 */
//No ver errores de PHP
error_reporting(E_ALL);
//Variables de Base de Datos
defined("DIR")                    || define('DIR', $_SERVER['DOCUMENT_ROOT'] . "/sestue/");
defined("DIR_PAGES")              || define('DIR_PAGES', "http://".$_SERVER['HTTP_HOST']."/sestue/paginas/");
defined("DIR_ADMIN")              || define('DIR_ADMIN', "http://".$_SERVER['HTTP_HOST']."/sestue/admin/");
defined("APP_NAME")               || define("APP_NAME", "SESTUE");
defined("APP_VERSION")		  	  || define("APP_VERSION", "1.0");

/*define("SERVIDOR_BD", "sql102.eshost.es");
define("USUARIO_BD", "eshos_13988615");
define('PASS_BD', 'ramoncit');
define('BD', 'eshos_13988615_sestuebd');*/

/*defined("USUARIO_BD")             || define("SERVIDOR_BD", "sql102.260mb.net");
defined("USUARIO_BD")             || define("USUARIO_BD", "n260m_13975387");
defined("PASS_BD")                || define('PASS_BD', 'ramoncit');
defined("BD")                     || define('BD', 'n260m_13975387_sestuebd');*/

defined("SERVIDOR_BD")            || define("SERVIDOR_BD", "localhost");
defined("USUARIO_BD")             || define("USUARIO_BD", "root");
defined("PASS_BD")                || define('PASS_BD', 'ramon');
defined("BD")                     || define('BD', 'sestuebd');

require_once DIR . 'lib/clases/db.class.php';
require_once DIR . 'lib/clases/model/class.models.php';
require_once DIR . 'lib/clases/usuario.sesion.class.php';
require_once DIR . 'lib/clases/formulario.class.php';
require_once DIR . 'lib/clases/templates.class.php';
require_once DIR . 'themes/bootstrap/bootstrap.sestue.class.php';
require_once DIR . 'themes/bootstrap-sb-admin/bootstrap.sbadmin.class.php';
require_once DIR . "lib/clases/model/class.models.php";

//Iniciar variables de sesion
# Siempre se debera hacer despues de requerir los archivos
session_start();
?>

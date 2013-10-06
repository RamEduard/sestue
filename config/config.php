<?php

/*
 * Descripcion de config
 * Fecha de creacion 05/10/2013
 * @autor Ramon Serrano
 * @email <ramon_calle-88@hotmail.com
 */
    //Iniciar variables de sesion
    session_start();
    //No ver errores de PHP
    error_reporting(0);
    //Variables de Base de Datos
    define("SERVIDOR_BD", "localhost");
    define("USUARIO_BD", "root");
    define('PASS_BD', 'ramon');
    define('BD', 'sestuebd');
    //Configuracion de CSS
    if (!$_SESSION['estilo']){
	define('ESTILO_CSS','default');
    }
    else{
	define('ESTILO_CSS', $_SESSION['estilo']);
    }
?>

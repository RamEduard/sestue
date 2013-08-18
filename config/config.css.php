<?php
	session_start();
	if (!$_SESSION['estilo']){
		define('ESTILO_CSS','default');
	}
	else{
		define('ESTILO_CSS', $_SESSION['estilo']);
	}	
?>

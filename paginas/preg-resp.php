<?php
	//Requerimiento de archivos de consulta y html
	# Con este archivo se evita requerir las clases desde los archivos
	# y hacer session_start()
    require("../lib/config/config.php");

	//Hago instancia las clases Db y Html
	$db = Db::getInstance();
	#$index = Index::getInstance();
	$template = Templates::getInstance('bootstrap');

	//Archivo de preguntas frecuentes
	$file = fopen(DIR_PAGES."preguntasRespuestasInc.html", 'r');
	$contenido = fread($file, 118192);
	fclose($file);
	
	//Armar el html
	$mensaje = '
		<script>
			$(document).ready(function(){
				$(".panel-heading a").each(function(){
					$(this).tooltip({title:"Haz click aquí para ver este contenido."});
				});
			});
		</script>
		<div class="page-header">
			<h2 class="text-warning">Preguntas Frecuentes</h2>
		</div>
		'.$contenido.'
		';
	//salida html
	print $template->getPage('SESTUE | Soporte Técnico a Usuarios y Equipos I', $mensaje);
	
?>

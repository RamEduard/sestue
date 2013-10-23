<?php
	
	require ("../config/config.php");
	$DB = Db::getInstance();
		
	$index = Index::getInstance();
		
	#Hacer la consulta a la tabla de actividades

	$vista = "SELECT * FROM t_proy_activ WHERE c_id_pk = ".$_GET['iid'];
	$resultado = $DB->select($vista);

	$contenido = $resultado[0][3];

		$index->construirHtml("SESTUE | Vista de Actividad", 4, $contenido, null);


		
?>
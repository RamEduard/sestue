<?php
	
	if($_POST['registrar']){
		
		$preguntaData = array(
						"pregunta" 		=> $_POST['preg']['pregunta'],
						"respuestas"	=> array(
											"correcta"	=> $_POST['preg']['respuesta'],
											$_POST['preg']['opcion1'],
											$_POST['preg']['opcion2'],
											$_POST['preg']['opcion3'],
											),
						"modulo"		=> $_POST['preg']['modulo'],	
						);

		print_r($preguntaData);

		//Requerimiento de configuracion y clases
        require("../lib/config/config.php");

        #Objeto de las preguntas y respuestas
        $objPregResp = new PreguntasRespuestas();

        $resultado = $objPregResp->insertPregResp($preguntaData);

        if($resultado == "existe"){
        	header("location:../admin/preg_tests.sestue?r=".md5("existe"));
        }
        elseif ($resultado) {
        	header("location:../admin/preg_tests.sestue?r=".md5("hecho"));
        }
        else{
        	header("location:../admin/preg_tests.sestue?r=".md5("no_hecho"));
        }
	}
	else{
		header("location:../admin/preg_tests.sestue");
	}
?>
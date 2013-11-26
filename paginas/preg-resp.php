<?php

    //Requerimiento de archivos de consulta y html
    # Con este archivo se evita requerir las clases desde los archivos
    # y hacer session_start()
    require("../lib/config/config.php");

    $file = fopen(DIR_PAGES."preguntasRespuestasInc.html", 'r');
    $contenido = fread($file, 8192);
    fclose($file);

    $template = Templates::getInstance($_SESSION['estilo']);

    //Armar el formulario
    
    print $template->getPage('SESTUE | Preguntas', $contenido);
?>

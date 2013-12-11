<?php

    //Requerimiento de archivos de consulta y html
    # Con este archivo se evita requerir las clases desde los archivos
    # y hacer session_start()
    require("../lib/config/config.php");

    $file = fopen("actividad3.html", "r");
    $contenido = fread($file, 53248 );
    fclose($file);

    $random = rand(1,5);
    print $random;

    $html = '
        <div class="page-header">
            <h2 class="text-warning">Actividad del Trimestre III</h2>
        </div>
        
                '.$contenido.'
        
    ';

    $template = Templates::getInstance('bootstrap');

    //Armar el formulario
    
    print $template->getPage('SESTUE | Archivos de interés', $html);
?>

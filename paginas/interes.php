<?php

    //Requerimiento de archivos de consulta y html
    # Con este archivo se evita requerir las clases desde los archivos
    # y hacer session_start()
    require("../lib/config/config.php");

    $html = '
        <div class="page-header">
            <h2 class="text-warning">Archivos de interés</h2>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Archivos que pueden ser de interés para ti
            </div>
            <div class="panel-body">
                <ul>
                    <li>
                        <a href=" ' . DIR_PAGES . 'upload/files/500_conectores.pdf" target="_blank" class="btn btn-default">500 Contectores de párrafos</a>
                    </li>
                    <br>
                    <li>
                        <a href=" ' . DIR_PAGES . 'upload/files/manual_cufm.pdf" target="_blank" class="btn btn-default">Manual de Trabajos de Grado del CUFM</a>
                    </li>
                    <br>
                    <li>
                        <a href=" ' . DIR_PAGES . 'upload/files/pesum_pnfi.pdf" target="_blank" class="btn btn-default">Contenido o Malla Curricular del PNF Informática</a>
                    </li>
                </ul>
            </div>
        </div>
    ';

    $template = Templates::getInstance('bootstrap');

    //Armar el formulario
    
    print $template->getPage('SESTUE | Archivos de interés', $html);
?>

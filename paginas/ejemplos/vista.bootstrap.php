<?php

/**
 * Descripción:
 * Este es un ejemplo de la vista de bootstrap
 * @author Ramón Serrano
 */
include '../../lib/config/config.php';
print_r($t = new BootstrapSestue());

$contenido = '<div class="jumbotron">

   <h1>

        Jumbotron

    </h1>
    <p>

        This is a simple hero unit, a simple jumbotron-sty…

    </p>
    <p>

        <a class="btn btn-primary btn-lg">

            Learn more

        </a>

    </p>

</div>';
print $t->getPage('ejemplo', $contenido);


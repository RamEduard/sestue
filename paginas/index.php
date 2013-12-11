<?php

    //Requerimiento de archivos de consulta y html
    # Con este archivo se evita requerir las clases desde los archivos
    # y hacer session_start()
    include_once "../lib/config/config.php";

    //Objetos a usar en el archivo
    $db = Db::getInstance();
    #$index = Index::getInstance();
    $template = Templates::getInstance('bootstrap');

    //Consultar si existen usuarios nuevos ademas del administrador
    $sql = "SELECT c_alias_pk FROM t_usuarios";
    $usuarios = $db->select($sql);
    
    $mensaje = '
        <div class="page-header">
            <h2 class="text-warning">Software Educativo: Soporte Técnico a Usuarios y Equipos</h2>
        </div>
        <script>
        !function ($) {
            $(function(){
              // carousel demo
              $("#myCarousel").carousel()
            })
        }(window.jQuery)
        </script>
        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active">
              <img src="'.DIR_PAGES.'upload/slides/1/slide1.png" alt="">
              <div class="container">
                <div class="carousel-caption panel panel-info" style="background-color:#fff">
                  <h1>¡Bienvenido!</h1>
                  <p class="lead" style="color:#000">¡Hola! Bienvenidos al Software Educativo: Soporte Técnico a Usuarios y Equipos (SESTUE).</p>
                </div>
              </div>
            </div>
          </div>
          <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev" style="font-size:200px;">&lsaquo;</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next" style="font-size:200px;">&rsaquo;</a>-->
        </div><!-- /.carousel -->
        
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
              <h2>Trimestre I</h2>
              <p>En el trimestre I se describen las actividades que se realizan en la materia Soporte Técnico a Usuarios y Equipos I. Como pueden ser abordaje de la comunidad, levantamiento de información,...</p>
              <p><a class="btn btn-success" href="stuei.php">Entrar &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Trimestre II</h2>
              <p>En el trimestre II se describen las actividades que se realizan en la materia Soporte Técnico a Usuarios y Equipos II. Como definiciones de términos básicos, hardware, software, ...</p>
              <p><a class="btn btn-success" href="stueii.php">Entrar &raquo;</a></p>
           </div>
            <div class="col-md-4">
              <h2>Trimestre III</h2>
              <p>En el trimestre III se describen las cosas que se realizan en la materia Soporte Técnico a Usuarios y Equipos III. Como la implementación, pruebas, ...</p>
              <p><a class="btn btn-success" href="stueiii.php">Entrar &raquo;</a></p>
            </div>
        </div>    
    ';
    //Mostrar Html
    #$index->construirHtml("SESTUE | Principal", 1, $mensaje, 0);
    print $template->getPage('SESTUE | Principal', $mensaje);
    
?>


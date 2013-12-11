<?php
    $usuario = $_SESSION['objeto']->getUsuarioSesion();
    $menu = '
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="'.DIR_ADMIN.'index.sestue">Admin</a>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-left navbar-user">
            <li>
              <a href="'.DIR_PAGES.'index.php" ><i class="fa fa-angle-left"></i> Ir a SESTUE</a>
            </li>
          </ul>
          <ul class="nav navbar-nav side-nav">
            <li><a href="'.DIR_ADMIN.'index.sestue"><i class="fa fa-table"></i> Inicio</a></li>
            ';
    if($usuario[1] == "admin"){
      $menu .= '
              
              <li><a href="'.DIR_ADMIN.'preguntasFrecuentes.sestue"><i class="fa fa-desktop"></i> Preguntas Frecuentes</a></li>
              <!--<li><a href="'.DIR_ADMIN.'preg_tests.sestue"><i class="fa fa-pencil"></i> Preguntas de Examen</a></li>-->
      ';
    }
    $menu .='        
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> Software Educatico <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dropdown Item</a></li>
                <li><a href="#">Another Item</a></li>
                <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li>
              </ul>
            </li>-->
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> '.$usuario[2].' <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="'.DIR_ADMIN.'editInfoUser.sestue"><i class="fa fa-user"></i> Editar mis datos</a></li>
                <!--<li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>-->
                <li class="divider"></li>
                <li><a href="#" onclick="window.location = \''.DIR_ADMIN.'cerrar.sesion.sestue\'"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    ';
  
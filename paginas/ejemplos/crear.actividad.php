<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>SESTUE | Crear Actividad</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 7]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='js/plugins/other/lte-ie7.js'></script>
    <![endif]-->   
    <script type='text/javascript' src='js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='js/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='js/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>            
    
    <script type='text/javascript' src='js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>    
    
    <script type='text/javascript' src="js/plugins/uniform/jquery.uniform.min.js"></script>

    <script type='text/javascript' src="js/plugins/select/select2.min.js"></script>

    <script type='text/javascript' src='js/plugins/cleditor/jquery.cleditor.js'></script>        
    <script type='text/javascript' src='js/plugins/ckeditor/ckeditor.js'></script>    
    
    <script type='text/javascript' src='js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
    
</head>
<body>    
    <div id="loader"><img src="img/loader.gif"/></div>
    <div class="wrapper">
        
        
        <div class="body">
            
            <div class="content">
                
                <div class="row-fluid">

                    <div class="span12">

                        <div class="block">
                            <div class="head green">                                
                                <h2>Crear actividad </h2>
                                <ul class="buttons">             
                                    <li><a href="#" onClick="source('editor_cl'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                                </ul>                                
                            </div>
                            <div class="data-fluid editor">
                                <form id="actividad" action="../../accion-form/crear.actividad.accion.php" method="post">
                                    <div class="row-form">
                                        <div class="span3">Título de la actividad: </div>
                                        <div class="span9"><input type="text" name="actividad[titulo]" placeholder="Escriva el título de la actividad..."/></div>
                                    </div>
                                    <div class="row-form">
                                        <div class="span3">Capítulo de la actividad: </div>
                                        <div class="span9">
                                            <select name="actividad[capitulo]" class="select" style="width: 100%;">
                                                <option value="0">Seleccione el capítulo perteneciente de la actividad...</option>
                                                <option value="1">Capítulo I</option>
                                                <option value="2">Capítulo II</option>
                                                <option value="3">Capítulo III</option>
                                                <option value="4">Capítulo IV</option>
                                                <option value="5">Capítulo V</option>
                                                <option value="6">Capítulo VI</option>
                                                <option value="7">Capítulo VII</option>
                                                <option value="8">Capítulo VIII</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <textarea name="actividad[contenido]" id="wysiwyg" style="height: 300px;">
                                        <h2>It's a predefined text</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </textarea>
                                    <input class="btn" value="Guardar Actividad" type="submit"/>
                                </form>
                            </div>
                        </div>                         

                    </div>



                </div>                   
                
            </div>
            
        </div>
        
    </div>                            
                                
    <div class="dialog" id="source" style="display: none;" title="Source"></div>    
    
</body>
</html>

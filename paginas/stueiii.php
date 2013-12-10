<?php
//Requerimiento de archivos de consulta y html
	# Con este archivo se evita requerir las clases desde los archivos
	# y hacer session_start()
    require("../lib/config/config.php");

	//Hago instancia las clases Db y Html
	$db = Db::getInstance();
	$template = Templates::getInstance('bootstrap');
	
		//Armar el html
		$mensaje = '
<<<<<<< HEAD
		<script>
			$(document).ready(function(){
				$(".panel-heading a").each(function(){
					$(this).tooltip({title:"Haz click aquí para ver este contenido."});
				});
			});
		</script>
=======
>>>>>>> 38914a169559c33f7985be1bf4a4bd8b8dbd239d
        <div class="page-header">
			<h2 class="text-warning">Soporte Técnico a Usuarios y Equipos III</h2>
		</div>
		<ul class="nav nav-tabs" id="unidades">
            <li  class="active">
            	<a href="#tab1" data-toggle="tab">Unidad I</a>
            </li>
            <li>
            	<a href="#tab2" data-toggle="tab">Unidad II</a>
            </li>
            <li>
            	<a href="#tab3" data-toggle="tab">Unidad III</a>
            </li>
            <li>
            	<a href="#tab4" data-toggle="tab">Unidad IV</a>
            </li>
            <li>
            	<a href="#tab5" data-toggle="tab">Unidad V</a>
            </li>
        </ul>
        <div class="tab-content">
        	<div class="tab-pane active" id="tab1">
        		<br>
        		<!--Comienzo de la unidad-->
        		<div class="panel panel-default">
        			<div class="panel-heading">
        			Desarrollo
        			</div>
        			<div class="panel-body">
        				<div class="panel-group" id="panelesk">
        					<!--Grupos de paneles-->
	        				
	        				<div class="panel panel-info">
	        					<div class="panel-heading">
	        						<a data-toggle="collapse" data-parent="paneles" href="#aplicacion-metodologia">
	        							Aplicación de la metodología seleccionada según el área de saberes: hardware y software.
	        						</a>
	        					</div>
<<<<<<< HEAD
	        					<div id="aplicacion-metodologia" class="panel-collapse collapse">
=======
	        					<div id="aplicacion-metodologia" class="panel-collapse collapse in">
>>>>>>> 38914a169559c33f7985be1bf4a4bd8b8dbd239d
	        						<div class="panel-body">
	        							<p>Desarrollar el método de implantación de cómo se realizar el soporte o propuesta del proyecto en sus áreas correspondientes donde se llevará a cabo a nivel de hardware y/o software. Puede guiarse o tomar el ejemplo de referencia que se muestra a continuación:</p>

	        							<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#hardware-saber">
				        							Hardware
				        						</a>
				        					</div>
				        					<div id="hardware-saber" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<table class="table" border=1>
				        								<thead>
				        									<tr>
				        										<th style="text-align:center">Actividades</th>
				        										<th style="text-align:center">Descripción</th>
				        										<th style="text-align:center">Recursos</th>
				        									</tr>
				        								</thead>
				        								<tbody>
				        									<tr>
				        										<td style="text-align:center">
				        											Mantenimiento preventivo y correctivo. Limpieza y Revisión de Dispositivos y Hardware Externo
				        										</td>
				        										<td style="text-align:justify">
				        											Se procederá a Limpiar todos los dispositivos externos del hardware y dispositivos que estén conectados a la máquina (Monitor, Teclado, Impresora, Case, etc.). Se removerá el polvo con una brocha pequeña. Sacar el polvo depositado en su interior (Teclado, Mouse, Impresora, etc.). Revisión de estado y funcionalidad.
				        										</td>
				        										<td style="text-align:justify">
				        											Materiales:
					        										<ul>
					        											<li>
					        											Pinceles
					        											</li>
					        											<li>
					        											Soplador
					        											</li>
					        											<li>
					        											Brochas pequeñas
					        											</li>
					        											<li>
					        											Trozos de tela que no dejen pelusa
					        											</li>
					        											<li>
					        											Destornilladores de estría y plano
					        											</li>
					        											<li>
					        											Alcohol o líquido de limpieza
					        											</li>
					        											<li>
					        											Hisopos
					        											</li>
					        										</ul>
				        										</td>
				        									</tr>
				        									<tr>
				        										<td style="text-align:center">
				        											Mantenimiento preventivo y correctivo. Limpieza y Revisión de Dispositivos y Hardware Interno
				        										</td>
				        										<td style="text-align:justify">
				        											Se procederá a destapar el gabinete (case). Luego se hará una limpieza interna de cada componente. Con pinceles, brocha y con la ayuda de la sopladora se procederá a retirar el sucio. Retirar y limpiar las placas de los slots o ranuras de expansión. Chequear el estado de desgaste de los componentes y su estado físico y de funcionalidad.
				        										</td>
				        										<td style="text-align:justify">
				        											Materiales:
					        										<ul>
					        											<li>
					        											Pinceles
					        											</li>
					        											<li>
					        											Soplador
					        											</li>
					        											<li>
					        											Brochas pequeñas
					        											</li>
					        											<li>
					        											Trozos de tela que no dejen pelusa
					        											</li>
					        											<li>
					        											Destornilladores de estría y plano
					        											</li>
					        											<li>
					        											Pulsera antiestática
					        											</li>
					        											<li>
					        											Alcohol o líquido de limpieza
					        											</li>
					        											<li>
					        											Grasa siliconada
					        											</li>
					        											<li>
					        											Pasta térmica
					        											</li>
					        											<li>
					        											Caja plástica para dejar los tornillos u otros materiales
					        											</li>
					        											<li>
					        											Pinza extractora de chips
					        											</li>
					        											<li>
					        											Hisopos
					        											</li>
					        										</ul>
				        										</td>
				        									</tr>
				        								</tbody>
				        							</table>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#software-saber">
				        							Software
				        						</a>
				        					</div>
				        					<div id="software-saber" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<table class="table" border=1>
				        								<thead>
				        									<tr>
				        										<th style="text-align:center">Actividades</th>
				        										<th style="text-align:center">Descripción</th>
				        										<th style="text-align:center">Recursos</th>
				        									</tr>
				        								</thead>
				        								<tbody>
				        									<tr>
				        										<td style="text-align:center">
				        										Mantenimiento preventivo y correctivo. Análisis del Software, Drivers y otras aplicaciones
				        										</td>
				        										<td style="text-align:justify">
				        											<ul>
				        												<li>
				        												Escanear e Inmunizar el Sistema Operativo con Antivirus
				        												</li>
				        												<li>
				        												Escanear e Inmunizar el Sistema Operativo con Anti-Spyware o Anti-Malware
				        												</li>
				        												<li>
				        												Limpieza del registro
				        												</li>
				        												<li>
				        												Desfragmentación del registro
				        												</li>
				        												<li>
				        												Desfragmentación del Sistema Operativo
				        												</li>
				        												<li>
				        												Optimizar el Sistema 
				        												</li>
				        												<li>
				        												Reparar accesos directos rotos o dañados
				        												</li>
				        												<li>
				        												Escanear el disco duro y reparar errores
				        												</li>
				        												<li>
				        												Arreglar vulnerabilidades
				        												</li>
				        												<li>
				        												Borrar archivos clonados, temporales, historial y trozos de navegación
				        												</li>
				        												<li>
				        												Escanear y reparar hoyos en el sistema
				        												</li>
				        												<li>
				        												Escanear y actualizar los drivers
				        												</li>
				        												<li>
				        												Actualización de todos los programas, software y el Sistema Operativo (Opcional)
				        												</li>
				        												<li>
				        												Reinicio de la máquina
				        												</li>
				        											</ul>
				        										</td>
				        										<td style="text-align:justify">
				        											<ul>
				        												<li>
				        												Programas para el mantenimiento preventivo y correctivo del Software. Sistema Operativo
				        												</li>
				        												<li>
				        												Optimización Global
				        												</li>
				        												<li>
				        												Análisis del Sistema 
				        												</li>
				        												<li>
				        												Limpieza y optimización del sistema 
				        												</li>
				        												<li>
				        												Drivers 
				        												</li>
				        												<li>
				        												Desintaladores
				        												</li>
				        												<li>
				        												Antivirus 
				        												</li>
				        												<li>
				        												Anti-Troyanos
				        												</li>
				        												<li>
				        												Antivirus USB
				        												</li>
				        												<li>
				        												Anti-Malware, Anti-Spyware
				        												</li>
				        												<li>
				        												Cortafuegos (Firewall)
				        												</li>
				        												<li>
				        												Test de seguridad
				        												</li>
				        											</ul>
				        										</td>
				        									</tr>
				        									
				        								</tbody>
				        							</table>
				        						</div>
				        					</div>
				        				</div>

	        						</div>
	        					</div>
	        				</div>

	        				<!--Fin de grupo de paneles-->
	        			</div>	
        			</div>
        		</div>
        		<!--Fin de la unidad-->
        	</div>
        	<div class="tab-pane" id="tab2">
        		<br>
        		<!--Comienzo de la unidad-->
        		<div class="panel panel-default">
        			<div class="panel-heading">
        			Implantación
        			</div>
        			<div class="panel-body">
        				<div class="panel-group" id="panelesk">
        					<!--Grupos de paneles-->
	        				
	        				<div class="panel panel-info">
	        					<div class="panel-heading">
	        						<a data-toggle="collapse" data-parent="paneles" href="#estrategia-implantacion">
	        							Estrategia de implantación del proyecto
	        						</a>
	        					</div>
<<<<<<< HEAD
	        					<div id="estrategia-implantacion" class="panel-collapse collapse">
=======
	        					<div id="estrategia-implantacion" class="panel-collapse collapse in">
>>>>>>> 38914a169559c33f7985be1bf4a4bd8b8dbd239d
	        						<div class="panel-body">
	        							<p>Se debe realizar el plan de implantación: ¿Cómo?, ¿Cuando?, ¿Donde?.</p>
										<p>De acuerdo a la Unidad I en su ejemplo anterior, cada una de las actividades poseen distintas tareas, estas deben ser descritas detalladamente como serán implementadas.</p>
										<p>Esta sección se encarga de como detallar cada paso o procedimiento que se va a realizar durante la implantación del soporte o propuesta definida. </p>

										<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#etapas-implantacion">
				        							Etapas de implantación
				        						</a>
				        					</div>
				        					<div id="etapas-implantacion" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<ul>
				        								<li>
				        									Se establece un orden de implantación acorde a la estructura de la institución o comunidad donde ha de llevarse a cabo el objetivo del proyecto.
				        								</li>
				        								<li>
				        									Se realiza un relevamiento detallado de hardware y software, en base al cual se definirán los requisitos y componentes de los equipos.
				        								</li>
				        								<li>
				        									Seleccionar una o varias herramientas que permitan la implantación de lo que se quiera hacer.
				        								</li>
				        							</ul>
				        							<p>Consulte con su profesor tutor sobre este punto para facilitar las ideas de métodos o procedimientos a realizar según su criterio.</p>
				        						</div>
				        					</div>
				        				</div>

	        						</div>
	        					</div>
	        				</div>

	        				<div class="panel panel-info">
	        					<div class="panel-heading">
	        						<a data-toggle="collapse" data-parent="paneles" href="#ejecucion-evaluacion-implantacion">
	        							Ejecución y evaluación de la implantación
	        						</a>
	        					</div>
	        					<div id="ejecucion-evaluacion-implantacion" class="panel-collapse collapse">
	        						<div class="panel-body">
	        							<p>Una vez realizada toda la planificación, estrategias y procedimientos, detallados y especificados cada uno de distintas maneras, se continúa con la ejecución de todo lo planificado anteriormente. Tomando en cuenta el comportamiento y tiempo de respuesta de cada actividad con sus respectivas tareas. Se recomienda diseñar un instrumento de evaluación que valide cada actividad y tarea con su resultado final.</p>

	        							<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#preguntas-evaluacion">
				        							Algunas preguntas de evaluación
				        						</a>
				        					</div>
				        					<div id="preguntas-evaluacion" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<ul>
				        								<li>
				        									¿Ha funcionado la implementación? Evaluación de estructura, proceso y resultado: Utilización de indicadores.
				        								</li>
				        								<li>
				        									¿Cuáles son los indicadores clave a medir para evaluar la implementación?
				        								</li>
				        								<li>
				        									¿Existen instrumentos para la medición del proceso de implementación?
				        								</li>
				        								<li>
				        									¿Con qué diseños se puede planificar una evaluación de resultados de implementación de?
				        								</li>
				        							</ul>

				        							<div class="panel panel-warning">
							        					<div class="panel-heading">
							        						<a data-toggle="collapse" data-parent="paneles" href="#referencia-instrumento">
							        							Referencia de intrumento de evaluación
							        						</a>
							        					</div>
							        					<div id="referencia-instrumento" class="panel-collapse collapse">
							        						<div class="panel-body">
							        							<table class="table" border=1 style="border: 1px solid rgb(221,221,221)">
							        								<thead>
							        									<tr>
							        										<th colspan="2"></th>
							        										<th colspan="2" style="text-align:center">
							        										Cumple
							        										</th>
							        										<th colspan="2"></th>
							        									</tr>
							        									<tr>
							        										<th style="text-align:center">
							        										Ítem
							        										</th>
							        										<th style="text-align:center">
							        										Descripción de la prueba
							        										</th>
							        										<th style="text-align:center">
							        										Si
							        										</th>
							        										<th style="text-align:center">
							        										No
							        										</th>
							        										<th style="text-align:center">
							        										Observaciones
							        										</th>
							        									</tr>
							        								</thead>
							        								<tbody>
							        									<tr>
							        										<td style="text-align:right; background:rgb(174,174,238)">
							        										1
							        										</td>
							        										<td style="text-align:left;background:rgb(174,174,238)">
							        										Sistemas Operativos
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										1.1
							        										</td>
							        										<td style="text-align:left;">
							        										-PC
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										1.1.1
							        										</td>
							        										<td style="text-align:left;">
							        										--Linux
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										1.1.2
							        										</td>
							        										<td style="text-align:left;">
							        										--Windows
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right; ">
							        										1.1.3
							        										</td>
							        										<td style="text-align:left;">
							        										--MAC
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										1.2
							        										</td>
							        										<td style="text-align:left;">
							        										-Móvil
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										1.2.1
							        										</td>
							        										<td style="text-align:left;">
							        										--Android
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										1.2.2
							        										</td>
							        										<td style="text-align:left;">
							        										--IOS
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right; ">
							        										1.2.3
							        										</td>
							        										<td style="text-align:left;">
							        										--Windows Phone
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right; ">
							        										1.2.4
							        										</td>
							        										<td style="text-align:left;">
							        										--Blackberry
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right; background:rgb(238, 174,174)">
							        										2
							        										</td>
							        										<td style="text-align:left;background:rgb(238, 174,174)">
							        										Bases de Datos
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										2.1
							        										</td>
							        										<td style="text-align:left;">
							        										-Pruebas de estrés
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										2.1.1
							        										</td>
							        										<td style="text-align:left;">
							        										--Respuesta a las consultas
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										2.1.2
							        										</td>
							        										<td style="text-align:left;">
							        										--Máximo de consultas
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										2.1.3
							        										</td>
							        										<td style="text-align:left;">
							        										--Rendimiento
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										2.2
							        										</td>
							        										<td style="text-align:left;">
							        										-Pruebas de normalización
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										2.2.1
							        										</td>
							        										<td style="text-align:left;">
							        										--Cumple la 1ra Forma Normal
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										2.2.2
							        										</td>
							        										<td style="text-align:left;">
							        										--Cumple la 2da Forma Normal
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										2.2.3
							        										</td>
							        										<td style="text-align:left;">
							        										--Cumple la 3ra Forma Normal
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        									<tr>
							        										<td style="text-align:right;">
							        										2.3
							        										</td>
							        										<td style="text-align:left;">
							        										-Pruebas relacionales
							        										</td>
							        										<td></td>
							        										<td></td>
							        										<td></td>
							        									</tr>
							        								</tbody>
							        							</table>
							        						</div>
							        					</div>
							        				</div>
							        				<br>
							        				<p>Consulte con su profesor tutor sobre este punto para facilitar las ideas de métodos o procedimientos a realizar según su criterio.</p>
				        						</div>
				        					</div>
				        				</div>

	        						</div>
	        					</div>
	        				</div>

	        				<!--Fin de grupo de paneles-->
	        			</div>	
        			</div>
        		</div>
        		<!--Fin de la unidad-->
        	</div>
        	<div class="tab-pane" id="tab3">
        		<br>
        		<!--Comienzo de la unidad-->
        		<div class="panel panel-default">
        			<div class="panel-heading">
        			Pruebas
        			</div>
        			<div class="panel-body">
        				<div class="panel-group" id="panelesk">
        					<!--Grupos de paneles-->
	        				
	        				<div class="panel panel-info">
	        					<div class="panel-heading">
	        						<a data-toggle="collapse" data-parent="paneles" href="#establecimiento-indicadores">
	        							Establecimiento de los indicadores de evaluación del proyecto
	        						</a>
	        					</div>
<<<<<<< HEAD
	        					<div id="establecimiento-indicadores" class="panel-collapse collapse">
=======
	        					<div id="establecimiento-indicadores" class="panel-collapse collapse in">
>>>>>>> 38914a169559c33f7985be1bf4a4bd8b8dbd239d
	        						<div class="panel-body">
	        							
										<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#indicadores-definicion">
				        							Indicadores
				        						</a>
				        					</div>
<<<<<<< HEAD
				        					<div id="indicadores-definicion" class="panel-collapse collapse">
=======
				        					<div id="indicadores-definicion" class="panel-collapse collapse in">
>>>>>>> 38914a169559c33f7985be1bf4a4bd8b8dbd239d
				        						<div class="panel-body">
				        							<p>Son medidas objetivamente verificables de hechos y acontecimientos económicos y sociales, el indicador constituye entonces la medición del resultado generado en la intervención social atribuible al programa o proyecto. </p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#evaluacion-proyectos">
				        							Evaluación de proyectos
				        						</a>
				        					</div>
				        					<div id="evaluacion-proyectos" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>Es un proceso por el cual se determina el establecimiento de cambios generados por un proyecto a partir de la comparación entre el estado actual y el estado previsto en su planificación. Es decir, se intenta conocer qué tanto un proyecto ha logrado cumplir sus objetivos o bien qué tanta capacidad poseería para cumplirlos.</p>
													<p>En una evaluación de proyectos siempre se produce información para la toma de decisiones, por lo cual también se le puede considerar como una actividad orientada a mejorar la eficacia de los proyectos en relación con sus fines, además de promover mayor eficiencia en la asignación de recursos. En este sentido, cabe precisar que la evaluación no es un fin en sí misma, más bien es un medio para optimizar la gestión de los proyectos.</p>

													<div class="panel panel-warning">
							        					<div class="panel-heading">
							        						<a data-toggle="collapse" data-parent="paneles" href="#requisitos-evaluacion">
							        							Requisitos que debe cumplir una buena evaluación de proyectos
							        						</a>
							        					</div>
							        					<div id="requisitos-evaluacion" class="panel-collapse collapse">
							        						<div class="panel-body">
							        							<p>Toda evaluación cumpla algunos requisitos metodológicos para garantizar que la información que genere puede ser usada en la toma de decisiones. Así, se espera que todo proceso de evaluación sea:</p>

							        							<div class="row">
								        							<div class="col-md-4 col-xs-4 col-ms-12">

								        								<div class="panel panel-danger">
												        					<div class="panel-heading">
												        						<a data-toggle="collapse" data-parent="paneles" href="#objetivo">
												        							Objetivo
												        						</a>
												        					</div>
												        					<div id="objetivo" class="panel-collapse collapse">
												        						<div class="panel-body">
												        							<p>Debe medirse y analizarse los hechos definidos tal como se presentan.</p>
												        						</div>
												        					</div>
												        				</div>

								        							</div>
								        							<div class="col-md-4 col-xs-4 col-ms-12">

								        								<div class="panel panel-danger">
												        					<div class="panel-heading">
												        						<a data-toggle="collapse" data-parent="paneles" href="#imparcial">
												        							Imparcial
												        						</a>
												        					</div>
												        					<div id="imparcial" class="panel-collapse collapse">
												        						<div class="panel-body">
												        							<p>La generación de conclusiones del proceso de evaluación debe ser neutral, transparente e imparcial. Quienes realizan la evaluación no deben tener intereses personales o conflictos con la unidad ejecutora del proyecto.</p>
												        						</div>
												        					</div>
												        				</div>
												        				
								        							</div>
								        							<div class="col-md-4 col-xs-4 col-ms-12">

								        								<div class="panel panel-danger">
												        					<div class="panel-heading">
												        						<a data-toggle="collapse" data-parent="paneles" href="#valido">
												        							Válido
												        						</a>
												        					</div>
												        					<div id="valido" class="panel-collapse collapse">
												        						<div class="panel-body">
												        							<p>Debe medirse lo que se ha planificado medir, respetando las definiciones establecidas. En caso el objeto de análisis sea demasiado complejo para una medición objetiva, debe realizarse una aproximación cualitativa inicial.</p>
												        						</div>
												        					</div>
												        				</div>
												        				
								        							</div>
								        						</div>

								        						<div class="row">
								        							<div class="col-md-4 col-xs-4 col-ms-12">

								        								<div class="panel panel-danger">
												        					<div class="panel-heading">
												        						<a data-toggle="collapse" data-parent="paneles" href="#confiable">
												        							Confiable
												        						</a>
												        					</div>
												        					<div id="confiable" class="panel-collapse collapse">
												        						<div class="panel-body">
												        							<p>Las mediciones y observaciones deben ser registradas adecuadamente, preferentemente recurriendo a verificaciones in-situ.</p>
												        						</div>
												        					</div>
												        				</div>

								        							</div>
								        							<div class="col-md-4 col-xs-4 col-ms-12">

								        								<div class="panel panel-danger">
												        					<div class="panel-heading">
												        						<a data-toggle="collapse" data-parent="paneles" href="#creible">
												        							Creíble
												        						</a>
												        					</div>
												        					<div id="creible" class="panel-collapse collapse">
												        						<div class="panel-body">
												        							<p>Todas las partes involucradas en el proyecto deben tener confianza en la idoneidad e imparcialidad de los responsables de la evaluación, quienes a su vez deben mantener una política de transparencia y rigor profesional.</p>
												        						</div>
												        					</div>
												        				</div>
												        				
								        							</div>
								        							<div class="col-md-4 col-xs-4 col-ms-12">

								        								<div class="panel panel-danger">
												        					<div class="panel-heading">
												        						<a data-toggle="collapse" data-parent="paneles" href="#oportuno">
												        							Oportuno
												        						</a>
												        					</div>
												        					<div id="oportuno" class="panel-collapse collapse">
												        						<div class="panel-body">
												        							<p>Debe realizarse en el momento adecuado, evitando los efectos negativos que produce el paso del tiempo.</p>
												        						</div>
												        					</div>
												        				</div>
												        				
								        							</div>
								        						</div>

								        						<div class="row">
								        							<div class="col-md-4 col-xs-4 col-ms-12">

								        								<div class="panel panel-danger">
												        					<div class="panel-heading">
												        						<a data-toggle="collapse" data-parent="paneles" href="#util">
												        							Útil
												        						</a>
												        					</div>
												        					<div id="util" class="panel-collapse collapse">
												        						<div class="panel-body">
												        							<p>Debe ser útil y elaborarse en un lenguaje conciso y directo, entendible para todos los que accedan a la información elaborada, los resultados de una evaluación no deben dirigirse sólo a quienes tienen altos conocimientos técnicos sino que debe servir para que cualquier involucrado pueda tomar conocimiento de la situación del proyecto.</p>
												        						</div>
												        					</div>
												        				</div>

								        							</div>
								        							<div class="col-md-4 col-xs-4 col-ms-12">

								        								<div class="panel panel-danger">
												        					<div class="panel-heading">
												        						<a data-toggle="collapse" data-parent="paneles" href="#participativo">
												        							Participativo
												        						</a>
												        					</div>
												        					<div id="participativo" class="panel-collapse collapse">
												        						<div class="panel-body">
												        							<p>Debe incluirse a todos los involucrados en el proyecto, buscando de reflejar sus experiencias, necesidades, intereses y percepciones.</p>
												        						</div>
												        					</div>
												        				</div>
												        				
								        							</div>
								        							<div class="col-md-4 col-xs-4 col-ms-12">

								        								<div class="panel panel-danger">
												        					<div class="panel-heading">
												        						<a data-toggle="collapse" data-parent="paneles" href="#retroalimentador">
												        							Retroalimentador
												        						</a>
												        					</div>
												        					<div id="retroalimentador" class="panel-collapse collapse">
												        						<div class="panel-body">
												        							<p>Un proceso de evaluación debe garantizar la diseminación de los hallazgos y su asimilación por parte de los involucrados en el proyecto (desde las altas esferas hasta los beneficiarios), para así fomentar el aprendizaje organizacional.</p>
												        						</div>
												        					</div>
												        				</div>
												        				
								        							</div>
								        						</div>

								        						<div class="row">
								        							<div class="col-md-4 col-xs-4 col-ms-12">

								        								<div class="panel panel-danger">
												        					<div class="panel-heading">
												        						<a data-toggle="collapse" data-parent="paneles" href="#costo-eficaz">
												        							Costo/eficaz
												        						</a>
												        					</div>
												        					<div id="costo-eficaz" class="panel-collapse collapse">
												        						<div class="panel-body">
												        							<p>La evaluación debe establecer una relación positiva entre su costo (económico, de tiempo y recursos) y su contribución en valor agregado para la experiencia de los involucrados en el proyecto.</p>
												        						</div>
												        					</div>
												        				</div>

								        							</div>
								        							
								        						</div>
							        							
							        						</div>
							        					</div>
							        				</div>

							        				<div class="panel panel-warning">
							        					<div class="panel-heading">
							        						<a data-toggle="collapse" data-parent="paneles" href="#dificultades-evaluacion">
							        							Dificultades en la evaluación de proyectos
							        						</a>
							        					</div>
							        					<div id="dificultades-evaluacion" class="panel-collapse collapse">
							        						<div class="panel-body">
							        							<p>La labor de evaluación de proyectos no es fácil y conlleva múltiples dificultades, muchas de ellas de orden metodológico pero también de orden político.</p>
							        							<ul>
							        								<li>
							        									Falta de disponibilidad de información.
							        								</li>
							        								<li>
							        									No contar con personal calificado para efectuar el trabajo.
							        								</li>
							        								<li>
							        									Clientelismo de la población beneficiaria y de los encargados de la ejecución del proyecto.
							        								</li>
							        								<li>
							        									Carencia de un sistema de evaluación y monitoreo, por lo que no se conoce el proceso desarrollado.
							        								</li>
							        								<li>
							        									Resistencias de la comunidad. En este caso muchas veces ocurre que la población ha recibido muchas promesas incumplidas por parte de los desarrolladores o bien se ha generado una expectativa muy alta frente al proyecto, por lo cual desarrolla una actitud contraria hacia éste; también se presentan resistencias debido a los prejuicios o ignorancia de los beneficiarios.
							        								</li>
							        							</ul>
							        						</div>
							        					</div>
							        				</div>

				        						</div>
				        					</div>
				        				</div>
				        				
	        						</div>
	        					</div>
	        				</div>

	        				<div class="panel panel-info">
	        					<div class="panel-heading">
	        						<a data-toggle="collapse" data-parent="paneles" href="#planificacion-aplicacion-pruebas">
	        							Planificación y Aplicación de las Pruebas
	        						</a>
	        					</div>
	        					<div id="planificacion-aplicacion-pruebas" class="panel-collapse collapse">
	        						<div class="panel-body">
	        							<p>Una vez realizada la evaluación de proyectos el siguiente paso es la planificación y la aplicación de las pruebas, este paso no es más que la verificación de un producto o en el caso de soporte técnico a usuarios y equipos, es simplemente para comprobar el buen funcionamiento del computador.</p>
										<p>A la hora de planificar las pruebas asegúrese de responder las siguientes interrogantes:</p>
										<ul>
											<li>
												¿Qué estamos verificando?
											</li>
											<li>
												¿Qué enfoque tomaremos?
											</li>
											<li>
												¿Qué otra información necesito para planificar con eficacia?
											</li>
										</ul>
										<p>Sólo luego de que usted sepa qué es lo que intenta entregar comenzará la planificación. Un plan de prueba es lo que se focaliza en los aspectos específicos de sus pruebas. Comprende logística, casos o escenarios de prueba y recursos, e incluye a todas las dependencias y los riesgos en los que usted debe centralizarse durante las pruebas. Cuando usted planifica, usted realiza estimaciones, descubre que no puede hacer todo lo que desea, negocia el alcance, pone fechas a los entregables y asigna trabajo.</p>
										<p>Cuando planifique, formule preguntas como las siguientes:</p>
										<ul>
											<li>
												¿Cómo llevaremos a cabo nuestras pruebas?
											</li>
											<li>
												¿Dónde las llevaremos a cabo?
											</li>
											<li>
												¿Cuándo las llevaremos a cabo?
											</li>
											<li>
												¿Cómo gestionaremos los problemas que encontremos?
											</li>
											<li>
												Etc.
											</li>
										</ul>
	        						</div>
	        					</div>
	        				</div>

	        				<div class="panel panel-info">
	        					<div class="panel-heading">
	        						<a data-toggle="collapse" data-parent="paneles" href="#correccion-errores-criticos">
	        							Corrección de errores críticos
	        						</a>
	        					</div>
	        					<div id="correccion-errores-criticos" class="panel-collapse collapse">
	        						<div class="panel-body">
	        							<img src="' . DIR_PAGES . 'upload/images/trimestre3/unidad3/correccion-errores-criticos.png" class="col-xs-5 col-ms-3 col-md-2" />
	        							<p>La corrección de errores críticos consiste en la rectificación de la acción equivocada por defectos en el computador.</p>
										<p>En esta etapa se deben corregir los errores detectados en la fase de pruebas llevadas a cabo por los desarrolladores de proyectos </p>
										<p>Dependiendo del tipo de soporte que se le realizo al computador (hardware, software o ambas) se aplicara las correcciones pertinentes.</p>
	        						</div>
	        					</div>
	        				</div>

	        				<!--Fin de grupo de paneles-->
	        			</div>	
        			</div>
        		</div>
        		<!--Fin de la unidad-->
        	</div>
        	<div class="tab-pane" id="tab4">
        		<br>
        		<!--Comienzo de la unidad-->
        		<div class="panel panel-default">
        			<div class="panel-heading">
        			Optimización
        			</div>
        			<div class="panel-body">
        				<div class="panel-group" id="panelesk">
        					<!--Grupos de paneles-->
	        				
	        				<div class="panel panel-info">
	        					<div class="panel-heading">
	        						<a data-toggle="collapse" data-parent="paneles" href="#plan-optimizacion">
	        							Realizar Plan de Optimización
	        						</a>
	        					</div>
<<<<<<< HEAD
	        					<div id="plan-optimizacion" class="panel-collapse collapse">
=======
	        					<div id="plan-optimizacion" class="panel-collapse collapse in">
>>>>>>> 38914a169559c33f7985be1bf4a4bd8b8dbd239d
	        						<div class="panel-body">
	        							<p>En cómputo, la optimización es el proceso de modificar un sistema para mejorar su eficiencia y el uso de los recursos disponibles (rendimiento).</p>
										<p>Dependiendo del tipo de optimización que vayas a realizar tienes 2 opciones:</p>

										<div class="col-md-6 col-xs-6 col-ms-12">
											<div class="panel panel-success">
					        					<div class="panel-heading">
					        						<a data-toggle="collapse" data-parent="paneles" href="#optimizacion-software">
					        							La optimización de software
					        						</a>
					        					</div>
<<<<<<< HEAD
					        					<div id="optimizacion-software" class="panel-collapse collapse">
=======
					        					<div id="optimizacion-software" class="panel-collapse collapse in">
>>>>>>> 38914a169559c33f7985be1bf4a4bd8b8dbd239d
					        						<div class="panel-body">
					        							<p>Es el proceso de modificación de un software para hacer que algún aspecto del mismo funcione de manera más eficiente y/o utilizar menos recursos (mayor rendimiento). En general, un programa puede ser optimizado para que se ejecute más rápidamente, o sea capaz de operar con menos memoria u otros recursos, o consuman menos energía.</p>
					        						</div>
					        					</div>
					        				</div>
					        			</div>

				        				<div class="col-md-6 col-xs-6 col-ms-12">
				        					<div class="panel panel-success">
					        					<div class="panel-heading">
					        						<a data-toggle="collapse" data-parent="paneles" href="#optimizacion-hardware">
					        							El modding, del inglés "modify" (modificar el hardware)
					        						</a>
					        					</div>
<<<<<<< HEAD
					        					<div id="optimizacion-hardware" class="panel-collapse collapse">
=======
					        					<div id="optimizacion-hardware" class="panel-collapse collapse in">
>>>>>>> 38914a169559c33f7985be1bf4a4bd8b8dbd239d
					        						<div class="panel-body">
					        							<p>Es el arte o técnica de modificar estética o funcionalmente partes de las computadoras, ya sea el gabinete, mouse, teclado o monitor, y los componentes de los videojuegos, como pueden ser las consolas.</p>
					        						</div>
					        					</div>
					        				</div>
				        				</div>

	        						</div>
	        					</div>
	        				</div>

	        				<!--Fin de grupo de paneles-->
	        			</div>	
        			</div>
        		</div>
        		<!--Fin de la unidad-->
        	</div>
        	<div class="tab-pane" id="tab5">
        		<br>
        		<!--Comienzo de la unidad-->
        		<div class="panel panel-default">
        			<div class="panel-heading">
        			Manuales e informe final
        			</div>
        			<div class="panel-body">

        				<div class="panel-group" id="panelesk">
        					<!--Grupos de paneles-->
	        				
	        				<div class="panel panel-info">
	        					<div class="panel-heading">
	        						<a data-toggle="collapse" data-parent="paneles" href="#manuales-requeridos">
	        							Desarrollo de los manuales requeridos en el proyecto y entrenamiento a usuarios
	        						</a>
	        					</div>
<<<<<<< HEAD
	        					<div id="manuales-requeridos" class="panel-collapse collapse">
=======
	        					<div id="manuales-requeridos" class="panel-collapse collapse in">
>>>>>>> 38914a169559c33f7985be1bf4a4bd8b8dbd239d
	        						<div class="panel-body">
	        							
	        							<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#manual-usuario">
				        							Manual de Usuario
				        						</a>
				        					</div>
<<<<<<< HEAD
				        					<div id="manual-usuario" class="panel-collapse collapse">
=======
				        					<div id="manual-usuario" class="panel-collapse collapse in">
>>>>>>> 38914a169559c33f7985be1bf4a4bd8b8dbd239d
				        						<div class="panel-body">
				        							<img src="' . DIR_PAGES . 'upload/images/trimestre3/unidad5/manual-usuario.png" class="col-xs-5 col-ms-3 col-md-2" />
				        							<p>Es un documento de comunicación técnica destinado a dar asistencia a las personas que utilizan un sistema en particular. Por lo general, este documento está redactado por un escritor técnico, como por ejemplo los programadores del sistema o los directores de proyectos implicados en su desarrollo, o el personal técnico, especialmente en las empresas más pequeñas.</p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#manual-sistema">
				        							Manual de Sistemas
				        						</a>
				        					</div>
				        					<div id="manual-sistema" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<img src="' . DIR_PAGES . 'upload/images/trimestre3/unidad5/manual-sistema.png" class="col-xs-5 col-ms-3 col-md-2" />
				        							<p>Va dirigido al administrador del sistema y a otros desarrolladores de software para que puedan darle mantenimiento en caso que se requiera. También puede ser utilizado por el departamento de auditoría de sistemas.</p>
				        						</div>
				        					</div>
				        				</div>

	        						</div>
	        					</div>
	        				</div>

	        				<div class="panel panel-info">
	        					<div class="panel-heading">
	        						<a data-toggle="collapse" data-parent="paneles" href="#evaluacion-proyecto-st">
	        							Evaluación de Proyecto Sociotecnologico I
	        						</a>
	        					</div>
	        					<div id="evaluacion-proyecto-st" class="panel-collapse collapse">
	        						<div class="panel-body">
	        							<p>Esta parte le pertenece a los profesores, ya que son ellos lo que van a determinar cómo evaluar tu proyecto sociotecnologico, sin embargo, aquí te van algunos tips para poder tener éxito durante la presentación de tu proyecto:</p>

	        							<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#mantente-de-pie">
				        							Mantente de Pie
				        						</a>
				        					</div>
				        					<div id="mantente-de-pie" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>Dependiendo del tamaño de la audiencia o incluso el tamaño de la habitación, es mucho más impresionante si el presentador está de pie. Denota la experiencia, autoridad y muestra a su público que se toma en serio la presentación. 
													<p>Además, estar de pie te permite estar más cerca de la pantalla o el objeto de coordinación. Mientras estás allí, puedes tomar la oportunidad para señalar directamente en la pantalla y resaltar los puntos. </p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#contacto-visual">
				        							Contacto visual 
				        						</a>
				        					</div>
				        					<div id="contacto-visual" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>Es una de las cosas más importantes en una presentación. Compromete a la audiencia por que les permite sentirse como si estuvieras hablando con ellos y no a tus tarjetas de notas o el suelo. También te permite controlar el flujo de la presentación, a juzgar por sus reacciones o respuestas.</p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#conoce-presentacion">
				        							Conoce el contenido de tu presentación 
				        						</a>
				        					</div>
				        					<div id="conoce-presentacion" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>Es fundamental que conozcas bien tu contenido y te conviertas en un experto en el tema para mantener a tu audiencia alerta y entretenida… pero lo más importante, para estar preparado a la hora de responder preguntas que, aunque no lo desees, se pueden dar de forma espontánea.</p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#diapositiva-por-punto">
				        							Una diapositiva por punto 
				        						</a>
				        					</div>
				        					<div id="diapositiva-por-punto" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>Al construir una presentación, es útil mantenerla ordenada creando una diapositiva por punto. De esta forma, la presentación estará organizada tanto para la audiencia –que podrá seguir más fácil los puntos al ver el resumen en pantalla– como para ti, que podrás usar las diapositivas como una guía para tu memoria.</p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#utiliza-historias">
				        							Utiliza historias para atraer a la audiencia
				        						</a>
				        					</div>
				        					<div id="utiliza-historias" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>En lugar de contar chistes para romper el hielo, una buena idea es elaborar los puntos clave contando historias que ponen a la audiencia en la acción. También es una buena manera de romper el flujo de los segmentos técnicos o si sientes que estás perdiendo la atención de la gente.</p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#estilo">
				        							Estilo
				        						</a>
				        					</div>
				        					<div id="estilo" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>Este es un elemento que hace de tu presentación algo memorable. Dále a tu presentación un toque de estilo, tu estilo preferido.</p>
													<p>Me gusta un estilo casual simple, estando en una posición más cercana a la audiencia, sentado en la mesa o escenario y sin utilizar un micrófono. Algunos oradores no utilizan diapositivas, sino sólo las imágenes, algunos usan sus manos mucho. Seguramente puedes idear algo inteligente con lo que te sientas cómodo. Lo importante en este sentido es que seas tú mismo y que te recuerden.</p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#habla-despacio-claro">
				        							Habla despacio y claro 
				        						</a>
				        					</div>
				        					<div id="habla-despacio-claro" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>Si te enfocas en la claridad y bajas el tono de la voz, harás que tu discurso sea más claro y causará un mejor efecto. Esto también te ayudará a pensar, ya que muchas personas tienden a hablar más rápido de lo que piensan. Si es tu primera presentación, puedes practicar grabándote y luego escuchando. Probablemente te des cuenta que hablas más rápido de lo que piensas.</p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#tiempo-ritmo">
				        							Tiempo y ritmo 
				        						</a>
				        					</div>
				        					<div id="tiempo-ritmo" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>Una presentación que se ejecuta a buen ritmo tiene también una buena sincronización y suele ser bastante distendida y amena para el público.</p>
													<p>Sé plenamente consciente del tiempo que estás tomando en diferentes intervalos de tus presentaciones y pasa más o menos tiempo, dependiendo del impacto que deseas crear. Mezclar temas también ayuda a gestionar la monotonía.</p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#anticiparse-preguntas">
				        							Anticiparse a las preguntas 
				        						</a>
				        					</div>
				        					<div id="anticiparse-preguntas" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>Anticiparte a las preguntas que posiblemente haga tu audiencia durante la presentación te ayudará a estar completamente preparado y a calmar los nervios. Y también es una forma de ganar credibilidad.</p>
													<p>Para reforzar este punto puedes pedir ayuda a otra persona, haciendo la presentación y luego pidiéndole que te haga todas las preguntas que se le ocurras, hasta las más disparatadas. Eso te dará práctica para responder espontáneamente y rápido.</p>
				        						</div>
				        					</div>
				        				</div>

				        				<div class="panel panel-success">
				        					<div class="panel-heading">
				        						<a data-toggle="collapse" data-parent="paneles" href="#practicar-ponencia">
				        							Práctica 
				        						</a>
				        					</div>
				        					<div id="practicar-ponencia" class="panel-collapse collapse">
				        						<div class="panel-body">
				        							<p>Finalmente es fundamental practicar. Tómate el esfuerzo de ensayar ya sea sólo, frente al espejo o con tu equipo. Si no tienes tiempo, es útil correr la presentación entera de forma mental y visualizar las líneas. Pero al final del día, la realidad es que nada vence a una práctica real.</p>
				        						</div>
				        					</div>
				        				</div>

	        						</div>
	        					</div>
	        				</div>

	        				<div class="panel panel-info">
	        					<div class="panel-heading">
	        						<a data-toggle="collapse" data-parent="paneles" href="#evaluacion-proyecto-final">
	        							Evaluación del Informe Final 
	        						</a>
	        					</div>
	        					<div id="evaluacion-proyecto-final" class="panel-collapse collapse">
	        						<div class="panel-body">
	        							<p>Esta sección también le pertenece a los profesores o jurados de tu proyecto ya que son ellos los que van a evaluar tu informe de proyecto, sin embargo puedes encontrar guías que te puede ayudar a la hora de realizar tu informe final como lo son el manual UPEL y APA.</p>
	        						</div>
	        					</div>
	        				</div>

	        				<!--Fin de grupo de paneles-->
	        			</div>	
        			</div>
        		</div>
        		<!--Fin de la unidad-->
        	</div>
		';
		//salida html
		print $template->getPage('SESTUE | Soporte Técnico a Usuarios y Equipos III', $mensaje);

?>

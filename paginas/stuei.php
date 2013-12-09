<?php
	//Requerimiento de archivos de consulta y html
	# Con este archivo se evita requerir las clases desde los archivos
	# y hacer session_start()
    require("../lib/config/config.php");

	//Hago instancia las clases Db y Html
	$db = Db::getInstance();
	#$index = Index::getInstance();
	$template = Templates::getInstance('bootstrap');
	
	//Armar el html
	$mensaje = '
		<div class="page-header">
			<h2 class="text-warning">Soporte Técnico a Usuarios y Equipos I</h2>
		</div>
		
		<ul class="nav nav-tabs">
            <li class="active">
            	<a href="#tab1" data-toggle="tab">Unidad I</a>
            </li>
            <li>
            	<a href="#tab2" data-toggle="tab">Unidad II</a>
            </li>
        </ul>
        <div class="tab-content">
        	<div class="tab-pane active" id="tab1">
        		<br>
        		<div class="panel panel-default">
        			<div class="panel-heading">
        				Introducción
        			</div>
        			<div class="panel-body">
        				<p>En este modulo deberás adquirir los conocimientos necesarios para abordar una comunidad, describirla y detectar sus necesidades.</p>
						<p>Además deberás aprender a plantear soluciones ante situaciones y problemas reales, relacionados con soporte técnico a usuarios y equipos.</p>
						<!--Contenido de la unidad 1-->
						<div class="panel panel-info">
							<div class="panel-heading">
								¿Cómo abordar una comunidad?
							</div>
							<div class="panel-body">
								<div class="col-md-3">
									<img src="'.DIR_PAGES.'upload/images/1/comunidad.gif" width="200" height="160" />
								</div>
								<div class="col-md-9">
									<p>Se refiere a la necesidad de efectuar una investigación de la situación actual de comunidad.</p>
									<p>Lo primero que tienes  que hacer es presentarte con tu grupo de proyecto a la comunidad o institución pública que hayas escogido. </p>
									<p>Recuerda: Que el proyecto Socio tecnológico debe ser llevado a cabo en un consejo comunal o en una institución pública como por ejemplo: tu universidad. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">
							¿Cómo realizar el levantamiento de información?
							</div>
							<div class="panel-body">
								<p>Una vez abordada la comunidad debes realizar un levantamiento de información ya sea a través de una entrevista, una encuesta o mediante la observación.</p>
							    <div class="alert alert-info fade in">
							        <!--<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>-->
							        <strong>
							            Haz click en los títulos de las técnicas
							        </strong>
							    </div>
								<div class="panel-group" id="tecnicask">
									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#tecnicas" href="#entrevista">
											La entrevista:
											</a>
										</div>
										<div id="entrevista" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="col-md-3">
													<img src="'.DIR_PAGES.'upload/images/2/entrevista.jpg" width="200" height="160" />
												</div>
												<div class="col-md-9">
													<p>Una entrevista es un diálogo en el que la persona (entrevistador), generalmente un periodista hace una serie de preguntas a otra persona (entrevistado), con el fin de conocer mejor sus ideas, sus sentimientos o su forma de actuar.</p>
													<ul>
														<li><font class="text-primary">Ventajas:</font> La entrevista atribuye las respuestas directamente a un participante, el cual puede definirse por sus características y actitudes. En esta técnica se puede dar un intercambio libre de información sin ninguna presión social para estar de acuerdo o no con el grupo.
														</li>
														<li><font class="text-danger">Desventajas:</font> Reducen la profundidad de información con el entrevistado.
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#tecnicas" href="#encuesta">
											La encuesta:
											</a>
										</div>
										<div id="encuesta" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="col-md-9">
													<p>Se realiza con el fin de conocer estados de opinión, características o hechos específicos. El investigador debe seleccionar las preguntas más convenientes, de acuerdo con la naturaleza de la investigación.</p>
													<ul>
														<li><font class="text-primary">Ventajas:</font>
															<ul>
																<li>Es de bajo costo.</li>
																<li>Información más exacta.</li>
																<li>Mayor rapidez en la obtención de resultados.</li>
																<li>Técnica más utilizada y que permite obtener información de casi cualquier tipo de población.</li>
															</ul>
														</li>
														<li><font class="text-danger">Desventajas:</font>
															<ul>
																<li>Requiere para su diseño de profesionales con buenos conocimientos de teoría y habilidad en su aplicación.</li>
																<li>Es necesario dar un margen de confiabilidad de los datos.</li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-3">
													<img src="'.DIR_PAGES.'upload/images/3/encuestas.jpg" width="200" height="160" />
												</div>
											</div>
										</div>
									</div>
									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#tecnicas" href="#observacion">
											La observación:
											</a>
										</div>
										<div id="observacion" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="col-md-3">
													<img src="'.DIR_PAGES.'upload/images/4/observacion.gif" width="200" height="160" />
												</div>
												<div class="col-md-9">
													<p>La observación es una actividad realizada por un ser vivo (como un ser humano), que detecta y asimila la información de un hecho, o el registro de los datos utilizando los sentidos como instrumentos principales. El término también puede referirse a cualquier dato recogido durante esta actividad.</p>
													<ul>
														<li><font class="text-primary">Ventajas:</font>
															<ul>
																<li>Se reduce o elimina la tendencia potencial que provoca al entrevistador o el proceso de la entrevista en el fenómeno de estudio.</li>
																<li>La investigación les indica lo que ha ocurrido.</li>
															</ul>
														</li>
														<li><font class="text-danger">Desventajas:</font>
															<ul>
																<li>Aporta muy poca información.</li>
																<li>Cierto tipo de datos sólo pueden recopilarse por medio de la observación (cuando el participante no está consciente o no puede comunicarse).</li>
																<li>Las razones de comportamiento no se determinan con la observación.</li>
																<li>En algunos casos el uso de métodos de observación puede calificarse de poco ético.</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">
							Cuantificar los datos y realizar el análisis
							</div>
							<div class="panel-body">
								<p>El análisis de datos es un proceso de inspeccionar, limpiar y transformar datos con el objetivo de resaltar información útil, lo que sugiere conclusiones, y apoyo a la toma de decisiones.</p>
								<p>En este paso debes analizar los resultados arrojados por la entrevista, encuesta o observación y realizar una conclusión para así poder tomar una decisión y saber qué solución ofrecer a la problemática o necesidad que presenta la comunidad.</p>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">
							Organización por áreas de saberes: Hardware y Software.
							</div>
							<div class="panel-body">
								<p>Más allá de la popular definición hardware es lo que golpeas cuando falla el software, el Hardware son todos los componentes y dispositivos físicos y tangibles que forman una computadora como la CPU o la placa base, mientras que el Software es el equipamiento lógico e intangible como los programas y datos que almacena la computadora.</p>
								<div class="col-md-3">
									<img src="'.DIR_PAGES.'upload/images/5/software-y-hardware.png" width="200" height="200" />
								</div>
								<div class="col-md-9">
									<div class="panel-group" id="hardware-softwarek">
										<div class="panel panel-success">
											<div class="panel-heading">
												<a data-toggle="collapse" data-parent="#hardware-software" href="#hardware">
												Hardware
												</a>
											</div>
											<div id="hardware" class="panel-collapse collapse">
												<div class="panel-body">
													<p>Los componentes y dispositivos del Hardware se dividen en Hardware Básico y Hardware Complementario:</p>
													<ul>
														<li>
														<u>El Hardware Básico:</u> son las piezas fundamentales e imprescindibles para que la computadora funcione como son: Placa base, monitor, teclado y ratón.
														</li>
														<li>
														<u>El Hardware Complementario:</u> son todos aquellos dispositivos adicionales no esenciales como pueden ser: impresora, escáner, cámara de vídeo digital, webcam, etc.
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="panel panel-success">
											<div class="panel-heading">
												<a data-toggle="collapse" data-parent="#hardware-software" href="#software">
												Software
												</a>
											</div>
											<div id="software" class="panel-collapse collapse">
												<div class="panel-body">
													<p>Es el soporte lógico e inmaterial que permite que la computadora pueda desempeñar tareas inteligentes, dirigiendo a los componentes físicos o hardware con instrucciones y datos a través de diferentes tipos de programas.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">
							Tipos de proyectos: Locales, Regionales o Nacionales.
							</div>
							<div class="panel-body">
								<p>Una de las clasificaciones generales de los proyectos según su área de influencia son:</p>
								<ul>
									<li>
										<u>Proyectos Locales: </u>Son los tipos de proyectos que se enfocan en una sola localidad (comunidad, pueblo, ciudad, etc).
									</li>
									<li>
										<u>Proyecto Regionales: </u>Son los tipos de proyectos que se enfocan en 2 o más localidades.
									</li>
									<li>
										<u>Proyectos Nacionales: </u>Son los proyectos que se enfocan a nivel nacional, en otras palabras, para todo el país.
									</li>
								</ul>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">
							Algunos Organismos Apoyan la Ejecución de estos Proyectos.
							</div>
							<div class="panel-body">
								<div class="panel-group" id="proyectosk">
									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#minci">
												Ministerio del Poder Popular para la Ciencia y Tecnología
											</a>
										</div>
										<div id="minci" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="col-md-3">
													<img src="'.DIR_PAGES.'upload/images/7/minci.jpg" width="200" height="160" />
												</div>
												<div class="col-md-9">
													<p>El Gobierno Bolivariano ha colocado las herramientas de las tecnologías de la información y comunicación al servicio del pueblo venezolano. Esta visión soberana ha conseguido grandes logros en sólo una década: la recuperación de la Compañía Nacional de Teléfonos a manos del pueblo venezolano, la articulación de una vasta red de acceso a internet en sectores populares y el lanzamiento del primer satélite venezolano, colocando en lo más alto el nombre de nuestro Libertador Simón Bolívar.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#plan">
											Plan Nacional de Alfabetización Tecnológica
											</a>
										</div>
										<div id="plan" class="panel-collapse collapse">
											<div class="panel-body">
												<p>Es uno de los esfuerzos del Gobierno Bolivariano para darle al Pueblo el poder de utilizar las tecnologías y el conocimiento. Integra las herramientas y plataformas que se han desarrollado como contenidos educativos, Infocentros, centros Bolivarianos de informática y telemática, aldeas universitarias, bibliotecas virtuales, entre otros.</p>
												<p>Una iniciativa de formación, enmarcada en la "Misión Ciencia". Como política de estado, su fin es lograr la capacitación básica de las comunidades en el uso de las nuevas tecnologías de información y comunicación, promoviendo el computador como herramienta que facilite las tareas del poder comunal.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#cnti">
											Centro Nacional de Tecnología e Información (CNTI)
											</a>
										</div>
										<div id="cnti" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="col-md-3">
													<img src="'.DIR_PAGES.'upload/images/8/cnti.jpg" width="200" height="200" />
												</div>
												<div class="col-md-9">
													<p>El CNTI es una institución adscrita al Ministerio del Poder Popular para Ciencia, Tecnología e Industrias Intermedias que tiene como razón de ser potenciar los esfuerzos que en materia de informática se desarrollen en el Sector Gobierno y en las Comunidades Organizadas, con el fin de contribuir a la eficiencia y efectividad del Estado, así como impulsar el desarrollo y fortalecimiento de la capacidad nacional del sector de las Tecnologías de Información.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#iuteb">
											Instituto Universitario de Tecnología del Estado Bolívar (IUTEB)
											</a>
										</div>
										<div id="iuteb" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="col-md-3">
													<img src="'.DIR_PAGES.'upload/images/9/iuteb.jpg" width="200" height="200" />
												</div>
												<div class="col-md-9">
													<p>Institución Universitaria de excelencia académica que enmarcada en las políticas del Estado venezolano y teniendo como eje fundamental el bienestar del hombre, está destinada a formar las generaciones de profesionales en el sector técnico que requiere la región Guayana en particular y Venezuela en general, garantizando un alto nivel de desempeño en las funciones de Investigación y Extensión, con acciones específicas destinadas a vincularse con el sector productivo, de gestión local y de desarrollo comunal, para que de manera conjunta enfrentar los retos tecnológicos y socio- económicos que promuevan de manera sustentable y en armonía con el medio ambiente el desarrollo armónico de la región y el país.</p>					  
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Fin del Contenido de la unidad 1-->
        			</div>
        		</div>
				<!--Fin del Contenido de la unidad 1-->
        	</div>
        	<div class="tab-pane" id="tab2">
        		<br>
        		<!--Contenido de la unidad II-->
        		<div class="panel panel-default">
					<div class="panel-heading">
						El Proyecto
					</div>
					<div class="panel-body">
						<p>En este modulo deberás adquirir los conocimientos necesarios para abordar una comunidad, describirla y detectar sus necesidades. Conceptos básicos como: que es un proyecto, que es un problema...</p>
						<p>Además aprenderás a plantear soluciones ante situaciones y problemas reales, relacionados con soporte técnico a usuarios y equipos.</p>

						<!--Temas de la unidad-->
						<div class="panel panel-info">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#proyectos" href="#proyecto-definicion">
								¿Qué es un proyecto?
								</a>
							</div>
							<div id="proyecto-definicion" class="panel-collapse collapse in">
								<div class="panel-body">
									<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/proyecto.png" class="col-xs-8 col-sm-3 col-md-2"/>
									<p>En el Manual de Formulación de Proyectos Sociales del programa de capacitación y desarrollo del taller acreditado por la Universidad Católica Andrés Bello, se refiere a este tipo de proyectos como el conjunto organizado de acciones, realizadas ordenadamente durante un periodo determinado, que responden a una demanda o problema, con el propósito de ofrecer una solución, que generalmente es la presentación de un servicio.</p>
								</div>
							</div>
						</div>

						<div class="panel panel-info">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#proyectos" href="#problema-situacion">
								Problema o Situación Problemática
								</a>
							</div>
							<div id="problema-situacion" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Problema es un procedimiento dialéctico que tiende a la elección o al rechazo o también a la verdad y al conocimiento (Aristóteles).
									<p>Los problemas son inconvenientes o fallas  que surgen en distintos contextos y que requieren de una solución. Puede entenderse que un problema es una barrera que debe ser sorteada para alcanzar un objetivo.</p>
									<p>Una investigación, por su parte, es una pesquisa o una búsqueda que se desarrolla con el objetivo de incrementar el conocimiento acerca de un cierto asunto. Al investigar, la persona analiza diversas cuestiones, realiza experimentos, busca pruebas, etc.</p>
									<p>Es importante destacar que la noción de problemas de investigación no suele referirse a un inconveniente que surge en la labor investigativa, sino que está vinculada al fenómeno específico que se pretende investigar.</p>
									<p>Un problema de investigación, por lo tanto, es aquello que se desea explicar a partir de la tarea del investigador. Su acepción como “problema” se vincula a que, por lo general, la finalidad de una investigación es brindar una solución: lo que se investiga, de este modo, supone un problema a resolver.</p>

									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#factores-problema">
											Factores para dar al problema una formulación lógica y adecuada al problema
											</a>
										</div>
										<div id="factores-problema" class="panel-collapse collapse">
											<div class="panel-body">
												<p>Es pertinente dar al problema una formulación lógica, adecuada, precisar sus límites, su alcance, para ello es necesario tener en cuenta los siguientes factores:</p>
												<!--Contenido de factores-->
												<div class="panel panel-warning">
													<div class="panel-heading">
														<a data-toggle="collapse" data-parent="#proyectos" href="#viabilidad">
														Viabilidad
														</a>
													</div>
													<div id="viabilidad" class="panel-collapse collapse">
														<div class="panel-body">
															<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/viabilidad.png" class="col-xs-8 col-sm-3 col-md-1"/>
															<p>Lo importante es que el investigador debe verificar la posibilidad de conseguir fuentes de datos para el desarrollo de su estudio, ya sean del grado primario o secundario.</p>
														</div>
													</div>
												</div>
												<div class="panel panel-warning">
													<div class="panel-heading">
														<a data-toggle="collapse" data-parent="#proyectos" href="#lugar-espacio">
														Lugar o Espacio
														</a>
													</div>
													<div id="lugar-espacio" class="panel-collapse collapse">
														<div class="panel-body">
															<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/lugar-espacio.png" class="col-xs-8 col-sm-3 col-md-1"/>
															<p>Lugar o espacio donde se llevará a cabo la investigación.</p>
														</div>
													</div>
												</div>
												<div class="panel panel-warning">
													<div class="panel-heading">
														<a data-toggle="collapse" data-parent="#proyectos" href="#tiempo">
														Tiempo
														</a>
													</div>
													<div id="tiempo" class="panel-collapse collapse">
														<div class="panel-body">
															<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/tiempo.png" class="col-xs-8 col-sm-3 col-md-1"/>
															<p>Si el asignado da la cobertura del estudio o debo disponer de uno en caso de imprevistos.</p>
														</div>
													</div>
												</div>
												<div class="panel panel-warning">
													<div class="panel-heading">
														<a data-toggle="collapse" data-parent="#proyectos" href="#financiacion">
														Financiación
														</a>
													</div>
													<div id="financiacion" class="panel-collapse collapse">
														<div class="panel-body">
															<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/financiacion.png" class="col-xs-8 col-sm-3 col-md-1"/>
															<p>Si se va a implementar algo. Qué cantidad de dinero dispongo para ello o si solo será un estudio de factibilidad.</p>
														</div>
													</div>
												</div>
												<!--Fin de factores-->
											</div>

										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="panel panel-info">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#proyectos" href="#estudio-definicion">
								Estudio, definición y especificación de la metodología a emplear 
								</a>
							</div>
							<div id="estudio-definicion" class="panel-collapse collapse">
								<div class="panel-body">
									
									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#metodologia">
											Metodología
											</a>
										</div>
										<div id="metodologia" class="panel-collapse collapse">
											<div class="panel-body">
												
												<div class="panel panel-warning">
													<div class="panel-heading">
														<a data-toggle="collapse" data-parent="#proyectos" href="#metodologia-definicion">
														Definición
														</a>
													</div>
													<div id="metodologia-definicion" class="panel-collapse collapse">
														<div class="panel-body">
															<p>Dicho termino está compuesto del vocablo método y el sustantivo griego logos que significa juicio, estudio, esta palabra se puede definir como La descripción, el análisis y la valoración crítica de los métodos de investigación.</p>
															<p>La metodología es el instrumento que enlaza el sujeto con el objeto de la investigación, Sin la metodología es casi imposible llegar a la lógica que conduce al conocimiento científico.</p>
															<p>La palabra método se deriva del griego meta: hacia, a lo largo, y odos que significa camino, por lo que podemos deducir que método significa el camino más adecuado para lograr un fin.</p>
															<p>También podemos decir que el método es el conjunto de procedimientos lógicos a través de los cuales se plantean los problemas científicos y se ponen a prueba las hipótesis y los instrumentos de trabajo investigados.</p>
															<p>El método es un elemento necesario en la ciencia; ya que sin él no sería fácil demostrar si un argumento es válido.</p>
														</div>
													</div>
												</div>
												<p>Cuando se inicia el capítulo de la metodología lo primero que se encuentra el investigador es la definición del tipo de investigación que desea realizar. La escogencia del tipo de investigación determinará los pasos a seguir del estudio, sus técnicas y métodos que puedan emplear en el mismo. En general determina todo el enfoque de la investigación influyendo en instrumentos, y hasta la manera de cómo se analiza los datos recaudados. Así, el punto de los tipos de investigación en una investigación va a constituir un paso importante en la metodología, pues este va a determinar el enfoque del mismo.</p>
												<p>Hernández, Fernández y Baptista (2003) establecen estos cuatro tipos de investigación, basándose en la estrategia de investigación que se emplea, ya que “el diseño, los datos que se recolectan, la manera de obtenerlos, el muestreo y otros componentes del proceso de investigación son distintos en estudios exploratorios, descriptivos, correlaciónales y explicativos” (p. 114).</p>
												<p>Este puede dividirse en dos tipos principales de Campo o de Laboratorio. Que a su vez puede clasificarse en cuatro tipos principales:</p>
												<div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="panel panel-warning">
															<div class="panel-heading">
																<a data-toggle="collapse" data-parent="#proyectos" href="#estudios-exploratorios">
																Estudios Exploratorios
																</a>
															</div>
															<div id="estudios-exploratorios" class="panel-collapse collapse">
																<div class="panel-body">
																	<p>También conocido como estudio piloto, son aquellos que se investigan por primera vez o son estudios muy pocos investigados. También se emplean para identificar una problemática.</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="panel panel-warning">
															<div class="panel-heading">
																<a data-toggle="collapse" data-parent="#proyectos" href="#estudios-descriptivos">
																Estudios Descriptivos
																</a>
															</div>
															<div id="estudios-descriptivos" class="panel-collapse collapse">
																<div class="panel-body">
																	<p>Describen los hechos como son observados.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="panel panel-warning">
															<div class="panel-heading">
																<a data-toggle="collapse" data-parent="#proyectos" href="#estudios-correlacionales">
																Estudios Correlacionales
																</a>
															</div>
															<div id="estudios-correlacionales" class="panel-collapse collapse">
																<div class="panel-body">
																	<p>Estudian las relaciones entre variables dependientes e independientes, ósea se estudia la correlación entre dos variables.</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="panel panel-warning">
															<div class="panel-heading">
																<a data-toggle="collapse" data-parent="#proyectos" href="#estudios-explicativos">
																Estudios Explicativos
																</a>
															</div>
															<div id="estudios-explicativos" class="panel-collapse collapse">
																<div class="panel-body">
																	<p>Este tipo de estudio busca el por qué de los hechos, estableciendo relaciones de causa- efecto.</p>
																</div>
															</div>
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
								<a data-toggle="collapse" data-parent="#proyectos" href="#fases-proyecto">
								Fases del proyecto socio tecnológico: Actividades de cada fase, duración roles y responsabilidades
								</a>
							</div>
							<div id="fases-proyecto" class="panel-collapse collapse">
								<div class="panel-body">
									
									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#identificacion-problema">
											Identificación del problema
											</a>
										</div>
										<div id="identificacion-problema" class="panel-collapse collapse">
											<div class="panel-body">
												<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/identificacion-problema.png" class="col-xs-8 col-sm-3 col-md-2"/>
												<p>En esta fase se determina cuál es el problema que se quiere resolver, a quienes afecta, y cuál es la nueva situación que queremos alcanzar con nuestra actuación. Además, se concreta el modo en que vamos a lograrlo y se valoran las posibilidades de ello. Todos estos aspectos dependen de la realización de un buen diagnóstico de la situación problemática inicial.</p>
											</div>
										</div>
									</div>				

									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#diseno-formulacion-proyecto">
											Diseño o formulación del proyecto
											</a>
										</div>
										<div id="diseno-formulacion-proyecto" class="panel-collapse collapse">
											<div class="panel-body">
												<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/diseno-formulacion-problema.png" class="col-xs-8 col-sm-3 col-md-2"/>
												<p>Después de que se identifica la situación que se quiere modificar, los objetivos que se desean alcanzar y los recursos necesarios para lograrlo se inicia la fase de diseño o formulación del proyecto. En general, se trata de una fase en la que se organiza y formaliza la información obtenida en la fase previa.</p>
											</div>
										</div>
									</div>

									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#ejecucion-proyecto">
											Ejecución del proyecto
											</a>
										</div>
										<div id="ejecucion-proyecto" class="panel-collapse collapse">
											<div class="panel-body">
												<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/ejecucion-proyecto.png" class="col-xs-8 col-sm-3 col-md-2"/>
												<p>En esta fase se diseñan los planes operativos y se clarifican las funciones y roles de cada uno de los participantes en el proyecto, es una fase en la que la buena comunicación entre las partes se convierte en una fortaleza para el proyecto y en garantía de éxito para el mismo.</p>
											</div>
										</div>
									</div>

									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#fase-seguimiento-evaluacion">
											La fase de seguimiento y evaluación
											</a>
										</div>
										<div id="fase-seguimiento-evaluacion" class="panel-collapse collapse">
											<div class="panel-body">
												<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/seguimiento-evaluacion.png" class="col-xs-8 col-sm-3 col-md-1"/>
												<p>La fase de seguimiento y evaluación incluyen, como su nombre lo indica actividades de seguimiento que no es más que el análisis continuado de la ejecución del proyecto en todos sus aspectos, vigilando que se ajuste a lo planificado y, actividades de evaluación que permiten comparar la situación inicial con la final y sacar las conclusiones sobre el éxito o no del proyecto.</p>
												<p>La duración del proyecto, los roles y los responsables de cada actividad ya queda de parte del propio grupo de investigación, ellos mismo se asignaran y se repartirán las distintas tareas para poder llevar a cabo el objetivo de su proyecto socio tecnológico.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-info">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#proyectos" href="#planificacion-propuesta-presentacion">
								Planificación, Propuesta y Presentación
								</a>
							</div>
							<div id="planificacion-propuesta-presentacion" class="panel-collapse collapse">
								<div class="panel-body">
									<p>La planificación de proyectos forma parte de la gestión de proyectos, la cual se vale de cronogramas tales como diagramas de Gantt para planear y subsecuentemente informar del progreso dentro del entorno del proyecto. Es el proceso para cuantificar el tiempo y recursos que un proyecto costará. La finalidad del planeamiento de proyecto es crear un plan de proyecto que un gestor de proyectos (gestor de proyecto) pueda usar para acompañar el progreso de su equipo.</p>
									<p>Para la propuesta y la presentación del proyecto es recomendable utilizar los siguientes manuales:</p>
									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#upel">
											Manual de la Universidad Pedagógica Experimental Libertador (UPEL)
											</a>
										</div>
										<div id="upel" class="panel-collapse collapse">
											<div class="panel-body">
												<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/upel.png" class="col-xs-8 col-sm-3 col-md-1"/>
												<p>Son normas venezolanas para la elaboración  de trabajos especiales de grado, trabajos de grado y tesis.</p>
											</div>
										</div>
									</div>

									<div class="panel panel-success">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#proyectos" href="#apa">
											Normas de la Asociación Americana de Psicología (APA)
											</a>
										</div>
										<div id="apa" class="panel-collapse collapse">
											<div class="panel-body">
												<img src="'.DIR_PAGES.'upload/images/trimestre1/unidad2/apa.png" class="col-xs-8 col-sm-3 col-md-2"/>
												<p>Son un conjunto de estándares creados por la American Psychological Association con el fin de unificar la forma de presentar trabajos escritos a nivel internacional, diseñadas especialmente para proyectos de grado o cualquier tipo de documentos de investigación.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Fin de los temas de la unidad-->
					</div>
				</div>
        		<!--Fin del contenido de la unidad II-->
        	</div>
        </div>
        
		';
	//salida html
	print $template->getPage('SESTUE | Soporte Técnico a Usuarios y Equipos I', $mensaje);
	
?>

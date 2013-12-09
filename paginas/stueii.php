<?php
	//Requerimiento de archivos de consulta y html
	# Con este archivo se evita requerir las clases desde los archivos
	# y hacer session_start()
    require("../lib/config/config.php");

	//Hago instancia las clases Db y Html
	$db = Db::getInstance();
	$template = Templates::getInstance('bootstrap');
	
	//Obtener array con datos del usuario
	//Armar el html
	$mensaje = '
	    <div class="page-header">
			<h2 class="text-warning">Soporte Técnico a Usuarios y Equipos II</h2>
		</div>
		<ul class="nav nav-tabs" id="unidades">
            <li class="active">
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
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <br>
                <!--Contenido de la unidad-->
                <div class="panel panel-default">
                	<div class="panel-heading">
                		Procesos y estrategias de solución de problemas
                	</div>
                	<div class="panel-body">
                		<p>Antes de comenzar a mostrar las diferentes estrategias que existen, veamos primeramente lo que es un problema se podría solucionar.</p>
                		<!--Contenido Grupos de Paneles-->
                		<div class="panel-group" id="panelesk">
                			<!--Contenido de la unidad-->
	                		
	                		<div class="panel panel-info">
	                			<div class="panel-heading">
	                				<a data-toggle="collapse" data-parent="#paneles" href="#buen-problema">
	                				¿Qué es un buen problema?
	                				</a>
	                			</div>
	                			<div id="buen-problema" class="panel-collapse collapse in">
		                			<div class="panel-body">
		                				<div class="col-md-3 col-sm-5 col-xs-4">
											<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/problema.png" class="col-xs-12 col-sm-12 col-md-12"/>
										</div>
										<div class="col-md-9 ">
											<ul>
												<li>
													<b>Representa un desafío</b> para quien lo intenta resolver.
												</li>
												<li>
													<b>No deja bloqueado</b> de entrada a quien lo ha de resolver.
												</li>
												<li>
													<b>Tiene interés por sí mismo.</b>
												</li>
												<li>
													<b>Estimula</b> en quien lo resuelve el <b>deseo de proponerlo</b> a otras personas
												</li>
												<li>
													<b>Proporciona</b> al resolverlo un determinado <b>placer</b> difícil de explicar pero agradable
												</li>
											</ul>
											<p>La resolución del problema es el proceso de ataque de ese problema: aceptar el desafío, formular preguntas, clarificar el objetivo, definir y ejecutar el plan de acción  y evaluar la solución.</p>
											<p>En la resolución de problemas  podemos servirnos de modelos o guías que nos faciliten el camino que debemos recorrer a lo largo de todo el proceso de resolución.</p>

										</div>
		                			</div>
		                		</div>
	                		</div>

	                		<div class="panel panel-info">
	                			<div class="panel-heading">
		                			<a data-toggle="collapse" data-parent="#paneles" href="#procesos">
		                			Procesos y estrategias que intervienen en la planificación y supervisión de un problema
		                			</a>
	                			</div>
	                			<div id="procesos" class="panel-collapse collapse">
		                			<div class="panel-body">
		                				<p><b>Polya</b> (1945) propone cuatro etapas esenciales para la resolución de un problema, estas son:</p>
		                				<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#etapa1">
					                			1. Comprender el problema 
					                			</a>
				                			</div>
				                			<div id="etapa1" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<div class="col-md-3 col-sm-5 col-xs-4">
														<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/mapa-conceptual.png" class="col-xs-12 col-sm-12 col-md-12"/>
													</div>
					                				<div class="col-md-9 ">
						                				<p>Aunque resulte redundante e inoficioso -sobre todo en el contexto de la enseñanza- conviene señalar que este aspecto es de vital importancia, sobre todo cuando los problemas a resolver no son exclusivamente matemáticos. Esto no es menor considerando, por ejemplo, cuando se intenciona que los estudiantes realicen análisis de textos o se les pide que profundicen en la información. Para ello deben acotar el problema que van a abordar. Se sugiere que el alumno o alumna:</p>
						                				
						                				<ul>
						                					<li>
						                						Lea el enunciado despacio.
						                					</li>
						                					<li>
						                						Señale cuáles son los datos, qué es lo que conoce del problema.
						                					</li>
						                					<li>
						                						Indique cuáles son los elementos que debe investigar, profundizar. Debe reconocer las incógnitas.
						                					</li>
						                					<li>
						                						Escriba o trate de encontrar la relación entre los datos y las incógnitas.
						                					</li>
						                					<li>
						                						Elabore un mapa conceptual o un esquema de la situación.
						                					</li>
						                				</ul>
													</div>
					                			</div>
					                		</div>
				                		</div>
				                		<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#trazar">
					                			2. Trazar un plan para resolverlo
					                			</a>
				                			</div>
				                			<div id="trazar" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<div class="col-md-3 col-sm-5 col-xs-4">
														<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/plan.png" class="col-xs-12 col-sm-12 col-md-12"/>
													</div>
													<div class="col-md-9 ">
						                				<p>Esto invita a generar caminos diversos, flexibles y circulares, por tanto, queda fuera todo reduccionismo o mecanicismo. Las siguientes interrogantes pueden orientar este punto:</p>
						                				<ul>
						                					<li>
						                						¿Este problema es parecido a otros que ya conocemos?
						                					</li>
						                					<li>
						                						¿Se puede plantear el problema de otra forma?
						                					</li>
						                					<li>
						                						Imaginar un problema parecido pero más sencillo.
						                					</li>
						                					<li>
						                						Suponer que el problema ya está resuelto; ¿cómo se relaciona la situación de llegada con la de partida?
						                					</li>
						                					<li>
						                						¿Se utilizan todos los datos cuando se hace el plan?
						                					</li>
						                				</ul>
						                			</div>
					                			</div>
					                		</div>
				                		</div>
				                		<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#poner-practica">
					                			3. Poner en práctica el plan
					                			</a>
				                			</div>
				                			<div id="poner-practica" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<div class="col-md-3 col-sm-5 col-xs-4">
														<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/practica_plan.png" class="col-xs-12 col-sm-12 col-md-12"/>
													</div>
					                				<div class="col-md-9 ">
					                					<p>Esta etapa también hay que plantearla de una manera flexible, alejada de todo mecanicismo. Se debe tener presente que el pensamiento no es lineal, que necesariamente se van a producir saltos continuos entre el diseño del plan y su puesta en práctica. En esta fase se recomienda:</p>
						                				<ul>
						                					<li>
						                						Al ejecutar el plan se debe comprobar cada uno de los pasos.
						                					</li>
						                					<li>
						                						¿Se puede ver claramente que cada paso es correcto?
						                					</li>
						                					<li>
						                						Antes de hacer algo se debe pensar: ¿qué se consigue con esto?
						                					</li>
						                					<li>
						                						Se debe acompañar cada operación matemática de una explicación contando lo que se hace y para qué se hace.
						                					</li>
						                					<li>
						                						Cuando tropezamos con alguna dificultad que nos deja bloqueados, se debe volver al principio, reordenar las ideas y probar de nuevo.
						                					</li>
						                				</ul>
					                				</div>
					                			</div>
					                		</div>
				                		</div>
				                		<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#comprobar-result">
					                			4. Comprobar los resultados 
					                			</a>
				                			</div>
				                			<div id="comprobar-result" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<div class="col-md-3 col-sm-5 col-xs-4">
														<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/resultados.png" class="col-xs-12 col-sm-12 col-md-12"/>
													</div>
													<div class="col-md-9 ">
														<p>Comprobar los resultados supone comparar con el contexto el resultado obtenido a partir del modelo del problema utilizado, y su diferencia con la realidad que se desea resolver. Esto supone:</p>
						                				<ul>
						                					<li>
						                						Leer de nuevo el enunciado y comprobar que lo que se pedía es lo que se ha averiguado.
						                					</li>
						                					<li>
						                						Se debe poner atención en la solución. ¿Parece lógicamente posible?
						                					</li>
						                					<li>
						                						¿Es posible comprobar la solución?
						                					</li>
						                					<li>
						                						¿Hay alguna otra forma de resolver el problema?
						                					</li>
						                					<li>
						                						¿Es posible encontrar alguna otra solución?
						                					</li>
						                					<li>
						                						Se debe acompañar la solución de una explicación que indique claramente lo que se ha encontrado
						                					</li>
						                					<li>
						                						¿Es posible utilizar el resultado obtenido y el proceso seguido para formular y plantear nuevos problemas?
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
		                			<a data-toggle="collapse" data-parent="#paneles" href="#estrategias-resolucion">
		                			Solución de problemas de diversa naturaleza: Estrategias de resolución
		                			</a>
	                			</div>
	                			<div id="estrategias-resolucion" class="panel-collapse collapse">
		                			<div class="panel-body">
		                				<p>Resolver problemas invita a "movilizar recursos", a situarse en un nivel metacognitivo, nivel que diferencia a quienes resuelven bien problemas de aquellos que aún no lo logran. Por tanto hay que enseñar a los estudiantes a <b>utilizar los instrumentos que conocen</b>, para situarlos en un nivel metacognitivo.</p>
		                				<div class="col-md-6">
		                					<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#estrategias-frecuentes">
						                			Estrategias más frecuentes que se utilizan en la resolución de problemas, según <b>Fernández</b> (1992)
						                			</a>
					                			</div>
					                			<div id="estrategias-frecuentes" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<ol>
						                					<li>
						                						Ensayo-error.
						                					</li>
						                					<li>
						                						Empezar por lo fácil, resolver un problema semejante más sencillo.
						                					</li>
						                					<li>
						                						Manipular y experimentar manualmente.
						                					</li>
						                					<li>
						                						Descomponer el problema en pequeños problemas (simplificar).
						                					</li>
						                					<li>
						                						Experimentar y extraer pautas (inducir).
						                					</li>
						                					<li>
						                						Resolver problemas análogos (analogía).
						                					</li>
						                					<li>
						                						Seguir un método (organización).
						                					</li>
						                					<li>
						                						Hacer esquemas, tablas, dibujos (representación).
						                					</li>
						                					<li>
						                						Hacer recuente (conteo).
						                					</li>
						                					<li>
						                						Utilizar un método de expresión adecuado: verbal, algebraico, gráfico, numérico (codificar, expresión, comunicación).
						                					</li>
						                					<li>
						                						Cambio de estados.
						                					</li>
						                					<li>
						                						Sacar partido de la simetría.
						                					</li>
						                					<li>
						                						Deducir y sacar conclusiones.
						                					</li>
						                					<li>
						                						Conjeturar.
						                					</li>
						                					<li>
						                						Principio del palomar.
						                					</li>
						                					<li>
						                						Analizar los casos límite.
						                					</li>
						                					<li>
						                						Reformular el problema.
						                					</li>
						                					<li>
						                						Suponer que no (reducción al absurdo).
						                					</li>
						                					<li>
						                						Empezar por el final (dar el problema por resuelto).
						                					</li>
						                				</ol>
						                			</div>
						                		</div>
					                		</div>
		                				</div>
		                				<div class="col-md-6">
		                					<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#funciones-profesor">
						                			Funciones que debe desempeñar el(la) profesor(a) según <b>Lester</b> (1995)
						                			</a>
					                			</div>
					                			<div id="funciones-profesor" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<p>El(la) profesor(a) ha de desempeñar tres funciones en la enseñanza de estrategias de resolución de problemas:</p>
						                				<ol>
						                					<li>
						                						Facilitar el aprendizaje de estrategias, ya sea con su instrucción directa o bien con el diseño de los materiales didácticos adecuados.
						                					</li>
						                					<li>
						                						Ser un modelo de pensamiento para sus alumnos y alumnas.
						                					</li>
						                					<li>
						                						Ser un monitor externo del proceso de aprendizaje de los estudiantes, aportando, en un primer momento, las ayudas necesarias que faciliten la ejecución de determinadas actuaciones cognitivas las cuales, sin esta ayuda externa, el alumno y alumna no podría realizar. En un segundo momento, el docente irá retirando gradualmente esta ayuda, en la medida en que el estudiante sea capaz de utilizarla de manera cada vez más autónoma.
						                					</li>
						                				</ol>
						                			</div>
						                		</div>
					                		</div>
		                				</div>
		                				<p></p>
		                				
		                			</div>
		                		</div>
	                		</div>	                		

	                		<div class="panel panel-info">
	                			<div class="panel-heading">
		                			<a data-toggle="collapse" data-parent="#paneles" href="#toma-decisiones">
		                			Toma de decisiones en diferentes contextos
		                			</a>
	                			</div>
	                			<div id="toma-decisiones" class="panel-collapse collapse">
		                			<div class="panel-body">
		                				<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#contexto">
					                			Situación o contexto de la situación 
					                			</a>
				                			</div>
				                			<div id="contexto" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<p>Las situaciones, escenarios o  entornos en los cuales se toman las decisiones  se pueden catalogar según el conocimiento y control que se tenga sobre las variables que intervienen o influyen en el problema, ya  que la solución que se tome o decisión final va a estar estipulada por dichas variables.</p>
					                			</div>
					                		</div>
				                		</div>

				                		<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#ambiente-certeza">
					                			Ambiente de certeza
					                			</a>
				                			</div>
				                			<div id="ambiente-certeza" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<div class="col-md-3 col-sm-5 col-xs-4">
														<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/certeza.png" class="col-xs-12 col-sm-12 col-md-12"/>
													</div>
													<div class="col-md-9 ">
						                				<p>Cuando se tiene  entendimiento  sobre el problema, la alternativa de soluciones que se planteen va a causar resultados conocidos e invariables. Al tomar las decisiones solo se puede pensar en la opción que genere mayor beneficio.</p>
														<p>La información que se tiene para solucionar  el problema es totalmente precisa, o sea se estudia el problema, se conoce las posibles soluciones, pero no se conoce con exactitud  los resultados que  pueden dar.</p>
														<p>Las decisiones, o posibles  alternativas de soluciones que tienen ciertas probabilidades conocidas de  generar un resultado. En estos procesos se pueden usar modelos matemáticos  o también el decisor puede hacer uso de la probabilidad objetiva o la subjetividad para estimar el posible resultado.</p>
													</div>	
					                			</div>
					                		</div>
				                		</div>
				                		
				                		<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#ambiente-riesgo">
					                			Ambiente de riesgo
					                			</a>
				                			</div>
				                			<div id="ambiente-riesgo" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<div class="col-md-3 col-sm-3">
														<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/riesgo.png" class="col-xs-12 col-sm-12 col-md-12"/>
													</div>
													<div class="col-md-9 col-sm-9">
					                					<p>Cuando se toman decisiones hay que disponer de información, conocer las consecuencias de cada uno de los entornos, pero sin saber con certeza cuál de ellos  va a suceder.</p>
					                				</div>	
					                			</div>
					                		</div>
				                		</div>

				                		<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#ambiente-incertidumbre">
					                			Ambiente de incertidumbre
					                			</a>
				                			</div>
				                			<div id="ambiente-incertidumbre" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<div class="col-md-3 col-sm-5 col-xs-4">
														<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/incertidumbre.png" class="col-xs-12 col-sm-12 col-md-12"/>
													</div>
					                				<div class="col-md-9 ">
						                				<p>Se tiene muy poca información para tomar decisiones,  ni se tiene control sobre la situación, y no se conoce como puede variar o interacciones de la variable del problema, se puede diseñar diferentes opciones de soluciones pero no se le puede asignar posibilidades a los resultados que se proyecten. Por esto se llama  incertidumbre de probabilidad.</p>
						                				<p>Hay dos clases de incertidumbre:</p>
						                				<div class="col-md-6">
						                					<div class="panel panel-warning">
									                			<div class="panel-heading">
										                			<a data-toggle="collapse" data-parent="#paneles" href="#incertidumbre-estructurada">
										                			Estructurada
										                			</a>
									                			</div>
									                			<div id="incertidumbre-estructurada" class="panel-collapse collapse">
										                			<div class="panel-body">
										                				<p>No se sabe  qué puede ocurrir entre las diferentes alternativas, pero se tiene conocimiento de lo que puede suceder entre distintas posibilidades.</p>
										                			</div>
										                		</div>
									                		</div>	
						                				</div>
						                				<div class="col-md-6">
						                					<div class="panel panel-warning">
									                			<div class="panel-heading">
										                			<a data-toggle="collapse" data-parent="#paneles" href="#incertidumbre-no-estructurada">
										                			No estructurada
										                			</a>
									                			</div>
									                			<div id="incertidumbre-no-estructurada" class="panel-collapse collapse">
										                			<div class="panel-body">
										                				<p>No se tiene conocimiento de lo que pueda suceder ni las posibilidades para las posibles soluciones, es decir no se sabe que pueda suceder.</p>
										                			</div>
										                		</div>
									                		</div>
						                				</div>
						                			</div>
					                			</div>
					                		</div>
				                		</div>

				                		<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#proceso-toma-decisiones">
					                			Proceso de toma de decisiones
					                			</a>
				                			</div>
				                			<div id="proceso-toma-decisiones" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<p>El alejamiento del proceso en fases  puede ser tan abreviado o tan desarrollado como se desee, se puede identificar esencialmente las siguientes fases:</p>
					                				
					                				<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#identificar-analizar">
								                			Identificar y analizar el problema
								                			</a>
							                			</div>
							                			<div id="identificar-analizar" class="panel-collapse collapse">
								                			<div class="panel-body">
								                				<div class="col-md-3 col-sm-5 col-xs-4">
																	<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/identificar-analizar-problema.png" class="col-xs-12 col-sm-12 col-md-12"/>
																</div>
																<div class="col-md-9 ">
								                					<p>Esta fase consiste en entender  las circunstancias al momento de visualizar el contexto deseado, encontrar el problema  y reconocer  que se debe tomar una decisión  para llegar a una solución del mismo. El problema puede ser del presente ya que existe una grieta entre la condición actual real y la deseada, o potencial, porque se estima que dicha grieta existirá en un futuro.</p>
								                				</div>
								                			</div>
								                		</div>
							                		</div>

							                		<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#identificar-criterios">
								                			Identificar los criterios de decisiones y ponderarlos
								                			</a>
							                			</div>
							                			<div id="identificar-criterios" class="panel-collapse collapse">
								                			<div class="panel-body">
								                				<div class="col-md-3 col-sm-5 col-xs-4">
																	<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/identificar-criterios.png" class="col-xs-12 col-sm-12 col-md-12"/>
																</div>
																<div class="col-md-9 ">
									                				<p>Son aquellas pautas de las cuales dependen las decisiones que se tomen, es asignar un valor relativo a la importancia que tiene criterio; a partir de las experiencias propias de los tomadores de decisiones.</p>
																	<p>Al momento de la práctica, cuando se debe tomar decisiones difíciles, complejas o en grupos, puede resultar de gran ayuda especificarlos para evitar que al momento de analizar las alternativas se manejen los criterios para favorecer una u otra alternativa de solución.</p>
																</div>
								                			</div>
								                		</div>
							                		</div>

							                		<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#definir-prioridad">
								                			Definir la prioridad para entender el problema
								                			</a>
							                			</div>
							                			<div id="definir-prioridad" class="panel-collapse collapse">
								                			<div class="panel-body">
								                				<div class="col-md-3 col-sm-5 col-xs-4">
																	<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/definir-prioridad.png" class="col-xs-12 col-sm-12 col-md-12"/>
																</div>
																<div class="col-md-9 ">
								                					<p>Es el impacto y la urgencia o tiempo en el que se dispone  para atender o resolver, buscar posibles soluciones al problema, este impacto describe el potencial el cual se encuentra endeble.</p>
								                				</div>
								                			</div>
								                		</div>
							                		</div>

							                		<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#generar-alternativas">
								                			Generar las alternativas de soluciones
								                			</a>
							                			</div>
							                			<div id="generar-alternativas" class="panel-collapse collapse">
								                			<div class="panel-body">
								                				<div class="col-md-3 col-sm-5 col-xs-4">
																	<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/generar-alternativas.png" class="col-xs-12 col-sm-12 col-md-12"/>
																</div>
																<div class="col-md-9 ">
									                				<p>Solo nos lleva a buscar más opciones a posibles soluciones según lo que tengamos investigado, mientras mayor sean las opciones para las soluciones obtendremos mayor beneficio. Ya que podremos tomar diferentes caminos en forma indefinida.</p>
																	<p>Para esto es necesario tener creatividad, existen diferentes técnicas para ampliar la creatividad como son: lluvias de ideas, relaciones forzadas entre otras.</p>
																</div>
								                			</div>
								                		</div>
							                		</div>

							                		<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#evaluar-alternativas">
								                			Evaluar las alternativas
								                			</a>
							                			</div>
							                			<div id="evaluar-alternativas" class="panel-collapse collapse">
								                			<div class="panel-body">
								                				<div class="col-md-3 col-sm-5 col-xs-4">
																	<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/evaluar-alternativas.png" class="col-xs-12 col-sm-12 col-md-12"/>
																</div>
																<div class="col-md-9 ">
									                				<p>Se evaluara cada una de las posibles soluciones que se obtuvieron para la resolución del problema, se debe mirar el lado positivo y negativo de cada una de las opciones de manera individual. Con respecto a los criterio de decisiones.</p>
																	<p>Esta evaluación va hacer más o menos exacta ya que esta fase es importante el análisis crítico como cualidad del tomador de decisiones.</p>
																</div>
								                			</div>
								                		</div>
							                		</div>

							                		<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#eleccion-alternativa">
								                			Elección de la mejor alternativa
								                			</a>
							                			</div>
							                			<div id="eleccion-alternativa" class="panel-collapse collapse">
								                			<div class="panel-body">
								                				<div class="col-md-3 col-sm-4">
																	<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/seleccion-alternativa.png" class="col-xs-12 col-sm-12 col-md-12"/>
																</div>
																<div class="col-md-9 col-sm-12">
									                				<p>Se seleccionara la posible solución o alternativa que arrojo la evaluación la cual tendrá mejores resultados.</p>
																	<p>Hay diversas técnicas, un análisis jerárquico que nos ayuda a valorar diversos criterios.</p>
																	<p>Los siguientes términos pueden ayudar a la toma de decisiones según los resultados que se buscan:</p>
																	<div class="col-md-4 col-sm-12">
																		<div class="panel panel-danger">
												                			<div class="panel-heading">
													                			<a data-toggle="collapse" data-parent="#paneles" href="#maximizar">
													                			Maximizar
													                			</a>
												                			</div>
												                			<div id="maximizar" class="panel-collapse collapse">
													                			<div class="panel-body">
													                				<p>Seleccionar la mejor solución posible.</p>
													                			</div>
													                		</div>
												                		</div>
																	</div>
																	<div class="col-md-4 col-sm-12">
																		<div class="panel panel-danger">
												                			<div class="panel-heading">
													                			<a data-toggle="collapse" data-parent="#paneles" href="#satisfacer">
													                			Satisfacer
													                			</a>
												                			</div>
												                			<div id="satisfacer" class="panel-collapse collapse">
													                			<div class="panel-body">
													                				<p>Optar por la primera alternativa que sea mínimamente aceptable satisfaciendo de una forma metas y objetivos buscados.</p>
													                			</div>
													                		</div>
												                		</div>
																	</div>
																	<div class="col-md-4 col-sm-12">
																		<div class="panel panel-danger">
												                			<div class="panel-heading">
													                			<a data-toggle="collapse" data-parent="#paneles" href="#optimizar">
													                			Optimizar
													                			</a>
												                			</div>
												                			<div id="optimizar" class="panel-collapse collapse">
													                			<div class="panel-body">
													                				<p>Generar el mejor equilibrio posible entre distintos objetivos.</p>
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
								                			<a data-toggle="collapse" data-parent="#paneles" href="#aplicacion-decision">
								                			Aplicación de la decisión
								                			</a>
							                			</div>
							                			<div id="aplicacion-decision" class="panel-collapse collapse">
								                			<div class="panel-body">
																<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/aplicacion-decision.png" class="col-xs-12 col-sm-3 col-md-3"/>
																<p> Encaminar  la decisión tomada para  así comenzar a ver o evaluar si la misma es de manera acertada o no. De esta forma implementar decisiones de menor importancia.</p>
								                			</div>
								                		</div>
							                		</div>

							                		<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#evaluacion-resultados">
								                			Evaluación de los resultados
								                			</a>
							                			</div>
							                			<div id="evaluacion-resultados" class="panel-collapse collapse">
								                			<div class="panel-body">
																<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/evaluacion-resultados.png" class="col-xs-12 col-sm-4 col-md-3"/>
								                				<p>Luego de tener la decisión en marcha se debe evaluar si la opción tomada fue la indicada y está dando solución al problema o no.</p>
																<p>Si el resultado no es el que se espera,  se debe mirar si hay que darle un poco de tiempo  si la decisión no fue la acertada, entonces se deberá buscar una nueva solución.</p>
																<p>En esta nueva búsqueda se deberá iniciar obteniendo mayor información, tomando en cuenta  los errores cometidos en el primer intento, y teniendo conciencia de que estas soluciones siempre están en continuos cambios.</p>
								                			</div>
								                		</div>
							                		</div>

					                			</div>
					                		</div>
				                		</div>

				                		<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#proceso-planificacion">
					                			Procesos de planificación y supervisión de una tarea y procesos involucrados en el discernimiento
					                			</a>
				                			</div>
				                			<div id="proceso-planificacion" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<p>Al igual que en el pensamiento crítico en la toma de decisiones se utilizan ciertos  procesos cognitivos como son:</p>
					                				<div class="row">
						                				<div class="col-md-4">
						                					<div class="panel panel-warning">
									                			<div class="panel-heading">
										                			<a data-toggle="collapse" data-parent="#paneles" href="#observacion">
										                			Observación
										                			</a>
									                			</div>
									                			<div id="observacion" class="panel-collapse collapse">
										                			<div class="panel-body">
										                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/observacion.png" class="col-xs-12 col-sm-3 col-md-6"/>
										                				<p>Visualizar, adquirir e investigar con cuidado algo. Es aplicar atentamente los sentidos a un objeto o a un fenómeno para estudiarlo.</p>
										                			</div>
										                		</div>
									                		</div>
						                				</div>
						                				<div class="col-md-4">
						                					<div class="panel panel-warning">
									                			<div class="panel-heading">
										                			<a data-toggle="collapse" data-parent="#paneles" href="#comparacion">
										                			Comparación
										                			</a>
									                			</div>
									                			<div id="comparacion" class="panel-collapse collapse">
										                			<div class="panel-body">
										                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/comparacion.png" class="col-xs-12 col-sm-3 col-md-6"/>
										                				<p>Fijar  la atención en dos o más objeto para descubrir sus diferencias o semejanzas.</p>
										                			</div>
										                		</div>
									                		</div>
						                				</div>
						                				<div class="col-md-4">
						                					<div class="panel panel-warning">
									                			<div class="panel-heading">
										                			<a data-toggle="collapse" data-parent="#paneles" href="#codificacion">
										                			Codificación
										                			</a>
									                			</div>
									                			<div id="codificacion" class="panel-collapse collapse">
										                			<div class="panel-body">
										                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/codificacion.png" class="col-xs-12 col-sm-3 col-md-6"/>
										                				<p>Son transformaciones mediantes reglas de un código  la formulación de un mensaje.</p>
										                			</div>
										                		</div>
									                		</div>
						                				</div>
						                			</div>
					                				<div class="row">
					                					<div class="col-md-4">
						                					<div class="panel panel-warning">
									                			<div class="panel-heading">
										                			<a data-toggle="collapse" data-parent="#paneles" href="#organizacion">
										                			Organización
										                			</a>
									                			</div>
									                			<div id="organizacion" class="panel-collapse collapse">
										                			<div class="panel-body">
										                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/organizacion.png" class="col-xs-12 col-sm-3 col-md-6"/>
										                				<p>Destreza de arreglar e ordenar; el modo en que se observan para hacer las cosas.</p>
										                			</div>
										                		</div>
									                		</div>
						                				</div>
						                				<div class="col-md-4">
						                					<div class="panel panel-warning">
									                			<div class="panel-heading">
										                			<a data-toggle="collapse" data-parent="#paneles" href="#clasificacion">
										                			Clasificación
										                			</a>
									                			</div>
									                			<div id="clasificacion" class="panel-collapse collapse">
										                			<div class="panel-body">
										                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/clasificacion.png" class="col-xs-12 col-sm-3 col-md-6"/>
										                				<p>Orden disponible por clases, categorías o ordenamiento sistemático de algo.</p>
										                			</div>
										                		</div>
									                		</div>
						                				</div>
						                				<div class="col-md-4">
						                					<div class="panel panel-warning">
									                			<div class="panel-heading">
										                			<a data-toggle="collapse" data-parent="#paneles" href="#resolucion">
										                			Resolución
										                			</a>
									                			</div>
									                			<div id="resolucion" class="panel-collapse collapse">
										                			<div class="panel-body">
										                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/resolucion.png" class="col-xs-12 col-sm-3 col-md-4"/>
										                				<p>Término o conclusión de un problema, parte en que se demuestran los resultados.</p>
										                			</div>
										                		</div>
									                		</div>
						                				</div>
					                				</div>
					                				<div class="row">
					                					<div class="col-md-4">
						                					<div class="panel panel-warning">
									                			<div class="panel-heading">
										                			<a data-toggle="collapse" data-parent="#paneles" href="#evaluacion">
										                			Evaluación
										                			</a>
									                			</div>
									                			<div id="evaluacion" class="panel-collapse collapse">
										                			<div class="panel-body">
										                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/evaluacion-analisis.png" class="col-xs-12 col-sm-3 col-md-6"/>
										                				<p>Análisis y reflexión de los razonamientos y conclusiones.</p>
										                			</div>
										                		</div>
									                		</div>
						                				</div>
						                				<div class="col-md-5">
						                					<div class="panel panel-warning">
									                			<div class="panel-heading">
										                			<a data-toggle="collapse" data-parent="#paneles" href="#retroalimentacion">
										                			Retroalimentación
										                			</a>
									                			</div>
									                			<div id="retroalimentacion" class="panel-collapse collapse">
										                			<div class="panel-body">
										                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad1/retroalimentacion.png" class="col-xs-12 col-sm-3 col-md-6"/>
										                				<p>El proceso de compartir observaciones, informaciones y sugerencias, para intentar  mejorar los funcionamientos.</p>
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

	                		<!-- Fin Contenido-->
	                	</div>
                		<!--Fin contenido grupal panel-->
                	</div>
                </div>
                <!--Fin de contenido unidad-->
            </div>
            <div class="tab-pane" id="tab2">
            	<br>
                <!--Contenido de la unidad-->
                <div class="panel panel-default">
        			<div class="panel-heading">
            			Formulación del Problema
        			</div>
        			<div class="panel-body">
						<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad2/formulacion-problema.png" class="col-xs-12 col-sm-4 col-md-2" />
    					<p>Algunos autores emplean indistintamente los términos planteamiento y formulación, pero es necesario diferenciarlos. A tales efecto la formulación de un problema consiste en la presentación oracional del mismo, es decir, “reducción del problema a términos concretos, explícitos, claros y precisos.”(Tamayo, 1993, p. 169). “Es la concreción del planteamiento en una Como producto de esa reducción, se pregunta precisa y sugiere la elaboración de una o varias delimitada en cuanto preguntas que reflejen con claridad los aspectos desconocidos que marcaran el a espacio, tiempo e inicio de la investigación. Además de la población (si fuere el forma interrogativa, la formulación del caso)”. (Fidias G. Problema puede adoptar también la forma Arias, 2006, p. 41) declarativa.</p>
        				<br><br>
        				<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#especificacion-operacional">
	                			Especificación operacional de las actividades y tareas a realizar
	                			</a>
                			</div>
                			<div id="especificacion-operacional" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				<p>En esta sección los desarrolladores deben crear las actividades y tareas a realizar en relación a la comunidad y problemática a realizar, una de las principales actividades a realizar son las siguientes a continuación. Sin embargo los desarrolladores pueden agregar sus propias actividades y contenido adicional que correspondan con el proyecto.</p>
	                				<p>Para la realización del proyecto se deben considerar las siguientes actividades:</p>
	                				<ol>
	                					<li>
	                						Para la realización del proyecto se deben considerar las siguientes actividades.
	                					</li>
	                					<li>
	                						Detección de problemas.
	                					</li>
	                					<li>
	                						Identificación de la tarea a realizar.
	                					</li>
	                					<li>
	                						Búsqueda bibliográfica.
	                					</li>
	                					<li>
	                						Análisis de costos.
	                					</li>
	                					<li>
	                						Solicitar autorización a la institución para el desarrollo del proyecto.
	                					</li>
	                					<li>
	                						Promocionar el taller, realizando afiches, difusión oral por los cursos, etc.
	                					</li>
	                				</ol>
	                			</div>
	                		</div>
                		</div>

                		<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#formulacion-problema">
	                			Formulación del Problema
	                			</a>
                			</div>
                			<div id="formulacion-problema" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				<p>Consiste en la presentación oracional del mismo, es decir, es la reducción del problema a términos concretos, explícitos, claros y precisos.</p>
									<p>Como producto de esa reducción, se recomienda la elaboración de una o varias preguntas que reflejen con claridad los aspectos desconocidos que marcarán el inicio de la investigación. Además de la forma interrogativa, la formulación del problema puede adoptar también la forma declarativa.</p>
									<p>A continuación se presenta un cuadro comparativo sobre los elementos de la formulación de problema, según los siguientes autores: <b>Cauas</b> (2006) y <b>Hernández</b>, <b>Fernández</b> y <b>Baptista</b> (2003):</p>
									<div class="panel panel-success">
			                			<div class="panel-heading">
				                			<a data-toggle="collapse" data-parent="#paneles" href="#cuadro-comparativo">
				                			Cuadro comparativo
				                			</a>
			                			</div>
			                			<div id="cuadro-comparativo" class="panel-collapse collapse">
				                			<div class="panel-body">
				                				<table class="table" border=1 style="border-color:rgb(221,221,221)">
				                					<thead>
														<tr>
															<th></th>
															<th colspan="2" style="text-align:center">Autores</th>
														</tr>
														<tr>
															<th style="text-align:center">Elementos</th>
															<th style="text-align:center">Cauas (2006)</th>
															<th style="text-align:center">Hernández, Fernández y Baptista (2003)</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th style="text-align:center">Objetivos</th>
															<td style="text-align:justify">Los objetivos ayudan a establecer qué pretende la investigación y estos deben plantearse con claridad para evitar posibles desviaciones en el proceso de investigación. Deben de ser alcanzables, puesto que se convierten en las guías de estudio y orientan el desarrollo de toda investigación.</td>
															<td style="text-align:justify">Es necesario establecer qué pretende la investigación, es decir, cuáles son sus objetivos. Hay investigaciones que buscan contribuir a resolver un problema en especial, y otras, a probar una teoría o aportar evidencias empíricas a favor de ella.</td>
														</tr>
														<tr>
															<th style="text-align:center">Enunciado del Problema</th>
															<td style="text-align:justify">Existen dos formas de enunciar el problema de investigación y estas son: el interrogativo y el declarativo.</td>
															<td></td>
														</tr>
														<tr>
															<th style="text-align:center">Preguntas</th>
															<td style="text-align:justify">Es necesario plantear a través de preguntas, el problema que se estudiará. Plantear el problema de esta forma, es más útil y directo, siempre y cuando las preguntas sean precisas.</td>
															<td style="text-align:justify">Es necesario establecer qué pretende la investigación, es decir, cuáles son sus objetivos. Hay investigaciones que buscan contribuir a resolver un problema en especial, y otras, a probar una teoría o aportar evidencias empíricas a favor de ella.</td>
														</tr>
														<tr>
															<th style="text-align:center">Justificación</th>
															<td style="text-align:justify">Se deben entregar las razones de la utilidad del estudio, en otras palabras, se hace necesario argumentar a favor del estudio, qué utilidad y conveniencia tiene su realización.</td>
															<td style="text-align:justify">Al plantear un problema de investigación es necesario justificar el estudio exponiendo sus razones. La mayoría de las investigaciones se efectúan con un propósito definido, no se hacen simplemente por capricho de una persona; y ese propósito debe de ser lo suficientemente fuerte para que se justifique su realización.</td>
														</tr>
													</tbody>	
												</table>
				                			</div>
				                		</div>
			                		</div>
									
	                			</div>
	                		</div>
                		</div>

                		<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#def-obj-gen-esp">
	                			Definición de objetivos general y específicos
	                			</a>
                			</div>
                			<div id="def-obj-gen-esp" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				<div class="col-md-6">
	                					<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#objetivo-general">
					                			Objetivo General
					                			</a>
				                			</div>
				                			<div id="objetivo-general" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad2/objetivo-general.png" class="col-xs-12 col-sm-4 col-md-5" />
					                				<p>Según <b>Arias</b> (2006), un objetivo general expresa "el fin concreto de la investigación en correspondencia directa con la formulación del problema" (p. 45).</p>
													<p>Se formularan tantos objetivos generales como el investigador considere necesario, atendiendo a las necesidades de la investigación y a los resultados que se aspire lograr. Para su logro, se deben formular lo objetivos específicos.</p>
													<p>En este sentido, el objetivo general expresa la finalidad que se busca en la investigación, es por ello que debe ser coherente con el problema planteado así como también con el título del trabajo.</p>
					                			</div>
					                		</div>
				                		</div>
	                				</div>
	                				<div class="col-md-6">
	                					<div class="panel panel-success">
				                			<div class="panel-heading">
					                			<a data-toggle="collapse" data-parent="#paneles" href="#objetivo-especificos">
					                			Objetivos específicos
					                			</a>
				                			</div>
				                			<div id="objetivo-especificos" class="panel-collapse collapse">
					                			<div class="panel-body">
					                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad2/objetivos-especificos.png" class="col-xs-12 col-sm-4 col-md-5" />
					                				<p>Según el autor precitado, los objetivos específicos "indican con precisión los conceptos, variables o dimensiones que serán objeto de estudio. Se derivan del objetivo general y contribuyen al logro de éste". (ob. Cit).</p>
													<p>Es decir, representan los logros particulares para alcanzar el objetivo general, deben orientar el desarrollo de la investigación así como también facilitarla estructura de la metodología. Con los objetivos específicos se espera, encontrar también obtener respuesta a ¿cuál será el conocimiento generado si el trabajo se realiza?, ¿qué se espera desarrollar?</p>
													<p>Con el fin de cumplir con lo anteriormente mencionado, es preciso formularlos de manera que respondan jerárquicamente a la acción cognitiva que se pretende alcanzar con el objetivo general. ¿Cómo se elabora un objetivo?</p>
													<p>Es tal vez, conjuntamente con la pregunta de investigación y las conclusiones, lo más complicado del proceso de investigación, por el contexto cognitivo que tiene implícito.</p>
													<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#criterios-objetivos">
								                			Criterios para redactar correctamente los objetivos
								                			</a>
							                			</div>
							                			<div id="criterios-objetivos" class="panel-collapse collapse">
								                			<div class="panel-body">
								                				<ol>
								                					<li>
								                						Se redactan comenzando con un verbo en infinitivo (determinar, demostrar, evaluar, relacionar) que indique la acción que se ha de llevar a cabo en la investigación.
								                					</li>
								                					<li>
								                						Deben estar dirigidos a los elementos básicos del problema.
								                					</li>
								                					<li>
								                						Deben ser factibles de alcanzar.
								                					</li>
								                					<li>
								                						Deben ser claros, evitar la ambigüedad. Expresiones que no indiquen claramente lo que se va a realizar deben evitarse en la redacción de los objetivos, por ejemplo los términos “adecuado”, “bien hecho”, “lógico”, “útil”, pueden ser interpretados de diferentes maneras y por lo tanto no deben ser utilizadas.
								                					</li>
								                					<li>
								                						Deben ser precisos, es decir, contemplar un solo aspecto del problema.
								                					</li>
								                					<li>
								                						Los objetivos específicos deben seguir una secuencia lógica que indique los pasos o etapas que se han de cumplir para lograr el objetivo general.
								                					</li>
								                				</ol>
								                			</div>
								                		</div>
							                		</div>
							                		<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#verbos-objetivos">
								                			Verbos para Objetivos Específicos
								                			</a>
							                			</div>
							                			<div id="verbos-objetivos" class="panel-collapse collapse">
								                			<div class="panel-body">
								                				<p>A continuación se presenta una serie de verbos sugeridos por la Prof. Mirian Balestrini Acuña, en su libro "Como se elabora un proyecto de investigación" (2002).</p>
								                				<a href="' . DIR_PAGES . 'upload/images/verbos-objetivos.png" target="__blank">
								                					<img src="' . DIR_PAGES . 'upload/images/verbos-objetivos.png" class="col-md-12 col-sm-12" />
								                				</a>
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
	                			<a data-toggle="collapse" data-parent="#paneles" href="#fundamentacion-tecnica">
	                			Fundamentación Técnica
	                			</a>
                			</div>
                			<div id="fundamentacion-tecnica" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				<div class="panel panel-success">
			                			<div class="panel-heading">
				                			<a data-toggle="collapse" data-parent="#paneles" href="#sop-tec-usua">
				                			Soporte Técnico a Usuarios y Usuarias
				                			</a>
			                			</div>
			                			<div id="sop-tec-usua" class="panel-collapse collapse">
				                			<div class="panel-body">
				                				<p>Es el que se ocupa de brindar e impartir el soporte técnico necesario a todos los usuarios de la institución u organización y comunidad en todo lo relacionado con el hardware y software. Las funciones que se emplean son:</p>
				                				<ul>
				                					<li>
				                						Llevar el registro y control diario de las solicitudes de servicios de las unidades usuarias, producto de requerimientos relacionados con el área técnica (fallas técnicas, traslados de equipos, instalación de impresoras, desincorporación de equipos, etc.).
				                					</li>
				                					<li>
				                						Atender y asesorar a los usuarios de la empresa en relación al manejo y uso de las aplicaciones de oficina y operaciones básicas del software.
				                					</li>
				                					<li>
				                						Configurar, mantener y controlar los PO e impresora asignadas a los distintos usuarios de la institución.
				                					</li>
				                				</ul>
				                			</div>
				                		</div>
			                		</div>
			                		
			                		<div class="panel panel-success">
			                			<div class="panel-heading">
				                			<a data-toggle="collapse" data-parent="#paneles" href="#sop-tec-equi">
				                			Soporte Técnico a Equipos
				                			</a>
			                			</div>
			                			<div id="sop-tec-equi" class="panel-collapse collapse">
				                			<div class="panel-body">
				                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad2/soporte-tecnico.png" class="col-xs-12 col-sm-3 col-md-2" />
				                				<p>El soporte técnico es un rango de servicios que proporcionan asistencia con el hardware o software de una computadora, o algún otro dispositivo electrónico o mecánico. En general los servicios de soporte técnico tratan de ayudar al usuario a resolver determinados problemas con algún producto en vez de entrenar o personalizar.</p>
				                			</div>
				                		</div>
			                		</div>

	                			</div>
	                		</div>
                		</div>

                		<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#alfabetizacion-tecnologica">
	                			Alfabetización Tecnológica
	                			</a>
                			</div>
                			<div id="alfabetizacion-tecnologica" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad2/alfabetizacion.png" class="col-xs-12 col-sm-3 col-md-2" />
	                				<p>La alfabetización se reconoce hoy como uno de los derechos fundamentales de todo ser humano. Si bien al hablar de alfabetización en principio pensamos en las competencias para la lectura y la escritura como vía de inserción de los pueblos en la cultura, en la actualidad este concepto implica también entender, reflexionar y desarrollar competencias para la comprensión y solución de problemas de la vida cotidiana.</p>
	                			</div>
	                		</div>
                		</div>

                		<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#fundament-legal">
	                			Fundamentación Legal
	                			</a>
                			</div>
                			<div id="fundament-legal" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				<div class="row">
		                				<div class="col-md-3 col-sm-5 col-xs-4">
		                					<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#constitucion">
						                			Constitución de la República Bolivariana de Venezuela
						                			</a>
					                			</div>
					                			<div id="constitucion" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad2/constitucion.png" class="col-xs-12 col-sm-4 col-md-5" />
						                				<ul class="col-xs-12 col-sm-8 col-md-7">
						                					<li>
						                						Artículo 108.
						                					</li>
						                					<li>
						                						Artículo 109.
						                					</li>
						                					<li>
						                						Artículo 110.
						                					</li>
						                				</ul>
						                			</div>
						                		</div>
					                		</div>
		                				</div>
		                				<div class="col-md-3 col-sm-5 col-xs-4">
		                					<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#ley-cti">
						                			Ley Orgánica de Ciencia, Tecnología e Innovación
						                			</a>
					                			</div>
					                			<div id="ley-cti" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad2/ley-cti.png" class="col-xs-12 col-sm-4 col-md-5" />
						                				<ul class="col-xs-12 col-sm-8 col-md-7">
						                					<li>
						                						Artículo 3°.
						                					</li>
						                					<li>
						                						Artículo 17°.
						                					</li>
						                					<li>
						                						Artículo 59°.
						                					</li>
						                				</ul>
						                			</div>
						                		</div>
					                		</div>
		                					
		                				</div>
		                				<div class="col-md-3 col-sm-5 col-xs-4">
		                					<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#ley-edu">
						                			Ley Orgánica de Educación
						                			</a>
					                			</div>
					                			<div id="ley-edu" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<ul>
						                					<li>
						                						Artículo 35°.
						                					</li>
						                				</ul>
						                			</div>
						                		</div>
					                		</div>
		                					
		                				</div>
		                				<div class="col-md-3 col-sm-5 col-xs-4">
		                					<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#decreto-825">
						                			Decreto Nº 825. Gaceta Oficial Nº 36.955. 22 de mayo de 2000
						                			</a>
					                			</div>
					                			<div id="decreto-825" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<ul>
						                					<li>
						                						Artículo 1°.
						                					</li>
						                					<li>
						                						Artículo 2°.
						                					</li>
						                					<li>
						                						Artículo 3°.
						                					</li>
						                					<li>
						                						Artículo 4°.
						                					</li>
						                					<li>
						                						Artículo 9°.
						                					</li>
						                					<li>
						                						Artículo 10°.
						                					</li>
						                					<li>
						                						Artículo 11°.
						                					</li>
						                				</ul>
						                			</div>
						                		</div>
					                		</div>
		                				</div>
		                			</div>
		                			<div class="row">
		                				<div class="col-md-4">
		                					<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#decreto-3390">
						                			Decreto Presidencial Nº 3390. Gaceta Oficial N° 38.095. 23 de Diciembre de 2004
						                			</a>
					                			</div>
					                			<div id="decreto-3390" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad2/decreto-3390.png" class="col-xs-12 col-sm-4 col-md-5" />
						                				<ul class="col-xs-12 col-sm-8 col-md-7">
						                					<li>
						                						Artículo 1°.
						                					</li>
						                					<li>
						                						Artículo 2°.
						                					</li>
						                					<li>
						                						Artículo 3°.
						                					</li>
						                					<li>
						                						Artículo 4°.
						                					</li>
						                					<li>
						                						Artículo 5°.
						                					</li>
						                					<li>
						                						Artículo 7°.
						                					</li>
						                					<li>
						                						Artículo 8°.
						                					</li>
						                					<li>
						                						Artículo 9°.
						                					</li>
						                					<li>
						                						Artículo 10°.
						                					</li>
						                					<li>
						                						Artículo 11°.
						                					</li>
						                					<li>
						                						Artículo 12°.
						                					</li>
						                					<li>
						                						Artículo 13°.
						                					</li>
						                					<li>
						                						Artículo 14°.
						                					</li>
						                				</ul>
						                			</div>
						                		</div>
					                		</div>
		                				</div>

		                				<div class="col-md-4">
		                					<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#proy-nac-simon-bolivar">
						                			Proyecto Nacional Simón Bolívar
						                			</a>
					                			</div>
					                			<div id="proy-nac-simon-bolivar" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<p>Universalizar el acceso a los diferentes tipos de comunicación.</p>
														<p>Fomentar el hábito de la lectura, el uso responsable de Internet y otras formas informáticas de comunicación e información.</p>
														<p>Facilitar condiciones tecnológicas, educativas y financieras a los nuevos emprendedores comunicacionales.</p>
						                			</div>
						                		</div>
					                		</div>
		                				</div>
		                				
		                				<div class="col-md-4">
		                					<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#mision-alma-mater">
						                			Misión Alma Mater
						                			</a>
					                			</div>
					                			<div id="mision-alma-mater" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad2/alma-mater.png" class="col-xs-12 col-sm-4 col-md-5" />
						                				<p>Generar un nuevo tejido institucional de la Educación Superior venezolana, dirigido a:</p>
														<p>Vincular los procesos de formación, investigación y desarrollo tecnológico con los proyectos estratégicos de la Nación dirigidos a la soberanía política, tecnológica, económica, social y cultural.</p>
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
                <!--Fin de contenido unidad-->
            </div>
            <div class="tab-pane" id="tab3">
                <br>
                <!--Contenido de la unidad-->
                <div class="panel panel-default">
        			<div class="panel-heading">
            			Factibilidad
        			</div>
        			<div class="panel-body">
        				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad3/factibilidad.png" class="col-xs-12 col-sm-4 col-md-3" />
        				<p>Se denomina factible la elaboración de una propuesta viable, destinada atender necesidades específicas a partir de un diagnóstico. <b>El Manual de Tesis de Grado y Especialización y Maestría y Tesis Doctorales de la Universidad Pedagógica Libertador</b>, (2003), plantea: “Consiste en la investigación, elaboración y desarrollo de un modelo operativo viable para solucionar problemas, requerimientos necesidades de organizaciones o grupos sociales que pueden referirse a la formulación de políticas, programas, tecnologías, métodos, o procesos. El proyecto debe tener el apoyo de una investigación de tipo documental, y de campo, o un diseño que incluya ambas modalidades “(p. 16).</p>
        				<p>Del mismo modo, <b>Arias</b>, (2006, p. 134), señala: “Que se trata de una propuesta de acción para resolver un problema practico o satisfacer una necesidad. Es indispensable que dicha propuesta se acompañe de una investigación, que demuestre su factibilidad o posibilidad de realización”.</p>
        				<p>La factibilidad, indica la posibilidad de desarrollar un proyecto, tomando en consideración la necesidad detectada, beneficios, recursos humanos, técnicos, financieros, estudio de mercado, y beneficiarios. (<b>Gómez</b>, 2000, p. 24). Por ello, una vez culminado el diagnóstico y la factibilidad, se procede a la elaboración de la propuesta, lo que conlleva necesariamente a una tercera fase del proyecto.</p>
        				<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#direfencias-proy-factible">
	                			Diferencias entre proyecto y proyecto factible
	                			</a>
                			</div>
                			<div id="direfencias-proy-factible" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				<table class="table" border=1 style="border-color:rgb(221,221,221)">
	                					<thead>
	                						<tr>
	                							<th style="text-align:center">Criterios</th>
	                							<th style="text-align:center">Proyecto</th>
	                							<th style="text-align:center">Proyecto Factible</th>
	                						</tr>
	                					</thead>
	                					<tbody>
	                						<tr>
	                							<td style="text-align:center">Finalidad</td>
	                							<td style="text-align:center">Indagar sobre un problema.</td>
	                							<td style="text-align:center">Proponer una soloución a un problema práctico.</td>
	                						</tr>
	                						<tr>
	                							<td style="text-align:center">Objetivos</td>
	                							<td style="text-align:center">Se definen los objetivos de la investigación.</td>
	                							<td style="text-align:center">Objetivos de acción procesos y actividades.</td>
	                						</tr>
	                						<tr>
	                							<td style="text-align:center">Metodología</td>
	                							<td style="text-align:center">Emplean técnicas e instrumentos vinculados a la investigación.</td>
	                							<td style="text-align:center">Cada etapa emplea técnicas diferentes.</td>
	                						</tr>
	                						<tr>
	                							<td style="text-align:center">Contenido</td>
	                							<td style="text-align:center">Planteamiento del problema, objetivos, justificación, marco teórico metodología, o diseño, análisis e interpretación, conclusiones y referencias.</td>
	                							<td style="text-align:center">Planteamiento del problema, objetivos, justificación, marco referencia, diagnóstico, factibilidad, propuesta, recomendaciones y referencias.</td>
	                						</tr>
	                					</tbody>
	                				</table>
	                			</div>
	                		</div>
                		</div>

                		<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#clasificacion-factibilidades">
	                			Clasificación
	                			</a>
                			</div>
                			<div id="clasificacion-factibilidades" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				
	                				<div class="row">
	                					<div class="col-md-3">
	                						<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#factibilidad-humana">
						                			Factibilidad Humana u Operativa
						                			</a>
					                			</div>
					                			<div id="factibilidad-humana" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad3/factibilidad-humana.png" class="col-xs-12 col-sm-4 col-md-12" />
						                				<p>Se refiere a que debe existir el personal capacitado requerido para llevar a cabo el proyecto y así mismo, deben existir usuarios finales dispuestos a emplear los productos o servicios generados por el proyecto o sistema desarrollado.</p>
						                			</div>
						                		</div>
					                		</div>
	                					</div>
	                					<div class="col-md-3">
	                						<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#factibilidad-tecnica">
						                			Factibilidad Técnica
						                			</a>
					                			</div>
					                			<div id="factibilidad-tecnica" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad3/factibilidad-tecnica.png" class="col-xs-12 col-sm-4 col-md-12" />
						                				<p>El análisis de factibilidad técnica evalúa si el equipo y software están disponibles (o, en el caso del software, si puede desarrollarse) y si tienen las capacidades técnicas requeridas por cada alternativa del diseño que se esté considerando. Los estudios de factibilidad técnica también consideran las interfaces entre los sistemas actuales y nuevos.</p>
						                				<ul>
						                					<li>
						                						Mejora del sistema actual.
						                					</li>
						                					<li>
						                						Disponibilidad de tecnología que satisfaga las necesidades.
						                					</li>
						                				</ul>
						                			</div>
						                		</div>
					                		</div>
	                					</div>
	                					<div class="col-md-3">
	                						<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#factibilidad-economica">
						                			Factibilidad Económica
						                			</a>
					                			</div>
					                			<div id="factibilidad-economica" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad3/factibilidad-economica.png" class="col-xs-12 col-sm-4 col-md-12" />
						                				<p>Los estudios de factibilidad económica incluyen análisis de costos y beneficios asociados con cada alternativa del proyecto. Con análisis de costos/beneficio, todos los costos y beneficios de adquirir y operar cada sistema alternativo se identifican y se hace una comparación de ellos.</p>
						                				<ul>
						                					<li>
						                						Tiempo del analista.
						                					</li>
						                					<li>
						                						Costo de estudio.
						                					</li>
						                					<li>
						                						Costo del tiempo del personal.
						                					</li>
						                					<li>
						                						Costo del tiempo.
						                					</li>
						                					<li>
						                						Costo del desarrollo / adquisición.
						                					</li>
						                				</ul>
						                			</div>
						                		</div>
					                		</div>
	                					</div>
	                					<div class="col-md-3">
	                						<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#factibilidad-operativa">
						                			Factibilidad Operativa
						                			</a>
					                			</div>
					                			<div id="factibilidad-operativa" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad3/factibilidad-operativa.png" class="col-xs-12 col-sm-4 col-md-12" />
						                				<p>Esta factibilidad comprende una determinación de la probabilidad de que un nuevo sistema se use como se supone.</p>
						                				<ul>
						                					<li>
						                						Operación garantizada.
						                					</li>
						                					<li>
						                						Uso garantizado.
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

                		<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#metodos-tecnicas">
	                			Métodos y Técnicas
	                			</a>
                			</div>
                			<div id="metodos-tecnicas" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				
            						<div class="panel panel-success">
			                			<div class="panel-heading">
				                			<a data-toggle="collapse" data-parent="#paneles" href="#factibilidad-tecnica-2">
				                			Factibilidad Técnica
				                			</a>
			                			</div>
			                			<div id="factibilidad-tecnica-2" class="panel-collapse collapse">
				                			<div class="panel-body">
				                				<p>De acuerdo a la tecnología se determina la factibilidad técnica bajo dos enfoques: Hardware y Software.</p>
				                				<div class="col-md-6">
				                					<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#hardware-2">
								                			Hardware
								                			</a>
							                			</div>
							                			<div id="hardware-2" class="panel-collapse collapse">
								                			<div class="panel-body">
								                				<p>En cuanto a Hardware, este debe presentar una lista de los componentes del equipo a ser utilizado o presentar una lista de los requisitos mínimos que se requieren para llevar a cabo la ejecución de las actividades a realizar.</p>
								                				<!--Modal de ejemplos de hardware-->
								                				<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#ejemplos">
								                					Haz click aqui para ver algunos ejemplos de hardware
								                				</a>
								                				<div class="modal fade" id="ejemplos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																  <div class="modal-dialog">
																    <div class="modal-content">
																      <div class="modal-header">
																        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																        <h4 class="modal-title" id="myModalLabel">Ejemplos de hardware</h4>
																      </div>
																      <div class="modal-body">
																        <ul>
																        	<li>
																        		Procesador Intel Core 2 Duo 2.70 Ghz.
																        	</li>
																        	<li>
																        		Tarjeta Madre AsRock.
																        	</li>
																        	<li>
																        		2GB DDR2 de Memoria RAM.
																        	</li>
																        	<li>
																        		Disco Duro SATA Samsung 500GB.
																        	</li>
																        	<li>
																        		Unidad de Disco 3 ½.
																        	</li>
																        	<li>
																        		Unidad de CD-ROM.
																        	</li>
																        	<li>
																        		Tarjeta de Red.
																        	</li>
																        	<li>
																        		Tarjeta de Video 256 MB.
																        	</li>
																        	<li>
																        		Monitor SVGA.
																        	</li>
																        	<li>
																        		Teclado.
																        	</li>
																        	<li>
																        		Mouse.
																        	</li>
																        </ul>
																      </div>
																      <div class="modal-footer">
																        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
																      </div>
																    </div><!-- /.modal-content -->
																  </div><!-- /.modal-dialog -->
																</div><!-- /. Fin del modal -->
								                			</div>
								                		</div>
							                		</div>
				                				</div>
				                				<div class="col-md-6">
				                					<div class="panel panel-warning">
							                			<div class="panel-heading">
								                			<a data-toggle="collapse" data-parent="#paneles" href="#software-2">
								                			Software
								                			</a>
							                			</div>
							                			<div id="software-2" class="panel-collapse collapse">
								                			<div class="panel-body">
								                				<p>En cuanto al software, mencionar el sistema operativo del equipo a ser utilizado y los programas o software a ser implementados en el mismo como requisitos mínimos para llevar a cabo las actividades a realizar.</p>
								                				<!--Modal de ejemplos de software-->
								                				<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#ejemplos-2">
								                					Haz click aqui para ver algunos ejemplos de software
								                				</a>
								                				<div class="modal fade" id="ejemplos-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																  <div class="modal-dialog">
																    <div class="modal-content">
																      <div class="modal-header">
																        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																        <h4 class="modal-title" id="myModalLabel">Ejemplos de software</h4>
																      </div>
																      <div class="modal-body">
																        <ul>
																        	<li>
																        		Sistema Operativo.
																        	</li>
																        	<li>
																        		Antivirus.
																        	</li>
																        	<li>
																        		Software de Terceros.
																        	</li>
																        	<li>
																        		Navegador Web.
																        	</li>
																        </ul>
																      </div>
																      <div class="modal-footer">
																        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
																      </div>
																    </div><!-- /.modal-content -->
																  </div><!-- /.modal-dialog -->
																</div><!-- /.Fin del modal -->
								                			</div>
								                		</div>
							                		</div>
				                				</div>
				                			</div>
				                		</div>
			                		</div>

			                		<div class="panel panel-success">
			                			<div class="panel-heading">
				                			<a data-toggle="collapse" data-parent="#paneles" href="#factibilidad-economica-2">
				                			Factibilidad Económica
				                			</a>
			                			</div>
			                			<div id="factibilidad-economica-2" class="panel-collapse collapse">
				                			<div class="panel-body">
				                				<p>A continuación se presenta un estudio que dé como resultado la factibilidad económica del soporte técnico a usuarios y equipos. Se determinan los recursos para desarrollar, implantar, y mantener en operación el método a aplicar, haciendo una evaluación donde se puso de manifiesto el equilibrio existente entre los costos intrínsecos de la ejecución y los beneficios que se derivaron de éste, lo cual permita observar de una manera más precisa lo que se propone.</p>

				                				<div class="panel panel-warning">
						                			<div class="panel-heading">
							                			<a data-toggle="collapse" data-parent="#paneles" href="#analisis-costos-beneficios">
							                			Análisis Costos-Beneficios
							                			</a>
						                			</div>
						                			<div id="analisis-costos-beneficios" class="panel-collapse collapse">
							                			<div class="panel-body">
							                				<p>Este análisis permite hacer una comparación entre la relación costos de las actividades, y los costos que tendrían los instrumentos necesarios, conociendo de antemano los beneficios que la ciencia de la Informática ofrece.</p>
						 									<p>Se debe presentar un resumen de los costos intrínsecos de la propuesta y una lista de los costos que conlleva implantar el mismo, y los costos de operación. Luego a través de un análisis de valor se determinaron los beneficios que no serían monetarios o cuantificables.</p>
						 									<p>El resumen del análisis costos - beneficios se define a través de una comparación de los costos implícitos, tanto de la propuesta y su relación con los beneficios expresados en forma tangible. </p>
						 									<p>Ejemplo:</p>
						 									<ul>
						 										<li>
						 											<a href="#" data-toggle="modal" data-target="#costo-propuesta-actual">
						 											Costos de la propuesta actual
						 											</a>
						 										</li>
						 										<li>
						 											<a href="#" data-toggle="modal" data-target="#costos-generales">
						 											Costos Generales
						 											</a>
						 										</li>
						 										<li>
						 											<a href="#" data-toggle="modal" data-target="#costos-personal">
						 											Costo de Personal
						 											</a>
						 										</li>
						 									</ul>
						 									<!--Modales de costos-->

						 									<div class="modal fade" id="costo-propuesta-actual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
															  <div class="modal-dialog">
															    <div class="modal-content">
															      <div class="modal-header">
															        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															        <h4 class="modal-title" id="myModalLabel">Costo de la propuesta actual</h4>
															      </div>
															      <div class="modal-body">
															        ...
															      </div>
															      <div class="modal-footer">
															        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
															      </div>
															    </div><!-- /.modal-content -->
															  </div><!-- /.modal-dialog -->
															</div><!-- /.modal -->

															<div class="modal fade" id="costos-generales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
															  <div class="modal-dialog">
															    <div class="modal-content">
															      <div class="modal-header">
															        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															        <h4 class="modal-title" id="myModalLabel">Costos Generales</h4>
															      </div>
															      <div class="modal-body">
															        <p>Los gastos generales se encuentran representados o enmarcados por todos aquellos gastos en accesorios y el material de uso, necesarios para realizar los procesos o actividades.</p>
															        <table class="table">
															        	<thead>
															        		<tr>
															        			<th style="text-align:center">Gastos Generales</th>
															        			<th style="text-align:center">Costo Aproximado</th>
															        			<th style="text-align:center">Consumo Mensual/Semanal</th>
															        			<th style="text-align:center">Monto en Bolívares Total/Anual</th>
															        		</tr>
															        	</thead>
															        	<tbody>
															        		<tr>
															        			<td style="text-align:center">Papel de Impresoras</td>
															        			<td style="text-align:center">300</td>
															        			<td style="text-align:center">8</td>
															        			<td style="text-align:center">2.400 Bsf</td>
															        		</tr>
															        		<tr>
															        			<td style="text-align:center">Cartuchos de Impresora</td>
															        			<td style="text-align:center">800</td>
															        			<td style="text-align:center">4</td>
															        			<td style="text-align:center">3.200 Bsf</td>
															        		</tr>
															        		<tr>
															        			<td style="text-align:center">Sopladora</td>
															        			<td style="text-align:center">1000</td>
															        			<td style="text-align:center">No Aplica</td>
															        			<td style="text-align:center">1.000 Bsf</td>
															        		</tr>
															        	</tbody>
															        </table>
															      </div>
															      <div class="modal-footer">
															        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
															      </div>
															    </div><!-- /.modal-content -->
															  </div><!-- /.modal-dialog -->
															</div><!-- /.modal -->

															<div class="modal fade" id="costos-personal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
															  <div class="modal-dialog">
															    <div class="modal-content">
															      <div class="modal-header">
															        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															        <h4 class="modal-title" id="myModalLabel">Costo de Personal</h4>
															      </div>
															      <div class="modal-body">
															      	<p>En este tipo de gasto, incluye los generados por el recurso humano, bajo cuya responsabilidad directa está la operación y funcionamiento de la propuesta y que se muestra en la siguiente tabla:</p>
															      	<table class="table">
															      		<thead>
															      			<tr>
															      				<th style="text-align:center">Recurso Humano</th>
															      				<th style="text-align:center">Salario Mensual</th>
															      				<th style="text-align:center">Pago por actividad asignada</th>
															      			</tr>
															      		</thead>
															      		<tbody>
															      			<tr>
															      				<td style="text-align:center">Analista de Sistema</td>
															      				<td style="text-align:center">6.342.434 Bsf</td>
															      				<td style="text-align:center">Se determina por horas</td>
															      			</tr>
															      			<tr>
															      				<td style="text-align:center">Soporte Técnico</td>
															      				<td style="text-align:center">No Aplica</td>
															      				<td style="text-align:center">600 Bsf</td>
															      			</tr>
															      			<tr>
															      				<td style="text-align:center">Desarrollador</td>
															      				<td style="text-align:center">5.786.542 Bsf</td>
															      				<td style="text-align:center">Se determina por horas</td>
															      			</tr>
															      		</tbody>
															      	</table>
															      </div>
															      <div class="modal-footer">
															        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
															      </div>
															    </div><!-- /.modal-content -->
															  </div><!-- /.modal-dialog -->
															</div><!-- /.modal -->

						 									<!--Fin de modales de costos-->
							                			</div>
							                		</div>
							                	</div>
				                			</div>
				                		</div>
			                		</div>

			                		<div class="panel panel-success">
			                			<div class="panel-heading">
				                			<a data-toggle="collapse" data-parent="#paneles" href="#factibilidad-operativa-2">
				                			Factibilidad Operativa
				                			</a>
			                			</div>
			                			<div id="factibilidad-operativa-2" class="panel-collapse collapse">
				                			<div class="panel-body">
				                				<p>La Factibilidad Operativa permite predecir, si se pondrá en marcha la propuesta, aprovechando los beneficios que ofrece, a todos los usuarios involucrados con el mismo, ya sean los que interactúan en forma directa con este, como también aquellos que reciben información. Por otra parte, el correcto funcionamiento en cuestión, siempre estará supeditado a la capacidad de los implementadores.</p>
 												<p>La necesidad y deseo de una propuesta a una problemática, expresada por los usuarios y el personal involucrado con el mismo, llevó a la aceptación del proyecto, que de una manera más sencilla y amigable, cubra todos sus requerimientos, expectativas y proporciona la información en forma oportuna y confiable. Basándose en las entrevistas y conversaciones sostenidas con el personal involucrado se demostró que estos no representan ninguna oposición al proyecto o propuesta, por lo que es factible operacionalmente.</p>
 												<p>En el proceso de adiestramiento se detallan los aspectos de actualización de conocimientos y nuevas formas en el procesamiento de transacciones que represente la propuesta.</p>
 												<p>Con la finalidad de garantizar el buen funcionamiento la propuesta y que este impactará en forma positiva a los usuarios, el mismo fue desarrollado en forma estándar a los sistemas existentes la Institución donde se implementará. </p>
				                			</div>
				                		</div>
			                		</div>
	                					
	                			</div>
	                		</div>
                		</div>

        			</div>
        		</div>
                <!--Fin de contenido unidad-->
            </div>
            <div class="tab-pane" id="tab4">
                <br>
                <!--Contenido de la unidad-->
                <div class="panel panel-default">
        			<div class="panel-heading">
            			Plazos y Recursos
        			</div>
        			<div class="panel-body">
        				<p>Según Wikipedia. El plazo, es el tiempo establecido que ha de transcurrir para que se produzca un efecto o un determinado plan, usualmente el nacimiento o la extinción de un derecho subjetivo o el tiempo durante el que un contrato tendrá vigencia.</p>
						<p>Según Wikipedia. Un recurso es una fuente o suministro del cual se produce un beneficio. Normalmente, los recursos son material u otros activos que son transformados para producir beneficio y en el proceso pueden ser consumidos o no estar más disponibles.</p>

        				<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#determinacion-plazos">
	                			Determinación de los plazos o calendario de actividades. Elaboración de cronograma de actividades.
	                			</a>
                			</div>
                			<div id="determinacion-plazos" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				<ul>
	                					<li>
	                						<b>¿Qué es un cronograma?</b>: Un cronograma es un calendario de trabajo.
	                					</li>
	                					<li>
	                						<b>¿Para qué sirve?</b>: Estructura secuencial de actividades de investigación a realizar.
	                					</li>
	                					<li>
	                						<b>Ventajas e Inconvenientes</b>: Un cronograma nos ayuda a planificar con anticipación nuestras expectativas de trabajo, a organizarnos y hacer el proceso de trabajo más rápidamente. Pero si no seguimos nuestra planificación este no nos serviría.
	                					</li>
	                				</ul>
	                				
	                				<div class="panel panel-success">
			                			<div class="panel-heading">
				                			<a data-toggle="collapse" data-parent="#paneles" href="#pasos-cronograma">
				                			Pasos para elaborar un cronograma util
				                			</a>
			                			</div>
			                			<div id="pasos-cronograma" class="panel-collapse collapse">
				                			<div class="panel-body">
				                				<ul>
				                					<li>
				                						Determinar las actividades necesarias para realizarlo.
				                					</li>
				                					<li>
				                						Establecer la secuencia de las actividades sin olvidar cuales son obligatorias y cuales son optativas.
				                					</li>
				                					<li>
				                						Estimar el esfuerzo de cada actividad (horas-hombre), definir los recursos a disponer para cada actividad, y con esto calcular la duración de las tareas.
				                					</li>
				                					<li>
				                						Finalmente hay que revisar el cronograma a fin de: bajarlo a un calendario (teniendo en cuenta feriados, vacaciones e/o).
				                					</li>
				                				</ul>
				                			</div>
				                		</div>
			                		</div>
			                		
	                			</div>
	                		</div>
                		</div>

                		<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#determinacion-recursos">
	                			Determinación de los recursos necesarios: Técnicos, Materiales, Humanos
	                			</a>
                			</div>
                			<div id="determinacion-recursos" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				<p>Es esta sección se realizara una tabla o cuadro comparativo con los recursos recabados en la unidad anterior de Factibilidad. Cada item explicado brevemente conceptualmente.</p>
	                				<div class="panel panel-success">
			                			<div class="panel-heading">
				                			<a data-toggle="collapse" data-parent="#paneles" href="#ejemplo-determinacion">
				                			Ejemplo
				                			</a>
			                			</div>
			                			<div id="ejemplo-determinacion" class="panel-collapse collapse">
				                			<div class="panel-body">
				                				<img src="'.DIR_PAGES.'upload/images/trimestre2/unidad4/ejemplo-determinacion-recursos.png" class="col-xs-12 col-sm-12 col-md-10" />
				                			</div>
				                		</div>
			                		</div>
	                			</div>
	                		</div>
                		</div>

                		<div class="panel panel-info">
                			<div class="panel-heading">
	                			<a data-toggle="collapse" data-parent="#paneles" href="#presupuesto">
	                			Presupuesto: Descripción de los costos que acarrea los recursos necesarios para el proyecto
	                			</a>
                			</div>
                			<div id="presupuesto" class="panel-collapse collapse">
	                			<div class="panel-body">
	                				
	                				<div class="row">
	                					<div class="col-md-6">
	                						<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#definicion-proyecto">
						                			¿Qué es el presupuesto de un proyecto? 
						                			</a>
					                			</div>
					                			<div id="definicion-proyecto" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<p>Es el plan financiero estimado para un proyecto, para el cual se requiere administrar fondos. Este documento debe incluir los gastos en los que se prevé incurrir en un período de tiempo determinado, como también el ingreso que se generará durante el transcurso del proyecto. El presupuesto es un componente muy importante de la propuesta, ya que constituye la imagen financiera del proyecto. Un presupuesto bien concebido puede contribuir en gran medida a la comprensión del proyecto por parte de la institución donante.</p>
						                			</div>
						                		</div>
					                		</div>
	                					</div>
	                					<div class="col-md-6">
	                						<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#preparacion-presupuesto">
						                			Preparación del presupuesto
						                			</a>
					                			</div>
					                			<div id="preparacion-presupuesto" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<p>No es necesario que un contador prepare el presupuesto.</p>
						                				<p>No todas las organizaciones sin fines de lucro cuentan con un contador público que elabore los presupuestos de sus proyectos. Si este es el caso, la persona más adecuada para preparar el presupuesto del proyecto puede ser alguien que conozca el proyecto en profundidad, que sepa mucho sobre la organización y que tenga conocimientos financieros.</p>
						                			</div>
						                		</div>
					                		</div>
	                					</div>
	                				</div>
	                				<div class="row">
	                					<div class="col-md-6">
	                						<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#revision">
						                			Revisión
						                			</a>
					                			</div>
					                			<div id="revision" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<p>Durante la revisión de las propuestas, los donantes suelen comenzar por el presupuesto.</p>
						                			</div>
						                		</div>
					                		</div>
	                					</div>
	                					<div class="col-md-6">
	                						<div class="panel panel-success">
					                			<div class="panel-heading">
						                			<a data-toggle="collapse" data-parent="#paneles" href="#elementos-presupuesto">
						                			Elementos del presupuesto
						                			</a>
					                			</div>
					                			<div id="elementos-presupuesto" class="panel-collapse collapse">
						                			<div class="panel-body">
						                				<p>Entre los elementos típicos del presupuesto se encuentran la lista de gastos, como también el monto de la donación y los ingresos.</p>
						                				<p>Ejemplos</p>
						                				<ul>
						                					<li>
						                						Gastos
						                					</li>
						                					<li>
						                						Ingresos
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
        		</div>
                <!--Fin de contenido unidad-->
            </div>
        </div>
        <script>
        	$(document).ready( function() {
        		$("#")
        	});
        </script>
	';
	//salida html
	print $template->getPage('SESTUE | Soporte Técnico a Usuarios y Equipos II', $mensaje);

?>

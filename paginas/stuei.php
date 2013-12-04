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
			<h2>Soporte Técnico a Usuarios y Equipos I</h2>
		</div>
		<div class="row">
			<p>Bienvenido al primer módulo de SESTUE en el podrás encontrar los primeros pasos para llevar a cabo tu proyecto socio tecnológico.</p>
			<p>Antes de empezar a utilizar SESTUE te aconsejamos que primero conformes tu grupo de proyecto y conozcas a tu profesor de proyecto.</p>
		</div>
   	 	<div class="panel panel-success">
			<div class="panel-heading">
			Introducción
			</div>
			<div class="panel-body">
				<p>En este modulo deberás adquirir los conocimientos necesarios para abordar una comunidad, describirla y detectar sus necesidades.</p>
				<p>Además deberás aprender a plantear soluciones ante situaciones y problemas reales, relacionados con soporte técnico a usuarios y equipos.</p>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				¿Cómo abordar una comunidad?
			</div>
			<div class="panel-body">
				<p>Se refiere a la necesidad de efectuar una investigación de la situación actual de comunidad.</p>
				<p>Lo primero que tienes  que hacer es presentarte con tu grupo de proyecto a la comunidad o institución pública que hayas escogido. </p>
				<p>Recuerda: Que el proyecto Socio tecnológico debe ser llevado a cabo en un consejo comunal o en una institución pública como por ejemplo: tu universidad. </p>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
			¿Cómo realizar el levantamiento de información?
			</div>
			<div class="panel-body">
				<p>Una vez abordada la comunidad debes realizar un levantamiento de información ya sea a través de una entrevista, una encuesta o mediante la observación.</p>
				<div class="panel panel-default">
					<div class="panel-heading">
					La entrevista:
					</div>
					<div class="panel-body">
						<p>Una entrevista es un diálogo en el que la persona (entrevistador), generalmente un periodista hace una serie de preguntas a otra persona (entrevistado), con el fin de conocer mejor sus ideas, sus sentimientos o su forma de actuar.</p>
						<ul>
							<li><font class="text-primary">Ventajas:</font> La entrevista atribuye las respuestas directamente a un participante, el cual puede definirse por sus características y actitudes. En esta técnica se puede dar un intercambio libre de información sin ninguna presión social para estar de acuerdo o no con el grupo.
							</li>
							<li><font class="text-danger">Desventajas:</font> Reducen la profundidad de información con el entrevistado.
							</li>
						</ul>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
					La encuesta:
					</div>
					<div class="panel-body">
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
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
					La observación:
					</div>
					<div class="panel-body">
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
		<div class="panel panel-default">
			<div class="panel-heading">
			Cuantificar los datos y realizar el análisis
			</div>
			<div class="panel-body">
				<p>El análisis de datos es un proceso de inspeccionar, limpiar y transformar datos con el objetivo de resaltar información útil, lo que sugiere conclusiones, y apoyo a la toma de decisiones.</p>
				<p>En este paso debes analizar los resultados arrojados por la entrevista, encuesta o observación y realizar una conclusión para así poder tomar una decisión y saber qué solución ofrecer a la problemática o necesidad que presenta la comunidad.</p>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
			Organización por áreas de saberes: Hardware y Software.
			</div>
			<div class="panel-body">
				<p>Más allá de la popular definición hardware es lo que golpeas cuando falla el software, el Hardware son todos los componentes y dispositivos físicos y tangibles que forman una computadora como la CPU o la placa base, mientras que el Software es el equipamiento lógico e intangible como los programas y datos que almacena la computadora.</p>
				<div class="panel panel-info">
					<div class="panel-heading">
					Hardware
					</div>
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
				<div class="panel panel-warning">
					<div class="panel-heading">
					Software
					</div>
					<div class="panel-body">
						<p>Es el soporte lógico e  inmaterial que permite que la computadora pueda desempeñar tareas inteligentes, dirigiendo a los componentes físicos o hardware con instrucciones y datos a través de diferentes tipos de programas.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
			Tipos de proyectos: Locales, Regionales o Nacionales.
			</div>
			<div class="panel-body">
				<p>Una de las clasificaciones generales de los proyectos según su área de influencia son:</p>
				<div class="panel panel-default">
					<div class="panel-heading">
					Proyectos Locales
					</div>
					<div class="panel-body">
						<p>Son los tipos de proyectos que se enfocan en una sola localidad (comunidad, pueblo, ciudad, etc).</p>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
					Proyecto Regionales
					</div>
					<div class="panel-body">
						<p>Son los tipos de proyectos que se enfocan en 2 o más localidades.</p>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
					Proyectos Nacionales
					</div>
					<div class="panel-body">
						<p>Son los proyectos que se enfocan a nivel nacional, en otras palabras, para todo el país.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
			Algunos Organismos Apoyan la Ejecución de estos Proyectos.
			</div>
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-heading">
					Ministerio del Poder Popular para la Ciencia y Tecnología
					</div>
					<div class="panel-body">
						<p>El Gobierno Bolivariano ha colocado las herramientas de las tecnologías de la información y comunicación al servicio del pueblo venezolano. Esta visión soberana ha conseguido grandes logros en sólo una década: la recuperación de la Compañía Nacional de Teléfonos a manos del pueblo venezolano, la articulación de una vasta red de acceso a internet en sectores populares y el lanzamiento del primer satélite venezolano, colocando en lo más alto el nombre de nuestro Libertador Simón Bolívar.</p>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
					Plan Nacional de Alfabetización Tecnológica
					</div>
					<div class="panel-body">
						<p>Es uno de los esfuerzos del Gobierno Bolivariano para darle al Pueblo el poder de utilizar las tecnologías y el conocimiento. Integra las herramientas y plataformas que se han desarrollado como contenidos educativos, Infocentros, centros Bolivarianos de informática y telemática, aldeas universitarias, bibliotecas virtuales, entre otros.</p>
						<p>Una iniciativa de formación, enmarcada en la "Misión Ciencia". Como política de estado, su fin es lograr la capacitación básica de las comunidades en el uso de las nuevas tecnologías de información y comunicación, promoviendo el computador como herramienta que facilite las tareas del poder comunal.</p>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
					Centro Nacional de Tecnología e Información (CNTI)
					</div>
					<div class="panel-body">
						<p>El CNTI es una institución adscrita al Ministerio del Poder Popular para Ciencia, Tecnología e Industrias Intermedias que tiene como razón de ser potenciar los esfuerzos que en materia de informática se desarrollen en el Sector Gobierno y en las Comunidades Organizadas, con el fin de contribuir a la eficiencia y efectividad del Estado, así como impulsar el desarrollo y fortalecimiento de la capacidad nacional del sector de las Tecnologías de Información.</p>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
					Instituto Universitario de Tecnología del Estado Bolívar (IUTEB)
					</div>
					<div class="panel-body">
						<p>Institución Universitaria de excelencia académica que enmarcada en las políticas del Estado venezolano y teniendo como eje fundamental el bienestar del hombre, está destinada a formar las generaciones de profesionales en el sector técnico que requiere la región Guayana en particular y Venezuela en general, garantizando un alto nivel de desempeño en las funciones de Investigación y Extensión, con acciones específicas destinadas a vincularse con el sector productivo, de gestión local y de desarrollo comunal, para que de manera conjunta enfrentar los retos tecnológicos y socio- económicos que promuevan de manera sustentable y en armonía con el medio ambiente el desarrollo armónico de la región y el país.</p>					  
					</div>
				</div>
			</div>
		</div>
		';
	//salida html
	print $template->getPage('SESTUE | Soporte Técnico a Usuarios y Equipos I', $mensaje);
	
?>

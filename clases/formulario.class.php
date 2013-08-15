<?php
/* Clase para crear formularios
 * a forma de instacias en las paginas
 * como todos los elementos que los conforman
 */
class Formulario{
	//Variables
	private $cadenaHtml = "";
	private $nombre, $pagAccion, $metodoAplicado;
	//Funcion del constructor de la clase
	public function __construct( $nombre, $accion, $metodo, $clase, $id, $htmlExtra ){
		if(!$nombre) $nombre = "formulario";
		if(!$accion or !$metodo){
			$this->cadenaHtml .= '<font color="red">Formulario sin pagina de accion o sin metodo</font>';
		}
		else{
			$this->nombre = $nombre;
			$this->pagAccion = $accion;
			$this->metodoAplicado = $metodo;
			if($clase)
				$this->cadenaHtml .= '<form name="'.$this->nombre.'" action="'.$this->pagAccion.'" method="'.$this->metodoAplicado.'" class="'.$clase.'" ';
			else if($id)
				$this->cadenaHtml .= 'id="'.$id.'" ';
			else if($htmlExtra)
				$this->cadenaHtml .= $htmlExtra;
			$this->cadenaHtml .= '>';
		}
	}
	public function agregarHtml($html){
		$this->cadenaHtml .= $html;
	}
	public function ln($valor){
		if(!$valor)
			$this->cadenaHtml .= "<br>\n";
		for($i=0; $i<$valor; $i++){
			$this->cadenaHtml .= "<br>\n";
		}
	}
	public function tab($valor){
		if(!$valor)
			$this->cadenaHtml .= "\t";
		for($i=0; $i<$valor; $i++){
			$this->cadenaHtml .= "\t";
		}	
	}
	public function agregarLeyenda(){
		
	}
	public function agregarInput($tipo, $nombre, $valor, $mensaje, $clase, $id, $htmlExtra){
		if (!$nombre or !$tipo)
			$this->cadenaHtml .= '<font color="red">Campo sin nombre o sin tipo</font>';
		else{
			$this->cadenaHtml .= '<input type="'.$tipo.'" name="'.$nombre.'" ';
			if($valor)
				$this->cadenaHtml .= 'value="'.$valor.'" ';
			else if ($mensaje)
				$this->cadenaHtml .= 'placeholder="'.$mensaje.'" ';
			else if($clase) 
				$this->cadenaHtml .= 'class="'.$clase.'" ';
			else if($id)
				$this->cadenaHtml .= 'id="'.$id.'" ';
			else if($htmlExtra)
				$this->cadenaHtml .= $htmlExtra;
		}
		$this->cadenaHtml .= '/>';
	}
	public function agregarSelect($nombre, $tipo, $clase, $id, $htmlExtra){
		if (!$nombre)
			$this->cadenaHtml .= '<font color="red">Select sin nombre</font>';
		else if($tipo=="multiple")
			$this->cadenaHtml .= '<select name="'.$nombre.'" multiple ';
		else if($clase) 
			$this->cadenaHtml .= 'class="'.$clase.'" ';
		else if($id)
			$this->cadenaHtml .= 'id="'.$id.'" ';
		else if($htmlExtra)
			$this->cadenaHtml .= $htmlExtra;
		else
			$this->cadenaHtml .= '>';
	}
	public function agregarOpcSel($valor, $mensaje){
		if(!$valor)
			$this->cadenaHtml .= '<font color="red">Opcion sin valor o mensaje</font>';
		else if(!$mensaje)
			$this->cadenaHtml .= '<option value="'.$valor.'">'.$mensaje;
		else
			$this->cadenaHtml .= '<option value="'.$valor.'">'.$mensaje;
	}
	public function agregarRadioButton($nombre, $valor, $clase, $id, $htmlExtra){

	}
	public function agregarCheckBox($nombre, $valor, $clase, $id, $htmlExtra){

	}
	public function cerrarFormulario(){
		$this->cadenaHtml .= '</form>';
	}
	public function obtenerHtmlFormulario(){
		return $this->cadenaHtml;
	}
}
?>
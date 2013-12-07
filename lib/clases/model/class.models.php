<?php

/**
 * Descripcion de Db
 * @author Ramón Serrano <ramon_calle-88@hotmail.com>
 */

interface FuncionesDb {

    public function selectAll();

    public function selectExist($data = null);
}

class Actividades extends Db implements FuncionesDb {

    /**
     * Constructor
     * @param Sin parametros
     * Guardar una instancia de la clase Db
     */
    public function __construct() {
        parent::__construct();
    }

    public function selectAll() {
        $query = "SELECT * FROM t_proy_activ";
        return $this->select($query);
    }

    public function insertActividad($datosActividad = null) {
        if (!empty($datosActividad)) {
            if ($this->selectExist($datosActividad)) {
                return "existe";
            } else {
                $sql = "INSERT INTO t_proy_activ VALUES ( null, '$datosActividad[capitulo]', '$datosActividad[titulo]', '$datosActividad[contenido]' , NOW(), NOW())";
                if ($this->ejecutarSql($sql)) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            throw new Exception("La actividad no se creó: <b>No se enviaron los datos de la actividad</b>", 1);
        }
    }

    public function selectExist($actividad = null) {
        if ($actividad != null) {
            $query = "SELECT c_id_pk FROM t_proy_activ WHERE c_cap_perteneciente = '$actividad[capitulo]' AND c_actividad = '$actividad[titulo]' AND c_contenido = '$actividad[contenido]' ";
            return $this->select($query);
        } else {
            return false;
        }
    }

}

class PreguntasRespuestas extends Db implements FuncionesDb {

    public function __construct() {
        parent::__construct();
    }

    public function selectExist($dataPregResp = null) {
        if ($dataPregResp != null) {
            $query = "SELECT c_id_pk FROM t_preguntas_respuestas WHERE c_mod_perteneciente = '$dataPregResp[modulo]' AND c_pregunta = '$dataPregResp[pregunta]' AND c_respuestas = '" . serialize($dataPregResp["respuestas"]) . "' ";
            return $this->select($query);
        } else {
            return false;
        }
    }

    public function selectAll() {
        $query = "SELECT * FROM  t_preguntas_respuestas";
        return $this->select($query);
    }

    public function insertPregResp($dataPregResp = null) {
        if (!empty($dataPregResp)) {
            if ($this->selectExist($dataPregResp)) {
                return "existe";
            } else {
                $sql = "INSERT INTO t_preguntas_respuestas VALUES ( null, '$dataPregResp[pregunta]', '" . serialize($dataPregResp["respuestas"]) . "', '$dataPregResp[modulo]' , NOW() )";
                if ($this->ejecutarSql($sql)) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            throw new Exception("La pregunta no se creó: <b>No se enviaron los datos de la pregunta</b>", 1);
        }
    }

}

class Usuarios extends Db implements FuncionesDb{

    public function __construct(){
        parent::__construct();
    }

    public function selectAll(){

    }

    public function selectUsuario($alias = null, $password = null){
        $query = "SELECT c_alias_pk, c_nombres, c_apellidos, c_rol FROM t_usuarios WHERE c_alias_pk='$alias'";
        if($password != NULL)
            $query .= "AND c_clave = '$password'";
        return $this->select($query);
    }

    public function updateUsuario($alias = null, $name = null , $lastname = null){
        if(!empty($alias)){
            $query = "UPDATE 
                        t_usuarios 
                      SET 
                        c_nombres='$name', 
                        c_apellidos='$lastname' 
                      WHERE 
                        c_alias_pk = '$alias'";
            if($this->ejecutarSql($query))
                return true;
            else
                return false;
        }
    }

    public function selectExist($data = null){

    }
}
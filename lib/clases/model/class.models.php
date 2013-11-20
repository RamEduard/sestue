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
            $query = "SELECT c_id_pk FROM t_proy_activ WHERE c_cap_perteneciente = '$dataPregResp[capitulo]' AND c_actividad = '$dataPregResp[titulo]' AND c_contenido = '$dataPregResp[contenido]' ";
            return $this->select($query);
        } else {
            return false;
        }
    }

    public function selectAll() {
        $query = "SELECT * FROM  Estructura t_preguntas_respuestas";
        return $this->select($query);
    }

    public function insertPregResp($dataPregResp = null) {
        if (!empty($dataPregResp)) {
            if ($this->selectExist($dataPregResp)) {
                return "existe";
            } else {
                $sql = "INSERT INTO t_proy_activ VALUES ( null, '$dataPregResp[capitulo]', '$dataPregResp[titulo]', '$dataPregResp[contenido]' , NOW(), NOW())";
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

class Busqueda extends Db {

    public function __contruct() {
        parent::__construct();
    }

    public function selectBusqueda($palabras = null) {
        if ($palabras != null) {
            return $this->select(null);
        }
    }

}
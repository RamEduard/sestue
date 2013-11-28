<?php

/**
 * Descripcion de Db
 * @author Ramon Serrano
 * @email <ramon_calle-88@hotmail.com>
 */
class Db {

    private $server = SERVIDOR_BD;
    private $user = USUARIO_BD;
    private $password = PASS_BD;
    private $dataBase = BD;
    private $handle;

    /* La función construct es privada para evitar que el objeto pueda ser creado mediante new */

    protected function __construct() {
        $this->__connect();
    }

    /* Evitamos el clonaje del objeto. Patrón Singleton */

    private function __clone() {
        
    }

    //funcion encargada de crear, si es necesario, el objeto. Esta es la funcion que debemos
    //llamar desde fuera de la clase para instanciarla
    public static function getInstance() {
        return new self();
    }

    //funcion que realiza la conexion a la base de datos
    private function __connect() {
        $this->handle = mysql_connect($this->server, $this->user, $this->password) 
            or die('<pre style="margin:auto;background:rgba(0,0,0,.1)">'.mysql_error().'</pre>');
        mysql_select_db($this->dataBase, $this->handle) 
            or die('<pre style="margin:auto;background:rgba(0,0,0,.1)">'.mysql_error().'</pre>');
        @mysql_query("SET NAMES 'utf8'");
    }

    //funcion que realiza una consulta a la base de datos y devuelve el id
    public function ejecutarSql($sql) {
        $query = mysql_query($sql, $this->handle);
        return $query;
    }

    //funcion que realiza la consulta select
    public function select(/* Código SQL */ $sql) {
        $query = $this->ejecutarSql($sql);
        if (!mysql_num_rows($query))
            return false;
        else {
            $rows = mysql_num_rows($query);
            $colums = mysql_num_fields($query);
            for ($f_actual = 0; $f_actual < $rows; $f_actual++) {
                $array = mysql_fetch_array($query);
                for ($c_actual = 0; $c_actual < $colums; $c_actual++)
                    $data[$f_actual][$c_actual] = $array[$c_actual];
            }
            return $data;
        }
    }

}

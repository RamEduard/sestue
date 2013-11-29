<?php

/**
 * Description of UsuarioSesion
 * Archivo para saber si usuario esta logueado y 
 * permitir ingresar a otras paginas a traves de este archivo
 * @author Ramón Serrano <ramon_calle-88@hotmail.com>
 */
//
class UsuarioSesion {

    private $nameLastname, $user, $userLevel;

    private function __construct() {
        
    }

    public static function getInstance() {
        return new self();
    }

    public function setUsuarioSesion($user, $userLevel, $nameLastname) {
        if (!empty($user) or !empty($userLevel) or !empty($nameLastname)) {
            $this->user = $user;
            $this->nameLastname = $nameLastname;
            if( $userLevel == 1 )
                $this->userLevel = "admin";
            else
                $this->userLevel = "otro";
        }
    }

    public function getUsuarioSesion() {
        $now = date("Y-n-j H:i:s");
        $time_passed = (strtotime($now)-strtotime($_SESSION['date_time']));
        if($time_passed >= 600){
            session_destroy();
            header("location:index.sestue?time=off");
        }
        else{
            $_SESSION['date_time'] = $now;
            return array($this->user, $this->userLevel, $this->nameLastname/*, $_COOKIE['PHPSESSID']*/);
        }
    }
}

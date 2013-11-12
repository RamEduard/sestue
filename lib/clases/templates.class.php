<?php
/**
 * Description of BootstrapSestue
 * @author Ramon Serrano <ramon_calle-88@gmail.com
 */
class Templates{
    private function __clone() { }
    public function __construct() { }
    protected function getHost() {
        return "http://".$_SERVER["HTTP_HOST"]."/sestue/themes/";
    }
    protected function validateUser(){
        $user = $_SESSION['objeto'];
        if(!empty($user) or $user != NULL){
            return $user;
        }
        else
            return false;
    }
}
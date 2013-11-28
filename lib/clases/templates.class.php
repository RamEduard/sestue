<?php

/**
 * Description of BootstrapSestue
 * @author Ramon Serrano <ramon_calle-88@gmail.com
 */
class Templates {

    /**
     * @var $dir_path
     */
    protected $dir_path;

    /**
     * @var $html
     */
    protected $html;

    private function __clone() {
        
    }

    public function __construct() {
        
    }

    protected function getHost() {
        return "http://" . $_SERVER["HTTP_HOST"] . "/sestue/themes/";
    }

    protected function validateUser() {
        if(!empty($_SESSION['objeto'])){
            $user = $_SESSION['objeto'];
            return $user;
        }
        else
            return false;
    }

    public function getInstance($theme = null) {
        
        if ($theme == 'bootstrap') {
            return new BootstrapSestue();
        } else if ($theme == 'sb-admin') {
            return new BootstrapSbAdmin();
        } else {
            return new BootstrapSestue();
        }
    }

}
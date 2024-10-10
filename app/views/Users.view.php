<?php

use Smarty\Smarty;

require_once 'libs/smarty/libs/Smarty.class.php';

class UsersView{

    private $smarty;

    function __construct(){
    
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
        
    }

    function InicioSesion(){
        $this->smarty->display('usuarios.tpl');
    }

}
<?php

use Smarty\Smarty;

require_once 'libs/smarty/libs/Smarty.class.php';

class CategoriasView{

    private $smarty;

    public function __construct(){

        $this->smarty = new Smarty();
        $this->smarty->assign("base", BASE_URL);

    }

    public function ListadeCategorias($Categorias){

        $this->smarty->assign('categorias', $Categorias);
        $this->smarty->display('categorias.tpl');

    }


}
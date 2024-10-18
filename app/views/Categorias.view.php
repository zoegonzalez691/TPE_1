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

    public function Seleccionarcategoria($Categorias){
        $this->smarty->assign('categorias', $Categorias);
        $this->smarty->display('accionesCategorias.tpl');

    }

    public function SeleccionarAccion($categoria){
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('botonesAdmin.tpl');
    }

    public function Modificarcategoria($categoria){
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('modificarCat.tpl');


    }

    public function añadirCat(){
        $this->smarty->display('añadirCat.tpl');
    }


}
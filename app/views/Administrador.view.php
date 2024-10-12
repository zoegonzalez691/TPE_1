<?php
use Smarty\Smarty;

require_once 'libs/smarty/libs/Smarty.class.php';
class AdministradorView{
    private $smarty;

    public function __construct(){

        $this->smarty = new Smarty();
        $this->smarty->assign("base", BASE_URL);

    }

    public function mostrarPanel(){
        $this->smarty->display('panelAdministrador.tpl');
    }    

    public function mostrarProductos($productos){
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('administrarProductos.tpl');    
    }
}


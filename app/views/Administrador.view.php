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

 
    public function mostrarEliminado(){
        $this->smarty-> display('panelAdministrador.tpl');
    }

    public function  mostrarFormularioAgregar($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('formularioAgregar.tpl');
    }
    
    public function mostrarFormularioEditar($producto,$categorias){
        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('formularioEditar.tpl');    

    }

    public function MostrarCategorias($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('administrarCategorias.tpl');

    }

    public function Modificarcategoria($categoria){
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('modificarCat.tpl');

    }

    public function MensajeEliminar($mensaje){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('panelAdministrador.tpl');


    }

    public function MensajeAñadir($mensaje){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('panelAdministrador.tpl');


    }

    public function mostrarFormulario(){
        $this->smarty->display('añadirCat.tpl');
    }
    
    public function mostrarAdminProductos($productos){
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('administrarProductos.tpl');

    }
}

  



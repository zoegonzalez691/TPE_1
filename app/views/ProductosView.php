<?php
   require_once 'libs/smarty/libs/Smarty.class.php';
   class ProductosView {

      private $smarty;

      public function __construct(){
         $this->smarty = new Smarty\Smarty;
      }

      public function mostrarTodos($productos){
         $this->smarty->assign('productos', $productos);
         $this->smarty->display('productos.tpl');
      }
     
      //$this->smarty->assign('NombreVariable', valorVariable);
      //$this->display->display('nombreDelTemplate');
      
      public function MostrarProductos($Categoria, $productos) {
         $this->smarty->assign('categoria', $Categoria);
         $this->smarty->assign('productos', $productos);
         $this->smarty->display('productosCategoria.tpl');
     }

     public function  mostrarDestacados($destacados){
        $this->smarty->assign('destacados',$destacados);
        $this->smarty->display('destacados.tpl');
     }

     public function mostrarProductoPorID($producto){
        $this->smarty->assign('producto',$producto);
        $this->smarty->display('producto.tpl');

     }

     
}
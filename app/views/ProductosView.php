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

      public function MostrarProductos($Categoria, $productos){
         $this->smarty->assign('categoria', $Categoria);
         $this->smarty->assign('productos', $productos);
         $this->smarty->display('productosCategorias.tpl');

      }
}
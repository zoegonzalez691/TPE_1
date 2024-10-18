<?php
   require_once 'libs/smarty/libs/Smarty.class.php';
   class ProductosView {

      private $smarty;

      public function __construct(){
         $this->smarty = new Smarty\Smarty;
         $this->smarty->assign("base", BASE_URL);

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

     public function  mostrarDestacados($destacados, $logueado){
        $this->smarty->assign('destacados',$destacados);
        $this->smarty->assign('logged',$logueado);
        $this->smarty->display('destacados.tpl');
     }

     public function mostrarProductoPorID($producto){
        $this->smarty->assign('producto',$producto);
        $this->smarty->display('producto.tpl');

     }

     public function mostrarBoton(){
         $this->smarty->assign('nombre', ($_SESSION['NAME']));
         $this->smarty->display('destacados.tpl');

     }

     
}
<?php
    require_once "app/models/ProductosModel.php";
    require_once "app/views/ProductosView.php";


   class ProductosController {

     private $productosModel;
     private $productosView; 

    public function __construct(){
        $this->productosModel = new ProductosModel();
        $this->productosView = new ProductosView();
    }

    public function mostrarProductos(){
        //Pedir a la db todos los productos
        $productos= $this->productosModel->traerTodos();
        //Le paso a la vista los productos que recibo de la db
        $this->productosView->mostrarTodos($productos);
    }

    public function mostrarProductosDestacados(){
        //pedir a la db todos los productos destacados
        $destacados= $this->productosModel->traerDestacados();
        //le paso a la vista los productos destacados que recibo de la db
      //  $this->productosView-> mostrarDestacados($destacados);
    
    }

    public function VerProductosCategorias($Categoria){
        $productos = $this->productosModel->TraerProductosCategoria($Categoria);
        $this->productosView->MostrarProductos($Categoria, $productos);


    }




  }



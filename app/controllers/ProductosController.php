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
        $productos= $this->productosModel->traerTodos();
        $this->productosView->mostrarTodos($productos);
    }

    public function mostrarProductosDestacados(){
        
    
    }
  }



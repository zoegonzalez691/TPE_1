<?php
    require_once "app/models/ProductosModel.php";
    require_once "app/views/ProductosView.php";
    require_once 'Categorias.controller.php';
   class ProductosController {

     private $productosModel;
     private $productosView; 
     private $CategoriaController;

     private function checkLogin(){
      session_start();
      if(!isset($_SESSION['ID_USER'])){
          return false;
      }
      else {
          
          return true;
      }


  }

    public function __construct(){
        $this->productosModel = new ProductosModel();
        $this->productosView = new ProductosView();
        $this->CategoriaController = new CategoriasController();
    }

    public function mostrarProductos(){
        //Pedir a la db todos los productos
        $productos= $this->productosModel->traerTodos();
        //Le paso a la vista los productos que recibo de la db
        $this->productosView->mostrarTodos($productos);
    }

    public function mostrarProductosDestacados(){
        $logueado = $this->checkLogin();
        //pedir a la db todos los productos destacados
        $destacados= $this->productosModel->traerDestacados();
        //le paso a la vista los productos destacados que recibo de la db
        $this->productosView-> mostrarDestacados($destacados, $logueado);
    
    }

    public function  mostrarProductoPorID($id){
      $producto= $this->productosModel->traerPorID($id);
      $this->productosView->mostrarProductoPorID($producto);
     

    }

    public function VerProductosCategorias($Categoria) {
      $productos = $this->productosModel->TraerProductosCategoria($Categoria);
      $CategoriaName = $this->CategoriaController->VerNombreCategoria($Categoria);
      $this->productosView->MostrarProductos($CategoriaName, $productos);
      
    }

  public function BotonDeSesion(){
        $this->checkLogin();

        if(isset($_SESSION['NAME'])){
        $this->productosView->mostrarBoton($_SESSION['NAME']);

        }

        header('location:'. 'home');
    
    }
  

  }



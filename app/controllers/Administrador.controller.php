<?php
require_once 'app/views/Administrador.view.php';
require_once 'app/controllers/Categorias.controller.php';
require_once 'app/controllers/ProductosController.php';
require_once 'app/models/Administrador.model.php';
class AdministradorController{

private $model;
private $view;
private $categoriaController;
private $controllerProductos;


private function estaLogueado(){
    session_start();
   if (!isset($_SESSION['ID_USER'])) {
       header('Location: ' . BASE_URL . 'iniciosesion');
       die();
   }
   else if (($_SESSION['ROLE']) == "no"){
       header('Location: ' . BASE_URL . 'home' );

   }


}

public function __construct(){
    $this->categoriaController = new CategoriasController();
    $this->controllerProductos = new ProductosController();
    $this->view = new AdministradorView();
    $this->model= new AdministradorModel();
}



public function mostrarPanel(){
    $this->estaLogueado();
    $this->view->mostrarPanel();
}

public function administrarProductos(){
    $this->view->mostrarAdminProductos();
}



public function eliminarProducto($id){
    $this-> estaLogueado();
    $this-> model-> eliminarPorID($id);
    $this->view-> mostrarAdminProductos();
}


public function  mostrarFormularioAgregar(){
    $this-> estaLogueado();
    $categorias= $this->categoriaController->TraerCategorias();
    $this-> view-> mostrarFormularioAgregar($categorias);
  
}

public function agregarProducto(){
    $nombre = $_REQUEST['especie_animal'];
    $descripcion = $_REQUEST['descripcion'];
    $categoria = $_REQUEST['fk_categoria'];
    $imagen = $_REQUEST['imagen'];
    $productoNuevo= $this->model->guardarProducto($nombre,$descripcion,$imagen,$categoria);
    $this->view->mostrarProductos($productoNuevo);
}

public function editarProducto($id){
    $this-> estaLogueado();
    $categorias= $this->categoriaController->TraerCategorias();
    $producto = $this->model->traerPorID($id);
    $this->view->mostrarFormularioEditar($producto,$categorias);
}

 //   //Modifica una tarea
   // public function modificar(){
     //   $this->checkLogin();


        //Tomo datos del formulario
       // $id = $_REQUEST['id'];
        //$descripcion = $_REQUEST['descripcion'];
        //$terminada = $_REQUEST['terminada'];
        //$prioridad = $_REQUEST['prioridad'];

        //Envío datos al modelo
       // $this->model->updateTask($descripcion, $terminada, $prioridad, $id);
        
        //Redirecciono
        //header('Location: ' . BASE_URL . 'home');
   // }





    //Categorias 

    public function administrarCat(){
        $categorias = $this->categoriaController->TraerCategorias();
        $this->view->MostrarCategorias($categorias);

    }

    public function ModificarCategoria($categoria){
        $this->estaLogueado();
        $categoria = $this->categoriaController->TraerCategoria($categoria);
        $this->view->Modificarcategoria($categoria);
    }

    public function EnviarDatos() {
        $this->estaLogueado();
    
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
    
        $this->categoriaController->confirmarmodificacion($id, $nombre, $descripcion);
    
        header('location:' . 'panel');
    }

    public function EliminarCategoria($categoria){
        $this->estaLogueado();
        $mensaje =  $this->categoriaController->EliminarCategoria($categoria);

        $this->view->MensajeEliminar();

    }

    public function crearCategoria(){
        $this->view->mostrarFormulario();
    }

    public function añadirCategoria(){
        $this->estaLogueado();

        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];

        $mensaje = $this->categoriaController->añadirCategoria($nombre, $descripcion);
        $this->view->MensajeAñadir($mensaje);
        
    }
    
    
}




















?>
<?php
require_once 'app/views/Administrador.view.php';
<<<<<<< HEAD
require_once 'app/controllers/ProductosController.php';
require_once 'app/controllers/Categorias.controller.php';
require_once 'app/models/Administrador.model.php';



=======
require_once 'app/controllers/Categorias.controller.php';
require_once 'app/controllers/ProductosController.php';
require_once 'app/models/Administrador.model.php';
>>>>>>> 2ea999330455eff6cadfd3cb901b57f3c9d55d95
class AdministradorController{

private $model;
private $view;
private $categoriaController;
<<<<<<< HEAD
private $productoController;
=======
private $controllerProductos;
>>>>>>> 2ea999330455eff6cadfd3cb901b57f3c9d55d95


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
    $productos= $this->controllerProductos->traerProductos();
    $this->view->mostrarAdminProductos($productos);
}

public function eliminarProducto($id){
     $this-> model-> eliminarPorID($id);
}   
   

public function  mostrarFormularioAgregar(){
    $this-> estaLogueado();
    $categorias= $this->categoriaController->TraerCategorias();
    $this-> view-> mostrarFormularioAgregar($categorias);
  
}

public function agregarProducto(){
    $nombre = $_POST['especie_animal'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['fk_categoria'];
    $imagen = $_POST['imagen'];
    $productoNuevo= $this->model->guardarProducto($nombre,$descripcion,$imagen,$categoria);
    $this->controllerProductos->mostrarProductos($productoNuevo);
}

public function editarProducto($id){
    $this-> estaLogueado();
    $categorias= $this->categoriaController->TraerCategorias();
    $producto = $this->model->traerPorID($id);
    $this->view->mostrarFormularioEditar($producto,$categorias);
}


public function administrarCat(){
    $categorias = $this->categoriaController->TraerCategorias();
    $this->view->MostrarCategorias($categorias);

}

public function ModificarCategoria($categoria){
    $this->estaLogueado();
    $categoria = $this->model->TraerCategoria($categoria);
    $this->view->Modificarcategoria($categoria);
}







 







<<<<<<< HEAD
=======
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
    
>>>>>>> 2ea999330455eff6cadfd3cb901b57f3c9d55d95
    
}




















?>
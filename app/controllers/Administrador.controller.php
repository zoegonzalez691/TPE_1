<?php
require_once 'app/views/Administrador.view.php';
require_once 'app/models/ProductosModel.php';
class AdministradorController{

private $model;
private $view;

public function __construct(){
    $this->model = new CategoriasModel();
    $this->model = new ProductosModel();
    $this->view = new AdministradorView();
    $this-> estaLogueado();

}

public function estaLogueado(){
    session_start();
    if (!isset($_SESSION['ID_USER'])) {
        header('Location: ' . BASE_URL . 'iniciosesion');
        die();
    }
    else if (($_SESSION['ROLE']) == "no"){
        header('Location: ' . BASE_URL . 'home' );

    }


}

public function mostrarPanel(){
    $this->view->mostrarPanel();
}

public function administrarProductos(){
    $productos= $this-> model-> traerTodos();
    $this-> view-> mostrarProductos($productos);
}

}

?>
<?php

require_once 'app/models/Users.model.php';
require_once 'app/views/Users.view.php';
require_once 'app/controllers/ProductosController.php';

class UsersController{

    private $model;
    private $view;
    private $productos;

    function __construct(){
        $this->model = new UsersModel();
        $this->view = new UsersView();
        $this->productos = new ProductosController();

    }

    public function VerUsuario(){
        $this->view->InicioSesion();
      
    }

    public function autenticarUsuario(){
        $nombre = $_REQUEST['nombre'];
        $contraseña = $_REQUEST['password'];
    
        $usuario = $this->model->GetUsuario($nombre);
    
        if ($usuario && password_verify($contraseña, $usuario->contraseña)) {

            session_start();
           
            $_SESSION['NAME'] = $usuario->nombre;
            $_SESSION['IS_LOGGED'] = true;
            $_SESSION['ID_USER'] = $usuario->usuario_id;
            $_SESSION['EMAIL'] = $usuario->mail;
            $_SESSION['ROLE'] = $usuario->es_admin;

          header('location:' . 'home');
        } 
        else {
            echo "no se pudo autenticar";

        }

    }

    public function cerrarSesion(){

        session_start();
        session_destroy();
        header("Location:" . 'login');
        
    }

   

}
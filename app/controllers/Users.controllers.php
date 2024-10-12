<?php

require_once 'app/models/Users.model.php';
require_once 'app/views/Users.view.php';

class UsersController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new UsersModel();
        $this->view = new UsersView();

        
    }

    public function VerUsuario(){
        $this->view->InicioSesion();
      
    }

    public function autenticarUsuario(){
        $nombre = $_REQUEST['nombre'];
        $contraseña = $_REQUEST['password'];
    
        $usuario = $this->model->GetUsuario($nombre);
    
        if ($usuario && password_verify($contraseña, $usuario->contraseña)) {
            echo "inicio exitoso";
        } else {
            echo "no se pudo autenticar";
        }
    }

    public function esAdministrador(){
        $nombre = $_REQUEST['nombre'];
        $contraseña = $_REQUEST['password'];
        $usuario= $this-> model-> GetUsuario($nombre);

        
        if ($usuario-> es_admin == "si"){
            echo "es admin";
        

            session_start();

            $_SESSION["id"]= $usuario-> usuario_id;
            $_SESSION["nombre"]= $usuario-> nombre;

            header('Location: ver');
        }
        else{
            $this->view->InicioSesion();
            echo "no es admin";
        }
    }
    






}
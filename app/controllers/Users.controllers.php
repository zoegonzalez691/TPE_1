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
            if(session_status()!= PHP_SESSION_ACTIVE){
                session_start();
            }
            $_SESSION['IS_LOGGED'] = true;
            $_SESSION['ID_USER'] = $usuario->usuario_id;
            $_SESSION['EMAIL'] = $usuario->mail;
            $_SESSION['ROLE'] = $usuario->es_admin;

            if($_SESSION['ROLE'] == "si"){
                header("Location:" . BASE_URL .'panel');
            } 
            else{
                header("Location:" . BASE_URL .'home');

            }
         
        } 
        else {
            echo "no se pudo autenticar";
        }
    }

    






}
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







}
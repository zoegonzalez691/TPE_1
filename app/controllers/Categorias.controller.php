<?php 

require_once 'app/models/Categorias.model.php';
require_once 'app/views/Categorias.view.php';

    Class CategoriasController{

        private $model;
        private $view;

        public function __construct(){

            $this->model = new CategoriasModel();
            $this->view = new CategoriasView();

        }

        public function MostrarCategorias(){
            $categorias = $this->model->getCategorias();
            $this->view->ListadeCategorias($categorias);
        }




    }
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

        public function VerNombreCategoria($id) {
            $categoria = $this->model->TraerCategoria($id);
            if ($categoria) {
                return $categoria->especie_animal;
            } else {
                return 'Sin nombre'; 
            }
        }
        

    }
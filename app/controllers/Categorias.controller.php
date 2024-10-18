<?php 

require_once 'app/models/Categorias.model.php';
require_once 'app/views/Categorias.view.php';

    Class CategoriasController{

        private $model;
        private $view;

        private function checkLogin(){
            session_start();
            if(array_key_exists('IS_LOGUED', $_SESSION) && $_SESSION['IS_LOGUED'] && ($_SESSION['ROLE'] == "si")){
                return true;
            }

            header('location:'. BASE_URL . 'home');

        }

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


        public function SeleccionarCategoria(){
            $this->checkLogin();
            $categorias = $this->model->getCategorias();
            $this->view->Seleccionarcategoria($categorias);

        }

        public function EncontrarCategoria(){
            $this->checkLogin();
            $Encontrar = $_REQUEST('opciones');
            $categoria = $this->model->EncontrarCategoriaByName($Encontrar);
            $this->view->SeleccionarAccion($categoria);
    
        }

        public function modificarCategoria($id){
            $this->checkLogin();
            $categoria = $this->model->TraerCategoria($id);
            $this->view->Modificarcategoria($categoria);
        }

        public function ModificarDatos(){
            $this->checkLogin();
            $id = $_REQUEST('id');
            $especie_animal = $_REQUEST('nombre');
            $descripcion = $_REQUEST('descripcion');

            $this->model->ModificarCat($id, $especie_animal, $descripcion);

        }

        public function eliminarCategoria($id){
            $this->checkLogin();
            $this->model->eliminarCategoria($id);
        }

        public function añadirCategoria(){
            $this->checkLogin();
            $this->view->añadirCat();
        }

        public function subirDatos(){
            $this->checkLogin();
            $nombre = $_REQUEST("nombre");
            $descripcion = $_REQUEST("descripcion");

            $this->model->crearCategoria($nombre, $descripcion);


        }
    
        

    }
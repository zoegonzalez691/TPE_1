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

    
        public function TraerCategorias(){
            $categorias = $this->model->getCategorias();
            return $categorias;
        }
    
        public function traerCategoria($categoria){
            $CategoriaCompleta = $this->model->EncontrarCategoriaByName($categoria);
            
            return $CategoriaCompleta;

        }
        
        public function confirmarmodificacion($id, $nombre, $descripcion){
            $this->model->ModificarCat($id, $nombre, $descripcion);
        }

        public function EliminarCategoria($categoria){
            $completado = $this->model->EliminarCategoria($categoria);

            if($completado){
                return "Se elimino la categoria exitosamente";
            }else{
                return "No se puedo eliminar la categoria porque tiene productos asociados";
            }

        }

        public function añadirCategoria($nombre, $descripcion){
            $completado = $this->model->crearCategoria($nombre, $descripcion);
            if($completado){
                return "Se creo la categoria exitosamente";
            }else{
                return "No se pudo crear la categoria";
            }

        }

    }
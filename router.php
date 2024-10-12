<?php
    require_once "app/controllers/ProductosController.php";
    require_once 'app/controllers/Categorias.controller.php';
    require_once 'app/controllers/Users.controllers.php';
    require_once 'app/controllers/Administrador.controller.php';


    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
   
    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);
  
    switch ($parametros[0]) {
        //acciones publicas de la pagina 
        case 'home':
            $controller = new ProductosController(); 
            $controller->mostrarProductosDestacados();
       break;
       case 'productos':
            if(isset($parametros[1])){
                $controller= new ProductosController();
                $controller-> mostrarProductoPorID($parametros[1]);
            }
            else{
             $controller = new ProductosController(); 
             $controller->mostrarProductos();
            }
        break;
        case 'categorias':
            if (isset($parametros[1])){
                $controller = new ProductosController(); 
                $controller->VerProductosCategorias($parametros[1]);
            } else{
                $controller = new CategoriasController();
                $controller->MostrarCategorias();
            }
        break;
        case 'iniciosesion':
            $controller = new UsersController();
            $controller->VerUsuario();
        break;
        case 'autenticar':
            $controller = new UsersController();
            $controller->autenticarUsuario();
        break;
        case'panel':
            if(isset($parametros[1])){
              if($parametros[1]== 'productos'){
                $controller= new AdministradorController();
                $controller-> administrarProductos();
              }
            }
            else{
            $controller = new AdministradorController();
            $controller-> mostrarPanel();
            }
        break;    
        
        default:;
        break;
    }
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
        case 'login':
            $controller = new UsersController();
            $controller->VerUsuario();
        break;
        case 'autenticar':
            $controller = new UsersController();
            $controller->autenticarUsuario();
        break;
        case'panel':
             $controller= new AdministradorController();
             $controller-> mostrarPanel(); 
            if(isset($parametros[1])){
                if($parametros[1]== 'productos'){
                    $controller= new AdministradorController();
                    $controller-> administrarProductos();
                }
               else if($parametros[1] == 'categorias'){
                    $controller = new AdministradorController();
                    $controller->administrarCat();
                }
            }
        break;  
        case 'formularioAgregar':
            $controller= new AdministradorController();
            $controller-> mostrarFormularioAgregar();
        break; 
        case 'guardarProducto': 
        $controller= new AdministradorController();
        $controller-> agregarProducto();
        break;
        case 'eliminarProducto':
        $controller= new AdministradorController();
        $controller-> eliminarProducto($parametros[1]);
        break;
        case 'editarProducto':
        $controller= new AdministradorController();
        $controller->editarProducto($parametros[1]);
        break;
        case 'logout':
            $controller = new UsersController();
            $controller->cerrarSesion();
        break;
        case 'ElegirCat':
            $controller = new CategoriasController();
            $controller->EncontrarCategoria();
        break;
        case 'ModificarCategoria':
            if(isset($parametros[1])){
                $controller = new CategoriasController();
                $this->controller->modificarCategoria($parametros[1]);
            }
        break;
        case 'ModificarDatos':
            $controller = new CategoriasController();
            $this->controller->ModificarDatos();
        break;
        case 'EliminarCategoria':
            if(isset ($parametros[1])){
                $controller = new CategoriasController();
                $this->controller->eliminarCategoria($parametros[1]);
            }
        break;
        case 'AgregarCategoria':
            $controller = new CategoriasController();
            $controller->añadirCategoria();
        break;
        case 'SubirDatos':
            $controller = new CategoriasController();
            $controller->subirDatos();
        break;
        break; 
        
        
        default:;
        break;
    }
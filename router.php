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
        //Loguear Usuario
        case 'login':
            $controller = new UsersController();
            $controller->VerUsuario();
        break;
        case 'autenticar':
            $controller = new UsersController();
            $controller->autenticarUsuario();
        break;
        case 'logout':
            $controller = new UsersController();
            $controller->cerrarSesion();
        break;
        //Acciones administrador
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
        case 'agregarProducto':
            $controller= new AdministradorController();
            $controller-> mostrarFormularioAgregar();
        break; 
        case 'guardarProducto': 
            $controller= new AdministradorController();
            $controller-> agregarProducto();
        break;
        case 'eliminarProducto':
            $controller= new AdministradorController();

            if(isset($parametros[1])){
                $controller-> eliminarProducto($parametros[1]);
            }
        break;
        case 'editarProducto':
        $controller= new AdministradorController();
        $controller->editarProducto($parametros[1]);
        break;
        case 'logout':
            $controller = new UsersController();
            $controller->cerrarSesion();
<<<<<<< HEAD
          //  else{
            //$controller = new AdministradorController();
            //$controller-> mostrarPanel();
            //}
=======
>>>>>>> 2ea999330455eff6cadfd3cb901b57f3c9d55d95
        break;    
        case 'ModificarCategoria':
            if(isset ($parametros[1])){
                $controller = new AdministradorController();
                $controller->ModificarCategoria($parametros[1]);
            };
<<<<<<< HEAD
        break;
        case 'eliminarCat':
            $controller = new AdministradorController();
            if($parametros[1]){
                $this->controller->EliminarCategoria($parametros[1]);
            };
        break;
        case 'AñadirCat': 
            $controller = new AdministradorController();
            if($parametros[1]){
            
            
            $this->controller->añadirCat();
            }
        break;
       
        
        case 'ModificarDatos':
            $controller = new CategoriasController();
            $this->controller->ModificarDatos();
=======
>>>>>>> 2ea999330455eff6cadfd3cb901b57f3c9d55d95
        break;
        case 'EliminarCategoria':
            if(isset($parametros[1])){
                $controller = new AdministradorController();
                $controller->EliminarCategoria($parametros[1]);
            };
        break;
        case 'AñadirCategoria': 
            $controller = new AdministradorController();
            $controller->crearCategoria();
           
        break;
        case 'actualizar':
            $controller = new AdministradorController();
            $controller->EnviarDatos();
        break;
        case 'agregar':
            $controller = new AdministradorController();
            $controller->añadirCategoria();
<<<<<<< HEAD
        break;
        case 'SubirDatos':
            $controller = new CategoriasController();
            $controller->subirDatos();
        break;
       
    }
?>
=======
        break;       
        default:;
        break;
    
}
>>>>>>> 2ea999330455eff6cadfd3cb901b57f3c9d55d95

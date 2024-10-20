<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href={$base}> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href=	"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pet Shop</title>

</head>
<body>
<header class="headerpagina">
        <h1 id="titulo_principal">Pet Shop</h1>
        <ul  class="nav nav-tabs">
        <li  class="nav-item">
           <a href="home" class="nav-link"><button class="btn btn-dark">Destacados</button></a>
        </li> 
        <li class="nav-item">  
           <a href="categorias" class="nav-link"><button class="btn btn-dark">Categorias</button></a>
        </li>   
        <li class="nav-item">
           <a href="productos" class="nav-link"><button class="btn btn-dark">Mas Productos</button></a>
        </li>   
        {if {$logged}}
        <li class="nav-item">
        <a href= 'logout' class="nav-link"><button class="btn btn-dark">Logout</button></a>
        </li>
        <li class="nav-item">
        <a href= 'panel' class="nav-link"><button class="btn btn-dark">Panel de Administrador</button></a>
        </li>
        
        {else}
        <li class="nav-item">
        <a href='login' class="nav-link"><button class="btn btn-dark">Login</button></a>
        </li>
       {/if} 
         </ul> 
</header>
  


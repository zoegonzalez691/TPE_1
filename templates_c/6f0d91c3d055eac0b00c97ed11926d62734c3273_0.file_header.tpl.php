<?php
/* Smarty version 5.4.1, created on 2024-10-11 14:45:18
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67091dde677ea5_26479169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f0d91c3d055eac0b00c97ed11926d62734c3273' => 
    array (
      0 => 'header.tpl',
      1 => 1728650715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67091dde677ea5_26479169 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xamppp\\htdocs\\web_2\\TPE_1\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href=<?php echo $_smarty_tpl->getValue('base');?>
> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pet Shop</title>
</head>
<body>

<header class="headerpagina">
        <h1 id="titulo_principal">Pet Shop</h1>
        <ul class="navegador">
           <a href="home"> <li>Destacados</li></a>
           <a href="categorias"> <li>Categorias</li></a>
           <a href="productos"> <li>Mas Productos</li></a>
           <a href="iniciosesion"> <li>Iniciar sesión</li></a>
        </ul>
    </header>
  

<?php }
}

<?php
/* Smarty version 5.4.1, created on 2024-10-11 01:32:26
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6708640a027c02_18028418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f0d91c3d055eac0b00c97ed11926d62734c3273' => 
    array (
      0 => 'header.tpl',
      1 => 1728603143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6708640a027c02_18028418 (\Smarty\Template $_smarty_tpl) {
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
<header>
        <h1>Pet Shop</h1>
        <ul>
           <a href="home"> <li>Destacados</li></a>
           <a href="categorias"> <li>Categorias</li></a>
           <a href="productos"> <li>Mas Productos</li></a>
           <a href="iniciosesion"> <li>Iniciar sesión</li></a>
        </ul>
    </header>

<?php }
}

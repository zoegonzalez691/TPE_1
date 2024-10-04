<?php
/* Smarty version 5.4.1, created on 2024-10-05 01:08:34
  from 'file:productos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_670075725fcc97_15165487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4222c675235f070ba24f7c3d49664553bb9e889e' => 
    array (
      0 => 'productos.tpl',
      1 => 1728082440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_670075725fcc97_15165487 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xamppp\\htdocs\\web_2\\TPE_1\\templates';
?>    <?php $_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('productos'), 'producto');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('producto')->value) {
$foreach0DoElse = false;
?>
		<ul>
			<li><?php echo $_smarty_tpl->getValue('producto')->nombre;?>
</li>
			<li><?php echo $_smarty_tpl->getValue('producto')->descripcion;?>
</li>
            <li><?php echo $_smarty_tpl->getValue('producto')->imagen;?>
</li>
            <li><?php echo $_smarty_tpl->getValue('producto')->fk_categoria;?>
</li>
            <li><?php echo $_smarty_tpl->getValue('producto')->precio;?>
</li>
            <li><?php echo $_smarty_tpl->getValue('producto')->imagen;?>
</li>
        </ul>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php }
}

{include 'header.tpl'}

<form id="formulario" action="" method="post">
    <label>Seleccione categoría</label>
    <select id="opciones" name="opciones">
        {foreach item=categoria from=$categorias}
            <option value="{$categoria->especie_animal}">{$categoria->especie_animal}</option>
        {/foreach}
    </select>

    <button type="button" id="btnModificar">Modificar Categorías</button>
    <button type="button" id="btnEliminar">Eliminar Categoría</button>
</form>

<a href='AñadirCategoria'><button>Agregar Categoría</button></a>

<script type="text/javascript" src="javascript/botones.js"></script>

{include 'footer.tpl'}

<div class="d-grid gap-2">
<a href='AñadirCategoria'><button class="btn btn-primary">Agregar Categoría</button></a>
</div>
<form id="formulario" action="" method="post" class="mostrar">
    <label>Seleccione categoría</label>
    <select id="opciones" name="opciones" class="form-select">
        {foreach item=categoria from=$categorias}
            <option value="{$categoria->especie_animal}"  selected >{$categoria->especie_animal}</option>
        {/foreach}
    </select>

    <button type="button" id="btnModificar" class="btn btn-secondary">Modificar Categorías</button>
    <button type="button" id="btnEliminar" class="btn btn-danger">Eliminar Categoría</button>
</form>



<script type="text/javascript" src="javascript/botones.js"></script>

{include 'footer.tpl'}

{include 'header.tpl'}

<form action="ElegirCat" method="post">
        <label>Seleccione categoria</label>
        <select id="opciones" name="opciones">

        {foreach item=categoria from=$categorias}
            <option value="{$categoria->especie_animal}">{$categoria->especie_animal}</option>
        {/foreach}
        </select>

       <a href='ModificarCategoria'><button>Modificar Categorias</button></a>
       <a href='EliminarCategoria'><button>Eliminar Categoria</button></a>
       <a href='AgregarCategoria'><button>Agregar Categoria</button></a>

    </form>

{include 'footer.tpl'}
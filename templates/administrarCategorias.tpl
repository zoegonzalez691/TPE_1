{include 'header.tpl'}

<form action="" method="post">
        <label>Seleccione categoria</label>
        <select id="opciones" name="opciones">

        {foreach item=categoria from=$categorias}
            <option value="{$categoria->especie_animal} id="Animal">{$categoria->especie_animal}</option>
        {/foreach}
        </select>

       <a href='ModificarCategoria'><button id='ModificarCategoria'>Modificar Categorias</button></a>
       <a href='EliminarCategoria'><button id='EliminarCategoria'>Eliminar Categoria</button></a>
      
    </form>

     <a href='AgregarCategoria'><button>Agregar Categoria</button></a>


    <script type="text/javascript" src="javascript/botones.js"></script>


{include 'footer.tpl'}
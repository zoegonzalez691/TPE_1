{include 'header.tpl'}

<h1>Formulario para agregar un producto</h1>

<form action="guardarProducto" method="POST" enctype="multipart/form-data" > 
  <label for="nombre"> Nombre </label> 
    <input name="nombre" type="text">

   <label for="descripcion"> Descripcion </label> 
    <input name="descripcion" type="text">

  <label for="precio">Precio </label> 
    <input name="precio" type="text">


 <label for="destacado">Destacado</label> 
   <select name="destacado">
   <option value="1">Si</option>
   <option value="0">No</option>
   </select>
<div>
 <label for="imagen"> URL imagen </label> 
    <input name="imagen" type="file" id="subir_imagen">
</div>
  <label for="fk_categoria"> Categoria </label> 
    <select name="fk_categoria">
    {foreach item=categoria from= $categorias}
        <option value="{$categoria->id_categoria}">{$categoria->especie_animal} </option>
    {/foreach}
    </selec>
  
  <input type="submit" value="Guardar">

</form>
{include 'footer.tpl'}

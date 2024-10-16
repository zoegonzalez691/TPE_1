{include 'header.tpl'}

<h1>Formulario para agregar un producto</h1>

<form action="panel/productos/agregar/guardar" method="POST" > <!-- Action -> la ruta en mi router.php que ejecuta la funcion de guardar en la BBDD el registro , ejemplo: /panel/productos/agregar/guardar -->

  <label for="especie_animal"> Nombre </label> 
    <input name="especie_animal" type="text">

   <label for="descripcion"> Descripcion </label> 
    <input name="descripcion" type="text">

   <label for="imagen"> URL imagen </label> 
    <input name="imagen" type="text">

  <label for="fk_categoria"> Categoria </label> 
    <select name"fk_categoria">
    <!-- 1. pedirle al modelo todas las categorias. y pasarselas a esta vista-->

      {foreach item=categoria from= $categorias}

      <option value="{$categoria->id_categoria}">{$categoria->especie_animal} </option>
      {/foreach}
    </selec>
  <a href=""<input type="submit" value="Guardar">





</form>
{include 'footer.tpl'}

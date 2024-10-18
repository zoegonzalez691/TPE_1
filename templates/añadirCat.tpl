{include 'header.tpl'}

<form action='SubirCat' method='post'>
<label>Nombre</label>
<input type="text" name="nombre" placeholder="Inserte nombre de la categoria">
<label>Descripcion</label>
<input type="text" name="descrpcion" placeholder="Descripcion de la categoria">
<input type="submit" value="Añadir">
</form>

{include 'footer.tpl'}
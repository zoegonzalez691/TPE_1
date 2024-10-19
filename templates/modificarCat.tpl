{include 'header.tpl'}

<form action="actualizar" method="post">
    <label>Nombre</label>
    <input type="text" value="{$categoria->especie_animal}" name="nombre">
    
    <label>Descripcion</label>
    <input type="text" value="{$categoria->descripcion}" name="descripcion">
    
    <input name="id" value="{$categoria->id_categoria}" type="hidden">
    <input type="submit">
</form>


{include 'footer.tpl'}
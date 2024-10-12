{include 'header.tpl'}
	
{foreach item=destacado from=$destacados}
<div class="mostrar">
	<ul>
		<li>{$destacado->nombre}</li>
		<li>{$destacado->descripcion}</li>
        <li>{$destacado->imagen}</li>
        <li>{$destacado->fk_categoria}</li>
        <li>{$destacado->precio}</li>
        <li>{$destacado->imagen}</li>
    </ul>
</div>
{/foreach}

{include 'footer.tpl'}
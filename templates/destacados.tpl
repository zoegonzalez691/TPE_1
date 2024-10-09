{include 'header.tpl'}
	
{foreach item=destacado from=$destacados}
	<ul>
		<li>{$destacado->nombre}</li>
		<li>{$destacado->descripcion}</li>
        <li>{$destacado->imagen}</li>
        <li>{$destacado->fk_categoria}</li>
        <li>{$destacado->precio}</li>
        <li>{$destacado->imagen}</li>
    </ul>
{/foreach}

{include 'footer.tpl'}
{include 'header.tpl'}
	
{foreach item=destacado from=$destacados}
<div class="mostrar">
	<ul>
		<li>{$destacado->nombre}<a href="productos/{$destacado->id_producto}">Ver mas</a></li>
		<li>{$destacado->imagen}</li>
    </ul>
</div>
{/foreach}

{include 'footer.tpl'}
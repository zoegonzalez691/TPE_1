    {include 'header.tpl'}
	{foreach item=producto from=$productos}
    <div class="mostrar">
		<ul>
			<li>{$producto->nombre} <a href="productos/{$producto->id_producto}">Ver mas</a></li>
		    <li>{$producto->imagen}</li>
        </ul>
    </div>
    {/foreach}
    {include 'footer.tpl'}


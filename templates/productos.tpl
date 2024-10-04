    {include 'header.tpl'}
	{foreach item=producto from=$productos}
		<ul>
			<li>{$producto->nombre}</li>
			<li>{$producto->descripcion}</li>
            <li>{$producto->imagen}</li>
            <li>{$producto->fk_categoria}</li>
            <li>{$producto->precio}</li>
            <li>{$producto->imagen}</li>
        </ul>
    {/foreach}
    {include 'footer.tpl'}


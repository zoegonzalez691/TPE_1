    {include 'header.tpl'}

	{foreach item=producto from=$productos}
    <div class="mostrar">
		<ul>
			<li>{$producto->nombre}</li>
			<li>{$producto->descripcion}</li>
            <li>{$producto->imagen}</li>
            <li>{$producto->fk_categoria}</li>
            <li>{$producto->precio}</li>
            <a href="productos/{$producto->id_producto}"><li>Ver mas</li></a>
        </ul>
    </div>
    {/foreach}

    {include 'footer.tpl'}


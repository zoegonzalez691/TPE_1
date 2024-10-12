    {include 'header.tpl'}
    <h1> Panel para administrar los productos</h1>
	{foreach item=producto from=$productos}
    <div class="mostrar">
		<ul>
			<li>{$producto->nombre} <a href="productos/{$producto->id_producto}">Ver mas</a></li>
			<li>{$producto->descripcion}</li>
            <li>{$producto->imagen}</li>
            <li>{$producto->fk_categoria}</li>
            <li>{$producto->precio}</li>
            <li>{$producto->imagen}</li>
        </ul>
    </div>
    {/foreach}
    {include 'footer.tpl'}
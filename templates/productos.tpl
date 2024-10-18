    {include 'header.tpl'}

	{foreach item=producto from=$productos}
    <div class="mostrar">
		<ul>
<<<<<<< HEAD
			<li>{$producto->nombre}</li>
			<li>{$producto->descripcion}</li>
            <li>{$producto->imagen}</li>
            <li>{$producto->fk_categoria}</li>
            <li>{$producto->precio}</li>
            <a href="productos/{$producto->id_producto}"><li>Ver mas</li></a>
=======
			<li>{$producto->nombre} <a href="productos/{$producto->id_producto}">Ver mas</a></li>
		    <li>{$producto->imagen}</li>
>>>>>>> 7d85a0628f38ac7fbc6df681f62939488bfcb373
        </ul>
    </div>
    {/foreach}

    {include 'footer.tpl'}


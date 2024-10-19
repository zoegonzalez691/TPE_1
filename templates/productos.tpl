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
<<<<<<< HEAD
            </ul>
=======
			<li>{$producto->nombre} <a href="productos/{$producto->id_producto}">Ver mas</a></li>
		   
        </ul>
>>>>>>> cef4b7712721b26c6dd4c892f4416e0a8a3a7686
    </div>
    {/foreach}

    {include 'footer.tpl'}


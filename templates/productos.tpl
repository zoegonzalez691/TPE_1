    {include 'header.tpl'}

	{foreach item=productos from=$productos}
    <div class="mostrar">
		<ul>
<<<<<<< HEAD
			<li>{$productos->nombre}</li>
		
            <li>{$productos->imagen}</li>
          
            <a href="productos/{$productos->id_producto}"><li>Ver mas</li></a>
			<li>{$productos->nombre} <a href="productos/{$productos->id_producto}">Ver mas</a></li>
=======
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
>>>>>>> 2ea999330455eff6cadfd3cb901b57f3c9d55d95
		   
        </ul>
>>>>>>> cef4b7712721b26c6dd4c892f4416e0a8a3a7686
    </div>
    {/foreach}

    {include 'footer.tpl'}


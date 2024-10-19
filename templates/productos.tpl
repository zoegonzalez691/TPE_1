    {include 'header.tpl'}

	{foreach item=productos from=$productos}
    <div class="mostrar">
		<ul>
			<li>{$productos->nombre}</li>
		
            <li>{$productos->imagen}</li>
          
            <a href="productos/{$productos->id_producto}"><li>Ver mas</li></a>
			<li>{$productos->nombre} <a href="productos/{$productos->id_producto}">Ver mas</a></li>
		   
        </ul>
    </div>
    {/foreach}

    {include 'footer.tpl'}


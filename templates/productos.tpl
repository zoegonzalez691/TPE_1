{include 'header.tpl'}
{foreach item=productos from=$productos}
   <div class="mostrar">
		<ul>
	       <li>{$productos->nombre}</li>
		     
          <li><img src="{$productos->imagen}"></li>
            
           <a href="productos/{$productos->id_producto}"><li>Ver mas</li></a>
		 </ul>
	</div>
{/foreach}

{include 'footer.tpl'}


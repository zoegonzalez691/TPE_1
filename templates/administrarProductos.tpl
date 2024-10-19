    {include 'header.tpl'}
    
    <h1> Panel para administrar los productos</h1>
	{foreach item=producto from=$productos}
    <div class="mostrar">
		<ul>
			<li>{$producto->nombre} </li>
			<li>{$producto->descripcion}</li>
            <li>{$producto->imagen}</li>
            <li>{$producto->fk_categoria}</li>
            <li>{$producto->precio}</li>
            <li>{$producto->imagen}</li>
            <a href="productos/{$producto->id_producto}"><li>Ver mas</li></a>
        </ul>
    </div>
    {/foreach}
    <a href="formularioAgregar"><button> Agregar Producto</button></a>

<div class="mostrar">
     <table>
       <thead>
           <tr>
              <th>Producto</th>
              <th>Editar</th>
              <th>Eliminar</th>
           </tr>
       </thead>
       <tbody>
           {foreach item=producto from=$productos}
           <tr>   
               <td>{$producto->nombre} <a href="productos/{$producto->id_producto}">Ver mas</a></td>
               <td><a href="panel/productos/{$producto-> id_producto}/editar"><button>Editar</button></a></td>
               <td><a href="panel/productos/{$producto-> id_producto}/eliminar"><button>Eliminar</button></a></td>
           </tr>
           {/foreach}
     </table>   
</div>
  
    {include 'footer.tpl'}
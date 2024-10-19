<h1> Panel para administrar los productos</h1>
 <a href="agregarProducto"><button> Agregar Producto</button></a>

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
               <td><a href="editarProducto/{$producto->id_producto}"><button>Editar</button></a></td>
               <td><a href="eliminarProducto/{$producto->id_producto}"><button>Eliminar</button></a></td>
           </tr>
           {/foreach}
     </table>   
</div>
{include 'footer.tpl'}
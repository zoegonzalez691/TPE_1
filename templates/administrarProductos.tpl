
<div class="d-grid gap-2">
<a href="agregarProducto"><button class="btn btn-primary"> Agregar Producto</button></a>
</div>
 

<div class="mostrar">
     <table class="table table-striped">
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
               <td><a href="editarProducto/{$producto->id_producto}"><button class="btn btn-secondary">Editar</button></a></td>
               <td><a href="eliminarProducto/{$producto->id_producto}"><button class="btn btn-danger">Eliminar</button></a></td>
           </tr>
           {/foreach}
     </table>   
</div>

{include 'footer.tpl'}
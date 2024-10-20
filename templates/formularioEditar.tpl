{include 'header.tpl'}

  <div>
       <section >
            <h4 class="p-3 mb-2 bg-black text-white">Editar Producto:</h4>
             <div  class="dropdown">
    <a href="panel/productos" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Administrar Productos </a>
    <a href='panel/categorias'class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Administrar Categorias</a>
    </div>
       </section>
       <section>
            <form method="post" action="guardarCambios" >
             <div class="mb-3">
                
                   <label for="nombre" class="form-label">Nombre</label>
                    <input  
                    class="form-control"
                        value="{$producto->nombre}"
                        type="text" 
                        name="nombre" >
            </div> 
            <div class="mb-3">       
                <label for="descripcion"  class="form-label">Descripcion</label>
                            <input 
                                     value= "{$producto->descripcion}"
                                     type="text"
                                     name="descripcion"
                                     class="form-control">
            </div>             
            <div class="mb-3">
                         <label for="precio" class="form-label">Precio</label>
                            <input 
                                     value= "{$producto->precio}"
                                     type="text"
                                     name="precio"
                                     class="form-control">
            </div> 
            <div class="mb-3">
                       <label for="destacado" class="form-label">Destacado</label>
                          <select name="destacado"  class="form-select">
                              <option value="1" selected >Si</option>
                              <option value="0">No</option>
                          </select>
            </div> 
            <div class="mb-3">
                        <label for="imagen" class="form-label"> URL imagen </label> 
                        <input name="imagen" 
                        type="text" 
                        value= "{$producto->imagen}"
                        class="form-control"
                        >
            </div>         
            <div class="mb-3">
                        <label for="fk_categoria" class="form-label"> Categoria </label> 
                            <select name="fk_categoria" class="form-select">
                                 {foreach item=categoria from= $categorias}
                                 <option value="{$categoria->id_categoria}" selected > {$categoria->especie_animal} </option>
                                 {/foreach}
                            </selec> 
            </div> 
            <div>
                    <input name="id_producto" value="{$producto->id_producto}" type="hidden">
                    <input type="submit" value="Editar" class="btn btn-dark">
            </div>
        </form>
        </section>            
 </div>
                      
{include 'footer.tpl'}                      
                       
   
                   
                    








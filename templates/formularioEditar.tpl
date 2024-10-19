{include 'header.tpl'}

  <div>
       <section>
            <h4>Editar Producto</h4>
       </section>
       <section>
            <form method="post" action="guardarCambios" class="mostrar" enctype="multipart/form-data>
                <div>
                   <label for="nombre">Nombre</label>
                    <input  
                        value="{$producto->nombre}"
                        type="text" 
                        name="nombre" >
                </div>        
                <div >
                    <div>
                         <label for="descripcion">Descripcion</label>
                            <input 
                                     value= "{$producto->descripcion}"
                                     type="text"
                                     name="descripcion">
                    </div>             
                    <div>
                         <label for="precio">Precio</label>
                            <input 
                                     value= "{$producto->precio}"
                                     type="text"
                                     name="precio">
                    </div> 
                    <div>
                       <label for="destacado">Destacado</label>
                          <select name="destacado">
                              <option value="1">Si</option>
                              <option value="0">No</option>
                          </select>
                    </div> 
                    <div>
                        <label for="imagen"> URL imagen </label> 
                        <input name="imagen" 
                        type="text" 
                        value= "{$producto->imagen}"
                        >
                    </div>         
                    <div>
                        <label for="fk_categoria"> Categoria </label> 
                            <select name="fk_categoria">
                                 {foreach item=categoria from= $categorias}
                                 <option value="{$categoria->id_categoria}"> {$categoria->especie_animal} </option>
                                 {/foreach}
                            </selec> 
                    </div> 
                    <input name="id_producto" value="{$producto->id_producto}" type="hidden">
                    <div>
                        <input type="submit" value="Editar">
                    </div>
                </form>            
            </div>
                        
{include 'footer.tpl'}                      
                       
   
                   
                    








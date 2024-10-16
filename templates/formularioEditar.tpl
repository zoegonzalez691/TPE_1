{include 'header.tpl'}

  <div>

                <section>
                    <h4>Editar Producto</h4>
                </section>
                <section>
                <form method="post" action="editar" class="mostrar">
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
                                     value= "{$producto->descripcion}
                                     type="text"
                                     name="descripcion">
                        </div>
                        <div>
                            <label for="imagen">Imagen</label>
                            <input 
                                value={$producto->imagen}; 
                                type="text" 
                                name="imagen">
                        </div>
                        <div>
                        <label for="fk_categoria"> Categoria </label> 
                            <select name"fk_categoria">
                                 {foreach item=categoria from= $categorias}
                                 <option value="{$categoria->id_categoria}"> {$categoria->especie_animal} </option>
                                 {/foreach}
                            </selec> 
                        </div> 
     
   
                   
                    <div>
                        <button type="submit">Editar</button>
                    </div>
                </form>            
            </div>






{include 'footer.tpl'}

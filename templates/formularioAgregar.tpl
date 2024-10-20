{include 'header.tpl'}
<div>
       <section >
           <h1 class="p-3 mb-2 bg-black text-white">Agregar producto:</h1>
            <div  class="dropdown">
    <a href="panel/productos" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Administrar Productos </a>
    <a href='panel/categorias'class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Administrar Categorias</a>
    </div>
       </section>
       <section>
           <form action="guardarProducto" method="POST" > 
           <div class="mb-3">
            <label for="nombre" class="form-label"> Nombre </label> 
              <input name="nombre" type="text"  class="form-control">
          </div>
          <div class="mb-3">
            <label for="descripcion" class="form-label"> Descripcion </label> 
              <input name="descripcion" type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="precio" class="form-label">Precio </label> 
              <input name="precio" type="text" class="form-control">
          </div>
          
          <div class="mb-3">
          <label for="destacado" class="form-label">Destacado</label> 
            <select name="destacado">
            <option value="1" selected>Si</option>
            <option value="0">No</option>
            </select>
          </div>

          <div class="mb-3">
          <label for="imagen" class="form-label"> URL imagen </label> 
              <input name="imagen" type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="fk_categoria" class="form-label"> Categoria </label> 
              <select name="fk_categoria">
              {foreach item=categoria from= $categorias}
                  <option value="{$categoria->id_categoria}" selected>{$categoria->especie_animal} </option>
              {/foreach}
              </selec>
          </div>
          <div class="mb-3">
            <input type="submit" value="Guardar" class="btn btn-dark">
          </div>
        </form>
        </section>
{include 'footer.tpl'}
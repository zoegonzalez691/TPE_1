{include 'header.tpl'}
<div>
       <section >
            <h4 class="p-3 mb-2 bg-black text-white">Modificar Categoria:</h4>
             <div  class="dropdown">
    <a href="panel/productos" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Administrar Productos </a>
    <a href='panel/categorias'class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Administrar Categorias</a>
    </div>
       </section>
       <section>
            <form action="actualizar" method="post">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" value="{$categoria->especie_animal}" name="nombre" class="form-control">
            </div>
            <div class="mb-3">    
                <label class="form-label">Descripcion</label>
                <input type="text" value="{$categoria->descripcion}" name="descripcion" class="form-control">
            </div>    
            <div class="mb-3">    
                <input name="id" value="{$categoria->id_categoria}" type="hidden">
                <input type="submit" class="btn btn-dark">
            </div>    
            </form>
        </section>    
</div>

{include 'footer.tpl'}
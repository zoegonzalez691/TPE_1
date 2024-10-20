{include 'header.tpl'}
 <div>
  <section >
            <h4 class="p-3 mb-2 bg-black text-white">Añadir Categoria:</h4>
             <div  class="dropdown">
    <a href="panel/productos" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Administrar Productos </a>
    <a href='panel/categorias'class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Administrar Categorias</a>
    </div>
       </section>
       <section>
        
            <form action='agregar' method='post'>
            <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" placeholder="Inserte nombre de la categoria" class="form-control">
            </div>
            <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" name="descripcion" placeholder="Descripcion de la categoria" class="form-control">
            </div>
             <div class="mb-3">
            <input type="submit" value="Añadir" class="btn btn-dark">
            </div>
            </form>

{include 'footer.tpl'}
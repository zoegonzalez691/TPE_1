    {include 'header.tpl'}
    <section >
            <h4 class="p-3 mb-2 bg-black text-white">Panel Administrador:</h4>
            <div  class="dropdown">
    <a href="panel/productos" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Administrar Productos </a>
    <a href='panel/categorias'class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Administrar Categorias</a>
    </div>
       </section>
    <p>{$mensaje}</p>
    
    {include 'footer.tpl'}

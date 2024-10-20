{include 'header.tpl'}
<section >
            <h4 class="p-3 mb-2 bg-black text-white">Categorias:</h4>
       </section>
{foreach item=categoria from=$categorias}
<div class="mostrar">

    <div   class="vstack gap-3">
        <ul class="list-group" >
           <div class="p-2" ><a href="categorias/{$categoria->id_categoria}">
            <li class="list-group-item list-group-item-info">{$categoria->especie_animal}</li>
            </a></div>    
   
        </ul>
    </div>    
   
    </div>    


    {/foreach}

{include 'footer.tpl'}

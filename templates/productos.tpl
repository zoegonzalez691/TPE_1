{include 'header.tpl'}
<section >
            <h4 class="p-3 mb-2 bg-black text-white">Productos:</h4>
       </section>
{foreach item=productos from=$productos}
<div class="mostrar">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
	    <img src="{$productos->imagen}" class="card-img-top">
	</div>	
	<div class="col-md-8">
	<div class="card-body">
	    <h5 class="card-title">{$productos->nombre}</h5>
		   
       <a href="productos/{$productos->id_producto}"  class="btn btn-primary">Ver mas</li></a>
    </div>
	</div>	
	</div>
	</div>
   
</div>
{/foreach}

{include 'footer.tpl'}


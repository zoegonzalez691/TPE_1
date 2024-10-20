{include 'header.tpl'}
<div class="mostrar">
 <h2>{$producto->nombre}:</h2>
<div class="card mb-3">
       <img src="{$producto->imagen}" class="card-img-top"/>
       <div class="card-body">
			<h5 class="card-title">Categoria:{$producto->categoria} </h5>
			<p class="card-text">{$producto->descripcion}</p>
            <p class="card-text"><small class="text-body-secondary">Precio:{$producto->precio}</small></p>
        </div>
    </div>        
</div>

{include 'footer.tpl'}
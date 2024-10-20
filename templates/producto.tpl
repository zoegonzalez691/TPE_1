{include 'header.tpl'}
<div class="mostrar">
<<<<<<< HEAD
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
=======
        <ul>
			<li>{$producto->nombre} </li>
			<li>{$producto->descripcion}</li>
            <li><img src="{$producto->imagen}"/></li>
            <li>{$producto->precio}</li>
            <li>{$producto->categoria}</li>
        </ul>
    </div>


>>>>>>> a4372a4ac44dcd8433f55b1e5d514577367a3ca9

{include 'footer.tpl'}
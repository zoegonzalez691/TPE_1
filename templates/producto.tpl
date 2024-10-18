{include 'header.tpl'}
<div class="mostrar">
        <ul>
			<li>{$producto->nombre} </li>
			<li>{$producto->descripcion}</li>
            <li>{$producto->imagen}</li>
            <li>{$producto->fk_categoria}</li>
            <li>{$producto->precio}</li>
            <li>{$producto->categoria}</li>
        </ul>
    </div>



{include 'footer.tpl'}
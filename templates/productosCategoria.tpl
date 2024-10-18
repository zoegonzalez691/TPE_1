{include 'header.tpl'}

{foreach item=producto from=$productos}
<div class="mostrar">
<h2>{$categoria}</h2>
<ul>
			<li>{$producto->nombre}</li>
			<li>{$producto->descripcion}</li>
            <li>{$producto->imagen}</li>
            <li>{$producto->precio}</li>
        </ul>
    </div>
    {/foreach}

{include 'footer.tpl'}

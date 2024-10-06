{include 'header.tpl'}
{foreach item=producto from=$productos}
<h2>{$categoria}</h2>
<ul>
			<li>{$producto->nombre}</li>
			<li>{$producto->descripcion}</li>
            <li>{$producto->imagen}</li>
            <li>{$producto->precio}</li>
        </ul>
    {/foreach}
    {include 'footer.tpl'}

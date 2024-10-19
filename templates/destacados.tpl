
{include 'header.tpl'}


{if {$logged}}
        <a href= 'logout'><button>Logout</button></a>
        <a href= 'panel'><button>Panel de Administrador</button></a>
{else}
        <a href='login'><button>Login</button></a>
{/if}


{foreach item=destacado from=$destacados}
<div class="mostrar">

	<ul>
	<li>{$destacado->nombre}</li>
	<li>{$destacado->descripcion}</li>
        <li>{$destacado->imagen}</li>
        <li>{$destacado->fk_categoria}</li>
        <li>{$destacado->precio}</li>
	<li><img href="{$destacado->imagen}"></li>
        <li>{$destacado->nombre}<a href="productos/{$destacado->id_producto}">Ver mas</a></li>
    </ul>
</div>
{/foreach}

{include 'footer.tpl'}
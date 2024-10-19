{include 'header.tpl'}

{if {$logged}}
        <a href= 'logout'><button>Logout</button></a>
        <a href= 'panel'><button>Panel de Administrador</button></a>
{else}
        <a href='login'><button>Login</button></a>
{/if}

{foreach item=destacados from=$destacados}
<div class="mostrar">
    <ul>
	<li>{$destacados->nombre}</li>
	<li>{$destacados->descripcion}</li>
        <li>{$destacados->imagen}</li>
        <li>{$destacados->fk_categoria}</li>
        <li>{$destacados->precio}</li>
	<li><img href="{$destacados->imagen}"></li>
        <li>{$destacados->nombre}<a href="productos/{$destacados->id_producto}">Ver mas</a></li>
    </ul>
</div>
{/foreach}

{include 'footer.tpl'}
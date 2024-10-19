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
        <li><img src="{$destacados->imagen}"/></li>
       <li><a href="productos/{$destacados->id_producto}">Ver mas</a></li>
    </ul>
</div>
{/foreach}

{include 'footer.tpl'}
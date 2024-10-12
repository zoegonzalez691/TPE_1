{include 'header.tpl'}
{foreach item=categoria from=$categorias}
<div class="mostrar">
 <section>
        <ul>
            <a href="categorias/{$categoria->id_categoria}">
            <li><button>{$categoria->especie_animal}</button></li>
            </a>
        </ul>
    </section>
</div>

    {/foreach}

{include 'footer.tpl'}

{include 'header.tpl'}
{foreach item=categoria from=$categorias}
 <section>
        <ul>
            <a href="categorias/{$categoria->id_categoria}">
            <li><button>{$categoria->especie_animal}</button></li>
            </a>
        </ul>
    </section>

    {/foreach}

{include 'footer.tpl'}

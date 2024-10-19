{include 'header.tpl'}

{foreach item=categoria from=$categorias}
<div class="mostrar">
 <section>
        <ul>
            <a href="categorias/{$categoria->id_categoria}">
            <li>{$categoria->especie_animal}</li>
            </a>
        </ul>
    </section>
</div>

    {/foreach}

{include 'footer.tpl'}

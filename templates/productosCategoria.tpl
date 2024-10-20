{include 'header.tpl'}

    {foreach item=producto from=$productos}
    <div class="mostrar">
    <h2>{$categoria}</h2>
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{$producto->imagen}" class="card-img-top"/>
        </div> 
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">{$producto->nombre}</h5>
            <p class="card-text">{$producto->descripcion}</p>
            <p class="card-text"><small class="text-body-secondary">Precio:{$producto->precio}</small></p>
        </div> 
    </div>   
    </div>   

    </div>
    {/foreach}

{include 'footer.tpl'}

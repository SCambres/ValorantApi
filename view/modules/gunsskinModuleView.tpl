<div class="container-fluid p-5">
    <h3 class="my-4 text-center">SKINS GUNS</h3>
    
    <form id="searchForm" class="mb-4">
        <div class="form-group">
            <input type="text" class="form-control" id="searchInput" placeholder="Buscar skin...">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            {foreach $dataGunsSkin->data as $index => $gun}
                <li data-target="#carouselExampleIndicators" data-slide-to="{$index}" {if $index == 0}class="active" {/if}></li>
            {/foreach}
        </ol>
        
        <div class="carousel-inner">
            {foreach $dataGunsSkin->data as $index => $gun}
                {if !empty({$gun->displayIcon})}
                <div class="carousel-item {if $index == 0}active{/if}" data-skin-name="{$gun->displayName}">
                    <h4 class="my-4 text-center">{$gun->displayName}</h4>
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                        <img src="{$gun->displayIcon}">
                    </div>
                </div>
                {/if}
            {/foreach}
        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>


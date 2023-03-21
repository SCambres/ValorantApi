<div class="container-fluid p-5">
<h3 class="my-4 text-center">SKINS CHROMAS</h3>

    {foreach $dataGunsSkin->data as $index => $gun}
        {if !empty($gun->displayIcon)}
        <h4 class="my-4 text-center">{$gun->displayName}</h4>
        <div id="carouselExampleIndicators-{$index}" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                {foreach $gun->chromas as $chromaIndex => $chroma}
                    <li data-target="#carouselExampleIndicators-{$index}" data-slide-to="{$chromaIndex}" {if $chromaIndex == 0}class="active" {/if}></li>
                {/foreach}
            </ol>
            <div class="carousel-inner">
                {foreach $gun->chromas as $chromaIndex => $chroma}
                    <div class="carousel-item {if $chromaIndex == 0}active{/if}">
                        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                            <img src="{$chroma->fullRender}">
                        </div>
                    </div>
                {/foreach}
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators-{$index}" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators-{$index}" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {/if}
    {/foreach}
</div> 

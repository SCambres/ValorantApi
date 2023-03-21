<div class="container-fluid p-5">
    <h3 class="my-4 text-center">MODOS DE JUEGO</h3>
    <div class="row m-3">
    
    {foreach $dataModes->data as $modes}
        <div class="col-md-4 col-sm-6 my-3">
            <a href="">
                <div class="card text-white bg-dark align-items-center h-100" id="hoverCard">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <span><strong class="color-title-card">{$modes->displayName}</strong></span>
                        {if !empty({$modes->displayIcon})}
                        <img src="{$modes->displayIcon}" class="game-mode-img">
                        {/if}
                        {if !empty({$modes->duration})}
                            <hr><p class="card-text"><strong>Duración: </strong> {$modes->duration}</p>
                            {else}
                             <p>Modo de juego individual</p>   
                        {/if}
                    </div>
                </div>
            </a>
        </div>
    {/foreach}    
    </div>
</div>
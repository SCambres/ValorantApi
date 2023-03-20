<div class="container-fluid p-5">
    <h3 class="my-4 text-center">ARMAS</h3>
    <div class="row m-3 card-deck">
        {foreach $dataGuns->data as $gun}
            <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card text-white bg-dark h-100">
                        <div class="card-header text-center">
                            <h5 class="card-title"><strong class="text-danger">{$gun->displayName}</strong></h5>
                            <img class="card-img-top gear-img align-self-center" src="{$gun->displayIcon}"
                                alt="Imagen de tipo de arama: {$gun->displayName}">
                        </div>
                        <div class="card-body">
                        {if !empty($gun->weaponStats->fireRate)}
                            <h6><strong class="text-danger">WEAPONS STATS</strong></h6>
                            <p class="card-text"><strong>Cadencia: </strong>{$gun->weaponStats->fireRate}</p>  
                            <p class="card-text"><strong>Tiempo recarga: </strong>{$gun->weaponStats->reloadTimeSeconds}</p>
                            <p class="card-text"><strong>Precio: </strong>{$gun->shopData->cost}</p>
                            {foreach $gun->weaponStats->damageRanges as $damage}
                                <h7><strong class="text-danger">DAÑO ({$damage->rangeStartMeters}-{$damage->rangeEndMeters}): </strong></h7>
                                <p class="card-text"><strong>Daño cabeza: </strong>{$damage->headDamage}</p>
                                <p class="card-text"><strong>Daño cuerpo: </strong>{$damage->bodyDamage}</p>
                                <p class="card-text"><strong>Daño piernas: </strong>{$damage->legDamage}</p>
                            {/foreach}
                        {/if}    
                        </div>
                    </div>
            </div>
        {/foreach}
    </div>
</div>
<div class="container-fluid p-5">
    <h3 class="my-4 text-center">MAPAS</h3>
    
    {foreach $dataMaps->data as $index => $map}
        <div id="accordion{$index}">
            <div class="card">
                <div class="card-title text-center m-2 color-title-card">
                    <h5>
                        <span><strong>{$map->displayName}</strong></span>    
                        <span>{$map->coordinates}</span>
                    </h5>
                </div>
                {if !empty($map->displayIcon)}
                <div class="card-header" id="headingIcon{$index}">
                    <h5 class="mb-0 text-center">
                        <button class="btn btn-sm" data-toggle="collapse" data-target="#collapseIcon{$index}" aria-expanded="true" aria-controls="collapseIcon{$index}">
                            <span><strong><i class="fa-solid fa-map"></i> Estructura del mapa</strong></span><br>
                        </button>
                    </h5>
                </div>
                <div id="collapseIcon{$index}" class="collapse" aria-labelledby="headingIcon{$index}" data-parent="#accordion{$index}">
                    <div class="card-body text-center">
                        <img id="mapIcon" src="{$map->displayIcon}">
                    </div>
                </div>
                {/if}
                <div class="card-header" id="headingSplash{$index}">
                    <h5 class="mb-0 text-center">
                        <button class="btn btn-sm" data-toggle="collapse" data-target="#collapseSplash{$index}" aria-expanded="true" aria-controls="collapseSplash{$index}">
                            <span><strong><i class="fa-sharp fa-solid fa-palette"></i> Splash-Art</strong></span><br>
                        </button>
                    </h5>
                </div>
                <div id="collapseSplash{$index}" class="collapse" aria-labelledby="headingSplash{$index}" data-parent="#accordion{$index}">
                    <div class="card-body text-center">
                        <img id="mapSplash" src="{$map->listViewIcon}">
                    </div>
                </div>
            </div>
        </div>
    {/foreach}    
</div>


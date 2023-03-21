<div class="container-fluid p-5">
    <h3 class="my-4 text-center">TARJETA JUGADOR</h3>
    <div class="row m-3">
        {foreach $dataCards->data as $card}
            <div class="col-md-4 col-sm-6 my-3">

                <div class="card card text-white bg-dark align-items-center ancho h-100" id="hoverCard">
                    <div class="card-head">
                        <span class="color-title-card">{$card->displayName}</span>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="{$card->displayIcon}" alt="{$agent->displayName}">
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>
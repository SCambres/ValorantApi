<div class="container-fluid p-5">
    <h3 class="my-4 text-center">{$dataInfoAgent->data->displayName}</h3>
    <div class="row m-3">
        <div class="col-md-4 col-lg-4 col-sm-12" style="z-index: -1;">
            <img class="w-100" src="{$dataInfoAgent->data->bustPortrait}"> 
        </div>
        <div class="col-md-8 col-lg-8 col-sm-12">
            <h4 class="text-center text-danger bg-dark">CARACTERÍSTICAS</h4>
            <p>{$dataInfoAgent->data->description}</p>
            <div class="row">
                <div class="col md-12 col-lg-12 col-sm-12">
                <strong>ROL: </strong>{$dataInfoAgent->data->role->displayName}<br>
                <strong>Descripción: </strong>{$dataInfoAgent->data->role->description}
                </div>
            </div>
            <div class="text-center">
            <strong >HABILIDADES </strong>

            </div>
            <div class="row card-deck">
            {foreach $dataInfoAgent->data->abilities as $abilities}
                <div class="col-md-6 col-lg-6 mb-4" style="z-index: -999"><hr>
                    <div class="card">
                        <div class="card-header text-center" >
                            <h5 class="card-title"><strong class="text-danger">{$abilities->displayName}</strong></h5>
                            <div class="card-body" style="background-image:url({$abilities->displayIcon});">
                                <p> {$abilities->description}</p>
                            </div>
                        </div>
                    </div>
                
                </div>
            {/foreach}
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-5">
    <h3 class="my-4 text-center">CONTRATOS</h3>    
    <div class="row m-3">
    {foreach $dataContracts->data as $contract}
        <div class="col-md-4 col-sm-6 my-3">
            
                <div class="card card text-white bg-dark align-items-center ancho" id="hoverCard">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <span class="color-title-card">{$contract->displayName}</span>
                        <strong class="text-center"><span class="">{$contract->content->relationType}</span></strong>

                    </div>
                </div>
            
        </div>
    {/foreach}    

    </div>
</div>    
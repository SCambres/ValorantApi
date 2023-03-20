<div class="container-fluid p-5">
    <h3 class="my-4 text-center">EVENTOS</h3>    
    <div class="row m-3">
        {foreach $dataEvents->data as $events}
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="">
                    <div class="card text-white bg-dark">
                        <div class="card-body">
                        <h5 class="card-title "><strong class="color-title-card">{$events->shortDisplayName}</strong></h5>
                             <p class="card-text"><strong>Comienzo: </strong> {$events->startTime}</p>
                             <p class="card-text"><strong>Finalización: </strong> {$events->endTime}</p>

                        </div>
                    </div>
                </a>
            </div>
        {/foreach}
    </div>
</div>
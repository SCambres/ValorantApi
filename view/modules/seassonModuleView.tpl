<div class="container-fluid p-5">
    <h3 class="my-4 text-center">SEASSON</h3>
    <div class="row m-3">
        {foreach $dataSeasson->data as $seasson}
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title "><strong class="color-title-card">{$seasson->displayName}</strong></h5>
                        <p class="card-text"><strong>Comienzo: </strong> {$seasson->startTime}</p>
                        <p class="card-text"><strong>Finalización: </strong> {$seasson->endTime}</p>

                    </div>
                </div>

            </div>
        {/foreach}
    </div>
</div>
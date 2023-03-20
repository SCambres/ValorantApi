<div class="container-fluid p-5">
    <h3 class="my-4 text-center">EQUIPAMIENTO</h3>
    <div class="row m-3 justify-content-center">
        {foreach $dataGear->data as $gear}
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="">
                    <div class="card text-white bg-dark">
                    <img class="card-img-top gear-img align-self-center" src="{$gear->displayIcon}" alt="Imagen de tipo de escudo: {$gear->displayName}" >
                        <div class="card-body">
                        <h5 class="card-title"><strong class="color-title-card">{$gear->displayName}</strong></h5>
                             <p class="card-text">{$gear->description}</p>
                             <p class="card-text">Cost: {$gear->shopData->cost}</p>
                             <p class="card-text">Category: {$gear->shopData->categoryText}</p>

                        </div>
                    </div>
                </a>
            </div>
        {/foreach}
    </div>
</div>
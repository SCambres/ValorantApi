<div class="container-fluid p-5">
    <h3 class="my-4 text-center">AGENTES</h3>
    <div class="row m-3">
        {foreach $dataAgents->data as $agent}
            <div class="col-md-4 col-sm-6 my-3">
                <a href="/infoagent/{$agent->uuid}/">
                    <div class="card card text-white bg-dark align-items-center ancho" id="hoverCard">
                        <div class="card-head">
                            <span class="color-title-card">{$agent->displayName}</span>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center">
                            <img src="{$agent->killfeedPortrait}" alt="{$agent->displayName}">
                        </div>
                    </div>
                </a>
            </div>
        {/foreach}
    </div>
</div>
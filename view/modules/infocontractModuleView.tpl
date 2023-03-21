{* <div class="container-fluid p-5">
    <h3 class="my-4 text-center">{$dataInfoContract->data->displayName}</h3>
    <div class="contract-info">
        <ul>
            {foreach $dataInfoContract->data->content->chapters as $chapter}
                <li>
                    <h3 class="text-danger">CAPITULO {$chapter@iteration}</h3>
                    <ul>
                        {foreach $chapter->levels as $level}
                            <li>
                                <h4>Level {$level@iteration}</h4>
                                <p>Tipo: {$level->reward->type}</p>
                                <p>XP: {$level->xp}</p>
                                {if $level->vpCost gt 0}
                                    <p>Coste VP: {$level->vpCost}</p>
                                {else}
                                    <p>Gratis</p>
                                {/if}
                                {if $level->isPurchasableWithVP}
                                    <p>Puede comprarse con VP</p>
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                </li>
            {/foreach}
        </ul>
    </div>
</div> *}
<div class="container-fluid p-5">
    <h3 class="my-4 text-center">{$dataInfoContract->data->displayName}</h3>
    <div class="contract-info">
        <div class="row">
            {foreach $dataInfoContract->data->content->chapters as $chapter}
                <div class="col-md-6 col-lg-4 border">
                    <h3 class="text-danger m-3">CAPITULO {$chapter@iteration}</h3>
                    <ul>
                        {foreach $chapter->levels as $level}
                            <li>
                                <h4>Level {$level@iteration}</h4>
                                <p>Tipo: {$level->reward->type}</p>
                                <p>XP: {$level->xp}</p>
                                {if $level->vpCost gt 0}
                                    <p>Coste VP: {$level->vpCost}</p>
                                {else}
                                    <p>Gratis</p>
                                {/if}
                                {if $level->isPurchasableWithVP}
                                    <p>Puede comprarse con VP</p>
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                </div>
            {/foreach}
        </div>
    </div>
</div>

<div class="container-fluid p-5">
    <h3 class="my-4 text-center">RANGOS </h3>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                {assign "printedDivisions" []}
                {foreach $dataRangos->data->tiers as $tier}
                    {if !in_array($tier->divisionName, $printedDivisions) && $tier->divisionName != 'SIN CLASIFICACIÓN' && $tier->divisionName != 'Unused1' && $tier->divisionName != 'Unused2'}
                        <th>{$tier->divisionName}</th>
                        {$printedDivisions[] = $tier->divisionName}
                    {/if}
                {/foreach}
            </tr>
        </thead>
        <tbody>
            {assign "iconRows" []}
            {foreach $dataRangos->data->tiers as $tier}

                {if $tier->divisionName != 'SIN CLASIFICACIÓN' && $tier->divisionName != 'Unused1' && $tier->divisionName != 'Unused2'}
                    {$divisionName = $tier->divisionName}
                    {$iconRows[$divisionName][] = "<img class='media' src={$tier->smallIcon}>"}
                {/if}
            {/foreach} 
            {foreach $printedDivisions as $divisionName}
                <td>
                    {foreach $iconRows[$divisionName] as $icon}
                        {$icon}
                    {/foreach}
                </td>
            {/foreach}
        </tbody>
    </table>
</div>


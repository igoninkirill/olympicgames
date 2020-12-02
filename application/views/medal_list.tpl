{include file="header.tpl" title="Список медалей"}
<table class="table table-striped">
    {if $smarty.get.medal_type == 0 and isset($country.0.country_name)}
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="text-center">Все медали страны {$country.0.country_name}</th>
        </tr>
    </thead>
    {elseif $smarty.get.medal_type != 0 and isset($country.0.country_name)}
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="text-center">{$medals_name[$country.0.medal_name]} медали страны {$country.0.country_name}</th>
        </tr>
    </thead>
    {elseif $smarty.get.medal_type != 0 and !isset($country.0.country_name)}
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="text-center">Данный тип медалей отсутствует</th>
        </tr>
    </thead>
    {/if}

    <tr>
        <td class="text-center"><strong>Имя спортсмена</strong></td>
        <td class="text-center"><strong>Вид спорта</strong></td>
        <td class="text-center"><strong>Тип медали</strong></td>
    </tr>
    {if isset($country)}
    {foreach $country as $string}
    <tr>
        <td class="text-center">
            {$string.sportsman_name}
        </td>
        <td class="text-center">
            {$string.sport_name}
        </td>
        <td class="text-center">
            {$string.medal_name}
        </td>
    </tr>
    {/foreach}
    {/if}
    {if $country == NULL}
    <tr>
        <td class="h1 text-center" colspan="3"></td>
    </tr>
    {/if}
</table>
{include file="footer.tpl"}
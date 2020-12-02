{include file="header.tpl" title="Список медалей"}
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="">Добавить медаль</th>
        </tr>
    </thead>
</table>
<form method="post" action="medal/store" name="form">
    <label for="idmedal"><p>Тип медали</p></label>
    <select id="idmedal" name="type_medal" class="form-control">
        {if isset($medals_name)}
        {foreach $medals_name as $medal_name}
        <option value="{$medal_name.id}">
            {$medal_name.name}
        </option>
        {/foreach}
        {/if}
    </select>

    <label for="idcountry"><p class="mt-2 mb-2">Страна</p></label>
    <select id="idcountry" name="country" class="form-control">
        {if isset($countries_name)}
        {foreach $countries_name as $country_name}
        <option value="{$country_name.id}">
            {$country_name.name}
        </option>
        {/foreach}
        {/if}
    </select>

    <label for="idsport"><p class="mb-2 mt-2">Вид спорта</p></label>
    <select id="idsport" name="sport" class="form-control">
        {if isset($sports_name)}
        {foreach $sports_name as $sport_name}
        <option value="{$sport_name.id}">
            {$sport_name.name}
        </option>
        {/foreach}
        {/if}
    </select>

    <label for="sportsmanid"><p class="mb-2 mt-2">Спортсмены</p></label>
    <select id="sportsmanid" name="sportsman" multiple size="3" class="form-control">
        {if isset($sportmans_name)}
        {foreach $sportmans_name as $sportman_name}
        <option value="{$sportman_name.id}">
            {$sportman_name.name}
        </option>
        {/foreach}
        {/if}
    </select>
    <button name="button" class="btn btn-primary mb-2 mt-2">Добавить</button>
</form>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="">Список медалей</th>
        </tr>
    </thead>
    <tr>
        <td class="text-center"><strong>Страна</strong></td>
        <td class="text-center"><strong>Спортсмен(ы)</strong></td>
        <td class="text-center"><strong>Спорт</strong></td>
        <td class="text-center"><strong>Медаль</strong></td>
        <td colspan="15" class="center"><strong>Удалить медаль</strong></td>
    </tr>
    {if isset($medals_info)}
    {foreach $medals_info as $medal_info}
    <tr>
        <td class="text-center">
            {$medal_info.country_name}
        </td>
        <td class="text-center">
            {$medal_info.sportsman_name}
        </td>
        <td class="text-center">
            {$medal_info.sport_name}
        </td>
        <td class="text-center">
            {$medal_info.medal_name}
        </td>
        <td class="text-center">
            <a href="/medal/?method=delete&table=medals_info&delete_id={$medal_info.medal_id}">Удалить</a>
        </td>
    </tr>
    {/foreach}
    {/if}
</table>
{include file="footer.tpl"}

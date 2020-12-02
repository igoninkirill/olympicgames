{include file="header.tpl" title="Список стран"}
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="">Добавить страну</th>
        </tr>
    </thead>
</table>
<form method="post" action="countries/store">

    <input id="countryid" type="text" placeholder="название страны" name="country" class="form-control" />
    <button class="btn btn-primary mb-2 mt-2">Отправить</button>
</form>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="center">Список стран</th>
        </tr>
    </thead>
    <tr>
        <td class="text-center"><strong>Номер страны</strong></td>
        <td class="text-center"><strong>Страна</strong></td>
        <td class="text-center"><strong>Удалить страну</strong></td>
    </tr>
    {if isset($countries)}
    {foreach $countries as $key=>$country}
    <tr>
        <td class="text-center">
            {$key+1}
        </td>
        <td class="text-center">
            {$country.name}
        </td>
        <td class="text-center">
            <a href="/countries/?method=delete&table=country&delete_id={$country.id}">Удалить</a>
        </td>
    </tr>
    {/foreach}
    {/if}
</table>
{include file="footer.tpl"}
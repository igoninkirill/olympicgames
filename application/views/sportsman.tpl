{include file="header.tpl" title="Список спортсменов"}
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="">Добавить спортсмена</th>
        </tr>
    </thead>
</table>
<form method="post" action="sportsmans/store">
    <input id="sportsmanid" type="text" placeholder="имя спортсмена" name="sportsman" class="form-control" />
    <button class="btn btn-primary mb-2 mt-2">Отправить</button>
    <br />
</form>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="">Список спортсменов</th>
        </tr>
    </thead>
    <tr>
        <td class="text-center"><strong>Номер</strong></td>
        <td class="text-center"><strong>Имя спортсмена</strong></td>
        <td class="text-center"><strong>Удалить спортсмена</strong></td>
    </tr>
    {if isset($sportsmans)}
    {foreach $sportsmans as $key=>$sportsman}
    <tr>
        <td class="text-center">
            {$key+1}
        </td>
        <td class="text-center">
            {$sportsman.name}
        </td>
        <td class="text-center">
            <a href="/sportsmans/?method=delete&table=sportman&delete_id={$sportsman.id}">Удалить</a>
        </td>
    </tr>
    {/foreach}
    {/if}
</table>
{include file="footer.tpl"}
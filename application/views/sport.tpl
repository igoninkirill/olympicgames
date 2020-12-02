{include file="header.tpl" title="Список видов спорта"}
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="">Добавить вид спорта</th>
        </tr>
    </thead>
</table>
<form method="post" action="sports/store">
    <input id="sportid" type="text" placeholder="вид спорта" name="sport" class="form-control" />
    <button class="btn btn-primary mb-2 mt-2">Отправить</button>
</form>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="">Список видов спорта</th>
        </tr>
    </thead>
    <tr>
        <td class="text-center"><strong>Номер</strong></td>
        <td class="text-center"><strong>Вид спорта</strong></td>
        <td class="text-center"><strong>Удалить вид спорта</strong></td>
    </tr>
    {if isset($sports)}
    {foreach $sports as $key=>$sport}
    <tr>
        <td class="text-center">
            {$key+1}
        </td>
        <td class="text-center">
            {$sport.name}
        </td>
        <td class="text-center">
            <a href="/sports/?method=delete&table=sports&delete_id={$sport.id}">Удалить</a>
        </td>
    </tr>
    {/foreach}
    {/if}
</table>
{include file="footer.tpl"}
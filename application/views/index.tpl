{include file="header.tpl" title="Основная страница"}
<table class="table table-striped">
	<thead class="thead-dark">
	<tr>
		<th colspan="12" class="text-center">Медальный зачет</th>
	</tr>
	</thead>
	<tr>
		<td class = "text-center"><a href="/?sort={$sorting}&type=position"><strong>Место</strong></a></td>
		<td class = "text-center" colspan="1"><a href="/?sort={$sorting}&type=name"><strong>Страна</strong></a></td>
		<td class="text-center"><a href="/?sort={$sorting}&type=gold"><strong>Золото<strong></a></td>
		<td class="text-center"><a href="/?sort={$sorting}&type=silver"><strong>Серебро<strong></a></td>
		<td class="text-center"><a href="/?sort={$sorting}&type=bronze"><strong>Бронза</strong></a></td>
		<td class="text-center"><a href="/?sort={$sorting}&type=sum"><strong>Все</strong></p></a></td>
	</tr>
	{foreach $data as $country}
		<tr>
			<td class = "text-center">
				{$rating_array[$country.id_country]}
			</td>
			<td class = "text-center">
				{$country.country_name}
			</td>
			<td class="text-center">
				<a href="/medals_list/?medal_type=1&country_id={$country.id_country}">
					{$country.gold}
				</a>
			</td>
			<td class="text-center">
				<a href="/medals_list/?medal_type=2&country_id={$country.id_country}">
					{$country.silver}
				</a>
			</td>
			<td class="text-center">
				<a href="/medals_list/?medal_type=3&country_id={$country.id_country}"">
					{$country.bronze}
				</a>
			</td>
			<td class="text-center">
				<a href="/medals_list/?medal_type=0&country_id={$country.id_country}"">
					{$country.SUM}
				</a>
			</td>
		</tr>
	{/foreach}
</table>
{include file="footer.tpl"}
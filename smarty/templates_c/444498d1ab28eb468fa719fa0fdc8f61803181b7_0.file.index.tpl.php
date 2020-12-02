<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 13:54:36
  from 'C:\OSPanel\domains\test\application\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb3abeca3a977_32815661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '444498d1ab28eb468fa719fa0fdc8f61803181b7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\application\\views\\index.tpl',
      1 => 1605610351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb3abeca3a977_32815661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Основная страница"), 0, false);
?>
<table class="table table-striped">
	<thead class="thead-dark">
	<tr>
		<th colspan="12" class="text-center">Медальный зачет</th>
	</tr>
	</thead>
	<tr>
		<td class = "text-center"><a href="/?sort=<?php echo $_smarty_tpl->tpl_vars['sorting']->value;?>
&type=position"><strong>Место</strong></a></td>
		<td class = "text-center" colspan="1"><a href="/?sort=<?php echo $_smarty_tpl->tpl_vars['sorting']->value;?>
&type=name"><strong>Страна</strong></a></td>
		<td class="text-center"><a href="/?sort=<?php echo $_smarty_tpl->tpl_vars['sorting']->value;?>
&type=gold"><strong>Золото<strong></a></td>
		<td class="text-center"><a href="/?sort=<?php echo $_smarty_tpl->tpl_vars['sorting']->value;?>
&type=silver"><strong>Серебро<strong></a></td>
		<td class="text-center"><a href="/?sort=<?php echo $_smarty_tpl->tpl_vars['sorting']->value;?>
&type=bronze"><strong>Бронза</strong></a></td>
		<td class="text-center"><a href="/?sort=<?php echo $_smarty_tpl->tpl_vars['sorting']->value;?>
&type=sum"><strong>Все</strong></p></a></td>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
		<tr>
			<td class = "text-center">
				<?php echo $_smarty_tpl->tpl_vars['rating_array']->value[$_smarty_tpl->tpl_vars['country']->value['id_country']];?>

			</td>
			<td class = "text-center">
				<?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>

			</td>
			<td class="text-center">
				<a href="/medals_list/?medal_type=1&country_id=<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['country']->value['gold'];?>

				</a>
			</td>
			<td class="text-center">
				<a href="/medals_list/?medal_type=2&country_id=<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['country']->value['silver'];?>

				</a>
			</td>
			<td class="text-center">
				<a href="/medals_list/?medal_type=3&country_id=<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
"">
					<?php echo $_smarty_tpl->tpl_vars['country']->value['bronze'];?>

				</a>
			</td>
			<td class="text-center">
				<a href="/medals_list/?medal_type=0&country_id=<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
"">
					<?php echo $_smarty_tpl->tpl_vars['country']->value['SUM'];?>

				</a>
			</td>
		</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

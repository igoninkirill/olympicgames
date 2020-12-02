<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 14:16:30
  from 'C:\OSPanel\domains\test\application\views\medal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb3b10e040616_76973176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '450cf600ea98cf2721d37643d3fae03ef50b8329' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\application\\views\\medal.tpl',
      1 => 1605593045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb3b10e040616_76973176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Список медалей"), 0, false);
?>
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
        <?php if ((isset($_smarty_tpl->tpl_vars['medals_name']->value))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medals_name']->value, 'medal_name');
$_smarty_tpl->tpl_vars['medal_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medal_name']->value) {
$_smarty_tpl->tpl_vars['medal_name']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['medal_name']->value['id'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['medal_name']->value['name'];?>

        </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>

    <label for="idcountry"><p class="mt-2 mb-2">Страна</p></label>
    <select id="idcountry" name="country" class="form-control">
        <?php if ((isset($_smarty_tpl->tpl_vars['countries_name']->value))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries_name']->value, 'country_name');
$_smarty_tpl->tpl_vars['country_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country_name']->value) {
$_smarty_tpl->tpl_vars['country_name']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['country_name']->value['id'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['country_name']->value['name'];?>

        </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>

    <label for="idsport"><p class="mb-2 mt-2">Вид спорта</p></label>
    <select id="idsport" name="sport" class="form-control">
        <?php if ((isset($_smarty_tpl->tpl_vars['sports_name']->value))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sports_name']->value, 'sport_name');
$_smarty_tpl->tpl_vars['sport_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sport_name']->value) {
$_smarty_tpl->tpl_vars['sport_name']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['sport_name']->value['id'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['sport_name']->value['name'];?>

        </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>

    <label for="sportsmanid"><p class="mb-2 mt-2">Спортсмены</p></label>
    <select id="sportsmanid" name="sportsman" multiple size="3" class="form-control">
        <?php if ((isset($_smarty_tpl->tpl_vars['sportmans_name']->value))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sportmans_name']->value, 'sportman_name');
$_smarty_tpl->tpl_vars['sportman_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sportman_name']->value) {
$_smarty_tpl->tpl_vars['sportman_name']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['sportman_name']->value['id'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['sportman_name']->value['name'];?>

        </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
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
    <?php if ((isset($_smarty_tpl->tpl_vars['medals_info']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medals_info']->value, 'medal_info');
$_smarty_tpl->tpl_vars['medal_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medal_info']->value) {
$_smarty_tpl->tpl_vars['medal_info']->do_else = false;
?>
    <tr>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['medal_info']->value['country_name'];?>

        </td>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['medal_info']->value['sportsman_name'];?>

        </td>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['medal_info']->value['sport_name'];?>

        </td>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['medal_info']->value['medal_name'];?>

        </td>
        <td class="text-center">
            <a href="/medal/?method=delete&table=medals_info&delete_id=<?php echo $_smarty_tpl->tpl_vars['medal_info']->value['medal_id'];?>
">Удалить</a>
        </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

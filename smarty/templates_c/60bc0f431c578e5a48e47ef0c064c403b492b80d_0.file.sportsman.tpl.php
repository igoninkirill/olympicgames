<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 14:16:30
  from 'C:\OSPanel\domains\test\application\views\sportsman.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb3b10ece96d9_45231960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60bc0f431c578e5a48e47ef0c064c403b492b80d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\application\\views\\sportsman.tpl',
      1 => 1605538827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb3b10ece96d9_45231960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Список спортсменов"), 0, false);
?>
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
    <?php if ((isset($_smarty_tpl->tpl_vars['sportsmans']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sportsmans']->value, 'sportsman', false, 'key');
$_smarty_tpl->tpl_vars['sportsman']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['sportsman']->value) {
$_smarty_tpl->tpl_vars['sportsman']->do_else = false;
?>
    <tr>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>

        </td>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['sportsman']->value['name'];?>

        </td>
        <td class="text-center">
            <a href="/sportsmans/?method=delete&table=sportman&delete_id=<?php echo $_smarty_tpl->tpl_vars['sportsman']->value['id'];?>
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

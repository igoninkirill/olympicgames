<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 14:16:29
  from 'C:\OSPanel\domains\test\application\views\country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb3b10d70cde4_48019467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69748d639b9af1fb1ed86e09fd37cb54b1199515' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\application\\views\\country.tpl',
      1 => 1605538846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb3b10d70cde4_48019467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Список стран"), 0, false);
?>
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
    <?php if ((isset($_smarty_tpl->tpl_vars['countries']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'key');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
    <tr>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>

        </td>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>

        </td>
        <td class="text-center">
            <a href="/countries/?method=delete&table=country&delete_id=<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
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

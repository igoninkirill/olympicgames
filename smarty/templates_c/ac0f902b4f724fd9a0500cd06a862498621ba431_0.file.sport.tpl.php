<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 14:16:30
  from 'C:\OSPanel\domains\test\application\views\sport.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb3b10e6a6e23_07504265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0f902b4f724fd9a0500cd06a862498621ba431' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\application\\views\\sport.tpl',
      1 => 1605595702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb3b10e6a6e23_07504265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Список видов спорта"), 0, false);
?>
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
    <?php if ((isset($_smarty_tpl->tpl_vars['sports']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sports']->value, 'sport', false, 'key');
$_smarty_tpl->tpl_vars['sport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['sport']->value) {
$_smarty_tpl->tpl_vars['sport']->do_else = false;
?>
    <tr>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>

        </td>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['sport']->value['name'];?>

        </td>
        <td class="text-center">
            <a href="/sports/?method=delete&table=sports&delete_id=<?php echo $_smarty_tpl->tpl_vars['sport']->value['id'];?>
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

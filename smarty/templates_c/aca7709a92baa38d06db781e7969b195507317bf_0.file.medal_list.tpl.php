<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 17:05:02
  from 'C:\OSPanel\domains\test\application\views\medal_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb3d88e7f65a5_82982210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aca7709a92baa38d06db781e7969b195507317bf' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\application\\views\\medal_list.tpl',
      1 => 1605162356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb3d88e7f65a5_82982210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Список медалей"), 0, false);
?>
<table class="table table-striped">
    <?php if ($_GET['medal_type'] == 0 && (isset($_smarty_tpl->tpl_vars['country']->value[0]['country_name']))) {?>
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="text-center">Все медали страны <?php echo $_smarty_tpl->tpl_vars['country']->value[0]['country_name'];?>
</th>
        </tr>
    </thead>
    <?php } elseif ($_GET['medal_type'] != 0 && (isset($_smarty_tpl->tpl_vars['country']->value[0]['country_name']))) {?>
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="text-center"><?php echo $_smarty_tpl->tpl_vars['medals_name']->value[$_smarty_tpl->tpl_vars['country']->value[0]['medal_name']];?>
 медали страны <?php echo $_smarty_tpl->tpl_vars['country']->value[0]['country_name'];?>
</th>
        </tr>
    </thead>
    <?php } elseif ($_GET['medal_type'] != 0 && !(isset($_smarty_tpl->tpl_vars['country']->value[0]['country_name']))) {?>
    <thead class="thead-dark">
        <tr>
            <th colspan="12" class="text-center">Данный тип медалей отсутствует</th>
        </tr>
    </thead>
    <?php }?>

    <tr>
        <td class="text-center"><strong>Имя спортсмена</strong></td>
        <td class="text-center"><strong>Вид спорта</strong></td>
        <td class="text-center"><strong>Тип медали</strong></td>
    </tr>
    <?php if ((isset($_smarty_tpl->tpl_vars['country']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country']->value, 'string');
$_smarty_tpl->tpl_vars['string']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['string']->value) {
$_smarty_tpl->tpl_vars['string']->do_else = false;
?>
    <tr>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['string']->value['sportsman_name'];?>

        </td>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['string']->value['sport_name'];?>

        </td>
        <td class="text-center">
            <?php echo $_smarty_tpl->tpl_vars['string']->value['medal_name'];?>

        </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['country']->value == NULL) {?>
    <tr>
        <td class="h1 text-center" colspan="3"></td>
    </tr>
    <?php }?>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

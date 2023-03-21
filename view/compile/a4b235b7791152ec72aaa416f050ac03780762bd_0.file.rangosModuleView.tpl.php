<?php
/* Smarty version 4.3.0, created on 2023-03-21 12:15:43
  from '/var/www/ejercicios/Tarea5/view/modules/rangosModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641991df329a90_92361218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4b235b7791152ec72aaa416f050ac03780762bd' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/rangosModuleView.tpl',
      1 => 1679397335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641991df329a90_92361218 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">RANGOS </h3>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <?php $_smarty_tpl->_assignInScope('printedDivisions', array());?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataRangos']->value->data->tiers, 'tier');
$_smarty_tpl->tpl_vars['tier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tier']->value) {
$_smarty_tpl->tpl_vars['tier']->do_else = false;
?>
                    <?php if (!in_array($_smarty_tpl->tpl_vars['tier']->value->divisionName,$_smarty_tpl->tpl_vars['printedDivisions']->value) && $_smarty_tpl->tpl_vars['tier']->value->divisionName != 'SIN CLASIFICACIÓN' && $_smarty_tpl->tpl_vars['tier']->value->divisionName != 'Unused1' && $_smarty_tpl->tpl_vars['tier']->value->divisionName != 'Unused2') {?>
                        <th><?php echo $_smarty_tpl->tpl_vars['tier']->value->divisionName;?>
</th>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['printedDivisions']) ? $_smarty_tpl->tpl_vars['printedDivisions']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['tier']->value->divisionName;
$_smarty_tpl->_assignInScope('printedDivisions', $_tmp_array);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
        </thead>
        <tbody>
            <?php $_smarty_tpl->_assignInScope('iconRows', array());?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataRangos']->value->data->tiers, 'tier');
$_smarty_tpl->tpl_vars['tier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tier']->value) {
$_smarty_tpl->tpl_vars['tier']->do_else = false;
?>

                <?php if ($_smarty_tpl->tpl_vars['tier']->value->divisionName != 'SIN CLASIFICACIÓN' && $_smarty_tpl->tpl_vars['tier']->value->divisionName != 'Unused1' && $_smarty_tpl->tpl_vars['tier']->value->divisionName != 'Unused2') {?>
                    <?php $_smarty_tpl->_assignInScope('divisionName', $_smarty_tpl->tpl_vars['tier']->value->divisionName);?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['iconRows']) ? $_smarty_tpl->tpl_vars['iconRows']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['divisionName']->value][] = "<img class='media' src=".((string)$_smarty_tpl->tpl_vars['tier']->value->smallIcon).">";
$_smarty_tpl->_assignInScope('iconRows', $_tmp_array);?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['printedDivisions']->value, 'divisionName');
$_smarty_tpl->tpl_vars['divisionName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['divisionName']->value) {
$_smarty_tpl->tpl_vars['divisionName']->do_else = false;
?>
                <td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['iconRows']->value[$_smarty_tpl->tpl_vars['divisionName']->value], 'icon');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php }
}

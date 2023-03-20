<?php
/* Smarty version 4.3.0, created on 2023-03-20 10:54:14
  from '/var/www/ejercicios/Tarea5/view/pages/contratosView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64182d464c0360_84010085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e21030d5b358cf21c413a72b5f66f314b6da8245' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/pages/contratosView.tpl',
      1 => 1679306045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/headView.tpl' => 1,
    'file:modules/headerView.tpl' => 1,
    'file:modules/contractModuleView.tpl' => 1,
    'file:modules/footerView.tpl' => 1,
  ),
),false)) {
function content_64182d464c0360_84010085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/headView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/headerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/contractModuleView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/footerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

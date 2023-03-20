<?php
/* Smarty version 4.3.0, created on 2023-03-15 16:03:18
  from '/var/www/ejercicios/Tarea5/view/pages/pruebaView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6411de3686ab36_36985041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f41b317b8714238f3ca00e7dc4adfb54b194cfec' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/pages/pruebaView.tpl',
      1 => 1678892592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/headView.tpl' => 1,
    'file:modules/headerView.tpl' => 1,
    'file:modules/principalView.tpl' => 1,
    'file:modules/footerView.tpl' => 1,
  ),
),false)) {
function content_6411de3686ab36_36985041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/headView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/headerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/principalView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/footerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

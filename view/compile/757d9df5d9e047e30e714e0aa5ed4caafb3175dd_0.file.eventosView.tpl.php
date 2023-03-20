<?php
/* Smarty version 4.3.0, created on 2023-03-17 13:33:39
  from '/var/www/ejercicios/Tarea5/view/pages/eventosView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64145e239c94d2_88132553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '757d9df5d9e047e30e714e0aa5ed4caafb3175dd' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/pages/eventosView.tpl',
      1 => 1679056070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/headView.tpl' => 1,
    'file:modules/headerView.tpl' => 1,
    'file:modules/eventsModuleView.tpl' => 1,
    'file:modules/footerView.tpl' => 1,
  ),
),false)) {
function content_64145e239c94d2_88132553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/headView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/headerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/eventsModuleView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/footerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

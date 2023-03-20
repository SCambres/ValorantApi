<?php
/* Smarty version 4.3.0, created on 2023-03-16 16:55:29
  from '/var/www/ejercicios/Tarea5/view/pages/homeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64133bf19b0c08_98617179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e87aa13e1d91b2bf81b17ce7d588b2676f7f0c' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/pages/homeView.tpl',
      1 => 1678982121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/headView.tpl' => 1,
    'file:modules/headerView.tpl' => 1,
    'file:modules/homeModuleView.tpl' => 1,
    'file:modules/footerView.tpl' => 1,
  ),
),false)) {
function content_64133bf19b0c08_98617179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/headView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/headerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/homeModuleView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/footerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

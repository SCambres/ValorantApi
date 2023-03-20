<?php
/* Smarty version 4.3.0, created on 2023-03-20 11:04:38
  from '/var/www/ejercicios/Tarea5/view/pages/armasView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64182fb6768c43_92119175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ddfc5b0da3ab86305475d03bc9c804595195f0' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/pages/armasView.tpl',
      1 => 1679306668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/headView.tpl' => 1,
    'file:modules/headerView.tpl' => 1,
    'file:modules/gunsModuleView.tpl' => 1,
    'file:modules/footerView.tpl' => 1,
  ),
),false)) {
function content_64182fb6768c43_92119175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/headView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/headerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/gunsModuleView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/footerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

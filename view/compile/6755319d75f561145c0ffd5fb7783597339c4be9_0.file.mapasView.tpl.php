<?php
/* Smarty version 4.3.0, created on 2023-03-20 09:07:11
  from '/var/www/ejercicios/Tarea5/view/pages/mapasView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6418142f24d305_40082502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6755319d75f561145c0ffd5fb7783597339c4be9' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/pages/mapasView.tpl',
      1 => 1679299628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/headView.tpl' => 1,
    'file:modules/headerView.tpl' => 1,
    'file:modules/mapsModuleView.tpl' => 1,
    'file:modules/footerView.tpl' => 1,
  ),
),false)) {
function content_6418142f24d305_40082502 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/headView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/headerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/mapsModuleView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/footerView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

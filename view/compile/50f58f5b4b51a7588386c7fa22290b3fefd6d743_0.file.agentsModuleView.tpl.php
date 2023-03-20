<?php
/* Smarty version 4.3.0, created on 2023-03-20 14:18:13
  from '/var/www/ejercicios/Tarea5/view/modules/agentsModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64185d15041fc0_43916437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50f58f5b4b51a7588386c7fa22290b3fefd6d743' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/agentsModuleView.tpl',
      1 => 1679318290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64185d15041fc0_43916437 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">AGENTS</h3>
    <div class="row m-3">
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataAgents']->value->data, 'agent');
$_smarty_tpl->tpl_vars['agent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['agent']->value) {
$_smarty_tpl->tpl_vars['agent']->do_else = false;
?>
        <div class="col-md-4 col-sm-6 my-3">
            <a href="/infoagent/<?php echo $_smarty_tpl->tpl_vars['agent']->value->uuid;?>
/">
                <div class="card card text-white bg-dark align-items-center ancho" id="hoverCard">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <span class="color-title-card"><?php echo $_smarty_tpl->tpl_vars['agent']->value->displayName;?>
</span>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['agent']->value->killfeedPortrait;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['agent']->value->displayName;?>
">
                    </div>
                </div>
            </a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
    </div>
</div><?php }
}

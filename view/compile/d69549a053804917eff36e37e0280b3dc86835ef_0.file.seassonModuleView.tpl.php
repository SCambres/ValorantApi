<?php
/* Smarty version 4.3.0, created on 2023-03-21 12:27:41
  from '/var/www/ejercicios/Tarea5/view/modules/seassonModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641994ad41bd80_72105259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd69549a053804917eff36e37e0280b3dc86835ef' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/seassonModuleView.tpl',
      1 => 1679398057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641994ad41bd80_72105259 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">SEASSON</h3>
    <div class="row m-3">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataSeasson']->value->data, 'seasson');
$_smarty_tpl->tpl_vars['seasson']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seasson']->value) {
$_smarty_tpl->tpl_vars['seasson']->do_else = false;
?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title "><strong class="color-title-card"><?php echo $_smarty_tpl->tpl_vars['seasson']->value->displayName;?>
</strong></h5>
                        <p class="card-text"><strong>Comienzo: </strong> <?php echo $_smarty_tpl->tpl_vars['seasson']->value->startTime;?>
</p>
                        <p class="card-text"><strong>Finalización: </strong> <?php echo $_smarty_tpl->tpl_vars['seasson']->value->endTime;?>
</p>

                    </div>
                </div>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}

<?php
/* Smarty version 4.3.0, created on 2023-03-20 10:54:27
  from '/var/www/ejercicios/Tarea5/view/modules/eventsModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64182d53f3ed25_97843889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95883c8c6084bbe8ee108714b72b49dcfda48ea' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/eventsModuleView.tpl',
      1 => 1679306049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64182d53f3ed25_97843889 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">EVENTOS</h3>    
    <div class="row m-3">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataEvents']->value->data, 'events');
$_smarty_tpl->tpl_vars['events']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['events']->value) {
$_smarty_tpl->tpl_vars['events']->do_else = false;
?>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="">
                    <div class="card text-white bg-dark">
                        <div class="card-body">
                        <h5 class="card-title "><strong class="color-title-card"><?php echo $_smarty_tpl->tpl_vars['events']->value->shortDisplayName;?>
</strong></h5>
                             <p class="card-text"><strong>Comienzo: </strong> <?php echo $_smarty_tpl->tpl_vars['events']->value->startTime;?>
</p>
                             <p class="card-text"><strong>Finalización: </strong> <?php echo $_smarty_tpl->tpl_vars['events']->value->endTime;?>
</p>

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

<?php
/* Smarty version 4.3.0, created on 2023-03-21 10:22:18
  from '/var/www/ejercicios/Tarea5/view/modules/infoagentModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6419774a2fd9f1_45583241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8a4aaa6a81452076651a8bfd10f0aa49da919ef' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/infoagentModuleView.tpl',
      1 => 1679390093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419774a2fd9f1_45583241 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center"><?php echo $_smarty_tpl->tpl_vars['dataInfoAgent']->value->data->displayName;?>
</h3>
    <div class="row m-3">
        <div class="col-md-4 col-lg-4 col-sm-12" style="z-index: -1;">
            <img class="w-100" src="<?php echo $_smarty_tpl->tpl_vars['dataInfoAgent']->value->data->bustPortrait;?>
"> 
        </div>
        <div class="col-md-8 col-lg-8 col-sm-12">
            <h4 class="text-center text-danger bg-dark">CARACTERÍSTICAS</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['dataInfoAgent']->value->data->description;?>
</p>
            <div class="row">
                <div class="col md-12 col-lg-12 col-sm-12">
                <strong>ROL: </strong><?php echo $_smarty_tpl->tpl_vars['dataInfoAgent']->value->data->role->displayName;?>
<br>
                <strong>Descripción: </strong><?php echo $_smarty_tpl->tpl_vars['dataInfoAgent']->value->data->role->description;?>

                </div>
            </div>
            <div class="text-center">
            <strong >HABILIDADES </strong>
            </div>
            <div class="row card-deck">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataInfoAgent']->value->data->abilities, 'abilities');
$_smarty_tpl->tpl_vars['abilities']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['abilities']->value) {
$_smarty_tpl->tpl_vars['abilities']->do_else = false;
?>
                <div class="col-md-12 col-lg-6 mb-4" style="z-index: -999"><hr>
                    <div class="card h-100">
                        <div class="card-header text-center h-100" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['abilities']->value->displayIcon;?>
);">
                            <h5 class="card-title"><strong class="text-danger"><?php echo $_smarty_tpl->tpl_vars['abilities']->value->displayName;?>
</strong></h5>
                            <div class="card-body" >
                                <p> <?php echo $_smarty_tpl->tpl_vars['abilities']->value->description;?>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</div><?php }
}

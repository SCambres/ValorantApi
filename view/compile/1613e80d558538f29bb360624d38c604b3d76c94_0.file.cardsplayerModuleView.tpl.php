<?php
/* Smarty version 4.3.0, created on 2023-03-21 17:40:34
  from '/var/www/ejercicios/Tarea5/view/modules/cardsplayerModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6419de02324f26_08243353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1613e80d558538f29bb360624d38c604b3d76c94' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/cardsplayerModuleView.tpl',
      1 => 1679416825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419de02324f26_08243353 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">TARJETA JUGADOR</h3>
    <div class="row m-3">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataCards']->value->data, 'card');
$_smarty_tpl->tpl_vars['card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->do_else = false;
?>
            <div class="col-md-4 col-sm-6 my-3">

                <div class="card card text-white bg-dark align-items-center ancho h-100" id="hoverCard">
                    <div class="card-head">
                        <span class="color-title-card"><?php echo $_smarty_tpl->tpl_vars['card']->value->displayName;?>
</span>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['card']->value->displayIcon;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['agent']->value->displayName;?>
">
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}

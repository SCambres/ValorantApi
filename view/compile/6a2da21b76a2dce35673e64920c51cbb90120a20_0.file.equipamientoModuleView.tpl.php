<?php
/* Smarty version 4.3.0, created on 2023-03-17 13:45:43
  from '/var/www/ejercicios/Tarea5/view/modules/equipamientoModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641460f76e49f2_36125505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a2da21b76a2dce35673e64920c51cbb90120a20' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/equipamientoModuleView.tpl',
      1 => 1679057136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641460f76e49f2_36125505 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">EQUIPAMIENTO</h3>
    <div class="row m-3 justify-content-center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataGear']->value->data, 'gear');
$_smarty_tpl->tpl_vars['gear']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gear']->value) {
$_smarty_tpl->tpl_vars['gear']->do_else = false;
?>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="">
                    <div class="card text-white bg-dark">
                    <img class="card-img-top gear-img align-self-center" src="<?php echo $_smarty_tpl->tpl_vars['gear']->value->displayIcon;?>
" alt="Imagen de tipo de escudo: <?php echo $_smarty_tpl->tpl_vars['gear']->value->displayName;?>
" >
                        <div class="card-body">
                        <h5 class="card-title"><strong class="color-title-card"><?php echo $_smarty_tpl->tpl_vars['gear']->value->displayName;?>
</strong></h5>
                             <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['gear']->value->description;?>
</p>
                             <p class="card-text">Cost: <?php echo $_smarty_tpl->tpl_vars['gear']->value->shopData->cost;?>
</p>
                             <p class="card-text">Category: <?php echo $_smarty_tpl->tpl_vars['gear']->value->shopData->categoryText;?>
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

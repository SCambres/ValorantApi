<?php
/* Smarty version 4.3.0, created on 2023-03-17 13:37:10
  from '/var/www/ejercicios/Tarea5/view/modules/modosdejuegoModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64145ef6e3a154_45680847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86b7365f0323c3f1e1b8b1c6c541597f1bef920b' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/modosdejuegoModuleView.tpl',
      1 => 1679056616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64145ef6e3a154_45680847 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">MODOS DE JUEGO</h3>
    <div class="row m-3">
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataModes']->value->data, 'modes');
$_smarty_tpl->tpl_vars['modes']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['modes']->value) {
$_smarty_tpl->tpl_vars['modes']->do_else = false;
?>
        <div class="col-md-4 col-sm-6 my-3">
            <a href="">
                <div class="card text-white bg-dark align-items-center h-100" id="hoverCard">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <span><strong class="color-title-card"><?php echo $_smarty_tpl->tpl_vars['modes']->value->displayName;?>
</strong></span>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['modes']->value->displayIcon;?>
" alt="Imagen correspondiente al modo de juego" class="game-mode-img">
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

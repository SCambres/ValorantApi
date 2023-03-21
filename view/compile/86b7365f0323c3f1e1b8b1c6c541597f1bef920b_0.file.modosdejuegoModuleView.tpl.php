<?php
/* Smarty version 4.3.0, created on 2023-03-21 12:35:22
  from '/var/www/ejercicios/Tarea5/view/modules/modosdejuegoModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6419967a768e38_95420133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86b7365f0323c3f1e1b8b1c6c541597f1bef920b' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/modosdejuegoModuleView.tpl',
      1 => 1679398519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419967a768e38_95420133 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['modes']->value->displayIcon;
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['modes']->value->displayIcon;?>
" class="game-mode-img">
                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['modes']->value->duration;
$_prefixVariable2 = ob_get_clean();
if (!empty($_prefixVariable2)) {?>
                            <hr><p class="card-text"><strong>Duración: </strong> <?php echo $_smarty_tpl->tpl_vars['modes']->value->duration;?>
</p>
                            <?php } else { ?>
                             <p>Modo de juego individual</p>   
                        <?php }?>
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

<?php
/* Smarty version 4.3.0, created on 2023-03-21 17:01:28
  from '/var/www/ejercicios/Tarea5/view/modules/chromasskinModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6419d4d873d603_83239526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1063a4299395d5be912256700229649c42f7ade3' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/chromasskinModuleView.tpl',
      1 => 1679414424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419d4d873d603_83239526 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
<h3 class="my-4 text-center">SKINS CHROMAS</h3>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataGunsSkin']->value->data, 'gun', false, 'index');
$_smarty_tpl->tpl_vars['gun']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['gun']->value) {
$_smarty_tpl->tpl_vars['gun']->do_else = false;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['gun']->value->displayIcon)) {?>
        <h4 class="my-4 text-center"><?php echo $_smarty_tpl->tpl_vars['gun']->value->displayName;?>
</h4>
        <div id="carouselExampleIndicators-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gun']->value->chromas, 'chroma', false, 'chromaIndex');
$_smarty_tpl->tpl_vars['chroma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chromaIndex']->value => $_smarty_tpl->tpl_vars['chroma']->value) {
$_smarty_tpl->tpl_vars['chroma']->do_else = false;
?>
                    <li data-target="#carouselExampleIndicators-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['chromaIndex']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['chromaIndex']->value == 0) {?>class="active" <?php }?>></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
            <div class="carousel-inner">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gun']->value->chromas, 'chroma', false, 'chromaIndex');
$_smarty_tpl->tpl_vars['chroma']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chromaIndex']->value => $_smarty_tpl->tpl_vars['chroma']->value) {
$_smarty_tpl->tpl_vars['chroma']->do_else = false;
?>
                    <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['chromaIndex']->value == 0) {?>active<?php }?>">
                        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['chroma']->value->fullRender;?>
">
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div> 
<?php }
}

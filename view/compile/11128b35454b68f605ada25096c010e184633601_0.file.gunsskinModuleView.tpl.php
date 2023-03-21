<?php
/* Smarty version 4.3.0, created on 2023-03-21 13:59:11
  from '/var/www/ejercicios/Tarea5/view/modules/gunsskinModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6419aa1fdc0528_97254355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11128b35454b68f605ada25096c010e184633601' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/gunsskinModuleView.tpl',
      1 => 1679403548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419aa1fdc0528_97254355 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">SKINS GUNS</h3>
    
    <form id="searchForm" class="mb-4">
        <div class="form-group">
            <input type="text" class="form-control" id="searchInput" placeholder="Buscar skin...">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataGunsSkin']->value->data, 'gun', false, 'index');
$_smarty_tpl->tpl_vars['gun']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['gun']->value) {
$_smarty_tpl->tpl_vars['gun']->do_else = false;
?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value == 0) {?>class="active" <?php }?>></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
        
        <div class="carousel-inner">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataGunsSkin']->value->data, 'gun', false, 'index');
$_smarty_tpl->tpl_vars['gun']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['gun']->value) {
$_smarty_tpl->tpl_vars['gun']->do_else = false;
?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['gun']->value->displayIcon;
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?>
                <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['index']->value == 0) {?>active<?php }?>" data-skin-name="<?php echo $_smarty_tpl->tpl_vars['gun']->value->displayName;?>
">
                    <h4 class="my-4 text-center"><?php echo $_smarty_tpl->tpl_vars['gun']->value->displayName;?>
</h4>
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['gun']->value->displayIcon;?>
">
                    </div>
                </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<?php }
}

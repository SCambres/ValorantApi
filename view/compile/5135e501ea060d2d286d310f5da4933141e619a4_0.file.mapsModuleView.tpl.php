<?php
/* Smarty version 4.3.0, created on 2023-03-20 10:51:41
  from '/var/www/ejercicios/Tarea5/view/modules/mapsModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64182cad62cf13_16049334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5135e501ea060d2d286d310f5da4933141e619a4' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/mapsModuleView.tpl',
      1 => 1679305898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64182cad62cf13_16049334 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">MAPAS</h3>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataMaps']->value->data, 'map', false, 'index');
$_smarty_tpl->tpl_vars['map']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['map']->value) {
$_smarty_tpl->tpl_vars['map']->do_else = false;
?>
        <div id="accordion<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
            <div class="card">
                <div class="card-title text-center m-2 color-title-card">
                    <h5>
                        <span><strong><?php echo $_smarty_tpl->tpl_vars['map']->value->displayName;?>
</strong></span>    
                        <span><?php echo $_smarty_tpl->tpl_vars['map']->value->coordinates;?>
</span>
                    </h5>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['map']->value->displayIcon)) {?>
                <div class="card-header" id="headingIcon<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                    <h5 class="mb-0 text-center">
                        <button class="btn btn-sm" data-toggle="collapse" data-target="#collapseIcon<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" aria-expanded="true" aria-controls="collapseIcon<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                            <span><strong><i class="fa-solid fa-map"></i> Estructura del mapa</strong></span><br>
                        </button>
                    </h5>
                </div>
                <div id="collapseIcon<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="collapse" aria-labelledby="headingIcon<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-parent="#accordion<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                    <div class="card-body text-center">
                        <img id="mapIcon" src="<?php echo $_smarty_tpl->tpl_vars['map']->value->displayIcon;?>
">
                    </div>
                </div>
                <?php }?>
                <div class="card-header" id="headingSplash<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                    <h5 class="mb-0 text-center">
                        <button class="btn btn-sm" data-toggle="collapse" data-target="#collapseSplash<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" aria-expanded="true" aria-controls="collapseSplash<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                            <span><strong><i class="fa-sharp fa-solid fa-palette"></i> Splash-Art</strong></span><br>
                        </button>
                    </h5>
                </div>
                <div id="collapseSplash<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="collapse" aria-labelledby="headingSplash<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-parent="#accordion<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                    <div class="card-body text-center">
                        <img id="mapSplash" src="<?php echo $_smarty_tpl->tpl_vars['map']->value->listViewIcon;?>
">
                    </div>
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
</div>

<?php }
}

<?php
/* Smarty version 4.3.0, created on 2023-03-20 12:33:54
  from '/var/www/ejercicios/Tarea5/view/modules/gunsModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641844a2055eb4_73706660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42c4ddba1da76cc40530d85d77657ee2b555ceaf' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/gunsModuleView.tpl',
      1 => 1679312031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641844a2055eb4_73706660 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">ARMAS</h3>
    <div class="row m-3 card-deck">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataGuns']->value->data, 'gun');
$_smarty_tpl->tpl_vars['gun']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gun']->value) {
$_smarty_tpl->tpl_vars['gun']->do_else = false;
?>
            <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card text-white bg-dark h-100">
                        <div class="card-header text-center">
                            <h5 class="card-title"><strong class="text-danger"><?php echo $_smarty_tpl->tpl_vars['gun']->value->displayName;?>
</strong></h5>
                            <img class="card-img-top gear-img align-self-center" src="<?php echo $_smarty_tpl->tpl_vars['gun']->value->displayIcon;?>
"
                                alt="Imagen de tipo de arama: <?php echo $_smarty_tpl->tpl_vars['gun']->value->displayName;?>
">
                        </div>
                        <div class="card-body">
                        <?php if (!empty($_smarty_tpl->tpl_vars['gun']->value->weaponStats->fireRate)) {?>
                            <h6><strong class="text-danger">WEAPONS STATS</strong></h6>
                            <p class="card-text"><strong>Cadencia: </strong><?php echo $_smarty_tpl->tpl_vars['gun']->value->weaponStats->fireRate;?>
</p>  
                            <p class="card-text"><strong>Tiempo recarga: </strong><?php echo $_smarty_tpl->tpl_vars['gun']->value->weaponStats->reloadTimeSeconds;?>
</p>
                            <p class="card-text"><strong>Precio: </strong><?php echo $_smarty_tpl->tpl_vars['gun']->value->shopData->cost;?>
</p>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gun']->value->weaponStats->damageRanges, 'damage');
$_smarty_tpl->tpl_vars['damage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['damage']->value) {
$_smarty_tpl->tpl_vars['damage']->do_else = false;
?>
                                <h7><strong class="text-danger">DAÑO (<?php echo $_smarty_tpl->tpl_vars['damage']->value->rangeStartMeters;?>
-<?php echo $_smarty_tpl->tpl_vars['damage']->value->rangeEndMeters;?>
): </strong></h7>
                                <p class="card-text"><strong>Daño cabeza: </strong><?php echo $_smarty_tpl->tpl_vars['damage']->value->headDamage;?>
</p>
                                <p class="card-text"><strong>Daño cuerpo: </strong><?php echo $_smarty_tpl->tpl_vars['damage']->value->bodyDamage;?>
</p>
                                <p class="card-text"><strong>Daño piernas: </strong><?php echo $_smarty_tpl->tpl_vars['damage']->value->legDamage;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>    
                        </div>
                    </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}

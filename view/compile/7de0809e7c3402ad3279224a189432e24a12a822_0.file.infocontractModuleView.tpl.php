<?php
/* Smarty version 4.3.0, created on 2023-03-21 10:03:20
  from '/var/www/ejercicios/Tarea5/view/modules/infocontractModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641972d8b47436_13734382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7de0809e7c3402ad3279224a189432e24a12a822' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/infocontractModuleView.tpl',
      1 => 1679389399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641972d8b47436_13734382 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center"><?php echo $_smarty_tpl->tpl_vars['dataInfoContract']->value->data->displayName;?>
</h3>
    <div class="contract-info">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataInfoContract']->value->data->content->chapters, 'chapter');
$_smarty_tpl->tpl_vars['chapter']->iteration = 0;
$_smarty_tpl->tpl_vars['chapter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chapter']->value) {
$_smarty_tpl->tpl_vars['chapter']->do_else = false;
$_smarty_tpl->tpl_vars['chapter']->iteration++;
$__foreach_chapter_0_saved = $_smarty_tpl->tpl_vars['chapter'];
?>
                <div class="col-md-6 col-lg-4 border">
                    <h3 class="text-danger m-3">CAPITULO <?php echo $_smarty_tpl->tpl_vars['chapter']->iteration;?>
</h3>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chapter']->value->levels, 'level');
$_smarty_tpl->tpl_vars['level']->iteration = 0;
$_smarty_tpl->tpl_vars['level']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->do_else = false;
$_smarty_tpl->tpl_vars['level']->iteration++;
$__foreach_level_1_saved = $_smarty_tpl->tpl_vars['level'];
?>
                            <li>
                                <h4>Level <?php echo $_smarty_tpl->tpl_vars['level']->iteration;?>
</h4>
                                <p>Tipo: <?php echo $_smarty_tpl->tpl_vars['level']->value->reward->type;?>
</p>
                                <p>XP: <?php echo $_smarty_tpl->tpl_vars['level']->value->xp;?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['level']->value->vpCost > 0) {?>
                                    <p>Coste VP: <?php echo $_smarty_tpl->tpl_vars['level']->value->vpCost;?>
</p>
                                <?php } else { ?>
                                    <p>Gratis</p>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['level']->value->isPurchasableWithVP) {?>
                                    <p>Puede comprarse con VP</p>
                                <?php }?>
                            </li>
                        <?php
$_smarty_tpl->tpl_vars['level'] = $__foreach_level_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php
$_smarty_tpl->tpl_vars['chapter'] = $__foreach_chapter_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php }
}

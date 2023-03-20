<?php
/* Smarty version 4.3.0, created on 2023-03-20 17:44:46
  from '/var/www/ejercicios/Tarea5/view/modules/contractModuleView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64188d7e1e71b2_29530337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b185dc6328a3919837bbeb2f1624c03c53e1c25' => 
    array (
      0 => '/var/www/ejercicios/Tarea5/view/modules/contractModuleView.tpl',
      1 => 1679330681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64188d7e1e71b2_29530337 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid p-5">
    <h3 class="my-4 text-center">CONTRATOS</h3>    
    <div class="row m-3">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataContracts']->value->data, 'contract');
$_smarty_tpl->tpl_vars['contract']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contract']->value) {
$_smarty_tpl->tpl_vars['contract']->do_else = false;
?>
        <div class="col-md-4 col-sm-6 my-3">
            <a href="/infocontract/<?php echo $_smarty_tpl->tpl_vars['contract']->value->uuid;?>
/">
                <div class="card card text-white bg-dark align-items-center ancho" id="hoverCard">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <span class="color-title-card"><?php echo $_smarty_tpl->tpl_vars['contract']->value->displayName;?>
</span>
                        <strong class="text-center"><span class=""><?php echo $_smarty_tpl->tpl_vars['contract']->value->content->relationType;?>
</span></strong>

                    </div>
                </div>
            </a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    

    </div>
</div>    <?php }
}

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-17 18:08:37
  from '/var/www/html/gestiones/views/partials/_mensajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61957d65a8f572_70900749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73fa8de5d124d9b73dff5ba9340a134e504a49af' => 
    array (
      0 => '/var/www/html/gestiones/views/partials/_mensajes.tpl',
      1 => 1635797460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61957d65a8f572_70900749 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['_mensaje']->value))) {?>
    <div style="margin-top: 20px;"></div>
    <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['_error']->value))) {?>
     <div style="margin-top: 20px;"></div>
     <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
<?php }
}
}

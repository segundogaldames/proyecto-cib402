<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-06 19:58:38
  from '/var/www/html/profesor-galdames/views/partials/_mensajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6187089eb24b82_38623045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73757b9c3c38a136ace01f80a34dbfe9f670ac50' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/partials/_mensajes.tpl',
      1 => 1635797460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6187089eb24b82_38623045 (Smarty_Internal_Template $_smarty_tpl) {
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

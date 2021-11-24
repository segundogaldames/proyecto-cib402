<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 14:44:45
  from '/Applications/MAMP/htdocs/profesor-galdames/views/partials/_mensajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a895dc8c112_13350495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec5012ea32dabedc7cec3a9a8f27675b8fbe91e6' => 
    array (
      0 => '/Applications/MAMP/htdocs/profesor-galdames/views/partials/_mensajes.tpl',
      1 => 1636465593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618a895dc8c112_13350495 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-24 17:25:58
  from '/var/www/html/proyecto-cib402/views/partials/_mensajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619e9fd6263353_71470754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90fff9ccdface21186a0c8a7561281499c1b7aef' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/partials/_mensajes.tpl',
      1 => 1635797460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619e9fd6263353_71470754 (Smarty_Internal_Template $_smarty_tpl) {
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

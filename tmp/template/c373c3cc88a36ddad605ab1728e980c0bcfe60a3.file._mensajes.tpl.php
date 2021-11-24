<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-01 17:11:05
         compiled from "/var/www/html/profesor-galdames/views/partials/_mensajes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9634134236180496c2306c0-63601178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c373c3cc88a36ddad605ab1728e980c0bcfe60a3' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/partials/_mensajes.tpl',
      1 => 1635797460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9634134236180496c2306c0-63601178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6180496c44e924_46658456',
  'variables' => 
  array (
    '_mensaje' => 0,
    '_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6180496c44e924_46658456')) {function content_6180496c44e924_46658456($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)) {?>
    <div style="margin-top: 20px;"></div>
    <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
     <div style="margin-top: 20px;"></div>
     <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
<?php }?><?php }} ?>

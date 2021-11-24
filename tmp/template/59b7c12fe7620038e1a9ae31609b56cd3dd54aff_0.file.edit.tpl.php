<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-18 14:46:08
  from '/var/www/html/gestiones/views/origenes/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61969f70e30034_76768655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59b7c12fe7620038e1a9ae31609b56cd3dd54aff' => 
    array (
      0 => '/var/www/html/gestiones/views/origenes/edit.tpl',
      1 => 1637260930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../origenes/_form.tpl' => 1,
  ),
),false)) {
function content_61969f70e30034_76768655 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-md-6 offset-md-3">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:../origenes/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}

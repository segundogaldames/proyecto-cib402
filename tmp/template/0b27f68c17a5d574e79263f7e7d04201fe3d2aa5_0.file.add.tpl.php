<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-18 14:45:30
  from '/var/www/html/gestiones/views/origenes/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61969f4a46eb10_92775572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b27f68c17a5d574e79263f7e7d04201fe3d2aa5' => 
    array (
      0 => '/var/www/html/gestiones/views/origenes/add.tpl',
      1 => 1637260818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../origenes/_form.tpl' => 1,
  ),
),false)) {
function content_61969f4a46eb10_92775572 (Smarty_Internal_Template $_smarty_tpl) {
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

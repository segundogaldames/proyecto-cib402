<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-17 19:47:37
  from '/var/www/html/gestiones/views/roles/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6195949909a644_14721380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6478cfb36e66565cabbc1cb884ece282044e4ff' => 
    array (
      0 => '/var/www/html/gestiones/views/roles/edit.tpl',
      1 => 1637192619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../roles/_form.tpl' => 1,
  ),
),false)) {
function content_6195949909a644_14721380 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-6 offset-md-3">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../roles/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><?php }
}

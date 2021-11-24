<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-17 20:38:52
  from '/var/www/html/gestiones/views/usuarios/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6195a09c8711e2_48541893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86fdb23e42bdc673483b6718db8dfa4be8163585' => 
    array (
      0 => '/var/www/html/gestiones/views/usuarios/add.tpl',
      1 => 1637195929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../usuarios/_form.tpl' => 1,
  ),
),false)) {
function content_6195a09c8711e2_48541893 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-6 offset-md-3">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../usuarios/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><?php }
}

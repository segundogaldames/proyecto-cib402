<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-23 17:53:08
  from '/var/www/html/gestiones/views/estados/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619d54b48003f7_77199384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea7ed14f690a5c34bc4108d9b8a0cfef1b2b3b5b' => 
    array (
      0 => '/var/www/html/gestiones/views/estados/edit.tpl',
      1 => 1637700780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../estados/_form.tpl' => 1,
  ),
),false)) {
function content_619d54b48003f7_77199384 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-md-6 offset-md-3">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:../estados/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}

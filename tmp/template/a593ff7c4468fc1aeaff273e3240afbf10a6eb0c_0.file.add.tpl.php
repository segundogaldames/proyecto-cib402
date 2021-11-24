<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-18 14:43:50
  from '/var/www/html/gestiones/views/roles/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61969ee6d9b083_71221003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a593ff7c4468fc1aeaff273e3240afbf10a6eb0c' => 
    array (
      0 => '/var/www/html/gestiones/views/roles/add.tpl',
      1 => 1637258055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../roles/_form.tpl' => 1,
  ),
),false)) {
function content_61969ee6d9b083_71221003 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-md-6 offset-md-3">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:../roles/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}

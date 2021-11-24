<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-23 16:06:07
  from '/var/www/html/gestiones/views/estados/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619d3b9f2d5f88_74513491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ea0cc3453c5965517b24e62849ae9042e202692' => 
    array (
      0 => '/var/www/html/gestiones/views/estados/add.tpl',
      1 => 1637694320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../estados/_form.tpl' => 1,
  ),
),false)) {
function content_619d3b9f2d5f88_74513491 (Smarty_Internal_Template $_smarty_tpl) {
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

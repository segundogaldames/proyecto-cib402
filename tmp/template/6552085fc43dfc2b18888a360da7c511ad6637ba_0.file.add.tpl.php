<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-19 15:41:41
  from '/var/www/html/gestiones/views/clientes/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6197efe52d1334_24699795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6552085fc43dfc2b18888a360da7c511ad6637ba' => 
    array (
      0 => '/var/www/html/gestiones/views/clientes/add.tpl',
      1 => 1637347295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../clientes/_form.tpl' => 1,
  ),
),false)) {
function content_6197efe52d1334_24699795 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-md-6 offset-md-3">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:../clientes/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-15 18:37:11
  from '/var/www/html/proyecto-cib402/views/roles/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ba60074821f8_04175516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '417d312ac4ab12bccebe0d8941adf1383e859c5a' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/roles/add.tpl',
      1 => 1639593013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../roles/_form.tpl' => 1,
  ),
),false)) {
function content_61ba60074821f8_04175516 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles" class="list-group-item list-group-item-action">Roles</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-1">
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:../roles/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

        </div>
    </div>
</div><?php }
}

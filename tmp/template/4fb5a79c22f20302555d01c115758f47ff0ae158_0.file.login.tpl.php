<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-15 17:30:58
  from '/var/www/html/proyecto-cib402/views/usuarios/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ba50823abcf0_42702891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fb5a79c22f20302555d01c115758f47ff0ae158' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/usuarios/login.tpl',
      1 => 1639600256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../usuarios/_form.tpl' => 1,
  ),
),false)) {
function content_61ba50823abcf0_42702891 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

        <div class="col-md-6 offset-md-3">
            <div class="col-md-6 offset-md-1">
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <h5 class="text-info">Inicie sessión para continuar</h5>
                <?php $_smarty_tpl->_subTemplateRender("file:../usuarios/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

        </div>

</div><?php }
}

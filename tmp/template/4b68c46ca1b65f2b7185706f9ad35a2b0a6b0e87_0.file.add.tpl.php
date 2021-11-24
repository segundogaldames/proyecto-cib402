<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-13 22:24:10
  from '/var/www/html/profesor-galdames/views/roles/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6190734a56e350_62350835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b68c46ca1b65f2b7185706f9ad35a2b0a6b0e87' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/roles/add.tpl',
      1 => 1636856647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../roles/_form.tpl' => 1,
  ),
),false)) {
function content_6190734a56e350_62350835 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <div class="">

                    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <p class="text-danger">Campos obligatorios</p>
                    <?php $_smarty_tpl->_subTemplateRender("file:../roles/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

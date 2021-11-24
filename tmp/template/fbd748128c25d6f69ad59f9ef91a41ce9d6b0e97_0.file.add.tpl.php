<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-13 21:43:20
  from '/var/www/html/profesor-galdames/views/tematicas/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619069b8c52582_14510972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbd748128c25d6f69ad59f9ef91a41ce9d6b0e97' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/tematicas/add.tpl',
      1 => 1636854194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../tematicas/_form.tpl' => 1,
  ),
),false)) {
function content_619069b8c52582_14510972 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <div class="">

                    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <p class="text-danger">Campos obligatorios *</p>
                    <?php $_smarty_tpl->_subTemplateRender("file:../tematicas/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

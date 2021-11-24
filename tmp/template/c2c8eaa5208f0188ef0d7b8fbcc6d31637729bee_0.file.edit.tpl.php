<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-11 16:46:32
  from '/var/www/html/profesor-galdames/views/articulos/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618d8128e71b91_74800405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c8eaa5208f0188ef0d7b8fbcc6d31637729bee' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/articulos/edit.tpl',
      1 => 1636663575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../articulos/_form.tpl' => 1,
  ),
),false)) {
function content_618d8128e71b91_74800405 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

<?php echo '</script'; ?>
>
<section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <h6 style="font-weight: bold;">Temática: <?php echo $_smarty_tpl->tpl_vars['articulo']->value['tematica'];?>
</h6>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:../articulos/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

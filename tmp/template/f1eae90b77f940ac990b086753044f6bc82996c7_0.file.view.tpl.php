<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-13 21:58:44
  from '/var/www/html/profesor-galdames/views/tematicas/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61906d543690c1_57010174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1eae90b77f940ac990b086753044f6bc82996c7' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/tematicas/view.tpl',
      1 => 1636855120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61906d543690c1_57010174 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <table class="table table-hover">
                    <tr>
                        <th>Temática:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['tematica']->value['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Descripción:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['tematica']->value['descripcion'];?>
</td>
                    </tr>
                    <tr>
                        <th>Activo:</th>
                        <td><?php if ($_smarty_tpl->tpl_vars['tematica']->value['active'] == 1) {?> Si <?php } else { ?> No <?php }?></td>
                    </tr>
                </table>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/edit/<?php echo $_smarty_tpl->tpl_vars['tematica']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar<a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

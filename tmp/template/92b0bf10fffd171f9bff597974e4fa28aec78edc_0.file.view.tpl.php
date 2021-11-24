<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-11 16:09:36
  from '/var/www/html/profesor-galdames/views/articulos/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618d7880770436_90045584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b0bf10fffd171f9bff597974e4fa28aec78edc' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/articulos/view.tpl',
      1 => 1636661372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618d7880770436_90045584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-8 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="table table-hover">
                    <tr>
                        <th>Título:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['articulo']->value['titulo'];?>
</td>
                    </tr>
                    <tr>
                        <th>Descripción:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['articulo']->value['descripcion'];?>
</td>
                    </tr>
                    <tr>
                        <th>Activo:</th>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['articulo']->value['active'] == 1) {?> Si <?php } else { ?> No <?php }?>
                        </td>
                    </tr>
                    <tr>
                        <th>Temática:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['articulo']->value['tematica'];?>
</td>
                    </tr>
                    <tr>
                        <th>Autor:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['articulo']->value['usuario'];?>
</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['articulo']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                    <tr>
                        <th>Actualizado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['articulo']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                </table>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
articulos/edit/<?php echo $_smarty_tpl->tpl_vars['articulo']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
parrafos/add/<?php echo $_smarty_tpl->tpl_vars['articulo']->value['id'];?>
" class="btn btn-outline-success btn-sm">Agregar Párrafo</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/view/<?php echo $_smarty_tpl->tpl_vars['articulo']->value['tematica_id'];?>
" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

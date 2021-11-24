<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-12 22:08:14
  from '/var/www/html/profesor-galdames/views/videos/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618f1e0edf23a7_80580927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16d62c44c0990e9aafd9af35c9ecc62cef6be5fc' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/videos/view.tpl',
      1 => 1636769274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618f1e0edf23a7_80580927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-12 intro-info order-md-first order-last">
                <div class="row">
                    <div class="col-md-6">
                        <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <table class="table table-hover">
                            <tr>
                                <th>Titulo:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['video']->value['titulo'];?>
</td>
                            </tr>
                            <tr>
                                <th>Descripción:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['video']->value['descripcion'];?>
</td>
                            </tr>
                            <tr>
                                <th>Estado:</th>
                                <td><?php if ($_smarty_tpl->tpl_vars['video']->value['active'] == 1) {?> Activo <?php } else { ?> Inactivo <?php }?></td>
                            </tr>
                            <tr>
                                <th>Temática:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['video']->value['tematica'];?>
</td>
                            </tr>
                            <tr>
                                <th>Autor:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['video']->value['usuario'];?>
</td>
                            </tr>
                            <tr>
                                <th>Creado:</th>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['video']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                            </tr>
                            <tr>
                                <th>Actualizado:</th>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['video']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                            </tr>

                        </table>
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
videos/edit/<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
"
                                class="btn btn-outline-primary btn-sm">Editar</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/cursosAdmin"
                                class="btn btn-outline-primary btn-sm">Cursos</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <iframe width="100%" height="315" src="<?php echo $_smarty_tpl->tpl_vars['video']->value['link'];?>
" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

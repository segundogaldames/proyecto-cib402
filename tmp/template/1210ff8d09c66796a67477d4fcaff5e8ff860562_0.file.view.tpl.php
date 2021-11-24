<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 14:48:40
  from '/Applications/MAMP/htdocs/profesor-galdames/views/cursos/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a8a48e0bc02_10301461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1210ff8d09c66796a67477d4fcaff5e8ff860562' => 
    array (
      0 => '/Applications/MAMP/htdocs/profesor-galdames/views/cursos/view.tpl',
      1 => 1636465592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618a8a48e0bc02_10301461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/profesor-galdames/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section id="intro" class="clearfix py-4" style="padding-bottom:50px">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-8 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="table table-hover">
                    <tr>
                        <th>Curso:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['curso']->value['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Categoría:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['curso']->value['categoria'];?>
</td>
                    </tr>
                    <tr>
                        <th>Activo:</th>
                        <td><?php if ($_smarty_tpl->tpl_vars['curso']->value['activo'] == 1) {?> Si <?php } else { ?> No <?php }?></td>
                    </tr>
                    <tr>
                        <th>Creado por:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['curso']->value['usuario'];?>
</td>
                    </tr>
                    <tr>
                        <th>Descripción:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['curso']->value['descripcion'];?>
</td>
                    </tr>
                    <tr>
                        <th>Precio:</th>
                        <td><?php if ($_smarty_tpl->tpl_vars['curso']->value['precio'] > 0) {?> $<?php echo number_format($_smarty_tpl->tpl_vars['curso']->value['precio'],0,",",".");?>
 CLP <?php } else { ?> Gratis <?php }?> </td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['curso']->value['created_at'],"%d-%m-%Y %H:%M:S");?>
</td>
                    </tr>
                    <tr>
                        <th>Actualizado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['curso']->value['updated_at'],"%d-%m-%Y %H:%M:S");?>
</td>
                    </tr>
                </table>
                <p>
                    <?php if (!$_smarty_tpl->tpl_vars['matricula']->value) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
matriculas/add/<?php echo $_smarty_tpl->tpl_vars['curso']->value['id'];?>
" class="btn btn-outline-success btn-sm">Agregar a mi Colección</a>
                    <?php }?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/tematicasCurso/<?php echo $_smarty_tpl->tpl_vars['curso']->value['id'];?>
" class="btn btn-outline-success btn-sm">Ver Temáticas</a>

                    <?php if (Session::get('usuario_rol') == 'Administrador') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/edit/<?php echo $_smarty_tpl->tpl_vars['curso']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
matriculas/matriculados/<?php echo $_smarty_tpl->tpl_vars['curso']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Ver Matrículas</a>
                    <?php }?>
                    <?php if (Session::get('usuario_rol') == 'Administrador') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/cursosAdmin" class="btn btn-outline-primary btn-sm">Volver</a>
                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/" class="btn btn-outline-primary btn-sm">Volver</a>
                    <?php }?>

                </p>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

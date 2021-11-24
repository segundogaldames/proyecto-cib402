<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 23:22:42
         compiled from "/var/www/html/profesor-galdames/views/cursos/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127999658661833406e39f16-96177327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aeeca662a27c1a8d7fba60861e9f5c36bb7cf85' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/cursos/view.tpl',
      1 => 1636165355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127999658661833406e39f16-96177327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61833407098778_30541170',
  'variables' => 
  array (
    'title' => 0,
    'curso' => 0,
    'matricula' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61833407098778_30541170')) {function content_61833407098778_30541170($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.date_format.php';
?><section id="intro" class="clearfix py-4" style="padding-bottom:50px">
    <div class="container" style="padding-bottom: 50px">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-8 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                        <td><?php if ($_smarty_tpl->tpl_vars['curso']->value['activo']==1) {?> Si <?php } else { ?> No <?php }?></td>
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
                        <td><?php if ($_smarty_tpl->tpl_vars['curso']->value['precio']>0) {?> $<?php echo number_format($_smarty_tpl->tpl_vars['curso']->value['precio'],0,",",".");?>
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

                    <?php if (Session::get('usuario_rol')=='Administrador') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/edit/<?php echo $_smarty_tpl->tpl_vars['curso']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar</a>
                    <?php }?>
                    <?php if (Session::get('usuario_rol')=='Administrador') {?>
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
</section><!-- #intro --><?php }} ?>

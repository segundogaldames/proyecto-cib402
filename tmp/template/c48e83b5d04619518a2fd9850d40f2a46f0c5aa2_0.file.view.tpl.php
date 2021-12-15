<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-15 18:00:26
  from '/var/www/html/proyecto-cib402/views/usuarios/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ba576ab52879_90721039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c48e83b5d04619518a2fd9850d40f2a46f0c5aa2' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/usuarios/view.tpl',
      1 => 1639602021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61ba576ab52879_90721039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/proyecto-cib402/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="col-md-12">
    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios"
                    class="list-group-item list-group-item-action">Funcionarios</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
especialidades"
                    class="list-group-item    list-group-item-action">Especialidades</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles" class="list-group-item list-group-item-action">Roles</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios/add" class="list-group-item list-group-item-success">Agregar
                    Funcionario</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-1">
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="table table-hover table-responsive">
                    <tr>
                        <th>RUT:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['funcionario']['rut'];?>
</td>
                    </tr>
                    <tr>
                        <th>Nombre:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['funcionario']['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['funcionario']['email'];?>
</td>
                    </tr>
                    <tr>
                        <th>Rol:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['funcionario']['rol']['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Especialidad:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['funcionario']['especialidad']['nombre'];?>
</td>
                    </tr>

                    <tr>
                        <th>Activo:</th>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value['activo'] == 1) {?>
                                Si
                            <?php } else { ?>
                                No
                            <?php }?>

                        </td>
                    </tr>

                    <tr>
                        <th>Creado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['usuario']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                    <tr>
                        <th>Modificado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['usuario']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                </table>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="btn btn-outline-primary">Volver</a>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/editPassword/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
"
                        class="btn btn-outline-success">Cambiar Password</a>
                </p>
            </div>
        </div>
    </div>
</div><?php }
}

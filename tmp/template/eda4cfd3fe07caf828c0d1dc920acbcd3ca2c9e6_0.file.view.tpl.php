<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-01 15:10:37
  from '/var/www/html/proyecto-cib402/views/roles/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a7ba9ddb2275_21443793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eda4cfd3fe07caf828c0d1dc920acbcd3ca2c9e6' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/roles/view.tpl',
      1 => 1638382233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61a7ba9ddb2275_21443793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/proyecto-cib402/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="col-md-12">
    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles" class="list-group-item list-group-item-action">Roles</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/add" class="list-group-item list-group-item-success">Agregar Rol</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-1">

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="table table-hover table-responsive">
                    <tr>
                        <th>Rol:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rol']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                    <tr>
                        <th>Modificado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rol']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                </table>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/edit/<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
" class="btn btn-outline-success">Editar</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles" class="btn btn-outline-primary">Volver</a>
                </p>
            </div>

        </div>
    </div>
</div><?php }
}

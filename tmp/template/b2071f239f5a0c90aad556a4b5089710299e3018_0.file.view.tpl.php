<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-17 23:03:54
  from '/var/www/html/gestiones/views/usuarios/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6195c29aaf3c89_50371436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2071f239f5a0c90aad556a4b5089710299e3018' => 
    array (
      0 => '/var/www/html/gestiones/views/usuarios/view.tpl',
      1 => 1637204625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6195c29aaf3c89_50371436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/gestiones/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="col-md-6 offset-md-3">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>


    </h1>

    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <table class="table table-hover">
        <tr>
            <th>Nombre:</th>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td>
        </tr>
        <tr>
            <th>Activo:</th>
            <td><?php if ($_smarty_tpl->tpl_vars['usuario']->value['activo'] == 1) {?> Si <?php } else { ?> No <?php }?></td>
        </tr>
        <tr>
            <th>Rol:</th>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['rol']['nombre'];?>
</td>
        </tr>
        <tr>
            <th>Creado:</th>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['usuario']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
        </tr>
        <tr>
            <th>Actualizado:</th>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['usuario']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
        </tr>
    </table>
    <p>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/edit/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" class="btn btn-outline-primary">Editar</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios" class="btn btn-outline-primary">Volver</a>
    </p>
</div><?php }
}

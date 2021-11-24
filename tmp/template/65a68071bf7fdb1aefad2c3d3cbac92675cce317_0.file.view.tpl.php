<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-23 17:51:35
  from '/var/www/html/gestiones/views/estados/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619d5457e8bcf5_30999512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65a68071bf7fdb1aefad2c3d3cbac92675cce317' => 
    array (
      0 => '/var/www/html/gestiones/views/estados/view.tpl',
      1 => 1637700689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_619d5457e8bcf5_30999512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/gestiones/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container-fluid">
    <div class="col-md-6 offset-md-3">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>


        </h1>

        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <table class="table table-hover">
            <tr>
                <th>Estado:</th>
                <td><?php echo $_smarty_tpl->tpl_vars['estado']->value['nombre'];?>
</td>
            </tr>
            <tr>
                <th>Creado:</th>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['estado']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
            </tr>
            <tr>
                <th>Actualizado:</th>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['estado']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
            </tr>
        </table>
        <p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
estados/edit/<?php echo $_smarty_tpl->tpl_vars['estado']->value['id'];?>
" class="btn btn-outline-primary">Editar</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
estados" class="btn btn-outline-primary">Volver</a>
        </p>
    </div>
</div><?php }
}

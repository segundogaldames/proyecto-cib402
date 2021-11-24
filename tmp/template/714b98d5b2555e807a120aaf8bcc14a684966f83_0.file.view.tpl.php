<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-18 16:54:24
  from '/var/www/html/gestiones/views/ejecutivos/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6196bd80e49b25_61919034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '714b98d5b2555e807a120aaf8bcc14a684966f83' => 
    array (
      0 => '/var/www/html/gestiones/views/ejecutivos/view.tpl',
      1 => 1637268641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6196bd80e49b25_61919034 (Smarty_Internal_Template $_smarty_tpl) {
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
                <th>Código:</th>
                <td><?php echo $_smarty_tpl->tpl_vars['ejecutivo']->value['codigo'];?>
</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><?php echo $_smarty_tpl->tpl_vars['ejecutivo']->value['nombre'];?>
</td>
            </tr>
            <tr>
                <th>Origen:</th>
                <td><?php echo $_smarty_tpl->tpl_vars['ejecutivo']->value['origen']['nombre'];?>
</td>
            </tr>
            <tr>
                <th>Creado:</th>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ejecutivo']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
            </tr>
            <tr>
                <th>Actualizado:</th>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ejecutivo']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
            </tr>
        </table>
        <p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ejecutivos/edit/<?php echo $_smarty_tpl->tpl_vars['ejecutivo']->value['id'];?>
" class="btn btn-outline-primary">Editar</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ejecutivos" class="btn btn-outline-primary">Volver</a>
        </p>
    </div>
</div><?php }
}

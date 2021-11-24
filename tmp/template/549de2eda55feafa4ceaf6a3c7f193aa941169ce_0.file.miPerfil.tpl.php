<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-07 18:30:06
  from '/var/www/html/profesor-galdames/views/usuarios/miPerfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6188536eaa1b95_50522942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '549de2eda55feafa4ceaf6a3c7f193aa941169ce' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/miPerfil.tpl',
      1 => 1635892583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6188536eaa1b95_50522942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="table table-hover">
                    <tr>
                        <th>Nombre:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['name'];?>
</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td>
                    </tr>
                    <tr>
                        <th>Rol:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['rol'];?>
</td>
                    </tr>
                    <tr>
                        <th>Estado:</th>
                        <td><?php if ($_smarty_tpl->tpl_vars['usuario']->value['active'] == 1) {?> Activo <?php } else { ?> Inactivo <?php }?></td>
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
usuarios/editPassword/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Cambiar Password</a>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

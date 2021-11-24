<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-02 19:36:47
         compiled from "/var/www/html/profesor-galdames/views/usuarios/miPerfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14953484886181b4bd04ed64-07396081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb456980d122cacdd9b65a8075f97dbb2d649a58' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/miPerfil.tpl',
      1 => 1635892583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14953484886181b4bd04ed64-07396081',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6181b4bd0b8fe7_73327707',
  'variables' => 
  array (
    'title' => 0,
    'usuario' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6181b4bd0b8fe7_73327707')) {function content_6181b4bd0b8fe7_73327707($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.date_format.php';
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                        <td><?php if ($_smarty_tpl->tpl_vars['usuario']->value['active']==1) {?> Activo <?php } else { ?> Inactivo <?php }?></td>
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
</section><!-- #intro --><?php }} ?>

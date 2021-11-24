<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-01 23:12:26
         compiled from "/var/www/html/profesor-galdames/views/usuarios/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1913534098618075aad13f16-44476781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea2cb5144aa4ca25374c54e1d4017167314fb566' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/view.tpl',
      1 => 1635819145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1913534098618075aad13f16-44476781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_618075aad26478_14273606',
  'variables' => 
  array (
    'title' => 0,
    'usuario' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618075aad26478_14273606')) {function content_618075aad26478_14273606($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.date_format.php';
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <?php if ($_smarty_tpl->tpl_vars['usuario']->value) {?>
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
                        <?php if (Session::get('usuario_rol')=='Administrador') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/edit/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar</a>
                        <?php }?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/" class="btn btn-outline-primary btn-sm">Volver</a>
                    </p>
                <?php } else { ?>
                    <p class="text-info">No hay datos</p>
                <?php }?>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-01 21:13:25
         compiled from "/var/www/html/profesor-galdames/views/usuarios/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13852536906180819ed8fc83-47848179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '955472296d867b17b132c1cccbfceda664ddcbef' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/edit.tpl',
      1 => 1635811981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13852536906180819ed8fc83-47848179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6180819edbb840_37817382',
  'variables' => 
  array (
    'title' => 0,
    'usuario' => 0,
    'roles' => 0,
    'rol' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6180819edbb840_37817382')) {function content_6180819edbb840_37817382($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <div class="">

                    <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                    <form action="" method="post" role="form" class="">
                        <div class="form-group">
                            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['name'];?>
" class="form-control" id="name"
                                    placeholder="Nombre del usuario">
                        <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
" class="form-control" id="email"
                                placeholder="Email del usuario">
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <select name="active" class="form-control" id="active">
                                <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['active'];?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value['active']==1) {?> Activo <?php } else { ?> Inactivo <?php }?>
                                </option>

                                <option value="">Seleccione...</option>
                                <option value="1">Activar</option>
                                <option value="2">Desactivar</option>
                            </select>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <select name="rol" class="form-control" id="rol">
                                <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['role_id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['usuario']->value['rol'];?>

                                </option>

                                <option value="">Seleccione...</option>
                                <?php  $_smarty_tpl->tpl_vars['rol'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rol']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rol']->key => $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
</option>
                                <?php } ?>
                            </select>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center">
                            <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                            <button type="submit" class="btn btn-outline-success">Editar</button>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/view/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" class="btn btn-outline-primary">Volver</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

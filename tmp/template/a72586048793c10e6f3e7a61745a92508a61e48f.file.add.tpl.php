<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-01 22:03:23
         compiled from "/var/www/html/profesor-galdames/views/usuarios/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144897588161808d67b4ad46-44226917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a72586048793c10e6f3e7a61745a92508a61e48f' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/add.tpl',
      1 => 1635814996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144897588161808d67b4ad46-44226917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61808d67b70be7_60278548',
  'variables' => 
  array (
    'title' => 0,
    'datos' => 0,
    'roles' => 0,
    'rol' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61808d67b70be7_60278548')) {function content_61808d67b70be7_60278548($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <div class="">

                    <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                    <form action="" method="post" role="form" class="">
                        <div class="form-group">
                            <input type="text" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" id="name"
                                placeholder="Nombre del usuario">
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" id="email"
                                placeholder="Email del usuario">
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <select name="rol" class="form-control" id="rol">
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
                        <div class="form-group">
                            <input type="password" name="password" class="form-control"
                                id="password" placeholder="Password del usuario">
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="repassword" class="form-control" id="password"
                                placeholder="Confirmar Password del usuario">
                            <div class="validation"></div>
                        </div>
                        <div class="text-center">
                            <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                            <button type="submit" class="btn btn-outline-success">Guardar</button>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/" class="btn btn-outline-primary">Volver</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

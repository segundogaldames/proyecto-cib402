<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 21:33:44
         compiled from "/var/www/html/profesor-galdames/views/usuarios/registrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13946748106185cc2c0f9e47-44146146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e02813e7ea8e7139d315f8ee6681a7d475c9a125' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/registrar.tpl',
      1 => 1636158790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13946748106185cc2c0f9e47-44146146',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6185cc2c10d582_00323167',
  'variables' => 
  array (
    'title' => 0,
    'datos' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6185cc2c10d582_00323167')) {function content_6185cc2c10d582_00323167($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
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
                                placeholder="Su nombre completo (nombres y apellidos">
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" id="email"
                                placeholder="Su correo electrónico" oncopy="return false" onpaste="return false">
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control"
                                id="password" placeholder="Su password (al menos 8 caracteres)" oncopy="return false" onpaste="return false">
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="repassword" class="form-control" id="password"
                                placeholder="Confirme su password" oncopy="return false" onpaste="return false">
                            <div class="validation"></div>
                        </div>
                        <div class="text-center">
                            <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                            <button type="submit" class="btn btn-outline-success">Registrar</button>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="btn btn-outline-primary">Cancelar</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

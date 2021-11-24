<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 21:19:39
         compiled from "/var/www/html/profesor-galdames/views/usuarios/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1655421465618096967d9d50-22355901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe9efc56b24a7eaf080e2212442d4c31423816cd' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/login.tpl',
      1 => 1636157969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1655421465618096967d9d50-22355901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_618096967e5950_12266748',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'enviar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618096967e5950_12266748')) {function content_618096967e5950_12266748($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4 class="text-success">Inicia sesión para continuar</h4>
                <h5 class="text-info">Si no tienes una cuenta <a style="text-decoration: underline" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registrar">regístrate aquí</a></h5>
                <div class="">

                    <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                    <form action="" method="post" role="form" class="">
                        <div class="form-group">
                            <input type="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control"
                                id="email" placeholder="Email del usuario">
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password del usuario">
                            <div class="validation"></div>
                        </div>
                        <div class="text-center">
                            <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                            <button type="submit" class="btn btn-outline-success">Ingresar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

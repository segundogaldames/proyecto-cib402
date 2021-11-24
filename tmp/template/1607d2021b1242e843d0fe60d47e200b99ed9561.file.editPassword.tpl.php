<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-02 19:23:06
         compiled from "/var/www/html/profesor-galdames/views/usuarios/editPassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16649604256181ba4a915883-36685209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1607d2021b1242e843d0fe60d47e200b99ed9561' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/editPassword.tpl',
      1 => 1635891662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16649604256181ba4a915883-36685209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6181ba4a927c63_95048633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6181ba4a927c63_95048633')) {function content_6181ba4a927c63_95048633($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <div class="">

                    <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                    <form action="" method="post" role="form" class="">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password del usuario">
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
usuarios/miPerfil/<?php echo Session::get('usuario_id');?>
" class="btn btn-outline-primary">Volver</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

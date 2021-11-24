<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 14:44:45
  from '/Applications/MAMP/htdocs/profesor-galdames/views/usuarios/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a895dbec7a6_37839730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea3ec3577b1dc90b3605d0c556fe870e8345ba98' => 
    array (
      0 => '/Applications/MAMP/htdocs/profesor-galdames/views/usuarios/login.tpl',
      1 => 1636465593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618a895dbec7a6_37839730 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4 class="text-success">Inicia sesión para continuar</h4>
                <h5 class="text-info">Si no tienes una cuenta <a style="text-decoration: underline" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registrar">regístrate aquí</a></h5>
                <div class="">

                    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <form action="" method="post" role="form" class="">
                        <div class="form-group">
                            <input type="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['datos']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
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
</section><!-- #intro --><?php }
}

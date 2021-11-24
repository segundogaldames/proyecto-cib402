<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-18 00:40:55
  from '/var/www/html/gestiones/views/usuarios/editPassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6195d9574cdb96_25915907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aff2aa85c496218b7393a5bb99f733668a21f60' => 
    array (
      0 => '/var/www/html/gestiones/views/usuarios/editPassword.tpl',
      1 => 1637210446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6195d9574cdb96_25915907 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-6 offset-md-3">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

     <p class="text-danger">Campos obligatorios *</p>

    <form action="" method="POST">
        <div class="form-group mb-3">
            <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
            <input type="password" name="password" class="form-control" placeholder="Password del usuario">
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Confirmar Password<span class="text-danger">*</span></label>
            <input type="password" name="repassword" class="form-control" placeholder="Confirmar Password del usuario">
        </div>

        <div class="form-group mb-3">
            <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
            <button type="submit" class="btn btn-outline-success">Cambiar</button>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="btn btn-outline-primary">Volver</a>
        </div>
    </form>
</div><?php }
}

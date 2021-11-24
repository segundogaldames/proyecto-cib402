<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-18 16:53:13
  from '/var/www/html/gestiones/views/usuarios/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6196bd391e5b35_59321166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '596c6886a3d9fec17512dd979dc1bd45a8a9b373' => 
    array (
      0 => '/var/www/html/gestiones/views/usuarios/login.tpl',
      1 => 1637258347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6196bd391e5b35_59321166 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-md-6 offset-md-3">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <p class="text-danger">Campos obligatorios *</p>

        <form action="" method="POST">

            <div class="form-group mb-3">
                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control"
                        placeholder="Su correo electrónico">
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control" placeholder="Password del usuario">
            </div>
            <div class="form-group mb-3">
                <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                <button type="submit" class="btn btn-outline-success">Ingresar</button>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="btn btn-outline-primary">Volver</a>
            </div>
        </form>
    </div>
</div><?php }
}

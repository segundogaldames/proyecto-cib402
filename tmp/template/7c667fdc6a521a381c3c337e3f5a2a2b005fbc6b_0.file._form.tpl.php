<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-13 22:26:00
  from '/var/www/html/profesor-galdames/views/roles/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619073b88dc456_93882234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c667fdc6a521a381c3c337e3f5a2a2b005fbc6b' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/roles/_form.tpl',
      1 => 1636856755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619073b88dc456_93882234 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post" role="form" class="">
    <div class="form-group">
        <label for="rol">Nombre<span class="text-danger">*</span></label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['rol']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="name"
            placeholder="Nombre del rol">
        <div class="validation"></div>
    </div>

    <div class="text-center">
        <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
        <button type="submit" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" class="btn btn-outline-primary">Volver</a>
    </div>
</form><?php }
}

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-01 16:09:57
  from '/var/www/html/proyecto-cib402/views/especialidades/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a7c885172619_07616119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ebcd09fb7d4361d67f988c437a62de9412226b' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/especialidades/_form.tpl',
      1 => 1638385726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a7c885172619_07616119 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="POST">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['especialidad']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control"
            placeholder="Nombre de la especialidad">
    </div>
    <div class="mb-3">
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

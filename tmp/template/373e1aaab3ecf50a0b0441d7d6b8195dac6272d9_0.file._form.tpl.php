<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-19 15:41:41
  from '/var/www/html/gestiones/views/clientes/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6197efe52fca63_77421714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '373e1aaab3ecf50a0b0441d7d6b8195dac6272d9' => 
    array (
      0 => '/var/www/html/gestiones/views/clientes/_form.tpl',
      1 => 1637347267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6197efe52fca63_77421714 (Smarty_Internal_Template $_smarty_tpl) {
?> <p class="text-danger">Campos obligatorios *</p>

 <form action="" method="POST">
     <div class="form-group mb-3">
         <label for="cliente" class="form-label">Nombre<span class="text-danger">*</span></label>
         <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['cliente']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control"
             placeholder="Nombre del cliente">
     </div>
     <div class="form-group mb-3">
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

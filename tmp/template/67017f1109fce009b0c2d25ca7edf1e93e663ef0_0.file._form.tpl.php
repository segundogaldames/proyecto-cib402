<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-23 16:06:07
  from '/var/www/html/gestiones/views/estados/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619d3b9f47bb84_15432169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67017f1109fce009b0c2d25ca7edf1e93e663ef0' => 
    array (
      0 => '/var/www/html/gestiones/views/estados/_form.tpl',
      1 => 1637694364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d3b9f47bb84_15432169 (Smarty_Internal_Template $_smarty_tpl) {
?> <p class="text-danger">Campos obligatorios *</p>

 <form action="" method="POST">
     <div class="form-group mb-3">
         <label for="estado" class="form-label">Nombre<span class="text-danger">*</span></label>
         <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['estado']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control"
             placeholder="Nombre del estado">
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

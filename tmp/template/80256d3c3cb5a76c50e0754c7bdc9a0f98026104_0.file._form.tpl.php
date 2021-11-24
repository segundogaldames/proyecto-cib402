<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-18 16:53:29
  from '/var/www/html/gestiones/views/ejecutivos/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6196bd494bb345_44028629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80256d3c3cb5a76c50e0754c7bdc9a0f98026104' => 
    array (
      0 => '/var/www/html/gestiones/views/ejecutivos/_form.tpl',
      1 => 1637268726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6196bd494bb345_44028629 (Smarty_Internal_Template $_smarty_tpl) {
?> <p class="text-danger">Campos obligatorios *</p>

 <form action="" method="POST">
    <div class="form-group mb-3">
        <label for="codigo" class="form-label">Código<span class="text-danger">*</span></label>
        <input type="number" name="codigo" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['ejecutivo']->value['codigo'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control"
            placeholder="Código del ejecutivo">
    </div>
    <div class="form-group mb-3">
        <label for="nombre" class="form-label">Nombre<span class="text-danger">*</span></label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['ejecutivo']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control"
             placeholder="Nombre del ejecutivo">
     </div>
     <div class="form-group mb-3">
        <label for="origen" class="form-label">Origen<span class="text-danger">*</span></label>
        <select name="origen" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['ejecutivo']->value['origen_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ejecutivo']->value['origen']['nombre'];?>
</option>
            <?php }?>

            <option value="">Seleccione...</option>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['origenes']->value, 'origen');
$_smarty_tpl->tpl_vars['origen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['origen']->value) {
$_smarty_tpl->tpl_vars['origen']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['origen']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['origen']->value['nombre'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
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

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-17 23:18:28
  from '/var/www/html/gestiones/views/usuarios/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6195c604ac4890_25720681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a74d361b1469348ee60ba2ef8cc06aece8d6615' => 
    array (
      0 => '/var/www/html/gestiones/views/usuarios/_form.tpl',
      1 => 1637205502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6195c604ac4890_25720681 (Smarty_Internal_Template $_smarty_tpl) {
?> <p class="text-danger">Campos obligatorios *</p>

 <form action="" method="POST">
    <div class="form-group mb-3">
        <label for="usuario" class="form-label">Nombre<span class="text-danger">*</span></label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['usuario']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control"
             placeholder="Nombre del usuario">
    </div>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Guardar') {?>
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
            <input type="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['usuario']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control"
                 placeholder="Email del usuario">
        </div>
    <?php }?>
    <div class="form-group mb-3">
        <label for="rol" class="form-label">Roles<span class="text-danger">*</span></label>
        <select name="rol" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['rol_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['rol']['nombre'];?>
</option>
            <?php }?>

            <option value="">Seleccione...</option>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'rol');
$_smarty_tpl->tpl_vars['rol']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
        <div class="form-group mb-3">
            <label for="activo" class="form-label">Estado<span class="text-danger">*</span></label>
            <select name="activo" class="form-control">
                <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['activo'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value['activo'] == 1) {?>
                        Activo
                    <?php } else { ?>
                        Inactivo
                    <?php }?>
                </option>
                <option value="">Seleccione...</option>

                <option value="1">Activar</option>
                <option value="2">Desactivar</option>
            </select>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Guardar') {?>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
            <input type="password" name="password" class="form-control" placeholder="Password del usuario">
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Confirmar Password<span class="text-danger">*</span></label>
            <input type="password" name="repassword" class="form-control" placeholder="Confirmar Password del usuario">
        </div>
    <?php }?>
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

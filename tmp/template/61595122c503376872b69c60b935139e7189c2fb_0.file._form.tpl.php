<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-15 15:43:40
  from '/var/www/html/profesor-galdames/views/usuarios/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6192b86cefe403_14369632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61595122c503376872b69c60b935139e7189c2fb' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/_form.tpl',
      1 => 1637005418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6192b86cefe403_14369632 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post" role="form" class="">
    <div class="form-group">
        <label for="name">Nombre<span class="text-danger">*</span></label>
        <input type="text" name="name" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['usuario']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="name"
            placeholder="Nombre del usuario">
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="email">Email<span class="text-danger">*</span></label>
        <input type="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['usuario']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="email"
            placeholder="Email del usuario">
        <div class="validation"></div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
        <div class="form-group">
            <select name="active" class="form-control" id="active">
                <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['active'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value['active'] == 1) {?> Activo <?php } else { ?> Inactivo <?php }?>
                </option>

                <option value="">Seleccione...</option>
                <option value="1">Activar</option>
                <option value="2">Desactivar</option>
            </select>
            <div class="validation"></div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Guardar' || $_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
        <div class="form-group">
            <label for="roles">Rol<span class="text-danger">*</span></label>
            <select name="rol" class="form-control" id="rol">
                <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['role_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['rol'];?>
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
            <div class="validation"></div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Guardar' || $_smarty_tpl->tpl_vars['button']->value == 'Registrar') {?>
        <div class="form-group">
            <label for="password">Password<span class="text-danger">*</span></label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password del usuario">
            <div class="validation"></div>
        </div>
        <div class="form-group">
            <label for="repassword">Confirmar password<span class="text-danger">*</span></label>
            <input type="password" name="repassword" class="form-control" id="password"
                placeholder="Confirmar Password del usuario">
            <div class="validation"></div>
        </div>
    <?php }?>
    <div class="text-center">
        <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
        <button type="submit" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>
        <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Guardar' || $_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" class="btn btn-outline-primary">Volver</a>
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="btn btn-outline-primary">Cancelar</a>
        <?php }?>
    </div>
</form><?php }
}

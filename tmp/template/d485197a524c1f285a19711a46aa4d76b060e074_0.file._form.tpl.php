<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-15 18:46:33
  from '/var/www/html/proyecto-cib402/views/usuarios/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ba6239574164_54110885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd485197a524c1f285a19711a46aa4d76b060e074' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/usuarios/_form.tpl',
      1 => 1639604790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ba6239574164_54110885 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="POST">
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Guardar' || $_smarty_tpl->tpl_vars['button']->value == 'Modificar') {?>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="clave" class="form-control"
                placeholder="Password del usuario">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Confirmar Password</label>
            <input type="password" name="reclave" class="form-control" placeholder="Confirmar Password del usuario">
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
        <div class="mb-3">
            <label for="activo" class="form-label">Estado</label>
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
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Login') {?>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Su email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="clave" class="form-control" placeholder="Su password">
        </div>
    <?php }?>
        <div class="mb-3">
            <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
            <button type="submit" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>
            <?php if ((isset($_smarty_tpl->tpl_vars['usuario']->value))) {?>
                <?php if ($_smarty_tpl->tpl_vars['usuario']->value['funcionario']['rol']['nombre'] == 'Administrador(a)' || $_smarty_tpl->tpl_vars['usuario']->value['funcionario']['rol']['nombre'] == 'Supervisor(a)') {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" class="btn btn-outline-primary">Volver</a>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="btn btn-outline-primary">Volver</a>
                <?php }?>
            <?php }?>
        </div>
</form><?php }
}

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-01 17:40:06
  from '/var/www/html/proyecto-cib402/views/funcionarios/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a7dda66d7ca2_67325712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f61ad403d2bee53db7361ee5b7ef42e77d4f17e4' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/funcionarios/_form.tpl',
      1 => 1638391122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a7dda66d7ca2_67325712 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="POST">
    <div class="mb-3">
        <label for="rut" class="form-label">RUT</label>
        <input type="text" name="rut" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['funcionario']->value['rut'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" placeholder="RUT del funcionario (sin puntos y con guión)">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['funcionario']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control"
            placeholder="Nombre del funcionario">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['funcionario']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control"
            placeholder="Email del funcionario">
    </div>
    <div class="mb-3">
        <label for="rol" class="form-label">Rol</label>
        <select name="rol" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['rol_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['rol']['nombre'];?>
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
    <div class="mb-3">
        <label for="especialidad" class="form-label">Especialidad</label>
        <select name="especialidad" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['especialidad_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['especialidad']['nombre'];?>
</option>
            <?php }?>

            <option value="">Seleccione...</option>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especialidades']->value, 'especialidad');
$_smarty_tpl->tpl_vars['especialidad']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especialidad']->value) {
$_smarty_tpl->tpl_vars['especialidad']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['especialidad']->value['nombre'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
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

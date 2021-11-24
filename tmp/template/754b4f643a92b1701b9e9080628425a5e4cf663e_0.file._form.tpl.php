<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-13 22:12:08
  from '/var/www/html/profesor-galdames/views/tematicas/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6190707869a1b6_94826790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '754b4f643a92b1701b9e9080628425a5e4cf663e' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/tematicas/_form.tpl',
      1 => 1636855925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6190707869a1b6_94826790 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post" role="form" class="">
    <div class="form-group">
        <label for="nombre">Nombre<span class="text-danger">*</span></label>
        <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['tematica']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="name"
            placeholder="Nombre de la temática">
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción<span class="text-danger">*</span></label>
        <textarea class="form-control" name="descripcion" onkeyup="countChars(this,'20');" rows="5"
            placeholder="Descripción del curso" style="resize:none"><?php echo (($tmp = $_smarty_tpl->tpl_vars['tematica']->value['descripcion'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
        <div class="validation text-danger" id="charNum">0 caracteres</div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
        <div class="form-group">
            <label for="active">Estado<span class="text-danger">*</span></label>
            <select name="active" class="form-control">
                <option value="<?php echo $_smarty_tpl->tpl_vars['tematica']->value['active'];?>
"><?php if ($_smarty_tpl->tpl_vars['tematica']->value['active'] == 1) {?> Activo <?php } else { ?> Inactivo <?php }?></option>
                <option value="">Seleccione...</option>
                <option value="1">Activar</option>
                <option value="2">Desactivar</option>
            </select>
        </div>
    <?php }?>

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

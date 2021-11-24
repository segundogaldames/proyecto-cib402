<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-11 16:52:33
  from '/var/www/html/profesor-galdames/views/articulos/_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618d82914f8340_91683610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '956a6697e56147dacff22a9c7a914cc6b67a860d' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/articulos/_form.tpl',
      1 => 1636663949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618d82914f8340_91683610 (Smarty_Internal_Template $_smarty_tpl) {
?><p class="text-danger">Campos obligatorios *</p>
<form action="" method="post" role="form" class="">
    <div class="form-group">
        <label for="titulo">Título<span class="text-danger">*</span></label>
        <input type="text" name="titulo" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['articulo']->value['titulo'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="name"
            placeholder="Título del artículo">
    </div>
    <div class="form-group">
        <label for="titulo">Descripción<span class="text-danger">*</span></label>
        <textarea class="form-control" name="descripcion" onkeyup="countChars(this);" rows="5"
            placeholder="Descripción del curso" style="resize:none"><?php echo (($tmp = $_smarty_tpl->tpl_vars['articulo']->value['descripcion'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
        <div class="validation text-danger" id="charNum">0 caracteres</div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
        <div class="form-group">
            <label for="active">Estado</label>
            <select name="active" class="form-control" id="">
                <option value="<?php echo $_smarty_tpl->tpl_vars['articulo']->value['active'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['articulo']->value['active'] == 1) {?> Activo <?php } else { ?> Inactivo <?php }?>
                </option>
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
    <?php if ((isset($_smarty_tpl->tpl_vars['tematicas']->value)) && count($_smarty_tpl->tpl_vars['tematicas']->value)) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['volver']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['articulo']->value['id'];?>
" class="btn btn-outline-primary">Volver</a>
    <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['volver']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tematica']->value['id'];?>
" class="btn btn-outline-primary">Volver</a>
    <?php }?>

    </div>
</form><?php }
}

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-17 21:34:52
  from '/var/www/html/gestiones/views/usuarios/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6195adbc47c493_26311441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f6215285d500fabd53542c309d7b1adaa57edfe' => 
    array (
      0 => '/var/www/html/gestiones/views/usuarios/index.tpl',
      1 => 1637199285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6195adbc47c493_26311441 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-6 offset-md-3">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['usuarios']->value)) && count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
        <table class="table table-hover">
            <tr>
                <th>Nombre</th>
                <th>Activo</th>
                <th>Rol</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                <tr>

                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/view/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</a>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['usuario']->value['activo'] == 1) {?>
                            Si
                        <?php } else { ?>
                                No
                        <?php }?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['rol']['nombre'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    <?php } else { ?>
        <p class="text-info">No hay usuarios registrados</p>
    <?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/add" class="btn btn-outline-success">Nuevo Usuario</a>
</div><?php }
}

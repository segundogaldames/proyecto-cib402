<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-18 14:45:28
  from '/var/www/html/gestiones/views/origenes/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61969f48cbbec0_44553366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a26778718def63e9a62cfea9f6247e0c4711010' => 
    array (
      0 => '/var/www/html/gestiones/views/origenes/index.tpl',
      1 => 1637261120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61969f48cbbec0_44553366 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-md-6 offset-md-3">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['origenes']->value)) && count($_smarty_tpl->tpl_vars['origenes']->value)) {?>
            <table class="table table-hover">
                <tr>
                    <th>Rol</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['origenes']->value, 'origen');
$_smarty_tpl->tpl_vars['origen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['origen']->value) {
$_smarty_tpl->tpl_vars['origen']->do_else = false;
?>
                    <tr>

                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
origenes/view/<?php echo $_smarty_tpl->tpl_vars['origen']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['origen']->value['nombre'];?>
</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <?php } else { ?>
            <p class="text-info">No hay origenes registrados</p>
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
origenes/add" class="btn btn-outline-success">Nuevo Origen</a>
    </div>
</div><?php }
}

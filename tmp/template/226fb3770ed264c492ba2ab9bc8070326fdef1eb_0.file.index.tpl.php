<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-19 15:39:58
  from '/var/www/html/gestiones/views/clientes/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6197ef7e45e439_55971900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '226fb3770ed264c492ba2ab9bc8070326fdef1eb' => 
    array (
      0 => '/var/www/html/gestiones/views/clientes/index.tpl',
      1 => 1637347177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6197ef7e45e439_55971900 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-md-6 offset-md-3">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['clientes']->value)) && count($_smarty_tpl->tpl_vars['clientes']->value)) {?>
            <table class="table table-hover">
                <tr>
                    <th>Cliente</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                    <tr>

                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/view/<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <?php } else { ?>
            <p class="text-info">No hay clientes registrados</p>
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/add" class="btn btn-outline-success">Nuevo Cliente</a>
    </div>
</div><?php }
}

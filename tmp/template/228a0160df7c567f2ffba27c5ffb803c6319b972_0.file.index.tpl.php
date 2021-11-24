<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-23 16:04:33
  from '/var/www/html/gestiones/views/estados/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619d3b41979124_76268696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '228a0160df7c567f2ffba27c5ffb803c6319b972' => 
    array (
      0 => '/var/www/html/gestiones/views/estados/index.tpl',
      1 => 1637694254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_619d3b41979124_76268696 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-md-6 offset-md-3">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['estados']->value)) && count($_smarty_tpl->tpl_vars['estados']->value)) {?>
            <table class="table table-hover">
                <tr>
                    <th>Estado</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['estados']->value, 'estado');
$_smarty_tpl->tpl_vars['estado']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['estado']->value) {
$_smarty_tpl->tpl_vars['estado']->do_else = false;
?>
                    <tr>

                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
estados/view/<?php echo $_smarty_tpl->tpl_vars['estado']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['estado']->value['nombre'];?>
</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <?php } else { ?>
            <p class="text-info">No hay estados registrados</p>
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
estados/add" class="btn btn-outline-success">Nuevo Estado</a>
    </div>
</div><?php }
}

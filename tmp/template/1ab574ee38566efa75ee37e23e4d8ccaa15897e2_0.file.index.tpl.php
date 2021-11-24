<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-24 17:26:05
  from '/var/www/html/proyecto-cib402/views/roles/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619e9fdd364243_37949855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ab574ee38566efa75ee37e23e4d8ccaa15897e2' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/roles/index.tpl',
      1 => 1637785545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_619e9fdd364243_37949855 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <div class="row">
        <div class="col-md-2">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/add" class="btn btn-link">Agregar Rol</a>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-3">

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['roles']->value)) && count($_smarty_tpl->tpl_vars['roles']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Rol</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'rol');
$_smarty_tpl->tpl_vars['rol']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay roles registrados</p>
                <?php }?>

            </div>

        </div>
    </div>
</div><?php }
}

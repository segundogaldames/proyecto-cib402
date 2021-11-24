<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-18 16:53:25
  from '/var/www/html/gestiones/views/ejecutivos/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6196bd45beef96_75224723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f35b4e8f64add2782646f139facced70514a9d2e' => 
    array (
      0 => '/var/www/html/gestiones/views/ejecutivos/index.tpl',
      1 => 1637268031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6196bd45beef96_75224723 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-md-6 offset-md-3">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['ejecutivos']->value)) && count($_smarty_tpl->tpl_vars['ejecutivos']->value)) {?>
            <table class="table table-hover">
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Origen</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ejecutivos']->value, 'ejecutivo');
$_smarty_tpl->tpl_vars['ejecutivo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ejecutivo']->value) {
$_smarty_tpl->tpl_vars['ejecutivo']->do_else = false;
?>
                    <tr>

                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ejecutivos/view/<?php echo $_smarty_tpl->tpl_vars['ejecutivo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ejecutivo']->value['nombre'];?>
</a>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ejecutivo']->value['nombre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ejecutivo']->value['origen']['nombre'];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <?php } else { ?>
            <p class="text-info">No hay ejecutivos registrados</p>
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ejecutivos/add" class="btn btn-outline-success">Nuevo Ejecutivo</a>
    </div>
</div><?php }
}

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 14:48:46
  from '/Applications/MAMP/htdocs/profesor-galdames/views/tematicas/tematicasCurso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a8a4ecbe285_30819119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce9208a69a44593048d08d01a33d579d8ce3f0fe' => 
    array (
      0 => '/Applications/MAMP/htdocs/profesor-galdames/views/tematicas/tematicasCurso.tpl',
      1 => 1636465593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618a8a4ecbe285_30819119 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <?php if (Session::get('usuario_rol') == 'Administrador') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/add/<?php echo $_smarty_tpl->tpl_vars['curso']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Agregar Temática</a>
                    <?php }?>

                </h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['tematicas']->value)) && count($_smarty_tpl->tpl_vars['tematicas']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Orden</th>
                            <th>Temática</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tematicas']->value, 'tematica');
$_smarty_tpl->tpl_vars['tematica']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tematica']->value) {
$_smarty_tpl->tpl_vars['tematica']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['tematica']->value['orden'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/view/<?php echo $_smarty_tpl->tpl_vars['tematica']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tematica']->value['nombre'];?>
</a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay temáticas registradas</p>
                <?php }?>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

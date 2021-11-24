<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-13 21:53:57
  from '/var/www/html/profesor-galdames/views/tematicas/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61906c35a64b89_61445478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9503468fda2635faf16dc567bdf74906f6bd1f0' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/tematicas/index.tpl',
      1 => 1636854835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61906c35a64b89_61445478 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/add" class="btn btn-outline-primary btn-sm">Agregar
                        Temática</a></h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['tematicas']->value)) && count($_smarty_tpl->tpl_vars['tematicas']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Temática</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tematicas']->value, 'tematica');
$_smarty_tpl->tpl_vars['tematica']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tematica']->value) {
$_smarty_tpl->tpl_vars['tematica']->do_else = false;
?>
                            <tr>
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

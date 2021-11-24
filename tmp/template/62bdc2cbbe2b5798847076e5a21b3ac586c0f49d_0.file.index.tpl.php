<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-07 19:42:42
  from '/var/www/html/profesor-galdames/views/categorias/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61886472402609_97517040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62bdc2cbbe2b5798847076e5a21b3ac586c0f49d' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/categorias/index.tpl',
      1 => 1636150685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61886472402609_97517040 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categorias/add" class="btn btn-outline-primary btn-sm">Agregar
                        Categoría</a></h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['categorias']->value)) && count($_smarty_tpl->tpl_vars['categorias']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Categoría</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categorias/view/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</a>
                                </td>
                                <td><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/categorias/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['categoria']->value['icono'];?>
" width="60"></img></td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay categorías registradas</p>
                <?php }?>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

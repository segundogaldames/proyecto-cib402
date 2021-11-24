<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-11 12:17:19
  from '/var/www/html/profesor-galdames/views/articulos/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618d420f436df3_17491679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52e239bb73455a17e97ee3c6716cb131c8ce5822' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/articulos/index.tpl',
      1 => 1636646301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618d420f436df3_17491679 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-8 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
articulos/add" class="btn btn-outline-primary btn-sm">Agregar Artículo</a></h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['articulos']->value)) && count($_smarty_tpl->tpl_vars['articulos']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Título</th>
                            <th>Temática</th>
                            <th>Autor</th>
                            <th>Activo</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articulos']->value, 'articulo');
$_smarty_tpl->tpl_vars['articulo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['articulo']->value) {
$_smarty_tpl->tpl_vars['articulo']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
articulos/view/<?php echo $_smarty_tpl->tpl_vars['articulo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['articulo']->value['titulo'];?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['articulo']->value['tematica'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['articulo']->value['usuario'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['articulo']->value['active'] == 1) {?>
                                        Si
                                    <?php } else { ?>
                                        No
                                    <?php }?>
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
</section><!-- #intro --><?php }
}

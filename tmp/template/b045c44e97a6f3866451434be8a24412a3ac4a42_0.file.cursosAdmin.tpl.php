<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 14:48:41
  from '/Applications/MAMP/htdocs/profesor-galdames/views/cursos/cursosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a8a49084587_85056955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b045c44e97a6f3866451434be8a24412a3ac4a42' => 
    array (
      0 => '/Applications/MAMP/htdocs/profesor-galdames/views/cursos/cursosAdmin.tpl',
      1 => 1636465592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618a8a49084587_85056955 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-8 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <?php if (Session::get('usuario_rol') == 'Administrador') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/add" class="btn btn-outline-primary btn-sm">Agregar Curso</a>
                    <?php }?>
                </h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['cursos']->value)) && count($_smarty_tpl->tpl_vars['cursos']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Curso</th>
                            <th>Categoría</th>
                            <th>Precio CLP</th>
                            <th>Activo</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cursos']->value, 'curso');
$_smarty_tpl->tpl_vars['curso']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['curso']->value) {
$_smarty_tpl->tpl_vars['curso']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/view/<?php echo $_smarty_tpl->tpl_vars['curso']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['curso']->value['nombre'];?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['curso']->value['categoria'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['curso']->value['precio'] > 0) {?>
                                        <?php echo number_format($_smarty_tpl->tpl_vars['curso']->value['precio'],0,",",".");?>

                                    <?php } else { ?>
                                        Gratis
                                    <?php }?>
                                </td>
                                <td><?php if ($_smarty_tpl->tpl_vars['curso']->value['activo'] == 1) {?> Si <?php } else { ?> No <?php }?> </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay cursos registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

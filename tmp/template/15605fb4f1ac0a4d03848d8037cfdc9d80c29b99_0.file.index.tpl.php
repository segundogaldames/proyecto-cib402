<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-15 14:18:12
  from '/var/www/html/profesor-galdames/views/usuarios/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6192a4641205e0_80441885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15605fb4f1ac0a4d03848d8037cfdc9d80c29b99' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/index.tpl',
      1 => 1635818953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_6192a4641205e0_80441885 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <?php if (Session::get('usuario_rol') == 'Administrador') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/add" class="btn btn-outline-primary btn-sm">Agregar Usuario</a>
                    <?php }?>
                </h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['usuarios']->value)) && count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Nombre</th>
                            <th>Activo</th>
                            <th>Rol</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/view/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['name'];?>
</a>
                                </td>
                               <td><?php if ($_smarty_tpl->tpl_vars['usuario']->value == 1) {?> Si <?php } else { ?> No <?php }?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['rol'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay usuarios registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-01 17:43:31
  from '/var/www/html/proyecto-cib402/views/funcionarios/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a7de7348b421_00299435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a01c1b5ec5e202ba6222b7d9f2c8f7f286cc7ee' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/funcionarios/index.tpl',
      1 => 1638391407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61a7de7348b421_00299435 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios" class="list-group-item list-group-item-action">Funcionarios</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
especialidades" class="list-group-item    list-group-item-action">Especialidades</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles" class="list-group-item list-group-item-action">Roles</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios/add" class="list-group-item list-group-item-success">Agregar Funcionario</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-md-10 offset-md-1">

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['funcionarios']->value)) && count($_smarty_tpl->tpl_vars['funcionarios']->value)) {?>
                    <table class="table table-hover table-responsive">
                        <tr>
                            <th>Nombre</th>
                            <th>Especialidad</th>
                            <th>Rol</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['funcionarios']->value, 'funcionario');
$_smarty_tpl->tpl_vars['funcionario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['funcionario']->value) {
$_smarty_tpl->tpl_vars['funcionario']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
funcionarios/view/<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['nombre'];?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['especialidad']['nombre'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['funcionario']->value['rol']['nombre'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay funcionarios registrados</p>
                <?php }?>

            </div>

        </div>
    </div>
</div><?php }
}

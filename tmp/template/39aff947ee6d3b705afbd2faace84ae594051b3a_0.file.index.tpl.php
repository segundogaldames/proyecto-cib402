<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-01 16:14:58
  from '/var/www/html/proyecto-cib402/views/especialidades/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61a7c9b2b17f31_27899445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39aff947ee6d3b705afbd2faace84ae594051b3a' => 
    array (
      0 => '/var/www/html/proyecto-cib402/views/especialidades/index.tpl',
      1 => 1638386093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61a7c9b2b17f31_27899445 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="list-group">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
especialidades" class="list-group-item list-group-item-action">Especialidades</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
especialidades/add" class="list-group-item list-group-item-success">Agregar Especialidad</a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-md-6 offset-md-1">

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['especialidades']->value)) && count($_smarty_tpl->tpl_vars['especialidades']->value)) {?>
                    <table class="table table-hover table-responsive">
                        <tr>
                            <th>Especialidad</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especialidades']->value, 'especialidad');
$_smarty_tpl->tpl_vars['especialidad']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especialidad']->value) {
$_smarty_tpl->tpl_vars['especialidad']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
especialidades/view/<?php echo $_smarty_tpl->tpl_vars['especialidad']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['especialidad']->value['nombre'];?>
</a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay especialidades registradas</p>
                <?php }?>

            </div>

        </div>
    </div>
</div><?php }
}

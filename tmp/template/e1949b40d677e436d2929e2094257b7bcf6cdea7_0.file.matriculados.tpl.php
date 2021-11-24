<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-06 20:31:44
  from '/var/www/html/profesor-galdames/views/matriculas/matriculados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61871060754d18_81888686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1949b40d677e436d2929e2094257b7bcf6cdea7' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/matriculas/matriculados.tpl',
      1 => 1636241501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61871060754d18_81888686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-10 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['matriculas']->value)) && count($_smarty_tpl->tpl_vars['matriculas']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Estudiante</th>
                            <th>Curso</th>
                            <th>Fecha Matrícula</th>
                            <th></th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['matriculas']->value, 'matricula');
$_smarty_tpl->tpl_vars['matricula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['matricula']->value) {
$_smarty_tpl->tpl_vars['matricula']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['matricula']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['matricula']->value['curso'];?>
</td>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['matricula']->value['created_at'],"%d-%m-%Y %H:%M%S");?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
matriculas/view/<?php echo $_smarty_tpl->tpl_vars['matricula']->value['id'];?>
">Ver</a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay matrículas registradas</p>
                <?php }?>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

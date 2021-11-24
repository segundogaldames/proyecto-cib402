<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-13 22:25:37
  from '/var/www/html/profesor-galdames/views/roles/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619073a1c263c4_23823211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59e453489843264239b7ce8e75f4b6e76534395e' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/roles/view.tpl',
      1 => 1635812943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_619073a1c263c4_23823211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="table table-hover">
                    <tr>
                        <th>Rol:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rol']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                    <tr>
                        <th>Rol:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rol']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                </table>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/edit/<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>

            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

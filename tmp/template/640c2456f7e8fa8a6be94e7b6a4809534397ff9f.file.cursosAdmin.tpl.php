<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 22:37:30
         compiled from "/var/www/html/profesor-galdames/views/cursos/cursosAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20436757326181db218f1e30-51157187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '640c2456f7e8fa8a6be94e7b6a4809534397ff9f' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/cursos/cursosAdmin.tpl',
      1 => 1636162612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20436757326181db218f1e30-51157187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6181db219117b5_79104966',
  'variables' => 
  array (
    'title' => 0,
    '_layoutParams' => 0,
    'cursos' => 0,
    'curso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6181db219117b5_79104966')) {function content_6181db219117b5_79104966($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-8 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <?php if (Session::get('usuario_rol')=='Administrador') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/add" class="btn btn-outline-primary btn-sm">Agregar Curso</a>
                    <?php }?>
                </h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <?php if (isset($_smarty_tpl->tpl_vars['cursos']->value)&&count($_smarty_tpl->tpl_vars['cursos']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Curso</th>
                            <th>Categoría</th>
                            <th>Precio CLP</th>
                            <th>Activo</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['curso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cursos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curso']->key => $_smarty_tpl->tpl_vars['curso']->value) {
$_smarty_tpl->tpl_vars['curso']->_loop = true;
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
                                    <?php if ($_smarty_tpl->tpl_vars['curso']->value['precio']>0) {?>
                                        <?php echo number_format($_smarty_tpl->tpl_vars['curso']->value['precio'],0,",",".");?>

                                    <?php } else { ?>
                                        Gratis
                                    <?php }?>
                                </td>
                                <td><?php if ($_smarty_tpl->tpl_vars['curso']->value['activo']==1) {?> Si <?php } else { ?> No <?php }?> </td>
                            </tr>
                        <?php } ?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay cursos registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

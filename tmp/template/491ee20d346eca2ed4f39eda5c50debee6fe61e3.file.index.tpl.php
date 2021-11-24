<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-01 23:09:21
         compiled from "/var/www/html/profesor-galdames/views/usuarios/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1340098467618072f1c7f1a9-92258769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '491ee20d346eca2ed4f39eda5c50debee6fe61e3' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/usuarios/index.tpl',
      1 => 1635818953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1340098467618072f1c7f1a9-92258769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_618072f1ca6394_67548581',
  'variables' => 
  array (
    'title' => 0,
    '_layoutParams' => 0,
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618072f1ca6394_67548581')) {function content_618072f1ca6394_67548581($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <?php if (Session::get('usuario_rol')=='Administrador') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/add" class="btn btn-outline-primary btn-sm">Agregar Usuario</a>
                    <?php }?>
                </h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Nombre</th>
                            <th>Activo</th>
                            <th>Rol</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/view/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['name'];?>
</a>
                                </td>
                               <td><?php if ($_smarty_tpl->tpl_vars['usuario']->value==1) {?> Si <?php } else { ?> No <?php }?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['rol'];?>
</td>
                            </tr>
                        <?php } ?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay usuarios registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

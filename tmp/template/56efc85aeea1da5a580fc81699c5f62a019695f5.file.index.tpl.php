<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-01 20:02:57
         compiled from "/var/www/html/profesor-galdames/views/roles/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130943254061802865bdcc83-67427878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56efc85aeea1da5a580fc81699c5f62a019695f5' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/roles/index.tpl',
      1 => 1635807534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130943254061802865bdcc83-67427878',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61802865be0317_15533445',
  'variables' => 
  array (
    'title' => 0,
    '_layoutParams' => 0,
    'roles' => 0,
    'rol' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61802865be0317_15533445')) {function content_61802865be0317_15533445($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/add" class="btn btn-outline-primary btn-sm">Agregar Rol</a></h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Rol</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['rol'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rol']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rol']->key => $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->_loop = true;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/view/<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay roles registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

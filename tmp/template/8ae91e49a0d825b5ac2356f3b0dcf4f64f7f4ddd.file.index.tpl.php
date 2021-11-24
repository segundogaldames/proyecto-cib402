<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 19:18:13
         compiled from "/var/www/html/profesor-galdames/views/categorias/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:906603063618316c94da9e7-98004985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae91e49a0d825b5ac2356f3b0dcf4f64f7f4ddd' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/categorias/index.tpl',
      1 => 1636150685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '906603063618316c94da9e7-98004985',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_618316c950dad6_38319309',
  'variables' => 
  array (
    'title' => 0,
    '_layoutParams' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618316c950dad6_38319309')) {function content_618316c950dad6_38319309($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categorias/add" class="btn btn-outline-primary btn-sm">Agregar
                        Categoría</a></h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <?php if (isset($_smarty_tpl->tpl_vars['categorias']->value)&&count($_smarty_tpl->tpl_vars['categorias']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Categoría</th>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categorias/view/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</a>
                                </td>
                                <td><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/categorias/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['categoria']->value['icono'];?>
" width="60"></img></td>
                            </tr>
                        <?php } ?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay categorías registradas</p>
                <?php }?>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

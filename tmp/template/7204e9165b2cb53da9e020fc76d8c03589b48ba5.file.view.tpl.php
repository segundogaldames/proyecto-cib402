<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 18:51:55
         compiled from "/var/www/html/profesor-galdames/views/categorias/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1599165530618321af03c2b8-25732045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7204e9165b2cb53da9e020fc76d8c03589b48ba5' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/categorias/view.tpl',
      1 => 1636149113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1599165530618321af03c2b8-25732045',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_618321af04fbd6_53891988',
  'variables' => 
  array (
    'title' => 0,
    'categoria' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618321af04fbd6_53891988')) {function content_618321af04fbd6_53891988($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <table class="table table-hover">
                    <tr>
                        <th>Categoría:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Imagen:</th>
                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/categorias/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['categoria']->value['icono'];?>
"></img></td>
                    </tr>
                </table>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categorias/edit/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categorias/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

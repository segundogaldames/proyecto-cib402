<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 18:49:08
         compiled from "/var/www/html/profesor-galdames/views/categorias/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83894060161831cc96e1c93-81186368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c9604d13213aa6919ff0ed3639933bd91643b43' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/categorias/add.tpl',
      1 => 1636148872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83894060161831cc96e1c93-81186368',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61831cc971a841_24487724',
  'variables' => 
  array (
    'title' => 0,
    'datos' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61831cc971a841_24487724')) {function content_61831cc971a841_24487724($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <form action="" method="post" role="form" class="" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" id="name" placeholder="Nombre de la categoría">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagen" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['imagen'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" id="name" placeholder="Icono de la categoría">
                        <div class="validation"></div>
                    </div>

                    <div class="text-center">
                        <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                        <button type="submit" class="btn btn-outline-success">Guardar</button>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categorias/" class="btn btn-outline-primary">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

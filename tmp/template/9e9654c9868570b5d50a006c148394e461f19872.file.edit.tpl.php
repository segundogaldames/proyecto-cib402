<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 18:56:34
         compiled from "/var/www/html/profesor-galdames/views/categorias/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1712376706618328aa113438-29527334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e9654c9868570b5d50a006c148394e461f19872' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/categorias/edit.tpl',
      1 => 1636149376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1712376706618328aa113438-29527334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_618328aa127cd2_39171418',
  'variables' => 
  array (
    'title' => 0,
    'categoria' => 0,
    '_layoutParams' => 0,
    'datos' => 0,
    'enviar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618328aa127cd2_39171418')) {function content_618328aa127cd2_39171418($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <form action="" method="post" role="form" class="" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['categoria']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" id="name" placeholder="Nombre de la categoría">
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <label for="imagen"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/categorias/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['categoria']->value['icono'];?>
"></img></label>
                    </div>

                    <div class="form-group">
                        <input type="file" name="imagen" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['imagen'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" id="name" placeholder="Icono de la categoría">
                        <div class="validation"></div>
                    </div>

                    <div class="text-center">
                        <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                        <button type="submit" class="btn btn-outline-success">Editar</button>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categorias/view/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" class="btn btn-outline-primary">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

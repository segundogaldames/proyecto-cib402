<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-01 21:30:18
         compiled from "/var/www/html/profesor-galdames/views/roles/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1953092799618059390bc192-92304438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb2c154770c11be41a1844d3913e04300a60e2be' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/roles/edit.tpl',
      1 => 1635812885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1953092799618059390bc192-92304438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_618059390cd9e8_42210700',
  'variables' => 
  array (
    'title' => 0,
    'rol' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618059390cd9e8_42210700')) {function content_618059390cd9e8_42210700($_smarty_tpl) {?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <div class="">

                    <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                    <form action="" method="post" role="form" class="">
                            <div class="form-group">
                                <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
" class="form-control" id="name"
                                placeholder="Nombre del rol">
                            <div class="validation"></div>
                        </div>

                        <div class="text-center">
                            <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                            <button type="submit" class="btn btn-outline-success">Editar</button>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/view/<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
" class="btn btn-outline-primary">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

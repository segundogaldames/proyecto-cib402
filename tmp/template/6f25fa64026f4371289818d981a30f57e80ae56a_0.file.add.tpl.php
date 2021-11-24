<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 15:54:54
  from '/Applications/MAMP/htdocs/profesor-galdames/views/roles/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a99ce697dc8_22176833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f25fa64026f4371289818d981a30f57e80ae56a' => 
    array (
      0 => '/Applications/MAMP/htdocs/profesor-galdames/views/roles/add.tpl',
      1 => 1636465593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618a99ce697dc8_22176833 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <div class="">

                    <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <form action="" method="post" role="form" class="">
                        <div class="form-group">
                            <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['datos']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="name" placeholder="Nombre del rol">
                            <div class="validation"></div>
                        </div>

                        <div class="text-center">
                            <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                            <button type="submit" class="btn btn-outline-success">Guardar</button>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/" class="btn btn-outline-primary">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

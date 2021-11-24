<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-07 19:32:15
  from '/var/www/html/profesor-galdames/views/tematicas/editOrden.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618861ffd7f663_07470717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ec0902ed04e205868b028b96b60aa2a2c039b77' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/tematicas/editOrden.tpl',
      1 => 1636327933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618861ffd7f663_07470717 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <select name="orden" class="form-control">
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tematica']->value['orden'];?>
">Orden <?php echo $_smarty_tpl->tpl_vars['tematica']->value['orden'];?>
</option>
                                <option value="">Seleccione...</option>
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">Orden <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                <?php }
}
?>
                            </select>
                        </div>

                        <div class="text-center">
                            <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                            <button type="submit" class="btn btn-outline-success">Editar</button>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/view/<?php echo $_smarty_tpl->tpl_vars['tematica']->value['id'];?>
"
                                class="btn btn-outline-primary">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

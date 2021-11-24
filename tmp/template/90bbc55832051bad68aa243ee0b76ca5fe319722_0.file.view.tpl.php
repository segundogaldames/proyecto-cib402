<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 15:23:51
  from '/Applications/MAMP/htdocs/profesor-galdames/views/tematicas/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a92879a6af5_01868584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90bbc55832051bad68aa243ee0b76ca5fe319722' => 
    array (
      0 => '/Applications/MAMP/htdocs/profesor-galdames/views/tematicas/view.tpl',
      1 => 1636471424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618a92879a6af5_01868584 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-12 intro-info order-md-first order-last">
                

                <div class="row">
                
                    <div class="col-md-6">
                    
                        <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                        <table class="table table-hover">
                            <tr>
                                <th>Temática:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['tematica']->value['nombre'];?>
</td>
                            </tr>
                            <tr>
                                <th>Orden:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['tematica']->value['orden'];?>
</td>
                            </tr>
                            <tr>
                                <th>Descripción:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['tematica']->value['descripcion'];?>
</td>
                            </tr>
                            <tr>
                                <th>Curso:</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['tematica']->value['curso'];?>
</td>
                            </tr>
                        </table>
                        <p>
                            <?php if (Session::get('usuario_rol') == 'Administrador') {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/edit/<?php echo $_smarty_tpl->tpl_vars['tematica']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/editOrden/<?php echo $_smarty_tpl->tpl_vars['tematica']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Cambiar Orden</a>

                                <form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/delete/<?php echo $_smarty_tpl->tpl_vars['tematica']->value['id'];?>
" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
                                        <button type="submit" class="btn btn-outline-warning">Eliminar</button>
                                    </div>
                                </form>

                            <?php }?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tematicas/tematicasCurso/<?php echo $_smarty_tpl->tpl_vars['tematica']->value['curso_id'];?>
" class="btn btn-outline-primary btn-sm">Volver</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>Videos</h3>
                        <div class="list-group">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
videos/view/<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['video']->value['titulo'];?>
</a>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <h3>Artículos</h3>
                        <div class="list-group">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articulos']->value, 'articulo');
$_smarty_tpl->tpl_vars['articulo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['articulo']->value) {
$_smarty_tpl->tpl_vars['articulo']->do_else = false;
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
videos/view/<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['articulo']->value['titulo'];?>
</a>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #intro --><?php }
}

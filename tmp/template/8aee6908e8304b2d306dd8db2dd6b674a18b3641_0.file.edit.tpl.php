<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 14:49:00
  from '/Applications/MAMP/htdocs/profesor-galdames/views/tematicas/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a8a5c5bd026_50300447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aee6908e8304b2d306dd8db2dd6b674a18b3641' => 
    array (
      0 => '/Applications/MAMP/htdocs/profesor-galdames/views/tematicas/edit.tpl',
      1 => 1636465593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_618a8a5c5bd026_50300447 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <input type="text" name="nombre" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['tematica']->value['nombre'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control"
                                id="name" placeholder="Nombre de la temática">
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="descripcion" onkeyup="countChars(this);" rows="5"
                                placeholder="Descripción del curso"
                                style="resize:none"><?php echo (($tmp = $_smarty_tpl->tpl_vars['tematica']->value['descripcion'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                            <div class="validation text-danger" id="charNum">0 caracteres</div>
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

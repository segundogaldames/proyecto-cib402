<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 23:11:14
         compiled from "/var/www/html/profesor-galdames/views/cursos/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180768234161832abd42be50-53099679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84ddc70bff965060f18d71da28e309659c9d312' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/cursos/add.tpl',
      1 => 1636164564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180768234161832abd42be50-53099679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61832abd48ce08_27615380',
  'variables' => 
  array (
    'title' => 0,
    'datos' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61832abd48ce08_27615380')) {function content_61832abd48ce08_27615380($_smarty_tpl) {?><?php echo '<script'; ?>
>

<?php echo '</script'; ?>
>
<section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <form action="" method="post" role="form" class="">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" id="name" placeholder="Nombre del curso">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="descripcion" onkeyup="countChars(this);" rows="5" placeholder="Descripción del curso" style="resize:none"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['descripcion'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                        <div class="validation text-danger" id="charNum">0 caracteres</div>
                    </div>
                    <div class="form-group">
                        <input type="number" name="precio" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['precio'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" id="name" placeholder="Precio del curso">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <select name="categoria" class="form-control" id="caategoria">
                            <option value="">Seleccione...</option>
                            <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>
                            <?php } ?>
                        </select>
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

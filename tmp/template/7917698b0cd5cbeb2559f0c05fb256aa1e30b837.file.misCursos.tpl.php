<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 23:17:15
         compiled from "/var/www/html/profesor-galdames/views/cursos/misCursos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4346513506185d36ae48144-50369433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7917698b0cd5cbeb2559f0c05fb256aa1e30b837' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/cursos/misCursos.tpl',
      1 => 1636165033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4346513506185d36ae48144-50369433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6185d36ae5c3f2_39703702',
  'variables' => 
  array (
    'cursos' => 0,
    '_layoutParams' => 0,
    'curso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6185d36ae5c3f2_39703702')) {function content_6185d36ae5c3f2_39703702($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.truncate.php';
?><section id="services" class="section-bg" style="padding-top: 100px;">
    <div class="container">

        <header class="section-header">
            <h3>Cursos</h3>
            <p>Los cursos que necesitas para tu formación profesional y personal están aquí. Selecciona los que quieras e inscríbete gratuitamente...
            </p>
        </header>

        <?php if (isset($_smarty_tpl->tpl_vars['cursos']->value)&&count($_smarty_tpl->tpl_vars['cursos']->value)) {?>
            <div class="row">
                    <?php  $_smarty_tpl->tpl_vars['curso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cursos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curso']->key => $_smarty_tpl->tpl_vars['curso']->value) {
$_smarty_tpl->tpl_vars['curso']->_loop = true;
?>
                        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box">
                                <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline"
                                        style="color: #ff689b;"></i></div>
                                <h4 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/view/<?php echo $_smarty_tpl->tpl_vars['curso']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['curso']->value['nombre'];?>
</a></h4>
                                <p class="description"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['curso']->value['descripcion'],50);?>
</p>
                                <p class="description">
                                    <span style="font-weight:bold">Precio:</span>
                                    <?php if ($_smarty_tpl->tpl_vars['curso']->value['precio']>0) {?>
                                        $<?php echo number_format($_smarty_tpl->tpl_vars['curso']->value['precio'],0,",",".");?>
 CLP
                                    <?php } else { ?>
                                        Gratis
                                    <?php }?>
                                </p>
                                <p class="description"><span style="font-weight:bold">Categoría:</span> <?php echo $_smarty_tpl->tpl_vars['curso']->value['categoria'];?>
</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } else { ?>
            <p class="text-info">No tiene cursos en su colección</p>
        <?php }?>
    </div>
</section><!-- #services --><?php }} ?>

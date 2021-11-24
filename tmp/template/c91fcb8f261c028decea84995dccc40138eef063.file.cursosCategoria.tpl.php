<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 22:42:21
         compiled from "/var/www/html/profesor-galdames/views/cursos/cursosCategoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8418444096185b7afa796c6-33218727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c91fcb8f261c028decea84995dccc40138eef063' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/cursos/cursosCategoria.tpl',
      1 => 1636162626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8418444096185b7afa796c6-33218727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6185b7afa86ac3_25665916',
  'variables' => 
  array (
    'cursos' => 0,
    '_layoutParams' => 0,
    'curso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6185b7afa86ac3_25665916')) {function content_6185b7afa86ac3_25665916($_smarty_tpl) {?><section id="services" class="section-bg" style="padding-top: 100px;">
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
                                <p class="description"><?php echo $_smarty_tpl->tpl_vars['curso']->value['descripcion'];?>
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
            <p class="text-info">No hay cursos disponibles</p>
        <?php }?>
    </div>
</section><!-- #services --><?php }} ?>

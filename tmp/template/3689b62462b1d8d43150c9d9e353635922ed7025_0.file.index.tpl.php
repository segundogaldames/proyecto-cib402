<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-10 10:42:15
  from '/var/www/html/profesor-galdames/views/cursos/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618bda4744e829_86017756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3689b62462b1d8d43150c9d9e353635922ed7025' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/cursos/index.tpl',
      1 => 1636555330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618bda4744e829_86017756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<section id="services" class="section-bg" style="padding-top: 100px; padding-bottom:50px">
    <div class="container">

        <header class="section-header">
            <h3>Cursos</h3>
            <p>Los cursos que necesitas para tu formación profesional y personal están aquí. Selecciona los que quieras e inscríbete gratuitamente...
            </p>
        </header>

        <?php if ((isset($_smarty_tpl->tpl_vars['cursos']->value)) && count($_smarty_tpl->tpl_vars['cursos']->value)) {?>
            <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cursos']->value, 'curso');
$_smarty_tpl->tpl_vars['curso']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['curso']->value) {
$_smarty_tpl->tpl_vars['curso']->do_else = false;
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
                                    <?php if ($_smarty_tpl->tpl_vars['curso']->value['precio'] > 0) {?>
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
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        <?php } else { ?>
            <p class="text-info">No hay cursos disponibles</p>
        <?php }?>
    </div>
</section><!-- #services --><?php }
}

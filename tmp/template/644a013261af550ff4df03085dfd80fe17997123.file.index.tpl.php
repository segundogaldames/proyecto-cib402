<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-01 14:24:50
         compiled from "/var/www/html/profesor-galdames/views/about/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1461316866618017a330b2a7-81277560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644a013261af550ff4df03085dfd80fe17997123' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/about/index.tpl',
      1 => 1635787488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1461316866618017a330b2a7-81277560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_618017a330bd65_75467246',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'about' => 0,
    'parrafos' => 0,
    'parrafo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618017a330bd65_75467246')) {function content_618017a330bd65_75467246($_smarty_tpl) {?><section id="about">

    <div class="container">
        <div class="row">

            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
about/IMG_3196.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="about-content">
                    <h2><?php echo $_smarty_tpl->tpl_vars['about']->value['titulo'];?>
</h2>
                    <h3>..que toda la vida es sueño, y los sueños, sueños son" <br><strong style="font-size: 18px">Pedro
                        Calderón de la Barca.</strong>
                    </h3>
                    <?php if (isset($_smarty_tpl->tpl_vars['parrafos']->value)&&count($_smarty_tpl->tpl_vars['parrafos']->value)) {?>
                        <?php  $_smarty_tpl->tpl_vars['parrafo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parrafo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parrafos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parrafo']->key => $_smarty_tpl->tpl_vars['parrafo']->value) {
$_smarty_tpl->tpl_vars['parrafo']->_loop = true;
?>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['parrafo']->value['texto'];?>

                            </p>
                        <?php } ?>

                    <?php } else { ?>
                        <p class="text-info">Texto no disponible</p>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

</section><!-- #about --><?php }} ?>

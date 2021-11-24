<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-12 21:18:31
  from '/var/www/html/profesor-galdames/views/about/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618f1267b32b82_20612467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42c83e8219e9586182069f93effd2bc031bbc489' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/about/index.tpl',
      1 => 1636766309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618f1267b32b82_20612467 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="about" style="margin-top: 20px;">

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
                    <?php if ((isset($_smarty_tpl->tpl_vars['parrafos']->value)) && count($_smarty_tpl->tpl_vars['parrafos']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parrafos']->value, 'parrafo');
$_smarty_tpl->tpl_vars['parrafo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parrafo']->value) {
$_smarty_tpl->tpl_vars['parrafo']->do_else = false;
?>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['parrafo']->value['texto'];?>

                            </p>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php } else { ?>
                        <p class="text-info">Texto no disponible</p>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

</section><!-- #about --><?php }
}

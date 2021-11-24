<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-12 21:17:06
  from '/var/www/html/profesor-galdames/views/index/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618f12124441b6_45134411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f6d52b9d87fe2ce0e8694855e68340d75391c8' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/index/index.tpl',
      1 => 1636766222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618f12124441b6_45134411 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="intro" class="clearfix" style="padding-top: 100px;">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h2>Un lugar para compartir<br> y <span>aprender!</span></h2>
                <div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
about" class="btn-get-started scrollto">Mas Detalles</a>
                </div>
            </div>

            <div class="col-md-6 intro-img order-md-last order-first">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
intro-img.svg" alt="" class="img-fluid">
            </div>
        </div>

    </div>
</section><!-- #intro --><?php }
}

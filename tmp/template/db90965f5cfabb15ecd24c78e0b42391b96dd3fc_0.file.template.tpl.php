<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 14:42:01
  from '/Applications/MAMP/htdocs/profesor-galdames/views/layout/default/template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a88b957ced7_74131657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db90965f5cfabb15ecd24c78e0b42391b96dd3fc' => 
    array (
      0 => '/Applications/MAMP/htdocs/profesor-galdames/views/layout/default/template.tpl',
      1 => 1636465593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_618a88b957ced7_74131657 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['titulo']->value ?? null)===null||$tmp==='' ? "Sin Titulo" ?? null : $tmp);?>
</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
      <!-- Favicons
    ================================================== -->
    <!-- Favicons -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
favicon.png" rel="icon">
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
style.css" rel="stylesheet">






     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

      <?php if ((isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) && count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['js'], 'js');
$_smarty_tpl->tpl_vars['js']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->do_else = false;
?>
          <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <?php }?>

   </head>
   <body>
    <header id="header">
      <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>

    <main id="main">
      <noscript><p>Debe tener el soporte de Javascript habilitado</p></noscript>

      <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </main>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- JavaScript Libraries -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
jquery/jquery-migrate.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
easing/easing.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
mobile-nav/mobile-nav.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
wow/wow.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
waypoints/waypoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
counterup/counterup.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
owlcarousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
isotope/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_lib'];?>
lightbox/js/lightbox.min.js"><?php echo '</script'; ?>
>
  <!-- Contact Form JavaScript File -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_contactForm'];?>
contactform.js"><?php echo '</script'; ?>
>

  <!-- Template Main Javascript File -->
  <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
funciones.js"><?php echo '</script'; ?>
>


  </body>
</html><?php }
}

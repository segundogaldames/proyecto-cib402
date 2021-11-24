<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 23:10:43
         compiled from "/var/www/html/profesor-galdames/views/layout/default/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124321780461800349927800-39141946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeb7d1c4550a464898b941cec27e9798c4c295e0' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/layout/default/template.tpl',
      1 => 1636164637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124321780461800349927800-39141946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61800349b40198_55792104',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61800349b40198_55792104')) {function content_61800349b40198_55792104($_smarty_tpl) {?><!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin Titulo" : $tmp);?>
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

      <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
          <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
        <?php } ?>

      <?php }?>

   </head>
   <body>
    <header id="header">
      <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </header>

    <main id="main">
      <noscript><p>Debe tener el soporte de Javascript habilitado</p></noscript>

      <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </main>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
</html><?php }} ?>

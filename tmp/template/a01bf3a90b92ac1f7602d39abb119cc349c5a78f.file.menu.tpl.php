<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-05 22:42:12
         compiled from "/var/www/html/profesor-galdames/views/layout/default/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8443443561800349b56d06-95943938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01bf3a90b92ac1f7602d39abb119cc349c5a78f' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/layout/default/menu.tpl',
      1 => 1636162927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8443443561800349b56d06-95943938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61800349b5c583_15467458',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61800349b5c583_15467458')) {function content_61800349b5c583_15467458($_smarty_tpl) {?><div class="container">

    <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="scrollto"><span>PG</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
    </div>

    <nav class="main-nav float-right d-none d-lg-block">
        <ul>
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Home</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
about">Acerca de</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#portfolio">Portfolio</a></li>

            <li class="drop-down"><a href="">Cursos</a>
                <ul>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/">Cursos</a></li>
                    <li class="drop-down"><a href="#">Categorías</a>
                        <ul>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/cursosCategoria/2">Base de Datos</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/cursosCategoria/8">JavaScript</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/cursosCategoria/1">PHP</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <?php if (Session::get('autenticado')&&Session::get('usuario_rol')!='Estudiante') {?>
                <li class="drop-down"><a href="">Administración</a>
                    <ul>
                        <li class="drop-down"><a href="#">Cursos</a>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categorias/">Categorías</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/cursosAdmin">Cursos</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">Usuarios</a>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/">Roles</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/">Usuarios</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            <?php }?>
            <?php if (Session::get('autenticado')) {?>
                <li class="drop-down"><a href=""><?php echo Session::get('usuario_nombre');?>
</a>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/miPerfil">Mi Perfil</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cursos/misCursos">Mis Cursos</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/cerrar">Logout</a></li>
                    </ul>
                </li>
            <?php } else { ?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login/">Login</a></li>
            <?php }?>
            <li><a href="#footer">Contacto</a></li>
        </ul>
    </nav><!-- .main-nav -->

</div>



<?php }} ?>

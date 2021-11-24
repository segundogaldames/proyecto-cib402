<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 15:51:24
  from '/Applications/MAMP/htdocs/profesor-galdames/views/layout/default/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a98fc814ed4_98892851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3a1e1c7e136816be02c5ff57181ffde47359919' => 
    array (
      0 => '/Applications/MAMP/htdocs/profesor-galdames/views/layout/default/menu.tpl',
      1 => 1636473072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618a98fc814ed4_98892851 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">

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
            <li><a href="#services">Servicios</a></li>
            <li><a href="#portfolio">Portfolio</a></li>

            <?php if (Session::get('autenticado') && Session::get('usuario_rol') != 'Estudiante') {?>
                <li class="drop-down"><a href="">Administración</a>
                    <ul>
                        <li class="drop-down"><a href="#">Contenidos</a>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
articulos/">Artículos</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
videos/">Videos</a></li>
                            </ul>
                        </li>
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



<?php }
}

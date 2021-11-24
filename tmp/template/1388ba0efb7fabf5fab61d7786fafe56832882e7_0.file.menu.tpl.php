<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-23 16:04:28
  from '/var/www/html/gestiones/views/layout/default/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619d3b3cc8ae87_22639556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1388ba0efb7fabf5fab61d7786fafe56832882e7' => 
    array (
      0 => '/var/www/html/gestiones/views/layout/default/menu.tpl',
      1 => 1637694141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d3b3cc8ae87_22639556 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Gestiones</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Home</a>
                </li>
                <?php if (Session::get('usuario_rol') == 'Administrador') {?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administrar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes">Clientes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ejecutivos">Ejecutivos</a></li>
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
origenes">Orígenes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
estados">Estados</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles">Roles</a></li>
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios">Usuarios</a></li>
                        </ul>
                    </li>
                <?php }?>
                <?php if (!((Session::get('autenticado') !== null ))) {?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login">Login</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo Session::get('usuario_nombre');?>

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/miPerfil">Mi perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/logout">Logout</a></li>
                        </ul>
                    </li>
                <?php }?>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav><?php }
}

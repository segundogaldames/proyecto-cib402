<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-11-01 21:30:05
         compiled from "/var/www/html/profesor-galdames/views/roles/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74623879361804d1d11e989-14791511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4829a10b2281b4f65701c8733a91c8157472fee2' => 
    array (
      0 => '/var/www/html/profesor-galdames/views/roles/view.tpl',
      1 => 1635812943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74623879361804d1d11e989-14791511',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_61804d1d169b85_22574429',
  'variables' => 
  array (
    'title' => 0,
    'rol' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61804d1d169b85_22574429')) {function content_61804d1d169b85_22574429($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/profesor-galdames/libs/smarty/libs/plugins/modifier.date_format.php';
?><section id="intro" class="clearfix py-4">
    <div class="container">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

                <?php echo $_smarty_tpl->getSubTemplate ("../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <table class="table table-hover">
                    <tr>
                        <th>Rol:</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
</td>
                    </tr>
                    <tr>
                        <th>Creado:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rol']->value['created_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                    <tr>
                        <th>Rol:</th>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rol']->value['updated_at'],"%d-%m-%Y %H:%M:%S");?>
</td>
                    </tr>
                </table>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/edit/<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
" class="btn btn-outline-primary btn-sm">Editar</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/" class="btn btn-outline-primary btn-sm">Volver</a>
                </p>

            </div>
        </div>
    </div>
</section><!-- #intro --><?php }} ?>

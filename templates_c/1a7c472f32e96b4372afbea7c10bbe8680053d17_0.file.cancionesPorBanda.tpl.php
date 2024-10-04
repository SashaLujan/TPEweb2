<?php
/* Smarty version 3.1.34-dev-7, created on 2024-10-05 00:24:40
  from 'C:\xampp\htdocs\TPEweb2\templates\cancionesPorBanda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_67006b28a39b94_44530452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a7c472f32e96b4372afbea7c10bbe8680053d17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\cancionesPorBanda.tpl',
      1 => 1728080667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67006b28a39b94_44530452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
   <h4 class="blockquote">Canciones</h4>
</div>
    <div class="container mt-5">
        <div class="bandas">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cancionesPorBanda']->value, 'canciones');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['canciones']->value) {
?>
                <div class="card">
                    <div class="card-body">
                        <p class="card-title"> <?php echo strtoupper($_smarty_tpl->tpl_vars['canciones']->value->nombre_cancion);?>
 </p>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <a class="btn btn-dark" href="listaBandas">volver</a>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

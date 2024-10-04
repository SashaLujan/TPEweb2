<?php
/* Smarty version 3.1.34-dev-7, created on 2024-10-04 23:37:51
  from 'C:\xampp\htdocs\TPEweb2\templates\showBandas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6700602f444820_39282162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80cd05c3eda5a806b072ececbe6e18929f258e17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\showBandas.tpl',
      1 => 1728077858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6700602f444820_39282162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
   <h4 class="blockquote">Bandas</h4>
</div>

<div class="container mt-5">
    <div class="bandas">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaBandas']->value, 'bandas');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bandas']->value) {
?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo strtoupper($_smarty_tpl->tpl_vars['bandas']->value->nombre_banda);?>
 </h5>
                    <a href="cancionesPorBanda/<?php echo $_smarty_tpl->tpl_vars['bandas']->value->id_banda;?>
" class="btn btn-dark">ver mas</a>  
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
 
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

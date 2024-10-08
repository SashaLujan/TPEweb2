<?php
/* Smarty version 3.1.34-dev-7, created on 2024-10-09 00:52:55
  from 'C:\xampp\htdocs\TPEweb2\templates\formUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6705b7c73956e2_77311050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f521622ddefd43eea64ad6be118747dce376dae2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\formUser.tpl',
      1 => 1728427970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6705b7c73956e2_77311050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>
        <h4 class="text-center" class="blockquote">Suscribirse</h4>
        <form class="row g-3" action="guardar_usuario" method="POST">
            
            <div class="col-md-6">
                <label class="form-label">Ingresar nombre</label>
                <input class="form-control" type="text" name="nombre">
            </div>
            <div class="col-md-6">
                <label class="form-label">Ingresar correo electronico</label>
                <input class="form-control" type="email" placeholder="name@example.com" name="email">
            </div>
            <div class="col-12">
                <label class="form-label">Ingresar contraseña</label>
                <input class="form-control" type="password" name="contrasenia">
            </div>
            <div class="col-12">
                <label class="form-label">Repetir contraseña</label>
                <input class="form-control" type="password" name="repitaContrasenia">
            </div> 
            <div class="col-12">
                <button type="submit" class="btn btn-dark"><b>Suscribirse</b></button>
    
            </div>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

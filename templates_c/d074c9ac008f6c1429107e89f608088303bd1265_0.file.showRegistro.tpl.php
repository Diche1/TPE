<?php
/* Smarty version 4.2.1, created on 2023-10-24 21:11:06
  from 'C:\xampp\htdocs\web2\TPE\templates\showRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653816ca894433_76544479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd074c9ac008f6c1429107e89f608088303bd1265' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\showRegistro.tpl',
      1 => 1698104670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/head.tpl' => 1,
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_653816ca894433_76544479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="testbox">
  <h1>Registrate</h1>
<form action="altaUsuario" method="post">
 <label for="email">Email:</label>
    <input type="text" name="Email" id="Email" required>
    <br>
    <label for="nombre">Nombre:</label>
    <input type="nombre" name="nombre" id="nombre" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" value="Registrar">

</form>
</div>

</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


 
<?php }
}

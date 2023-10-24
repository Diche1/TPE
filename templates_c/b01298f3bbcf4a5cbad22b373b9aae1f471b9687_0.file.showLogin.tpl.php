<?php
/* Smarty version 4.2.1, created on 2023-10-24 19:27:34
  from 'C:\xampp\htdocs\TPE\templates\showLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6537fe86798501_22402469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b01298f3bbcf4a5cbad22b373b9aae1f471b9687' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\showLogin.tpl',
      1 => 1698104668,
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
function content_6537fe86798501_22402469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="testbox">
  <h1>iniciar Sesión</h1>
<form action="validar" method="post">
<label for="email">Email:</label>
<input type="text" name="email" id="Email" required>
<br>
<label for="password">Contraseña:</label>
<input type="password" name="password" id="password" required>
<br>
<input type="submit" value="Iniciar Sesión">
 </div> 

</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

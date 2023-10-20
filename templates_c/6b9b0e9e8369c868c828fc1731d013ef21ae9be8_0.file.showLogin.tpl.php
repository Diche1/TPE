<?php
/* Smarty version 4.2.1, created on 2023-10-21 01:01:17
  from 'C:\xampp\htdocs\tpeweb\TPE\templates\showLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653306bdc7b613_61519896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b9b0e9e8369c868c828fc1731d013ef21ae9be8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb\\TPE\\templates\\showLogin.tpl',
      1 => 1697842855,
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
function content_653306bdc7b613_61519896 (Smarty_Internal_Template $_smarty_tpl) {
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

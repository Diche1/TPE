<?php
/* Smarty version 4.2.1, created on 2023-10-20 23:10:53
  from 'C:\xampp\htdocs\tpeweb\TPE\templates\showSesion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6532ecdd1aa336_89487742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a879aceefb8b107eb6cda293710af063179906f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb\\TPE\\templates\\showSesion.tpl',
      1 => 1697836251,
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
function content_6532ecdd1aa336_89487742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
<h1>Iniciar Sesión</h1>
<form method="post" action="login">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" value="Iniciar Sesión">
</form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

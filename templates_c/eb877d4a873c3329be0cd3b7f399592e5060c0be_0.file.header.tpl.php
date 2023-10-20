<?php
/* Smarty version 4.2.1, created on 2023-10-21 00:35:26
  from 'C:\xampp\htdocs\tpeweb\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653300ae89ed92_91755308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb877d4a873c3329be0cd3b7f399592e5060c0be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb\\TPE\\templates\\header.tpl',
      1 => 1697841324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_653300ae89ed92_91755308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar w/ text asdasdsadasdasdasdsadas </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="marcas">Marcas</a>
        <li class="nav-item">
          <a class="nav-link" href="login">Iniciar Sesión</a>
          <li class="nav-item">
          <a class="nav-link" href="registro">Registrarse</a>




        </li>
      </ul>
      <span class="navbar-text">
              </span>
    </div>
  </div>
</nav>

<?php }
}

<?php
<<<<<<<< HEAD:templates_c/cc5ffcd599e2f8fdafa6c6956ed0b1c51509f789_0.file.showProductos.tpl.php
/* Smarty version 4.2.1, created on 2023-10-24 19:23:22
  from 'C:\xampp\htdocs\TPE\templates\showProductos.tpl' */
========
/* Smarty version 4.2.1, created on 2023-10-24 19:01:47
  from 'C:\xampp\htdocs\web2\TPE\templates\showProductos.tpl' */
>>>>>>>> df9b6ed946dda922df7a24351722ed28be0a511a:templates_c/ef7c67d44f876275a37ca6c6805d66a5c5ab349d_0.file.showProductos.tpl.php

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
<<<<<<<< HEAD:templates_c/cc5ffcd599e2f8fdafa6c6956ed0b1c51509f789_0.file.showProductos.tpl.php
  'unifunc' => 'content_6537fd8acdd152_68919948',
========
  'unifunc' => 'content_6537f87b1e9346_63006250',
>>>>>>>> df9b6ed946dda922df7a24351722ed28be0a511a:templates_c/ef7c67d44f876275a37ca6c6805d66a5c5ab349d_0.file.showProductos.tpl.php
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc5ffcd599e2f8fdafa6c6956ed0b1c51509f789' => 
    array (
<<<<<<<< HEAD:templates_c/cc5ffcd599e2f8fdafa6c6956ed0b1c51509f789_0.file.showProductos.tpl.php
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\showProductos.tpl',
      1 => 1698104668,
========
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\showProductos.tpl',
      1 => 1698166905,
>>>>>>>> df9b6ed946dda922df7a24351722ed28be0a511a:templates_c/ef7c67d44f876275a37ca6c6805d66a5c5ab349d_0.file.showProductos.tpl.php
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
<<<<<<<< HEAD:templates_c/cc5ffcd599e2f8fdafa6c6956ed0b1c51509f789_0.file.showProductos.tpl.php
function content_6537fd8acdd152_68919948 (Smarty_Internal_Template $_smarty_tpl) {
========
function content_6537f87b1e9346_63006250 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>>> df9b6ed946dda922df7a24351722ed28be0a511a:templates_c/ef7c67d44f876275a37ca6c6805d66a5c5ab349d_0.file.showProductos.tpl.php
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h2>Lista de Productos</h2>
<table>
    <thead>
        <tr>
            <td>Id
            </td>
            <td>Fabricante
            </td>
            <td>Potencia
            </td>
            <td>Info
            </td>
            </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->Id;?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->Fabricante;?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->Potencia;?>
HP
                </td>

                <td><a href="producto/<?php echo $_smarty_tpl->tpl_vars['product']->value->Id;?>
">Ver Mas</a>                 </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

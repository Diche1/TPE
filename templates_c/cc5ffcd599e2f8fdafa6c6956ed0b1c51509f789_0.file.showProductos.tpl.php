<?php
/* Smarty version 4.2.1, created on 2023-10-24 19:23:22
  from 'C:\xampp\htdocs\TPE\templates\showProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6537fd8acdd152_68919948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc5ffcd599e2f8fdafa6c6956ed0b1c51509f789' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\showProductos.tpl',
      1 => 1698104668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6537fd8acdd152_68919948 (Smarty_Internal_Template $_smarty_tpl) {
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

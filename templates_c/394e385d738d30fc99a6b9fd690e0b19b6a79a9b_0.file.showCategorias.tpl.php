<?php
/* Smarty version 4.2.1, created on 2023-10-19 01:45:42
  from 'C:\xampp\htdocs\web2\TPE\templates\showCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65306e26586952_20135209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '394e385d738d30fc99a6b9fd690e0b19b6a79a9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\showCategorias.tpl',
      1 => 1697672695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65306e26586952_20135209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2>Lista de Categorias</h2>
<table>
        <thead>
                <tr>
                        <td>Id
                        </td>
                        <td>Id_producto
                        </td>
                        <td>Tipo
                        </td>
                </tr>
        </thead>
        <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                        <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Id;?>

                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Id_producto;?>

                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Tipo;?>

                                </td>
                        </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

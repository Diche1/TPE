<?php
/* Smarty version 4.2.1, created on 2023-10-24 04:53:30
  from 'C:\xampp\htdocs\tpeweb\TPE\TPE\templates\showCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653731aa64d0b9_96195491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc755e37507917f91268560f1d3f3041174140b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb\\TPE\\TPE\\templates\\showCategoria.tpl',
      1 => 1698115717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_653731aa64d0b9_96195491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2>Lista de Marcas</h2>
<table>
        <thead>
                <tr>
                        <td>Id
                        </td>
                        <td>Marca
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
                                <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Fabricante;?>

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

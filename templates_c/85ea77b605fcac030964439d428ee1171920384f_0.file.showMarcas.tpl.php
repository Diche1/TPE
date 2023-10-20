<?php
/* Smarty version 4.2.1, created on 2023-10-20 21:45:38
  from 'C:\xampp\htdocs\tpeweb\TPE\templates\showMarcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6532d8e2004167_78774576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85ea77b605fcac030964439d428ee1171920384f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb\\TPE\\templates\\showMarcas.tpl',
      1 => 1697831136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6532d8e2004167_78774576 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                        <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->Id;?>

                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->Fabricante;?>

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

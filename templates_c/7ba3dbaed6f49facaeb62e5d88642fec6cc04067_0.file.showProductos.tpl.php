<?php
/* Smarty version 4.2.1, created on 2023-10-20 21:25:20
  from 'C:\xampp\htdocs\tpeweb\TPE\templates\showProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6532d420403107_86242395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ba3dbaed6f49facaeb62e5d88642fec6cc04067' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb\\TPE\\templates\\showProductos.tpl',
      1 => 1697829539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6532d420403107_86242395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h2>Lista de Productos</h2>
<table>
    <thead>
        <tr>
            <td>Id
            </td>
            <td>Id_Marca
            </td>
            <td>Potencia
            </td>
            <td>Velocidad
            </td>
            <td>Voltaje
            </td>
            <td>Frecuencia
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
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->Id_Marca;?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->Potencia;?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->Velocidad;?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->Voltaje;?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->Frecuencia;?>

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

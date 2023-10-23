<?php
/* Smarty version 4.2.1, created on 2023-10-21 14:43:10
  from 'C:\xampp\htdocs\web2\TPE\templates\showProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6533c75e642967_58110290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef7c67d44f876275a37ca6c6805d66a5c5ab349d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\showProductos.tpl',
      1 => 1697676599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6533c75e642967_58110290 (Smarty_Internal_Template $_smarty_tpl) {
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
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->Id_marca;?>

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

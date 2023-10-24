<?php
/* Smarty version 4.2.1, created on 2023-10-24 04:48:57
  from 'C:\xampp\htdocs\tpeweb\TPE\TPE\templates\showDetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65373099af1587_03586100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed6982afa32a1c3aa00ee4900a6a4c1857a16ce3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb\\TPE\\TPE\\templates\\showDetalles.tpl',
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
function content_65373099af1587_03586100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h2>Producto</h2>
<table>
    <thead>
        <tr>
            <td>Id
            </td>
            <td>Fabricante
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalles']->value, 'detalle');
$_smarty_tpl->tpl_vars['detalle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detalle']->value) {
$_smarty_tpl->tpl_vars['detalle']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['detalle']->value->Id;?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['detalle']->value->Fabricante;?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['detalle']->value->Potencia;?>
HP
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['detalle']->value->Velocidad;?>
RPM
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['detalle']->value->Voltaje;?>
V
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['detalle']->value->Frecuencia;?>
HZ
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

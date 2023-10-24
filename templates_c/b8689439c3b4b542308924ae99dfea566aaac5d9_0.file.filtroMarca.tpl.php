<?php
/* Smarty version 4.2.1, created on 2023-10-24 21:10:50
  from 'C:\xampp\htdocs\web2\TPE\templates\filtroMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653816ba258ac2_89286294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8689439c3b4b542308924ae99dfea566aaac5d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\filtroMarca.tpl',
      1 => 1698167756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_653816ba258ac2_89286294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Lista de Productos</h2>
<table>
    <thead>
        <tr>
            <th scope="col">fabricante</td>
            <th scope="col">Potencia</td>
            <th scope="col">Velocidad</td>
            <th scope="col">Voltaje</td>
            <!-- Agrega más columnas según los campos de tus productos -->
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
       
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Id;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Potencia;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Velocidad;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Voltaje;?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    
</table>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}

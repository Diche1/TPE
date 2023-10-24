<?php
/* Smarty version 4.2.1, created on 2023-10-24 19:38:05
  from 'C:\xampp\htdocs\web2\TPE\templates\showFiltro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653800fd1aa239_49359449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6f83cbee07a14b50e9fb6fdb8f86d829a6eb6f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\showFiltro.tpl',
      1 => 1698169080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_653800fd1aa239_49359449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2>Lista de Marcas</h2>
<table>
        <thead>
                <tr>
                        <td>Marca
                        </td>
                        <td>Potencia
                        </td>
                        <td>Velocidad
                        </td>
                        <td>Marca
                        </td>
                        <td>Marca
                        </td>

                </tr>
        </thead>
        <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filtros']->value, 'filtro');
$_smarty_tpl->tpl_vars['filtro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filtro']->value) {
$_smarty_tpl->tpl_vars['filtro']->do_else = false;
?>
                        <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['filtro']->value->Fabricante;?>

                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['filtro']->value->Potencia;?>
HP
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['filtro']->value->Velocidad;?>
RPM
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['filtro']->value->Voltaje;?>
V
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['filtro']->value->Frecuencia;?>
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

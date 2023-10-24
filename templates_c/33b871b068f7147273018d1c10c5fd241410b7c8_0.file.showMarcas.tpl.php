<?php
/* Smarty version 4.2.1, created on 2023-10-24 03:49:12
  from 'C:\xampp\htdocs\web2\TPE\templates\showMarcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65372298abbc34_40373492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33b871b068f7147273018d1c10c5fd241410b7c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\showMarcas.tpl',
      1 => 1698111065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65372298abbc34_40373492 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <td><a href="marcas/<?php echo $_smarty_tpl->tpl_vars['marca']->value->Id;?>
">Ver Mas</a>                                 </td>
                        </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

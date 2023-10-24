<?php
<<<<<<<< HEAD:templates_c/948f94f3bb50a3b3f5831c91200788068db3c409_0.file.showMarcas.tpl.php
/* Smarty version 4.2.1, created on 2023-10-24 19:08:02
  from 'C:\xampp\htdocs\TPE\templates\showMarcas.tpl' */
========
/* Smarty version 4.2.1, created on 2023-10-24 19:55:16
  from 'C:\xampp\htdocs\web2\TPE\templates\showMarcas.tpl' */
>>>>>>>> df9b6ed946dda922df7a24351722ed28be0a511a:templates_c/33b871b068f7147273018d1c10c5fd241410b7c8_0.file.showMarcas.tpl.php

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
<<<<<<<< HEAD:templates_c/948f94f3bb50a3b3f5831c91200788068db3c409_0.file.showMarcas.tpl.php
  'unifunc' => 'content_6537f9f2090b02_72092479',
========
  'unifunc' => 'content_65380504e2d144_85755421',
>>>>>>>> df9b6ed946dda922df7a24351722ed28be0a511a:templates_c/33b871b068f7147273018d1c10c5fd241410b7c8_0.file.showMarcas.tpl.php
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '948f94f3bb50a3b3f5831c91200788068db3c409' => 
    array (
<<<<<<<< HEAD:templates_c/948f94f3bb50a3b3f5831c91200788068db3c409_0.file.showMarcas.tpl.php
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\showMarcas.tpl',
      1 => 1698166703,
========
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\showMarcas.tpl',
      1 => 1698170114,
>>>>>>>> df9b6ed946dda922df7a24351722ed28be0a511a:templates_c/33b871b068f7147273018d1c10c5fd241410b7c8_0.file.showMarcas.tpl.php
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
<<<<<<<< HEAD:templates_c/948f94f3bb50a3b3f5831c91200788068db3c409_0.file.showMarcas.tpl.php
function content_6537f9f2090b02_72092479 (Smarty_Internal_Template $_smarty_tpl) {
========
function content_65380504e2d144_85755421 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>>> df9b6ed946dda922df7a24351722ed28be0a511a:templates_c/33b871b068f7147273018d1c10c5fd241410b7c8_0.file.showMarcas.tpl.php
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
<<<<<<<< HEAD:templates_c/948f94f3bb50a3b3f5831c91200788068db3c409_0.file.showMarcas.tpl.php
                                <td><a href="filtradoPorMarca?id=<?php echo $_smarty_tpl->tpl_vars['marca']->value->Id;?>
">Ver más</a>                                 </td>
========
                                <td><a href="filtros/<?php echo $_smarty_tpl->tpl_vars['marca']->value->Id;?>
">Motores Disponibles</a>
                                </td>
>>>>>>>> df9b6ed946dda922df7a24351722ed28be0a511a:templates_c/33b871b068f7147273018d1c10c5fd241410b7c8_0.file.showMarcas.tpl.php
                        </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

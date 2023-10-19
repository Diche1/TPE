{include file = 'header.tpl'}


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
                {foreach from=$categorias item=$categoria}
                        <tr>
                                <td>{$categoria->Id}
                                </td>
                                <td>{$categoria->Id_producto}
                                </td>
                                <td>{$categoria->Tipo}
                                </td>
                        </tr>
                {/foreach}
        </tbody>
</table>
{* ACOMODAR LA BASE DE DATOS, QUE MIERDA QUISISTE DECIR AGUS ( LA TABLA CATEGORIA ) *}
{include file= 'footer.tpl'}
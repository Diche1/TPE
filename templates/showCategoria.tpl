{include file = 'header.tpl'}


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
                {foreach from=$categorias item=$categoria}
                        <tr>
                                <td>{$categoria->Id}
                                </td>
                                <td>{$categoria->Fabricante}
                                </td>
                        </tr>
                {/foreach}
        </tbody>
</table>
{include file= 'footer.tpl'}
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
                {foreach from=$marcas item=$marca}
                        <tr>
                                <td>{$marcas->Id}
                                </td>
                                <td>{$marcas->Marca}
                                </td>
                        </tr>
                {/foreach}
        </tbody>
</table>
{include file= 'footer.tpl'}
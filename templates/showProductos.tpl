{include file = 'header.tpl'}



<h2>Lista de Productos</h2>
<table>
    <thead>
        <tr>
            <td>Id
            </td>
            <td>Fabricante
            </td>
            <td>Potencia
            </td>
            <td>Info
            </td>
            </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=$product}
            <tr>
                <td>{$product->Id}
                </td>
                <td>{$product->Fabricante}
                </td>
                <td>{$product->Potencia}HP
                </td>

                <td><a href="producto/{$product->Id}">Ver Mas</a> {*  *}
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file= 'footer.tpl'}
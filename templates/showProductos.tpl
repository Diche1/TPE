{include file = 'header.tpl'}



<h2>Lista de Productos</h2>
<table>
    <thead>
        <tr>
            <td>Id
            </td>
            <td>Producto
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
        {foreach from=$productos item=$product}
            <tr>
                <td>{$product->Id}
                </td>
                <td>{$product->Nombre}
                </td>
                <td>{$product->Potencia}
                </td>
                <td>{$product->Velocidad}
                </td>
                <td>{$product->Voltaje}
                </td>
                <td>{$product->Frecuencia}
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file= 'footer.tpl'}
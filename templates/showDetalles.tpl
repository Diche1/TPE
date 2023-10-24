{include file = 'header.tpl'}



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
        {foreach from=$detalles item=$detalle}
            <tr>
                <td>{$detalle->Id}
                </td>
                <td>{$detalle->Fabricante}
                </td>
                <td>{$detalle->Potencia}HP
                </td>
                <td>{$detalle->Velocidad}RPM
                </td>
                <td>{$detalle->Voltaje}V
                </td>
                <td>{$detalle->Frecuencia}HZ
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file= 'footer.tpl'}
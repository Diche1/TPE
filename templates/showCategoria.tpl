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
        </tbody>
</table>
{include file= 'footer.tpl'}
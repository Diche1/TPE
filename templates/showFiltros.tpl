{include file = 'header.tpl'}


<h2>Lista de Productos</h2>
<table>
        <thead>
                <tr>
                        <td>Marca
                        </td>
                        <td>Potencia
                        </td>
                    {*     <td>Velocidad
                        </td>
                        <td>Marca
                        </td>
                        <td>Marca
                        </td> *}

                </tr>
        </thead>
        <tbody>
                {foreach from=$filtro item=$f}
                        <tr>
                                <td>{$f->Fabricante}
                                </td>
                                <td>{$f->Potencia}HP
                                </td>
                                <td>{$f->Velocidad}RPM
                                </td>
                                <td>{$f->Voltaje}V
                                </td>
                                <td>{$f->Frecuencia}HZ
                                </td>
                        </tr>
                {/foreach}
        </tbody>
</table>
{include file= 'footer.tpl'}
{include file = 'header.tpl'}

<h2>Lista de Productos</h2>
<table>
    <thead>
        <tr>
            <th scope="col">fabricante</td>
            <th scope="col">Potencia</td>
            <th scope="col">Velocidad</td>
            <th scope="col">Voltaje</td>
            <!-- Agrega más columnas según los campos de tus productos -->
        </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=$producto}
       
            <tr>
            <td>{$producto->Id}</td>
            <td>{$producto->Potencia}</td>
            <td>{$producto->Velocidad}</td>
            <td>{$producto->Voltaje}</td>
            </tr>
        {/foreach}
    </tbody>
    
</table>
{include file= 'footer.tpl'}



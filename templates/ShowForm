{include file="templates/head.tpl"}
{include file="templates/header.tpl"}
<div class="testbox">

    <form action="{$BASE_URL}addArticle" method="post" id="form-edit" enctype="multipart/form-data">
        <label>Nombre</label><input type="text" name="Potencia" placeholder="1hz" required>
        <label>Precio</label><input type="number" min="1" name="Velocidad" placeholder="200" required>
        <label>Alto</label><input type="number" min="1" name="Voltaje" placeholder="110/220" required>
        <label>Ancho</label><input type="number" min="1" name="Frecuencia" placeholder="4" required>

        <label>Categoria</label>
        <select name="id_categoria" required>
            <option hidden disabled selected value> -- Seleccioná una opción -- </option>

            {foreach from=$categorias item=$op}
            <option value="{$op->id_categoria}">{$op->tipo}</option>
            {/foreach}
        </select>
        <label>Imagen</label><input type="file" name="image[]" id="articleAttachmentInput" accept="image/*">
        <button id="formBtn">Añadir artículo</button>
    </form>
</div>

{include file="templates/footer.tpl"}

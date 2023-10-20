{include file="templates/head.tpl"}
{include file="templates/header.tpl"}
<div>
<h1>Iniciar Sesión</h1>
<form method="post" action="validar">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" value="Iniciar Sesión">
</form>
</div>


{include file="templates/footer.tpl"}
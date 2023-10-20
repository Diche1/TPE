{include file="templates/head.tpl"}
{include file="templates/header.tpl"}

<div class="testbox">
  <h1>Registrate</h1>
<form action="altaUsuario" method="post">
 <label for="email">Email:</label>
    <input type="text" name="email" id="Email" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" value="Registrar">

</form>
</div>

</form>

{include file="templates/footer.tpl"}


 

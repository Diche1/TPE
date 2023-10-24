{include file="templates/head.tpl"}
{include file="templates/header.tpl"}

<div class="testbox">
  <h1>iniciar Sesión</h1>
<form action="validar" method="post">
<label for="email">Email:</label>
<input type="text" name="email" id="Email" required>
<br>
<label for="password">Contraseña:</label>
<input type="password" name="password" id="password" required>
<br>
<input type="submit" value="Iniciar Sesión">
 </div> 

</form>

{include file="templates/footer.tpl"}
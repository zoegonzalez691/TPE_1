{include 'header.tpl'}


<div class="mostrar">
<form method="POST" action = "autenticar" class= "mostrar">
<h1> Iniciar Sesion</h1>
<label>Nombre de Usuario</label>
<input name="nombre" type="text" placeholder="Nombre de usuario"></input>
<label>Contraseña</label>
<input name="password" type="password" placeholder="Contraseña"></input>
<button type=submit>Enviar</button>
</form>

</div>

{include 'footer.tpl'}
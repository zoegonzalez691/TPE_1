{include 'header.tpl'}

<form method="GET" action = autenticar>
<h1> Iniciar Sesion</h1>
<label>Nombre de Usuario</label>
<input name="nombre" type="text" placeholder="Nombre de usuario"></input>
<label>Contraseña</label>
<input name="password" type="password" placeholder="Contraseña"></input>
<button type=submit>Enviar</button>

{include 'footer.tpl'}
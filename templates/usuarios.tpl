{include 'header.tpl'}


<div class="mostrar">
<form method="POST" action = "autenticar" class= "mostrar">
<h1> Iniciar Sesion</h1>
 <div class="row">
  <div class="col">
<input name="nombre" type="text" placeholder="Nombre de usuario"  class="form-control" ></input>
</div>
  <div class="col">
<input name="password" type="password" placeholder="Contraseña"  class="form-control" ></input>
</div>
 <div class="col">
<button type="submit" class="btn btn-primary">Enviar</button>
</div>
</div>


</form>


</div>

{include 'footer.tpl'}
<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div id="div_centrado" >
	<div  id="div_centrado">
		<center><i class="fas fa-user-circle fa-4x"></i></center>
	</div>
	<form method="POST" action="Session/verificarUsuario">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Correo Electronico</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
				value="<?php /*PHP */ if($datos != false){ echo $datos["email"];} ?>" 
				placeholder="Enter email" required
			>
	    <small id="emailHelp" class="form-text text-muted">No compartiremos tu información con alguien mas.</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
				value="<?php /*PHP */ if($datos != false){ echo $datos["password"];} ?>"
				placeholder="Password" required
			>
	  </div>
		<div class="form-group" id="crear_cuenta">
			<a href="#" class="bootstrap-link">Crear Cuenta</a>
	  </div>
	  <div class="form-group form-check">
	    <input type="checkbox" name="recordar" class="form-check-input" id="exampleCheck1" 
				<?php /*PHP */ if($datos != false){ echo "checked";} ?>
			>
	    <label class="form-check-label" for="exampleCheck1">Recordar</label>
	  </div>		
	  <button type="submit" class="btn btn-primary">Entrar</button>
	</form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
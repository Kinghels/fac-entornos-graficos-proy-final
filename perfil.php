
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
	<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="styles/core/registro.css" />
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
	<link rel="shortcut icon"  type="image/x-icon" href="images/favicon.ico" />
	<script type="text/javascript" src="js/registro.js"></script>
	<title>Perfil</title>
	</head>
	
	<body>
		<?php 
			include "funciones.php"; 
			include "/entidades/usuario.php"; 
		?>;
		<div id="container" class="container-fluid" > 
		<h1>Perfil de <?php Usuario::getUser()->getApellidoNombre(); ?></h1><br />
	   	<form id="registro" name="registro" method="post" action="perfil.php?action=ok" accept-charset="ISO-8859-1">
			<div class="form-group">
				<label for="nombre">Nombre</label>
		        <input id="nombre" class="form-control" type="text" name="nombre" value="<?php Usuario::getUser()->getNombre(); ?>"/>
	        </div>
	        <div class="form-group">
	        	<label for="apellido">Apellido</label>
	            <input id="apellido" class="form-control" type="text" name="apellido" value="<?php Usuario::getUser()->getApellido(); ?>"/>
	        </div>
	        <div class="form-group">
                <label for="pass">Contraseña</label>
                <input id="pass" class="form-control" name="pass" type="password" value=""/>
            </div>	
            <div class="form-group">
                <label for="pass2">Repetir contraseña</label>
	            <input id="pass2" class="form-control" name="pass2" type="password" value=""/>
           	</div>
           	<div class="form-group">	
                <label for="email">Email</label>
	        	<input id="email" class="form-control" name="email" type="email" value="<?php Usuario::getUser()->getMail(); ?>"/>
	       	</div>
	        <div class="form-group">	
                <label for="domicilio">Domicilio</label>
	            <input id="domicilio" class="form-control" type="text" name="domicilio"  value="<?php Usuario::getUser()->getDomicilio(); ?>" />
	        </div>
	        <div class="form-group">
                <label for="telefono">Telefono</label>
	            <input id="telefono" class="form-control" type="text" name="telefono"  value="<?php Usuario::getUser()->getTelefono(); ?>" />
	        </div>
	        <input class="btn btn-success" type="button" name="enviar" value="Enviar" onclick="validar()"/>
	        <input class="btn btn-link" type="button" name="return" value="Volver" onclick="volver()"/>
			</form>
			</div>          		
	</body>
</html>
<?php
	actualizarUsuario();
?>


	

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" type="text/css" href="styles/core/registro.css" />-->
<!--<link rel="stylesheet" type="text/css" href="styles/typography.css">-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="shortcut icon"  type="image/x-icon" href="images/favicon.ico" />
<script type="text/javascript" src="js/registro.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<title>Registro</title>
</head>

<body clas="container-fluid">
	<div id="container" > 
		<h1>Registro</h1><br />
	   	<form class="form-group" id="registro" name="registro" method="post" action="registro.php?action=ok" accept-charset="ISO-8859-1">
	    	<div id="nombre-group" class="form-group">
	    		<label class="control-label" for="nombre"> *Nombre</label>
	        	<input class="form-control" type="text" name="nombre" id="nombre" value=""/>
	        </div>
	        <div id="apellido-group" class="form-group">    
	            <label class="control-label" for="apellido"> *Apellido</label>
	            <input class="form-control" type="text" name="apellido" id="apellido" value=""/>
	     	</div>
	        <div id="user-group" class="form-group">	
	            <label class="control-label" for="user">*Nombre de Usuario</label>
	        	<input class="form-control" type="text" name="user" id="user" value=""/>
	        </div>
			<div id="pass-group" class="form-group">	
	            <label class="control-label" for="pass">*Contraseña</label>
	       		<input class="form-control" type="password" name="pass" id="pass" value=""/>	
	            <label class="control-label" for="pass2">*Repetir contraseña</label>
	            <input class="form-control" type="password" name="pass2" id="pass2" value=""/>
	       	</div>
	        <div id="mail-group" class="form-group">	
	        	<label class="control-label" for="email">*Email</label>
	           	<input class="form-control" type="text" name="email" id="email" value=""/>
	        </div>
	        <div id="domicilio-group" class="form-group">	
	            <label class="control-label" for="domicilio">*Domicilio</label>
	           	<input class="form-control" type="text" name="domicilio" id="domicilio" value=""/>
	        </div>
	        <div id="telefono-group" class="form-group">	
	            <label class="control-label" for="telefono">*Telefono</label>
	           	<input class="form-control" type="text" name="telefono" id="telefono" value=""/>
	        </div>
	        <div class="form-group">
	        <input class="btn btn-success" type="button" name="enviar" value="Enviar" onclick="validar()"/>
	        <input class="btn btn-info" type="reset" name="resetear" value="Limpiar" />
	        <p class="box warning">Los campos marcados con * son obligatorios</p>
	        <a href="index.php">Volver</a>
	        </div>         
		</form>
	</div>
	<?PHP 	include 'funciones.php';
			nuevoUsuario();
	?>
</body>

</html>




	

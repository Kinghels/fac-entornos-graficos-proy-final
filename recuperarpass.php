<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>

<link rel="stylesheet" type="text/css" href="styles/forms/gray-theme.css" />
<link rel="stylesheet" type="text/css" href="styles/core/registro.css" />
<link rel="shortcut icon"  type="image/x-icon" href="images/favicon.ico" />
<script type="text/javascript" src="js/recuperarpass.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Recuperar Contraseña</title>
</head>

<body>
<div id="container">
	<h3>¿Olvidó su contraseña?</h3>
   	<hr />
	<div id="subcontainer">
    	<form name="recoverpassword" id="recoverpassword" class="ym-form" method="post" action="recuperarpass.php?action=ok">
    		<p><label for="email">Ingrese su email</label></p>
    		<div class="ym-fbox">
    			<input id="email" name="email" type="text" />
    		  	<br /><br />
    		  	<input class="ym-button ym-primary" type="button" value="Recuperar" name="recuperar" onclick="validar()"/>
    		  	 <input class="ym-button" type="button" name="return" value="Volver" onclick="volver()"/>
  		  	</div>
    	</form>
        <?PHP include "funciones.php";
		recuperarpass();
		?>
	</div>
</div>
</body>
</html>
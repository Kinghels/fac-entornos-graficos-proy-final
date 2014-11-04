<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<link rel="stylesheet" type="text/css" href="styles/recuperarpass.css" />
<link rel="shortcut icon"  type="image/x-icon" href="images/favicon.ico" />
<script type="text/javascript" src="js/recuperarpass.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cambiar Contraseña</title>
</head>

<body>
<div id="container">
	<h3>Nueva contraseña</h3>
	<br/> 
   	<hr />
	<div id="subcontainer">
    	<br/>
    	<form name="cambiarpassword" id="cambiarpassword" method="post" action="actualizarpass.php">
    	<table border="0" cellpadding="4" cellspacing="0" align="center">
            <tr><td align="right">	
                    <label for="pass1">Contraseña 1</label>
                </td>
                <td align="left">
                    <input id="pass1" type="password" name="pass1" value=""/>
                </td>
            </tr>
            <tr><td align="right">	
                    <label for="pass2">Contraseña 2</label>
                </td>
                <td align="left">
                    <input id="pass2" type="password" name="pass2" value=""/>
                </td>
               </tr>
    		</table>
    		<div>
    			<input id="idUsuario" type="hidden" name="idUsuario" value="<?php echo $_GET['idUsuario'];?>"/>
    			<input id="cambio" type="hidden" name="cambio" value="<?php echo $_GET['cambio'];?>"/>
    		  	<br />
    		  	<input class="btn" type="button" value="Guardar" name="guardar" onclick="validar_pass();"/>
  		  	</div>
    	</form>
        </div>
	</div>
</body>
</html>
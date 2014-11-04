<?php include "funciones.php"; 
if(isset($_COOKIE['user']))
	{ echo '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/core/registro.css" />
<link rel="stylesheet" type="text/css" href="styles/forms/gray-theme.css" />
<link rel="shortcut icon"  type="image/x-icon" href="images/favicon.ico" />
<script type="text/javascript" src="js/registro.js"></script>
<title>Perfil</title>
</head>

<body>
	<div id="container" > 
	<h1>Perfil de '.getNombreUsuario().'</h1><br />
   	<form class="ym-form" id="registro" name="registro" method="post" action="perfil.php?action=ok" accept-charset="ISO-8859-1">
		<table border="0" cellpadding="4" cellspacing="0" align="center">
            <tr><td align="right">	
                    <label for="nombre">Nombre</label>
                </td>
                <td align="left">
                    <input type="text" name="nombre" id="nombre" value="'.getNombreUsuario().'"/>';

                echo '</td>
            </tr>
            <tr><td align="right">	
                    <label for="apellido">Apellido</label>
                </td>
                <td align="left">
                    <input type="text" name="apellido" id="apellido" value="'.getApellidoUsuario().'"/>';
              echo '</td>
            </tr>
		<tr><td align="right">	
                    <label for="pass">Contraseña</label>
                </td>
                <td align="left">
                    <input type="password" name="pass" id="pass" value=""/>
                </td>
            </tr>
		<tr><td align="right">	
                    <label for="pass2">Repetir contraseña</label>
                </td>
                <td align="left">
                    <input type="password" name="pass2" id="pass2" value=""/>
                </td>
            </tr>
            <tr><td align="right">	
                    <label for="email">Email</label>
               	</td>
                <td align="left">
                    <input id="email" type="text" name="email" id="email" value="'.getMail().'"/>';
               echo '</td>
            </tr>
            <tr><td align="right">	
                    <label for="domicilio">Domicilio</label>
                </td>
                <td align="left">
                    <input type="text" name="domicilio"  value="'.getDomicilio().'" id="domicilio" />';
                echo ' </td>
            </tr>
            <tr><td align="right">	
                    <label for="telefono">Telefono</label>
                </td>
                <td align="left">
                    <input type="text" name="telefono"  value="'.getTelefono().'" id="telefono" />';
                echo ' </td>
            </tr>
        </table><br /><br />
        <input class="ym-button ym-primary" type="button" name="enviar" value="Enviar" onclick="validar()"/>
        <input class="ym-button" type="button" name="return" value="Volver" onclick="volver()"/>
        
        
		</form>
		</div>
                		
</body>

</html>';
	actualizarUsuario();
	}
	else {
		header('Location:index.php');
	}
	?>


	

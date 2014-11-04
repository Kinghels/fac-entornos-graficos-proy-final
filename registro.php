<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/core/registro.css" />
<link rel="stylesheet" type="text/css" href="styles/typography.css">
<link rel="stylesheet" type="text/css" href="styles/forms/gray-theme.css">
<link rel="shortcut icon"  type="image/x-icon" href="images/favicon.ico" />
<script type="text/javascript" src="js/registro.js"></script>
<title>Registro</title>
</head>

<body>
	<div id="container" > 
	<h1>Registro</h1><br />
   	<form class="ym-form" id="registro" name="registro" method="post" action="registro.php?action=ok" accept-charset="ISO-8859-1">
		<table border="0" cellpadding="4" cellspacing="0" align="center">
            <tr><td align="right">
                    <label for="nombre">*Nombre</label>
                </td>
                <td align="left">
                    <input type="text" name="nombre" id="nombre" value=""/>
                </td>
            </tr>
            <tr><td align="right">	
                    <label for="apellido">*Apellido</label>
                </td>
                <td align="left">
                    <input type="text" name="apellido" id="apellido" value=""/>
                </td>
            </tr>
        <tr><td align="right">	
                    <label for="user">*Nombre de Usuario</label>
                </td>
                <td align="left">
                    <input type="text" name="user" id="user" value=""/>
                </td>
            </tr>
		<tr><td align="right">	
                    <label for="pass">*Contraseña</label>
                </td>
                <td align="left">
                    <input type="password" name="pass" id="pass" value=""/>
                </td>
            </tr>
		<tr><td align="right">	
                    <label for="pass2">*Repetir contraseña</label>
                </td>
                <td align="left">
                    <input type="password" name="pass2" id="pass2" value=""/>
                </td>
            </tr>
            <tr><td align="right">	
                    <label for="email">*Email</label>
               	</td>
                <td align="left">
                    <input type="text" name="email" id="email" value=""/>
                </td>
            </tr>
            <tr><td align="right">	
                    <label for="domicilio">*Domicilio</label>
               	</td>
                <td align="left">
                    <input type="text" name="domicilio" id="domicilio" value=""/>
                </td>
            </tr>
            <tr><td align="right">	
                    <label for="telefono">*Telefono</label>
               	</td>
                <td align="left">
                    <input type="text" name="telefono" id="telefono" value=""/>
                </td>
            </tr>
        </table><br /><br />
        <input class="ym-button ym-primary" type="button" name="enviar" value="Enviar" onclick="validar()"/>
        <input class="ym-button" type="reset" name="resetear" value="Limpiar" />
        <p class="box warning">Los campos marcados con * son obligatorios</p>
        <a href="index.php">Volver</a>         
		</form>
		</div>
		<?PHP 	include 'funciones.php';
				nuevoUsuario();
		?>
</body>

</html>




	

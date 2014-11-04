<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<?php include 'funciones.php';?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/general-style.css" />
<link rel="stylesheet" type="text/css" href="styles/menu.css" />
<link rel="shortcut icon"  type="image/x-icon" href="images/favicon.ico" />
<script type="text/javascript" src="js/tpfinal.js">
</script>
<noscript><p>No esta permitida la ejecución de scripts en este navegador</p></noscript>
<title>Videoteca</title>
</head>
<body>
	<div id="container">
		<div id="header">
        	<img src="images/videoLogo.png" alt="Logo UTN" />
            <div id="titulo"><h1>Videoteca</h1>
            <h2>Sitio De Alquiler de Peliculas Online</h2>
            </div>
            <div id="logincontainer">
			<?php
				loginBox();
			?>
        	</div>
        </div>
        <hr id="line-header"/>
        <div id="trace">
            	<a href="index.php">Home</a>
            	<p><?PHP echo htmlentities('-->'); ?></p>
            	<a href="contacto.php">Contacto</a>
   	    </div>
		<div id="menu">
        	<div id="linkcontainer">
				<ul class="menu1">                
                    <li><a id="firstleftcollink" class="actual" href="index.php">Home</a></li>
                    <li><a class="menu" href="apuntes_carreras.php">Estrenos</a></li>
                    <li><a class="menu" href="#peliculas">Peliculas</a></li>
                  	<li><a class="menu" href="apuntes_carreras.php">Proximos Estrenos</a></li>
                    <li><a class="menu" href="apuntes_carreras.php">Alquiler</a></li>
                    <li><a class="menu" href="contacto.php">Contacto</a></li>
                    </ul>
                    <?php busqueda();?>	                       
			</div>
        </div>
		<div id="rightcol">
			Aqui van las peliculas mas alquiladas
			<?php
				//buscarMasVisitados();
			?>
		</div>
		<div id="content">
            <hr id="line-trace"/>
            <div id="subcontent">
            	<form>
            		<table align="center">
	            		<tr>
	            			<td>
	            				<label>Nombre: </label>
	            			</td>
	            			<td>
	            				<input type="text" />
	            			</td>
	            		</tr>
	            		<tr>
		            		<td>
		            			<label>Apellido: </label>
		            		</td>
		            		<td>
		            			<input type="text" />
		            		</td>
	            		</tr>
	            		<tr>
		            		<td>
		            			<label>Telefono: </label>
		            		</td>
		            		<td>
		            			<input type="text" />
		            		</td>
	            		</tr>
	            		<tr>
		            		<td>
		            			<label>e-Mail</label>
		            		</td>
		            		<td>
		            			<input type="text" />
		            		</td>
	            		</tr>
	            		<tr>
		            		<td>
		            			<label>Consulta: </label>
		            		</td>
		            		<td>
		            			<textarea rows="10" cols="20"></textarea>
		            		</td>
	            		</tr>
            		</table>
            		<input type="submit" value="Enviar">
            	</form>
            </div>
        </div>
        <div class="float-margin-fix"></div>
        <hr id="line-footer-clear"/>
		<div id="footer">
      		<p id="validador">
                <a href="http://validator.w3.org/check?uri=referer"><img
                  src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
           	</p>
        	<p>Trabajo Final Entornos Gr&aacute;ficos 2014 - Autor: Inghels Kevin - <a href="sitemap.php">Mapa del Sitio</a></p>
		</div>
	</div>
</body>
</html>

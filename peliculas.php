<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<?php include 'funciones.php';?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/core/general-style.css" />
<link rel="stylesheet" type="text/css" href="styles/menu.css" />
<link rel="stylesheet" type="text/css" href="styles/hlist.css">
<link rel="stylesheet" type="text/css" href="styles/forms/gray-theme.css">
<link rel="stylesheet" type="text/css" href="styles/core/typography.css">
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
            <div id="logincontainer" class="box info">
			<?php
				loginBox();
			?>
        	</div>
        </div>
        
   	    <hr id="line-header"/>
        
		<nav class="ym-hlist">
		  <ul>
		  	<li><a href="index.php">Home</a></li>
		    <li class="active"><strong>Peliculas</strong></li>
		    <li><a href="#">Link</a></li>
		    <li><a href="#">Link</a></li>
		    <li><a href="#contacto">Contacto</a></li>
		  </ul>
		  <!-- optional search form -->
		  <form class="ym-searchform">
		    <input class="ym-searchfield" type="search" placeholder="Search..." />
		    <input class="ym-searchbutton" type="submit" value="Search" />
		  </form>
		</nav>
		<div id="rightcol">
			Aqui van las peliculas mas alquiladas
			<?php
				//buscarMasAlquiladas();
			?>
		</div>
		<div id="content">
            <hr id="line-trace"/>
            <div id="trace">
           		<p><a href="index.php">Home</a></p>
           		<p>--></p>
           		<p><a href="peliculas.php">Peliculas</a></p>
   	    	</div>
   	    	
            <div id="subcontent">
            	<table>
            		<tr>
            			<td><img class="icon" src="images/dvd.ico"/></td>
            			<td>Operacion Skyfall</td>
            			<td>asdsdasd</td>
            		</tr>
            	</table>
				
            </div>
        </div>
        <div class="float-margin-fix"></div>
        <hr id="line-footer-clear"/>
		<div id="footer">
      		<p id="validador">
                <a href="http://validator.w3.org/check?uri=referer"><img
                  src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
           	</p>
        	<p class="dimmed">Trabajo Final Entornos Gr&aacute;ficos 2014 - Autor: Inghels Kevin - <a href="sitemap.php">Mapa del Sitio</a></p>
		</div>
	</div>
</body>
</html>

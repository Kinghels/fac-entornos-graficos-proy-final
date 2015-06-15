<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
	<head>
		<?php 
			include 'funciones.php';
			include '/entidades/usuario.php';
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Videoteca</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/css/general-style.css" />
		<link rel="stylesheet" type="text/css" href="/css/menu.css" />
		<link rel="shortcut icon"  type="image/x-icon" href="images/favicon.ico" />
		<script src="js/jquery-2.1.4.js"></script>
		<script type="text/javascript" src="js/videoteca.js"></script>
		<script src="/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
	</head>
	<body>
		<noscript>No esta permitida la ejecución de scripts en este navegador</noscript>
		<div class="container-fluid">
			<header>
	        	<img class="img-responsive" src="images/videoLogo.png" alt="Logo UTN" />
	            <div id="titulo">
	            	<h1>Videoteca</h1>
	            	<h2>Sitio De Alquiler de Peliculas Online 2</h2>       
	            </div>
	            <img id='menu-logo' src="images/ic_menu_48px.svg">
	            <div id="logincontainer" class="box info">
	            	<div id="user-box">
	            		<p>Bienvenido <a href="perfil.php"><?php Usuario::getUser()->getApellidoNombre(); ?></a></p><br />
                		<div id="btn-end-session" class="btn btn-primary">Cerrar sesión</div>
                	</div>
                	<div id="login-box">
		            	<form id="login"  name="f1" method="post" action="login.php">
							<div class="form-group">	
								<label for="usuario">Usuario</label>
								<input id="usuario" class="form-control" name="usuario" type="text" /><br  />
							</div>
							<div class="form-group">
								<label for="password">Contraseña</label>
								<input id="password" class="form-control" name="password" type="password" /><br />
							</div>
							<input name="url" id="url" type="hidden" value="'.$path.'" />
							<label for="loguearse" hidden>Loguearse</label>
							<input class="btn btn-success" type="button" id="loguearse" name="loguearse" value="Loguearse"/><br />
							<a href="recuperarpass.php">Olvidé mi contraseña</a><br />
							<a href="registro.html">Registrarme</a>
						</form>
					</div>
	        	</div>
	        </header>
			<nav class="row text-left">
			  <div class="col-md-1 btn"><strong>Home</strong></div>
			  <div class="col-md-1 btn"><a class="btn btn-default" href="peliculas.php">Peliculas</a></div>
			  <div class="col-md-1 btn"><a class="btn btn-default" href="#">Link</a></div>
			  <div class="col-md-1 btn"><a class="btn btn-default" href="#">Link</a></div>
			  <div class="col-md-1 btn"><a class="btn btn-default" href="#contacto">Contacto</a></div>
			  <!-- optional search form -->
			  <form id="search-form" class="col-md-7">
			    <input id="searchBox" type="search" placeholder="Search..." />
			    <input class="btn btn-search" type="submit" value="Search" />
			  </form>
			</nav>
			<section>
	            <header id="trace">
	            	<hr id="line-trace"/>
	           		<p><a href="index.php">Home</a></p>
	   	   		</header>
		   	    <aside>
					Aqui van las peliculas mas alquiladas
					<?php
						//buscarMasAlquiladas();
					?>
				</aside>
	           	<div id="subcontent">
	            	<p class="description"><strong>Bienvenido al Sitio de alquiler de peliculas</strong>. Aquí podrá encontrar los ultimos estrenos en el mundo del septimo arte, y podra realizar encargos de alquiler de peliculas. </p>
	            	<p class="description">&nbsp;</p>
	            	<p class="description">Para poder realizar reservas de peliculas, debe ser un usuario registrado.</p>
	            	<p class="description">&nbsp;</p>
	            	<br />
	                <p class="description">Las peliculas mas vistas son</p>
					
	            </div>
	    	</section>
			<footer>
	      		<p id="validador">
	                <a href="http://validator.w3.org/check?uri=referer"><img
	                  src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
	           	</p>
	        	<p>Trabajo Final Entornos Gráficos 2014 - Autor: Inghels Kevin - <a href="sitemap.php">Mapa del Sitio</a></p>
			</footer>
		</div>
	</body>
</html>

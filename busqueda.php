<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<?php include 'funciones.php';?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/general.css" />
<link rel="stylesheet" type="text/css" href="styles/isi.css"/>
<link rel="stylesheet" type="text/css" href="styles/materiasisi.css" />
<link rel="shortcut icon"  type="image/x-icon" href="images/favicon.ico" />
<script type="text/javascript" src="js/tpfinal.js">
</script>
<title>Apunteca UTN</title>
</head>
<body>
	<div id="container">
		<div id="header">
        	<img src="images/Logo_UTN.png" alt="Logo UTN" />
            <h1 id="titulo">Apunteca UTN</h1>
            <div id="logincontainer">
			<?php
				loginBox();
			?>
        	</div>
        </div>
        <hr id="line-header"/>
		<div id="leftcol">
        	<div id="linkcontainer">
				<ul class="menu">                
                    <li><a id="firstleftcollink" href="index.php">Home</a></li>
                    <li><a class="menu" href="carreras.php">Carreras</a>
                        <ul class="submenu">
                            <li><a href="isi.php">Sistemas</a></li>
                            <li><a href="quimica.php">Qu&iacute;mica</a></li>
                            <li><a href="civil.php">Civil</a></li>
                            <li><a href="mecanica.php">Mec&aacute;nica</a></li>
                            <li><a href="electrica.php">El&eacute;ctrica</a></li>
                        </ul>
                  	</li>
                    <li><a class="menu" href="apuntes_carreras.php">Apuntes Por Carreras</a></li>
	                
                </ul>
                <hr />
				<a href="http://www.frro.utn.edu.ar/" target="_blank">FRRO</a><hr /><?php busqueda();?>
			</div>
        </div>
    	<div id="rightcol"></div>
		<div id="content">
        	<div id="trace">
            	<a href="index.php">Home</a>
                <p><?PHP echo htmlentities('-->'); ?></p>
				<p>Resultados de búsqueda</p>
            </div>
            <hr id="line-trace"/>
            <div id="subcontent">
            	<p class="año">Resultado de búsqueda: </p>
            	<?php
            	$con=conectar();
            	
            	$query = "select a.titulo,m.cod_materia,m.nombre_materia from apuntes a natural join materias m where titulo like '%".$_POST['term']."%';"; 
            	if (mysqli_connect_errno())
            	{
            		echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
            	}
            	$result = mysqli_query($con,$query);
            	while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
            		echo '
                <div class="mostread">
                	<img src="images/pdf_icon.png" alt="PDF" width="16" height="16" />
                    <span><a href="pdf/'.$row['titulo'].'">' . $row['titulo'] . '</a></span>
                    <p class="description">En: <a href="apuntes_materia.php?idMateria='.htmlentities($row['cod_materia'],NULL,'').'">'.htmlentities($row['nombre_materia'],NULL,'').'</a></p>
				</div>';
            	}
            	?>
            </div>
        </div>
        <div class="float-margin-fix"></div>
        <hr id="line-footer-clear"/>
		<div id="footer">
      		<p id="validador">
                <a href="http://validator.w3.org/check?uri=referer"><img
                  src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
           	</p>
        	<p>Trabajo Final Entornos Gr&aacute;ficos 2012 - Copyleft - Todos los derechos no reservados - <a href="sitemap.php">Mapa del Sitio</a></p>
            <p>Autores: Abdo Facundo, Ibars Agust&iacute;n, Inghels Kevin</p>
		</div>
	</div>
</body>
</html>

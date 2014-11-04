<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Apunteca UTN - Carga de Archivos</title>
	<link rel="stylesheet" type="text/css" href="styles/general.css" />
	<link rel="stylesheet" type="text/css" href="styles/isi.css"/>
	<link rel="shortcut icon"  type="image/x-icon" href="images/favicon.ico" />
	<script type="text/javascript" src="styles/tpfinal.js"></script>
</head>
<?php
include 'funciones.php';
?>
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
         
					<a class="seguir" href="index.php">Home</a>
					<p><?PHP echo htmlentities('-->'); ?></p>
                	<?php
					$codCarrera=getCarreraCodMateria($_GET['idMateria']);
					switch ($codCarrera)
					{
						case 1: echo '<a class="seguir" href="isi.php">ISI</a>'; break;
						case 2: echo '<a class="seguir" href="quimica.php">IQ</a>'; break;
						case 3: echo '<a class="seguir" href="mecanica.php">IM</a>'; break;
						case 4: echo '<a class="seguir" href="electrica.php">IE</a>'; break;
						case 5: echo '<a class="seguir" href="civil.php">IC</a>'; break;
							
					} ?>
					<p><?PHP echo htmlentities('-->'); ?></p>
            <a class="seguir" href="materias.php?codCarrera=<?php echo $codCarrera?>">Materias</a>
            <p><?PHP echo htmlentities('-->'); ?></p>
            <a class="seguir" href="apuntes_materia.php?idMateria=<?php echo $_GET['idMateria']; ?>"><?php getNombreMateria()?></a>
            	<p><?PHP echo htmlentities('-->'); ?></p>
            	<a class="seguir" href="newfile.php?idMateria=<?php echo $_GET['idMateria'];?>">Nuevo Archivo</a>
            	</div>
            <hr id="line-trace"/>
            <div id="subcontent">
                <a class="contentlink" href="materias.php?codCarrera=<?php echo $codCarrera;?>">Buscar Apuntes Por Carreras</a><br />
                
				
				<form enctype="multipart/form-data" action="uploadfile.php" method="post">
					<p></p>
					<?php
						$codMateria = $_GET["idMateria"];
						echo "<input type='hidden' id='materia' name='materia' value='$codMateria'/>";
					?>
					<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
					<p id="subir1"><label hidden for="file">File</label><input name="file" id="file" type="file" /></p>
					<p id="subir2"><label hidden for="submit">Submit</label><input class="btn" type="submit" id="submit" name="submit" value="Subir" /></p>
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
			<p>Trabajo Final Entornos Gr&aacute;ficos 2012 - Copyleft - Todos los derechos no reservados - <a href="sitemap.php">Mapa del Sitio</a></p>
            <p>Autores: Abdo Facundo, Ibars Agust&iacute;n, Inghels Kevin</p>
		</div>
	</div>
</body>
</html>

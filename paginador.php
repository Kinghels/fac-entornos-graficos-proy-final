<?php
	include 'funciones.php';
	
	function paginador($elemXPag){
		$con = conectar();
		$cod = 1;
		
		if(isset($_GET["pag"])){
			$limit = 'LIMIT '.(($_GET["pag"]-1)*$elemXPag).', '.$elemXPag.';';
		}else{
			$limit = 'LIMIT 0, '.$elemXPag.';';
		}
		$db_found = mysql_select_db("apunteca");
		mysql_set_charset('utf8');
		
		//$resultCantItems = mysqli_query($con, 'SELECT COUNT(*) as num FROM materias natural join carreras_materias where cod_carrera=1;');
		//$resultCantItems = mysqli_query($con, 'SELECT COUNT(*) as num FROM apuntes');
		//$numResult = mysqli_fetch_array($resultCantItems, MYSQLI_ASSOC);
		//$maxElem = $numResult['num'];
		
		$query = "SELECT * FROM apuntes ORDER BY cod_materia ".$limit;
		//$query = 'SELECT COUNT(*) as num FROM materias natural join carreras_materias where cod_carrera=1;';
		
		$result = mysqli_query($con,$query);
		while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
		echo '<div class="mostread">';
		echo '	<img src="images/pdf_icon.png" alt="PDF" width="16" height="16" />
				<span><a href="/entornos/pdf/'. $row['titulo'] .'">' . $row['titulo'] . '</a>';
		
		if(isset($_COOKIE["user"])){
		echo '	<form method="post" action="eliminar.php">
					<input type="hidden" name="titulo" value="'.$row['titulo'].'"/>
					<input type="hidden" id="cod_apunte" name="cod_apunte" value="'.$row['cod_apunte'].'"/>
					<input type="submit" value="Eliminar" name="eliminar"/>
					<input type="hidden" name="id_materia" value="'.$row['cod_materia'].'"/>
				</form>';
		}
		echo '</div>';
		}
		desconectar($con);
	}

	function cantPaginas($elemXPag){
		$con = conectar();
			
			$db_found = mysql_select_db("apunteca");
			mysql_set_charset('utf8');
			
			//$resultCantItems = mysqli_query($con, 'SELECT COUNT(*) as num FROM materias natural join carreras_materias where cod_carrera=1;');
			$resultCantItems = mysqli_query($con, 'SELECT COUNT(*) as num FROM apuntes;');
			$numResult = mysqli_fetch_array($resultCantItems, MYSQLI_ASSOC);
			$cantItems = $numResult['num'];
						
		desconectar($con);
		return ceil($cantItems / $elemXPag);
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/general.css" />
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
				<a href="http://www.frro.utn.edu.ar/" target="_new">FRRO</a><hr /><?php busqueda();?>
			</div>
        </div>
    	<div id="rightcol"></div>
		<div id="content">
        	<div id="trace">
            	<a href="index.php">Home</a>
                
            </div>
            <hr id="line-trace"/>
            <div id="subcontent">
            	<p class="description"><b>Bienvenido a la Apunteca de la UTN</b>. Aquí podrá encontrar apuntes tanto de las cátedras dictadas en la facultad como de otros temas no relacionados directamente con las carreras. </p>
            	<p class="description">&nbsp;</p>
            	<p class="description">Para poder realizar cambios sobre el material disponible así como agregar nuevo material, debe ser un usuario registrado.</p>
            	<p class="description">&nbsp;</p>
            	<br />
                <p class="description">Los art&iacute;culos m&aacute;s visitados</p>
				<?php
				
					$elemXPag = 4;
					$cantPag = cantPaginas($elemXPag);
					echo $cantPag.'<br />';
					
					echo '<a href=?pag=1#subcontent>Primer Pág</a> - ';
					for ($i=1; $i < $cantPag+1; $i++) { 
						echo '<a href=?pag='.$i.'#subcontent> '.$i.'</a> - ';
					}
					echo '<a href=?pag='.$cantPag.'#subcontent>Ultima Pág</a><br />';
					echo '<br />';
					
					paginador($elemXPag);
					
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
        	<p>Trabajo Final Entornos Gr&aacute;ficos 2012 - Copyleft - Todos los derechos no reservados - <a href=sitemap.php>Mapa del Sitio</a></p>
            <p>Autores: Abdo Facundo, Ibars Agust&iacute;n, Inghels Kevin</p>
		</div>
	</div>
</body>
</html>

<?php
require 'PHPMailer/PHPMailerAutoload.php';
	function loginBox(){
		if (isset($_COOKIE["user"]))
				echo '<p>Bienvenido <a href="perfil.php">'.getNombre().'</a></p><br />
                <p><a href="logout.php">Cerrar sesión</a></p>';
		else{
				 $path=$_SERVER['REQUEST_URI'];
				
				echo '<form class="ym-form" id="login"  name="f1" method="post" action="login.php">
					<div class="ym-fbox">	
						<label for="usuario">Usuario</label>
						<input type="text" name="usuario" id="usuario" /><br  />
					</div>
					<div class="ym-fbox">
						<label for="password">Contraseña</label>
						<input name="password" type="password" id="password" /><br />
					</div>
					<input name="url" id="url" type="hidden" value="'.$path.'" />
					<label for="loguearse" hidden>Loguearse</label>
					<input class="ym-button ym-primary" type="button" id="loguearse" name="loguearse" value="Loguearse"/><br />
					<a href="recuperarpass.php">Olvidé mi contraseña</a><br />
					<a href="registro.php">Registrarme</a>';
				if(isset($_GET['error']))
					echo '<span class="errorVisual">Usuario y/o Contraseña incorrectos</span>';
				echo '</form>';
			}
	}
	function getNombre()
	{
	$con = conectar();
					
					if (mysqli_connect_errno())
					{
						echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
					} 
					$result = mysqli_query($con,"SELECT apellido, nombre FROM usuarios where idUsuario='".$_COOKIE["user"]."';"); 
					$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
					return htmlentities($row['apellido'],NULL,'').', '.htmlentities($row['nombre'],NULL,'');
					
	}
	function getNombreUsuario()
	{
		$con = conectar();
		
		if (mysqli_connect_errno())
		{
			echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT nombre FROM usuarios where idUsuario='".$_COOKIE["user"]."';");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return htmlentities($row['nombre'],NULL,'');
	}
	function getApellidoUsuario()
	{
		$con = conectar();
		
		if (mysqli_connect_errno())
		{
			echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT apellido FROM usuarios where idUsuario='".$_COOKIE["user"]."';");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return htmlentities($row['apellido'],NULL,'');
	}
	function getMail()
	{
		$con = conectar();
		
		if (mysqli_connect_errno())
		{
			echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT email FROM usuarios where idUsuario='".$_COOKIE["user"]."';");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row['email'];
	}
	function getDomicilio()
	{
		$con = conectar();
		
		if (mysqli_connect_errno())
		{
			echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT direccion FROM usuarios where idUsuario='".$_COOKIE["user"]."';");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row['direccion'];
	}
	function getTelefono()
	{
		$con = conectar();
		
		if (mysqli_connect_errno())
		{
			echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT telefono FROM usuarios where idUsuario='".$_COOKIE["user"]."';");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row['telefono'];
	}
	function getMaterias($cod,$a)
	{
		$con = conectar();
		
		
		$query = "SELECT * FROM materias natural join carreras_materias where cod_carrera=".$cod." and nivel_materia=".$a.";";
		$result = mysqli_query($con,$query);
		while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
			echo '<a href="apuntes_materia.php?idMateria='.$row['cod_materia'].'">'.utf8_encode($row['nombre_materia']).'</a><br />';
		
		}
		
	}
	function getAllMaterias($cod)
	{
		$con = conectar();
		$query = "SELECT * FROM materias natural join carreras_materias where cod_carrera=".$cod.";";
		$result = mysqli_query($con,$query);
		while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
			echo '<a href="apuntes_materia.php?idMateria='.$row['cod_materia'].'">'.htmlentities(utf8_encode($row['nombre_materia'])).'</a><br />';
	
		}
	}
	function getAllMateriasMap($cod)
	{
		$con = conectar();
		
		
		$query = "SELECT * FROM materias natural join carreras_materias where cod_carrera=".$cod.";";
		$result = mysqli_query($con,$query);
		while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
			echo '<li><a href="apuntes_materia.php?idMateria='.$row['cod_materia'].'">'.utf8_encode($row['nombre_materia']).'</a></li>';
	
		}
	
	}
	function getCarreraCodMateria($cod)
	{
		try{
		$con = conectar();
		
		$query = "select cod_carrera from carreras_materias where cod_materia=".$cod.";";
		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		return $row['cod_carrera'];
		}
		catch(Exception $e)
		{
			$e->getMessage();
		}
	}
	function getCarreras()
	{
		try{
			$con = conectar();
			
			$query = "select nombre_carrera from carreras;";
			$result = mysqli_query($con, $query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			echo ''; //devolver html con listado carreras
		}
		catch(Exception $e)
		{
			$e->getMessage();
		}
	}
	function getNombreMateria(){
		try{
			$con = conectar();
			
			if (mysqli_connect_errno())
			{
				echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
			} 
			$result = mysqli_query($con,"SELECT nombre_materia FROM materias where cod_materia='".$_GET['idMateria']."';");
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			echo htmlentities($row['nombre_materia'],NULL,'');
			}
		catch(Exception $e)
		{
			$e->getMessage();
		}
	}

	function nuevoApunte($titulo, $codMateria){
		$con = conectar();
		$db_found = mysqli_select_db($con, "apunteca");
		
		//Busco Ultimo Codigo en apuntes
		$query= "SELECT cod_apunte FROM apuntes
					ORDER BY cod_apunte DESC
					LIMIT 1";
		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		//Sumo un nuevo apunte
		$lastCod = $row[0]+1;
		//Inserto nueva entrada en apuntes
	    $query = "INSERT INTO apuntes (cod_apunte, titulo, cod_materia,cant_visitas) 
	             VALUES ('$lastCod', '$titulo', '$codMateria',0)";	//FIX:Falta ver tema de versiones
	    $query2 = "INSERT INTO apuntes_autores (cod_apunte, id_autor)
	    		 VALUES ('$lastCod', '".$_COOKIE['user']."')";
	    $insert = mysqli_query($con, $query) or die(mysqli_error($con));
	    $insert2 = mysqli_query($con, $query2) or die(mysqli_error($con));
	}
	
	function buscarApuntes(){
		$con = conectar();
		
		$row=null;
		if (mysqli_connect_errno())
		{
			echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT titulo, cod_apunte FROM apuntes WHERE cod_materia='".$_GET['idMateria']."';");
		while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
		echo '<div class="mostread">';
		echo '	<img src="images/pdf_icon.png" alt="PDF" width="16" height="16" />
				<span><a href="/entornos/pdf/'. $row['titulo'] .'">' . $row['titulo'] . '</a>';
		
		if(isset($_COOKIE["user"])){
		echo '	<form method="post" action="eliminar.php">
					<input type="hidden" name="titulo" value="'.$row['titulo'].'"/>
					<input type="hidden" id="cod_apunte" name="cod_apunte" value="'.$row['cod_apunte'].'"/>
					<input type="submit" value="Eliminar" name="eliminar"/>
					<input type="hidden" name="id_materia" value="'.$_GET['idMateria'].'"/>
				</form>';
		}
		echo '</div>';
		}
		desconectar($con);
	}

	/*
	 * Seccion de Paginación
	 */
	function buscarApuntesPaginados(){
		$elemXPag = 4;
					$cantPag = cantPaginas($elemXPag);
					
					echo '<br />';
					echo '<a href="'.htmlentities("?idMateria=".$_GET['idMateria']."&page=1#subcontent").'">Primer Pág</a> - ';
					for ($i=1; $i < $cantPag+1; $i++) { 
						echo '<a href="'. htmlentities("?idMateria=".$_GET['idMateria']."&page=").$i.'#subcontent"> '.$i.'</a> - ';
					}
					echo '<a href="'.htmlentities("?idMateria=".$_GET['idMateria']."&page=").($cantPag).'#subcontent">Ultima Pág</a><br />';
					echo '<br />';
					
					paginador($elemXPag);
					
					echo '<br />';
					echo '<a href="'.htmlentities("?idMateria=".$_GET['idMateria']."&page=").'">Primer Pág</a> - ';
					for ($i=1; $i < $cantPag+1; $i++) { 
						echo '<a href="'.htmlentities("?idMateria=".$_GET['idMateria']."&page=").$i.'#subcontent"> '.$i.'</a> - ';
					}
					echo '<a href="'.htmlentities("?idMateria=".$_GET['idMateria']."&page=").($cantPag).'#subcontent">Ultima Pág</a><br />';
	}

	function cantPaginas($elemXPag){
		$con = conectar();
			
			
			
			
			$resultCantItems = mysqli_query($con, 'SELECT COUNT(*) as num FROM apuntes;');
			$numResult = mysqli_fetch_array($resultCantItems, MYSQLI_ASSOC);
			$cantItems = $numResult['num'];
						
		desconectar($con);
		if($cantItems==0) return 1;
		else return ceil($cantItems / $elemXPag);
	}
	
	function paginador($elemXPag){
		$con = conectar();
			if(isset($_GET["page"])){
				$limit = 'LIMIT '.(($_GET["page"]-1)*$elemXPag).', '.$elemXPag.';';
			}else{
				$limit = 'LIMIT 0, '.$elemXPag.';';
			}
			
			
			
			
			$query = "SELECT * FROM apuntes WHERE cod_materia='".$_GET['idMateria']."'".$limit;
			
			$result = mysqli_query($con,$query);
			while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
				echo '<div class="mostread">';
				echo '	<img src="images/pdf_icon.png" alt="PDF" width="16" height="16" />
						<span><a href="'.htmlentities('redirect_pdf.php?url=pdf/'). $row['titulo'] .htmlentities('&cod=').$row['cod_apunte'].'">' . $row['titulo'] . '</a></span>';
				
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
	/*
	 * Fin de Paginación
	 */

	function buscarMasVisitados()
	{
		$con = conectar();
		//
		if (mysqli_connect_errno())
		{
			echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT * FROM apuntes a NATURAL JOIN materias m order by a.cant_visitas desc limit 3");
		while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
			echo '
                <div class="mostread">
                	<img src="images/pdf_icon.png" alt="PDF" width="16" height="16" />
                    <span><a href="'.htmlentities("redirect_pdf.php?url=pdf/").$row['titulo'].htmlentities('&cod=').$row['cod_apunte'].'">' . $row['titulo'] . '</a>
                    </span><p class="description">En: <a href="'.htmlentities('apuntes_materia.php?idMateria=').htmlentities($row['cod_materia'],NULL,'').'">'.htmlentities($row['nombre_materia'],NULL,'').'</a></p>
				</div>';
		}
	}
	function nuevoUsuario(){
		if(@$_REQUEST['action']=='ok'){
		
		$nombre = utf8_encode($_REQUEST['nombre']);
		$apellido = utf8_encode($_REQUEST['apellido']);
		$email = $_REQUEST['email'];		
		$cod_carrera = $_REQUEST['carrera'];
		$id = $_REQUEST['legajo'];
		$pass = $_REQUEST['pass'];
		$con = conectar();
		
						
		
		$query2 = "INSERT INTO `usuarios`(`nombre_usuario`, `apellido_usuario`,`email`, `id_usuario`,`cod_carrera`,`password`) 
					VALUES ('".$nombre."','".$apellido."','".
					$email."','".$id."','".$cod_carrera."', MD5('".$pass."'));";
		
		$query =  "SELECT id_usuario FROM `usuarios` where id_usuario=".$id.";";
		
		$existe = mysqli_query($con,$query);
		
		if(mysql_num_rows($existe)==0)
			{
				$resultado = mysqli_query($con,$query2);
				if(!$resultado)
					die(mysql_error());		
				else
					{
						setcookie("user",$id);
						header('Location:index.php');
					}
			}
		else
			echo '<script type="text/javascript">alert ("Usuario ya existe");</script>';
		}
	}
	function actualizarUsuario(){
		if(@$_REQUEST['action']=='ok'){
	
			$nombre = utf8_encode($_REQUEST['nombre']);
			$apellido = utf8_encode($_REQUEST['apellido']);
			$email = $_REQUEST['email'];
			$id = $_REQUEST['legajo'];
			$pass = $_REQUEST['pass'];
			$con = conectar();
			
			
			
			if($pass=='')
				{
					$query = "update `usuarios` set `nombre_usuario`='".$nombre."', `apellido_usuario`='".$apellido."',`email`='".$email."' where id_usuario='".$id."';";
					$cambio_pass = false;
				}
			else 
				{
					$query = "update `usuarios` set `nombre_usuario`='".$nombre."',password=MD5('".$pass."'), `apellido_usuario`='".$apellido."',`email`='".$email."' where id_usuario='".$id."';";
					$cambio_pass = true;
				}
	
				$resultado = mysqli_query($con, $query);
	
			if($cambio_pass==true)
				{
					setcookie("user", "", time()-3600);
					header("Location:index.php");
				}	
			else header("Location:perfil.php");
			}	
	}
	function conectar() 
	{
		try{
			$config = simplexml_load_file("config.xml");
			$server = $config->db->server;
			$db_name = $config->db->db_name;
			$user = $config->db->user;
			$pass = $config = $config->db->pass;
			$con = mysqli_connect($server, $user, $pass,$db_name);
			return $con;
		}
		catch(Exception $e)
		{
			file_put_contents('logfile.log', time()."\t".$e->getMessage()."\n",FILE_APPEND);
			return $e->getMessage();
		}
	}
	function desconectar($con)
	{
		mysqli_close($con);
	}
	function buscarCarreras(){
		$con = conectar();
				
		
		if (mysqli_connect_errno())
		  {
		  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		  }
		$result = mysqli_query($con,"SELECT * FROM carreras");     
		while ( $row = mysqli_fetch_array($result) ) {
 		echo '<option value="'.$row['cod_carrera'].'">'.htmlentities($row['nombre_carrera'],NULL,''). '</option>';
		}
				
		mysqli_close($con);
	}
	function recuperarpass()
	{	
		if(@$_REQUEST['action']=='ok')
		{
			$to = $_REQUEST['email']; 
			$con = conectar();
			
			if (mysqli_connect_errno())
			{
				echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
			}
			$result = mysqli_query($con,"SELECT * FROM usuarios where email='".$to."';");
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if ( $to == $row['email'] ) 
			{
				$query = "INSERT INTO `cambios_pass`(`id_usuario`, `instante_creacion`) VALUES (".$row['id_usuario'].",CURRENT_TIMESTAMP);";
				mysqli_query($con,$query);
				$config = simplexml_load_file("config.xml");
				$query2 = "select md5(id_cambio) as md5 from cambios_pass order by id_cambio desc limit 1";
				$result = mysqli_query($con,$query2);
				$r = mysqli_fetch_array($result, MYSQL_ASSOC);
				$message = "Acceda a este link para cambiar su contraseña: ".$config->mail->site."/cambiarpass.php?cambio=".$r['md5']."&idUsuario=".$row['id_usuario'];
				$mail = new PHPMailer();
				$mail-> isSMTP();
				$mail->CharSet = 'UTF-8';
				$mail->Host = $config->mail->host;
				$mail->SMTPDebug  = "false";
				$mail->SMTPAuth = true;
				$mail->Port = $config->mail->port;
				$mail->SMTPSecure = $config->mail->security;
				$mail->Username = $config->mail->user;
				$mail->Password = $config->mail->password;
				$mail->SetFrom('noreply@apunteca.com');
				$mail->addAddress($to, $row['nombre_usuario'].' '.$row['apellido_usuario']);
				$mail->Subject = 'Apunteca UTN - Solicitud de cambio';
				$mail->Body = $message;
				
				if($mail->send())
				{
					file_put_contents('logfile.log',time(). "\tMail enviado\n", FILE_APPEND);
					header('Location:index.php');
				} else {
					file_put_contents('logfile.log',time(). "\tError al enviar mail: " . $mail->ErrorInfo."\n", FILE_APPEND);
					header('Location:recuperarpass.php');
					}
			}
			else 
			{
				//Avisar que el mail ingresado no corresponde a ningun usuario
				header('Location:index.php');
			}
		}
		
	}
	function listarCarreras()
	{
		header("Content-Type: text/html;charset=utf-8");
		$con = conectar();
		
		
		if (mysqli_connect_errno())
		{
			echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT * FROM carreras");
		while ( $row = mysqli_fetch_array($result) ) {
		switch ($row['cod_carrera'])
		{
			case 1: echo '<p><a  href="isi.php">'.htmlentities($row['nombre_carrera'],NULL,'').'</a></p>'; break;
			case 2: echo '<p><a href="quimica.php">'.htmlentities($row['nombre_carrera'],NULL,'').'</a></p>'; break;
			case 3: echo '<p><a href="mecanica.php">'.htmlentities($row['nombre_carrera'],NULL,'').'</a></p>'; break;
			case 4: echo '<p><a href="electrica.php">'.htmlentities($row['nombre_carrera'],NULL,'').'</a></p>'; break;
			case 5: echo '<p><a href="civil.php">'.htmlentities($row['nombre_carrera'],NULL,'').'</a></p>'; break;
		}
		}
		
		mysqli_close($con);
	}
	function listarCarrerasMap()
	{
		header("Content-Type: text/html;charset=utf-8");
		$con = conectar();
		
		
		if (mysqli_connect_errno())
		{
			echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT * FROM carreras");
		while ( $row = mysqli_fetch_array($result) ) {
			switch ($row['cod_carrera'])
			{
				case 1: echo '<li><a href="isi.php">'.htmlentities($row['nombre_carrera'],NULL,'').'</a><ul>';
							echo getAllMateriasMap(1).'</ul></li>'; break;
				case 2: echo '<li><a href="quimica.php">'.htmlentities($row['nombre_carrera'],NULL,'').'</a><ul>';
						echo getAllMateriasMap(2).'</ul></li>'; break;
				case 3: echo '<li><a href="mecanica.php">'.htmlentities($row['nombre_carrera'],NULL,'').'</a><ul>';
						echo getAllMateriasMap(3).'</ul></li>'; break;
				case 4: echo '<li><a href="electrica.php">'.htmlentities($row['nombre_carrera'],NULL,'').'</a><ul>';
						echo getAllMateriasMap(4).'</ul></li>'; break;
				case 5: echo '<li><a href="civil.php">'.htmlentities($row['nombre_carrera'],NULL,'').'</a><ul>';
						echo getAllMateriasMap(5).'</ul></li>'; break;
			}
		}
	
		mysqli_close($con);
	}
	function busqueda()
	{
	echo '<form id="busqueda" action="busqueda.php" method="post">
        <table>
			<tr>
			<td><label hidden for="term">Pelicula a buscar</label><input type="text" id="term" placeholder="buscar..." name="term" size="15"/></td>
      		<td><label for="lupa" hidden>Haga click para buscar</label><input id="lupa" type="image" src="images/search.png" alt="Submit"/></td>
			</tr>
		</table>
      </form>';
	}
	
?>
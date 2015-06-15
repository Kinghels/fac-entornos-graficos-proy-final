<?php
$nombre = utf8_encode($_REQUEST['nombre']);
$apellido = utf8_encode($_REQUEST['apellido']);
$mail = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$user = $_REQUEST['user'];
$domicilio = $_REQUEST['domicilio'];
$telefono = $_REQUEST['telefono'];

$con = conectar();

$query =  "SELECT idUser FROM `usuarios` where user=".$user.";";


$query2 = "INSERT INTO `usuarios`(`user`, `pass`, `nombre`, `apellido`, `domicilio`, `telefono`, `mail`) 
			VALUES ('".$user."', MD5('".$pass."'),'".$nombre."','".$apellido."','".
			$domicilio."','".$telefono."','".$mail."');";

$existe = mysqli_query($con,$query);

echo $existe;

if(!$existe)
{
	echo "string";
	$resultado = mysqli_query($con,$query2);
	echo $resultado;
	if(!$resultado)
	{
		die(mysql_error());
	}	
	else
		{
			echo "bien";
			setcookie("user",$id);
			//header('Location:index.php');
		}
}
else{
	echo '<script type="text/javascript">alert ("Usuario ya existe");</script>';
}
desconectar($con);

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

?>
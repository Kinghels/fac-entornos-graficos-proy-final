<?php
include "funciones.php";
$con = conectar();

if (mysqli_connect_errno())
{
	echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}
try{
	$query = "update usuarios u natural join cambios_pass cp set u.password=md5('".$_POST['pass1']."') where id_usuario=".$_POST['idUsuario']." and md5(id_cambio)='".$_POST['cambio'].
	"' and timestampdiff(minute,cp.instante_creacion,current_timestamp)<3600;";	 
$result = mysqli_query($con,$query);
if(mysqli_affected_rows($con)>0)
	{ 
		$query = "delete from cambios_pass where id_usuario=".$_POST['idUsuario'].";";
		mysqli_query($con, $query);
		echo '<p>Su contraseña ha sido actualizada exitosamente</p>';
		file_put_contents("logfile.log", time()."\tContraseña actualizada para usuario: ".$_POST['idUsuario']."\n",FILE_APPEND);
		header('Refresh:2, URL=index.php');
	}
else 
	{
		echo '<p>Ocurrió un error con el cambio de contraseña, vuelva a intentarlo</p>';
		echo '<p>Posibles fallas:</p>';
		echo '<p>- Timeout de cambio de contraseña</p>';
		echo '<p>- Desconexión con la base de datos</p>';
	}
}
catch(Exception $e)
{
	echo $query; 
	file_put_contents("logfile.log", time()."\t".$e->getMessage()."\n",FILE_APPEND);
	echo '<p>'.$e->getMessage().'</p>';
	echo '<p>Ocurrió un error con el cambio de contraseña, vuelva a intentarlo</p>';
	echo '<p>Posibles fallas:</p>';
	echo '<p>- Timeout de cambio de contraseña</p>';
	echo '<p>- Desconexión con la base de datos</p>';
}

?>
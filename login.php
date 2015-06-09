<?php 
include "funciones.php";

if(isset($_POST["usuario"]))
$usuario = $_POST["usuario"];
else $usuario = "";
$password = MD5($_POST["password"]);
echo $password;
$con = conectar();

if (mysqli_connect_errno())
{
	echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}
$sql = "SELECT idUsuario, user, password FROM usuarios WHERE user ='".$usuario . "';" ;
$result = mysqli_query($con,$sql);
try 
{
	echo "<br>";
	
	$url = $_POST["url"];
	if($row = mysqli_fetch_array($result)){
		echo $row[1];if($usuario == $row[1] &&$row[2]==$password)
			{
				setcookie("user",$row['idUsuario'],time()+3600);
				echo "<p><a href='index.php'>Haga click aqui si no es redirigido automaticamente</a></p>";
				header('Location:index.php');
				header('Location:'.$url);
			}
			else{
				header('Location:index.php?error=1');
				}
	}
	else{
		header('Location:index.php?error=1');
		}
	
}
catch(Exception $e)
{
	echo $e->getMessage();
}
?>
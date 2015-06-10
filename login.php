<?php 
include "funciones.php";

$usuario = new Usuario;

if(isset($_POST["usuario"]))
{
	$usuario->user = $_POST["usuario"];
}
else 
{
	$usuario->user = "";
}
$usuario->password = MD5($_POST["password"]);

$con = conectar();

if (mysqli_connect_errno())
{
	echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}
$sql = "SELECT idUser, user, pass FROM usuarios WHERE user ='".$usuario->user ."' && pass='".$usuario->password."' ;" ;
$result = mysqli_query($con,$sql);
try 
{
	echo "<br>";
	
	$url = $_POST["url"];
	if($row = mysqli_fetch_array($result)){
		setcookie("user",$row['idUser'],time()+3600);
		echo "<p><a href='index.php'>Haga click aqui si no es redirigido automaticamente</a></p>";
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
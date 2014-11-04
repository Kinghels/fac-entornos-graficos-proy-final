<?php
	include "funciones.php";
	$con = conectar();
	$cod = $_POST['cod_apunte'];
	if (mysqli_connect_errno()){
		echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
	}
	else{
		$result2 = mysqli_query($con,"delete FROM apuntes_autores where cod_apunte='".$cod."';");
		$result = mysqli_query($con,"delete FROM apuntes where cod_apunte='".$cod."';");
	}
	$idmateria = $_POST['id_materia'];
	$path = "pdf/".$_POST['titulo'];
	unlink($path);
	header('Location:apuntes_materia.php?idMateria='."$idmateria");
?>
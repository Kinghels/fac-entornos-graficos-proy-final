<?php
include 'funciones.php';
$con = conectar();
$query = "UPDATE apuntes SET cant_visitas = cant_visitas + 1 WHERE cod_apunte = ".$_GET['cod'].";";
mysqli_query($con, $query);
header('Location:'.$_GET['url']);
?>
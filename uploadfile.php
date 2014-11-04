<?php
	include 'funciones.php';
	
    try{
    	if ($_FILES['file']['error'] !== UPLOAD_ERR_OK) {
			die("Upload failed with error " . $_FILES['file']['error']);
		}
		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		if (!$finfo) {
			echo "Ocurrió un error al intentar abrir la base de datos de fileinfo";
			exit();
		}
		
		$mime = finfo_file($finfo, $_FILES['file']['tmp_name']);
		$ok = false;
		switch ($mime) {
		   case "image/jpeg":
		   case "application/pdf":
		   case "application/msword":
		   case "application/docx":
		   case "text/plain":
				$ok = true;
				break;
		   default:
			   die("Unknown/not permitted file type");
		}
		move_uploaded_file($_FILES["file"]["tmp_name"],"pdf/" . $_FILES["file"]["name"]); //FIX: RENOMBRAR CON MODELO ESTANDAR
		
		$titulo = $_FILES["file"]["name"];
		$codMateria = $_POST["materia"];
		
		nuevoApunte($titulo, $codMateria);
		
		echo '<p>Archivo Subido Correctamente</p>';
		header('Refresh:2, URL=apuntes_materia.php?idMateria='."$codMateria");
	}
	catch (RuntimeException $ex) {
		echo $ex;
	}
?>
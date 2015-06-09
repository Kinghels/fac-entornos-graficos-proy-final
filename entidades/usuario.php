<?php

class usuario{
	public $user;
	public $password;
	public $nombre;
	public $apellido;
	public $direccion;
	public $telefono;
	public $mail;

	function getNombre()
	{
		$con = conectar();
					
					if (mysqli_connect_errno())
					{
						echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
					} 
					$result = mysqli_query($con,"SELECT apellido, nombre FROM usuarios where idUsuario='".$_COOKIE["user"]."';"); 
					$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
					$this->nombre = $row['nombre'];
					$this->apellido = $row['apellido'];

					return htmlentities($this->apellido,NULL,'').', '.htmlentities($this->nombre,NULL,'');
					
	}
}
?>
<?php

class Usuario{
	public $user;
	public $password;
	public $nombre;
	function getNombre(){
		echo $this->nombre;
	}
	
	public $apellido;
	function getApellido(){
		echo $this->apellido;
	}
	
	public $direccion;
	function getDomicilio(){
		echo $this->direccion;
	}
	
	public $telefono;
	function getTelefono(){
		echo $this->telefono;
	}
	
	public $mail;
	function getMail()
	{
		echo $this->mail;
	}

	static function getUser(){
		$usuario = new Usuario;
		$con = conectar();
					
		if (mysqli_connect_errno())
		{
			echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT * FROM usuarios where idUser='".$_COOKIE["user"]."';"); 
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		desconectar($con);
		
		$usuario->user = $row['user'];
		$usuario->apellido = $row['apellido'];
		$usuario->nombre = $row['nombre'];
		$usuario->password = $row['pass'];
		$usuario->direccion = $row['direccion'];
		$usuario->telefono = $row['telefono'];
		$usuario->mail = $row['mail'];
		
		return $usuario;
	}

	function getApellidoNombre()
	{
		echo $this->apellido.', '.$this->nombre;	
	}
}
?>
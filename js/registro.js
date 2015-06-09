function volver()
{
	window.location.replace("index.php");
	
}
function validar()
{
	var msj='';
	var email = document.registro.email.value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(document.registro.nombre.value == null || document.registro.nombre.value == "" )		
	{
		msj += "- Nombre inválido\n";
		$('#nombre-group').addClass("has-error");
	   	
	}else{
		$('#nombre-group').removeClass('has-error');
	}
	if(document.registro.apellido.value == null || document.registro.apellido.value == "" )		
	{
		msj += "- Apellido inválido\n";	   	
		$('#apellido-group').addClass("has-error");
	   	
	}else{
		$('#apellido-group').removeClass('has-error');
	}
	if (!filter.test(email)) 
	{
		msj += "- Email inválido\n";
		$('#mail-group').addClass("has-error");
	   	
	}else{
		$('#mail-group').removeClass('has-error');
	}
	if(document.registro.user.value == null || document.registro.user.value == "" )		
	{
		msj += "- Usuario inválido\n";	   	
		$('#user-group').addClass("has-error");
	   	
	}else{
		$('#user-group').removeClass('has-error');
	}
	if(document.registro.pass.value != document.registro.pass2.value)
	{
		msj += "- Las contraseñas no coinciden\n";
		$('#pass-group').addClass("has-error");
	   	
	}else{
		$('#pass-group').removeClass('has-error');
	}
	if(document.registro.domicilio.value == null || document.registro.domicilio.value == "" )		
	{
		msj += "- Domicilio inválido\n";	   	
		$('#domicilio-group').addClass("has-error");
	   	
	}else{
		$('#domicilio-group').removeClass('has-error');
	}
	if(document.registro.telefono.value == null || document.registro.telefono.value == "" )		
	{
		msj += "- Telefono inválido\n";	
		$('#telefono-group').addClass("has-error");
	   	
	}else{
		$('#telefono-group').removeClass('has-error');   	
	}
	if(document.registro.pass.value == "" || document.registro.pass2.value == "") 
		{
		msj += "- Se debe ingresar una contraseña\n";
		$('#pass-group').addClass("has-error");
	   	
		}else{
			$('#pass-group').removeClass('has-error');
		}
	/*if(window.location.pathname=='/entornos/registro.php')
	{
		
		
	}*/
	if(msj != '')
	{
		alert(msj);
		return false;
	}
	else 
	{
		
		document.registro.submit();
	}

}





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
	   	
	}
	if(document.registro.apellido.value == null || document.registro.apellido.value == "" )		
	{
		msj += "- Apellido inválido\n";	   	
	}
	
	if (!filter.test(email)) 
	{
		msj += "- Email inválido\n";
	}
	if(document.registro.pass.value != document.registro.pass2.value)
	{
	msj += "- Las contraseñas no coinciden\n";
	}
	if(document.registro.domicilio.value == null || document.registro.domicilio.value == "" )		
	{
		msj += "- Domicilio inválido\n";	   	
	}
	if(document.registro.telefono.value == null || document.registro.telefono.value == "" )		
	{
		msj += "- Telefono inválido\n";	   	
	}
	if(window.location.pathname=='/entornos/registro.php')
	{
		if(document.registro.pass.value == "" || document.registro.pass2.value == "") 
		{
		msj += "- Se debe ingresar una contraseña\n";
		}
		
	}
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





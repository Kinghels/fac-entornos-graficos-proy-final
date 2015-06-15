function volver()
{
	window.location.replace("index.php");
	
}
function validar()
{
	var msj='';
	var email = $('#email').val();
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if($('#nombre').val() == null || $('#nombre').val() == "" )		
	{
		msj += "- Nombre inválido\n";
		$('#nombre-group').addClass("has-error");
	   	
	}else{
		$('#nombre-group').removeClass('has-error');
	}
	if($('#apellido').val() == null || $('#apellido').val() == "" )		
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
	if($('#user').val() == null || $('#user').val() == "" )		
	{
		msj += "- Usuario inválido\n";	   	
		$('#user-group').addClass("has-error");
	   	
	}else{
		$('#user-group').removeClass('has-error');
	}
	if($('#pass').val() != $('#pass2').val())
	{
		msj += "- Las contraseñas no coinciden\n";
		$('#pass-group').addClass("has-error");
	   	
	}else{
		$('#pass-group').removeClass('has-error');
	}
	if($('#pass').val() == "" || $('#pass2').val() == "") 
	{
	msj += "- Se debe ingresar una contraseña\n";
	$('#pass-group').addClass("has-error");
   	
	}else{
		$('#pass-group').removeClass('has-error');
	}
	if(msj != '')
	{
		alert(msj);
		return false;
	}
	else 
	{
		$('form').submit();
	}

}





function enviar()
{
	user = document.f1.usuario.value;
	pass = document.f1.password.value;
	var msj = "";
	if(user=="" || user==null)
	{
		msj+= "Debe ingresar un usuario\n";
	}

	if(pass=="" || pass==null)
	{
		msj += "Debe ingresar una contraseña";
	}
	if(msj=="")
	{
		document.f1.submit();
	}
	else 
	{
		window.alert(msj);
		return false;
	}


}


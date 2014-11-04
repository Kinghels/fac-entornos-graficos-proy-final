function validar()
{
	var email = document.recoverpassword.email.value;
	var msj = '';
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(email)) 
	{
		msj+= 'Email inválido\n';
	}
	if(msj!='')
	{
		alert(msj);
		return false;
	}
	else document.recoverpassword.submit();
	
}

function validar_pass()
{
	
	if(document.cambiarpassword.pass1.value=="" || document.cambiarpassword.pass2.value=="")
		{ alert("Debe ingresar una contraseña"); return false;}
	else {
	if(document.cambiarpassword.pass1.value != document.cambiarpassword.pass2.value)
	{
	alert("Las contraseñas no coinciden");
	return false;
	}
	else document.cambiarpassword.submit();
		}
}
function volver()
{
	window.location.replace("index.php");

}
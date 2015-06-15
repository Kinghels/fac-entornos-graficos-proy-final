$(document).ready(function() {
	$('#loguearse').on('click', function() {
		user = $('#usuario').val();
		pass = $('#password').val();
		var msj = "";
		if (user == "" || user == null) {
			msj += "Debe ingresar un usuario\n";
		}

		if (pass == "" || pass == null) {
			msj += "Debe ingresar una contraseña";
		}
		if (msj == "") {
			document.f1.submit();
		} else {
			window.alert(msj);
			return false;
		}
	});

	$('#menu-logo').on('click', function() {
		if ($.cookie('user') != undefined && $.cookie('user') != null && $.cookie('user') != "") {
			$('#user-box').css('display', 'block');
		} else {
			$('#login-box').css('display', 'block');
		}
		if ($('#logincontainer').css('display') == 'none') {
			$('#logincontainer').toggle('left');//css('display', 'block');
		} else {
			$('#logincontainer').css('display', 'none');
		}
	});
	
	$('#btn-end-session').click(function(){
		$.removeCookie('user');
		location.replace('/index.php');
	});
});
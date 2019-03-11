function registraUser() {
	var nome = $("#username").val();
	var pwd = $("#password").val();
	var email = $("#email").val();
	var lingua = $("#lingua").val();
	var telefono = $("#telefono").val();
	var nazione = $("#nazione").val();

	$.ajax({
		tipe : 'GET',
		url: "_ajax/register.php?a="+nome+"&b="+pwd+"&c="+email+"&d="+lingua+"&e="+telefono+"&f="+nazione,

		success: function() {
			alert("Utente Salvato!");
		}
	});
}

function loggaUser() {
	var nome = $("#username").val();
	var pwd = $("#password").val();

	$.ajax({
		tipe : 'GET',
		url: "_ajax/login.php?a="+nome+"&b="+pwd,

		success: function() {
			alert("Utente Loggato!");
		}
		
		error: functiom() {
			alert("Utente NON Esistente!");
		}
	});
}
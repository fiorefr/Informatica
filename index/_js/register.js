function registraUser() {
	var nome = $("#nome").val();
	var password = $("#password").val();
	var email = $("#email").val();
	var lingua = $("#lingua").val();
	var telefono = $("#telefono").val();
	var nazione = $("#nazione").val();
	
	
	$.ajax({
		url: "_ajax/user_add.php?a="+nome+"&b="+password+"&c="+email+"&d="+lingua+"&e="+telefono+"&f="+nazione,
		success: function() {
			alert("Utente Salvato!");
		}
	});
}
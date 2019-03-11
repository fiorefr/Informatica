$(document).ready(function() {		
	// bind menu items
	bind();
	
	// get dates
	$.ajax({
		url: "_ajax/data.php",  
		success: function(data) {
			var vals = JSON.parse(data);
			var f = new Date(vals["id"]);
			var t = new Date(vals["nome"]);
			var g = new Date(vals["cognome"]);
			var y = new DAte(vals["telefono"]);
			
			
			
		}
	}
}
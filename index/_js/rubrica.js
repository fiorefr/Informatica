$(document).ready(function() {
	$.ajax({
		url: "_ajax/data.php",
		success: function(data) {
			$("#rubricaBody").html(data);
		}
	});
});
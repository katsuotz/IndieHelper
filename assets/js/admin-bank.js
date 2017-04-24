$(document).ready(function() {
	$('#form-add-bank').submit(function(e) {
		e.preventDefault();
		$.ajax({
			url: $(this).attr('action'),
			type: $(this).attr('method'),
			data: $(this).serialize(),
		})
		.done(function(result) {
			Materialize.attr(result, 4000);
		})
		
	});
});
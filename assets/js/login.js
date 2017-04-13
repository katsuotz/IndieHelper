$(document).ready(function() {

	$('select').material_select();

	$('#form-sign-up').submit(function(e) {
		e.preventDefault();
		$.ajax({
			url: $(this).attr('action'),
			type: $(this).attr('method'),
			data: $(this).serialize(),
		})
		.done(function(result) {
			$('#form-sign-up')[0].reset();
			Materialize.toast('Sign Up ' + result, 4000);
		})
		
	});
});
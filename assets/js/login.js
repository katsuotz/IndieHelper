$(document).ready(function() {

	$('select').material_select();

	$('#form-sign-up').submit(function(e) {
		e.preventDefault();
		$data = new FormData($(this)[0]);

		$.ajax({
			url: $(this).attr('action'),
			type: $(this).attr('method'),
			data: $data,
			contentType: false,
    		processData: false,
		})
		.done(function(result) {
			$('#form-sign-up')[0].reset();
			Materialize.toast('Sign Up ' + result, 4000);
		});
	});

	$('#form-log-in').submit(function(e) {
		console.log(1);
		e.preventDefault();
		$.ajax({
			url: $(this).attr('action'),
			type: $(this).attr('method'),
			data: $(this).serialize(),
		})
		.done(function(result) {
			Materialize.toast('Log In ' + result, 4000);
		});
	});
});
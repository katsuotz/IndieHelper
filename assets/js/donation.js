$(document).ready(function() {
	$('select').material_select();
	$('.materialboxed').materialbox();

	$('#projectdonation').submit(function(e) {
		e.preventDefault();
		var $data = new FormData($(this)[0]);

		$.ajax({
			url: $(this).attr('action'),
			type: $(this).attr('method'),
			data: $data,
			contentType: false,
    		processData: false,
		}).done(function(result) {
			Materialize.toast(result + " menambah project", 4000);
			if(result == 'Berhasil'){
				$('#projectdonation')[0].reset();
			}
		});
		
	});
});
$(document).ready(function($) {

	$('.parallax').parallax();	
	$('select').material_select();
	$('.chips').material_chip();

  	$('.choose-file').bind('click', function(e) {
		idFile = $(this).attr('id');
		idFile = idFile.charAt(11);
		var defaultImage = base_url + 'assets/images/project/default-project.jpg';
		if ($('#uploaded-project-image' + idFile).attr('src') == defaultImage) {
			$('#project-image' + idFile).click();
		} else {
			$('#uploaded-project-image' + idFile).attr('src', defaultImage);
			$('#project-image' + idFile).val('');
			$('#choose-file' + idFile + ' .fa').addClass('fa-plus').removeClass('fa-remove');
		}
	});

	$('.project-image').change(function(e) {
		var idInputFile = $(this).attr('name');
		readImagePath(this, idInputFile.charAt(13));
	});

	function readImagePath(input, target) {
		if (input.files[0]) {
			$('#choose-file' + target + ' .fa').removeClass('fa-plus').addClass('fa-remove');
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#uploaded-project-image' + target).attr('src', e.target.result).removeClass('hidden');
			};
			reader.readAsDataURL(input.files[0]);
		} else {
			$('#uploaded-project-image' + target).attr('src', '#');
		}
	}

	$('#update-project').submit(function(e) {
		e.preventDefault();
		var chips = $('.chips').material_chip('data');
		var array = [];
		var $data = new FormData($(this)[0]);
		
		$.ajax({
			url: $(this).attr('action'),
			type: 'POST',
			data: $data,
			contentType: false,
    		processData: false,
		})
		.done(function(result) {
			Materialize.toast(result, 4000);
		});
		
	});

});
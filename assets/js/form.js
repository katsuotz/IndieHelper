$(document).ready(function() {

	$('select').material_select();
	$('.chips-initial').material_chip();

	var idFile = '';
	$('.choose-file').bind('click', function(e) {
		idFile = $(this).attr('id');
		idFile = idFile.charAt(11);
		if (!$('#project-image' + idFile).val()) {
			$('#project-image' + idFile).click();
		} else {
			alert($('#project-image' + idFile).val());
			$('#uploaded-project-image' + idFile).attr('src', '');
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

	// var i = 2;
	// var fileHTML = '';

	// $('#addFile').click(function(e) {
	// 	if (i <= 5) {
	// 		fileHTML = $('<div class="file-field input-field"><div class="btn" id="btnFile' + i 
	// 			+ '"><span>File</span><input type="file" name="project-image' + i 
	// 			+ '" class="project-image' + i + ' project-image"></div><div class="file-path-wrapper" id="textFile'+ i 
	// 			+ '"><input class="file-path validate" type="text" placeholder="ggwp"></div></div>');
	// 		fileHTML.appendTo($('.file-group'));
	// 		i++;
	// 	}
	// });

	$('.chips input').attr('name', 'tags');
	
	$('#form-project').submit(function(e) {
		e.preventDefault();
		var chips = $('.chips').material_chip('data');
		var array = new Array();
		var $data = new FormData($(this)[0]);
		var chipJSON = ' { '
		for (var i = 0; i < chips.length; i++) {
			array['tags' + i] = chips[i].tag;
			chipJSON += ' "tags ' + i + '" : "' + chips[i].tag + '", '; 
		}
		chipJSON += ' } ';
		$data.append('tags', JSON.stringify(chipJSON));
		$.ajax({
			url: $(this).attr('action'),
			type: $(this).attr('method'),
			data: $data,
			contentType: false,
    		processData: false,
		})
		.done(function(result) {
			alert(result);
			// $(location).attr('href', origin + '/IndieHelper/');
		})

	});



});
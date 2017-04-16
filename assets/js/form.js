$(document).ready(function() {

	$('select').material_select();
	$('.chips-initial').material_chip();
	var origin = window.location.origin;

	$('.project-image').change(function(e) {
		readImagePath(this, $(this).attr('name'));
	});

	function readImagePath(input, target) {
		console.log(input);
		console.log(target);
		if (input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#uploaded-' + target).attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		} else {
			$(target).attr('src', '#');
		}
	}

	var i = 2;
	var fileHTML = '';

	$('#addFile').click(function(e) {
		if (i <= 5) {
			fileHTML = $('<div class="file-field input-field"><div class="btn" id="btnFile' + i 
				+ '"><span>File</span><input type="file" name="project-image' + i 
				+ '" class="project-image' + i + ' project-image"></div><div class="file-path-wrapper" id="textFile'+ i 
				+ '"><input class="file-path validate" type="text" placeholder="ggwp"></div></div>');
			fileHTML.appendTo($('.file-group'));
			i++;
		}
	});

	$('.chips input').attr('name', 'tags');
	
	console.log(origin);
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
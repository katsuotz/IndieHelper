$(document).ready(function($) {

	$chipstags = [];
	$('.parallax').parallax();	
	$('select').material_select();
	$('.chips').material_chip();

  	for (var i = 0; i < datatags.length; i++) {
  		$chipstags.push({tag:datatags[i]});
  	}

  	$('.chips-initial').material_chip({
    	data: $chipstags
	});

	$('#update-project').submit(function(e) {
		e.preventDefault();

		var chips = $('.chips').material_chip('data');
		var array = [];
		var $data = new FormData($(this)[0]);
		for (var i = 0; i < chips.length; i++) {
			array.push(chips[i].tag);
		}
		$data.append('tags', JSON.stringify(array));
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
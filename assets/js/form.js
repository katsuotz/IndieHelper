$(document).ready(function() {

	function readImagePath(input) {
		// if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#uploaded').attr('src', e.target.result);
				console.log(e.target.result);
			};

			reader.readAsDataURL(input.files);
			console.log(1);
		// }

	}

	var origin = window.location.origin;
	console.log(origin);


	$('#project-image').change(function(e) {
		var imageData = new FormData($('#form-project')[0]);
		$.ajax({
			url: origin + '/indiehelper/lib/image.php',
			type: 'POST',
			data: imageData,
		})
		.done(function(result) {
			console.log("success");
		})
		
	});

});
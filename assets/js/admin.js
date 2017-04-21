$(document).ready(function() {

	$('select').material_select();
	// Initialize collapse button
	$('.open-slide-out').sideNav({
		menuWidth: 300,
		edge: 'left',
		closeOnClick: true
	});

	$('.modal').modal();

	$('.dropdown-button i').click(function(e) {
		console.log(1);
	});

	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: true,
		hover: false,
		gutter: 0,
		belowOrigin: true,
		alignment: 'right',
		stopPropagation: false
	});

	console.log(sideNavChecker);

	checkerSideNav();

	function checkerSideNav() {
		if (sideNavChecker == 0) {
			$('.side-nav').css('left', '-300px');
			$('.all').css('padding-left', '0');
			sideNavChecker = 0;
		} else {
			$('.side-nav').css('left', '0');
			$('.all').css('padding-left', '300px');
			sideNavChecker = 1;
		}
	}

	$('.side-nav-trigger').click(function(e) {
		e.preventDefault();
		if (sideNavChecker == 1) {
			$('.side-nav').css('left', '-300px');
			$('.all').css('padding-left', '0');
			sideNavChecker = 0;
		} else {
			$('.side-nav').css('left', '0');
			$('.all').css('padding-left', '300px');
			sideNavChecker = 1;
		}
		console.log(sideNavChecker);
		$.ajax({
			url: base_url + 'lib/sidenavadmin.php',
			type: 'POST',
			data: {sidenav: sideNavChecker},
		})
		
	});

	var idFile = '';
	$('.choose-file').bind('click', function(e) {
		idFile = $(this).attr('id');
		idFile = idFile.charAt(11);
		var defaultImage = base_url + 'assets/images/project/default-project.jpg';
		if ($('#uploaded-project-image' + idFile).attr('src') == defaultImage) {
			console.log(1);
			$('#project-image' + idFile).click();
		} else {
			console.log(2);
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

});
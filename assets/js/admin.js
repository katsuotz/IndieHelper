$(document).ready(function() {

	$('select').material_select();
	// Initialize collapse button
	$('.open-slide-out').sideNav({
		menuWidth: 300,
		edge: 'left'
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
		$.ajax({
			url: base_url + 'lib/sidenavadmin.php',
			type: 'POST',
			data: {sidenav: sideNavChecker},
		})
	});

	$('.delete-btn').click(function(e) {
		e.preventDefault();
		var row = $(this).parent().parent();
		$.ajax({
			url: $(this).attr('href'),
			type: 'GET',
		})
		.done(function(result) {
			Materialize.toast(result + ' menghapus data', 4000);
			if ($.trim(result) == 'Berhasil') {
				row.fadeOut();
			}
		});
	});

	$('.add-btn').click(function(e) {
		e.preventDefault();	
		var idForm = $(this).parent().parent();
		$.ajax({
			url: idForm.attr('action'),
			type: idForm.attr('method'),
			data: idForm.serialize(),
		})
		.done(function(result) {
			Materialize.toast(result + ' menambah data', 4000);
			if ($.trim(result) == 'Berhasil') {
				location.reload();
			}
		})
	});



});
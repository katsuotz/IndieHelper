$(document).ready(function() {

	$('select').material_select();

	$('.button-collapse').sideNav({
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
			$('.side-nav.desktop').css('left', '-300px');
			$('.all').css('padding-left', '0');
			sideNavChecker = 0;
		} else {
			$('.side-nav.desktop').css('left', '0');
			$('.all').css('padding-left', '300px');
			sideNavChecker = 1;
		}
	}

	$('.side-nav-trigger').click(function(e) {
		e.preventDefault();
		if (sideNavChecker == 1) {
			$('.side-nav.desktop').css('left', '-300px');
			$('.all').css('padding-left', '0');
			sideNavChecker = 0;
		} else {
			$('.side-nav.desktop').css('left', '0');
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
		row = $(this).parent().parent();
		$.ajax({
			url: $(this).attr('href'),
			type: 'GET',
		})
		.done(function(result) {
			result = JSON.parse(result);
			if (result.tbl == 'kategori') {	
				Materialize.toast(result.msg + ' menghapus data \
					<a href="' + base_url + 'lib/undodelete' + result.tbl + 
					'.php" class="btn m0 px1 undo-btn"><i class="material-icons">undo</i></a>\
					<a href="#" class="btn m0 px1 close-toast-btn"><i class="material-icons">clear</i></a>');
			} else {
				Materialize.toast(result.msg + ' menghapus data', 4000);
			}
			if ($.trim(result.msg) == 'Berhasil') {
				row.fadeOut();
			}
		});
	});

	$('.undo-btn').click(function(e) {
		e.preventDefault();
		$.ajax({
			url: $(this).attr('href'),
			type: 'GET',
		})
		.done(function(result) {
			Materialize.toast(result + ' mengembalikan data');
			row.fadeIn();
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
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

});
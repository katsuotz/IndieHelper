$(document).ready(function() {
	$('.carousel.carousel-slider').carousel({
        fullWidth: true,
        padding:20
    });
	$('.parallax').parallax();
	x = 1;
	$('.follow-btn').click(function() {
		if (x == 1) {
			$(this).removeClass('white black-text');
			$(this).addClass('purple white-text');
			$(this).html('Following');
			x = 0;
		} else {
			$(this).addClass('white black-text');
			$(this).removeClass('purple white-text');
			$(this).html('Follow');
			x = 1;
		}
	});
	
});
$(document).ready(function () {
    $('.carousel.carousel-slider').carousel({
    	fullWidth: true,
    	padding:20
    });
    // $('.carousel').removeClass('initialized');
    $('.parallax').parallax();
   
    $('.nav-search').click(function(e){
    	e.preventDefault();

    	$('.wrapper-search').css({
    		transform: 'translateX(0px)'
    	});
    });

    $('.icons-close').click(function() {
    	$('.wrapper-search').css({
    		transform: 'translateX(-90em)'
    	});
    });
});


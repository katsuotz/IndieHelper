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
    		transform: 'translateY(-64px)'
    	});

    });

    $('.icons-close').click(function() {
    	$('.wrapper-search').css({
    		transform: 'translateY(-130px)'
    	});
    
    });
});


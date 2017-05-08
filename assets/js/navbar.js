$(document).ready(function($) {
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
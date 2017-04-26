
$(document).ready(function () {
    $(".button-sid").sideNav();
    $('.slider').slider();
    $('.dropdown-btn').dropdown({
        inDuration: 300
        , outDuration: 225
        , constrainWidth: false
        , hover: false
        , gutter: 0
        , belowOrigin: true
        , alignment: 'left'
        , stopPropagation: false
    });
});
$(document).ready(function(){
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("#navigation").addClass("back");
    } else {
        $("#navigation").removeClass("back");
    }
});
});
$('.carousel.carousel-slider').carousel({fullWidth: true});
 $(document).ready(function(){
    $('.collapsible').collapsible();
  });
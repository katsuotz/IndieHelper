
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
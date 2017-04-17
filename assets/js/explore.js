$(document).ready(function() {
	$('.chips').material_chip();

	$arr = ["one","who","where"];
    $.each($arr,function(i,val) {
        $('.test').append(val);
    });
});
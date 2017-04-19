$(document).ready(function() {
	$('.chips').material_chip();

	var ss = $('.chip').material_chip('data');
    var as = [];
   	$('.chips').on('chip.add', function(e, chip){
    	as = [];
    	$.each($(this).material_chip('data'), function(index, val) {
    		 as.push(val.tag);
    	});

    	$dsad = JSON.stringify(as);

    	$.ajax({
    		url: base_url+"lib/explore.php",
    		type: 'POST',
    		data: {search : as},
    	})
    	.done(function(as) {
    		console.log(""+as);
    	});
    	
    });

});
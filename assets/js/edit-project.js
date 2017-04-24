$(document).ready(function($) {
	$chipstags = [];
	$('.parallax').parallax();	
	$('select').material_select();
	$('.chips').material_chip();

	$('.datepicker').pickadate({
	    selectMonths: true, 
	    selectYears: 15 
  	});

  	for (var i = 0; i < datatags.length; i++) {
  		$chipstags.push({tag:datatags[i]});
  	}

  	$('.chips-initial').material_chip({
    	data: $chipstags
	});


  	// $('.a').click(function(){
  	// 	var picker = $date.get('select', 'yyyy-mm-dd');
  	// 	console.log(picker);
  	// });
       
});
$(document).ready(function($) {
	$('.parallax').parallax();	
	$('select').material_select();
	$('.chips').material_chip();

	$('.datepicker').pickadate({
	    selectMonths: true, 
	    selectYears: 15 
  	});

	
  	// $('.a').click(function(){
  	// 	var picker = $date.get('select', 'yyyy-mm-dd');
  	// 	console.log(picker);
  	// });
       
});
$(document).ready(function($) {
	$('.parallax').parallax();	
	$('select').material_select();
	$('.chips').material_chip();

	$('.datepicker').pickadate({
	    selectMonths: true, 
	    selectYears: 15 
  	});
       
});
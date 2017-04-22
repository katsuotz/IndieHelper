$(document).ready(function($) {
	$date = $('.datepicker').pickadate().pickadate('picker');
	$date.set('select',tanggal,{format: 'yyyy-mm-dd'});
	$('.parallax').parallax();	
	$('select').material_select();
	$('.chips').material_chip();

	$('.datepicker').pickadate({
	    selectMonths: true, 
	    selectYears: 15 
  	});

	myData = [
		$.each(s, function(index, val) {
			 {tag: val}
		});
	];
	$('.chips-initial').material_chip({
    	
    	data: [{tag: s}],
  	
  	});

	
  	// $('.a').click(function(){
  	// 	var picker = $date.get('select', 'yyyy-mm-dd');
  	// 	console.log(picker);
  	// });
       
});
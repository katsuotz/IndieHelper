$(document).ready(function() {
	$('.modal').modal();
	$('select').material_select();
	$('.image-project')
    	.wrap('<span style="display:inline-block"></span>')
    	.css('display', 'block')
    	.parent()
    	.zoom();

    $('.kotak .img-other').click(function(){
    	$img = $(this).attr('get-image');
    	$('.image-project').attr({
    		src: $img
    	});
    	$('.zoomImg').attr({
    		src: $img
    	});
    	console.log($img);
    	// $('.image-project')
	    // 	.wrap('<span style="display:inline-block"></span>')
	    // 	.css('display', 'block')
	    // 	.parent()
	    // 	.zoom({
    	// 		url: $img, 
    	// 		callback: function(){
     //  			$(this).colorbox({href: this.src});
    	// 		}
  			// });
    });
});
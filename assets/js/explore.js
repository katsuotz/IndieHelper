$(document).ready(function() {
    $('.materialboxed').materialbox();
	$('.chips').material_chip();
	var ss = $('.chip').material_chip('data');
    var as = [];

    
    $('.chips-placeholder').material_chip({
        placeholder: '+Tag',
        secondaryPlaceholder: 'Search',
    });


   	$('.chips').on('chip.add', function(e, chip){
    	as = [];
    	$.each($(this).material_chip('data'), function(index, val) {
    		 as.push(val.tag);
    	});

    	ajax(as);
   });

    $('.chips').on('chip.delete', function(e, chip){
        $data = $(this).material_chip('data');
        a = [];
        if($data.length > 0){
            $.each($data, function(index, val) {
                 a.push(val.tag);
            });
        }else{
            ajax('');
        }
    });
});

function ajax(as){
            $.ajax({
            url: base_url+"lib/explore.php",
            type: 'POST',
            data: {search : as},
        })
        .done(function(as) {
            var a = JSON.parse(as);
            // console.log(""+as);
            $i = 0;
            $arr = [];
            $('.data').html('');
            $.each(a, function(index, val) {
                $data = JSON.parse(val['foto']);
                $arr.push($data);
                console.log(val);
                    $content = '<div class="col s12 xl4 p0 ">\
                        <div class="col s12">\
                            <div class="card">\
                                <div class="card-image">\
                                <div class="material-placeholder"><div class="materialboxed initialized" style="background-image: url('+base_url+"assets/images/project/"+$arr[$i][0]+');"></div></div>\
                                </div>\
                                <div class="clicked">\
                                    <div class="card-content">\
                                     <span class="card-title">'+val['nama']+'</span>\
                                        <p class="font12 title-category">'+val['deskripsi']+'</p>\
                                    </div>\
                                    <div class="card-action">\
                                        <h3 class="card-title">RP. '+val['target']+'</h3>\
                                        <div class="progress">\
                                            <div class="determinate" style="width: 70%"></div>\
                                        </div>\
                                        <div class="row m0 py0 pl0 pr1">\
                                            <div class="col s4 center-align"> <span>80</span> <span>Donation</span> </div>\
                                            <div class="col s4 center-align"> <span>70%</span> <span>Progress</span> </div>\
                                            <div class="col s4 center-align"> <div>20</div> <span > Ipsum</span> </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                    </div>';

                    $('.data').append($content);
                    $i += 1;
            });
        });
}
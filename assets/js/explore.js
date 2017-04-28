$(document).ready(function() {
	$('.chips').material_chip();
    $('.chips-placeholder').material_chip({
        placeholder: '+Tag',
        secondaryPlaceholder: 'Search',
    });
	var ss = $('.chip').material_chip('data');
    var as = [];


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
                $content = '<div class="col s4 p0">\
                        <div class="col s12 ">\
                            <div class="card">\
                                <div class="card-image">\
                                    <div class="material-placeholder">\
                                        <div class="materialboxed initialized" style="background-image: url('+base_url+"assets/images/project/"+$arr[$i][0]+');"></div>\
                                    </div>\
                                </div>\
                                <div class="card-content">\
\
                                    <div class="font14 title-category">Travel</div>\
                                    <span class="card-title">'+val['nama']+'</span>\
                                    <p>'+val['deskripsi']+'</p>\
                                </div>\
                                <div class="card-action">\
                                    <h3 class="card-title">RP.'+val['jumlah`']+'</h3>\
                                    <div class="progress">\
                                        <div class="determinate" style="width: 70%"></div>\
                                    </div>\
                                    <div class="row m0 py0 pl0 pr1">\
                                        <div class="col s4 center-align">\
                                            <span>80</span>\
                                            <span>Backer</span>\
                                        </div>\
                                        <div class="col s4 center-align">\
                                            <span>80</span>\
                                            <span>Backer</span>\
                                        </div>\
                                        <div class="col s4 center-align">\
                                            <span>80</span>\
                                            <span>Backer</span>\
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
$(document).ready(function(){
	var thumbnails = $('.flex-control-nav.flex-control-thumbs');
	if(thumbnails.length){

		/**
		 * Recalculation width/height of thumbnails
		 *
		 */
		var img = $(thumbnails).find('li');
		var w_gallery = (img.length*100);
		var w_percentage = (100 / w_gallery) * 100;
		console.log(w_gallery / 5);

		$(thumbnails).css('width',(w_gallery / 5) +'%');
		$(img).css({'width': w_percentage+'%', 'float':'none', 'display':'inline-block'});

		if(img.length > 5){
		    $(img).on('click touchend',function(){
    			var index 			= $(this).index()+1,
	    			 calc_w 			= (index) * $(this).width(),
	    			 max_length 	= img.length-2,
					 w_container	= $(this).width() * 5;

				if (index < max_length && index > 2)
					$(thumbnails).css('transform','translate3d(-'+(calc_w - (w_container*.6))+'px,0,0)');
				else if (index < 3)
					$(thumbnails).css('transform','translate3d(0,0,0)');
				else{
					$(thumbnails).css('transform','translate3d(-'+((img.length * (w_container / 5))-w_container)+'px,0,0)');
				}

    		})
		}

	}
})

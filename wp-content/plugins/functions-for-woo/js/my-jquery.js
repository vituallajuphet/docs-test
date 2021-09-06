/*
Description: Custom JQuery for WooCommerce 3.0
Version: 1.0
Author: 641 (SP Proweaver)
*/

$(document).ready(function(){

	$("form.cart").insertAfter($(".woocommerce .summary.entry-summary .price"))

	$('.sale_tag').on('change', function(){
		alert('uy');
		if($('.sale_tag').is(':checked')){
			alert('hahahaha');
			$(".woo-qv-input").prop('disabled', true);
		}
	});

	$(document).on('click','.quantity_btn',function(){
		calc_qty(this);
	});

	function calc_qty(e){
		var cur_val = parseInt($(e).siblings('.qty').val());
		switch ($(e).data('action')) {
			case 'add':
			cur_val += 1;
			break;
			case 'minus':
			cur_val -= 1;
			break;
		}
		$('.coupon').find('button[name="update_cart"]').prop('disabled',0);

		if (cur_val != 0) {
			if ($(e).siblings('.qty')[0].max) {
				if (cur_val <= $(e).siblings('.qty')[0].max) {
					$(e).siblings('.qty').val(cur_val);
				}
			}else {
				$(e).siblings('.qty').val(cur_val);
			}
		}
	}

	$('.woocommerce').each(function(){
	    if(this.innerHTML === ""){
	        $(this).css("padding","0");
					$(this).after('<p class="woocommerce-info">No products were found matching your selection.</p>');
	    }
	});

	// Set the interval to be 5 seconds
	var t = setInterval(function(){
		$(".checkout-product-details-outer").animate(1000,function(){
			$(this).find("div:last").after($(this).find("div:first"));
		})
	},5000);

	$(".woocommerce ul.products li.product a img").wrap("<div class='shop-img-div'></div>");
	$(".shop-img-div").css({"width" : "auto", "border-radius" : "8px", "box-shadow" : "0 0 10px #eaeaf8"})
	$(".woocommerce-loop-product__title").prepend("<div class='view_prod'>VIEW PRODUCT</div>");
	$(".woocommerce-loop-product__title .view_prod").css({"position":"absolute", "bottom": "140px", "left" : "50%" , "transform" : "translate(-50%, -50%)", "font-size" : "16px", "width" : "100%", "background" : "#ED2FED", "color" : "#fff", "padding" : "5px 0" , "visibility" : "hidden"});
	$(".woocommerce-loop-product__title .view_prod").hide();

	var native_width = 0;
	var native_height = 0;

	$(".magnify").mousemove(function(e){
		e.preventDefault();

		if(!native_width && !native_height)
		{

			var image_object = new Image();
			image_object.src = $(".small").attr("src");

			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{

			var magnify_offset = $(this).offset();

			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;

			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large").fadeIn(300);
			}
			else
			{
				$(".large").fadeOut(300);
			}
			if($(".large").is(":visible"))
			{

				var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/3)*-1;
				var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/3)*-1;
				var bgp = rx + "px " + ry + "px";

				var px = mx - $(".large").width()/2;
				var py = my - $(".large").height()/2;

				$(".large").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})

	/******** FOR QUICK VIEW JQUERY ********/

	//CLose Popup
	function xoo_qv_close_popup(e){
		$.each(e.target.classList,function(key,value){
			if(value == 'xoo-qv-close' || value == 'xoo-qv-inner-modal'){
				$('.qv_opac').hide();
				$('.qv_panel').removeClass('xoo-qv-panel-active');
				$('.qv_modal').html('');
			}
		})
	}
	$('.qv_panel').on('click','.xoo-qv-close',xoo_qv_close_popup);
	$('body').on('click','.xoo-qv-inner-modal',xoo_qv_close_popup);

	$('.qv_text').on('click', function(e){
		e.preventDefault();
		var p_id = $(this).attr('id');
		$('#data_product_id').val(p_id);
		var qv_panel = $('.qv_panel');
		qv_panel.addClass('xoo-qv-panel-active');
		qv_panel.find('.xoo-qv-opl').addClass('xoo-qv-pl-active');
		$('.qv_opac').show();
		var ajax_data = find_nav_ids(p_id);
		ajax_data['url'] = $(this).data('url');
		qv_animation_func(ajax_data,'top');
	});

	var qv_length = $('.qv_text').length;

	function find_nav_ids(p_id){
		var curr_index = $("[id="+p_id+"]").index('.qv_text');
		var curr_length = curr_index + 1;
		var next_index,prev_index;
		var qv_btn = $('.qv_text');
	//Find next button
	if(curr_length == qv_length){
		next_index = 0;

	}
	else{
		next_index = curr_index + 1;
	}

	//Find prev button
	if(curr_length == 1){
		prev_index = qv_length - 1;
	}
	else{
		prev_index = curr_index - 1;
	}

	var qv_next = qv_btn.eq(next_index).attr('id');
	var qv_prev = qv_btn.eq(prev_index).attr('id');
		return {'product_id': p_id , 'qv_next': qv_next , 'qv_prev': qv_prev};
	}

	function qv_ajax(ajax_data,anim_type,direction,anim_class){
		ajax_data['action'] = 'qv_ajax';
		var url = ajax_data['url']+'/wp-admin/admin-ajax.php';
		$.ajax({
		url: url,
		type: 'POST',
		data: ajax_data,
		beforeSend: function(){
			$('.qv_modal').append('<div id="qv_loader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>');
		},
		success: function(response){
			$('.qv_modal').html(response);
			$('.xoo-qv-pl-active').removeClass('xoo-qv-pl-active');
		 	$('.qv_panel .variations_form select').change();
		},
		complete: function(){
			$('.xoo-qv-container').fadeTo(50,1);
			$('#qv_loader').remove();
			loadQuickview();
		}
	})
}

	$(document).keyup(function(e) {
	  if (e.keyCode === 27){
	  	$('.xoo-qv-close').trigger('click');
	  }
	})

	 // Next Product
	$('.qv_panel').on('click','.xoo-qv-nxt',function(){
		$('.xoo-qv-mpl').addClass('xoo-qv-pl-active');
		var next_id = $(this).attr('qv-nxt-id');
		var ajax_data = find_nav_ids(next_id);
		ajax_data['url'] = $(this).data('url');
		qv_animation_func(ajax_data,'next');
	})

	//Previous Product
	$('.qv_panel').on('click','.xoo-qv-prev',function(){
		$('.xoo-qv-mpl').addClass('xoo-qv-pl-active');
		var prev_id = $(this).attr('qv-prev-id');
		var ajax_data = find_nav_ids(prev_id);
		ajax_data['url'] = $(this).data('url');
		qv_animation_func(ajax_data,'prev');
	})

	function qv_animate(direction,anim_class){

			var height = $(document).height()+'px';
			var width = $(document).width()+'px';

			if(direction == 'top'){
				$(".xoo-qv-inner-modal").css('transform','translate(0,-'+height+')').addClass(anim_class);
			}
			else if(direction == 'next'){
				$(".xoo-qv-inner-modal").css('transform','translate(-'+width+',0)').addClass(anim_class);
			}
			else if(direction == 'prev'){
				$(".xoo-qv-inner-modal").css('transform','translate('+width+',0)').addClass(anim_class);
			}
	}

	function qv_animation_func(ajax_data,direction){
		qv_ajax(ajax_data,qv_animate,direction,'xoo-qv-animation-linear');
	}

	$(document).on('click','#place_order', function() {
	   $(this).val("Processing...");
	   setInterval(function(){ $("#place_order").val("Place Order") }, 10000);
	 });

});


function loadQuickview(){
	var change_img_time 	= 4000;
	var transition_speed	= 300;
	var listItems			= $('.qv_image_container img');
	var listLen				= listItems.length;
	var i = 0;
	if($('.qv_image_container img').length > 1){
		$('.qv_image_container').append('<a href="javascript:;" class="next-img" title="Next Image">&#8644;</a>');
		changeList = function () {
			 listItems.eq(i).fadeOut(transition_speed, function () {
				i += 1;
				if (i === listLen) { i = 0; }
				listItems.eq(i).fadeIn(transition_speed);
				});
		  };
		listItems.not(':first').hide();

		 $('.next-img').on('click',function(){
			 changeList();
		 })
	}
}

/**************************************/

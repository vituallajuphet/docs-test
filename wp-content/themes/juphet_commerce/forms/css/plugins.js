$(document).ready(function(){

	// var get_height = $('#contact_us_form_1 .form_frame_b').height();
	// $('#contact_us_form_1 .form_frame_a').height(get_height);
	
	$('body').append("<div class='load_holder'><div class='spinner'><div class='bounce1'></div><div class='bounce2'></div><div class='bounce3'></div></div>	<p>Submitting Form...</p></div>");

	
	$('.close').click(function(){
		$('#success').fadeOut();
		$('#recaptcha-error').fadeOut();
	});
	
	
	$('.rclose').click(function(){
		$('#recaptcha-error').fadeOut();
	});
	
	$('.error-close').click(function(){
		$('#error-msg').fadeOut();
	});
	
	
	$('input[type="radio"]').click(function(){
		$('input[type="radio"].error + label.error').remove();
	});


var wskCheckbox = function() {
  var wskCheckboxes = [];
  var SPACE_KEY = 32;

  function animateCircle(checkboxElement) {
    var circle =
        checkboxElement.parentNode.getElementsByClassName('wskCircle')[0];
    var restore = '';
    if (circle.className.indexOf('flipColor') < 0) {
      restore = circle.className + ' flipColor';
    } else {
      restore = 'wskCircle';
    }
    circle.className = restore  + ' show';
    setTimeout(function(){
      circle.className = restore;
    }, 150);
  }

  function addEventHandler(elem, eventType, handler) {
    if (elem.addEventListener) {
      elem.addEventListener (eventType, handler, false);
    }
    else if (elem.attachEvent) {
      elem.attachEvent ('on' + eventType, handler);
    }
  }

  function clickHandler(e) {
    e.stopPropagation();
    if (this.className.indexOf('checked') < 0) {
      this.className += ' checked';
    } else {
      this.className = 'wskCheckbox';
    }
    animateCircle(this);
  }

  function keyHandler(e) {
    e.stopPropagation();
    if (e.keyCode === SPACE_KEY) {
      clickHandler.call(this, e);
      // Also update the checkbox state.
      var cbox = document.getElementById(this.parentNode.getAttribute('for'));
      cbox.checked = !cbox.checked;
    }
  }

  function clickHandlerLabel(e) {
    var id = this.getAttribute('for');
    var i = wskCheckboxes.length;
    while (i--) {
      if (wskCheckboxes[i].id === id) {
        if (wskCheckboxes[i].checkbox.className.indexOf('checked') < 0) {
          wskCheckboxes[i].checkbox.className += ' checked';
        } else {
          wskCheckboxes[i].checkbox.className = 'wskCheckbox';
        }
        animateCircle(wskCheckboxes[i].checkbox);
        break;
      }
    }
  }

  function checkboxValues(inputAttrName) {
		var inputAttrName = inputAttrName;
		var inputHidden = $('input[name="'+inputAttrName+'"]').attr('value');
		var checkedValues = '';
		var checkboxClass = $('input.'+inputAttrName+'');

		$.each(checkboxClass, function(index) {
			$(this).on('change', function() {
				var x = $(this).attr('value') + ', ';
				if($(this).is(':checked')) {
					inputHidden += x;
					checkedValues = inputHidden.replace(/,\s*$/, "");
					$('input[name="'+inputAttrName+'"]').attr('value', checkedValues);
				} else {
					inputHidden = inputHidden.replace(x, '');
					checkedValues = inputHidden.replace(/,\s*$/, "");
					$('input[name="'+inputAttrName+'"]').attr('value', checkedValues);
				}
			});
		});	
	}

  function findCheckBoxes() {
    var labels =  document.getElementsByTagName('label');
    var i = labels.length;
    while (i--) {
      var posCheckbox = document.getElementById(labels[i].getAttribute('for'));
      if (posCheckbox !== null && posCheckbox.type === 'checkbox' &&
          (posCheckbox.className.indexOf('wskCheckbox') >= 0)) {
        var text = labels[i].innerText;
        var span = document.createElement('span');
        span.className = 'wskCheckbox';
        span.tabIndex = i;
        var span2 = document.createElement('span');
        span2.className = 'wskCircle flipColor';
        labels[i].insertBefore(span2, labels[i].firstChild);
        labels[i].insertBefore(span, labels[i].firstChild);
        addEventHandler(span, 'click', clickHandler);
        addEventHandler(span, 'keyup', keyHandler);
        addEventHandler(labels[i], 'click', clickHandlerLabel);
        var cbox = document.getElementById(labels[i].getAttribute('for'));
        if (cbox.getAttribute('checked') !== null) {
          span.click();
        }
        
        wskCheckboxes.push({'checkbox': span,
            'id': labels[i].getAttribute('for')});
      }
    }
  }

  return {
    init: findCheckBoxes
  };
}();

wskCheckbox.init();



	
var cloneCount = 1;
	
	$('.addMore').click(function(){
		
		var html = $('.cloneField').html();

		$('.addreferral').prepend("<div class='clone_data' id='mainCloneCount_0'>"+html+"<a href='javascript:;' style=' background: #f95858;     padding: 3px 5px; color: #fff; border-radius: 3px; position: relative; bottom: 9px;' class='removeCls' onclick='removeHTML()'><i class='fas fa-minus-circle'></i> Remove</a></div>");

		$('.addreferral').each(function(){
			var i = 0;
			$(this).find('.clone_data').each(function(){
				i = parseInt(i + 1);
				$(this).attr('id','mainCloneCount_'+i);
				$(this).find('.referral_name input').attr('name', 'Name'+i);
				$(this).find('.referral_email input').attr('name', 'Email_Address_'+i);
				$(this).find('.referral_phone input').attr('name', 'Phone'+i);
				$(this).find('.removeCls').attr('onClick', 'removeHTML('+i+')');
			});
		});
		
		$(".Phone").keypress(function(e) {
				var verified = (e.which == 8 || e.which == undefined || e.which == 0) ? null : String.fromCharCode(e.which).match(/[^0-9 -]/);
				if (verified) {e.preventDefault();}
		});
	
	
	});
	
	
	(function() {
  
	  'use strict';

	  $('.input-file').each(function() {
		var $input = $(this),
			$label = $input.next('.js-labelFile'),
			labelVal = $label.html();
		
	   $input.on('change', function(element) {
		  var fileName = '';
		  if (element.target.value) fileName = element.target.value.split('\\').pop();
		  fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
	   });
	  });

	})();

	function scaleCaptcha(elementWidth) {
	  // Width of the reCAPTCHA element, in pixels
	  var reCaptchaWidth = 304;
	  // Get the containing element's width
		var containerWidth = $('.form_box5').width();
	  
	  // Only scale the reCAPTCHA if it won't fit
	  // inside the container
	  if(reCaptchaWidth > containerWidth) {
		// Calculate the scale
		var captchaScale = containerWidth / reCaptchaWidth;
		// Apply the transformation
		$('.g-recaptcha').css({
		  'transform':'scale('+captchaScale+')'
		});
	  }
	}

	$(function() { 
	 
	  // Initialize scaling
	  scaleCaptcha();
	  
	  // Update scaling on window resize
	  // Uses jQuery throttle plugin to limit strain on the browser
	  $(window).resize( $.throttle( 100, scaleCaptcha ) );
	  
	});

	$("#Phone, input[name='Phone'], input[name='Phone_Number'], input[name='Cell_Number'], input[name='Telephone'], input[name='Telephone_Number'], input[name='Fax_Number'], input[name='Zip'], input[name='Zip_Code']").keypress(function(e) {
            var verified = (e.which == 8 || e.which == undefined || e.which == 0) ? null : String.fromCharCode(e.which).match(/[^0-9 -]/);
            if (verified) {e.preventDefault();}
    });

	$('#Phone, input[name="Phone_Number"]').keypress(function() {
		
		 if($(this).val().length >= 12) {
			$(this).val($(this).val().slice(0, 12));
			
		}
	});

});


	
$(function() {
	$('input[name="First_Name"], input[name="Last_Name"], input[name="Name"]').keydown(function(e) {
		if (e.shiftKey || e.ctrlKey || e.altKey) {
			e.preventDefault();
		} else {
		var key = e.keyCode;
			if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
				e.preventDefault();
			}
		}
	});
});
 
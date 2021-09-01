$(function () {
    countryHolder();
    respHolder();

    function countryHolder() {
        $('.cphone').attr('autocomplete', 'off');
        $('.cphone').on('focus change paste keyup', function() {
            var posHolder = $(this).offset();
            var sizeHeight = $(this).outerHeight();
            if($(this).val() == '') {
                $(this).mask('+1 000000000000');
                // $(this).prop('readonly', 'readonly');
                // $(this).prev('.phone-trigger').children('i[data-flag="true"]').removeClass();
                // $(this).prev('.phone-trigger').children('i[data-flag="true"]').addClass('us flag');
                // $('.selectfirst').addClass('show');
                // $('.selectfirst.show').css({
                //     left: (posHolder.left+10) + 'px',
                //     top: (posHolder.top + sizeHeight)-50 + 'px'
                // });
            }
            // else {
            //     $(this).prop('readonly', '');
            //     $('.selectfirst').removeClass('show');
            // }
        });
        $('.phone-trigger').on('click', function() {
            var posHolder = $(this).offset();
            var sizeHeight = $(this).outerHeight();
            $('.phone-trigger').not($(this)).removeClass('clicker');
            $(this).toggleClass('clicker');
            $('.select-holder').data('ref', $(this).siblings('input').attr('name'));
            $('.select-holder').css({
                left: posHolder.left + 'px',
                top: (posHolder.top + sizeHeight)-5 + 'px'
            });
            $('.select-holder ul').scrollTop(0);
            $('.searchInput').val('');
            $('.country-holder li').removeClass('filter');
            $('.selectfirst').removeClass('show');
            if($(this).hasClass('clicker')) {
                $('.select-holder').addClass('show');
            } else {
                $('.select-holder').removeClass('show');
            }
        });

        $(document).on('click', function(e) {
            if($(e.target).closest('.clicker, .search-box, input').length == 0) {
                $('.select-holder').removeClass('show');
                $('.phone-trigger').removeClass('clicker');
                $('.selectfirst').removeClass('show');
            }
        });

        $('.searchInput').on('change paste keyup', function() {
            var searchVal = $(this).val().toUpperCase();
            $('.country-holder li').each(function(index, value){
                if($(this).data('country').indexOf(searchVal) > -1 || $(this).data('ccode').toUpperCase().indexOf(searchVal) > -1)  {
                    $(this).removeClass('filter');
                } else {
                    $(this).addClass('filter');
                }
            });
        });

        $('.country-holder li').on('click', function() {
            var ref = $('.select-holder').data('ref');
            var phoneCode = $(this).data('code');
            var ccode = $(this).data('ccode');
            // $('input[name='+ref+']').val(phoneCode);
            $('input[name='+ref+']').attr('placeholder', phoneCode + ' (phone number)');
            $('input[name='+ref+']').mask(phoneCode + ' 000000000000');
            $('.phone-trigger.clicker i[data-flag="true"]').removeClass();
            $('.phone-trigger.clicker i[data-flag="true"]').addClass(ccode + ' flag');
            $('.phone-trigger.clicker').siblings('.cphone').prop('disabled', '');
            $('.selectfirst').removeClass('show');
        });
    }


    function respHolder() {
        var posHolder = $('.phone-trigger.clicker').length < 1 ? 0 : $('.phone-trigger.clicker').offset();
        var sizeHeight = $('.phone-trigger.clicker').length < 1 ? 0 : $('.phone-trigger.clicker').outerHeight();
        $('.select-holder.show').css({
            left: posHolder.left + 'px',
            top: (posHolder.top +  + sizeHeight) + 'px'
        });

        $('.cphone').on('focus change paste keyup', function() {
            var posHolder2 = $(this).offset();
            var sizeHeight2 = $(this).outerHeight();
            if($(this).val() == '') {
                $('.selectfirst.show').css({
                    left: (posHolder2.left+10) + 'px',
                    top: (posHolder2.top + sizeHeight2)-50 + 'px'
                });
            }
        });
    }

    $(".cphone").keypress(function(e) {
        var verified = (e.which == 8 || e.which == undefined || e.which == 0) ? null : String.fromCharCode(e.which).match(/[^0-9 -]/);
        if (verified) {e.preventDefault();}
    });
    
    // var $areacode = '+1';
	// $('.cphone').mask($areacode + ' 000000000000');

    $(window).on('resize', function() {
        respHolder();
    });
});
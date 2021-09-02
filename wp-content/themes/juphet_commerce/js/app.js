$(document).ready(function(){

    $(".rslides").responsiveSlides({
        nav: true,   
        pager: true, 
    });

    $("#banner .next").html("<i class='fas fa-chevron-right'></i>")
    $("#banner .prev").html("<i class='fas fa-chevron-left'></i>")
    $("#banner .rslides_tabs li a").html("")
    

    $(".toggleNav").click(function(){
        let el = $(".toggleNav span i");
        if($(this).hasClass("shown")){
            el.removeClass("fa-times").addClass("fa-bars")
            $(this).removeClass("shown")
            $(".mobile_nav").removeClass("showntab")
            $(".togglecont").prepend($(this))
        }else{
            el.removeClass("fa-bars").addClass("fa-times")
            $(this).addClass("shown")
            $(".mobile_nav").addClass("showntab")
            $(".mobile_nav_cont").prepend($(this))
        }
        
    })

    let winWid = $(window).width();

    const resizeWindowCallBack = () => {
        winWid = $(window).width();
        if(winWid <= 1010){
            $(".mobile_nav .mobile_nav_cont").append($(".nav-menu"));
            $(".mob_cart_cont ul").append($(".logout-btn, .cart-btn"))
        }else{
            $(".main_nav_cont").append($(".nav-menu"));
            $(".toggleNav span i").removeClass("fa-times").addClass("fa-bars")
            $(".toggleNav").removeClass("shown")
            $(".mobile_nav").removeClass("showntab")
            $(".togglecont").prepend($(".toggleNav"))
            $(".header__cont ul").append($(".logout-btn, .cart-btn"))
        }
        
    }

    $(window).resize(resizeWindowCallBack)

    resizeWindowCallBack()
})
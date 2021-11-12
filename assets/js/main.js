$(document).ready(function(){

    var header_sticky=$("header.-fix")
    if($('body').hasClass( "home" )){
        $(window).scroll(function(){
            $(this).scrollTop()>5?header_sticky.addClass("is-active"):header_sticky.removeClass("is-active")
        })
    }else{
        header_sticky.addClass("is-active")
    }

    //-------------------------------------------------
    // Header Search
    //-------------------------------------------------
    var $headerSearch = $('.header__search');
    var $headerSearchToggle = $('.search-submit');


    $headerSearchToggle.click(function(e){
        if($(".search-field").val().length == 0){
          e.preventDefault();
          e.stopPropagation()
        }
    })

    $headerSearchToggle.on('click', function(e) {

        var $this = $(this);
        var $header = $(this).closest('header');
        var $this_parent = $(this).closest('form');
        if(!$header.hasClass('open-search')) {
            $header.addClass('open-search');

        } else {
            $header.removeClass('open-search');
        }
    });





    // $('#search').on("click",(function(e){
    //   $(".form-group").addClass("sb-search-open");
    //     e.stopPropagation()
    // }));

    // $(document).on("click", function(e) {
    //     if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
    //       $(".form-group").removeClass("sb-search-open");
    //     }
    // });

    // $(".form-control-submit").click(function(e){
    //       $(".form-control").each(function(){
    //         if($(".form-control").val().length == 0){
    //           e.preventDefault();
    //           $(this).css('border', '2px solid red');
    //         }
    //     })
    // })


    //-------------------------------------------------
    // Menu
    //-------------------------------------------------
    $('.nav__mobile--close').click(function(e){
        $('.nav__mobile').removeClass('active')
        $('body').removeClass('modal-open')
    });
    $('.menu-mb__btn').click(function(e){
        e.preventDefault()
        $('body').addClass('modal-open')
        // $('.menu-mb__btn').addClass('active')
        $('.nav__mobile').addClass('active')
    });

    var back_to_top=$(".back-to-top"),offset=220,duration=500;

    $(document).on("click",".back-to-top",function(o){
        return o.preventDefault(),$("html, body").animate({scrollTop:0},duration),!1
    });

    //check home
    if($('body').hasClass( "home" )){

        new WOW().init();
        $('.home-solution-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            easing: "linear",
            centerMode: true,
            variableWidth: true,
            prevArrow: '<span class="icon-arrow-left slick-prev slick-arrow"></span>',
            nextArrow: '<span class="icon-arrow-right slick-next slick-arrow"></span>'
        });
    }

});



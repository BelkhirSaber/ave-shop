$(function(){
    $(window).resize(function(){
        /**
        ============================================
        === === === === Start Header === === === ===
        ============================================
        */
        
        if($(window).width() <= 767){
            //set css property for shop mens 
            $('header .navbar-menu .overlay .shop-mens').css({
                right: ($('body').width() - $('.container').width()) / 2
            });
            // set padding top for navbar menu
            $('header .navbar-menu').css({
                paddingTop: $('.navbar-menu .overlay .container').height() + "px"
            });
        }else{
            // set css property for shop mens 
            $('header .navbar-menu .overlay .shop-mens').css({
                // right: "15%"
                right: ((($(window).width()-$('.row').width())/2)+(($('.row').width()/12)*2)+15)
            });
            // set padding top for navbar menu 
            $('header .navbar-menu').css({
                paddingTop: 0
            });
        }
        // set top for mobile navbar and overlay
        // .navbar-menu .overlay .navbar .mob-nav-menu
        $('.navbar-menu .overlay .navbar .overlay').css({
            top: ($('.navbar-menu .overlay .container').height() + 48 ) + "px" 
        });
        /**
        ============================================
        === === === === End Header === === === === =
        ============================================
        */
    });
    /**
    ============================================
    === === === === Start Header === === === ===
    ============================================
     */
    //set animation to mobile navbarlink
    $('header .navbar-info .user-account .mobile-nav .mobile-navlink').on('click', function(){
        $('header .navbar-info .user-account .mobile-nav .mobile-dropdown').slideToggle(200);
        $(this).toggleClass('open');
    });

    
    if($(window).width() <= 767){
        // set css property for shop mens 
        $('header .navbar-menu .overlay .shop-mens').css({
            right: ($('body').width() - $('.container').width()) / 2
        });
        // set padding top for navbar menu
        $('header .navbar-menu').css({
            paddingTop: $('.navbar-menu .overlay .container').height() + "px"
        });        
    }else{
        // set css property for shop mens 
        $('header .navbar-menu .overlay .shop-mens').css({
            // right: "15%"
            right: ((($(window).width()-$('.row').width())/2)+(($('.row').width()/12)*2)+15)
        });
        // set padding for navbar menu
        $('header .navbar-menu').css({
            paddingTop: 0
        });
    }
    // set top for mobile navbar and overlay
    $('.navbar-menu .overlay .navbar .overlay').css({
        top: ($('.navbar-menu .overlay .container').height()+ 48 ) + "px" 
    });
    //set open class for mobile navbar and overlay
    $('.navbar-toggler, .navbar-menu .overlay .navbar .overlay, header .navbar-menu .overlay .navbar-expand-md .nav-head .button-toggle').on('click', function(){
        $('.navbar-menu .overlay .navbar .mob-nav-menu, .navbar-menu .overlay .navbar .overlay').toggleClass('open');

        if($('.navbar-menu .overlay .navbar .mob-nav-menu').hasClass('open')){
            $('body').css('overflow', 'hidden');
        }else{
            $('body').css('overflow', 'scroll');
        }
    });
    /**
    ============================================
    === === === === End Header === === === === =
    ============================================
     */
    /**
    ============================================
    === === ==== Start Home Page === === === ===
    ============================================
     */
    // Add Class Active To Navigation Link
    $('.main .main-offre .content .content-navigation .navbar-light .navbar-nav .nav-link').on('click', function(){
        if(!$(this).hasClass('active')){
            $('.main .main-offre .content .content-navigation .navbar-light .navbar-nav .nav-link').removeClass('active');
            $(this).addClass('active');
        }
    });
    /**
    ============================================
    === === === === End Home Page === === === ==
    ============================================
     */
    /*
    ============================================
    === === === Start View Product === === === =
    ============================================
     */
    $('.product .info-product .content .card .card-header .card-header-tabs .nav-item .nav-link').on('click', function(){
        if(!$(this).hasClass('active')){
            $('.product .info-product .content .card .card-header .card-header-tabs .nav-item .nav-link').removeClass('active');
            $(this).addClass('active');
            var datalink = $(this).data('link');
            // console.log(datalink);
            $('.product .info-product .content .card .card-body .item').removeClass('open');
            $('.product .info-product .content .card .card-body .' + datalink).addClass('open');
        }
    });
    /*
    ============================================
    === === === End View Product === === === ===
    ============================================
     */


    // trigger custom checkbox
    $('form').checkBo();

    // trigger nice select box
    $('.view-product .content .card-details .option .color select, .view-product .content .card-details .option .size select, .view-product .content .card-details .option .quantity select').niceSelect();
})
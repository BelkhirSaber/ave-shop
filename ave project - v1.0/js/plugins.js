$(function(){
    //Custom Property IN Resize Window
    $(window).resize(function(){
        $('header').each(function(){
            $(this).css('padding-top', $('.navbar-info').height() + "px");
            // $('.background').height(($(this).height() - $('.navbar-info').height()) + 'px');
            if($(window).width() <= 568){
                $(this).height('200px');
            }else if($(window).width() > 568 && $(window).width() <= 768){
                $(this).height('400px');
            }else if($(window).width() > 768 && $(window).width() <= 992){
                $(this).height('500px');
            }else{
                $(this).height($(window).height());
            }
        });
    });

    //Set Custom Css Properity For Header
    $('header').each(function(){
        $(this).css('padding-top', $('.navbar-info').height() + "px");
        // $('.background').height(($(this).height() - $('.navbar-info').height()) + 'px');
        if($(window).width() <= 568){
            $(this).height('200px');
        }else if($(window).width() > 568 && $(window).width() <= 768){
            $(this).height('400px');
        }else if($(window).width() > 768 && $(window).width() <= 992){
            $(this).height('500px');
        }else{
            $(this).height($(window).height());
        }
    });
});
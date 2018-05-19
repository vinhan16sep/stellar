$(document).ready(function() {
    "use strict";

    var n = $(window).width();
    if (n <= 768){
        $('ul.nav').hide();
    }

    var nav_check = 1;
    $('.main_nav button.mobile_nav_btn').click(function(){
        if (nav_check === 1){
            $('ul.nav').slideDown();
            $('.main_nav button.mobile_nav_btn i').removeClass('fa-bars').addClass('fa-close');
            nav_check = 0;
        } else {
            $('ul.nav').slideUp();
            $('.main_nav button.mobile_nav_btn i').removeClass('fa-close').addClass('fa-bars');
            nav_check = 1;
        }
    });

});
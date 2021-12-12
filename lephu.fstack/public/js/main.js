$(document).ready(function () {
    // WOW-ANIMATION
    // new WOW().init();

    $('.header__navbar-list .header__navbar-item:nth-child(3)').hover(function () {
        $('.header__subnavbar-list').stop().slideToggle(600);
    });

    // ========================SEARCH=======================//
    $('.header__navbar-item--icon:first-child').click(function () {
        $('#header').removeClass('header-opacity');
        $('.header__search').stop().slideToggle(600);
    });
    // ========================END-SEARCH==================//

    // =========================FORM==========================//
    $('.header__navbar-item--icon:nth-child(3)').click(function () {
        $('.header__login').stop().fadeIn();
        $('#header').removeClass('header-opacity');
        $('.header__overlay-user').stop().fadeToggle(600);
    });

    $('.header__overlay-user').click(function () {
        $('.header__login').stop().fadeOut();
        $('.header__overlay-user').stop().fadeOut(600);
    });
    // =========================END-FORM=====================//

    // =======================CLOSE-SEARCH=================//
    $('.header__close').click(function () {
        $('.header__search').stop().slideUp(600);
    });
    // =======================END-CLOSE-SEARCH=============//

    // =======================CART=========================//
    $('.header__navbar-item--icon:last-child').hover(function () {
        $('#header').removeClass('header-opacity');
        $('.header__cart').stop().slideToggle(700);
    });
    // =======================END-CART=========================//


    // ========================SCROLL========================//
    $(window).scroll(function () {
        $('#header').css({ 'border-bottom': '1px solid rgb(227 221 221)' });
    });

    // =======================END-SCROLL====================//
    $('.header__navbar-item a:first-child').click(function () {
        $('.header__product').stop().slideDown(600);
        $('#header').removeClass('header-opacity');
    });
    $('.header__menu-close').click(function () {
        $('.header__product').stop().fadeOut(600);
    });


    // =======================RESPON-MENU=====================//
    $('.header__respon-item:nth-child(3)').click(function () {
        $('.header__subrespon-list').stop().slideToggle();
    });

    $('.header__respon-item:first-child a').mousedown(function () {
        $('.header__responproduct-list').stop().slideDown()
        return false;
    });

    $('.header__bars i').click(function () {
        $('.header__respon').stop().fadeIn(600);
        $('.header__overlay').stop().fadeIn(600);
        $('#header').removeClass('header-opacity');
    });

    $('.header__respon-menu i').click(function () {
        $('.header__respon').stop().fadeOut(600);
        $('.header__overlay').stop().fadeOut(600);
    });


    // =======================END-RESPON-MENU=====================//

    // ======================PRODUCT=============================//
    var t = 0, m = 0, p = 0;
    $('.content__cate-title').click(function () {
        t++;
        if (t % 2 != 0) {
            $('.content__cate-title').addClass('content__active');
        } else {
            $('.content__cate-title').removeClass('content__active');
        }
        $('.content__cate-fil').stop().slideToggle(600);
    });

    $('.content__color-title').click(function () {
        m++;
        if (m % 2 != 0) {
            $('.content__color-title').addClass('content__active');
        } else {
            $('.content__color-title').removeClass('content__active');
        }
        $('.content__color-fil').stop().slideToggle(600);
    });

    $('.content__price-title').click(function () {
        p++;
        if (p % 2 != 0) {
            $('.content__price-title').addClass('content__active');
        } else {
            $('.content__price-title').removeClass('content__active');
        }
        $('.content__price-fil').stop().slideToggle(600);
    });
    // =======================END-PRODUCT========================//



    // =====================MENU=============================//
    $('.content__category-btn').click(function () {
        $('.content__category-fixed--show').stop().fadeIn(600);
    });

    $('.content__category-close').click(function () {
        $('.content__category-fixed--show').stop().fadeOut(600);
    });

    $(window).resize(function () {
        $('.content__category-fixed--show').stop().fadeOut();
    });

    $('.content__cate-title-sm').click(function () {
        $('.content__cate-fil-sm').stop().slideToggle(600);
    });

    $('.content__color-title--sm').click(function () {
        $('.content__color-fil--sm').stop().slideToggle(600);
    });

    $('.content__price-title--sm').click(function () {
        $('.content__price-fil-sm').stop().slideToggle(600);
    });
    // ===================END-MENU===========================//


    // ===================FIXED-PC============================//
    $(window).scroll(function () {
        var size_width_pc = $(window).width();
        if (size_width_pc > 1024) {
            if ($(this).scrollTop() >= (5 * 100)) {
                $('.content__fixed').addClass('content__fixed-pc');
            } else {
                $('.content__fixed').removeClass('content__fixed-pc');
            }

            if ($(this).scrollTop() >= (20 * 100)) {
                $('.content__fixed-pc').hide();
            } else {
                $('.content__fixed-pc').show();
            }
        }
    });


    $(window).scroll(function(){
        if($(this).scrollTop() == 0){
            $('#header').addClass('header-opacity');
        }else{
            $('#header').removeClass('header-opacity');
        }
    });



    // ====================CART=============================//
    var value = parseInt($('.content__input-qty').attr('value'));
    $('.content__plus').click(function () {
        value++;
        $('.content__input-qty').attr('value', value);
        // update_href(value);
    });
    $('.content__minus').click(function () {
        if (value > 1) {
            value--;
            $('.content__input-qty').attr('value', value);
        }
        // update_href(value);
    });
    
    // ANIMATION


});
// =========================SLIDE-SHOW==========================//
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-white";
}

// =========================END-SLIDE-SHOW=====================//






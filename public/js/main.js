$(document).ready(function () {
    $('.header__navbar-list .header__navbar-item:nth-child(3)').hover(function () {
        $('.header__subnavbar-list').stop().slideToggle(600);
    });

    // ========================SEARCH=======================//
    $('.header__navbar-item--icon:first-child').click(function () {
        $('#header').removeClass('header-opacity');
        $('.header__search').stop().slideToggle(600);
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    });
    // ========================END-SEARCH==================//

    // =========================FORM==========================//
    $('.header__navbar-item--icon:nth-child(3)').click(function () {
        $('.login-box').stop().fadeIn();
        $('#header').removeClass('header-opacity');
        $('.header__overlay-user').stop().fadeToggle(600);
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    });

    $('.content__comment-send span a').click(function () {
        $('.login-box').stop().fadeIn();
        $('#header').removeClass('header-opacity');
        $('.header__overlay-user').stop().fadeToggle(600);
    });

    $('.header__overlay-user').click(function () {
        $('.login-box').stop().fadeOut();
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
    $('.header__navbar-item a.slide_show').click(function () {
        $('.header__product').stop().slideDown(600);
        $('#header').removeClass('header-opacity');
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    });
    $('.header__menu-close').click(function () {
        $('.header__product').stop().fadeOut(600);
    });


    // =======================RESPON-MENU=====================//
    $('.header__respon-item:nth-child(3)').click(function () {
        $('.header__subrespon-list').stop().slideToggle();
    });

    $('.header__respon-item:nth-child(2) a.slide_show').mousedown(function () {
        $('.header__responproduct-list').stop().slideToggle(600)
        var scrollsimple = $(window).scrollTop() + "px";
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
        $('.content__cate-list').stop().slideToggle(600);
    });

    $('.content__color-title').click(function () {
        m++;
        if (m % 2 != 0) {
            $('.content__color-title').addClass('content__active');
        } else {
            $('.content__color-title').removeClass('content__active');
        }
        $('.content__color-list').stop().slideToggle(600);
    });

    $('.content__price-title').click(function () {
        p++;
        if (p % 2 != 0) {
            $('.content__price-title').addClass('content__active');
        } else {
            $('.content__price-title').removeClass('content__active');
        }
        $('.content__price-list').stop().slideToggle(600);
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

    $(window).scroll(function () {
        if ($(this).scrollTop() == 0) {
            $('#header').addClass('header-opacity');
        } else {
            $('#header').removeClass('header-opacity');
        }
    });



    // ====================CART=============================//

    // var id = parseInt($('.t').attr('data-id'));
    $('.content__plus').click(function (e) {
        const id = e.delegateTarget.attributes[1].nodeValue
        var value = $(`#ip_${id}`).val();
        var value = $(`#iprpon_${id}`).val();
        value++;
        $(`#ip_${id}`).attr('value', value);
        $(`#iprpon_${id}`).attr('value', value);
    });
    $('.content__minus').click(function (e) {
        const id = e.delegateTarget.attributes[1].nodeValue
        var value = $(`#ip_${id}`).val();
        var value = $(`#iprpon_${id}`).val();
        if (value > 1) {
            value--;
            $(`#ip_${id}`).attr('value', value);
            $(`#iprpon_${id}`).attr('value', value);
        }
    });

    // Danh mục sản phẩm
    $("li.header__product-menu--item a.sub_cat").click(function () {
        var id = $(this).attr("data-id");
        if (!$(this).parents('li').children('.header__product-submenu-' + id).hasClass('active')) {
            $('.hide').removeClass('active');
            $(this).parents('li').children('.header__product-submenu-' + id).addClass('active');
        }
    });

    // Danh mục sản phẩm tablet mobile
    $("li.header__respon-menu--item a.sub_cat").click(function () {
        var id = $(this).attr("data-id");
        if (!$(this).parents('li').children('.header__responproduct-submenu-' + id).hasClass('active')) {
            $('.hide').removeClass('active');
            $(this).parents('li').children('.header__responproduct-submenu-' + id).addClass('active');
        }
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    });



    $('.comment_selector-act').click(function () {
        if (!$(this).hasClass('act')) {
            $('.comment_selector-act').removeClass('act');
            $(this).addClass('act');
        }
    });

    $("li.header__product-menu--item a.sub_cat").click(function () {
        var id = $(this).attr("data-id");
        var data = { id: id };
        // alert(id);
        $.ajax({
            url: 'http://localhost:1339/lphufstack/get_img',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            dataType: 'text',
            success: function (data) {
                $(".header__imgproduct").html(data);
                $(".header__responimgproduct").html(data);
                // console.log(data);
            },
            error: function (xhr, ajaxOption, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
    // Lọc hình ảnh menu tablet mobile
    $("li.header__respon-menu--item a.sub_cat").click(function () {
        var id = $(this).attr("data-id");
        var data = { id: id };
        // alert(id);
        $.ajax({
            url: 'http://localhost:1339/lphufstack/get_img',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            dataType: 'text',
            success: function (data) {
                $(".header__responimgproduct").html(data);
                // console.log(data);
            },
            error: function (xhr, ajaxOption, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
    // Lọc chất liệu
    $(".common_selector").click(function () {
        var product_id = $(this).attr("data-category");
        var material_id = $(this).attr("data-material");
        var color_id = $(this).attr("data-color");
        var data = { product_id: product_id, material_id: material_id };
        // alert(id);
        $.ajax({
            url: 'http://localhost:1339/lphufstack/get_material',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            dataType: 'text',
            success: function (data) {
                $(".content__fil-list").html(data);
                // $(".content__color-list").html(data);
                // console.log(data);
            },
            error: function (xhr, ajaxOption, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

    $('.common_selector').click(function () {
        if (!$(this).hasClass('act')) {
            $('.common_selector').removeClass('act');
            $(this).addClass('act');
        }
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    });
    // Lọc màu sắc
    $(".common_selector-color").click(function () {
        var product_id = $(this).attr("data-category");
        var color_id = $(this).attr("data-color");
        var data = { product_id: product_id, color_id: color_id };
        // alert(id);
        $.ajax({
            url: 'http://localhost:1339/lphufstack/get_color',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            dataType: 'text',
            success: function (data) {
                $(".content__fil-list").html(data);
                // $(".content__color-list").html(data);
                // console.log(data);
            },
            error: function (xhr, ajaxOption, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
    $('.common_selector-color').click(function () {
        if (!$(this).hasClass('act')) {
            $('.common_selector-color').removeClass('act');
            $(this).addClass('act');
        }
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    });
    // Lọc giá
    $(".common__selector-price").click(function () {
        var product_id = $("#category_save").val();
        var price = $(this).attr("data-price");
        var data = { product_id: product_id, price: price };
        // alert(id);
        $.ajax({
            url: 'http://localhost:1339/lphufstack/get_price',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            dataType: 'text',
            success: function (data) {
                $(".content__fil-list").html(data);
                // $(".content__color-list").html(data);
                // console.log(data);
            },
            error: function (xhr, ajaxOption, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
    $('.common__selector-price').click(function () {
        if (!$(this).hasClass('act')) {
            $('.common__selector-price').removeClass('act');
            $(this).addClass('act');
        }
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    });
    // Submit UserClient
    if ($("#contact_us").length > 0) {
        $("#contact_us").validate({
            rules: {
                email: {
                    required: true,

                },
                password: {
                    required: true,
                    maxlength: 50,
                }
            },
            messages: {
                email: {
                    required: "Vui lòng nhập tên đăng nhập!",
                },
                password: {
                    required: "Vui lòng nhập mật khẩu!",
                },
            },
            submitHandler: function (form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: 'http://localhost:1339/lphufstack/reg/login',
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('#contact_us').serialize(),
                    success: function (response) {
                        $('#res_message').show();
                        // if(response.code == 1){
                        $('.login-success').html(response);
                        window.location.href = '';
                        // }
                        $('#res_message').html(response.msg);
                        // $('#error').html(response);
                        $('#msg_div').removeClass('d-none');
                        document.getElementById("contact_us").reset();
                        setTimeout(function () {
                            $('#res_message').hide();
                            $('#msg_div').hide();
                            $('.login-box').stop().fadeOut();
                            $('.header__overlay-user').stop().fadeOut(600);
                        }, 1000);
                    }
                });
            }
        })
    }
    // Close-popup
    $('.close-popup').click(function () {
        $('.detail__if-outer').fadeOut(200);
        $('.detail__if').slideUp(800);
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    })

    $('.content__if a.term-but').click(function () {
        $('.detail__if-outer').stop().fadeIn(200);
        $('.detail__if').stop().slideDown(400);
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    })
    // Thêm giỏ hàng
    function addToCart(event) {
        event.preventDefault();
        let url = $(this).data('url');
        $.ajax({
            method: 'GET',
            url: url,
            success: function (data) {
                Swal.fire({
                    title: 'Thêm vào giỏ hàng thành công!',
                    icon: 'success',
                    showDenyButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hủy bỏ',
                    denyButtonText: `Đến giỏ hàng`,
                }).then((result) => {
                    if (result.isDenied) {
                        window.location.href = 'http://localhost:1339/lphufstack/cart';
                    }else{
                        location.reload();
                    }
                })
            },
            error: function () { }
        });
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    }
    $('.addCart').click(addToCart);
    $('.buyCart').click(addToCart);
    // Xóa sản phẩm
    $('a.deleteCart').click(function () {
        var rowId = $(this).attr("data-id");
        Swal.fire({
            title: 'Bạn đồng ý xóa sản phẩm này chứ!',
            icon: 'warning',
            showDenyButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý',
            denyButtonText: `Hủy bỏ`,
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Chúc mừng',
                    'Bạn đã xóa sản phẩm thành công!',
                    'success'
                );
                setTimeout(function () {
                    window.location.href = 'http://localhost:1339/lphufstack/cart/remove/' + rowId;
                }, 2000);
            }
        })
        var scrollsimple = $(window).scrollTop() + "px";
        $('body,html').stop().animate({ scrollTop: scrollsimple }, 800);
    });
    // Cập nhật giỏ hàng
    $(".content__plus").click(function (e) {
        const id = e.delegateTarget.attributes[1].nodeValue
        var qty = $(`#ip_${id}`).val();
        // alert(qty);
        var data = { id: id, qty: qty };
        // // alert(id);
        $.ajax({
            url: 'http://localhost:1339/lphufstack/update',
            method: 'POST',
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            success: function (data) {
                $(`#sub_total-${id}`).text(data.price);
                $(`#sub_repontotal-${id}`).text(data.price);
                $("#numCart").text(data.num_cart);
                $("#total").text(data.total);
                $("#totalrepon").text(data.total);
                // $(".table-responsive #sub_total-" + id).text(data.sub_total);
                // $(".total-price strong").text(data.total);
                // $(".shopping-cart span").text(data.num_order);
                // console.log(data);
            },
            error: function (xhr, ajaxOption, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

    $(".content__minus").click(function (e) {
        const id = e.delegateTarget.attributes[1].nodeValue
        var qty = $(`#ip_${id}`).val();
        // alert(qty);
        var data = { id: id, qty: qty };
        // // alert(id);
        $.ajax({
            url: 'http://localhost:1339/lphufstack/update',
            method: 'POST',
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            success: function (data) {
                $(`#sub_total-${id}`).text(data.price);
                $(`#sub_repontotal-${id}`).text(data.price);
                $("#numCart").text(data.num_cart);
                $("#total").text(data.total);
                $("#totalrepon").text(data.total);
                // $(".table-responsive #sub_total-" + id).text(data.sub_total);
                // $(".total-price strong").text(data.total);
                // $(".shopping-cart span").text(data.num_order);
                // console.log(data);
            },
            error: function (xhr, ajaxOption, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
    // Tìm kiếm
    $("#search_name").keyup(function () {
        var action = "search";
        var search_name = $("#search_name").val();
        if ($("#search_name").val() != '') {
            $.ajax({
                url: 'http://localhost:1339/lphufstack/get_search',
                method: 'POST',
                data: { action: action, search_name: search_name },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'text',
                success: function (data) {
                    $(".pr-list").html(data);
                    // console.log(data);
                },
                error: function (xhr, ajaxOption, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });
        } else {
            $(".pr-list").html("");
        }
    });
    // Ẩn alert
    $('.alert__success').show(function(){
        setTimeout(function () {
            $('.alert__success').hide();
        }, 6000);
    });

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
// document.querySelector('a.t').addEventListener('click', (event) => {
//     event.preventDefault();
//     Swal.fire({
//         title: 'Are you sure?',
//         text: "You won't be able to revert this!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             Swal.fire(
//                 'Deleted!',
//                 'Your file has been deleted.',
//                 'success'
//             )
//         }
//     })
// })
// function myCart(id){
//     window. = 'http://localhost:1339/lphufstack/cart/addCart/'+id;
// }


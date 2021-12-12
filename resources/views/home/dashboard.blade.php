@extends('layouts.container')
@section('title')
    LVP Vietnam
@endsection
<style>
    @media (max-width: 739px) {
        .owl-carousel .owl-item img {
            display: block;
            width: 100% !important;
            height: 33vh !important;
        }
    }

    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        display: none !important;
    }

    .owl-carousel .owl-dots.disabled,
    .owl-carousel .owl-nav.disabled {
        display: none!important;
    }
    span[aria-label="Next"]{
        display: none!important;
    }
    /* .owl-dots{
        display: block!important;
    } */

</style>
<?php $url = 'http://localhost:1339/Admin/'; ?>
@section('content')
    <div class="content__slider">
        <div class="owl-carousel owl-theme">
            @foreach ($sliders as $slider)
                <div class="item content__item">
                    <img class="" src="{{ "$url/" . $slider->slider_img }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 5000,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        });
    </script>
    <div class="content__product">
        <nav class="content__navbar">
            <ul class="content__navbar-list">
                @foreach ($list_cat_sofa as $sofa)
                    <li class="content__navbar-item wow bounceInUp" data-wow-delay="0.8s">
                        <a href="{{ $sofa->url = Route('product.categoryProduct', $sofa->id) }}">
                            <div class="content__img">
                                <img src="public/images/product-3.jpg" alt="">
                            </div>
                            <div class="content__overlay"></div>
                            <div class="content__divtext">
                                <h3>{{ $sofa->product_cat_title }}</h3>
                                <div class="content__more">
                                    <span class="content__readmore">Xem thêm <i
                                            class="fas fa-long-arrow-alt-right"></i></span>
                                </div>
                            </div>
                            <div class="content__title2">
                                <span>Sofa</span>
                            </div>
                        </a>
                    </li>
                @endforeach
                @foreach ($list_cat_chair as $chair)
                    <li class="content__navbar-item wow bounceInUp" data-wow-delay="0.7s">
                        <a href="{{ $chair->url = Route('product.categoryProduct', $chair->id) }}">
                            <img src="public/images/product-4.jpg" alt="">
                            <div class="content__overlay"></div>
                            <div class="content__divtext">
                                <h3>{{ $chair->product_cat_title }}</h3>
                                <div class="content__more">
                                    <span class="content__readmore">Xem thêm <i
                                            class="fas fa-long-arrow-alt-right"></i></span>
                                </div>
                            </div>
                            <div class="content__title2">
                                <span>Ghế</span>
                            </div>
                        </a>
                    </li>
                @endforeach
                @foreach ($list_cat_table as $table)
                    <li class="content__navbar-item wow bounceInUp" data-wow-delay="0.6s">
                        <a href="{{ $table->url = Route('product.categoryProduct', $table->id) }}">
                            <img src="public/images/product-5.jpg" alt="">
                            <div class="content__overlay"></div>
                            <div class="content__divtext">
                                <h3>{{ $table->product_cat_title }}</h3>
                                <div class="content__more">
                                    <span class="content__readmore">Xem thêm <i
                                            class="fas fa-long-arrow-alt-right"></i></span>
                                </div>
                            </div>
                            <div class="content__title2">
                                <span>Bàn</span>
                            </div>
                        </a>
                    </li>
                @endforeach
                @foreach ($list_cat_bed as $bed)
                    <li class="content__navbar-item wow bounceInUp" data-wow-delay="0.5s">
                        <a href="{{ $bed->url = Route('product.categoryProduct', $bed->id) }}">
                            <img src="public/images/product-6.jpg" alt="">
                            <div class="content__overlay"></div>
                            <div class="content__divtext">
                                <h3>{{ $bed->product_cat_title }}</h3>
                                <div class="content__more">
                                    <span class="content__readmore">Xem thêm <i
                                            class="fas fa-long-arrow-alt-right"></i></span>
                                </div>
                            </div>
                            <div class="content__title2">
                                <span>Giường</span>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="content__title">
        <h2 class="wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;"><span class="content__introduce">Giới thiệu về</span> <span
                class="content__logo">LVP</span></h2>
    </div>
    <div class="content__intro-show">
        <div class="content__intro-list">
            <p class="wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Việc ra đời của LVP là cả quá trình đúc kết, tìm hiểu về đặc thù
                của từng loại không gian và các xu
                hướng sở thích khác nhau từ người sử dụng. Những nghiên cứu kỹ lưỡng đó được kết hợp khéo léo cùng tài năng
                của các nhà thiết kế nổi tiếng Châu Âu, tạo nên dòng sản phẩm trang trí, đồ nội thất đẹp có độ ứng dụng cao
                với nhiều loại hình không gian khác nhau. Gần gũi và ấm cúng cho nhà ở; cởi mở và thời trang cho khách sạn;
                chuyên nghiệp, năng động khi sử dụng cho văn phòng... phong thái từ các thiết kế của LVP luôn tạo được
                sức hút bởi tính đa chiều trong cảm xúc mà chúng mang lại cho không gian.</p>
        </div>
        <div class="content__intro-pic wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">
            <img src="public/images/intro.jpg" alt="">
            <h4>L V P</h4>
        </div>
        <div class="content__title-live">
            <h2 class="wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Không gian sống <span>châu âu</span></h2>
        </div>
        <div class="content__intro-list">
            <p class="wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Đất nước Đan Mạch ghi dấu trong mọi lĩnh vực từ nghệ thuật, kiến
                trúc, khoa học công nghệ, bề dày lịch sử
                cho đến phúc lợi xã hội. Những thành tựu đó đã tạo nên nền tảng vững chắc để đảm bảo cho nhịp sống thanh
                bình, biết trân trọng các giá trị chân thực và luôn sáng tạo để mang đến những điều tốt đẹp cho cuộc sống.
                Đặc biệt hơn nữa, yếu tố tinh thần này luôn thể hiện rõ nét trong từng góc sống, từng tổ ấm của người dân
                nơi đây. Đất nước Đan Mạch ghi dấu trong mọi lĩnh vực từ nghệ thuật, kiến trúc, khoa học công nghệ, bề dày
                lịch sử cho đến phúc lợi xã hội. Những thành tựu đó đã tạo nên nền tảng vững chắc để đảm bảo cho nhịp sống
                thanh bình, biết trân trọng các giá trị chân thực và luôn sáng tạo để mang đến những điều tốt đẹp cho cuộc
                sống. Đặc biệt hơn nữa, yếu tố tinh thần này luôn thể hiện rõ nét trong từng góc sống, từng tổ ấm của người
                dân nơi đây.</p>
        </div>
        <div class="content__intro-pic wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">
            <img src="public/images/intro-2.jpg" alt="">
            <h4>L V P</h4>
        </div>
    </div>
    <div class="content__newspaper">
        <h1>Tin tức</h1>
        <nav class="content__newspapernavbar">
            <ul class="content__newspaper-list">
                @php
                    $t=0;    
                @endphp
                @foreach ($posts as $post)
                @php
                    $t=$t+0.3;   
                @endphp
                    <li class="content__newspaper-item wow fadeInLeft animated" data-wow-delay="{{$t}}s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <div class="content__newspaper-img">
                            <a href="{{ $post->post_url = Route('post.detailPost', $post->id) }}"><img
                                    class="content__newspaper-show-img" src="{{ "$url/" . $post->post_thumb }}"
                                    alt=""></a>
                        </div>
                        <div class="content__newspaper-name">
                            <a
                                href="{{ $post->post_url = Route('post.detailPost', $post->id) }}">{{ $post->post_title }}</a>
                        </div>
                        <div class="content__newspaper-move">
                            <a href="{{ $post->post_url = Route('post.detailPost', $post->id) }}">Xem thêm <i
                                    class="fas fa-long-arrow-alt-right content__move-icon"></i></a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
@endsection

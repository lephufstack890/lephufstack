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
                                    <span class="content__readmore">Xem th??m <i
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
                                    <span class="content__readmore">Xem th??m <i
                                            class="fas fa-long-arrow-alt-right"></i></span>
                                </div>
                            </div>
                            <div class="content__title2">
                                <span>Gh???</span>
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
                                    <span class="content__readmore">Xem th??m <i
                                            class="fas fa-long-arrow-alt-right"></i></span>
                                </div>
                            </div>
                            <div class="content__title2">
                                <span>B??n</span>
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
                                    <span class="content__readmore">Xem th??m <i
                                            class="fas fa-long-arrow-alt-right"></i></span>
                                </div>
                            </div>
                            <div class="content__title2">
                                <span>Gi?????ng</span>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="content__title">
        <h2 class="wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;"><span class="content__introduce">Gi???i thi???u v???</span> <span
                class="content__logo">LVP</span></h2>
    </div>
    <div class="content__intro-show">
        <div class="content__intro-list">
            <p class="wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Vi???c ra ?????i c???a LVP l?? c??? qu?? tr??nh ????c k???t, t??m hi???u v??? ?????c th??
                c???a t???ng lo???i kh??ng gian v?? c??c xu
                h?????ng s??? th??ch kh??c nhau t??? ng?????i s??? d???ng. Nh???ng nghi??n c???u k??? l?????ng ???? ???????c k???t h???p kh??o l??o c??ng t??i n??ng
                c???a c??c nh?? thi???t k??? n???i ti???ng Ch??u ??u, t???o n??n d??ng s???n ph???m trang tr??, ????? n???i th???t ?????p c?? ????? ???ng d???ng cao
                v???i nhi???u lo???i h??nh kh??ng gian kh??c nhau. G???n g??i v?? ???m c??ng cho nh?? ???; c???i m??? v?? th???i trang cho kh??ch s???n;
                chuy??n nghi???p, n??ng ?????ng khi s??? d???ng cho v??n ph??ng... phong th??i t??? c??c thi???t k??? c???a LVP lu??n t???o ???????c
                s???c h??t b???i t??nh ??a chi???u trong c???m x??c m?? ch??ng mang l???i cho kh??ng gian.</p>
        </div>
        <div class="content__intro-pic wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">
            <img src="public/images/intro.jpg" alt="">
            <h4>L V P</h4>
        </div>
        <div class="content__title-live">
            <h2 class="wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Kh??ng gian s???ng <span>ch??u ??u</span></h2>
        </div>
        <div class="content__intro-list">
            <p class="wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">?????t n?????c ??an M???ch ghi d???u trong m???i l??nh v???c t??? ngh??? thu???t, ki???n
                tr??c, khoa h???c c??ng ngh???, b??? d??y l???ch s???
                cho ?????n ph??c l???i x?? h???i. Nh???ng th??nh t???u ???? ???? t???o n??n n???n t???ng v???ng ch???c ????? ?????m b???o cho nh???p s???ng thanh
                b??nh, bi???t tr??n tr???ng c??c gi?? tr??? ch??n th???c v?? lu??n s??ng t???o ????? mang ?????n nh???ng ??i???u t???t ?????p cho cu???c s???ng.
                ?????c bi???t h??n n???a, y???u t??? tinh th???n n??y lu??n th??? hi???n r?? n??t trong t???ng g??c s???ng, t???ng t??? ???m c???a ng?????i d??n
                n??i ????y. ?????t n?????c ??an M???ch ghi d???u trong m???i l??nh v???c t??? ngh??? thu???t, ki???n tr??c, khoa h???c c??ng ngh???, b??? d??y
                l???ch s??? cho ?????n ph??c l???i x?? h???i. Nh???ng th??nh t???u ???? ???? t???o n??n n???n t???ng v???ng ch???c ????? ?????m b???o cho nh???p s???ng
                thanh b??nh, bi???t tr??n tr???ng c??c gi?? tr??? ch??n th???c v?? lu??n s??ng t???o ????? mang ?????n nh???ng ??i???u t???t ?????p cho cu???c
                s???ng. ?????c bi???t h??n n???a, y???u t??? tinh th???n n??y lu??n th??? hi???n r?? n??t trong t???ng g??c s???ng, t???ng t??? ???m c???a ng?????i
                d??n n??i ????y.</p>
        </div>
        <div class="content__intro-pic wow fadeInUp animated" data-wow-duration = "2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">
            <img src="public/images/intro-2.jpg" alt="">
            <h4>L V P</h4>
        </div>
    </div>
    <div class="content__newspaper">
        <h1>Tin t???c</h1>
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
                            <a href="{{ $post->post_url = Route('post.detailPost', $post->id) }}">Xem th??m <i
                                    class="fas fa-long-arrow-alt-right content__move-icon"></i></a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
@endsection

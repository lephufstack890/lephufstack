<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="{{ url('public/fonts/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css" />
    <!-- link global css import -->
    <link rel="stylesheet" href="{{ url('/public/css/index.css') }}">
    <!-- <script src="public/slider/owlcarousel/owl.carousel.js"></script> -->
    <link rel="stylesheet" href=".css">
    <script src="{{ url('public/js/jquery.js') }}"></script>
    <script src="{{ url('public/js/wow.js') }}"></script>
    <script src="{{ url('public/elevatezoom-master/jquery.elevatezoom.js') }}"></script>
    <link rel="stylesheet" href="{{ url('public/slider/owlcarousel/asset/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.min.css">
    <script src="{{ url('public/slider/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('public/js/main.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.min.js"></script>
    <link rel="icon" href="{{ url('public/images/icon-lvp.png') }}" sizes="512x512">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0"
        nonce="flMLp1y5"></script>
    <title id="hdtitle">@yield('title')</title>
</head>

<body>
    <?php $list_cat = DB::table('add_cat_posts')->get(); ?>
    <?php $list_cat_product = DB::table('cat_products')->get(); ?>
    <?php $list_cat_page = DB::table('cat_pages')
        ->where('id', 4)
        ->get(); ?>
    <?php $url = 'http://localhost:1339/Admin/'; ?>
    <div class="wrapper">
        <!-- HEADER -->
        <header id="header">
            <div class="header">
                <div class="header__logo">
                    <a href="{{ url('/') }}">
                        <h2>LVP</h2>
                    </a>
                </div>
                <div class="header__navbar">
                    <nav class="header__navbar">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item"><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li class="header__navbar-item">
                                <a href="#" class="slide_show">Sản phẩm</a>
                                <div class="header__product">
                                    <ul class="header__product-list">
                                        <li>
                                            <div class="header__product-menu">
                                                <div class="header__menu-close">
                                                    <div class="header__menu-inner--x">
                                                        <p>Back</p>
                                                    </div>
                                                </div>
                                                <div class="container header__container-menu">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="header__product-name">Sản phẩm</div>
                                                            <ul class="header__product-menu--list">
                                                                @foreach ($list_cat_product as $cat)
                                                                    @if ($cat->product_cat_id == 0)
                                                                        <?php $list_cat_pr_lv2 = DB::table('cat_products')
                                                                            ->where('product_cat_id', $cat->id)
                                                                            ->get(); ?>
                                                                        <li class="header__product-menu--item">
                                                                            <a href="#" class="sub_cat"
                                                                                data-id="{{ $cat->id }}">
                                                                                {{ $cat->product_cat_title }}
                                                                            </a>
                                                                            <ul class="header__product-submenu-{{ $cat->id }} hide"
                                                                                style="display: none; position: absolute; left: 223px; top: 71px">
                                                                                @foreach ($list_cat_pr_lv2 as $cat_lv2)
                                                                                    <li
                                                                                        class="header__product-submenu--item">
                                                                                        <a
                                                                                            href="{{ $cat_lv2->url = Route('product.categoryProduct', $cat_lv2->id) }}">{{ $cat_lv2->product_cat_title }}</a>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="header__imgproduct">
                                                                <a href="#"><img
                                                                        src="{{ url('public/images/product-2.jpg') }}"
                                                                        alt="" class="img-fluid"></a>
                                                                <div class="header__allproduct">
                                                                    <a href="" class="header__allproduct-name">
                                                                        Sản phẩm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @foreach ($list_cat as $item)
                                @if ($item->post_cat_id == 0)
                                    <?php $list_cat_lv2 = DB::table('add_cat_posts')
                                        ->where('post_cat_id', $item->id)
                                        ->get(); ?>
                                    <li class="header__navbar-item">
                                        <a href="#">{{ $item->post_cat_title }}</a>
                                        <ul class="header__subnavbar-list">
                                            @foreach ($list_cat_lv2 as $item_lv2)
                                                <li class="header__subnavbar-item"><a
                                                        href="{{ $item_lv2->url = Route('post.listPost', $item_lv2->id) }}"><span>{{ $item_lv2->post_cat_title }}</span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                            @foreach ($list_cat_page as $cat)
                                <li class="header__navbar-item"><a
                                        href="{{ $cat->url = Route('page.listPage', $cat->id) }}">{{ $cat->page_cat }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                    <nav class="header__navbar-icon">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item--icon">
                                <a href="#"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="header__navbar-item--icon"><a href=""><i class="far fa-heart"></i></a></li>
                            <li class="header__navbar-item--icon">
                                <a href="#"><i class="far fa-user"></i></a>
                            </li>
                            <li class="header__navbar-item--icon">
                                <a href=""><i class="fas fa-cart-arrow-down"></i><span
                                        id="numCart">{{ Cart::count() }}</span></a>
                                <div class="header__cart">
                                    <i class="fas fa-caret-up"></i>
                                    <nav class="header__cartnavbar">
                                        <ul class="header__cart-list">
                                            @foreach (Cart::content() as $row)
                                                <li class="header__cart-item">
                                                    <a href=""><img src="{{ "$url/" . $row->options->thumbnail }}"
                                                            alt=""></a>
                                                    <div class="header__flexColunm">
                                                        <p class="header__cart-name">{{ $row->name }}</p>
                                                        <p><span
                                                                class="header__qty">{{ $row->qty }}</span>*<span
                                                                class="header__subprice">{{ number_format($row->price, 0, ',', '.') }}Đ</span>
                                                        </p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                    <div class="header__cart-show">
                                        <p class="header__total">TỔNG: <span>{{ Cart::total() }}VNĐ</span></p>
                                        <h3><a href="{{ url('/cart') }}">Xem giỏ hàng</a></h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__bars">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="header__overlay">
                    </div>
                </div>
                <!-- MENU-MOBILE-TABLET -->
                <div class="header__respon">
                    <div class="header__respon-head">
                        <h3>Main menu</h3>
                        <span class="header__respon-menu"><i class="fas fa-times"></i></span>
                    </div>
                    <nav class="header__responnavbar">
                        <ul class="header__respon-list">
                            <li class="header__respon-item">
                                <a href="{{ url('/') }}">Trang chủ</a>
                            </li>
                            <li class="header__respon-item">
                                <a href="#" class="slide_show">Sản phẩm</a>
                                <span class="header__respon-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                                <ul class="header__responproduct-list">
                                    <li>
                                        <div class="header__responproduct-menu">
                                            <div class="header__responmenu-close">
                                                <div class="header__responmenu-inner--x">

                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7 col-12">
                                                        <div class="header__respon-menu--name">Sản phẩm</div>
                                                        <ul class="header__respon-menu">
                                                            @foreach ($list_cat_product as $cat)
                                                                @if ($cat->product_cat_id == 0)
                                                                    <?php $list_cat_pr_lv2 = DB::table('cat_products')
                                                                        ->where('product_cat_id', $cat->id)
                                                                        ->get(); ?>
                                                                    <li class="header__respon-menu--item">
                                                                        <a href="#" class="sub_cat"
                                                                            data-id="{{ $cat->id }}">
                                                                            {{ $cat->product_cat_title }}
                                                                        </a>
                                                                        <ul class="header__responproduct-submenu-{{ $cat->id }} hide"
                                                                            style="display: none; padding-left: 10px">
                                                                            @foreach ($list_cat_pr_lv2 as $cat_lv2)
                                                                                <li
                                                                                    class="header__responproduct-submenu--item">
                                                                                    <a
                                                                                        href="{{ $cat_lv2->url = Route('product.categoryProduct', $cat_lv2->id) }}">{{ $cat_lv2->product_cat_title }}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-5 col-12">
                                                        <div class="header__responimgproduct">
                                                            <a href="#"><img
                                                                    src="{{ url('public/images/product-2.jpg') }}"
                                                                    alt="" class="img-fluid"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            @foreach ($list_cat as $item)
                                @if ($item->post_cat_id == 0)
                                    <li class="header__respon-item">
                                        <?php $list_cat_lv2 = DB::table('add_cat_posts')
                                            ->where('post_cat_id', $item->id)
                                            ->get(); ?>
                                        <a href="#">{{ $item->post_cat_title }}</a>
                                        <span class="header__respon-arrow">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <ul class="header__subrespon-list">
                                            @foreach ($list_cat_lv2 as $item_lv2)
                                                <li class="header__subrespon-item"><a
                                                        href="{{ $item_lv2->url = Route('post.listPost', $item_lv2->id) }}">{{ $item_lv2->post_cat_title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                            @foreach ($list_cat_page as $cat)
                                <li class="header__respon-item"><a
                                        href="{{ $cat->url = Route('page.listPage', $cat->id) }}">{{ $cat->page_cat }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <!-- END-MENU-MOBILE-TABLET -->
            </div>
            <div class="header__search">
                <form action="" method="post" class="header__formsearch">
                    <input type="text" name="search" class="header__input-search" id="search_name"
                        placeholder="Tìm kiếm">
                    <div class="container">
                        <div class="row pr-list">

                        </div>
                    </div>
                    <input type="submit" name="btn_search" value="Xem tất cả kết quả" class="header__submit-search">
                </form>
                <div class="header__close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="header__login">
                <div class="header__login-block">
                    <?php
                    if(empty(Auth::user()->fullname)){
                        ?>
                    <div class="login-box">
                        <div class="login-block">
                            {!! Form::open(['url' => 'reg/login', 'method' => 'POST', 'files' => true, 'id' => 'contact_us']) !!}
                            <div class="input-text clearfix">
                                <div class="col size_6">
                                    <input type="email" name="email" placeholder="Email (*)"
                                        class="header__login-input">
                                    @error('email')
                                        <p class="form-text text-danger" style="font-weight: bold; font-size: 12px">
                                            {{ $errors->first('email') }}</p>
                                    @enderror
                                </div>
                                <div class="col size_6 input-mg">
                                    <input type="password" name="password" id="" placeholder="Mật khẩu (*)"
                                        class="header__login-input">
                                    @error('password')
                                        <p class="form-text text-danger" style="font-weight: bold; font-size: 12px">
                                            {{ $errors->first('password') }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="login-success">

                            </div>
                            <div class="input-but">
                                <div class="btnLogin">
                                    <button type="submit" id="send_form" name="btn_login"
                                        class="header__login-submit">{{ __('Đăng nhập') }}</button>
                                </div>
                                <div class="btnRegis">
                                    <a href="{{ url('/regis') }}"><i class="fas fa-envelope-open-text"></i> Đăng
                                        ký</a>
                                </div>
                            </div>
                            {{-- <span id="res_message"></span> --}}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <?php
                    }else{
                        ?>
                    <div class="login-boxnone">
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <?php
            if(!empty(Auth::user()->fullname)){
                ?>
            <div class="header__logout">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    @isset(Auth::user()->fullname)
                        Đăng xuất
                    @endisset
                </a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <?php
            }
            ?>
            <?php
            if(empty(Auth::user()->fullname)){
                ?>
            <div class="header__overlay-user">
            </div>
            <?php
            }else{
            ?>
            <div class="header__overlay-usernone">
            </div>
            <?php
            }
            ?>
        </header>
        <!-- END-HEADER -->
        <!-- Content -->
        <div id="content-wp">
            <div id="content">
                @yield('content')
            </div>
        </div>
        <!-- END-Content -->
        <!-- FOOTER -->
        <footer id="footer">
            <div class="footer__contact">
                <div class="container footer__container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer__contact-wrapper">
                                <h2 class="footer__contact-title"><span>Liên hệ</span></h2>
                                <h5><strong>Địa chỉ: </strong><span class="footer__address">484 Lê Văn Việt, P.Tăng
                                        Nhơn Phú A, Quận 9,
                                        Tp.HCM</span></h5>
                                <p>
                                    <a href="" class="footer__phone"><i class="fas fa-phone"></i>
                                        <strong>Hotline:</strong> 0916743545</a>
                                    <a href="" class="footer__mail"><i class="fas fa-envelope-open-text"></i>
                                        tui.hrv@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form action="" method="post">
                                <div class="footer__form">
                                    <div class="col-lg-6 footer__form-inp">
                                        <div class="form-group">
                                            <input type="text" name="fullname" class="form-control"
                                                placeholder="Họ tên *">
                                        </div>
                                        <div class="form-group">
                                            <input type="phone" name="phone" class="form-control"
                                                placeholder="Điện thoại *">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 footer__form-inp">
                                        <div class="form-group">
                                            <textarea name="chat" id="" cols="30" rows="10" placeholder="Nội dung *"
                                                class="form-control"></textarea>
                                        </div>
                                        <input type="submit" name="btn_send" value="Gửi" class="footer__send">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        <!-- COPY RIGHT -->
        <div id="copyright">
            <div class="copyright__text">
                <h3><i>Copyright 2020 @ LVP</i></h3>
            </div>
        </div>
        <!-- END COPY RIGHT -->
    </div>

    <script src="public/js/jquery.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>


</body>

</html>

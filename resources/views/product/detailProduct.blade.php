@extends('layouts.container')
<?php $url = 'http://localhost:1339/Admin/'; ?>
@section('title')
    @foreach ($products as $product)
        {{ $product->product_lastname }}
    @endforeach
@endsection
@section('content')
    <div class="content__detailproduct-name">
        @foreach ($products as $product)
            <h1>{{ $product->product_lastname }}</h1>
            <div class="content__code">
                <h2>Mã sản phẩm: {{ $product->product_code }}</h2>
            </div>
        @endforeach
    </div>
    <div class="content__detailproduct">
        <div class="container content__detailproduct-container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="w3-content w3-display-container" style="max-width:800px">
                        @foreach ($slides as $slide)
                            <img class="mySlides" src="{{ "$url/" . $slide->product_slide_img }}" style="width:100%">
                        @endforeach
                        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle"
                            style="width:100%">
                            @foreach ($slides as $slide)
                                @for ($i = 0; $i <= $slide->product_slide_img; $i++)
                                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white"
                                        onclick="currentDiv(<?php echo $i; ?>)"></span>
                                @endfor
                            @endforeach
                        </div>
                        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @foreach ($products as $product)
                        <div class="content__detailproduct-info">
                            <div class="content__detailproduct-title">
                                <h2>{{ $product->product_cat }} {{ $product->product_lastname }}</h2>
                            </div>
                            <div class="content__desc">
                                {!! $product->product_desc !!}
                            </div>
                            <div class="content__status">
                                <p>Tình trạng: <span>{{ $product->product_status }}</span></p>
                            </div>
                            <div class="content__material">
                                <h3>Chất liệu</h3>
                                <ul class="content__material-list">
                                    <li class="content__material-item"><a href="">{{ $product->material_id }}</a></li>
                                </ul>
                                <div class="content__material-color">
                                    <h3>Màu sắc: <span>{{ $product->color_id }}</span></h3>
                                    <ul class="content__material-color--list">
                                        <li class="content__material-color--item"><a href="">{{ $product->color_id }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content__detailproduct-price">
                                <div class="content__price-old">
                                    <h3>{{ number_format($product->product_oldprice, 0, ',', '.') }} <span>VNĐ</span>
                                    </h3>
                                </div>
                                <div class="content__price-new">
                                    <h3><strong>{{ number_format($product->product_newprice, 0, ',', '.') }}</strong> VNĐ
                                    </h3>
                                </div>
                            </div>
                            <div class="content__addbuy">
                                <div class="content__buycart">
                                    <a class="buyCart" data-id="{{ $product->id }}" href="#" data-url = "{{ $product->url = Route('cart.addCart', $product->id) }}">Mua ngay</a>
                                </div>
                                <div class="content__addcart">
                                    <a class="addCart" data-id="{{ $product->id }}" href="#" data-url = "{{ $product->url = Route('cart.addCart', $product->id) }}" >Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="content__commentpost">
        <h2>Bình luận</h2>
        <div class="container content__commentpost-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content__comment-icon"><i class="far fa-comment-dots"></i></div>
                    <div class="content__caption">Bình luận bài viết</div>
                    <form action="" method="post">
                        <div class="content__star-list">
                            <span class="content__star-item"><i class="far fa-star"></i></span>
                            <span class="content__star-item"><i class="far fa-star"></i></span>
                            <span class="content__star-item"><i class="far fa-star"></i></span>
                            <span class="content__star-item"><i class="far fa-star"></i></span>
                            <span class="content__star-item"><i class="far fa-star"></i></span>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Bình luận"
                                class="content__comment form-control"></textarea>
                        </div>
                        <?php
                            if(empty(Auth::user()->fullname)){
                                ?>
                                    <div class="content__comment-send">
                                        <span>Hãy <a href="#">đăng nhập </a>để gửi bình luận</span>
                                        <input type="submit" name="btn_comment_send" class="comment_send" value="Gửi">
                                    </div>
                                <?php
                            }else {
                                ?>
                                <div class="content__comment-sendnone">
                                    <input type="submit" name="btn_comment_send" class="comment_send" value="Gửi">
                                </div>
                                <?php
                            }
                            ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="content__relatedproduct">
        <h2>Sản phẩm liên quan</h2>
        <div class="content__relatedproduct-list">
            <div class="container content__relatedproduct-container">
                <div class="row">
                    @foreach ($product_related as $item)
                        <div class="col-lg-4 col-sm-6">
                            <div class="content__relatedproduct-item">
                                <a href="{{ $item->url = Route('product.detailProduct', $item->id) }}"><img
                                        src="{{ "$url/" . $item->product_avatar }}" alt=""
                                        class="content__relatedproduct-img"></a>
                                <div class="content__relatedproduct-lastname">
                                    <a
                                        href="{{ $item->url = Route('product.detailProduct', $item->id) }}">{{ $item->product_lastname }}</a>
                                </div>
                                <div class="content__relatedproduct-fullname">
                                    <a href="{{ $item->url = Route('product.detailProduct', $item->id) }}">{{ $item->product_cat }}
                                        {{ $item->product_lastname }}</a>
                                </div>
                                <div class="content__relatedproduct-price">
                                    <p><strong>{{ number_format($product->product_newprice, 0, ',', '.') }}</strong> VNĐ
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.container')
<?php $url = 'http://localhost:1339/Admin/'; ?>
@section('title')
    @foreach ($imgs as $img)
        {{ $img->product_cat_title }}
    @endforeach
@endsection
<style>
    .content__product-bg,
    #sidebar {
        display: block !important;
    }

</style>
@section('content')
    @foreach ($list_product as $product)
        <input type="hidden" name="" id="category_save" value="<?php echo $product->product_id; ?>">
    @endforeach
    <div class="content__product-bg">
        <div class="content__product-images">
            @foreach ($imgs as $img)
                <img src="{{ "$url/" . $img->product_cat_thumb }}" alt="">
            @endforeach
            <h1 class="content__product-text wow rollIn" data-wow-delay="0.8s">Sản phẩm</h1>
        </div>
    </div>
    <div class="content__product-wp">
        <div class="col-lg-2 hide pl-0 pr-0 fixed_pc">
            <div class="sidebar">
                <div class="content__filter ">
                    <h2>CATEGORY</h2>
                    <ul class="content__filter-list">
                        @foreach ($list_catId as $catId)
                            @if ($catId->product_cat_id)
                                <?php $list_cat = DB::table('cat_products')
                                    ->where('product_cat_id', $catId->product_cat_id)
                                    ->get(); ?>
                                @foreach ($list_cat as $cat)
                                    <li class="content__filter-item"><a class="comment_selector-act"
                                            href="{{ $cat->url = Route('product.categoryProduct', $cat->id) }}">{{ $cat->product_cat_title }}</a>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="content__input-select">
                    <div class="content__cate-title">
                        Chất liệu <i class="fas fa-sort-down"></i>
                    </div>
                    <div class="content__cate-fil">
                        <ul class="content__cate-list">
                            @foreach ($list_material as $material)
                                <li class="content__cate-item"><a href="#" class="common_selector comment_selector-act"
                                        data-category="{{ $material->product_id }}"
                                        data-material="{{ $material->material_id }}">{{ $material->material_id }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="content__color">
                    <div class="content__color-title">
                        Màu sắc <i class="fas fa-sort-down"></i>
                    </div>
                    <div class="content__color-fil">
                        <ul class="content__color-list">
                            @foreach ($list_color as $color)
                                <li class="content__color-item"><a href="#"
                                        class="common_selector-color comment_selector-act"
                                        data-category="{{ $color->product_id }}"
                                        data-color="{{ $color->color_id }}">{{ $color->color_id }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="content__price">
                    <div class="content__price-title">
                        Giá <i class="fas fa-sort-down"></i>
                    </div>
                    <div class="content__price-fil">
                        <ul class="content__price-list">
                            <li class="content__price-item"><a href="#" class="common__selector-price comment_selector-act"
                                    data-price="3000000 AND 10000000">3tr-10tr</a></li>
                            <li class="content__price-item"><a href="#" class="common__selector-price comment_selector-act"
                                    data-price="10000000">>10tr</a></li>
                            <li class="content__price-item"><a href="#" class="common__selector-price comment_selector-act"
                                    data-price="1000000 AND 2000000">1tr-2tr</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-sm-6 full_pc pl-0 pr-0">
            <div class="breadcumb">
                @foreach ($list_title as $title)
                    <h5>Sản phẩm / <span>{{ $title->product_cat_title }}</span></h5>
                @endforeach
            </div>
            <div class="content__listProduct">
                <div class="content__fil-name">
                    @foreach ($list_title as $title)
                        <h2>{{ $title->product_cat_title }}</h2>
                    @endforeach
                </div>
                <nav class="content__filList">
                    @if (count($list_product) > 0)
                        <ul class="content__fil-list">
                            @foreach ($list_product as $item)
                                <li class="content__fil-item">
                                    <a href="{{ $item->url = Route('product.detailProduct', $item->id) }}"><img
                                            src="{{ "$url/" . $item->product_avatar }}" alt=""></a>
                                    <div class="content__fil-lastname">
                                        <a
                                            href="{{ $item->url = Route('product.detailProduct', $item->id) }}">{{ $item->product_lastname }}</a>
                                    </div>
                                    <div class="content__fil-fullname">
                                        <a href="{{ $item->url = Route('product.detailProduct', $item->id) }}">{{ $item->product_cat }}
                                            {{ $item->product_lastname }}</a>
                                    </div>
                                    <div class="content__fil-price">
                                        <p>{{ number_format($item->product_newprice, 0, ',', '.') }} VNĐ</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div class="text-center">
                            <img src="{{ url('public/images/empty.jpg') }}" alt="">
                            <h5 class="text-danger">Hiện tại không có sản phẩm nào!</h5>
                        </div>
                    @endif
                </nav>
            </div>
        </div>
    </div>
@endsection

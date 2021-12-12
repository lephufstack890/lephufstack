@extends('layouts.container')
@section('title')
    Giỏ hàng
@endsection
<?php $url = 'http://localhost:1339/Admin/'; ?>
@section('content')
    <div class="content__cart">
        <div class="content__cart-bg">
            <img src="{{ url('public/images/bg-3.jpg') }}" alt="">
            <h2>Giỏ hàng</h2>
        </div>
    </div>
    <div class="content__shoppingcart">
        <div class="container content__shoppingcart-container">
            <div class="col-lg-12">
                @if (Cart::count() > 0)
                    <h2>Giỏ hàng</h2>
                    <div class="content__cart-top">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td class="content__cart-no">STT</td>
                                        <td class="content__cart-name">SẢN PHẨM</td>
                                        <td class="content__cart-img">HÌNH ẢNH</td>
                                        <td class="content__cart-qty">SỐ LƯỢNG</td>
                                        <td class="content__cart-quantity">ĐƠN GIÁ[VNĐ]</td>
                                        <td class="content__cart-delete">XÓA</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $t = 0;
                                    @endphp
                                    @foreach (Cart::content() as $row)
                                        @php
                                            $t++;
                                        @endphp
                                        <tr>
                                            <td class="content__cart-no">{{ $t }}</td>
                                            <td class="content__cart-name">
                                                <h3>{{ $row->name }}</h3>
                                                {!! $row->options->product_desc !!}
                                            </td>
                                            <td class="content__cart-img">
                                                <a href=""><img src="{{ "$url/" . $row->options->thumbnail }}" alt=""></a>
                                            </td>
                                            <td class="content__cart-qty">
                                                <span class="content__minus" ariaHidden="{{ $row->id }}"><i
                                                        class="fas fa-minus"></i></span>
                                                <input type="text" data-id="{{ $row->id }}" id="ip_{{ $row->id }}"
                                                    name="proquantity[{{ $row->id }}]" value="{{ $row->qty }}"
                                                    class="content__input-qty">
                                                <span class="content__plus" ariaHidden="{{ $row->id }}"><i
                                                        class="fas fa-plus"></i></span>
                                            </td>
                                            <td class="content__cart-quantity" id="sub_total-{{ $row->id }}">
                                                {{ number_format($row->subtotal, 0, ',', '.') }}</td>
                                            <td class="content__cart-delete"><a class="deleteCart"
                                                    data-id="{{ $row->rowId }}" href="#"><i
                                                        class="far fa-trash-alt"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="content__cart-total">
                        <h3>Thành tiền:</h3>
                        <div class="content__cart-total--price"><strong id="total">{{ Cart::total() }}</strong> VNĐ</div>
                    </div>
                    <div class="content__wp">
                        <div class="content__cart-buycontinue">
                            <a href="{{ url('/') }}">Tiếp tục mua sắm</a>
                        </div>
                        <div class="content__cart-checkout">
                            <a href="{{ url('/checkout') }}">Thanh toán</a>
                        </div>
                    </div>
                @else
                    <h2>Giỏ hàng rỗng</h2>
                    <div class="cart__buy">
                        <a href="{{ url('/') }}">
                            <span>Mời bạn mua hàng</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
        <div class="content__cart-items">
            <div class="container content__cart-items--container">
                <div class="row">
                    <div class="col-lg-12">
                        @if (Cart::count() > 0)
                            <h2>Giỏ hàng</h2>
                            <ul class="content__cart-item--top">
                                <li class="content__respon-name">SẢN PHẨM</li>
                                <li class="content__respon-price">ĐƠN GIÁ[VNĐ]</li>
                            </ul>
                            <div class="content__append-item">
                                @php
                                    $t = 0;
                                @endphp
                                @foreach (Cart::content() as $row)
                                    @php
                                        $t++;
                                    @endphp
                                    <ul class="cart__group">
                                        <li class="content__respon-no">{{ $t }}</li>
                                        <div class="content__cart-wp">
                                            <li class="content__respon-img">
                                                <a href=""><img src="{{ "$url/" . $row->options->thumbnail }}"
                                                        alt=""></a>
                                            </li>
                                            <li class="content__respon-name">
                                                <h3>{{ $row->name }}</h3>
                                                {!! $row->options->product_desc !!}
                                            </li>
                                        </div>
                                        <div class="content__cart-wp">
                                            <li class="content__respon-qty">
                                                <span class="content__minus" ariaHidden="{{ $row->id }}"><i
                                                        class="fas fa-minus"></i></span>
                                                <input type="text" data-id="{{ $row->id }}"
                                                    id="iprpon_{{ $row->id }}" name="proquantity[{{ $row->id }}]"
                                                    value="{{ $row->qty }}" class="content__input-qty">
                                                <span class="content__plus" ariaHidden="{{ $row->id }}"><i
                                                        class="fas fa-plus"></i></span>
                                            </li>
                                            <li class="content__respon-quantity">
                                                <strong id="sub_repontotal-{{ $row->id }}">{{ number_format($row->subtotal, 0, ',', '.') }}</strong>
                                                <a class="deleteCart"
                                                data-id="{{ $row->rowId }}" href="#"><i class="far fa-trash-alt"></i></a>
                                            </li>
                                        </div>
                                    </ul>
                                @endforeach
                            </div>
                            <div class="content__cart-total">
                                <h3>Thành tiền:</h3>
                                <div class="content__cart-total--price"><strong id="totalrepon">{{ Cart::total() }}</strong> VNĐ</div>
                            </div>
                            <div class="content__wp">
                                <div class="content__cart-buycontinue">
                                    <a href="{{ url('/') }}">Tiếp tục mua sắm</a>
                                </div>
                                <div class="content__cart-checkout">
                                    <a href="{{ url('/checkout') }}">Thanh toán</a>
                                </div>
                            </div>
                        @else
                            <h2>Giỏ hàng rỗng</h2>
                            <div class="cart__buy">
                                <a href="{{ url('/') }}">
                                    <span>Mời bạn mua hàng</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

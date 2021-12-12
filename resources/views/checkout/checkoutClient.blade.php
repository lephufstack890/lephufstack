@extends('layouts.container')
@section('title')
    Thanh toán
@endsection
<style>
    .content__reg-form form {
        padding: 40px 24px 60px 25px !important;
    }

</style>
@section('content')
    <div class="content__checkout">
        <div class="content__checkout-bg">
            <img src="{{ url('public/images/bg-3.jpg') }}" alt="">
            <h2>Thanh toán</h2>
        </div>
    </div>
    <div class="content__reg-infomation">
        <div class="container content__reg-container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Thanh toán</h2>
                    <div class="content__reg-form">
                        {!! Form::open(['url' => 'checkout/storeaddOrder', 'method' => 'POST', 'files' => true, 'id' => 'myform']) !!}
                        @if (session('status'))
                            <div class="alert__success">
                                <h6>{{ session('status') }}</h6>
                            </div>
                        @endif
                        <div class="content__reg-input">
                            <div class="col-size-6 ">
                                <input type="text" name="fullname" value="" placeholder="Họ Và Tên (*)">
                                @error('fullname')
                                    <h6 class="form-text text-danger" style="font-weight: bold;">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="col-size-6 input-item">
                                <ul class="content__gender">
                                    <li>
                                        <label>
                                            <input type="radio" aria-label="radio" name="gender" value="Nam">
                                            <span class="radio-mark">

                                            </span>
                                            <span>Nam</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" aria-label="radio" name="gender" value="Nữ">
                                            <span class="radio-mark">

                                            </span>
                                            <span>Nữ</span>
                                        </label>
                                    </li>
                                </ul>
                                @error('gender')
                                    <h6 class="form-text text-danger" style="font-weight: bold;">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <div class="content__reg-input" style="margin-top: 10px">
                            <div class="col-size-6">
                                <input type="phone" name="phone" value="" placeholder="Điện Thoại (*)">
                                @error('phone')
                                    <h6 class="form-text text-danger" style="font-weight: bold;">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="col-size-6 input-item">
                                <input type="email" name="email" value="" placeholder="Email (*)">
                                @error('email')
                                    <h6 class="form-text text-danger" style="font-weight: bold;">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <div class="content__reg-input">
                            <div class="col content__reg-col">
                                <input type="text" name="address" value="" placeholder="Địa chỉ (*)">
                                @error('address')
                                    <h6 class="form-text text-danger" style="font-weight: bold;">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <div class="content__reg-input">
                            <div class="col content__reg-col">
                                <input type="text" name="city" value="" placeholder="Tỉnh / Thành Phố (*)">
                                @error('city')
                                    <h6 class="form-text text-danger" style="font-weight: bold;">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <div class="content__reg-input">
                            <div class="col-size-6">
                                <input type="username" name="username" value="" placeholder="Username (*)">
                                @error('username')
                                    <h6 class="form-text text-danger" style="font-weight: bold;">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="col-size-6 input-item">
                                <input type="password" name="password" value="" placeholder="Password (*)">
                                @error('password')
                                    <h6 class="form-text text-danger" style="font-weight: bold;">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <div class="content__reg-input">
                            <select name="pay" id="">
                                <option value="Chọn hình thức thanh toán">Chọn hình thức thanh toán</option>
                                <option value="Thanh toán tại nhà">Thanh toán tại nhà</option>
                                <option value="Thanh toán qua thẻ ngân hàng">Thanh toán qua thẻ ngân hàng</option>
                            </select>
                            @error('pay')
                                <h6 class="form-text text-danger" style="font-weight: bold;">{{ $message }}</h6>
                            @enderror
                        </div>
                        {!! Form::close() !!}
                        <div class="content__register">
                            {!! Form::submit('Đặt hàng', ['name' => 'btn_add', 'class' => 'btn btn-primary', 'form' => 'myform']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

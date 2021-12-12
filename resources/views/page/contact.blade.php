@extends('layouts.container')
@section('title')
    Liên hệ
@endsection
@section('content')
    <div class="content__detailpost-banner">
        <img src="{{ url('public/images/lh.jpg') }}" alt="">
        <h2>Liên hệ</h2>
    </div>
    <div class="content__contact-title">
        <h2>CÔNG TY TNHH LVP VIỆT NAM</h2>
    </div>
    <div class="content__contact">
        <div class="container contact__container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact__pc">
                        <p class="contact__representative"><i class="fas fa-user-tie"></i> Người đại diện: Lê Văn Phú</p>
                        <p class="contact__address"><i class="fas fa-map-marker-alt"></i> Địa chỉ: 484 Lê Văn Việt, Phường
                            Tăng
                            Nhơn, Quận 9, HCM</p>
                        <p class="contact__phone"><i class="fas fa-phone-alt"></i> 0916744545</p>
                        <p class="content__email"><i class="fas fa-envelope-open-text"></i> Email: tui.hrv@gmail.com</p>
                        <p><i class="fas fa-medal"></i> Bản quyền thuộc công ty LVP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact__layout">
        <?php $url = 'http://localhost:1339/Admin/'; ?>
        <div class="container contact__layout-container">
            <div class="row d-flex" style="justify-content: center;">
                @foreach ($pages as $page)
                    <div class="col-md-4 col-sm-12">
                        <div class="contact__item">
                            <div class="contact__pic">
                                <a href="{{ $page->url = Route('page.detailPage', $page->id) }}">
                                    <img src="{{ "$url/".$page->page_thumb }}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="contact__title">
                                <a href="{{ $page->url = Route('page.detailPage', $page->id) }}">{{$page->page_title}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

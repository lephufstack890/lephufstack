@extends('layouts.container')
@section('title')
    Liên hệ
@endsection
<?php $url = 'http://localhost:1339/Admin/'; ?>
@section('content')
    <div class="content__detailpost-banner">
        <img src="{{ url('public/images/lh.jpg') }}" alt="">
        <h2 content__newspaper-item wow fadeInLeft animated" data-wow-delay="0.7s"
            style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
            Liên hệ</h2>
    </div>
    <div class="content__contact-title">
        <h2>CÔNG TY TNHH LVP VIỆT NAM</h2>
    </div>
    <div class="content__detailpost-wp">
        @foreach ($page_detail as $page)
            <h1>{{ $page->page_title }}</h1>
        @endforeach
        <div class="content__detailpost-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content__detailpost-slider">
                            <div class="owl-carousel owl-theme">
                                @foreach ($pages as $page)
                                    <div class="item content__detailpost-item">
                                        <a href="{{ $page->url = Route('page.detailPage', $page->id) }}"
                                            class="content__detailpost-img"><img class="wow rollIn img-fluid"
                                                src="{{ "$url/" . $page->page_thumb }}" alt=""></a>
                                        <div class="content__detailpost-title">
                                            <a
                                                href="{{ $page->url = Route('page.detailPage', $page->id) }}">{{ $page->page_title }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content__load-detail">
            <div class="content__load-title">
                @foreach ($page_detail as $page)
                    <h1>{{ $page->page_title }}</h1>
                @endforeach
            </div>
            <div class="content__load-text">
                <div class="container content__load-container">
                    <div class="row">
                        @foreach ($page_detail as $page)
                            <div class="col-lg-12 text-left">
                                <div class="content__share">
                                    <div class="content__like">
                                        <span class="content__like-icon"><i class="far fa-thumbs-up"></i></span>
                                        <span class="content__like-circle" data-like="1">2</span>
                                    </div>
                                    <div class="content__fb">
                                        <div class="fb-share-button" data-href="https://www.facebook.com/ba.tu.50364"
                                            data-layout="button_count" data-size="large"><a target="_blank"
                                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fba.tu.50364&amp;src=sdkpreparse"
                                                class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                                    </div>
                                </div>
                                {!! $page->page_content !!}
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
        <div class="content__detailpost-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content__detailpost-slider">
                            <div class="owl-carousel owl-theme">
                                @foreach ($pages as $page)
                                    <div class="item content__detailpost-item">
                                        <a href="{{ $page->url = Route('page.detailPage', $page->id) }}"
                                            class="content__detailpost-img"><img class="wow rollIn img-fluid"
                                                src="{{ "$url/" . $page->page_thumb }}" alt=""></a>
                                        <div class="content__detailpost-title">
                                            <a
                                                href="{{ $page->url = Route('page.detailPage', $page->id) }}">{{ $page->page_title }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        400: {
                            items: 1
                        },
                        500: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                })
            });
        </script>
    </div>
@endsection

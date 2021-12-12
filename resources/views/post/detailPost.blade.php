@extends('layouts.container')
@section('title')
    @foreach ($post_detail as $post)
        {{ $post->post_title }}
    @endforeach
@endsection
<?php $post_url = 'http://localhost:1339/Admin/'; ?>
@section('content')
    <div class="content__detailpost-banner">
        <img src="{{ url('public/images/bg-post.png') }}" alt="">
        <h2>Tin tức</h2>
        <div class="content__detailpost-titl">
            @foreach ($post_detail as $post)
                <h3>{{ $post->post_cat }}</h3>
            @endforeach
        </div>
    </div>
    <div class="content__detailpost-wp">
        @foreach ($post_detail as $post)
            <h1>{{ $post->post_cat }}</h1>
        @endforeach
        <div class="content__detailpost-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content__detailpost-slider">
                            <div class="owl-carousel owl-theme">
                                @foreach ($posts as $post)
                                    <div class="item content__detailpost-item">
                                        <a href="{{ $post->post_url = Route('post.detailPost', $post->id) }}"
                                            class="content__detailpost-img"><img class="wow rollIn img-fluid"
                                                src="{{ "$post_url/" . $post->post_thumb }}" alt=""></a>
                                        <div class="content__detailpost-title">
                                            <a
                                                href="{{ $post->post_url = Route('post.detailPost', $post->id) }}">{{ $post->post_title }}</a>
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
                @foreach ($post_detail as $post)
                    <h1>{{ $post->post_title }}</h1>
                @endforeach
            </div>
            <div class="content__load-text">
                <div class="container content__load-container">
                    <div class="row">
                        @foreach ($post_detail as $post)
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
                                {!! $post->post_content !!}
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
                                @foreach ($posts as $post)
                                    <div class="item content__detailpost-item">
                                        <a href="{{ $post->post_url = Route('post.detailPost', $post->id) }}"
                                            class="content__detailpost-img"><img class="wow rollIn img-fluid"
                                                src="{{ "$post_url/" . $post->post_thumb }}" alt=""></a>
                                        <div class="content__detailpost-title">
                                            <a
                                                href="{{ $post->post_url = Route('post.detailPost', $post->id) }}">{{ $post->post_title }}</a>
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
                    margin: 5,
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

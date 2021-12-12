@extends('layouts.container')
<?php $post_url = 'http://localhost:1339/Admin/'; ?>
@section('title')
    @foreach ($post as $item)
        {{ $item->post_cat_title }}
    @endforeach
@endsection
<style>
    #sidebar {
        display: none
    }

</style>
@section('content')
    <div class="content__detailpost-banner">
        <img src="{{ url('public/images/bg-post-1.jpg') }}" alt="">
        <h2>Tin tức</h2>
        <div class="content__detailpost-titl">
            @foreach ($post as $item)
                <h3>{{ $item->post_cat_title }}</h3>
            @endforeach
        </div>
    </div>
    <div class="content__post-title">
        @foreach ($post as $item)
            <h2>{{ $item->post_cat_title }}</h2>
        @endforeach
    </div>
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-sm-6 wow flipOutX center" data-wow-delay="0.8s">
                    <div class="content__post-item">
                        <div class="content__post-img">
                            <a href="{{ $post->post_url = Route('post.detailPost', $post->id) }}"><img
                                    src="{{ "$post_url/" . $post->post_thumb }}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="content__post-createdAt">
                            <p>{{ $post->day_create }}</p>
                        </div>
                        <div class="content__post-text">
                            <a
                                href="{{ $post->post_url = Route('post.detailPost', $post->id) }}">{{ $post->post_title }}</a>
                        </div>
                        <div class="content__post-read">
                            <a href="{{ $post->post_url = Route('post.detailPost', $post->id) }}">Đọc thêm <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

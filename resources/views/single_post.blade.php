@extends('layouts.app')

@section('title', 'Sohojware | ' . $post->title)
@section('meta-description', $post->meta_description)
@section('meta-keywords', $post->meta_keywords)

@section('social_media')
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ $post->meta_description }}" />
    <meta property="og:url" content="{{ route('post', $post->slug) }}" />
    <meta property="og:image" content="{{ Voyager::image($post->image) }}" />
@endsection

@section('content')
    <div class="blog blog-post ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">

                    <h2 class="post-title">{{ $post->title }}</h2>
                    <div class="post-img-wrapper post-featured-area">
                        <img class="featured-img" loading="lazy" src="{{ Voyager::image($post->image) }}"
                            alt="{{ $post->title }}" title="{{ $post->title }}">
                    </div>
                </div>
                <div class="col-12 col-lg-9 mx-auto">
                    <div class="post-main-area">
                        <div class="post-info">

                            <a class="info post-date" href="#">
                                <i class="fas fa-history icon">
                                </i>{{ $post->created_at->format('M d Y') }}</a>
                        </div>
                        <div class="post-content">
                            {!! $post->body !!}
                        </div>
                    </div>
                    <x-button.button />
                </div>
            </div>
        </div>
    </div>

    <section class="blog blog-home mega-section" id="blog">
        <div class="container ">

            <div class="sec-heading">
                <div class="content-area"><span class="pre-title wow fadeInUp" data-wow-delay=".2s">post</span>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">Related <span class='hollow-text'>post</span>
                    </h2>
                </div>
                <div class="cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s"><a
                        class="cta-btn btn-solid   cta-btn btn-solid  " href="{{ route('posts') }}">see more posts<i
                            class="fa-solid fa-arrow-right icon"></i></a></div>
            </div>
            <div class="col-12">
                <div class="posts-grid">
                    <div class="row">
                        @foreach ($related_posts as $post)
                            <x-related_post :post="$post" />
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

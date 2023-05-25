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
                </div>
            </div>
        </div>
    </div>
@endsection

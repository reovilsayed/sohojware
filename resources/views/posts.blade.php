@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('posts') }}" />
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
    <style>
        .row {
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x));
        }
    </style>
@endsection
@section('content')
    <section id="slider" class="hero p-0 odd featured">
        <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-center">
                    <video class="full-image to-bottom" data-mask="70" playsinline autoplay muted loop>
                        <source src="https://nexgen-html.codings.dev/assets/videos/work.mp4" type="video/mp4" />
                    </video>
                    <div class="slide-content row text-center">
                        <div class="col-12 mx-auto inner">
                            <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Posts</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog blog-home mega-section  " id="blog">
        <div class="container ">
            <div class="sec-heading">
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">latest <span class='hollow-text'>news</span></h2>
            </div>
        </div>
        <div class="container">
            <x-posts :posts="$posts" />
        </div>
        </div>
    </section>
@endsection

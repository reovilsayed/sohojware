@extends('layouts.app')
@section('title', 'Sohojware | ' . $service->name)
@section('meta-description', $service->meta_description)
@section('meta-keywords', $service->meta_keywords)
@section('social_media')
    <meta property="og:title" content="{{ $service->seo_title }}" />
    <meta property="og:description"content="{{ $service->meta_description }}" />
    <meta property="og:url" content="{{ route('service', $service->slug) }}" />
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
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
                                    <li class="breadcrumb-item active" aria-current="page">{{ $service->name }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="single" class="section-1 single">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 p-0 text">
                    <div class="row intro m-0">
                        <div class="col-12">
                            <div class="title-icon">
                                <h4>{{ $service->name }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 align-self-center">
                            {!! $service->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

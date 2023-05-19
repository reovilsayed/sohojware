@extends('layouts.app')

@section('social_media')
    <meta property="og:title" content="{{ $portfolio->title }}" />
    <meta property="og:description"content="{{ $portfolio->body }}" />
    <meta property="og:url" content="{{ route('portfolio',$portfolio->slug) }}" />
@endsection
@section('css')

@endsection
@section('content')
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('new/assets/images/hero/inner-page-hero.jpg') }}"
            data-bg-opacity="1">
        </div>
        <div class="overlay-color" data-bg-opacity=".75"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Portfolio </h1>
                <nav aria-label="breadcrumb ">
                    <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{url('/')}}"><i
                                    class="fa-solid fa-house-chimney"></i>Home</a></li>
                        <li class="breadcrumb-item active">Portfolio / {{ $portfolio->title }}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="portfolio-single mega-section">
        <div class="container">
            <div class="featured-area">
                <div class="row">
                    <div class="col-12  mx-auto">
                        <div class="project-featured-img"><img class="featured-img " loading="lazy"
                                src="{{ Voyager::image($portfolio->image) }}" alt="featuerd image"></div>
                    </div>
                </div>
            </div>
            <div class="main-area">
                <div class="row">
                    <div class="col-12 col-lg-9  ">
                        <p>{!! $portfolio->body !!}</p>
                    </div>
                    <div class="col-12 col-lg-3  ">
                        <div class="info-area">
                            <div class="project-info">
                                <div class="row">
                                    <div class="col-6 col-lg-12">
                                        <div class="info">
                                            <h5 class="title"> client</h5>
                                            <p class="detail">{{ $portfolio->title }}</p><i
                                                class="fas fa-address-card icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <div class="info">
                                            <h5 class="title">category</h5>
                                            <p class="detail">Web Development</p><i class="fas fa-tasks icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <div class="info">
                                            <h5 class="title">date</h5>
                                            <p class="detail">{{$portfolio->created_at->format('d/m/y')}}</p><i class="fas fa-calendar-alt icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <div class="info">
                                            <h5 class="title">share</h5>
                                            <div class="sc-wrapper dir-row sc-size-40">
                                                <ul class="sc-list">
                                                    <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"
                                                            title="social media icon"><i
                                                                class="fab fa-facebook-f sc-icon"></i></a></li>
                                                    <li class="sc-item " title="youtube"><a class="sc-link" href="#0"
                                                            title="social media icon"><i
                                                                class="fab fa-youtube sc-icon"></i></a></li>
                                                    <li class="sc-item " title="instagram"><a class="sc-link" href="#0"
                                                            title="social media icon"><i
                                                                class="fab fa-instagram sc-icon"></i></a></li>
                                                    <li class="sc-item " title="twitter"><a class="sc-link" href="#0"
                                                            title="social media icon"><i
                                                                class="fab fa-twitter sc-icon"></i></a></li>
                                                </ul>
                                            </div><i class="fas fa-share-alt icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

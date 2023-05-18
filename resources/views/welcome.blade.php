@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ url('home') }}" />
@endsection
@section('content')
    <section class="page-hero  d-flex align-items-center" id="page-hero">
        <div class="overlay-photo-image-bg"
            data-bg-img="https://amincodes.com/html/one-pages/flex-it/assets/images/sections-bg-images/pattern-bg-1.jpg"
            data-bg-opacity=".2"></div>
        <div class="particles-js dots" id="particles-js"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="hero-text-area">
                        <div class="row">
                            <div class="col-12">
                                <div class="pre-title ">IT solutions </div>
                                <h1 class="hero-title  ">providing the best services & IT <span
                                        class="featured-text">solutions <svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 500 150" preserveAspectRatio="none">
                                            <path d="M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7">
                                            </path>
                                        </svg> </span><span class="design-element rounded-shape stripes"></span></h1>
                            </div>
                            <div class="col-10">
                                <p class="hero-subtitle ">
                                    We offer website development, mobile app creation, SEO, digital marketing, content
                                    writing, graphic design, and video editing services. Our diverse skill sets enable us to
                                    support businesses of all sizes and industries, empowering them to reach their target
                                    audience effectively.
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="cta-links-area ">
                                    <a class="btn-outline cta-link cta-link-primary nav-link menu-link"
                                        href="#services">Services</a>
                                    <div class="play-btn-row-dir ">
                                        <a class="video-link" href="https://www.youtube.com/watch?v=WLrT2T0LLiU"
                                            role="button" title="play" data-fancybox="data-fancybox">
                                            <div class="play-video-btn">
                                                <div class="play-btn"> <i class="fas fa-play icon"></i></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--start of image-area -->
                <div class="col-12   mx-md-auto col-lg-6 text-center " data-tilt>
                    <div class="hero-image-area mb-5 mb-lg-0">
                        <div class="hero-img-wraper  "><img class="img-fluid "
                                src="https://amincodes.com/html/one-pages/flex-it/assets/images/hero/illustration-1.png"
                                alt="" draggable="false"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-services :services="$services" />
    <x-about />
    <x-stats />
    <x-portfolio :portfolios="$portfolios" />
    <x-clients :clients="$clients" />
    <x-pricing />
    {{-- <x-testimonials /> --}}
    <x-faq />
    <x-blog :posts="$posts" />
   
@endsection

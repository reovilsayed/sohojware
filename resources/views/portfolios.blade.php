@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('portfolios') }}" />
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
                <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Portfolios </h1>
                <nav aria-label="breadcrumb ">
                    <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i
                                    class="fa-solid fa-house-chimney"></i>Home</a></li>
                        <li class="breadcrumb-item active">Portfolios</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <x-portfolio :portfolios="$portfolios" />
    <!-- End  portfolio Section-->
    <!-- Start  testimonials Section-->
   
    <!-- End  testimonials Section-->
    <!-- Start  our-clients Section-->
    <x-clients :clients="$clients" />
@endsection

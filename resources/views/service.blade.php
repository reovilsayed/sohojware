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
    <section class="d-flex align-items-center page-hero  inner-page-hero" id="page-hero">
        <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('new/assets/images/hero/inner-page-hero.jpg') }}"
            data-bg-opacity="1">
        </div>
        <div class="overlay-color" data-bg-opacity=".75"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Services </h1>
                <nav aria-label="breadcrumb ">
                    <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i
                                    class="fa-solid fa-house-chimney"></i>Home</a></li>
                        <li class="breadcrumb-item active">{{ $service->name }}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- Start inner Page hero-->
    <div class="service-single ">
        <div class="container">
            <div class="row">
                <!--Start service content-->
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
                <!--Start service content-->
                <!-- Start service sidebar-->
                <div class="col-12 col-xl-4">
                    <div class="service-sidebar ">
                        <div class="sidebar-pane">
                            <h2 class="sidebar-title">list of services</h2>
                            <ul class="list">
                                @foreach ($services as $service)
                                    <li class="list-item">
                                        <a href="{{ route('service', $service->slug) }}">{{ $service->name }} <i
                                                class="bi bi-arrow-right icon "></i></a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>

                    </div>
                </div>
                <!-- End service sidebar-->
            </div>
        </div>
    </div>
    <!-- End inner Page hero-->

@endsection

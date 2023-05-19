@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('contact') }}" />
@endsection

@section('css')

@endsection
@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
    <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('new/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1">
    </div>
    <div class="overlay-color" data-bg-opacity=".75"></div>
    <div class="container">
        <div class="hero-text-area centerd">
            <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Contact </h1>
            <nav aria-label="breadcrumb ">
                <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </nav>
        </div>
    </div>
</section>
    <section class="contact-us  mega-section  pb-0" id="contact-us">
        <div class="container">
            <section class="locations-section  mega-section ">
                <div class="sec-heading centered  ">
                    <div class="content-area">
                        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">our offices around the world</h2>
                    </div>
                </div>
                <div class=" contact-info-panel ">
                    <div class="info-section ">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="info-panel  wow fadeInUp" data-wow-delay=".4s ">
                                    <h4 class="location-title ">New york</h4>
                                    <div class="line-on-side "> </div>
                                    <p class="location-address">United States, 307 Wilshire, 2nd av. new york 3516.</p>
                                    <div class="location-card  "><i class="fa-regular fa-envelope icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title mt-0">email:</h6><a class="email link"
                                                href="mailto:yourname@example.com">info@example.com</a>
                                        </div>
                                    </div>
                                    <div class="location-card  "><i class="fa-solid fa-phone-volume icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title mt-0">phone:</h6><a class="tel link"
                                                href="tel:0123456789">+29876543210</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="info-panel  wow fadeInUp" data-wow-delay=".6s">
                                    <h4 class="location-title">London</h4>
                                    <div class="line-on-side "> </div>
                                    <p class="location-address">United kingdom, 12 smith town, 2nd av. London 2159.</p>
                                    <div class="location-card  a"><i class="fa-regular fa-envelope icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title mt-0">email:</h6><a class="email link"
                                                href="mailto:yourname@example.com">info@example.com</a>
                                        </div>
                                    </div>
                                    <div class="location-card  "><i class="fa-solid fa-phone-volume icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title mt-0">phone:</h6><a class="tel link"
                                                href="tel:0123456789">+969876543210</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="info-panel  wow fadeInUp" data-wow-delay=".8s">
                                    <h4 class="location-title">tokio</h4>
                                    <div class="line-on-side "> </div>
                                    <p class="location-address">Japan, 307 chinzo appy road, portsika way. tokio 3516.</p>
                                    <div class="location-card  "><i class="fa-regular fa-envelope icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title mt-0">email:</h6><a class="email link"
                                                href="mailto:yourname@example.com">info@example.com</a>
                                        </div>
                                    </div>
                                    <div class="location-card  "><i class="fa-solid fa-phone-volume icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title mt-0">phone:</h6><a class="tel link"
                                                href="tel:0123456789">+459876543210</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
       
           
        </div>
    </section>
@endsection
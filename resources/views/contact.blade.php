@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
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
            <section class="map-section  elf-section">
                <div class="sec-heading  centered   ">
                    <div class="content-area">
                        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">find us on google maps</h2>
                    </div>
                </div>
                <div class="map-box  wow fadeInUp" data-wow-delay=".6s">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe class="map-iframe" id="gmap_canvas"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2seg!4v1613762954590!5m2!1sen!2seg"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <x-contact />
        </div>
    </section>
@endsection

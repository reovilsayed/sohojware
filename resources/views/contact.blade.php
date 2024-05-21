@extends('layouts.app')
@section('title', 'Contact Us| Sohojware')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('contact') }}" />
@endsection

@section('css')
    <style>
        .header-basic a,
        .header-basic .menu-link {
            color: var(--clr-white) !important;
        }
    </style>
@endsection

@section('content')
    <x-breadcrumb title="Contact">
        {{ 'Contact' }}
    </x-breadcrumb>
    <section class="contact-us  mega-section  pb-0" id="contact-us">
        <div class="container">
            <x-contact :doNotShowOnTheseRoutes="[route('login'), route('register')]" />
            <section class="locations-section  mega-section ">
                <div class="sec-heading centered  ">
                    <div class="content-area">
                        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">our offices around the world</h2>
                    </div>
                </div>
                <div class=" contact-info-panel ">
                    <div class="info-section ">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <div class="info-panel wow fadeInUp h-100" data-wow-delay=".4s ">
                                    <h4 class="location-title">United States</h4>
                                    <div class="line-on-side"> </div>
                                    <p class="location-address">Warren st, Hudson, NY 12534.</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="info-panel wow fadeInUp h-100" data-wow-delay=".6s">
                                    <h4 class="location-title">Canada</h4>
                                    <div class="line-on-side "> </div>
                                    <p class="location-address">88 McGill Blvd W, Lethbridge, Alberta, CA</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="info-panel  wow fadeInUp h-100" data-wow-delay=".8s">
                                    <h4 class="location-title">Asia</h4>
                                    <div class="line-on-side "> </div>
                                    <p class="location-address">1215 Farmgate Dhaka, Bangladesh</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="info-panel  wow fadeInUp h-100" data-wow-delay=".8s">
                                    <h4 class="location-title">Bangladesh</h4>
                                    <div class="line-on-side "> </div>
                                    <p class="location-address">8200 Notullahbath Barisal, Bangladesh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection

@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
@endsection
@section('content')
    <!--End Page Header-->
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
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
                        <li class="breadcrumb-item active">services</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start  services Section-->
    <x-services :services="$services" />
    <!-- End  services Section-->
    <!-- Start  testimonials-->
    <section class="testimonials testimonials-1-col   has-dark-bg  mega-section " id="testimonials-img-bg">
        <div class="overlay-photo-image-bg parallax "
            data-bg-img="{{ asset('new/assets/images/sections-bg-images/1.jpg') }}" data-bg-opacity=".25"> </div>
        <div class="container">
            <div class="sec-heading  centered ">
                <div class="content-area"><span class=" pre-title       wow fadeInUp "
                        data-wow-delay=".2s">testimonials</span>
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">customers <span
                            class='hollow-text'>testmonials</span></h2>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-10  mx-auto">
                    <div class="swiper-container  wow fadeInUp  " data-wow-delay="0.2s">
                        <div class="swiper-wrapper">
                            <!--First Slide-->
                            <div class="swiper-slide">
                                <div class="testmonial-card d-flex align-items-center justify-content-center">
                                    <div class="testimonial-content">
                                        <div class="customer-img "><img class="img-fluid " loading="lazy"
                                                src="{{ asset('new/assets/images/testimonials/1.png') }}"
                                                alt="First Slide "></div>
                                        <div class="customer-testimonial">
                                            <div class="content">
                                                <p class="testimonial-text "> ipsum dolor sit amet consectetur adipisicing
                                                    elit. Quod, id sequi aut qui est ab, corporis quis maiores reiciendis
                                                    explicabo odio tenetur nulla sint vel.</p>
                                            </div>
                                        </div>
                                        <div class="customer-info ">
                                            <div class="customer-details">
                                                <p class="customer-name">Yusuf amin</p>
                                                <p class="customer-role">founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Second Slide-->
                            <div class="swiper-slide">
                                <div class="testmonial-card d-flex align-items-center justify-content-center">
                                    <div class="testimonial-content">
                                        <div class="customer-img "><img class="img-fluid " loading="lazy"
                                                src="{{ asset('new/assets/images/testimonials/2.png') }}"
                                                alt="First Slide "></div>
                                        <div class="customer-testimonial">
                                            <div class="content">
                                                <p class="testimonial-text "> ipsum dolor sit amet consectetur adipisicing
                                                    elit. Quod, id sequi aut qui est ab, corporis quis maiores reiciendis
                                                    explicabo odio tenetur nulla sint vel.</p>
                                            </div>
                                        </div>
                                        <div class="customer-info ">
                                            <div class="customer-details">
                                                <p class="customer-name">fouad osman</p>
                                                <p class="customer-role">officer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--third Slide-->
                            <div class="swiper-slide">
                                <div class="testmonial-card d-flex align-items-center justify-content-center">
                                    <div class="testimonial-content">
                                        <div class="customer-img "><img class="img-fluid " loading="lazy"
                                                src="{{ asset('new/assets/images/testimonials/3.png') }}"
                                                alt="First Slide "></div>
                                        <div class="customer-testimonial">
                                            <div class="content">
                                                <p class="testimonial-text "> ipsum dolor sit amet consectetur adipisicing
                                                    elit. Quod, id sequi aut qui est ab, corporis quis maiores reiciendis
                                                    explicabo odio tenetur nulla sint vel. </p>
                                            </div>
                                        </div>
                                        <div class="customer-info ">
                                            <div class="customer-details">
                                                <p class="customer-name">fairouz mhmd</p>
                                                <p class="customer-role">manager</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--navigation buttons-->
                        <div class="swiper-button-prev">
                            <div class="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <div class="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  testimonials-->
    <!-- Start  faq Section-->
    <section class="faq mega-section" id="faq">
        <div class="shape-top-left"></div>
        <div class="shape-bottom-right"></div>
        <div class="pattern-top-end-dir"></div>
        <div class="pattern-bottom-start-dir"></div>
        <div class="container">
            <div class="sec-heading  centered ">
                <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">FAQs</span>
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>frequently </span>
                        asked questions </h2>
                </div>
            </div>
            <!--Start Accordion List For FAQ-->
            <div class="faq-accordion " id="accordion">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card mb-2">
                            <div class="card-header " id="heading-1">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">are
                                        your service easy to use?</button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-1" aria-labelledby="collapse-1"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                        a
                                        bird on it squid single-origin coffee nulla assumenda
                                        shoreditch
                                        et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header " id="heading-2">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">will
                                        i receive future updates?</button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-2" aria-labelledby="collapse-2"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                        a
                                        bird on it squid single-origin coffee nulla assumenda
                                        shoreditch
                                        et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header " id="heading-3">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">is
                                        this services work in my country?</button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-3" aria-labelledby="collapse-3"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                        a
                                        bird on it squid single-origin coffee nulla assumenda
                                        shoreditch
                                        et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card mb-2">
                            <div class="card-header " id="heading-4">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">How
                                        much I will pay?</button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-4" aria-labelledby="collapse-4"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                        a
                                        bird on it squid single-origin coffee nulla assumenda
                                        shoreditch
                                        et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header " id="heading-5">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">are
                                        theres other fees?</button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-5" aria-labelledby="collapse-5"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                        a
                                        bird on it squid single-origin coffee nulla assumenda
                                        shoreditch
                                        et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header " id="heading-6">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6"> how
                                        can i sign up the contract?</button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-6" aria-labelledby="collapse-6"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt
                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                        a
                                        bird on it squid single-origin coffee nulla assumenda
                                        shoreditch
                                        et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  faq Section-->
    <!-- Start  take-action Section-->
    <section class="take-action elf-section has-dark-bg" id="take-action">
        <div class="overlay-photo-image-bg  " data-bg-img="assets/images/sections-bg-images/2.jpg" data-bg-opacity=".25">
        </div>
        <div class="cta-wrapper">
            <div class="container">
                <div class="sec-heading  centered mb-0 ">
                    <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">contact
                            us</span>
                        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">get in totch with us</h2>
                        <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit Omnis <br>id atque dignissimos repellat quae ullam.</p>
                    </div>
                </div>
                <!--Start .see-more-area-->
                <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link"
                        href="contact-us.html">contact us</a></div>
                <!--End Of .see-more-area        -->
            </div>
        </div>
    </section>
@endsection

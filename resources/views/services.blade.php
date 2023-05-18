@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('services') }}" />
@endsection

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
                                                <p class="testimonial-text ">SohojWare exceeded my expectations with their
                                                    web design and development services. They created a stunning and
                                                    user-friendly website that perfectly represents my brand. Their
                                                    attention to detail and commitment to delivering high-quality work is
                                                    commendable. I highly recommend SohojWare for anyone seeking top-notch
                                                    web solutions.</p>
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
                                                <p class="testimonial-text ">Working with SohojWare for app development was
                                                    a game-changer for my business. Their team crafted a seamless and
                                                    intuitive mobile application that has significantly enhanced our
                                                    customer experience. The expertise and professionalism of SohojWare are
                                                    unmatched, and I am thrilled with the results. Thank you for your
                                                    exceptional work</p>
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
                                                <p class="testimonial-text "> SohojWare's Web Design & Development services
                                                    have truly transformed my online presence. They crafted a visually
                                                    stunning and highly functional website that perfectly captures my
                                                    brand's essence. The team at SohojWare demonstrated exceptional
                                                    expertise and professionalism throughout the process. I couldn't be
                                                    happier with the results! </p>
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
                                    <p class="faq-answe">Our services are designed to be user-friendly and accessible.
                                        Whether you need web design and development, app development, WordPress
                                        customization, SEO assistance, or graphic design, we strive to provide a seamless
                                        and intuitive experience.</p>
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
                                    <p class="faq-answer">Yes, we strive to build long-term relationships with our clients.
                                        Depending on your specific project and requirements, we offer options for future
                                        updates, enhancements, and ongoing maintenance to keep your website or app up to
                                        date.</p>
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
                                    <p class="faq-answer">Yes, our services are available and can work in your country. We
                                        provide web design and development, app development, WordPress customization, SEO,
                                        and graphic design services to clients worldwide. Regardless of your location, we
                                        can collaborate remotely and effectively to meet your specific needs and deliver
                                        high-quality solutions. We adapt our services to accommodate clients from different
                                        countries and ensure a seamless experience throughout the project. </p>
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
                                    <p class="faq-answer">Our pricing structure is determined on a project-by-project
                                        basis, taking into account factors such as project complexity, required features,
                                        and customization needs. We offer competitive pricing and provide detailed quotes
                                        based on your specific requirements. </p>
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
                                    <p class="faq-answer">In addition to the project-specific pricing, there may be
                                        additional fees associated with services such as hosting and domain fees,
                                        third-party software or plugin fees, content creation or stock media fees, and
                                        ongoing maintenance and support fees. These fees vary depending on your specific
                                        requirements and are discussed and clarified during the project scoping phase.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header " id="heading-6">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6"> Do
                                        you offer post-launch support and maintenance?</button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-6" aria-labelledby="collapse-6"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">Yes, we offer post-launch support and maintenance services. We
                                        understand the importance of ongoing support to ensure your website or app continues
                                        to function optimally. We provide various support and maintenance packages tailored
                                        to your needs.</p>
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
                        <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">We value your feedback and are here to
                            assist you. Contact us today and experience exceptional customer service. Our dedicated team is
                            ready to address your inquiries and provide the assistance you need. Reach out to us now and let
                            us exceed your expectations!</p>
                    </div>
                </div>
                <!--Start .see-more-area-->
                <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link"
                        href="{{ route('contact') }}">contact us</a></div>
                <!--End Of .see-more-area        -->
            </div>
        </div>
    </section>
@endsection

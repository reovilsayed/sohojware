@extends('layouts.app')
@section('content')
    <!-- Start  Page hero-->
    <section class="page-hero  d-flex align-items-center" id="page-hero">
        <div class="overlay-photo-image-bg"
            data-bg-img="https://amincodes.com/html/one-pages/flex-it/assets/images/sections-bg-images/pattern-bg-1.jpg"
            data-bg-opacity=".2"></div>
        <div class="particles-js  dots" id="particles-js"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 ">
                    <!--Start of .hero-text-area-->
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
                                    We offer website development, mobile app creation, SEO, digital marketing, content writing, graphic design, and video editing services. Our diverse skill sets enable us to support businesses of all sizes and industries, empowering them to reach their target audience effectively.
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="cta-links-area ">
                                    <a class="btn-outline cta-link cta-link-primary nav-link menu-link" href="#services">Services</a>
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
    <!--End of .hero-text-area-->
    <!-- End  Page hero-->
    <!-- Start  services Section-->
    <section class="services services-boxed mega-section  " id="services">
        <div class="container">
            <div class="sec-heading  ">
                <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">services</span>
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>services</span> we
                        offer</h2>
                    <p class="subtitle wow fadeInUp" data-wow-delay=".6s">
                        Our services are designed to help businesses of all kinds unlock their full potential online. <br> Let us help you achieve your goals and reach your target audience effectively.
                    </p>
                </div>
                <!-- <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid    ">see all
                            services <i class="bi bi-arrow-right icon "></i></a></div> -->
            </div>
            <div class="row gx-4 gy-4 services-row ">
                @foreach ($services as $service)
                    <div class="col-12 col-md-6  col-lg-4 mx-auto ">
                        <!--Start First service box-->
                        <a href="{{ route('service', $service->slug) }}">
                            <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0"
                                data-wow-delay=".1s">
                                <div class="service-content">
                                    <h3 class="service-title">{{ $service->title }}</h3>
                                    <p class="service-text">
                                        {{ $service->short_description }}
                                    </p>
                                </div><a class="read-more" href="{{ route('service', $service->slug) }}">read more<i
                                        class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </a>
                        <!-- End First service box   -->
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End  services Section-->
    <!-- Start  about Section-->
    <section class="about mega-section" id="about">
        <div class="container">
            <!-- Start first about div-->
            <div class="content-block  ">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center order-1 order-lg-0 about-col pad-end  wow fadeInUp "
                        data-wow-delay="0.6s">
                        <div class="text-area ">
                            <div class="sec-heading  light-title ">
                                <div class="content-area"><span class=" pre-title       wow fadeInUp "
                                        data-wow-delay=".2s">about Us</span>
                                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span
                                            class='hollow-text'>trusted</span> by worldwide clients since<span
                                            class='featured-text'> 2015. <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 500 150" preserveAspectRatio="none">
                                                <path
                                                    d="M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7">
                                                </path>
                                            </svg></span></h2>
                                </div>
                            </div>
                            <p class=" about-text">
                                At our core, we prioritize building long-lasting relationships with our clients. For us, business is not the first priority - it's the relationship. We believe that establishing trust and understanding our clients' needs is crucial to delivering exceptional online solutions. Our commitment to client satisfaction and conducting business with the utmost professionalism has earned us the trust of clients worldwide. Let us help you build a strong online presence and achieve success - but first, let's build a relationship.
                            </p>
                            <div class="info-items-list ">
                                <div class="row ">
                                    <div class="col-9 col-xl-6">
                                        <div class="info-item"><i class="fa-solid fa-medal me-4 mt-2"
                                                style="font-size:30px"></i>
                                            <div class="info-content">
                                                <h5 class="info-title">Client Satisfaction</h5>
                                                <p class="info-text">
                                                    We prioritize client satisfaction above everything else. We take the time to understand your unique needs and deliver customized solutions that exceed your expectations. Our commitment to delivering exceptional service has earned us the trust of clients worldwide.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9 col-xl-6">
                                        <div class="info-item"><i class="fa-solid fa-vr-cardboard me-4 mt-2"
                                                style="font-size:30px"></i>
                                            <div class="info-content">
                                                <h5 class="info-title">Professionalism</h5>
                                                <p class="info-text">
                                                    We believe in conducting business with the utmost professionalism. From our communication with clients to our approach to project management, we maintain a high level of professionalism throughout the entire process. Our clients can trust us to deliver top-quality work and exceptional service every step of the way.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9 col-xl-6">
                                        <div class="info-item"><i class="fa-solid fa-map-location-dot me-4 mt-2"
                                                style="font-size:30px"></i>
                                            <div class="info-content">
                                                <h5 class="info-title">worldwide services </h5>
                                                <p class="info-text">
                                                    We provide our online services to clients worldwide, regardless of their location or industry. With our diverse skill set and commitment to client satisfaction, we offer comprehensive solutions that cater to all your online needs. Whether you're a small business or a large corporation, we're dedicated to helping you build a strong online presence and reach your target audience effectively. Trust us to deliver exceptional online solutions, no matter where you are in the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9 col-xl-6">
                                        <div class="info-item"><i class="fa-solid fa-headset me-4 mt-2"
                                                style="font-size:30px"></i>
                                            <div class="info-content">
                                                <h5 class="info-title">24/7 support </h5>
                                                <p class="info-text">
                                                    We understand that online presence is crucial for your business, and we're committed to providing uninterrupted support to ensure your online success. Our 24/7 support means that we're always available to assist you with any queries, issues or concerns you may have, regardless of the time or day. With our dedicated support team, you can rest assured that we're always here to help you achieve your online goals.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cta-area"><a class=" btn-solid reveal-start" href="#contact-us">Get in touch</a>
                                <!-- <div class="signature ">
                                    <div class="signature-img"></div>
                                    <div class="signature-name">CEO &amp; Founder </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center order-0 order-lg-1 about-col  wow fadeInUp"
                        data-wow-delay="0.2s">
                        <div class="img-area  " data-tilt>
                            <div class="image   "><img class="about-img img-fluid " loading="lazy"
                                    src="https://amincodes.com/html/one-pages/flex-it/assets/images/about/3.png"
                                    alt="Our vision"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End first about div-->
            <!-- Start first about div-->
            <div class="content-block  ">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-area  ">
                            <div class="image  " data-tilt><img class="about-img img-fluid " loading="lazy"
                                    src="https://amincodes.com/html/one-pages/flex-it/assets/images/about/1.png"
                                    alt="about"></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center about-col pad-start  wow fadeInUp "
                        data-wow-delay="0.6s">
                        <div class="text-area ">
                            <div class="sec-heading  light-title ">
                                <div class="content-area"><span class=" pre-title       wow fadeInUp "
                                        data-wow-delay=".2s">why choose us</span>
                                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Why our <span
                                            class='hollow-text'> customers</span> choose <span
                                            class='featured-text'>working <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 500 150" preserveAspectRatio="none">
                                                <path
                                                    d="M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7">
                                                </path>
                                            </svg></span> with us</h2>
                                </div>
                            </div>
                            <p class=" about-text">
                                Our customers choose us for our exceptional online solutions, diverse skill set, and commitment to client satisfaction. We prioritize building long-lasting relationships and conducting business with the utmost professionalism. With our top-quality work and exceptional service, clients worldwide trust us to help them build a strong online presence and achieve success.
                            </p>
                            <div class="info-items-list">
                                <div class="row ">
                                    <div class="col-12 ">
                                        <div class="info-item"><span class="info-number ">01.</span>
                                            <div class="info-content">
                                                <h5 class="info-title">latest technologies </h5>
                                                <p class="info-text">
                                                    We utilize the latest technologies to deliver cutting-edge online solutions that meet the needs of modern businesses. With our expertise in the latest tools and platforms, we're able to provide our clients with the most advanced online services available. Our commitment to staying up-to-date with the latest technologies ensures that we're always at the forefront of digital innovation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="info-item"><span class="info-number ">02.</span>
                                            <div class="info-content">
                                                <h5 class="info-title">Uniqe solutions </h5>
                                                <p class="info-text">
                                                    We provide unique solutions tailored to the specific needs of our clients. With our diverse skill set and experience, we're able to offer customized online solutions that help businesses stand out in today's competitive digital landscape. Our commitment to client satisfaction means that we prioritize delivering unique solutions that meet and exceed our clients' expectations.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="info-item"><span class="info-number ">03.</span>
                                            <div class="info-content">
                                                <h5 class="info-title">Powerful strategies </h5>
                                                <p class="info-text">
                                                    We offer powerful strategies to help businesses achieve their online goals. With our expertise in digital marketing, SEO, and other online services, we're able to create effective strategies that drive results. Our commitment to staying up-to-date with the latest trends and techniques ensures that we're always able to provide the most powerful strategies to our clients.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cta-area "><a class=" btn-solid " href="#contact-us">get in toutch</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End first about div-->
        </div>
    </section>
    <!-- End  about Section-->
    <!-- Start  stats Section-->
    <section class="stats js-stats-counter mega-section">
        <div class="overlay-photo-image-bg"
            data-bg-img="https://amincodes.com/html/one-pages/flex-it/assets/images/sections-bg-images/pattern-bg-3.jpg"
            data-bg-opacity=".2"></div>
        <div class="container">
            <div class="stats-inner">
                <div class="row ">
                    <!--Info One-->
                    <div class="col-12 col-md-6 col-lg-3 stat-box ">
                        <div class="stat-box-inner  " data-tilt="data-tilt"><i class="fa-solid fa-hands-holding-circle"
                                style="color: #0A6A9E; font-size:48px"></i>
                            <p class="stat-num "><span class="counter" data-from="10" data-to="750" data-speed="3000"
                                    data-refresh-interval="50"></span><span class="sign">+</span></p><span
                                class="stat-desc">finished projects</span>
                        </div>
                    </div>
                    <!--Info Two-->
                    <div class="col-12 col-md-6 col-lg-3 stat-box ">
                        <div class="stat-box-inner  " data-tilt="data-tilt"><i class="fa-regular fa-note-sticky"
                                style="color: #0A6A9E; font-size:48px"></i>
                            <p class="stat-num "><span class="counter" data-from="0" data-to="23" data-speed="3000"
                                    data-refresh-interval="50"></span><span class="sign">+</span></p><span
                                class="stat-desc">Created jobs</span>
                        </div>
                    </div>
                    <!--Info Three-->
                    <div class="col-12 col-md-6 col-lg-3 stat-box ">
                        <div class="stat-box-inner  " data-tilt="data-tilt"><i class="fa-regular fa-user"
                                style="color: #0A6A9E; font-size:48px"></i>
                            <p class="stat-num "><span class="counter" data-from="0" data-to="200" data-speed="3000"
                                    data-refresh-interval="50"></span><span class="sign">+</span></p><span
                                class="stat-desc">happy customers</span>
                        </div>
                    </div>
                    <!--Info Four-->
                    <div class="col-12 col-md-6 col-lg-3 stat-box ">
                        <div class="stat-box-inner  " data-tilt="data-tilt"><i class="fa-solid fa-bullseye"
                                style="color: #0A6A9E; font-size:48px"></i>
                            <p class="stat-num "><span class="counter" data-from="0" data-to="28" data-speed="3000"
                                    data-refresh-interval="50"></span><span class="sign">+</span></p><span
                                class="stat-desc">years Of exprience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  stats Section-->
    <!-- Start  portfolio-slider Section-->
    <section class="portfolio portfolio-blocks mega-section   " id="portfolio">
        <div class="container">
            <div class="sec-heading  ">
                <div class="content-area"><span class=" pre-title       wow fadeInUp "
                        data-wow-delay=".2s">portfolio</span>
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Awesome <span
                            class='hollow-text'>portfolio</span></h2>
                </div>
                <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid    "
                        href="portfolio-grid.html">see more <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
            <div class="portfolio-wrapper  ">
                <!--a menu of links to show the photos users needs   -->
                <ul class="portfolio-btn-list wow fadeInUp" data-wow-delay=".2s">
                    <li class="portfolio-btn active " data-filter="*">all</li>
                    <li class="portfolio-btn        " data-filter=".mobile">mobile</li>
                    <li class="portfolio-btn        " data-filter=".web">web apps</li>
                    <li class="portfolio-btn        " data-filter=".data">data analaysis</li>
                    <li class="portfolio-btn        " data-filter=".hosting">hosting</li>
                </ul>
                <div class="portfolio-group wow fadeIn" data-wow-delay=".4s">
                    <div class="row ">
                        <div class="col-12  col-md-6  col-lg-4  portfolio-item mobile ">
                            <div class="item   "><a class="portfolio-img-link"
                                    href="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/1.jpg"
                                    data-fancybox=".show-in-fancybox"><img class="portfolio-img   img-fluid "
                                        loading="lazy"
                                        src="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/1.jpg"
                                        alt="portfolio item photo" /></a>
                                <div class="item-info ">
                                    <h3 class="item-title">mobile apps</h3><i class="bi bi-eye icon "></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  col-md-6  col-lg-4  portfolio-item web  ">
                            <div class="item   "><a class="portfolio-img-link"
                                    href="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/2.jpg"
                                    data-fancybox=".show-in-fancybox"><img class="portfolio-img   img-fluid "
                                        loading="lazy"
                                        src="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/2.jpg"
                                        alt="portfolio item photo" /></a>
                                <div class="item-info ">
                                    <h3 class="item-title">cloud</h3><i class="bi bi-eye icon "></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  col-md-6  col-lg-4  portfolio-item data ">
                            <div class="item   "><a class="portfolio-img-link"
                                    href="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/3.jpg"
                                    data-fancybox=".show-in-fancybox"><img class="portfolio-img   img-fluid "
                                        loading="lazy"
                                        src="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/3.jpg"
                                        alt="portfolio item photo" /></a>
                                <div class="item-info ">
                                    <h3 class="item-title">data analaysis</h3><i class="bi bi-eye icon "></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  col-md-6  col-lg-4  portfolio-item mobile ">
                            <div class="item   "><a class="portfolio-img-link"
                                    href="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/4.jpg"
                                    data-fancybox=".show-in-fancybox"><img class="portfolio-img   img-fluid "
                                        loading="lazy"
                                        src="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/4.jpg"
                                        alt="portfolio item photo" /></a>
                                <div class="item-info ">
                                    <h3 class="item-title">hosting</h3><i class="bi bi-eye icon "></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  col-md-6  col-lg-4  portfolio-item hosting ">
                            <div class="item   "><a class="portfolio-img-link"
                                    href="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/5.jpg"
                                    data-fancybox=".show-in-fancybox"><img class="portfolio-img   img-fluid "
                                        loading="lazy"
                                        src="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/5.jpg"
                                        alt="portfolio item photo" /></a>
                                <div class="item-info ">
                                    <h3 class="item-title">SEO</h3><i class="bi bi-eye icon "></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  col-md-6  col-lg-4  portfolio-item mobile">
                            <div class="item   "><a class="portfolio-img-link"
                                    href="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/6.jpg"
                                    data-fancybox=".show-in-fancybox"><img class="portfolio-img   img-fluid "
                                        loading="lazy"
                                        src="https://amincodes.com/html/one-pages/flex-it/assets/images/portfolio/6.jpg"
                                        alt="portfolio item photo" /></a>
                                <div class="item-info ">
                                    <h3 class="item-title">other category</h3><i class="bi bi-eye icon "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  portfolio-slider Section-->
    <!-- Start  our-clients Section-->
    <section class="our-clients  mega-section   wow fadeInUp" id="our-clients" data-wow-delay="0.2s">
        <div class="container">
            <div class="sec-heading   centered ">
                <div class="content-area">
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">trusted by over 500 clients around the world
                    </h2>
                </div>
            </div>
            <div class=" clients-logos d-flex align-items-center justify-content-around flex-wrap">
                <!--Swiper-->
                <div class="swiper-container">
                    <div class="swiper-wrapper clients-logo-wrapper wow fadeIn " data-wow-delay=".02s">

                        @foreach ($clients as $client)
                            <div class="swiper-slide">
                                <div class="client-logo "><a href="{{ $client->link }}"><img class="img-fluid logo "
                                            loading="lazy" src="{{ Voyager::image($client->logo) }}" alt=" "></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing mega-section  " id="pricing">
        <div class="container">
            <div class="sec-heading  ">
                <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">pricing
                        plans</span>
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>affordable</span>
                        pricing plans</h2>
                    <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">
                        We offer competitive pricing to help small and start-up businesses build a strong online <br>
                        presence without compromising on quality. Please note that the pricing listed on our website<br>
                        is an estimate only and may vary based on the complexity of the project. We're committed to<br>
                        providing transparency and personalized quotes for each project to ensure that our clients<br>
                        get the best possible value for their budget.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12  col-md-6 col-xl-3  mx-auto price-plan ">
                    <div class="plan    wow fadeInUp  " data-wow-delay=".1s ">
                        <div class="plan-head">
                            <h4 class="plane-name">BASIC</h4>
                            <div class="plan-price">
                                <h3 class="price">200<sup class="currency-symbol">$</sup></h3>
                            </div>
                        </div>
                        <div class="plan-details">
                            <ul class="plan-list">
                                <li class="plan-feat"> <span class="feat-text">Small Ecommerce Website</span></li>
                                <li class="plan-feat"> <span class="feat-text">Small busness/Portfolio Website</span></li>
                                <li class="plan-feat"> <span class="feat-text">Free Images</span></li>
                                <li class="plan-feat"> <span class="feat-text">On Page Seo</span></li>
                                <li class="plan-feat"> <span class="feat-text">Google Analytics</span></li>
                                <li class="plan-feat"> <span class="feat-text">Google Index</span></li>
                                <li class="plan-feat"> <span class="feat-text">Search Console</span></li>
                                <li class="plan-feat"> <span class="feat-text">Single Payment Gateway</span></li>
                            </ul>
                        </div>
                        <div class="plan-cta"><a class="cta-btn btn-outline " href="#0">select plan </a></div>
                    </div>
                </div>
                <div class="col-12  col-md-6 col-xl-3  mx-auto price-plan ">
                    <div class="plan wow fadeInUp" data-wow-delay=".3s">
                        <div class="plan-head">
                            <h4 class="plane-name">Standerd</h4>
                            <div class="plan-price">
                                <h3 class="price">500<sup class="currency-symbol">$</sup></h3>
                            </div>
                        </div>
                        <div class="plan-details">
                            <ul class="plan-list">
                                <li class="plan-feat"><span class="feat-text">Mid Ecommerce Website</span></li>
                                <li class="plan-feat"><span class="feat-text">Small busness/Portfolio Website</span></li>
                                <li class="plan-feat"><span class="feat-text">Free Images</span></li>
                                <li class="plan-feat"><span class="feat-text">On Page Seo</span></li>
                                <li class="plan-feat"><span class="feat-text">Google Analytics</span></li>
                                <li class="plan-feat"><span class="feat-text">Google Index</span></li>
                                <li class="plan-feat"><span class="feat-text">Search Console</span></li>
                                <li class="plan-feat"><span class="feat-text">Single Payment Gateway</span></li>
                            </ul>
                        </div>
                        <div class="plan-cta"><a class="cta-btn btn-outline " href="#0">select plan </a></div>
                    </div>
                </div>
                <!--Third-plan-->
                <div class="col-12 col-md-6 col-xl-3  mx-auto price-plan ">
                    <div class="plan featured  wow fadeInUp  " data-wow-delay=".5s ">
                        <div class="plan-head">
                            <h4 class="plane-name">Pro Plan</h4>
                            <div class="plan-price">
                                <h3 class="price">1000<sup class="currency-symbol">$</sup></h3>
                            </div>
                        </div>
                        <div class="plan-details">
                            <ul class="plan-list">
                                <li class="plan-feat"><span class="feat-text"> 150 Lorem, ipsum dolor. </span></li>
                                <li class="plan-feat"><span class="feat-text"> 20 Lorem ipsum dolor sit . </span></li>
                                <li class="plan-feat"><span class="feat-text"> Lorem ipsum dolor sit. </span></li>
                                <li class="plan-feat"><span class="feat-text"> free Lorem ipsum dolor . </span></li>
                                <li class="plan-feat"><span class="feat-text"> added Lorem ipsum dolor. </span></li>
                            </ul>
                        </div>
                        <div class="plan-cta"><a class="cta-btn btn-outline " href="#0">select plan </a></div>
                    </div>
                </div>
                <!--fourth-plan-->
                <div class="col-12  col-md-6 col-xl-3  mx-auto price-plan ">
                    <div class="plan    wow fadeInUp  " data-wow-delay=".6s ">
                        <div class="plan-head">
                            <h4 class="plane-name">Custom</h4>
                            <div class="plan-price">

                            </div>
                        </div>
                        <div class="plan-details">
                            <ul class="plan-list">
                                <li class="plan-feat"> <span class="feat-text"> 150 Lorem, ipsum dolor. </span></li>
                                <li class="plan-feat "> <span class="feat-text"> 20 Lorem ipsum dolor sit . </span></li>
                                <li class="plan-feat "> <span class="feat-text"> Lorem ipsum dolor sit. </span></li>
                                <li class="plan-feat "> <span class="feat-text"> free Lorem ipsum dolor . </span></li>
                                <li class="plan-feat "> <span class="feat-text"> added Lorem ipsum dolor. </span></li>
                            </ul>
                        </div>
                        <div class="plan-cta"><a class="cta-btn btn-outline " href="#0">select plan </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  pricing Section-->
    <!-- Start  testimonials Section-->
    <section class="testimonials testimonials-1-col   has-dark-bg  mega-section " id="testimonials">
        <div class="overlay-photo-image-bg parallax "
            data-bg-img="https://amincodes.com/html/one-pages/flex-it/assets/images/sections-bg-images/1.jpg"
            data-bg-opacity=".25"> </div>
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
                                                src="https://amincodes.com/html/one-pages/flex-it/assets/images/testimonials/1.png"
                                                alt="First Slide "></div>
                                        <div class="customer-testimonial">
                                            <div class="content">
                                                <p class="testimonial-text "> ipsum dolor sit amet consectetur
                                                    adipisicing elit. Quod, id sequi aut qui est ab, corporis quis
                                                    maiores reiciendis explicabo odio tenetur nulla sint vel.</p>
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
                                                src="https://amincodes.com/html/one-pages/flex-it/assets/images/testimonials/2.png"
                                                alt="First Slide "></div>
                                        <div class="customer-testimonial">
                                            <div class="content">
                                                <p class="testimonial-text "> ipsum dolor sit amet consectetur
                                                    adipisicing elit. Quod, id sequi aut qui est ab, corporis quis
                                                    maiores reiciendis explicabo odio tenetur nulla sint vel.</p>
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
                                                src="https://amincodes.com/html/one-pages/flex-it/assets/images/testimonials/3.png"
                                                alt="First Slide "></div>
                                        <div class="customer-testimonial">
                                            <div class="content">
                                                <p class="testimonial-text "> ipsum dolor sit amet consectetur
                                                    adipisicing elit. Quod, id sequi aut qui est ab, corporis quis
                                                    maiores reiciendis explicabo odio tenetur nulla sint vel. </p>
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
                            <div class="left-arrow"><i class="fa-solid fa-arrow-left"></i>
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <div class="right-arrow"><i class="fa-solid fa-arrow-right "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  testimonials Section-->
    <!-- Start  faq Section-->
    <section class="faq mega-section   " id="faq">
        <div class="shape-top-left"></div>
        <div class="shape-bottom-right"></div>
        <div class="pattern-top-end-dir"></div>
        <div class="pattern-bottom-start-dir"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 align-self-center">
                    <div class="faq-img start-dir-img-frame wow fadeIn  " data-wow-delay="0.2s"><img class="img-fluid "
                            loading="lazy"
                            src="https://amincodes.com/html/one-pages/flex-it/assets/images/faq/faq-illustration.png"
                            alt=""></div>
                </div>
                <div class="col-12 col-lg-7 ">
                    <div class="sec-heading  ">
                        <div class="content-area"><span class=" pre-title       wow fadeInUp "
                                data-wow-delay=".2s">FAQs</span>
                            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>frequently
                                </span> asked questions </h2>
                        </div>
                    </div>
                    <!--Start Accordion List For FAQ-->
                    <div class="faq-accordion " id="accordion">
                        <div class="card mb-2">
                            <div class="card-header " id="heading-1">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        How do I get started with your services?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-1" aria-labelledby="collapse-1"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">
                                        Simply contact us through our website, and one of our team members will reach out to you to discuss your project and provide you with a quote.
                                    </p>
                                </div> 
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header " id="heading-1">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        What are the monthly subscription options available for website maintenance?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-1" aria-labelledby="collapse-1"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">
                                        We offer a range of monthly subscription options based on the complexity of your website and your specific maintenance needs. Our pricing starts from $100 per month, and we can tailor a subscription package to fit your unique requirements.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header " id="heading-3">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                        What is included in the website maintenance subscription?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-3" aria-labelledby="collapse-3"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">
                                        Our website maintenance subscription includes regular updates and backups, security checks and monitoring, performance optimization, content updates, and technical support. We ensure that your website is running smoothly and remains secure.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header " id="heading-2">
                                <h5 class="mb-0 faq-title">
                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                        How do you provide SEO services?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse " id="collapse-2" aria-labelledby="collapse-2"
                                data-bs-parent="#accordion">
                                <div class="card-body">
                                    <p class="faq-answer">
                                        Our SEO services include both on-page and off-page optimization techniques, article writing, and implementation of Google Analytics, Tag Manager, and Search Console. We customize our approach based on your budget and specific business needs. Our goal is to help you improve your website's visibility and ranking on search engines, and ultimately drive more traffic to your site.
                                    </p>
                                </div>
                            </div>
                        </div>

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
                                    <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high
                                        life
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
    <!-- Start  blog Section-->
    <section class="blog blog-home mega-section  " id="blog">
        <div class="container ">
            <div class="sec-heading  ">
                <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">blog</span>
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">latest <span class='hollow-text'>news</span>
                    </h2>
                </div>
                <div class=" cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s"><a
                        class="cta-btn btn-solid   cta-btn btn-solid  " href="blog-home-3-col.html">see all posts<i
                            class="bi bi-arrow-right icon "></i></a></div>
            </div>
            <div class="row ">
                <div class="col-12 ">
                    <div class="posts-grid ">
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-12 col-lg-4 ">
                                    <div class="post-box"> <a class="post-link" href="{{ route('post', $post->slug) }}"
                                            title="How litespeed technology works to speed up your site ">
                                            <div class="post-img-wrapper  "><img class=" parallax-img   post-img"
                                                    loading="lazy" src="{{ Voyager::image($post->image) }}"
                                                    alt="" /><span class="post-date"><span
                                                        class="day">{{ $post->created_at->format('d M Y') }} </span>
                                                </span></div>
                                        </a>
                                        <div class="post-summary">
                                            <div class="post-info"><a class="info post-cat" href="#"><i
                                                        class="fa-regular fa-bookmark me-2"></i>{{ $post->category->name }}</a><a
                                                    class="info post-author" href="#"> <i
                                                        class="fa-regular fa-user me-2"></i>Sayed Khan</a></div>
                                            <div class="post-text"><a class="post-link"
                                                    href="{{ route('post', $post->slug) }}">
                                                    <h2 class="post-title">{{ $post->title }} </h2>
                                                </a>
                                                <p class="post-excerpt">{{ $post->excerpt }}</p><a class="read-more"
                                                    href="{{ route('post', $post->slug) }}"
                                                    title="How litespeed technology works to speed up your site ">read
                                                    more<i class="fa-solid fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  blog Section-->
    <!-- Start  blog Section-->
    <section class="contact-us  mega-section  pb-0" id="contact-us">
        <div class="container">
            <section class="contact-us-form-section  mega-section  ">
                <div class="row">
                    <div class="col-12 ">
                        <div class="contact-form-panel">
                            <div class="sec-heading centered    ">
                                <div class="content-area">
                                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Have any questions? Let's
                                        answer them</h2>
                                </div>
                            </div>
                            <div class="contact-form-inputs wow fadeInUp" data-wow-delay=".6s">
                                <div class="custom-form-area input-boxed">
                                    <!--Form To have user messages-->
                                    <form class="main-form" id="contact-us-form" action="php/send-mail.php"
                                        method="post"><span class="done-msg"></span>
                                        <div class="row ">
                                            <div class="col-12 col-lg-6">
                                                <div class="   input-wrapper">
                                                    <input class="text-input" id="user-name" name="UserName"
                                                        type="text" />
                                                    <label class="input-label" for="user-name"> Name <span
                                                            class="req">*</span></label><span
                                                        class="b-border"></span><span class="error-msg"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="   input-wrapper">
                                                    <input class="text-input" id="user-email" name="UserEmail"
                                                        type="email" />
                                                    <label class="input-label" for="user-email"> E-mail <span
                                                            class="req">*</span></label><span
                                                        class="b-border"></span><span class="error-msg"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="   input-wrapper">
                                                    <input class="text-input" id="msg-subject" name="subject"
                                                        type="text" />
                                                    <label class="input-label" for="msg-subject"> Subject <span
                                                            class="req">*</span></label><span
                                                        class="b-border"></span><span class="error-msg"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="   input-wrapper">
                                                    <textarea class=" text-input" id="msg-text" name="message"></textarea>
                                                    <label class="input-label" for="msg-text"> your message <span
                                                            class="req">*</span></label><span
                                                        class="b-border"></span><i></i><span class="error-msg"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 submit-wrapper">
                                                <button class=" btn-solid" id="submit-btn" type="submit"
                                                    name="UserSubmit">Send your message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <section class="locations-section  mega-section ">
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
                                    <h4 class="location-title">New york</h4>
                                    <div class="line-on-side "> </div>
                                    <p class="location-address">United States, 307 Wilshire, 2nd av. new york 3516.</p>
                                    <div class="location-card  "><i class="flaticon-email icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title">email:</h6><a class="email link" href="mailto:yourname@example.com">info@example.com</a>
                                        </div>
                                    </div>
                                    <div class="location-card  "><i class="flaticon-phone-call icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title">phone:</h6><a class="tel link" href="tel:0123456789">+29876543210</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="info-panel  wow fadeInUp" data-wow-delay=".6s">
                                    <h4 class="location-title">London</h4>
                                    <div class="line-on-side "> </div>
                                    <p class="location-address">United kingdom, 12 smith town, 2nd av. London 2159.</p>
                                    <div class="location-card  "><i class="flaticon-email icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title">email:</h6><a class="email link" href="mailto:yourname@example.com">info@example.com</a>
                                        </div>
                                    </div>
                                    <div class="location-card  "><i class="flaticon-phone-call icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title">phone:</h6><a class="tel link" href="tel:0123456789">+969876543210</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="info-panel  wow fadeInUp" data-wow-delay=".8s">
                                    <h4 class="location-title">tokio</h4>
                                    <div class="line-on-side "> </div>
                                    <p class="location-address">Japan, 307 chinzo appy road, portsika way. tokio 3516.
                                    </p>
                                    <div class="location-card  "><i class="flaticon-email icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title">email:</h6><a class="email link" href="mailto:yourname@example.com">info@example.com</a>
                                        </div>
                                    </div>
                                    <div class="location-card  "><i class="flaticon-phone-call icon"></i>
                                        <div class="card-content">
                                            <h6 class="content-title">phone:</h6><a class="tel link" href="tel:0123456789">+459876543210</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-fluid">
            <section class="map-section ">
                <div class="map-box  wow fadeInUp" data-wow-delay=".6s">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe class="map-iframe" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2seg!4v1613762954590!5m2!1sen!2seg"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div> -->
    </section>
    <!-- End  blog Section-->
@endsection

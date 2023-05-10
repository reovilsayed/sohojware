<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="@yield('meta-description', setting('site.description'))">
    <meta name="keywords" content="@yield('meta-keywords', setting('site.keywords'))">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Sayed Khan Prince">
    {{-- <link rel="canonical" href="{{ url(Request::url()) }}" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/jquery.fancybox.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('css')
    <title>@yield('title', setting('site.title'))</title>
    @yield('social_media')
</head>

<body class="dark-theme landing-page-demo">
    <header class=" header-basic" id="page-header">
        <div class="header-search-box">
            <div class="close-search"></div>
            <form class="nav-search search-form" role="search" method="get" action="#">
                <div class="search-wrapper">
                    <label class="search-lbl">Search for:</label>
                    <input class="search-input" type="search" placeholder="Search..." name="searchInput"
                        autofocus="autofocus" />
                    <button class="search-btn" type="submit"><i class="bi bi-search icon"></i></button>
                </div>
            </form>
        </div>
        <div class="container">
            <!--Start navbar-->
            <nav class="menu-navbar" id="main-nav">
                <div class="header-logo"><a class="logo-link" href="#">
                    <img class="logo-img light-logo"
                            loading="lazy" src="{{ asset('assets/favicon.png') }}" alt="logo" />
                    <img class="logo-img  dark-logo" loading="lazy" src="{{ asset('assets/favicon.png') }}"
                            alt="logo" />
                        </a>
                </div>
                <div class="links menu-wrapper ">
                    <ul class="list-js links-list">
                        <li class="nav-item menu-item has-sub-menu"><a class="nav-link menu-link active"
                                href="#page-hero">home</a>
                        </li>
                        <li class="nav-item menu-item"><a class="nav-link menu-link" href="#services">services </a>
                        </li>
                        <li class="nav-item menu-item"><a class="nav-link menu-link" href="#about">about </a></li>
                        <li class="nav-item menu-item"><a class="nav-link menu-link" href="#portfolio">portfolio </a>
                        </li>
                        <li class="nav-item menu-item"><a class="nav-link menu-link" href="#pricing">pricing </a></li>
                        <li class="nav-item menu-item"><a class="nav-link menu-link" href="#testimonials">testimonials
                            </a></li>
                        <li class="nav-item menu-item"><a class="nav-link menu-link" href="#faq">FAQ </a></li>
                        <li class="nav-item menu-item"><a class="nav-link menu-link" href="#contact-us">contact us
                            </a></li>
                    </ul>
                </div>
                <div class="controls-box">
                    <div class="control  menu-toggler"><span></span><span></span><span></span></div>
                    <div class="">
                        <a target="_blank" href="https://wa.me/8801738324024">
                            <i class="fab fa-whatsapp" style="font-size: 30px;"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer class="page-footer dark-color-footer" id="page-footer">
        <div class="overlay-photo-image-bg"
            data-bg-img="https://amincodes.com/html/one-pages/flex-it/assets/images/sections-bg-images/footer-bg-1.jpg"
            data-bg-opacity=".25"></div>
        <div class="container">
            <div class="row footer-cols">
                <div class="col-12 col-md-8 col-lg-4  footer-col "><img class="img-fluid footer-logo" loading="lazy"
                        src="{{ asset('assets/favicon.png') }}" alt="logo" style="max-width: 60px;" />
                    <div class="footer-col-content-wrapper">
                        <p class="footer-text-about-us ">
                            We are a team of IT specialists who have been providing IT support since 2015. Our team
                            comprises highly experienced web developers, web designers, graphic designers, digital
                            marketers, app developers, and professionals from all sectors necessary to run a successful
                            business. We prioritize building strong relationships with our clients over focusing solely
                            on business. Our commitment to delivering quality work and exceptional service has helped us
                            build a loyal client base.
                        </p>
                    </div>
                    <div class="form-area ">
                        <div class="mailchimp-form ">
                            <form class="one-field-form" method="post" action="#0">
                                <div class="field-group ">
                                    <label class="email-label" for="email-input"> Subscribe to our news letter</label>
                                    <input class="email-input " type="email" value="" name="EMAIL"
                                        id="email-input" placeholder="Email Address" autocomplete="off" />
                                    <div class="cta-area">
                                        <input class="btn-solid subscribe-btn" type="submit" value="Subscribe"
                                            name="subscribe" />
                                    </div>
                                </div><span class="email-notice">*we will not share your personal info</span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2  footer-col ">
                    <h2 class=" footer-col-title    ">useful links</h2>
                    <div class="footer-col-content-wrapper">
                        <ul class="footer-menu ">
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i> <a class="footer-menu-link" href="#0">Google</a>
                            </li>
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link" href="#0">Dribbble</a>
                            </li>
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link" href="#0">linkedIn</a>
                            </li>
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link"
                                    href="#0">wikipedia</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2 footer-col ">
                    <h2 class=" footer-col-title    ">Resources</h2>
                    <div class="footer-col-content-wrapper">
                        <ul class="footer-menu">
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link" href="#0">support</a>
                            </li>
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link"
                                    href="#0">dashboard</a>
                            </li>
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link" href="#0">drivers</a>
                            </li>
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link" href="#0">projects</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4 footer-col ">
                    <h2 class=" footer-col-title">contact information</h2>
                    <div class="footer-col-content-wrapper">
                        <div class="contact-info-card"><i class="fa-solid fa-envelope me-2"
                                style="color:#0a6a9e"></i><a class="text-lowercase  info"
                                href="mailto:info@sohojware.com">info@sohojware.com</a>
                        </div>
                        <div class="contact-info-card"><i class="fa-solid fa-location-dot me-2"
                                style="color:#0a6a9e"></i><span class="text-lowercase  info">5 Xyz st., Abc,
                                alexandria, egypt.</span></div>
                        {{-- <div class="contact-info-card"><i class="fa-solid fa-mobile me-2"
                                style="color:#0a6a9e"></i><a class="info" href="tel:+20123456789">+20123456789 </a>
                        </div> --}}
                        <div class="contact-info-card">
                            <div class="social-icons">
                                <div class="sc-wrapper dir-row sc-size-32">
                                    <ul class="sc-list">
                                        <li class="sc-item" title="Facebook"><a target="_blank" class="sc-link" href="https://www.facebook.com/sohojitltd/"
                                                title="social media icon"><i
                                                    class="fab fa-facebook-f sc-icon"></i></a>
                                        </li>
                                        <li class="sc-item" title="youtube"><a target="_blank" class="sc-link" href="https://www.youtube.com/@sohojware/videos"
                                                title="social media icon"><i class="fab fa-youtube sc-icon"></i></a>
                                        </li>
                                        <li class="sc-item" title="instagram"><a target="_blank" class="sc-link" href="https://instagram.com/sohoj_it_insta"
                                                title="social media icon"><i class="fab fa-instagram sc-icon"></i></a>
                                        </li>
                                        <li class="sc-item" title="twitter"><a target="_blank" class="sc-link" href="https://twitter.com/sohoj_it"
                                                title="social media icon"><i class="fab fa-twitter sc-icon"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights ">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex justify-content-start">
                        <p class="creadits">
                            &copy; {{ now()->format('Y') }}
                            Created by:
                            <a class="link" href="{{ url('/') }}">Sohojware</a>
                        </p>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-end">
                        <div class="terms-links"><a href="#0">Terms of Use </a>
                            | <a href="#0">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span
            class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span>
    </div>
    <div class="back-to-top" id="back-to-top"><i class="fa-solid fa-arrow-up-long"></i>
    </div>
    <script src="{{ asset('assets/js/plugins/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope-min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('js')
</body>

</html>

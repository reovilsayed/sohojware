<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta-description', setting('site.description'))">
    <meta name="keywords" content="@yield('meta-keywords', setting('site.keywords'))">
    @yield('social_media')
    <meta name="google-adsense-account" content="ca-pub-3288924076884130">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Sayed Khan">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/swiper.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/popup.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">

    @yield('css')
    <title>@yield('title', setting('site.title'))</title>
    @production
        @if (Str::startsWith($current = url()->current(), 'https://www'))
            <link rel="canonical" href="{{ str_replace('https://www.', 'https://', $current) }}">
        @else
            <link rel="canonical" href="{{ $current }}">
        @endif
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5HX60DLSEW"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-5HX60DLSEW');
        </script>
    @endproduction
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "ResearchProject",
        "name": "Sohojware",
        "alternateName": "The Best Services & IT Solutions",
        "url": "https://sohojware.com/",
        "logo": "https://sohojware.com/assets/logo.png",
        "sameAs": [
            "https://www.facebook.com/sohojitltd/",
            "https://twitter.com/sohoj_it",
            "https://www.instagram.com/sohoj_it_insta",
            "https://www.youtube.com/@sohojware/videos"
        ]
        }
</script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4642365103715171"
        crossorigin="anonymous"></script>
</head>

<body class="landing-page-demo">
    <header class="header-basic" id="page-header">
        <div class="container">
            <nav class="menu-navbar" id="main-nav">
                <div class="header-logo"><a class="logo-link" href="{{ route('home') }}">
                        <img class="logo-img light-logo" loading="lazy" src="{{ asset('assets/logo.png') }}"
                            alt="logo" />
                        <img class="logo-img  dark-logo" loading="lazy" src="{{ asset('assets/logo.png') }}"
                            alt="logo" />
                    </a>
                </div>
                <div class="links menu-wrapper ">
                    <ul class="list-js links-list">
                        <li class="nav-item menu-item has-sub-menu"><a
                                class="nav-link menu-link  {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ route('home') }}">home</a>
                        </li>
                        <li class="nav-item menu-item"><a
                                class="nav-link menu-link {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">services </a>
                        </li>
                        <li class="nav-item menu-item"><a
                                class="nav-link menu-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                href="{{ route('about') }}">about
                            </a></li>
                        <li class="nav-item menu-item"><a
                                class="nav-link menu-link {{ request()->routeIs('portfolios') ? 'active' : '' }}"
                                href="{{ route('portfolios') }}">portfolio</a>
                        </li>

                        <li class="nav-item menu-item"><a
                                class="nav-link menu-link {{ request()->routeIs('pricing') ? 'active' : '' }}"
                                href="{{ route('pricing') }}">Package</a></li>

                        <li class="nav-item menu-item"><a
                                class="nav-link menu-link {{ request()->routeIs('posts') ? 'active' : '' }}"
                                href="{{ route('posts') }}">Posts
                            </a></li>
                        <li class="nav-item menu-item"><a
                                class="nav-link menu-link {{ request()->routeIs('faq') ? 'active' : '' }}"
                                href="{{ route('faq') }}">FAQS
                            </a></li>
                        <li class="nav-item menu-item"><a
                                class="nav-link menu-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">contact us
                            </a></li>
                        {{-- <li class="nav-item menu-item"><a
                                class="nav-link menu-link {{ request()->routeIs('our.team') ? 'active' : '' }}"
                                href="{{ route('our.team') }}">Our Team</a></li> --}}
                        {{-- <li class="nav-item menu-item"><a
                                class="nav-link menu-link {{ request()->routeIs('letsBuild') ? 'active' : '' }}"
                                href="{{ route('letsBuild') }}">let's Build</a></li> --}}

                    </ul>
                </div>
                <div class="controls-box">
                    <div class="control  menu-toggler"><span></span><span></span><span></span></div>
                    <div class="">
                        <a target="_blank" href="https://wa.me/8801738324024">
                            <i class="fab fa-whatsapp" style="font-size: 30px;"></i>
                        </a>
                    </div>
                    <div class="mode-switcher ms-3">
                        <div class="switch-inner go-light" title="Switch To Light Mode ">
                            <i class="fas fa-sun icon"></i>
                        </div>
                        <div class="switch-inner go-dark" title="Switch To Dark Mode ">
                            <i class="fas fa-moon icon"></i>
                        </div>
                    </div>
                    {{-- @auth
                        <div class="dropdown text-end ms-3">
                            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                    class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small">

                                <li><a class="dropdown-item" style="color: #333 !important;"
                                        href="{{ route('client.dashboard') }}">Dashboard</a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <!-- Using Laravel's `route` helper to generate URL to logout route -->
                                    <a class="dropdown-item" style="color: #333 !important;"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sign out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </div>
                    @endauth --}}
                </div>
            </nav>
        </div>
    </header>
    @yield('content')
    <x-popup />
    <footer class="page-footer dark-color-footer" id="page-footer">
        <div class="overlay-photo-image-bg"
            data-bg-img="{{ asset('assets/images/sections-bg-images/footer-bg-1.webp') }}" data-bg-opacity=".25">
        </div>
        <!-- Button trigger modal -->
        <div class="container">
            <div class="row footer-cols">
                <div class="col-12 col-md-8 col-lg-4  footer-col "><img class="img-fluid footer-logo" loading="lazy"
                        src="{{ asset('assets/logo.png') }}" alt="logo" style="max-width: 60px;" />
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
                            <form id="subscribe-form" class="one-field-form" method="post"
                                action="{{ route('subscribe') }}">
                                @csrf
                                <div class="field-group ">
                                    <label class="email-label" for="email-input"> Subscribe to our news letter</label>
                                    <input class="email-input " type="email" value="" name="email"
                                        id="email-input" placeholder="Email Address" autocomplete="off" />
                                    <div class="cta-area">
                                        <button type="submit" class="btn-solid subscribe-btn">Subscribe</button>
                                    </div>
                                </div><span class="email-notice">*we will not share your personal info</span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2  footer-col ">
                    <h2 class=" footer-col-title">useful links</h2>
                    <div class="footer-col-content-wrapper">
                        <ul class="footer-menu ">
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i> <a class="footer-menu-link"
                                    href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link"
                                    href="{{ route('portfolios') }}">Portfolios</a>
                            </li>
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link"
                                    href="{{ route('pricing') }}">Packages</a>
                            </li>
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link"
                                    href="{{ route('faq') }}">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2 footer-col">
                    <h2 class=" footer-col-title">Resources</h2>
                    <div class="footer-col-content-wrapper">
                        <ul class="footer-menu">
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link"
                                    href="{{ route('posts') }}">Posts</a>
                            </li>
                            <li class="footer-menu-item"><i class="fa-solid fa-arrow-right me-1"
                                    style="color:#0a6a9e"></i><a class="footer-menu-link"
                                    href="{{ route('services') }}">Services</a>
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
                        {{-- <div class="contact-info-card"><i class="fa-solid fa-location-dot me-2"
                            style="color:#0a6a9e"></i><span class="text-lowercase  info">5 Xyz st., Abc,
                                alexandria, egypt.</span></div> --}}
                        <div class="contact-info-card"><i class="fa-solid fa-mobile me-2"
                                style="color:#0a6a9e"></i><a class="info"
                                href="https://wa.me/8801738324024">+880173834024 </a>
                        </div>
                        <div class="contact-info-card">
                            <div class="social-icons">
                                <div class="sc-wrapper dir-row sc-size-32">
                                    <ul class="sc-list">
                                        <li class="sc-item" title="Facebook"><a target="_blank" class="sc-link"
                                                href="https://www.facebook.com/sohojitltd/"
                                                title="sohojware facebook"><i
                                                    class="fab fa-facebook-f sc-icon"></i></a>
                                        </li>
                                        <li class="sc-item" title="youtube"><a target="_blank" class="sc-link"
                                                href="https://www.youtube.com/@sohojware/videos"
                                                title="sohojware youtube"><i class="fab fa-youtube sc-icon"></i></a>
                                        </li>
                                        <li class="sc-item" title="instagram"><a target="_blank" class="sc-link"
                                                href="https://instagram.com/sohoj_it_insta"
                                                title="sohojware instagram"><i
                                                    class="fab fa-instagram sc-icon"></i></a>
                                        </li>
                                        <li class="sc-item" title="twitter"><a target="_blank" class="sc-link"
                                                href="https://twitter.com/sohoj_it" title="sohojware twitter"><i
                                                    class="fab fa-twitter sc-icon"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Modal trigger button -->
                                {{-- <button type="button" class="btn btn-info btn-sm text-white " data-bs-toggle="modal"
                                    data-bs-target="#modalId">
                                    Popup
                                </button> --}}
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
                        <div class="terms-links"><a
                                href="{{ route('page', ['slug' => 'terms-and-condition']) }}">Terms
                                of Use </a>
                            | <a href="{{ route('page', ['slug' => 'privacy-policy']) }}">Privacy Policy</a>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-appear/0.1/jquery.appear.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/plugins/jquery.countTo.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope-min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Include SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        toastr.options = {
            "newestOnTop": true,
            "positionClass": "toast-bottom-left",
            "preventDuplicates": true,
            "showDuration": "150",
            "hideDuration": "200",
            "timeOut": "4500",
            "extendedTimeOut": "500",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    @if (session()->has('success'))
        <x-alert.success />
    @endif

    <script async type="application/javascript"
        src="https://news.google.com/swg/js/v1/swg-basic.js"></script>
    <script>
        (self.SWG_BASIC = self.SWG_BASIC || []).push(basicSubscriptions => {
            basicSubscriptions.init({
                type: "NewsArticle",
                isPartOfType: ["Product"],
                isPartOfProductId: "CAow5bquDA:openaccess",
                clientOptions: {
                    theme: "light",
                    lang: "en"
                },
            });
        });
    </script>
    @yield('js')
    @if (session()->has('success_sweet_alert'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ session('success_sweet_alert') }}",
                icon: "success"
            });
        </script>
    @endif

</body>

</html>

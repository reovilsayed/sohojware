@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/service.css')}}">
<!-- <link rel="stylesheet" href="https://nexgen-html.codings.dev/assets/css/default.css"> -->
<link rel="stylesheet" href="https://nexgen-html.codings.dev/page-single-service-1.html/assets/css/vendor/bootstrap.min.css">
@endsection
@section('content')
 <!-- Hero -->
 <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <video class="full-image to-bottom" data-mask="70" playsinline autoplay muted loop>
                            <source src="https://nexgen-html.codings.dev/assets/videos/work.mp4" type="video/mp4" />
                        </video> 

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Single Service</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Single Service</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Single -->
        <section id="single" class="section-1 single">
            <div class="container">
                <div class="row">

                    <!-- Main -->
                    <div class="col-12 col-lg-8 p-0 text">
                        <div class="row intro m-0">
                            <div class="col-12">
                                <span class="pre-title m-0">Know what the law requires</span>
                                <div class="title-icon">                                    
                                    <h4>Legal  Consulting</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 align-self-center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum velit tortor, interdum sed cursus eu, sagittis ut nunc. Sed vitae tellus et arcu aliquet faucibus fermentum non lacus.</p>
                                <p>Praesent fringilla quis massa et placerat. Mauris eu dui eget urna pellentesque gravida vitae quis nibh. Ut at augue tortor. Pellentesque quis suscipit magna.</p>
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam tortor, ultrices accumsan mauris eget, pulvinar tincidunt erat. Sed nisi nisi, rutrum sit amet elit.</blockquote>
                                <p>Sed mauris nulla, tempor eu est vel, dapibus hendrerit mauris curabitur dictum pharetra.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                </ul>
                                <p>Etiam mollis sem sed bibendum blandit. Aenean quis luctus ligula, vitae suscipit dui. Nunc diam orci, tincidunt eget consectetur sit amet, vulputate.</p>
                            </div>
                        </div>        
                    </div>

                    <!-- Sidebar -->
                    <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">                    
                        <div class="row">
                            <div class="col-12 align-self-center text-left">
                                <h4>Service Mapping</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="#"><i class="icon icon-organization"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="#"><i class="icon icon-globe-alt"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="#"><i class="icon icon-layers"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="#"><i class="icon icon-pie-chart"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="#"><i class="icon icon-briefcase"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="#"><i class="icon icon-plane"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="#"><i class="icon icon-chart"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="#"><i class="icon icon-drawer"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="section-2 highlights image-right">
            <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-auto m-md-0">About the network</span>
                            <h4 style="text-align: justify; font-size:40px">The Company</h4>
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis diam varius diam ultricies lacinia. Mauris lacus tellus, ultrices eu volutpat sit amet, finibus a ipsum.</p>
                            <p style="text-align: justify;">Curabitur convallis, diam a egestas iaculis, neque lorem interdum felis, in viverra lacus tortor in leo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text">
                    <div class="row items">                             
                        <div data-aos="fade-up" class="col-12 col-md-5 p-0 pr-md-4 item me-5">
                            <h4 style="text-align: justify;"><i class="fas fa-ribbon me-2"></i>Tradition</h4>
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        </div>           
                        <div data-aos="fade-up" class="col-12 col-md-5 p-0 item">
                            <h4 style="text-align: justify;"><i class="fas fa-lock me-2"></i>Security</h4>
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        </div> 
                    </div>
                    <div class="row items"> 
                        <div data-aos="fade-up" class="col-12 col-md-5 me-5 p-0 item">
                            <h4 style="text-align: justify;"><i class="fas fa-edit me-2"></i>Certificate</h4>
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        </div>  
                        <div data-aos="fade-up" class="col-12 col-md-5 p-0 pr-md-4 item">
                            <h4 style="text-align: justify;"><i class="mr-2 icon-graduation"></i>Expertise</h4>
                            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- About 2 -->
        <section id="about-2" class="section-3 odd highlights team image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 align-self-top text">
                        <div class="row intro m-0">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">You more prepared</span>
                                <h2><span class="featured"><span>Boost </span></span> Your Creativity</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 pr-md-5">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis diam varius diam ultricies lacinia. <b>Mauris lacus tellus, ultrices eu volutpat sit amet, finibus a ipsum.</b> Nullam sit amet pretium felis.</p>
                                <p><b>Cras sem ante, accumsan quis sem sed, rutrum varius nunc.</b></p>
                            </div>
                        </div>
                        
                        <!-- Action -->
                        <div data-aos="fade-up" class="buttons">
                            <div class="d-sm-inline-flex mt-4">
                                <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN TOUCH</a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-in" class="col-12 col-lg-4 align-self-end">
                        <div class="quote">
                            <div class="quote-content">
                                <h4>Consultant Speech</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut lacinia diam.</p>
                                <p>Vivamus efficitur et est quis posuere. Nulla sollicitudin vulputate dui, id pretium tortor congue eu. Integer aliquet justo eu quam volutpat ullamcorper.</p>
                                <h5>Jacob Hill Jr.</h5>
                            </div>
                            <i class="quote-right fas fa-quote-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="section-4 form contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Send a message</span>
                                <h2>Get in <span class="featured"><span>Touch</span></span></h2>
                                <p>We will respond to your message as soon as possible.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <form action="php/form.php" id="nexgen-simple-form" class="nexgen-simple-form">
                                    <input type="hidden" name="section" value="nexgen_form">

                                    <input type="hidden" name="reCAPTCHA">
                                    <!-- Remove this field if you want to disable recaptcha -->

                                    <div class="row form-group-margin">
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="name" class="form-control field-name" placeholder="Name">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="email" name="email" class="form-control field-email" placeholder="Email">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="phone" class="form-control field-phone" placeholder="Phone">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <i class="icon-arrow-down mr-3"></i>
                                            <select name="info" class="form-control field-info">
                                                <option value="" selected disabled>More Info</option>
                                                <option>Audit & Assurance</option>
                                                <option>Financial Advisory</option>
                                                <option>Analytics and M&A</option>
                                                <option>Middle Marketing</option>
                                                <option>Legal Consulting</option>
                                                <option>Regulatory Risk</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12 m-0 p-2 input-group">
                                            <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12 col-12 m-0 p-2 input-group">
                                            <span class="form-alert"></span>
                                        </div>
                                        <div class="col-12 input-group m-0 p-2">
                                            <a class="btn primary-button">SEND</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="contacts">
                            <h4>Example Inc.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +1 (305) 1234-5678
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        hello@example.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <footer>

            <!-- Footer [content] -->
            <section id="footer" class="odd footer offers">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 footer-left">

                            <!-- Navbar Brand-->
                            <a class="navbar-brand" href="/">
                                <span class="brand">
                                    <span class="featured">
                                        <span class="first">NEX</span>
                                    </span>
                                    <span class="last">GEN</span>
                                </span>
                                
                                <!-- 
                                    Custom Logo
                                    <img src="assets/images/logo.svg" alt="NEXGEN">
                                -->
                            </a>
                            <p>A Functional HTML Template<br>for Corporate & Business.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +1 (305) 1234-5678
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        hello@example.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="mt-4 btn outline-button smooth-anchor">GET IN TOUCH</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-9 p-0 footer-right">
                            <div class="row items">
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>About</h4>
                                        <a href="#"><i class="icon-arrow-right"></i>The Company</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Institutional</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Social & Events</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Innovation</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Environment</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Technology</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>Services</h4>
                                        <a href="#"><i class="icon-arrow-right"></i>Audit & Assurance</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Financial Advisory</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Analytics M&A</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Middle Marketing</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Legal Consulting</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Regulatory Risk</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>Support</h4>
                                        <a href="#"><i class="icon-arrow-right"></i>Responsibility</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Terms of Use</a>
                                        <a href="#"><i class="icon-arrow-right"></i>About Cookies</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Privacy Policy</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Accessibility</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Information</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Copyright -->
            <section id="copyright" class="p-3 odd copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                            <p>Enjoy the low price. We are tracking any intention of piracy.</p>
                            <!--
                                Suggestion: Replace the text above with a description of your website.
                             -->
                        </div>
                        <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                            <p>© 2023 NEXGEN is Proudly Powered by <a href="https://themeforest.net/user/codingsdev" target="_blank">Codings</a>.</p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>

        <!-- Modal [search] -->
        <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <h2>What are you looking for?</h2>
                                        <div class="badges">
                                            <span class="badge"><a href="#">Consulting</a></span>
                                            <span class="badge"><a href="#">Audit</a></span>
                                            <span class="badge"><a href="#">Assurance</a></span>
                                            <span class="badge"><a href="#">Advisory</a></span>
                                            <span class="badge"><a href="#">Financial</a></span>
                                            <span class="badge"><a href="#">Capital Markets</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Enter Keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [sign] -->
        <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form action="/" class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Sign In</h2>
                                        <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">SIGN IN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [register] -->
        <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form action="/" class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Register</h2>
                                        <p>Have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">REGISTER</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [map] -->
        <div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header absolute" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.123073808986!2d12.490042215441486!3d41.89021017922119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61b6532013ad%3A0x28f1c82e908503c4!2sColiseu!5e0!3m2!1spt-BR!2sbr!4v1594148229878!5m2!1spt-BR!2sbr" width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>        
@endsection
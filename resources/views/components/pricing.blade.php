<?php
use App\Models\Package;
$packages = Package::orderBy('order_no')->get();
?>
<section class="pricing mega-section" id="pricing">
    <div class="container">
        <div class="sec-heading">
            <div class="content-area"><span class="pre-title wow fadeInUp" data-wow-delay=".2s">pricing
                    plans</span>
                <h2 class=" title wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>affordable</span>
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
            @foreach ($packages as $package)
                <div class="col-12  col-md-6 col-xl-3  mx-auto price-plan ">
                    <div class="plan wow fadeInUp" data-wow-delay=".1s ">
                        <div class="plan-head">
                            <h4 class="plane-name">{{ $package->name }}</h4>
                            <div class="plan-price">
                                <h3 class="price">{{ $package->price }}<sup class="currency-symbol">$</sup></h3>Ex Tax
                            </div>
                        </div>
                        <div class="plan-details">
                            <ul class="plan-list">
                                @php
                                    $services = explode('|', $package->services);
                                @endphp
                                @foreach ($services as $service)
                                    <li class="plan-feat"><span class="feat-text">{{ $service }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="plan-cta"><a class="cta-btn btn-outline" href="#contact-us"
                                onclick="package_select('{{$package->package_key}}')" id="basic">select plan</a></div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-12  col-md-6 col-xl-3  mx-auto price-plan ">
                <div class="plan wow fadeInUp" data-wow-delay=".1s ">
                    <div class="plan-head">
                        <h4 class="plane-name">Basic</h4>
                        <div class="plan-price">
                            <h5 class="">123</h5> ex tax
                        </div>
                    </div>
                    <div class="plan-details">
                        <ul class="plan-list">
                            <li class="plan-feat"> <span class="feat-text">Small website (up to 5 pages)</span></li>
                            <li class="plan-feat"> <span class="feat-text">Ecommerce Functionality (basic)</span></li>
                            <li class="plan-feat"> <span class="feat-text">Basic on-page SEO</span></li>
                            <li class="plan-feat"> <span class="feat-text">Free Images</span></li>
                            <li class="plan-feat"> <span class="feat-text">Submission to Google Index</span></li>
                            <li class="plan-feat"> <span class="feat-text">Google Analytics setup</span></li>
                            <li class="plan-feat"> <span class="feat-text">Google Search Console setup</span></li>
                            <li class="plan-feat"> <span class="feat-text">Google Tag Manager setup</span></li>
                            <li class="plan-feat"> <span class="feat-text">Single Payment Gateway</span></li>
                            <li class="plan-feat"> <span class="feat-text">Upto 3 Banner Design</span></li>
                            <li class="plan-feat"> <span class="feat-text">3 Article upto 1000 words</span></li>
                        </ul>
                    </div>
                    <div class="plan-cta"><a class="cta-btn btn-outline" href="#contact-us" onclick="package_select('basic')" id="basic">select plan </a></div>
                </div>
            </div>
            <div class="col-12  col-md-6 col-xl-3  mx-auto price-plan ">
                <div class="plan wow fadeInUp" data-wow-delay=".3s">
                    <div class="plan-head">
                        <h4 class="plane-name">Standerd</h4>
                        <div class="plan-price">
                            <h3 class="price">600<sup class="currency-symbol">$</sup></h3> ex tax
                        </div>
                    </div>
                    <div class="plan-details">
                        <ul class="plan-list">
                            <li class="plan-feat"><span class="feat-text">Medium website (up to 10 pages)</span></li>
                            <li class="plan-feat"><span class="feat-text">Medium Ecommerce Functionality</span></li>
                            <li class="plan-feat"><span class="feat-text">Advanced on-page SEO</span></li>
                            <li class="plan-feat"><span class="feat-text">Stock Images</span></li>
                            <li class="plan-feat"><span class="feat-text">Submission to Google Index</span></li>
                            <li class="plan-feat"><span class="feat-text">Google Analytics setup</span></li>
                            <li class="plan-feat"><span class="feat-text">Google Search Console setup</span></li>
                            <li class="plan-feat"><span class="feat-text">Google Tag Manager setup</span></li>
                            <li class="plan-feat"><span class="feat-text">Multiple Payment Gateway</span></li>
                            <li class="plan-feat"><span class="feat-text">Upto 6 Banner Design</span></li>
                            <li class="plan-feat"><span class="feat-text">6 Article upto 1000 words</span></li>
                        </ul>
                    </div>
                    <div class="plan-cta"><a class="cta-btn btn-outline" href="#contact-us" onclick="package_select('standerd')" id="standerd">select plan </a></div>
                </div>
            </div>
            <!--Third-plan-->
            <div class="col-12 col-md-6 col-xl-3  mx-auto price-plan ">
                <div class="plan featured  wow fadeInUp  " data-wow-delay=".5s ">
                    <div class="plan-head">
                        <h4 class="plane-name">Pro Plan</h4>
                        <div class="plan-price">
                            <h3 class="price">1000<sup class="currency-symbol">$</sup></h3>Ex Tax
                        </div>
                    </div>
                    <div class="plan-details">
                        <ul class="plan-list">
                            <li class="plan-feat"><span class="feat-text">Large website (up to 20 pages)</span></li>
                            <li class="plan-feat"><span class="feat-text">Multivendor Ecommerce Functionality</span></li>
                            <li class="plan-feat"><span class="feat-text">Comprehensive on-page SEO</span></li>
                            <li class="plan-feat"><span class="feat-text">Stock Images</span></li>
                            <li class="plan-feat"> <span class="feat-text">Submission to Google Index</span></li>
                            <li class="plan-feat"> <span class="feat-text">Google Analytics setup</span></li>
                            <li class="plan-feat"> <span class="feat-text">Google Search Console setup</span></li>
                            <li class="plan-feat"> <span class="feat-text">Google Tag Manager setup</span></li>
                            <li class="plan-feat"><span class="feat-text">Multiple Payment Gateway</span></li>
                            <li class="plan-feat"><span class="feat-text">Upto 10 Banner Design</span></li>
                            <li class="plan-feat"><span class="feat-text">10 Article upto 1000 words</span></li>
                        </ul>
                    </div>
                    <div class="plan-cta"><a class="cta-btn btn-outline" href="#contact-us" onclick="package_select('premium')" id="premium">select plan </a></div>
                </div>
            </div>
            <!--fourth-plan-->
            <div class="col-12  col-md-6 col-xl-3  mx-auto price-plan">
                <div class="plan    wow fadeInUp  " data-wow-delay=".6s">
                    <div class="plan-head">
                        <h4 class="plane-name">Custom</h4>
                        <div class="plan-price">

                        </div>
                    </div>
                    <div class="plan-details">
                        <ul class="plan-list">
                            <li class="plan-feat"><span class="feat-text">A fully customized website design tailored to your specific needs</span></li>
                            <li class="plan-feat"><span class="feat-text">Custom featured Android/Ios apps</span></li>
                            <li class="plan-feat"><span class="feat-text">Advance Booking system</span></li>
                            <li class="plan-feat"><span class="feat-text">Healthcare website with appointment</span></li>
                            <li class="plan-feat"> <span class="feat-text">Customized CRM</span></li>
                            <li class="plan-feat"> <span class="feat-text">Social networking website</span></li>
                            <li class="plan-feat"> <span class="feat-text">Travel website</span></li>
                            <li class="plan-feat"> <span class="feat-text">Job board website</span></li>
                            <li class="plan-feat"><span class="feat-text">All type of Payment Gateway</span></li>
                            <li class="plan-feat"><span class="feat-text">Educational website with online courses</span></li>
                            <li class="plan-feat"><span class="feat-text">All type of complex website and Apps</span></li>
                            <li class="plan-feat"><span class="feat-text">Custom API built and Integration</span></li>
                        </ul>
                    </div>
                    <div class="plan-cta"><a class="cta-btn btn-outline" href="#contact-us" onclick="package_select('custom')" id="custom">select plan </a></div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@section('js')
    <script>
        function package_select(name) {
            $('#package').val(name);
        }
    </script>
@endsection

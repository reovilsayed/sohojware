<section class="services services-boxed mega-section  pb-0" id="services">
    <div class="container">
        <div class="sec-heading">
            <div class="content-area"><span class=" pre-title wow fadeInUp m-0" data-wow-delay=".2s">services</span>
                <h2 class="title wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>services</span> we
                    offer</h2>
                <p class="subtitle wow fadeInUp" data-wow-delay=".6s">
                    Our services are designed to help businesses of all kinds unlock their full potential online. <br>
                    Let us help you achieve your goals and reach your target audience effectively.
                </p>
            </div>
        </div>
        <div class="row gx-4 gy-4 services-row">
            @foreach ($services as $service)
                <div class="col-12 col-md-6  col-lg-4">
                    <a href="{{ route('service', $service->slug) }}">
                        <div class="box service-box  wow fadeInUp reveal-start h-100" data-wow-offset="0"
                            data-wow-delay=".1s">
                            <div class="service-content">
                                <h3 class="service-title">{{ $service->name }}</h3>
                                <p class="service-text">
                                    {{ $service->meta_description }}
                                </p>
                            </div><a class="read-more" href="{{ route('service', $service->slug) }}">read more<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

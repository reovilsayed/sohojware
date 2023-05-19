<section class="our-clients  mega-section wow fadeInUp" id="our-clients" data-wow-delay="0.2s">
    <div class="container">
        <div class="sec-heading   centered ">
            <div class="content-area">
                <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">trusted by over 500 clients around the world
                </h2>
            </div>
        </div>
        <div class=" clients-logos d-flex align-items-center justify-content-around flex-wrap">
            <div class="swiper-container">
                <div class="swiper-wrapper clients-logo-wrapper wow fadeIn " data-wow-delay=".02s">
                    @foreach ($clients as $client)
                        <div class="swiper-slide">
                            <div class="client-logo "><a href="{{ $client->link }}"><img class="img-fluid logo "
                                        loading="lazy" src="{{ Voyager::image($client->logo) }}" alt="Sohjware"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

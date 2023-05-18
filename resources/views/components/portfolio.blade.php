<section class="portfolio portfolio-blocks mega-section" id="portfolio">
    <div class="container">
        <div class="sec-heading  ">
            <div class="content-area"><span class=" pre-title wow fadeInUp" data-wow-delay=".2s">portfolio</span>
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">Awesome <span class='hollow-text'>portfolio</span></h2>
            </div>
            <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid    "
                    href="{{ route('portfolios') }}">see more <i
                        class="fa-solid fa-arrow-right"></i></a></div>
        </div>
        <div class="portfolio-wrapper  ">
            {{-- <ul class="portfolio-btn-list wow fadeInUp" data-wow-delay=".2s">
                <li class="portfolio-btn active" data-filter="*">all</li>
                <li class="portfolio-btn" data-filter=".mobile">mobile</li>
                <li class="portfolio-btn" data-filter=".web">web apps</li>
                <li class="portfolio-btn" data-filter=".data">data analaysis</li>
                <li class="portfolio-btn" data-filter=".hosting">hosting</li>
            </ul> --}}
            <div class="portfolio-group wow fadeIn" data-wow-delay=".4s">
                <div class="row ">
                    @foreach ($portfolios as $portfolio)
                        <div class="col-12  col-md-6  col-lg-4  portfolio-item mobile ">
                            <div class="item   "><a class="portfolio-img-link"
                                    href="{{ route('portfolio', $portfolio->slug) }}"><img
                                        class="portfolio-img   img-fluid " loading="lazy"
                                        src="{{ Voyager::image($portfolio->image) }}" alt="portfolio item photo" /></a>
                                <div class="item-info ">
                                    <h3 class="item-title">{{ $portfolio->title }}</h3><i
                                        class="bi bi-arrow-right icon "></i>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-12 col-md-6 col-lg-4 portfolio-item mobile ">
                            <div class="item   "><a class="portfolio-img-link" href=""
                                    data-fancybox=".show-in-fancybox"><img class="portfolio-img   img-fluid "
                                        loading="lazy" src="" alt="portfolio item photo" /></a>
                                <div class="item-info ">
                                    <h3 class="item-titl"><a
                                            href="{{ route('portfolio', $portfolio->slug) }}"></a>
                                    </h3><i class="bi bi-eye icon "></i>
                                </div>
                            </div>
                        </div> --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

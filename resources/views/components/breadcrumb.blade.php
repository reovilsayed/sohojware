<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
    <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.webp') }}"
        data-bg-opacity="1">
    </div>
    <div class="overlay-color" data-bg-opacity=".75"></div>
    <div class="container">
        <div class="hero-text-area centerd">
            <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">{{ $title }} </h1>
            <nav aria-label="breadcrumb ">
                <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home') }}"><i
                                class="fa-solid fa-house-chimney"></i> Home</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

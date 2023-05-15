<section class="blog blog-home mega-section" id="blog">
    <div class="container ">
        <div class="sec-heading">
            <div class="content-area"><span class="pre-title wow fadeInUp" data-wow-delay=".2s">blog</span>
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">latest <span class='hollow-text'>news</span>
                </h2>
            </div>
            <div class="cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s"><a
                    class="cta-btn btn-solid   cta-btn btn-solid  " href="{{ route('posts') }}">see all posts<i
                        class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <x-posts :posts="$posts" />
    </div>
</section>

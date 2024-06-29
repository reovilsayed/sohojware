<style>
    @media screen and (max-width: 915px) {
        .blog .post-main-area .post-content img {
            border-radius: 0.25rem;
            height: auto;
            width: 100%;
        }
    }
</style>
<div class="col-12 col-lg-6 col-md-6 col-xl-6 mb-4">
    <div class="post-box h-100"> <a class="post-link" href="{{ route('post', $post->slug) }}"
            title="How litespeed technology works to speed up your site ">
            <div class="post-img-wrapper  " style="height: 350px width: 400px;">
                <img class=" parallax-img post-img" loading="lazy" src="{{ Voyager::image($post->image) }}" alt="sohojware"
                    title="{{ $post->title }}" />
                <span class="post-date"><span class="day"> {{ $post->created_at->format('d M Y') }} </span>
                </span>
            </div>
        </a>
        <div class="post-summary">
            <div class="post-info"><a class="info post-cat" href="#"><i
                        class="fa-regular fa-bookmark me-2"></i>{{ $post->category->name }}</a></div>
            <div class="post-text"><a class="post-link" href="{{ route('post', $post->slug) }}">
                    <h2 class="post-title">{{ $post->title }} </h2>
                </a>
                <p class="post-excerpt">{{ Str::limit($post->excerpt, 30) }}</p>
                {{-- <a class="read-more"
                        href="{{ route('post', $post->slug) }}"
                        title="How litespeed technology works to speed up your site ">read
                        more<i class="fa-solid fa-arrow-right ms-2"></i></a> --}}
            </div>
        </div>

    </div>

</div>

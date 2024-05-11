@extends('layouts.app')
@section('title', `Our Team`)
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('our.team') }}" />
@endsection

@section('css')
    <style>
        .header-basic a,
        .header-basic .menu-link {
            color: var(--clr-white) !important;
        }

        .display {
            display: none
        }

        .parallax-img {
            height: 300px;
            width: 297px;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')

    <section class="team-member mega-section">
        <div class="container mt-3">
            <div class="row">

                <div class="col-12 col-lg-9">
                    <div class="tm-description">
                        <h3 class="tm-title">Biography Overview.</h3>
                        <p class="tm-text"></p>



                    </div>
                </div>
                <div class="col-12  col-lg-3 mx-auto ">
                    <div class="profile ">
                        <div class="tm-img  "><img class=" img-fluid " loading="lazy"
                                src="{{ Voyager::image($member->image) }}" alt="Team Member"></div>
                        <div class="tm-details">
                            <h6 class="name">{{ $member->name }}</h6>
                            <span class="role">{{ $member->designation }}</span>
                            <span class="role">{{ $member->speciality }}</span>
                        </div>
                        <div class="tm-social">
                            <div class="sc-wrapper dir-row sc-size-40">
                                <ul class="sc-list">
                                    <li class="sc-item " title="Facebook"><a class="sc-link" href="{{ $member->facebook }}"
                                            title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                                    <li class="sc-item " title="Linkedin"><a class="sc-link" href="{{ $member->linkedin }}"
                                            title="social media icon"><i class="fab fa-linkedin sc-icon"></i></a></li>
                                    <li class="sc-item " title="instagram"><a class="sc-link"
                                            href="{{ $member->instagram }}" title="social media icon"><i
                                                class="fab fa-instagram sc-icon"></i></a></li>
                                    <li class="sc-item " title="twitter"><a class="sc-link" href="{{ $member->github }}"
                                            title="social media icon"><i class="fab fa-github sc-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

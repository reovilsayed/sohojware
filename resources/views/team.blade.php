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
        }
    </style>
@endsection
@section('content')
    <x-breadcrumb :title="'Our Team'" />
    <section class="our-team mega-section" id="our-team">
        <div class="container">
            <div class="sec-heading">
                <div class="content-area">
                    <span class="pre-title wow fadeInUp" data-wow-delay=".2s">Team</span>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">
                        our <span class="hollow-text">Experts</span> team members
                    </h2>
                </div>
                {{-- <div class="cta-area cta-area wow fadeInUp" data-wow-delay=".8s">
                    <a class="cta-btn btn-solid cta-btn btn-solid" href="our-team.html">see more<i
                            class="bi bi-arrow-right icon"></i></a>
                </div> --}}
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!--first Team Member-->
                    @foreach ($ourTeams as $member)
                        {{-- @dd($member) --}}
                        <div class="col-12 col-md-6 col-lg-3 mx-md-auto">
                            <div class="tm-member-card wow fadeInUp" data-wow-delay="0.1s">
                                <div class="tm-image js-tilt">
                                    <div class="tm-link">
                                        <div class="overlay overlay-color"></div>
                                        <img class="img-fluid parallax-img" loading="lazy"
                                            src="{{ Voyager::image($member->image) }}" alt="Team Member" />
                                    </div>
                                    <div class="tm-social">
                                        <div class="sc-wrapper dir-row sc-size-40">
                                            <ul class="sc-list">
                                                @if ($member->facebook)
                                                    <li class="sc-item" title="Facebook">
                                                        <a class="sc-link" href="{{ $member->facebook }}"
                                                            title="social media icon"><i
                                                                class="fab fa-facebook-f sc-icon"></i></a>
                                                    </li>
                                                @endif
                                                @if ($member->github)
                                                    <li class="sc-item" title="github">
                                                        <a class="sc-link" href="{{ $member->github }}"
                                                            title="social media icon"><i
                                                                class="fab fa-github sc-icon"></i></a>
                                                    </li>
                                                @endif
                                                @if ($member->instagram)
                                                    <li class="sc-item" title="instagram">
                                                        <a class="sc-link" href="{{ $member->instagram }}"
                                                            title="social media icon"><i
                                                                class="fab fa-instagram sc-icon"></i></a>
                                                    </li>
                                                @endif
                                                @if ($member->linkedin)
                                                    <li class="sc-item" title="linkedin">
                                                        <a class="sc-link" href="{{ $member->linkedin }}    "
                                                            title="social media icon"><i
                                                                class="fab fa-linkedin sc-icon"></i></a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-details">
                                    <a class="tm-link" href="team-member.html">
                                        <h6 class="tm-name">{{ $member->name }}</h6>
                                    </a><span class="tm-role">{{ $member->designation }} </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection

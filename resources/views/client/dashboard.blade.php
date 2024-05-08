@extends('layouts.client')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .profile-cover-img {
            height: 150px;
            object-fit: cover;
        }

        .profile-avatar-img {
            margin-top: -4rem;
            width: 8rem;
            height: 8rem;
        }

        .profile-detail {
            font-size: 0.9rem;
            /* Smaller font size for details */
            color: #6c757d;
            /* Bootstrap's default muted text color */
        }

        .stat {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .stat-number {
            font-size: 1.2rem;
            /* Larger font for emphasis */
            font-weight: bold;
        }

        .stat-label {
            font-size: 0.8rem;
            /* Smaller font for label */
        }

        .mini-stats-wid .mini-stat-icon {
            overflow: hidden;
            position: relative;
        }

        .avatar-sm {
            height: 3rem;
            width: 3rem;
        }

        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #556ee6;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 500;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
        }

        .mini-stats-wid .mini-stat-icon:after,
        .mini-stats-wid .mini-stat-icon:before {
            content: "";
            position: absolute;
            width: 8px;
            height: 54px;
            background-color: rgba(255, 255, 255, 0.1);
            left: 16px;
            -webkit-transform: rotate(32deg);
            transform: rotate(32deg);
            top: -5px;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        .font-size-24 {
            font-size: 24px !important;
        }
    </style>
@endsection
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <!-- Cover Photo -->
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1707345512638-997d31a10eaa?auto=format&fit=crop&w=1470&q=80"
                            class="card-img-top profile-cover-img" alt="Cover Photo">
                        <!-- Logo/Avatar -->
                        <img src="{{ Storage::url(auth()->user()->avatar) }}"
                            class="rounded-circle p-2 bg-white shadow profile-avatar-img" alt="Profile">
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <h5 class="card-title mt-2">{{ auth()->user()->name }}</h5>
                        <p class="card-text">{{ auth()->user()->email }}</p>
                        <div class="text-start ms-3">

                            <p class="profile-detail"><i
                                    class="bx bx-building detail-icon"></i>{{ auth()->user()->company ?? 'No Data' }}</p>
                            <p class="profile-detail"><i
                                    class="bx bx-hard-hat detail-icon"></i>{{ auth()->user()->designation ?? 'No Data' }}</p>
                            <p class="profile-detail"><i class="bx bx-current-location detail-icon"></i>
                                {{ auth()->user()->address ?? 'No Data' }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Projects</p>
                                        <h4 class="mb-0">1,235</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Total Spend</p>
                                        <h4 class="mb-0">1,235</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-money-withdraw font-size-24"></i>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

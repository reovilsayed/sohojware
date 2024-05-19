@extends('layouts.client')



<style>
    .widget {
        padding: 20px;
        min-height: 80px;
        width: 290px;
        background-color: #fff;
        box-shadow: 5px 5px 0px #73737388;
        position: relative;
        border-radius: 10px;
        border-left: 2px solid #a2cdb8;
        border-top: 2px solid #a2cdb8;
        transition: .2s ease-in;

    }

    .widget:hover {
        border: 2px solid #a2cdb8;

        box-shadow: 5px 5px 0px #a2cdb8;
    }

    .widget:hover i {
        filter: blur(0px);
        opacity: 1;
        transform: scale(1.3);
    }

    .widget * {
        padding: 0px;
        margin: 0px;
    }

    .widget h6 {
        color: #574949;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 10px;
    }

    .widget h5 {
        color: #D37676;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 12px;
        margin-bottom: 10px;
    }

    .widget i {
        color: #D37676;
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 40px;
        filter: blur(1px);
        opacity: 0.2;
        transition: .5s ease-in;
    }

    .budget {
        color: #D37676;
        text-transform: uppercase;
        transition: .5s ease-in;
    }

    .widget span:hover {
        opacity: 1;
        transform: scale(1.3);
        
    }

    .title {
        color: #574949;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 30px;
        margin-bottom: 10px;
    }

    .description {
        color: #574949;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 10px;
    }

    .note {
        color: #574949;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 10px;
    }
</style>

@section('deshboard')
    <div class="col-xxl-9 col-lg-8">
        <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none" data-bs-toggle="offcanvas"
            href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Show
            Menu</button>
        <div class="dashboard-right-sidebar">
            <div class="dashboard-profile">
                <div class="title">
                    <h2>Project Details</h2>
                    <span class="title-leaf">
                        <svg class="icon-width bg-gray">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf">
                            </use>
                        </svg>
                    </span>
                </div>
                <div class="profile-about dashboard-bg-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row mb-2">
                                {{-- <div class="col-sm">
                                    <div class="search-box me-2 d-inline-block">
                                        <div class="position-relative">
                                            <input type="text" class="form-control sm" autocomplete="off"
                                                id="searchTableList" placeholder="Search...">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-sm-auto mb-2">
                                    <div class="text-sm-end">
                                        <a href="{{ route('client.project') }}"
                                            class="btn theme-bg-color btn-sm fw-bold text-light"><i
                                                class="fa-solid fa-left-long me-1"></i>
                                            Back</a>
                                    </div>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="widget">
                                                <h6>
                                                    Budget : <span class="budget">${{ $project->budget }}</span>
                                                </h6>
                                                <h6>
                                                    Total Paid : <span class="budget"> {{ $project->total_paid }}</span>
                                                </h6>
                                                <i class="fa-solid fa-dollar-sign"></i>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="widget">
                                                <h6>
                                                    Type : <span> {{ $project->type }}</span>
                                                </h6>
                                                <h6>
                                                    Payment Type :<span class="budget"> {{ $project->payment_type }}</span>
                                                </h6>
                                                <i class="fa-solid fa-money-bill-wave"></i>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="widget">
                                                <h6>
                                                    Status : <span class="budget"> {{ $project->bootstrapStatus() }}</span>

                                                </h6>
                                                <h6>
                                                    <span class="budget">
                                                        @if ($project->project_estd)
                                                            {{ $project->project_estd }}
                                                        @else
                                                            { No data }
                                                        @endif
                                                    </span>
                                                </h6>
                                                <i class="fa-regular fa-clock"></i>

                                            </div>
                                        </div>


                                    </div>



                                    <h4 class="title mt-3">{{ $project->title }}</h4>

                                    <div class="d-flex align-items-center">
                                        <div class="col-md-6">
                                            <h6 class="description">Description: <span> {{ $project->description }}</span>
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="note">Note : <span>{{ $project->note }}</span></h6>
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
    </div>
    </div>
@endsection

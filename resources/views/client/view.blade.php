@extends('layouts.client')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
<style>
   
    .container {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 20px auto;
        max-width: 600px;
    }

    .title {
        color: #007bff;
    }

    .detail {
        color: #333;
    }

    .value {
        font-weight: bold;
    }

    .description {
        margin-top: 20px;
    }

    .description span {
        font-weight: normal;
    }
</style>
@section('deshboard')
    <div class="col-xxl-9 col-lg-8">
        <div class="dashboard-right-sidebar">
            <div class="dashboard-profile">
                <div class="title">
                    <h2>Project View</h2>
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
                            <div class="card">
                                <div class="card-body">
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
                                    <div class="card container">
                                        <div class="card-body ">

                                            <h3 class="title">Name : <span class="value">{{ $project->title }}</span></h3>
                                            <h4 class="detail">Type :{{ $project->type }}</h4>
                                            <h4 class="detail">Status :{{ $project->status }}</h4>
                                            <h4 class="detail">Budget : <span class="value">{{ $project->budget }}</span></h4>
                                            <h4 class="detail">Total Paid :{{ $project->total_paid }}</h4>
                                            <h4 class="detail">Project Estd :{{ $project->project_estd }}</h4>
                                            <h4 class="detail">Payment Type :{{ $project->payment_type }}</h4>
                                            <h4 class="detail">Note :{{ $project->note }}</h4>
                                            <h4 class="description"><span class="value">Description :</span>{{ $project->description }}</h4>
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

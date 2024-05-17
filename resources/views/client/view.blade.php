@extends('layouts.client')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
<style>

</style>
@section('deshboard')
    <div class="col-xxl-9 col-lg-8">
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
                                        <div class="d-flex justify-content-between gap-2">
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body d-flex justify-content-between">
                                                        <div>
                                                            <h4 class="card-title">Type :{{ $project->type }}</h4>
                                                            <h4 class="card-title">Payment Type
                                                                :{{ $project->payment_type }}
                                                            </h4>
                                                        </div>
                                                        <div>
                                                            <h2><i class="fa-solid fa-money-bill-wave"></i></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body d-flex justify-content-between">
                                                        <div>
                                                            <h4 class="card-title"> Budget :$ {{ $project->budget }}</h4>
                                                            <h4 class="card-title">Total Paid :{{ $project->total_paid }}
                                                            </h4>
                                                        </div>
                                                        <div class="">
                                                            <h2>
                                                                <i class="fa-solid fa-dollar-sign"></i>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card me-3">
                                                    <div class="card-body d-flex justify-content-between">
                                                        <div>
                                                            <h4 class="card-title">Status :
                                                                {{ $project->bootstrapStatus() }}</h4>
                                                            @if ($project->project_estd)
                                                                {{ $project->project_estd }}
                                                            @else
                                                                No Data
                                                            @endif
                                                            {{-- <h4 class="card-title">Project Estd:{{ $project->project_estd }}
                                                            </h4> --}}
                                                        </div>
                                                        <div>
                                                            <h2><i class="fa-regular fa-clock"></i></h2>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h2 class="mt-3">{{ $project->title }}</h2>
                                        <hr class="mt-3" style="width: 400px">
                                        <div class="col-md-6">
                                            <h3 class="">Description: <span> {{ $project->description }}</span> </h3>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="">Note : <span>{{ $project->note }}</span></h3>
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

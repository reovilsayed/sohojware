@extends('layouts.client')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
@section('deshboard')
    <div class="col-xxl-9 col-lg-8">
        <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none" data-bs-toggle="offcanvas"
            href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Show
            Menu</button>
        <div class="dashboard-right-sidebar">
            <div class="dashboard-profile">
                <div class="title">
                    <h2>Project Update</h2>
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
                                    <form action="{{ route('client.project.update', $project) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{-- @dd( $project) --}}
                                        <div class="row g-4">
                                            <div class="col-xxl-12">
                                                <div class="form-floating theme-form-floating">
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        value="{{ $project->title }}">
                                                    <label for="title">Project Name</label>
                                                </div>
                                            </div>


                                            <div class="col-xxl-6">
                                                <div class="form-floating theme-form-floating">
                                                    <select class="form-select" name="payment_type" id="floatingSelect1"
                                                        value="{{ $project->payment_type }}">


                                                        <option value="hourly"
                                                            {{ $project->payment_type == 'hourly' ? 'selected' : '' }}>
                                                            Hourly
                                                        </option>
                                                        <option value="fixed"
                                                            {{ $project->payment_type == 'fixed' ? 'selected' : '' }}>Fixed
                                                        </option>

                                                    </select>
                                                    <label for="floatingSelect">Payment Type</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <div class="form-floating theme-form-floating">
                                                    <input type="number" class="form-control" name="budget" id="budget"
                                                        value="{{ $project->budget }}">
                                                    <label for="budget">Budget</label>
                                                </div>
                                            </div>
                                            {{-- <div class="col-xxl-12">
                                            <div class="form-floating theme-form-floating">
                                                <input type="file" class="form-control" name="file">
                                                <label for="file">Atached File</label>
                                            </div>
                                            </div> --}}
                                            <div class="col-xxl-12">
                                                <div class="form-floating theme-form-floating">
                                                    <textarea style="height: 150px" type="text" class="form-control" id="#summernote" name="description" value="">{{ $project->description }}</textarea>
                                                    <label for="description">Description</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <button type="submit"
                                                    class="btn theme-bg-color btn-sm fw-bold text-light">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

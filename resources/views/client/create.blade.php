@extends('layouts.client')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
@section('deshboard')
    <div class="col-xxl-9 col-lg-8">
        <div class="dashboard-right-sidebar">
            <div class="dashboard-profile">
                <div class="title">
                    <h2>Project Create</h2>
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
                                    <form action="{{ route('client.project.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-xxl-12">
                                                <div class="form-floating theme-form-floating">
                                                    <input type="text" class="form-control" id="title"
                                                        name="title">
                                                    <label for="title">Project Name</label>
                                                </div>
                                            </div>

                                           
                                            <div class="col-xxl-6">
                                                <div class="form-floating theme-form-floating">
                                                    <select class="form-select" name="payment_type" id="floatingSelect1">
                                                        <option value="" selected>Your payment type</option>
                                                        <option value="hourly">Hourly</option>
                                                        <option value="fixed">Fixed</option>

                                                    </select>
                                                    <label for="floatingSelect">Payment Type</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <div class="form-floating theme-form-floating">
                                                    <input type="number" class="form-control" name="budget"
                                                        id="budget">
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
                                                    <textarea style="height: 150px" type="text" class="form-control" id="#summernote"
                                                        name="description"></textarea>
                                                    <label for="description">Description</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6">
                                                <button type="submit"
                                                    class="btn theme-bg-color btn-sm fw-bold text-light">Create</button>
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

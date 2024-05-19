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
                    <h2>My Profile</h2>
                    <span class="title-leaf">
                        <svg class="icon-width bg-gray">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf">
                            </use>
                        </svg>
                    </span>
                </div>
                <div class="profile-about dashboard-bg-box">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="dashboard-title mb-3">
                                    <h3>Login Details</h3>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Email :</td>
                                                    <td>
                                                        <a href="javascript:void(0)">{{ auth()->user()->email }}
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Password :</td>
                                                    <td>
                                                        <a href="javascript:void(0)">●●●●●●
                                                            <span data-bs-toggle="modal"
                                                                data-bs-target="#editPassword">Edit</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xxl-5">
                            <div class="profile-image">
                                <img src="../assets/images/inner-page/dashboard-profile.png"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Edit Profile Start modal -->
    <div class="modal fade theme-modal" id="editPassword" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-xxl-12">
                            <form action="{{ route('client.updatePassword') }}" method="POST">
                                @csrf
                                <div class="form-floating theme-form-floating mb-5">
                                    <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                        name="old_password" id="old_password">
                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="Current Password">Current Password</label>

                                </div>
                                <div class="form-floating theme-form-floating mb-5">
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="New Password">New Password</label>
                                </div>
                                <div class="form-floating theme-form-floating mb-5">
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation">
                                    <label for="Confirmed Password">Confirm Password</label>
                                    @error('confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-animation btn-md fw-bold"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" data-bs-dismiss="modal"
                                        class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

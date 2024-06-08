@extends('layouts.app')
@section('css')
    <style>
        .header-basic a,
        .header-basic .menu-link {
            color: var(--clr-white) !important;
        }

        .display {
            display: none
        }
    </style>
@endsection
@section('content')
    <x-breadcrumb :title="'Register'" />
    <div class="account-pages mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        {{-- <div class="bg-primary-subtle">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Register</h5>
                                        <p>Get your free Sohojware account now.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div> --}}
                        <div class="card-body pt-0">
                            {{-- <div>
                                <a href="index.html">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ asset('assets/images/logo.svg') }}" alt=""
                                                class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div> --}}
                            <div class="p-2">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                            name="name" id="name" placeholder="Enter name" required
                                            autocomplete="email">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            Please Enter Name
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" placeholder="Enter email" required name="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            Please Enter Email
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" placeholder="Enter password" required autocomplete="new-password"
                                            name="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            Please Enter Password
                                        </div>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="password-confirm" class="form-label">Confirmed Password</label>
                                        <input type="password" class="form-control" id="password-confirm"
                                            name="password_confirmation" placeholder="Enter password" required>
                                        <div class="invalid-feedback">
                                            Confirmed Password
                                        </div>
                                    </div> --}}

                                    <div class="mt-4 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light"
                                            type="submit">{{ __('Register') }}</button>
                                    </div>
                                    {{-- 
                                    <div class="mt-4 text-center">
                                        <h5 class="font-size-14 mb-3">Sign up using</h5>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript::void()"
                                                    class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()"
                                                    class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()"
                                                    class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">By registering you agree to the Sohojware <a href="#"
                                                class="text-primary">Terms of Use</a></p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-2 text-center">

                        <div>
                            <p>Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary">
                                    Login</a>
                            </p>
                            <p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

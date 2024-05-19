<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{ asset('assets/images/favicon/1.png') }}" type="image/x-icon">
    <title>Sohojware | Client-Dashboard </title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<style>
    .user-nav-pills .nav-link {
        display: flex;
        align-items: center;
        padding: 10px 15px;
    }

    .user-nav-pills .nav-link i {
        margin-right: 8px;
    }
</style>

<body>
    <section class="user-dashboard-section section-b-space">
        <div class="container">
            <div class="row align-items-start justify-content-between">
                <div class="col-xxl-3 col-lg-4 col-md-3 col-sm-3">
                    <div class="dashboard-left-sidebar">
                        <div class="profile-box">
                            <div class="cover-image">
                                <img src="{{ asset('assets/images/sections-bg-images/pattern-bg-3.webp') }}"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="profile-contain">
                                <div class="profile-image">
                                    <div class="position-relative">
                                        <img src="{{ Voyager::image(auth()->user()->avatar) }}"
                                            class="blur-up lazyload update_img" alt="">
                                        <div class="cover-icon">
                                            <i class="fa-solid fa-pen" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">

                                            </i>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-name">
                                    <h3>{{ auth()->user()->name }}</h3>
                                    <h6 class="text-content">{{ auth()->user()->email }}</h6>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills user-nav-pills" id="show-menu" data-bs-target="#show-menu">
                            <li class="nav-item" role="presentation">

                                <a href="{{ route('client.dashboard') }}"
                                    class="nav-link {{ Route::current()->getName() == 'client.dashboard' ? 'active' : '' }}"><i
                                        data-feather="home"></i>
                                    Dashboard</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('client.project') }}"
                                    class="nav-link {{ Route::current()->getName() == 'client.project' ? 'active' : '' }}"
                                    id=""><i data-feather="user"></i>
                                    Projects</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('client.profile') }}"
                                    class="nav-link {{ Route::current()->getName() == 'client.profile' ? 'active' : '' }}"
                                    data-bs-target="#pills-profile"><i data-feather="user"></i>
                                    Profile</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="nav-link" type="submit" role="tab"><i data-feather="user"></i>
                                        Logout</button>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>

                @yield('deshboard')
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h2 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h2>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <div class="profile-box">
                            <div class="profile-contain d-flex justify-content-center align-items-center flex-column">
                                <div class="profile-image">
                                    <div class="position-relative">
                                        <img src="{{ Voyager::image(auth()->user()->avatar) }}"
                                            class="blur-up lazyload update_img rounded-circle"
                                            style="height:200px;width:200px;object-fit:cover" alt="">
                                        <div class="cover-icon bg-secondary rounded-circle d-flex justify-content-center text-light align-items-center"
                                            style="position: absolute;bottom:0px;left:10px;height:40px;width:40px;">
                                            <i class="fa-solid fa-pen" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">

                                            </i>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-name text-center my-3">
                                    <h2>{{ auth()->user()->name }}</h2>
                                    <h4 class="text-content mt-1">{{ auth()->user()->email }}</h4>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills flex-column user-nav-pills p-2" id="show-menu"
                            data-bs-target="#show-menu">
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('client.dashboard') }}"
                                    class="theme-bg-color text-light mb-2 nav-link {{ Route::current()->getName() == 'client.dashboard' ? 'active' : '' }}"><i
                                        data-feather="home"></i>
                                    Dashboard</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('client.project') }}"
                                    class="theme-bg-color text-light mb-2 nav-link {{ Route::current()->getName() == 'client.project' ? 'active' : '' }}"
                                    id=""><i data-feather="user"></i>
                                    Projects</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('client.profile') }}"
                                    class="theme-bg-color text-light mb-2 nav-link {{ Route::current()->getName() == 'client.profile' ? 'active' : '' }}"
                                    data-bs-target="#pills-profile"><i data-feather="user"></i>
                                    Profile</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="theme-bg-color text-light nav-link" type="submit" role="tab"><i
                                            data-feather="user"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>


                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Image Upload</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('client.imageUpload') }}" method="POST"
                                enctype="multipart/form-data">
                                <div class="modal-body">
                                    @csrf
                                    <input type="file" style="padding:100px;width:100%"
                                        class="form-control text-center" name="avatar">

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    {{-- <script src="{{ asset('assets/js/project-list.init.js') }}"></script> --}}
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

    {{-- <script>
        $('#massage').summernote({
            placeholder: 'Text Here....',
            tabsize: 2,
            height: 400,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]

        });
    </script> --}}

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "newestOnTop": true,
            "positionClass": "toast-bottom-left",
            "preventDuplicates": true,
            "showDuration": "150",
            "hideDuration": "200",
            "timeOut": "4500",
            "extendedTimeOut": "500",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    @if (session()->has('success'))
        <x-alert.success />
    @endif
</body>

</html>

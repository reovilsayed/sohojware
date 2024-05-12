@extends('layouts.client')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
@section('deshboard')
    <div class="col-xxl-9 col-lg-8">
        <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
            Menu</button>
        <div class="dashboard-right-sidebar">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel">
                    <div class="dashboard-home">
                        <div class="title">
                            <h2>My Dashboard</h2>
                            <span class="title-leaf">
                                <svg class="icon-width bg-gray">
                                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf">
                                    </use>
                                </svg>
                            </span>
                        </div>

                        <div class="dashboard-user-name">
                            <h6 class="text-content">Hello, <b class="text-title">Vicki E. Pope</b></h6>
                            <p class="text-content">From your My Account Dashboard you have the ability to
                                view a snapshot of your recent account activity and update your account
                                information. Select a link below to view or edit information.</p>
                        </div>

                        <div class="total-box">
                            <div class="row g-sm-4 g-3">
                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="total-contain">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/order.svg"
                                            class="img-1 blur-up lazyload" alt="">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/order.svg"
                                            class="blur-up lazyload" alt="">
                                        <div class="total-detail">
                                            <h5>Total Projects</h5>
                                            <h3>{{$projects->count()}}</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="total-contain">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/pending.svg"
                                            class="img-1 blur-up lazyload" alt="">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/pending.svg"
                                            class="blur-up lazyload" alt="">
                                        <div class="total-detail">
                                            <h5>Total Pending Order</h5>
                                            <h3>254</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="total-contain">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/wishlist.svg"
                                            class="img-1 blur-up lazyload" alt="">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/wishlist.svg"
                                            class="blur-up lazyload" alt="">
                                        <div class="total-detail">
                                            <h5>Total Wishlist</h5>
                                            <h3>32158</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>



                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
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
                                <div class="col-xxl-7">




                                    <div class="dashboard-title mb-3">
                                        <h3>Login Details</h3>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Email :</td>
                                                    <td>
                                                        <a href="javascript:void(0)">{{auth()->user()->email}}
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

                                <div class="col-xxl-5">
                                    <div class="profile-image">
                                        <img src="../assets/images/inner-page/dashboard-profile.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Edit Profile Start -->
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
    <div class="modal fade theme-modal" id="editProfile" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-xxl-12">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="pname" value="Jack Jennas">
                                    <label for="pname">Full Name</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-6">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="email" class="form-control" id="email1"
                                        value="vicki.pope@gmail.com">
                                    <label for="email1">Email address</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-6">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input class="form-control" type="tel" value="4567891234" name="mobile"
                                        id="mobile" maxlength="10"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                                this.value.slice(0, this.maxLength);">
                                    <label for="mobile">Email address</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-12">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address1"
                                        value="8424 James Lane South San Francisco">
                                    <label for="address1">Add Address</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-12">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address2" value="CA 94080">
                                    <label for="address2">Add Address 2</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect1">
                                        <option selected>Choose Your Country</option>
                                        <option value="kingdom">United Kingdom</option>
                                        <option value="states">United States</option>
                                        <option value="fra">France</option>
                                        <option value="china">China</option>
                                        <option value="spain">Spain</option>
                                        <option value="italy">Italy</option>
                                        <option value="turkey">Turkey</option>
                                        <option value="germany">Germany</option>
                                        <option value="russian">Russian Federation</option>
                                        <option value="malay">Malaysia</option>
                                        <option value="mexico">Mexico</option>
                                        <option value="austria">Austria</option>
                                        <option value="hong">Hong Kong SAR, China</option>
                                        <option value="ukraine">Ukraine</option>
                                        <option value="thailand">Thailand</option>
                                        <option value="saudi">Saudi Arabia</option>
                                        <option value="canada">Canada</option>
                                        <option value="singa">Singapore</option>
                                    </select>
                                    <label for="floatingSelect">Country</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect">
                                        <option selected>Choose Your City</option>
                                        <option value="kingdom">India</option>
                                        <option value="states">Canada</option>
                                        <option value="fra">Dubai</option>
                                        <option value="china">Los Angeles</option>
                                        <option value="spain">Thailand</option>
                                    </select>
                                    <label for="floatingSelect">City</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address3" value="94080">
                                    <label for="address3">Pin Code</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" data-bs-dismiss="modal"
                        class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Profile End -->
@endsection

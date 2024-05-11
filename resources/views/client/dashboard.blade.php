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
                                            <h5>Total Order</h5>
                                            <h3>3658</h3>
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

                        <div class="dashboard-title">
                            <h3>Account Information</h3>
                        </div>

                        <div class="row g-4">
                            <div class="col-xxl-6">
                                <div class="dashboard-content-title">
                                    <h4>Contact Information <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editProfile">Edit</a>
                                    </h4>
                                </div>
                                <div class="dashboard-detail">
                                    <h6 class="text-content">MARK JECNO</h6>
                                    <h6 class="text-content">vicki.pope@gmail.com</h6>
                                    <a href="javascript:void(0)">Change Password</a>
                                </div>
                            </div>

                            <div class="col-xxl-6">
                                <div class="dashboard-content-title">
                                    <h4>Newsletters <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editProfile">Edit</a></h4>
                                </div>
                                <div class="dashboard-detail">
                                    <h6 class="text-content">You are currently not subscribed to any
                                        newsletter</h6>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="dashboard-content-title">
                                    <h4>Address Book <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#editProfile">Edit</a></h4>
                                </div>

                                <div class="row g-4">
                                    <div class="col-xxl-6">
                                        <div class="dashboard-detail">
                                            <h6 class="text-content">Default Billing Address</h6>
                                            <h6 class="text-content">You have not set a default billing
                                                address.</h6>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#editProfile">Edit Address</a>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6">
                                        <div class="dashboard-detail">
                                            <h6 class="text-content">Default Shipping Address</h6>
                                            <h6 class="text-content">You have not set a default shipping
                                                address.</h6>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#editProfile">Edit Address</a>
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

                        <div class="profile-detail dashboard-bg-box">
                            <div class="dashboard-title">
                                <h3>Profile Name</h3>
                            </div>
                            <div class="profile-name-detail">
                                <div class="d-sm-flex align-items-center d-block">
                                    <h3>Vicki E. Pope</h3>
                                    <div class="product-rating profile-rating">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#editProfile">Edit</a>
                            </div>

                            <div class="location-profile">
                                <ul>
                                    <li>
                                        <div class="location-box">
                                            <i data-feather="map-pin"></i>
                                            <h6>Downers Grove, IL</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="location-box">
                                            <i data-feather="mail"></i>
                                            <h6>vicki.pope@gmail.com</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="location-box">
                                            <i data-feather="check-square"></i>
                                            <h6>Licensed for 2 years</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="profile-description">
                                <p>Residences can be classified by and how they are connected to
                                    neighbouring residences and land. Different types of housing tenure can
                                    be used for the same physical type.</p>
                            </div>
                        </div>

                        <div class="profile-about dashboard-bg-box">
                            <div class="row">
                                <div class="col-xxl-7">
                                    <div class="dashboard-title mb-3">
                                        <h3>Profile About</h3>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Gender :</td>
                                                    <td>Female</td>
                                                </tr>
                                                <tr>
                                                    <td>Birthday :</td>
                                                    <td>21/05/1997</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number :</td>
                                                    <td>
                                                        <a href="javascript:void(0)"> +91 846 - 547 -
                                                            210</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Address :</td>
                                                    <td>549 Sulphur Springs Road, Downers, IL</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="dashboard-title mb-3">
                                        <h3>Login Details</h3>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Email :</td>
                                                    <td>
                                                        <a href="javascript:void(0)">vicki.pope@gmail.com
                                                            <span data-bs-toggle="modal"
                                                                data-bs-target="#editProfile">Edit</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Password :</td>
                                                    <td>
                                                        <a href="javascript:void(0)">●●●●●●
                                                            <span data-bs-toggle="modal"
                                                                data-bs-target="#editProfile">Edit</span></a>
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

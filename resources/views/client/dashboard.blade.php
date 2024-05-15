@extends('layouts.client')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
@section('deshboard')
    <div class="col-xxl-9 col-lg-8">
        <div class="dashboard-right-sidebar">
            <div class="tab-content">
                <div class="tab-pane active">
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
                            <h6 class="text-content">Hello, <b class="text-title">{{ auth()->user()->name }}</b></h6>
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
                                            <h3>{{ $projects->count() }}</h3>
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

                           </div>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
@endsection

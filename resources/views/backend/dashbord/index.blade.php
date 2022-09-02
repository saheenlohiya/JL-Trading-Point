@extends('backend.layouts.master')
@section('head')
@endsection
@section('content')
<div class="container-xl wide-lg">
    <div class="nk-content-body">
        <div class="nk-block-head">
            <div class="nk-block-head-sub"><span>Welcome !</span></div>
            <div class="nk-block-between-md g-4">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">John Lorot</h2>
                    <div class="nk-block-des">
                        <h6>Account Number: 782694152</h6>
                        <p>Here's a summary of your account. Have fun!</p>
                    </div>
                </div>
                <div class="nk-block-head-content">
                    <ul class="nk-block-tools gx-3">
                        <li><a href="#" class="btn btn-primary"><span>Invest & Earn</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                        <li><a href="#" class="btn btn-white btn-light"><span>Deposit</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="row gy-gs">
                <div class="col-lg-5 col-xl-4">
                    <div class="nk-block">
                        <div class="nk-block">
                            <div class="card card-bordered text-light is-dark h-100">
                                <div class="card-inner">
                                    <div class="nk-wg7">
                                        <div class="nk-wg7-stats">
                                            <div class="nk-wg7-title">Available Balance</div>
                                            <div class="number-lg amount">0 USD</div>
                                        </div>
                                        <div class="nk-wg7-foot">
                                            <span class="nk-wg7-note">TOTAL AMOUNT INVESTED</span><br />
                                            <span class="nk-wg7-note">0 USD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="nk-block">
                        <div class="nk-block">
                            <div class="card card-bordered text-light is-dark h-100">
                                <div class="card-inner">
                                    <div class="nk-wg7">
                                        <div class="nk-wg7-stats">
                                            <div class="nk-wg7-title">Total Deposit</div>
                                            <div class="number-lg amount">0 USD</div>
                                        </div>
                                        <div class="nk-wg7-foot">
                                            <span class="nk-wg7-note">THIS MONTH(SEP)</span><br />
                                            <span class="nk-wg7-note">0 USD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="nk-block">
                        <div class="nk-block">
                            <div class="card card-bordered text-light is-dark h-100">
                                <div class="card-inner">
                                    <div class="nk-wg7">
                                        <div class="nk-wg7-stats">
                                            <div class="nk-wg7-title">Total Withdraw</div>
                                            <div class="number-lg amount">0 USD</div>
                                        </div>
                                        <div class="nk-wg7-foot">
                                            <span class="nk-wg7-note">THIS MONTH(SEP)</span><br />
                                            <span class="nk-wg7-note">0 USD</span>
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
@section('script')
@endsection

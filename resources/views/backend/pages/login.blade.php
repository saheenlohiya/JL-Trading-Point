<!DOCTYPE html>
<html lang="zxx" class="js">
@include('backend.layouts.head')
<style>
    .logo-img-lg {
        max-height: 120px !important;
    }
</style>
@if($massage = Session::get('success'))
<div class="alert alert-info">{{$massage}}</div>
@endif
<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="{{URL('/')}}" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{ url('/images/newlogo.png') }}" srcset="{{ url('/images/newlogo.png') }}" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ url('/images/newlogo.png') }}" srcset="{{ url('/images/newlogo.png') }}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Login</h4>
                                        <div class="nk-block-des">
                                            <p>Access the Admin Panel Using Your Email and Password.</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{Route('admin.login.post')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" name="email"  placeholder="Enter your Email Address">
                                        @if($errors->has('email'))
                                            <span class="text-danger">{{$errors->first('email')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>                                        
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter Your Password">
                                            @if($errors->has('password'))
                                                <span class="text-danger">{{$errors->first('password')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('backend.layouts.script')
</html>
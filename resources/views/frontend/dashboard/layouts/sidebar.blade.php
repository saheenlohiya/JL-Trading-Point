<div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
<div class="nk-sidebar-element nk-sidebar-head">
    <div class="nk-sidebar-brand">
        <a href="html/crypto/index.html" class="logo-link nk-sidebar-logo">
            <img class="logo-light logo-img" src="{{ url('/images/newlogo.png') }}" srcset="./images/newlogo.png 2x" alt="logo">
            <img class="logo-dark logo-img" src="{{ url('/images/newlogo.png') }}" srcset="./images/newlogo.png 2x" alt="logo-dark">
            <!-- <span class="nio-version">Crypto</span> -->
        </a>
    </div>
    <div class="nk-menu-trigger mr-n2">
        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
    </div>
</div> 
<div class="nk-sidebar-element">
    <div class="nk-sidebar-body" data-simplebar>
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-widget d-none d-xl-block">
                <div class="user-account-info between-center">
                    <div class="user-account-main">
                        <h6 class="overline-title-alt">MAIN ACCOUNT BALANCE</h6>
                        <div class="user-balance">0.00<small class="currency currency-btc">USD</small></div>
                    </div>
                </div>
                <ul class="user-account-data gy-1">
                    <li>
                        <div class="user-account-label">
                            <span class="sub-text">Profits (7d)</span>
                        </div>
                        <div class="user-account-value">
                            <span class="lead-text">0.00<span class="currency currency-btc">USD</span></span>
                        </div>
                    </li>
                    <li>
                        <div class="user-account-label">
                            <span class="sub-text">Deposit in orders</span>
                        </div>
                        <div class="user-account-value">
                            <span class="sub-text">0.00<span class="currency currency-btc">USD</span></span>
                        </div>
                    </li>
                </ul>
                <div class="user-account-actions">
                    <ul class="g-3">
                        <li><a href="#" class="btn btn-lg btn-primary"><span>Deposit</span></a></li>
                        <li><a href="#" class="btn btn-lg btn-warning"><span>Withdraw</span></a></li>
                    </ul>
                </div>
            </div><!-- .nk-sidebar-widget -->
            <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                    <div class="user-card-wrap">
                        <div class="user-card">
                            <div class="user-avatar">
                                <span>AB</span>
                            </div>
                            <div class="user-info">
                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                <span class="sub-text">info@softnio.com</span>
                            </div>
                            <div class="user-action">
                                <em class="icon ni ni-chevron-down"></em>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="nk-sidebar-menu">
                <!-- Menu -->
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title">Menu</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                            <span class="nk-menu-text">Buy Bitcoin</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                            <span class="nk-menu-text">Sell Bitcoin</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                            <span class="nk-menu-text">Transactions</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                            <span class="nk-menu-text">Investment</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                            <span class="nk-menu-text">Our Palns</span>
                        </a>
                    </li> 
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                            <span class="nk-menu-text">My Profile</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{Route('admin.logout')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                            <span class="nk-menu-text">Logout</span>
                        </a>
                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title">ADDITIONAL</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{Route('home.page')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                            <span class="nk-menu-text">Go to Home</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
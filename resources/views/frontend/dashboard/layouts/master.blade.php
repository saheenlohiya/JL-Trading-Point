<!DOCTYPE html>
<html lang="zxx" class="js">
    <head>
        @include('frontend.dashboard.layouts.head');
    </head>
<body class="nk-body npc-crypto bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('frontend.dashboard.layouts.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('frontend.dashboard.layouts.header');
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    @yield('content')
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('frontend.dashboard.layouts.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @yield('script');
</body>
</html>
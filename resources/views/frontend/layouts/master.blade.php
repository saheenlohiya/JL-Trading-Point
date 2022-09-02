<!DOCTYPE html>
<html lang="en">
	@include('frontend.layouts.head')
<body>
    @include('frontend.layouts.header')

        @yield('content')
	<!-- Footer -->
	<section class="footer_section py-lg-5 py-md-4 py-4 bg-light">
		@include('frontend.layouts.footer')
	</section>
</body>
 @include('frontend.layouts.script')
</html>
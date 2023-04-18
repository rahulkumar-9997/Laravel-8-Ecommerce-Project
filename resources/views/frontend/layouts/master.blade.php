<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('frontend.layouts.headcss')	
</head>
    <body>
	<!-- Preloader -->
	<div id="preloader">
	    <div class="lds-css">
		<div class="preloader-3">
		    <span></span>
		    <span></span>
		</div>
	    </div>
	</div>
	<!-- End Preloader -->
	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
	@yield('main-content')
	@include('frontend.layouts.footer')
	@include('frontend.layouts.footerjs')
	{{--CUSTOMER LOGIN MODAL FORM--}}
	@include('frontend.layouts.customer-login')
	{{--CUSTOMER LOGIN MODAL FORM--}}
    </body>
</html>
<header class="top-nav2">
    <!-- Top Address -->
    <div class="top-address xeina-top-bar">
	<div class="container">
	    <div class="row">
		<div class="col-lg-12">
		    <div class="top-address-ditels">
			<ul>
			    <li>
				<i class="fas fa-envelope-open"></i>
				<a href="mailto:shashank.mohan@xeinadrugs.com">shashank.mohan@xeinadrugs.com</a>
			    </li>
			    <!--<li>
				<i class="far fa-clock"></i>
				<span>Sunday to Friday  :  8.00 Am - 9.00 Pm</span>
			    </li>-->
			    <li>
				<i class="fas fa-phone"></i>
				<a href="#">+91 120 5150015</a>
			    </li>
			    {{--@dd(Auth::user()->role)--}}
			    @if(Auth::check() && Auth::user()->role === 'Customer')
			    <li class="dropdown xeina-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						My Account
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu customer" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(35px, 24px, 0px);">
						<li class="xtreme-front-hi">
							<a href="#">{{ Auth::user()->name }}</a>
						</li>
						<li class="li-block">
							<a href="#">Dashboard</a>
						</li>
						<li>
							<a href="{{ url('/logout') }}">Logout</a>
						</li>
					</ul>
			    </li>
			    @else
				<li>
				    <i class="fas fa-user"></i>
				    <a  href="#customerLoginModal" target="customerLoginModal" data-toggle="modal">Sign In</a>
				</li>
			    @endif
			    <!--li>
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			    </li-->
			</ul>
		    </div>
		    <!--<div class="top-socile">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
		    </div>-->
		</div>
	    </div>
	</div>
    </div>
    <!-- End Top Address -->

    <!-- Top Menu -->
    <nav id="cssmenu">
	<div class="container">
	    <div class="row">
		<div class="col-lg-2">
		    <div class="logo logo-position">
			<a href="{{URL::to('/')}}">
			    <img src="{{asset('fronted/image/xeina-xtreme-pro-full-logo.png')}}" alt="logo">
			</a>
		    </div>
		</div>
		<div class="col-lg-9">
		    <div id="head-mobile"></div>
		    <div class="button"></div>
		    <ul class="navbar-nav">
			<li>
			    <a href="{{route('xtreme-pro-whey-protein')}}">
				<span class="menu-last-word-first">XTREME</span>
				PRO 
				<span class="menu-last-word-last">WHEY PROTEIN</span>
			    </a>

			</li>
			<li>
			    <a href="{{route('xtreme-endurance-bcaa')}}">
				<span class="menu-last-word-first">XTREME</span>
				ENDURANCE 
				<span class="menu-last-word-last">BCAAS</span>
			    </a>
			</li>
			<li>
			    <a href="{{route('xtreme-tournament')}}">
				<span class="menu-last-word-first">XTREME</span>
				SURVIVOR 
				<span class="menu-last-word-last">TOURNAMENT</span>
			    </a>
			</li>
			<li>
			    <a href="{{route('contact-us')}}">
				<span class="menu-last-word-first">ORDERS</span>
				CONTACT US 
				<span class="menu-last-word-last">ENQUIRY</span>
			    </a>
			</li>
			
		    </ul>
		</div>
		<div class="col-lg-1 text-right p-0">
		    <div class="shopping-bag">
				<a class="cart" href="{{ route('cart') }}"><i class="fa fa-shopping-bag"></i><span>{{ count((array) session('cart')) }}</span></a>
		    </div>
		    <!-- <div class="search-dropdown">
			<button type="button" class="icon-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <i class="fas fa-search"></i>       
			</button>
			<form class="dropdown-menu dropdown-menu-right">
			    <input class="search-input " name="search" placeholder="Search " aria-label="Search ">
			    <button class="search-btn " type="submit"><i class="fas fa-search "></i>  </button>
			</form>
		    </div>
		    <div class="become-member ">
			<a href="# ">BECOME A MEMBER</a>
		    </div> -->
		</div>
	    </div>
	</div>
    </nav>
    <!-- End Top Menu -->
</header>
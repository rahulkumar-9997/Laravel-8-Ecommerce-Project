@extends('frontend.layouts.master')
@section('title','Xeina Xtreme - Protein and Nutrition Supplements')
@section('main-content')
{{--@dd(Auth::check());--}}
<!-- ===========================  =====>> Feature <<===== -->
<section id="hero-2" class="hero-2-bg header2">
    <div class="fullslider2 owl-carousel owl-theme">
	<div class="item slider-bg-4">
	    <div class="container">
		<div class="row">
		    <div class="col-xl-8 col-lg-8">
			<div class="hero-text">
			    <h1 class="cd-headline clip">
				<!--<span>XTREME </span>-->
				<span class="cd-words-wrapper1">
				    <b class="is-visible">DREAM <span class="color-it-white">IT</span></b>
				    <!--<b>DARE <span class="color-it-white">IT</span></b>
				    <b>DO <span class="color-it-white">IT</span></b>-->
				</span>
			    </h1>
			    <h2>WHEY Protein Isolate with Sodium</h2>
			    <p>Meet your Performance Goals with Xtreme Pro.</p>
			    <a href="{{route('xtreme-pro-whey-protein')}}" class="btn btn-1">More Details</a>
			</div>
		    </div>
		</div>
	    </div>
	</div>
	<div class="item slider-bg-3">
	    <div class="container">
		<div class="row">
		    <div class="col-xl-8 col-lg-8">
			<div class="hero-text">
			    <h1 class="cd-headline clip">
				<!--<span>XTREME </span>-->
				<span class="cd-words-wrapper1">
				    <b class="is-visible">DARE <span class="color-it-white">IT</span></b>
				    <!--<b>DARE <span class="color-it-white">IT</span></b>
				    <b>DO <span class="color-it-white">IT</span></b>-->
				</span>
			    </h1>
			    <h2>BCAA with Electrolytes</h2>
			    <p>Xtreme Endurance boosts endurance, reduces fatigue, enhances energy, supports recovery</p>
			    <a href="{{route('xtreme-endurance-bcaa')}}" class="btn btn-1">View Details</a>
			</div>
		    </div>
		</div>
	    </div>
	</div>
	<div class="item slider-bg-2">
	    <div class="container">
		<div class="row">
		    <div class="col-xl-8 col-lg-8">
			<div class="hero-text">
			    <h1 class="cd-headline clip">
				<!--<span>XTREME </span>-->
				<span class="cd-words-wrapper1">
				    <b class="is-visible">DO <span class="color-it-white">IT</span></b>
				    <!--<b>DARE <span class="color-it-white">IT</span></b>
				    <b>DO <span class="color-it-white">IT</span></b>-->
				</span>
			    </h1>
			    <h2>BCAA with Electrolytes</h2>
			    <p>Xtreme Endurance boosts endurance, reduces fatigue, enhances energy, supports recovery</p>
			    <a href="{{route('xtreme-endurance-bcaa')}}" class="btn btn-1">View Details</a>
			</div>
		    </div>
		</div>
	    </div>
	</div>
    </div>

</section>
<section id="feature-area" class="feature-home-2 pt-10 pb-80">
    <div class="container">
	<div class="row">
	    <!-- Feature Item -->
	    <div class="col-lg-4 col-md-6">
		<div class="feature-item text-center pt-50">
		    <div class="feature-i">
			<i class="flaticon-juice"></i>
		    </div>
		    <div class="feature-text">
			<h3>Xtreme Fitness</h3>
			<p>Consumption of protein in your regular diet may not be sufficient for your fitness. 
			    To achieve that extreme fitness, Xtreme products help you to achieve that 
			    goal and maintain it for a longer period.</p>
		    </div>
		</div>
	    </div>
	    <!-- Feature Item -->
	    <div class="col-lg-4 col-md-6">
		<div class="feature-item text-center pt-50">
		    <div class="feature-i">
			<i class="flaticon-male-silhouette-variant-showing-muscles"></i>
		    </div>
		    <div class="feature-text">
			<h3>Combat Sports</h3>
			<p>Combat sports need extensive training and people who train hard demand a superior 
			    and more effective protein. Xtreme offers variety of products which helps fuel your
			    muscles longer.</p>
		    </div>
		</div>
	    </div>
	    <!-- Feature Item -->
	    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
		<div class="feature-item text-center pt-50">
		    <div class="feature-i">
			<i class="flaticon-male-arm-muscles"></i>
		    </div>
		    <div class="feature-text">
			<h3>Health & Wellness</h3>
			<p>You need to balance everything in your daily life with your diet at centre. 
			    Our products aim to give reliable supplements on your journey towards a healthy, sustainable diet.</p>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</section>
<section id="fitner-area" class="fitner-about pt-60 pb-150">
    <div class="container">
	<div class="row">
	    <div class="col-lg-8 offset-lg-2">
		<div class="section-title text-center">
		    <h2>Importance of  <span>Proteins</span> </h2>
		    <p>
		    Protein is one of the major components of a healthy, functional body.
		    Practically all of the reactions in the body are regulated by enzymes, 
		    which are a type of protein. Digestion and energy production are two 
		    examples of bodily processes that are influenced by proteins. 
		    Protein is vital for muscle growth and repair, especially after exercise.
		    Additionally, protein helps strengthen your body on the outside in the
		    forms of keratin and collagen.
		    </p>
		</div>
	    </div>
	</div>
	<div class="fitner-content pt-30 ">
	    <div class="row ">
		<div class="col-lg-4 col-md-6">
		    <!-- fitner item -->
		    <div class="fitner-item fitner-border mt-50">
			<!--<img src="assets/img/icon/1.png" alt=" ">-->
			<h2>Whey protein </h2>
			<p>Whey is a nutrient-dense, nearly translucent liquid consisting of all nine essential amino acids (the building blocks of protein) and vitamins and minerals. Whey protein powder is often used as a nutritional supplement, and it can be added to smoothies, shakes, protein bars, meal replacements and more.</p>
		    </div>
		</div>
		<div class="col-lg-4 col-md-6">
		    <!-- fitner item -->
		    <div class="fitner-item fitner-border mt-50">
			<!--<img src="assets/img/icon/3.png" alt=" ">-->
			<h2>BCAAs</h2>
			<p>BCAAs represent about 35 to 40% of all essential amino acids in the body, and 14 to 18% can be found in the muscles. BCAAs can help the body produce energy during exercise, as well as reduce fatigue during it. BCAAs can also regulate blood sugar levels by helping your cells take in sugar from the bloodstream</p>
		    </div>
		</div>
		<div class="col-lg-4 col-md-6">
		    <!-- fitner item -->
		    <div class="fitner-item  mt-50">
			<!--<img src="assets/img/icon/2.png" alt=" ">-->
			<h2>Preworkout </h2>
			<p>The purpose of a pre-workout meal is simple: to fuel your activity and give your body what it needs to perform at its peak. One must eat 1-3 hours before workout, depending on how quickly body digests food. Liquid meals digest more easily and can be consumed closer to the workout time.</p>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</section>

<section id="pricing-area" class="pt-30 pb-50">
    <div class="container ">
	<div class="row ">
	    <div class="col-lg-8 offset-lg-2 ">
		<div class="section-title text-center ">
		    <h2>Our  <span>Products</span></h2>
		    <!--<p>Kick your feet up! With a gym designed around you, we think
		    <br> you’ll love it here.</p>-->
		</div>
	    </div>
	</div>
	<div class="pricing-content pt-40">
	    <div class="row justify-content-md-center-1 about__area">
		<!-- Pricing Item -->
		<div class="col-lg-5">
		    <a href="{{route('xtreme-pro-whey-protein')}}" class="product">
			<div class="abs__info mb-30">
			    <div class="abs__image-1 w-img xeina-image-border">
			       <img src="{{asset('fronted/image/xeina-xtreme-pro.jpg')}}" alt="">
			    </div>
			    <!--<div class="product-title">
				<h4 class="title-5">Whey Protein Isolate (1Kg)</h4>
			    </div>-->
			    <div class="abs__image-2 w-img">
			       <img src="{{asset('fronted/image/xeina-xtreme-pro-bottol-1.png')}}" alt="">
			    </div>
			</div>
		    </a>
		</div>
		<div class="col-lg-5">
		    <a href="{{route('xtreme-endurance-bcaa')}}">
			<div class="abs__info mb-30">
			    <div class="abs__image-1 w-img xeina-image-border">
			       <img src="{{asset('fronted/image/xeina-xtreme-endurance.jpg')}}" alt="">
			    </div>
			    <div class="abs__image-2 w-img">
				<img src="{{asset('fronted/image/Endurance-Blue-Bottle-2.png')}}" alt="">
			    </div>
			</div>
		    </a>
		</div>
	    </div>
	</div>
    </div>
</section>
<section id="team-area" class="pt-10 pb-100">
    <div class="container">
	<div class="row ">
	    <div class="col-lg-8 offset-lg-2">
		<div class="section-title text-center">
		    <h2>Our Product <span>Trials</span></h2>
		    <p>Xtreme Pro and Xtreme Endurance had a trial run tested by world class MMA athletes and officials from all over India in Xtreme Survivor Tournament held in Greater Noida in March 2022. The Products were really appreciated by all the Participants and they now feature in their regular fitness regime. Here are some of the glimpse of the event and Xtreme Pro & Xtreme Endurance trials.</p>
		</div>
	    </div>
	</div>
	<div class="team-content pt-40">
	    <div class="row">
		<!-- team item -->
		<div class="col-lg-4 col-md-6 col-sm-6">
		    <div class="team-box effect-item mt-40">
			<div class="team-item content-overlay">
			    <img src="{{asset('fronted/image/trials-image/xtreme-pro-trails.jpeg')}}" alt="">
			</div>
		    </div>
		</div>
		<!-- team item -->
		<div class="col-lg-4 col-md-6 col-sm-6">
		    <div class="team-box effect-item mt-40">
			<div class="team-item content-overlay">
			    <img src="{{asset('fronted/image/trials-image/xtreme-pro-trials-1.jpeg')}}" alt="">
			</div>
		    </div>
		</div>
		<!-- team item -->
		<div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3">
		    <div class="team-box effect-item mt-40">
			<div class="team-item content-overlay">
			    <img src="{{asset('fronted/image/trials-image/xtreme-pro-trials-2.jpeg')}}" alt="">
			</div>
		    </div>
		</div>
		<div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3">
		    <div class="team-box effect-item mt-40">
			<div class="team-item content-overlay">
			    <img src="{{asset('fronted/image/trials-image/xtreme-pro-trials-3-1.jpg')}}" alt="">
			</div>
		    </div>
		</div>
		<div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3">
		    <div class="team-box effect-item mt-40">
			<div class="team-item content-overlay">
			    <img src="{{asset('fronted/image/trials-image/xtreme-pro-trials-4.jpeg')}}" alt="">
			</div>
		    </div>
		</div>
		<div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3">
		    <div class="team-box effect-item mt-40">
			<div class="team-item content-overlay">
			    <img src="{{asset('fronted/image/trials-image/xtreme-pro-trials-5.png')}}" alt="">
			</div>
		    </div>
		</div>

	    </div>
	</div>
    </div>
</section>
<section id="trainer-area" class="pb-70">
    <div class="container">
	<div class="row">
	    <div class="col-lg-3 align-self-center mt-40">
		<div class="trainer-img">
		    <img src="{{asset('fronted/image/xeina-drugs-logo-black.png')}}" alt="Xeina Drugs Logo">
		</div>
	    </div>
	    <div class="col-lg-9 mt-40">
		<div class="about-section-11-right">
		    <div class="section-title text-center1">
			<h2>ABOUT XEINA<span> DRUGS</span></h2>
			<div class="blog-single-text mb-20">
			    <h3>
				Xeina Drugs Private Limited is a pharmaceutical
				licensing company based out of Noida, U.P.,
				India, specializing in the sourcing, representation
				and marketing of pharmaceutical and allied
				products.
			    </h3>
			</div>
			<p>
			    Since its inception in 2017 with a vision to
			    “Make unique finished dosage forms accessible
			    to the emerging markets”, Xeina today has a
			    rich portfolio of super specialized products in
			    stem cell therapy (innovative therapy from
			    Europe for critical limb ischemia, monoclonal
			    antibodies and generic formulations in multiple
			    sclerosis, immunotherapy and Cardio-vasculars,
			    to name a few) by representing some of the
			    leading companies from India (Cadila, Dr. Reddy’s,
			    Ipca, Strides, Caplin) and Europe (Polpharma,
			    Adamed, Biofarm, Axxo Germany).
			</p>
			<!--<p>
			    With a passion to promote sports and performance
			    goals of professional athletes, Xeina Drugs
			    now introduces XEINA XTREME.
			</p>-->
			<a href="https://www.xeinadrugs.com" target="_blank" class="btn-style-a">READ MORE</a>
		    </div>
	       </div>
	    </div>
	</div>
    </div>
</section>
<!--SECOND TEST END-->
@endsection
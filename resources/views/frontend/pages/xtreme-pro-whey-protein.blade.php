@extends('frontend.layouts.master')
@section('title','Xeina Xtreme - Protein and Nutrition Supplements')
@section('main-content')
<!-- ===========================  =====>> Feature <<===== -->
<section id="page-hero" class="about-bg">
    <div class="container">
	<div class="row">
	    <div class="col-lg-12">
		<div class="page-title text-center">
		    <h1>XTREME <span> PRO</span></h1>
		    <!--<ol class="breadcrumb">
			<li class="breadcrumb-item">
			    <a href="">Home</a>
			</li>

			<li class="breadcrumb-item active">
			    About Us
			</li>
		    </ol>-->
		</div>
	    </div>
	</div>
    </div>
</section>
<!-- =====>> End Page Hero <<=====   =========================== -->
<!-- =========================== =====>> Shop Single <<===== -->
<section id="shop-single-area" class="shop-single-gallery pt-50">
    <div class="container">
	<div class="row">
	    <div class="col-lg-12 pb-20">
		<div class="class-single-right-like-item1 media d-flex justify-content-center product-details">
		    <div class="xeina-slide-image-div">
			<img src="{{asset('fronted/image/xeina-xtreme-pro-bottol-1.png')}}" alt="" class="xtreme-pro-image">
		    </div>
		    <div class="xeina-slide-content-div align-self-center">
			<div class="class-single-right-like-item-text">
			   <h4 class="cd-headline clip h4-slide">
				<span class="great-text">GREAT </span>
				<span class="cd-words-wrapper">
				    <b class="is-visible">TASTE</b>
				    <b>QUALITY</b>
				    <b>RESULTS</b>
				</span>
			    </h4>
			</div>
		    </div>
		</div>
	    </div>
	    <div class="col-lg-6">
		<div class="shop-slider">
		    <div class="shop-slider-item">
			<a href="{{asset('fronted/image/xeina-xtreme-pro.jpg')}}" class="sg">
			    <img src="{{asset('fronted/image/xeina-xtreme-pro.jpg')}}" alt="">
			</a>
		    </div>
		    <!--<div class="shop-slider-item">
			<a href="assets/image/xeina-xtreme-pro-bottol-1.png" class="sg">
			    <img src="assets/image/xeina-xtreme-pro-bottol-1.png" alt="">
			</a>
		    </div>-->
		</div>
		<!--<div class="shop-slider2">
		    <div class="shop-slider2-item">
			<img src="assets/image/xeina-xtreme-pro.jpg" alt="">
		    </div>
		    <div class="shop-slider2-item">
			<img src="assets/image/xeina-xtreme-pro-bottol-1.png" alt="">
		    </div>
		</div>-->
	    </div>
	    <div class="col-lg-6">
		<div class="shop-slider2-right">
		    <h2 class="product_title">Xtreme Pro </h2>
		    <h4>
			Whey Protein Isolate with Sodium
			Chocolate flavour
		    </h4>
		    <div class="comment-author-text">
			<h6>For <span class="xtreme-pro-color">Muscle Support</span> & <span class="xtreme-pro-color"> Recovery</span></h6>
		    </div>
		    <p>
			Packed with <span class="xtreme-pro-color">26 grams </span> of <span class="xtreme-pro-color">High-Quality Protein </span> per serving to help build muscle.
		    </P>
		    <p>
			With <span class="xtreme-pro-color"> Xtreme Pro</span> Whey Protein Isolate with Sodium,
			support your activities and performance goals like never before.
			Train hard, meet your daily health and recovery goals and bring 
			out the true champion in you.
		    </p>
		    <p>
			Xtreme Pro Whey Protein Isolate helps to build lean muscle mass, 
			support muscle gain. It also helps to fulfil the daily protein requirements
			for both men and women.
		    </p>
		    <h4 class="price"><i class="fas fa-rupee-sign"></i> 3900 per Kg (1 Unit)</h4>
		    <div class="row">
			<div class="col-lg-6 mt-40">
			    <div class="pricing-item media pricing-item-bgc tast-great">
				<div class="pricing-item-left tast-great-left">
				    <ul>
					<li>
					    <h3 class="pricing-item-left-h3 h3-left"> TASTES GREAT!</h3>
					</li>
				    </ul>
				</div>
				<div class="pricing-item-right mixes-right">
				    <ul>
					<li>
					     <h3 class="pricing-item-left-h3 h3-left">MIXES EASILY!</h3>
					</li>
				    </ul>
				</div>
			    </div>
			</div>
			<div class="col-lg-6 buy-now-div mt-40">
			    <a href="{{ route('add.to.cart', '4') }}" class="text-center xtreme-pro-product">
				<div class="pricing-item media pricing-item-bgc tast-great">
				    <h3 class="pricing-item-left-h3 h3-left buy-now-with buy-now-padding"> ORDER NOW</h3>
				</div>
			    </a>
			</div>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</section>
<!-- =====>> End Shop Single <<===== 
=========================== -->

<!-- ===========================
=====>> Shop Tab <<===== -->
<section id="shop-single-tab-area" class="pt-30 pb-40">
    <div class="container">
	<div class="row">
	    <div class="col-lg-12">
		<div class="shop-single-tab-content">
		    <ul class="shop-single-tab product-details-tab">
			<li class="tab-link current" data-tab="tabs-1">Product Description</li>
		    </ul>
		    <div id="tabs-1" class="tab-content3 current">
			<div class="row">
			    <div class="col-lg-6 p-0d">
				<div class="ttm-item">
				    <h4>Not for Medical use</h4>
				    <p>
					Contain Non Caloric Sweetener 
				    </p>
				    <p>
					This product contains Sucralose, not recommended for Children
				    </p>
				    <p>
					<b>Allergen informaton</b> : Contains milk. May contain Soy and Nuts
				    </p>
				</div>
			    </div>
			    <div class="col-lg-6 p-0d">
				<div class="ttm-item ttm-item-center trainers-information product-usage-level">
				    <ul>
					<li><span>RECOMMENDED USAGE LEVEL</span> : 1 serving per day.</li>
					<li><span>DURATION OF USAGE</span> : Daily intake as per recommended usage</li>
					<li><span>STORAGE CONDITION</span> : Store in a cool and dry place, away from sunlight. Close lid tightly after each use. Product is required to be stored out of reach Of children. </li>
				    </ul>
				</div>
			    </div>
			</div>
			<div class="class-single-left">
			    <h3>Ingredients</h3>
			    <p>
				Whey Protein Isolate, Cocoa Solids, Chocolate Flavour, Sodium Chloride, Thickener (INS 955), Anticaking Agent (INS 551)
			    </p>
			    <h3>Health Supplement</h3>
			    <p>
				Health supplement is not to be used as a substitute for a varied diet.
			    </p>
			</div>

			<div class="fitner-content1 pt-40 pb-40">
			    <div class="row">
				<div class="col-lg-12">
				    <div class="section-title text-center intruction">
					<h2 class="font-family-xtreme">Instructions For <span>Use</span> </h2>
				    </div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 mt-10">
				    <div class="bg-white card-2 shadow padding-md">
					<h3 class="margin-y-sm text-md color-primary">
					    <b>31g</b> (1 Scoop) Whey Protein Powder 
					</h3>
				    </div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 mt-10">
				    <div class="bg-white card-2 shadow padding-md">
					<h3 class="margin-y-sm text-md color-primary">
					    180ml Cold Water or Milk
					</h3>
				    </div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 mt-10">
				    <div class="bg-white card-2 shadow padding-md">
					<h3 class="margin-y-sm text-md color-primary">
					    30 seconds stir, shake or blend until dissolved
					</h3>
				    </div>
				</div>
				<div class="col-lg-12">
				    <div class="pt-30 text-center">
					<p class="font-18">
					    To prepare one serving, add 31g(Approx) powder in a shaker and add 180ml water.<br>
					    Shake well before drinking.
					</p>
					<p class="font-18">
					    All claims are applicable to mixing 31g of powder in 180ml of water.
					</p>
				    </div>
				</div>
			    </div>
			</div>
			<div class="product-details-div">
			    <div class="text-center">
				<h2 class="product_title">Nutrition Information </h2>
				<h4 class="product-details-h4">
				    Serving Per Container : 32 
				</h4>
				<h4 class="product-details-h4">
				    Serving Size : 1 Scoop (31g)
				</h4>
			    </div>
			    <div class="pt-20 table-responsive">
				<table class="table table-bordered xtreme-pro-whey-table">
				    <tr>
					<th>(Approx. Value)  </th>
					<th>Per 100g </th>
					<th>Per Serving (31g)</th>
					<th>% RDA  Per Serve </th>
				    </tr>
				    <tr>
					<td>Energy</td>
					<td>366.90 kcal</td>
					<td>113.74 kcal</td>
					<td>5.69*</td>
				    </tr>   
				    <tr>
					<td>Protein</td>
					<td>84.50 g</td>
					<td>26.20 g </td>
					<td>48.50</td>
				    </tr>   
				    <tr>
					<td>Carbohydrate</td>
					<td>5.92 g</td>
					<td>1.84 g </td>
					<td>#</td>
				    </tr>   
				    <tr>
					<td class="text-center">Total Sugars</td>
					<td>1.24 g</td>
					<td>0.38 g</td>
					<td>#</td>
				    </tr>   
				    <tr>
					<td class="text-center">Added Sugars</td>
					<td>0.00 g</td>
					<td>0.00 g</td>
					<td>#</td>
				    </tr>   
				    <tr>
					<td class="text-center">As Sucrose</td>
					<td>0.00 g</td>
					<td>0.00 g</td>
					<td>0.00*</td>
				    </tr>   
				    <tr>
					<td>Total Fat</td>
					<td>0.58 g</td>
					<td>0.18 g</td>
					<td>0.27*</td>
				    </tr>   
				    <tr>
					<td class="text-center">Saturated Fat</td>
					<td>0.27 g</td>
					<td>0.08 g</td>
					<td>0.38*</td>
				    </tr>   
				    <tr>
					<td class="text-center">Cholesterol</td>
					<td>0.00 mg</td>
					<td>0.00 mg</td>
					<td>#</td>
				    </tr>   
				    <tr>
					<td class="text-center">Trans Fat</td>
					<td>0.00 mg</td>
					<td>0.00 mg</td>
					<td>0.00*</td>
				    </tr>   
				    <tr>
					<td>Sodium</td>
					<td>335.00 mg</td>
					<td>103.85 mg</td>
					<td>5.19*</td>
				    </tr>   
				</table>
			    </div>
			    <div class="trainers-information">
				<ul>
				    <li>% RDA Values established as per ICMR 2020 for Moderate Work Men</li>
				    <li>*% RDA expressed on the basis of 2000 kcal energy required for an average adult</li>
				    <li>#% RDA not established</li>
				</ul>
			    </div>
			</div>
			<div class="class-single-left">
			    <h3>Warning</h3>
			    <p>
				Consult your physician if you are taking any other medication before
				consuming this product.
			    </p>
			    <p>
				This product is not intended to diagnose, treat,
				cure or prevent any disease.
			    </p>
			    <p>  Not to exceed the
				stated recommended daily usage.
			    </p>
			</div>    
		    </div>
		</div>
	    </div>
	</div>
    </div>
</section>
@endsection
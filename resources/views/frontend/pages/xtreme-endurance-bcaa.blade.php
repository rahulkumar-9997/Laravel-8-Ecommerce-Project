@extends('frontend.layouts.master')
@section('title','Xeina Xtreme - Xtreme Endurance BCCA')
@section('main-content')
<!-- =====>> End Top Menu <<===== =========================== -->
    <!-- ===========================   =====>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>XTREME <span>ENDURANCE </span></h1>
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
		@if(session('success'))
			<div class="alert alert-success">
			{{ session('success') }}
			</div> 
		@endif
		<div class="col-lg-12 pb-20">
		    <div class="class-single-right-like-item1 media d-flex justify-content-center product-details">
			<div class="xeina-slide-image-div">
			    <img src="{{asset('fronted/image/Endurance-Blue-Bottle-2.png')}}" alt="" class="xtreme-pro-image">
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
                            <a href="{{asset('fronted/image/xeina-xtreme-endurance.jpg')}}" class="sg">
                                <img src="{{asset('fronted/image/xeina-xtreme-endurance.jpg')}}" alt="">
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
                        <h2 class="product_title">Xtreme Endurance </h2>
                        <h4>
			    BCAA with Electrolytes 
			</h4>
			
			<div class="comment-author-text">
			    <h6>Blue Rasberry <span class="xtreme-pro-color">Flavour</span></h6>
			</div>
			<p>
			    Xtreme Endurance BCCA with Electrolytes is a 
			    powerful intra-workout fuel designed to help you boost endurance,
			    reduce fatigue, maximize recovery and build muscle.
			    Stay hydrated before, during and after workout with the
			    added Electrolytes. 
			</p>
			<h4 class="price"><i class="fas fa-rupee-sign"></i> 2900 per 400 gm (1 Unit)</h4>
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
					<a href="{{ route('add.to.cart', '5') }}" class="text-center xtreme-endurance-product">
						<div class="pricing-item media pricing-item-bgc tast-great">
							<h3 class="pricing-item-left-h3 h3-left buy-now-with buy-now-padding"> ORDER NOW</h3>
						</div>
					</a>
			    </div>
				
			</div>
		</div>
	</div>
</div>
	    <div class="rs-services-style1 pt-60">
		<div class="row">
		    <div class="col-lg-3 col-md-3 col-sm-6 mt-10">
			<div class="bg-white card-2 shadow padding-md">
			    <h3 class="margin-y-sm text-md color-primary">
				Boost Endurance
			    </h3>
			</div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-6 mt-10">
			<div class="bg-white card-2 shadow padding-md">
			    <h3 class="margin-y-sm text-md color-primary">
				Reduces Fatigue
			    </h3>
			</div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-6 mt-10">
			<div class="bg-white card-2 shadow padding-md">
			    <h3 class="margin-y-sm text-md color-primary">
				Enhances Energy
			    </h3>
			</div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-6 mt-10">
			<div class="bg-white card-2 shadow padding-md">
			    <h3 class="margin-y-sm text-md color-primary">
				Support Recovery
			    </h3>
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
				    <div class="ttm-item trainers-information product-usage-level">
					<h4>Food Supplement</h4>
					<ul>
					    <li><span>NOT FOR MEDICAL USAGE</span> : Contain non-caloric sweetener.<br> This product contains Sucralose, not recommended for Children.</li>
					    <li><span>ALLERGEN INFORMATION</span> : Contains milk. May contain Soy and Nuts.</li>
					</ul>
				    </div>
				</div>
				<div class="col-lg-6 p-0d">
				    <div class="ttm-item ttm-item-center trainers-information product-usage-level">
					<ul>
					    <li><span>RECOMMENDED USAGE LEVEL</span> : 1 Serving per Day.</li>
					    <li><span>PURPOSE OF PRODUCT AND PHYSIOLOGICAL CONDITION</span> :  This product is intended to support health functions.</li>
					    <li><span>DURATION OF USAGE</span> :  This product is for Adults (Men).</li>
					    <li><span>TARGET CONSUMER GROUP</span> :    Daily intake as per recommended usage.</li>
					</ul>
				    </div>
				</div>
			    </div>
			    <div class="class-single-left">
				<h3>Ingredients</h3>
				<p>
				    BCCA (L-Lecucine, L-Isoleucine, L-Valine), L-Glutamine Citruline Malatie, Acidity Regulators (INS 330, INS 296), Anti Caking Agent (INS 551) Potassium Phosphate, Sodium Chloride, Sodium Citrate, Raspberry Flavour, Blueberry Flavour, Sweeteners (INS 965, INS 950), Pyridoxine Hydrochloride, Colour (INS 133).
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
						13g (1 Scoop) - BCAA Powder.
					    </h3>
					</div>
				    </div>
				    <div class="col-lg-4 col-md-6 col-sm-6 mt-10">
					<div class="bg-white card-2 shadow padding-md">
					    <h3 class="margin-y-sm text-md color-primary">
						350ml Water
					    </h3>
					</div>
				    </div>
				    <div class="col-lg-4 col-md-6 col-sm-6 mt-10">
					<div class="bg-white card-2 shadow padding-md">
					    <h3 class="margin-y-sm text-md color-primary">
						30 Seconds shake well.
					    </h3>
					</div>
				    </div>
				</div>
			    </div>
			    <div class="product-details-div">
				<div class="text-center">
				    <h2 class="product_title">Nutrition Information </h2>
				    <h4 class="product-details-h4">
					Serving per Container : 30
				    </h4>
				    <h4 class="product-details-h4">
					Serving Size : 1 Scoop (13g)
				    </h4>
				</div>
				<div class="pt-20 table-responsive">
				    <table class="table table-bordered xtreme-endurance-bcaa-table">
					<tr>
					    <th>Approx Value  </th>
					    <th>Per 100g</th>
					    <th>##Per Serving (13g) </th>
					    <th> % RDA Per Serve </th>
					</tr>
					<tr>
					    <td>Energy</td>
					    <td>16.68kcal</td>
					    <td> 2.17kcal </td>
					    <td>0.11</td>
					</tr>   
					<tr>
					    <td>Protein</td>
					    <td>0.00g</td>
					    <td>0.00g </td>
					    <td>0.00g</td>
					</tr>   
					<tr>
					    <td>Carbohydrate</td>
					    <td>4.17g</td>
					    <td>0.54g</td>
					    <td>#</td>
					</tr>   
					<tr>
					    <td class="text-center">Total Sugars</td>
					    <td>3.86g</td>
					    <td>0.50g</td>
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
					    <td>0.00</td>
					</tr>   
					<tr>
					    <td>Total Fat*</td>
					    <td>0.00g</td>
					    <td>0.00g</td>
					    <td>0.00</td>
					</tr>   
					<tr>
					    <td>Sodium*</td>
					    <td>1692.31mg</td>
					    <td>220.00mg</td>
					    <td>11.00</td>
					</tr>   
					<tr>
					    <td>Vitamin</td>
					    <td></td>
					    <td></td>
					    <td></td>
					</tr>   
					<tr>
					    <td>Vitamin B6</td>
					    <td>8.62mg</td>
					    <td>1.12mg	</td>
					    <td>46.6</td>
					</tr>   
					<tr>
					    <td>Potassium</td>
					    <td>1538.46mg</td>
					    <td>200.00mg</td>
					    <td>5.71</td>
					</tr>   
					<tr>
					    <td class="text-center">Other</td>
					    <td></td>
					    <td></td>
					    <td></td>
					</tr>   
					<tr>
					    <td>L-Leucine</td>
					    <td>19230.77mg</td>
					    <td>2500.00mg</td>
					    <td>96.62</td>
					</tr>   
					<tr>
					    <td>L-Isoleucine</td>
					    <td>9615.39mg</td>
					    <td>1250.00mg</td>
					    <td>96.15</td>
					</tr>   
					<tr>
					    <td>L-Valine</td>
					    <td>9615.39mg</td>
					    <td>1250.00mg</td>
					    <td>73.96</td>
					</tr>   
					<tr>
					    <td>L-Glutamine	</td>
					    <td>33564.33mg</td>
					    <td>4363.63mg</td>
					    <td>#</td>
					</tr>   
					<tr>
					    <td>Electrolytes Blend 	</td>
					    <td>8704.60mg	</td>
					    <td>1131.60mg</td>
					    <td>#</td>
					</tr>   
					<tr>
					    <td>Citruline Matalate (2-1)</td>
					    <td>7692.31mg</td>
					    <td>1000.00mg</td>
					    <td>#</td>
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
				    Consult your physician if you are taking any other medication before consuming this product.
				</p>
				<p>
				    This product is not intended to diagnose, treat, cure or prevent any disease.
				</p>
				<p>
				    Not to exceed the stated recommended daily usage.
				</p>
			    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
		$(document).on('click', '.add-to-cart', function(){
			
			$.get( $(this).data('href') , function( data ) {
				alert('sd');
				// if(data == 'digital') {
				// toastr.error(langg.already_cart);
				// }
				// else if(data == 0) {
				// toastr.error(langg.out_stock);
				// }
				// else {
				// $("#cart-count").html(data[0]);
				// $("#cart-items").load(mainurl+'/carts/view');
				// toastr.success(langg.add_cart);
				// }
			});
			return false;
		});
    })
</script>
@endpush
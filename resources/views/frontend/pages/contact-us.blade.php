@extends('frontend.layouts.master')
@section('title','Xeina Xtreme - Xtreme Contact Us')
@section('main-content')
<!-- =====>> End Top Menu <<================================ -->
    <!-- ================================>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>Contact<span> Us</span></h1>
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
    <!-- =====>> End Page Hero <<================================ -->
    <!-- ================================>> Contact <<===== -->
    <section id="contact-area" class="pt-30 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contaict-title">
                        <h2 class="contact-us-title">GET IN TOUCH WITH XEINA XTREME PRO </h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="common-file/form-controller.php" method="POST" id="contact-us-form" class="contact-box xtreme-pro-contact">
                        <input type="text" name="contactus-name" placeholder="Name *" required="">
                        <input type="email" name="contactus-email" placeholder="Email *" required="">
                        <input type="text" name="contactus-mobileno" placeholder="Phone *" required="">
                        <textarea name="contactus-message" id="commet" placeholder="Message" required=""></textarea>
			<input type="hidden" name="action" value="contact-us-form-submit">
                        <button type="submit" class="btn btn-7">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-4 ">
                    <div class="contact-ditels m-lg-2">
                        <ul class="media">
                            <li><i class="fas fa-envelope"></i></li>
                            <li>
                                <a href="mailto:shashank.mohan@xeinadrugs.com">shashank.mohan@xeinadrugs.com</a>
                            </li>
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-phone-volume"></i></li>
                            <li>
                                <a href="#">0120-5150015</a>
                            </li>
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-map-marker-alt"></i></li>
                            <li>
                                <a target="_blank" href="">Xeina Drugs Private Limited <br>
                                    Office 302, Ocean Plaza, P-5, 4th Floor, Sector 18 <br>
				    Noida, 201301, UP, India
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Contact <<================================ -->
@endsection
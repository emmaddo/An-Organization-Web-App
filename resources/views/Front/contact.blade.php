<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<title>Contact::ATWAP</title> 

	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="{{asset('../front/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('../front/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('../front/fonts/flaticon.css')}}">
	<!--favicon-->
	<link rel="shortcut icon" href="{{asset('../front/images/favicon/favicon.ico')}}">

</head>
<body>
	<div class="boxed_wrapper">
		@include('Front/include.menu');

		<!--<div class="contact_details sec-padd">
			
				<div class="home-google-map">
					<div 
						class="google-map" 
						id="contact-google-map" 
						data-map-lat="40.7128" 
						data-map-lng="-74.0060" 
						data-icon-path="images/logo/map-marker.png"
						data-map-title="Chester"
						data-map-zoom="10" >
					</div>
				</div>
			
		</div>-->
		
		<section class="feature-style-three">
			<div class="container">			
				<div class="item-list">
					<div class="row">
						<div class="item">
							<div class="column col-md-4 col-sm-6 col-xs-12">
								<div class="inner-box">
									<div class="icon-box"><span class="icon flaticon-pin-1"></span></div>
									<h3>Location</h3>
									<div class="text"><p>1234, Crescent Drive, Ijapo Estate, Akure</p></div>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="column col-md-4 col-sm-6 col-xs-12">
								<div class="inner-box">
									<div class="icon-box"><span class="icon flaticon-cell-phone"></span></div>
									<h3>Phone Number</h3>
									<div class="text"><p>+2348 82 39876 <br>+2348 82 39876</p></div>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="column col-md-4 col-sm-6 col-xs-12">
								<div class="inner-box">
									<div class="icon-box"><span class="icon flaticon-message"></span></div>
									<h3>E-Mail Us</h3>
									<div class="text"><p>info@atwapakure.com <br>info@atwapakure.com</p></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contact_us">
			<div class="container">   
                <div class="sec-title text-center">
                    <h2>Get In Touch</h2>
					   </div>
                <div class="default-form-area">
					<form id="contact-form" name="contact_form" class="col-md-10 col-md-offset-1 default-form" action="#" method="post">
						<div class="row clearfix">
							<div class="col-md-6 col-sm-6 col-xs-12">
												
								<div class="form-group style-two">
									<input type="text" name="form_name" class="form-control" value="" placeholder="Name" required="">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group style-two">
									<input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required="">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group style-two">
									<input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
								</div>
							</div>	
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group style-two">
									<input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<textarea name="form_message" class="form-control textarea required" placeholder="Your Message"></textarea>
								</div>
							</div>   											  
						</div>
						<div class="contact-section-btn text-center">
							<div class="form-group style-two">
								<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
								<button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">send message</button>
							</div>
						</div> 
					</form>
				</div>          
			</div>
		</section>

		
		@include('Front/include.footer');


<!-- Scroll Top Button -->
	<button class="scroll-top tran3s color2_bg">
		<span class="fa fa-angle-up"></span>
	</button>
	<!-- pre loader  -->
	<div class="preloader"></div>


	<!-- jQuery js -->
		<script src="{{asset('../front/js/jquery.js')}}"></script>
		<!-- bootstrap js -->
		<script src="{{asset('../front/js/bootstrap.min.js')}}"></script>
		<!-- jQuery ui js -->
		<script src="{{asset('../front/js/jquery-ui.js')}}"></script>
		<!-- owl carousel js -->
		<script src="{{asset('../front/js/owl.carousel.min.js')}}"></script>
		
		<!-- mixit up -->
		<script src="{{asset('../front/js/wow.js')}}"></script>
		<script src="{{asset('../front/js/jquery.mixitup.min.js')}}"></script>
		<script src="{{asset('../front/js/jquery.fitvids.js')}}"></script>
		<script src="{{asset('../front/js/bootstrap-select.min.js')}}"></script>

		<!-- revolution slider js -->
		<script src="{{asset('../front/assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('../front/assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="{{asset('../front/assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
		<script src="{{asset('../front/assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
		<script src="{{asset('../front/assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
		<script src="{{asset('../front/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
		<script src="{{asset('../front/assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
		<script src="{{asset('../front/assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
		<script src="{{asset('../front/assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
		<script src="{{asset('../front/assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
		<script src="{{asset('../front/assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

		<!-- fancy box -->
		<script src="{{asset('../front/js/jquery.fancybox.pack.js')}}"></script>
		<script src="{{asset('../front/js/jquery.polyglot.language.switcher.js')}}"></script>
		<script src="{{asset('../front/js/nouislider.js')}}"></script>
		<script src="{{asset('../front/js/jquery.bootstrap-touchspin.js')}}"></script>
		<script src="{{asset('../front/js/SmoothScroll.js')}}"></script>
		<script src="{{asset('../front/js/jquery.appear.js')}}"></script>
		<script src="{{asset('../front/js/jquery.flexslider.js')}}"></script>
		<script src="{{asset('../front/js/custom.js')}}"></script>

	</div>
	
</body>

</html>
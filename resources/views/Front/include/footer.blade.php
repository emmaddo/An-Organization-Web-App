<footer class="footer footer-classic">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer-text">
							<a href="#">
								<img src="{{asset('../front/images/footer/logo1.png')}}" alt="logo">
							</a>
							<p>
								ATWAP is a non-governmental organisation set forth to promote health and environmental hygiene Table Water processing and consumption for the good people of Ondo State.
							</p>
							<!--<div class="social-icons">
								<a href="#" class="btn btn-social btn-social-o twitter">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#" class="btn btn-social btn-social-o linkedin">
									<i class="fa fa-linkedin"></i>
								</a>
								<a href="#" class="btn btn-social btn-social-o facebook">
									<i class="fa fa-facebook-f"></i>
								</a>
								<a href="#" class="btn btn-social btn-social-o skype">
									<i class="fa fa-skype"></i>
								</a>
								<a href="#" class="btn btn-social btn-social-o pinterest">
									<i class="fa fa-pinterest-p"></i>
								</a>
							</div>-->
						</div>
					</div>
					<div class="col-xl-2 col-md-2">
						<div class="links">
							<h3>Links</h3>
							<ul class="">
								<li><a href="{{url('Home')}}">Home</a></li>
								<li><a href="{{url('About')}}">About Us</a></li>
								<li><a href="{{url('Service')}}">Services</a></li>
								<li><a href="News">News</a></li>
								<li><a href="ContactUs">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="location">
							<h3>Location</h3>
							<ul>
								<li>1234, Crescent Drive</li>
								<li><i class="fa fa-home"></i> Ijapo Estate</li>
								<li><i class="fa fa-phone"></i> <a href="#">+234 857 524 332</a></li>
								<li><i class="fa fa-fax"></i> <a href="#">+234 857 524 332</a></li>
								<li><i class="fa fa-envelope"></i> info@atwapakure.com</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sidebar-wrapper">
							<div class="single-sidebar">
		                        <div class="wedgit-title">
		                            <h3>Recent News</h3>
		                        </div>
		                        <ul class="popular-post">
									@foreach($footer as $foot)
		                            <li>
		                                <div class="img-holder">
		                                    <img src="{{asset('../storage/front/images/news/'.$foot->image_name)}}" alt="Awesome Image">
		                                    <div class="overlay-style-one">
		                                        <div class="box">
		                                            <div class="content">
		                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="title-holder">
		                                    <a href="{{url('/NewsDetails/'.$foot->id)}}"><h5 class="post-title">{{$foot->title}}</h5></a>
		                                    <h6 class="post-date">{{$foot->created_at}}</h6>
		                                </div>
		                            </li>
									@endforeach
		                           
		                        </ul>
		                    </div>
						</div>
					</div>
				</div>
				<!-- COPY RIGHT -->
				<div class="copyright">
					<hr>
					<div class="row justify-content-center">
						<div class="col-sm-12">
							<div class="copyRight_text text-center">
								<p> © {{date('Y')}} <a href="#">ATWAP.</a>  All Copyright Reserved.</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</footer>
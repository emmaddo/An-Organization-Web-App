<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<title>News Details::ATWAP</title> 

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

		<!--Page Title-->
        <section class="bredcrumb">
			<div class="bg-image text-center" style="background-image: url('../front/images/resources/banner.jpg');">
				<h1>Detailed News</h1>
			</div>
			<div class="">
				<ul class= "middle">
					<li><a href="{{url('/Home')}}">Home</a></li>
					<li><a class="inner" href="#">Detailed News</a></li>
				</ul>
			</div>
		</section>
        <!--Page Title Ends-->
		
		 <!--Sidebar Page-->
		<div class="sidebar-page">
			<div class="container">
				<div class="row clearfix">            	
					<!--Content Side-->	
					<div class="col-md-8 col-sm-12 col-xs-12">
						<section class="blog-container news">  
							<div class="news-post">
								<div class="news-post-image">
										
									<!--<div class="news-category">Category</div>-->	
									<img src="{{asset('../storage/front/images/news/'.$newsdet->image_name)}}" class="img-responsive">
								</div>
								<div class="news-post-text">
									<h3>{{$newsdet->title}}</a></h3>
									<p>{{$newsdet->content}}</p>
								</div>
								
				               

							</div>
							
							                                                    
						</section> 
					</div>
					<!--Content Side-->
					
					<!--Sidebar-->	
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="sidebar-wrapper">
		                    <!--Start single sidebar-->
		                    <div class="single-sidebar">
		                        <form class="search-form" action="#">
									<input placeholder="Search..." type="text">
									<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
		                    </div>
		                    <!--End single sidebar-->
		                   
		                    <!--End single sidebar-->
		                    <!--Start single sidebar--> 
		                    <div class="single-sidebar">
		                        <div class="wedgit-title">
		                            <h3>News</h3>
		                        </div>
		                        <ul class="categories clearfix">
		                            <li><a href="#">Total News<span>({{$no_news}})</span></a></li>
		                            
		                        </ul>
		                    </div>
		                    <!--End single sidebar-->
		                    <!--Start single sidebar--> 
		                    <div class="single-sidebar">
		                        <div class="wedgit-title">
		                            <h3>Popular Post</h3>
		                        </div>
		                        <ul class="popular-post">
                                @foreach($getnews as $post)
		                            <li>
                                        
		                                <div class="img-holder">
		                                    <img src="{{asset('../storage/front/images/news/'.$post->image_name)}}" alt="Awesome Image">
		                                    <div class="overlay-style-one">
		                                        <div class="box">
		                                            <div class="content">
		                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="title-holder">
		                                    <a href="{{url('/NewsDetails/'.$post->id)}}"><h5 class="post-title">{{$post->title}}</h5></a>
		                                    <h6 class="post-date">{{$post->created_at}}</h6>
		                                </div>
		                            </li>
                                    @endforeach
		                            
		                        </ul>
		                    </div>
		                    <!--End single sidebar-->
		                    
		                </div>                                  
					</div>
					<!--Sidebar-->                           
				</div>
			</div>
		</div>
    		
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
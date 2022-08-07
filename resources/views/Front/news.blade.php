<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<title>News::ATWAP</title> 
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
		<!-- menu starts here -->
		@include('Front/include.menu');
		<!-- header ends here -->
		<!--Page Title-->
        <section class="bredcrumb">
			<div class="bg-image text-center" style="background-image: url('../front/images/resources/banner.jpg');">
				<h1>News Page</h1>
			</div>
			<div class="">
				<ul class= "middle">
					<li><a href="index-2.html">Home</a></li>
					<li><a class="inner" href="#">News Page</a></li>
				</ul>
			</div>
		</section>
        <!--Page Title Ends-->
		
		<section class="news">
			<div class="container">
				<div class="row">
				@foreach($getnews as $news)
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="news-post">
							<div class="news-post-image">
								<div class="news-overlay"></div>	
								<!--<div class="news-category"><a href="#">Business</a></div>-->	
								<img src="{{asset('../storage/front/images/news/'.$news->image_name)}}" alt="News" class="img-responsive">
							</div>
							<div class="news-post-text">
								<h3><a href="{{url('/NewsDetails/'.$news->id)}}">{{$news->title}}</h3>
								<p>{{Str::limit($news->intro, 120)}}</p>
                                <center><a class="thm-btn yellow-bg" href="{{url('/NewsDetails/'.$news->id)}}">Read More</a> </center>
							</div>
							<div class="news-post-meta">
								<a href="#"><i class="fa fa-user"></i>Admin</a>
								<a href="#"><i class="fa fa-heart-o"></i> 370 likes</a>
								<a href="#"><i class="fa fa-comments-o"></i> 24 comments</a>
							</div>
						</div>
					</div>
                    @endforeach
                   
					
					
					
					<!--<ul class="page_pagination">
                        <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="active tran3s">1</a></li>
                        <li><a href="#" class="tran3s">2</a></li>
                        <li><a href="#" class="tran3s">3</a></li>
                        <li><a href="#" class="tran3s">4</a></li>
                        <li><a href="#" class="tran3s">5</a></li>
                        <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>-->
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
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<body>
@include('template-site.head')
<!-- body -->
	<div class="body-content">
		<div class="container">
			<div class="body-content1">
			<!-- header -->
				@include('template-site.topo')
			<!-- //header -->
			<!-- nav -->
				@include('template-galeria.menu')
			<!-- //nav -->
			<ol class="breadcrumb">
							<li class="active">Galeria/</li>
						</ol>
			<!-- banner -->
				@include('template-site.banner')
			<!-- //banner -->
			<!-- banner-bottom -->

	<div class="gallery">
						<h2>Gallery</h2>
						<div class="gallery-grids">
							<section>
								@foreach($banner as $banner)
								<ul id="da-thumbs" class="da-thumbs">

									<li>
										<a href="" rel="title" class="b-link-stripe b-animate-go  thickbox">
											<img src="{{URL::to('/')}}/img-banner/{{$banner->foto_slide}}" alt="">
											<div style="display: block; left: 0px; top: -100%; transition: all 300ms ease 0s;">
												<h5>Kids School</h5>
												<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
											</div>
										</a>
									</li>
									@endforeach
									<div class="clearfix"> </div>

								</ul>
							</section>
						</div>
							<!-- pop-up-script -->
								<script src="{{ URL:: asset('js/jquery.chocolat.js')}}"></script>
								<!--light-box-files -->
								<script type="text/javascript" charset="utf-8">
								$(function() {
									$('.gallery a').Chocolat();
								});
								</script>
							<!-- //pop-up-script -->
							<script type="text/javascript" src="{{ URL:: asset('js/jquery.hoverdir.js')}}"></script>
							<script type="text/javascript">
								$(function() {

									$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

								});
							</script>
					</div>

			<!-- //banner-bottom -->
			</div>
		</div>
	</div>
<!-- //body -->
<!-- footer -->
	@include('template-site.footer')
<!-- //footer -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
	<script src="{{ URL:: asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
	<a href="#" id="toTop" style="display: inline;"><span id="toTopHover"></span>To Top</a>
</body>
</html>

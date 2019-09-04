<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<!--head-->
@include('template-site.head')
<body>
<!-- body -->
	<div class="body-content">
		<div class="container">
			<div class="body-content1">
			<!-- header -->
				@include('template-site.topo')
			<!-- //header -->
			<!-- nav -->
				@include('template-programacao.nav')
			<!-- //nav -->
			<ol class="breadcrumb">
							<li class="active">Programação/</li>
						</ol>
			<!-- banner -->
				@include('template-site.banner')
							</section>
									<!--FlexSlider-->
                                    @include('template-programacao.flexslide')
									<!--End-slider-script-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //banner -->
			<!--typography-page -->
				@include('template-programacao.conteudo')
		<!-- //typography-page -->
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
	<script src="{{('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
</body>
</html>

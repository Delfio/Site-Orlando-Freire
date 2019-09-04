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

			<!-- //header -->
			<!-- nav -->
				@include('menu-detalhes.menu')
				<ol class="breadcrumb">
					<li><a href="{{ URL::to('/') }}">Home</a></li>
					<li class="active">Detalhes</li>
				</ol>
			<!-- //nav -->
			<div class="single">
								<div class="col-md-8 single-left">
									<div class="single-left1">
										<img src="{{URL::to('/')}}/img-imagens/{{$imagem->foto}}" alt=" " class="img-responsive">
										<h3>{{$imagem->nome}}</h3>
										<h2>{{$imagem->breve_descricao}}</h2>
										<ul>
											<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a target="_blank" href="{{URL::to('/')}}/{{$imagem->link_informacao}}">Facebook Orlando</a></li>
										</ul>
										<p>{{$imagem->descricao}}</p>
										<br>
									</div>
									<div class="single-left2">
										<div class="col-md-6 single-left2-left">

										</div>
										<div class="col-md-6 single-left2-left">

										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="admin">
										<p>O sucesso nasce do querer, da determinação e persistência em se chegar a um objetivo.
											Mesmo não atingindo o alvo, quem busca e vence obstáculos, no mínimo fará coisas
											admiráveis.</p>
										<i>José de Alencar</i>
									</div>

								</div>
								<div class="col-md-4 event-right">
									<div class="event-right1">

									<div class="categories">
										<h3>Categorias</h3>
										<ul>
											<li><a href="{{ URL:: to('/horarios') }}">Horarios</a></li>
											<li><a href="{{ URL:: to('informes') }}">Informes</a></li>
											<li><a href="{{ URL:: to('programacao') }}">Programação</a></li>
											<li><a href="{{ URL:: to('galeria') }}">Galeria</a></li>
											<li><a href="#">Rádio</a></li>
											<li><a target="_blank" href="https://www.facebook.com/delfio.francisco.del">Contato Profissional</a></li>
										</ul>
									</div>
									<div class="posts">
										<h3>Blog Informativos</h3>
										<div class="posts-grids">
											<div class="posts-grid">
												<div class="posts-grid-right">
													<h4><a target="_blank" href="https://www.ebah.com.br/content/ABAAAe4bcAB/a-historia-rondonia">História de Rondônia</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="posts-grid">
												<div class="posts-grid-right">
													<h4><a target="_blank" href="https://sites.google.com/site/culturaehistoriadero/ciclo-da-borracha">Ciclo da borracha em Rondônia</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="posts-grid">
												<div class="posts-grid-right">
													<h4><a target="_blank" href="http://www.rondonia.ro.gov.br/seduc/">SEDUC/RO</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>
									</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
<!-- //body -->
<!-- footer -->

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

</body>
</html>

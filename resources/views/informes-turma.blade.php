<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<!--HEAD-->
@include('template-site.head')
<!--HEAD-->
<body>
<!-- body -->
	<div class="body-content">
		<div class="container">
			<div class="body-content1">
			<!-- header -->
				@include('template-site.topo')
			<!-- //header -->
			<!-- nav -->
				@include('template-informes.nav')
			<!-- //nav -->
			<ol class="breadcrumb">
				<li><a href="{{ URL::to('informes') }}">Informes</a></li>
				<li class="active">Trabalhos {{$id_turma}}</li>
			</ol>
			<!-- banner -->
				@include('template-site.banner')
<!--conteudo-->

<div class="single">
<div class="col-md-8 single-left">
	<div class="single-left1">
		<div class="grid_3 grid_5" class="img-responsive">
						<h3 class="bars">{{$id_turma}}</h3>
						@foreach($turma as $turma)
						<div class="bs-docs-example">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th rowspan="2"><h5>{{$turma->id_disciplina}}</h5></th>
															<th>Nome do Trabalho</th>
															<th>Assunto</th>
															<th>Data de Entrega</th>

														</tr>
													</thead>
													<tbody>
														<tr>
															<td rowspan="2"></td>
															<td>{{$turma->nome}}</td>
															<td>{{$turma->assunto}}</td>
															<td>{{$turma->data_entrega}}</td>
														</tr>
														<tr>
															<td colspan="3">{{$turma->descricao}}</td>
														</tr>
													</tbody>
												</table>
											</div>
											<br>
											<br>
						@endforeach
					</div>
	</div>
	<div class="single-left2">
		<div class="col-md-6 single-left2-left">
			<ul>
				<li><a href="#">At vero eos et accusamus et iusto</a></li>
				<li><a href="#">Sed ut perspiciatis unde omnis iste</a></li>
				<li><a href="#">Accusantium doloremque laudantium</a></li>
				<li><a href="#">Vel illum qui dolorem eum fugiat quo</a></li>
				<li><a href="#">Quis autem vel eum iure reprehenderit</a></li>
				<li><a href="#">Neque porro quisquam est, qui dolorem</a></li>
			</ul>
		</div>
		<div class="col-md-6 single-left2-left">
			<ul>
				<li><a href="#">At vero eos et accusamus et iusto</a></li>
				<li><a href="#">Sed ut perspiciatis unde omnis iste</a></li>
				<li><a href="#">Accusantium doloremque laudantium</a></li>
				<li><a href="#">Vel illum qui dolorem eum fugiat quo</a></li>
				<li><a href="#">Quis autem vel eum iure reprehenderit</a></li>
				<li><a href="#">Neque porro quisquam est, qui dolorem</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="admin">
		<p>But I must explain to you how all this mistaken idea of denouncing
			pleasure and praising pain was born and I will give you a complete
			account of the system, and expound the actual teachings of the great
			explorer of the truth, the master-builder of human happiness.
			No one rejects, dislikes, or avoids pleasure itself.</p>
		<a href="#"><i>Join Smith</i></a>
	</div>

</div>
<div class="col-md-4 event-right">
	<div class="event-right1">
	<div class="search1">
		<form>
			<input type="text" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Here...';}" required="">
			<input type="submit" value="Submit">
		</form>
	</div>
	<div class="categories">
		<h3>Categories</h3>
		<ul>
			<li><a href="#">Site SEDUC</a></li>
			<li><a href="#">Sed ut perspiciatis unde omnis iste</a></li>
			<li><a href="#">Accusantium doloremque laudantium</a></li>
			<li><a href="#">Vel illum qui dolorem eum fugiat quo</a></li>
			<li><a href="#">Quis autem vel eum iure reprehenderit</a></li>
			<li><a href="#">Neque porro quisquam est, qui dolorem</a></li>
		</ul>
	</div>
	<div class="posts">
		<h3>Blog Posts</h3>
		<div class="posts-grids">
			<div class="posts-grid">
				<div class="posts-grid-left">
					<a href="single.html"><img src="images/9.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="posts-grid-right">
					<h4><a href="single.html">Sed ut perspiciatis unde omnis iste natus</a></h4>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="posts-grid">
				<div class="posts-grid-left">
					<a href="single.html"><img src="images/12.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="posts-grid-right">
					<h4><a href="single.html">Neque porro quisquam est, qui dolorem ipsum</a></h4>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="posts-grid">
				<div class="posts-grid-left">
					<a href="single.html"><img src="images/11.jpg" alt=" " class="img-responsive"></a>
				</div>
				<div class="posts-grid-right">
					<h4><a href="single.html">Nemo enim ipsam voluptatem quia voluptas sit</a></h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="tags tags1">
		<h3>Recent Tags</h3>
		<ul>
			<li><a href="single.html">Themes</a></li>
			<li><a href="single.html">Art</a></li>
			<li><a href="single.html">Music</a></li>
			<li><a href="single.html">Entertainment</a></li>
			<li><a href="single.html">New</a></li>
			<li><a href="single.html">Design</a></li>
			<li><a href="single.html">Books</a></li>
			<li><a href="single.html">Themes</a></li>
			<li><a href="single.html">Art</a></li>
			<li><a href="single.html">Music</a></li>
			<li><a href="single.html">Entertainment</a></li>
			<li><a href="single.html">New</a></li>
			<li><a href="single.html">Design</a></li>
			<li><a href="single.html">Books</a></li>
		</ul>
	</div>
	</div>
</div>
<div class="clearfix"> </div>
</div>

<!--conteudo

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
</body>
</html>

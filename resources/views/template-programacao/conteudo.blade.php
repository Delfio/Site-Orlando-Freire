<div class="services">
					<h2>Eventos</h2>
@foreach($programacao as $programacao)
					<div class="services-grids">
						<div class="col-md-4 services-grid-left">
							<img src="img-evento/{{$programacao->foto}}" alt=" " class="img-responsive">
						</div>
						<div class="col-md-8 services-grid-right">
							<h3>{{$programacao->nome}} / <span>{{$programacao->assunto}}</span></h3>

							<div class="well">
							{{$programacao->informacoes}}
						</div>
							<h4><i>DESTINADO:  {{$programacao->destinado}}</i></h4>

							<div class="services-grid-right-l">
								<p>DATA:  {{$programacao->data_evento}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
@endforeach

@foreach($imagem as $imagem)
					<div class="services-grids1">
						<div class="col-md-3 services-grids1-grid">
							<img src="img-imagens/{{$imagem->foto}}" alt=" " class="img-responsive">
							<h4><a href="{{URL::to('detalhes/' .$imagem->id. '/edit')}}">{{$imagem->nome}}</a></h4>
							<p>{{$imagem->breve_descricao}}</p>
							<div class="more">
								<a href="{{URL::to('detalhes/' .$imagem->id. '/edit')}}" class="hvr-rectangle-out">saber mais...</a>
							</div>
						</div>
@endforeach
						<div class="clearfix"> </div>
					</div>
				</div>

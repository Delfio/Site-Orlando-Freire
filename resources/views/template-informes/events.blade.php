<div class="events">
    <h2>Atividades Direcionadas</h2>
    <div class="events-grids">
        <div class="col-md-8 event-left">
          <!--foreach -->
          <div class="turmas">
            <table>
              <tr>
                <h1>
                  @include('turmas.1ano')
                  <button href="" type="button" class="label label-primary" data-toggle="modal" data-target="#exampleModal">
                  Informes - Turma
                </button>
                </h1>
              </tr>
            </table>
          </div>

@foreach($banner as $banner)
          <div class="event-left1">
          								<div class="col-xs-6 event-left1-left">
          									<a href=""><img src="{{URL::to('/')}}/img-banner/{{$banner->foto_slide}}" alt=" " class="img-responsive"></a>
          									<div class="event-left1-left-pos">
          										<ul>
          											<li><a ><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>5 Tags</a></li>
          											<li><a ><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>200 Likes</a></li>
          											<li><a ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Leo Paul</a></li>
          										</ul>
          									</div>
          								</div>
          								<div class="col-xs-6 event-left1-right">
          									<h3><a href="">{{$banner->nome}}</a></h3>
          									<p></p>
          								</div>
          								<div class="clearfix"> </div>
          							</div>
@endforeach

                <div class="clearfix"> </div>
            </div>

        </div>
        <div class="col-md-4 event-right">
            <div class="event-right1">

            <div class="categories">
                <h3>Categorias</h3>
                <ul>
                    <li><a href="#">At vero eos et accusamus et iusto</a></li>
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
                      @foreach($imagem as $imagem)
                          <div class="posts-grid">
                      <div class="posts-grid-left">
                        <img src="{{URL::to('/')}}/img-imagens/{{$imagem->foto}}" alt=" " class="img-responsive">
                      </div>
                      <div class="posts-grid-right">
                        <h4><a href="{{URL::to('detalhes/' .$imagem->id. '/edit')}}">{{$imagem->breve_descricao}}</a></h4>
                      </div>
                      <div class="clearfix"> </div>
                    </div>
                    <br>
                    @endforeach

                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

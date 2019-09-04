<div class="services">
    <h2>Horarios</h2>
    <div class="services-grids">
        <div class="col-md-4 services-grid-left">
                        @include('template-horarios.modal-foto-horario')
              <a href="" data-toggle="modal" data-target="#exampleModal"><img src="{{URL::to('/')}}/images/horarios.jpg" alt=" " class="img-responsive2" /></a>
        </div>
        <div class="col-md-8 services-grid-right">
            <h3> <span>Novos Horarios já disponiveis</span></h3>
            <div class="services-grid-right-l img-responsive">


              <h1> Horarios Por Turma </h1>
              <br>
              <div class="hvr-rectangle-out img-responsive">
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Primeiro ano
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="{{URL::to('horarios1a')}}">A</a></li>
                      <li><a href="{{URL::to('horarios1b')}}">B</a></li>
                      <li><a href="{{URL::to('horarios1c')}}">C</a></li>
                    </ul>
                  </div>
                </div>
              <div class="hvr-rectangle-out  img-responsive">
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Segundo Ano
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="{{URL::to('horarios2a')}}">A</a></li>
                          <li><a href="{{URL::to('horarios2b')}}">B</a></li>
                          <li><a href="{{URL::to('horarios2c')}}">C</a></li>
                        </ul>
                    </div>
                </div>

              <div class="hvr-rectangle-out  img-responsive">
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Terceiro Ano
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="{{URL::to('horarios3a')}}">A</a></li>
                          <li><a href="{{URL::to('horarios3b')}}">B</a></li>
                          <li><a href="{{URL::to('horarios3c')}}">C</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    <!--dfjdijfdjfidjifdjidjfidfjdifjidf-->
    <div class="services-grids1">
@foreach($imagem as $imagem)
        <div class="col-md-3 services-grids1-grid">
            <img src="img-imagens/{{$imagem->foto}}" alt=" " class="img-responsive" />
            <h4><a href="single.html">{{$imagem->nome}}</a></h4>
            <p>{{$imagem->breve_descricao}}</p>
            <div class="more">
                <a href="{{URL::to('detalhes/' .$imagem->id. '/edit')}}" class="hvr-rectangle-out">Saber Mais...</a>
            </div>
        </div>
@endforeach
        <div class="clearfix"> </div>
    </div>
</div>

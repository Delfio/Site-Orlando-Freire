<div class="banner">
    <div class="banner-grids">
        <div class="banner-left">

<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% foreach 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

            <div class="banner-left1">
@foreach($imagem1 as $imagem1)
                <div class="banner-left1-grid">
                    <img src="{{URL::to('/')}}/img-imagens/{{$imagem1->foto}}" alt=" " class="img-responsive" />
                    <div class="banner-info">
                        <a class="read-more" href="{{URL::to('detalhes/' .$imagem1->id. '/edit')}}"><i></i></a>
                        <h3>
                            <a href="{{URL::to('detalhes/' .$imagem1->id. '/edit')}}" title="Saber mais...">
                                {{$imagem1->nome}}
                            </a>
                        </h3>
                        <div class="event-meta">
                            <h4>{{$imagem1->breve_descricao}}</h4>
                            <p>{{$imagem1->descricao}}</p>
                        </div>
                    </div>
                </div>
@endforeach
            </div>


<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% foreach 1 %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% foreach 2 %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
@foreach($imagem2 as $imagem2)
            <div class="banner-left2">

                <div class="banner-left1-grid">
                <img src="{{URL::to('/')}}/img-imagens/{{$imagem2->foto}}" alt=" " class="img-responsive" />
                  <div class="banner-info">
                      <a class="read-more" href="{{URL::to('detalhes/' .$imagem2->id. '/edit')}}"><i></i></a>
                      <h3>
                          <a href="{{URL::to('detalhes/' .$imagem2->id. '/edit')}}" title="Saber mais...">
                              {{$imagem2->nome}}
                          </a>
                      </h3>
                      <div class="event-meta">
                          <h4>{{$imagem2->breve_descricao}}</h4>
                          <p>{{$imagem2->descricao}}</p>
                        </div>
                    </div>
                </div>

            </div>
@endforeach
            <div class="clearfix"> </div>


<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% foreach 2 %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->


<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% slide %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
        </div>
        <div class="banner-right">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="services-grid-right-grid1">

                            </div>
                        </li>
                        <li>
                            <div class="services-grid-right-grid2">

                            </div>
                        </li>
                        <li>
                            <div class="services-grid-right-grid3">

                            </div>
                        </li>
                    </ul>
                </div>
            </section>
                    <!--FlexSlider-->
                    <script defer src="{{ URL:: asset('js/jquery.flexslider.js')}}"></script>
                    <script type="text/javascript">
                        $(window).load(function(){
                          $('.flexslider').flexslider({
                            animation: "slide",
                            start: function(slider){
                              $('body').removeClass('loading');
                            }
                          });
                        });
                    </script>
                    <!--End-slider-script-->
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

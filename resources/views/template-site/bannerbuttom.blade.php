<div class="banner-bottom">
    <div class="banner-bottom-grids">
        <div class="col-md-4 banner-bottom-grid">
            <h3>Bem vindo a <span>Orlando Freire</span></h3>
            <h2><i>" Jamais considere seus estudos como uma obrigação, mas como uma oportunidade invejável para aprender a conhecer a influência libertadora da beleza do reino do espírito, para seu próprio prazer pessoal e para proveito da comunidade à qual seu futuro trabalho pertencer. "</i></h2>
            <p>A escola Orlando Feire, localizada na rua Rio de Janeiro número 7500
                bairro Lagoa, em Porto Velho Rodônia, tem como objetivo, preparar os
                alunos para um mundo de oportunidades. Visamos sempre o bom comportamento
                e profissionalização.
                <span>No que se refere em oportunidade, a escola O.F. oferece
                diversos cursos para os alunos. Cursos profissionalizantes e
                preparátorios.</span></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.182065459938!2d-63.872073985708866!3d-8.768934893701536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92325c992c24b3cb%3A0xd3452d5f8342d5b3!2sEeefm+Prof+Orlando+Freire!5e0!3m2!1spt-BR!2sbr!4v1540387337165" width="350" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>


        </div>
        <div class="col-md-4 banner-bottom-grid">
            <h3>Projetos e ações <span>O.F</span></h3>
            <div class="load_more">
                <script>
                    $(document).ready(function () {
                        size_li = $("#myList li").size();
                        x=1;
                        $('#myList li:lt('+x+')').show();
                        $('#loadMore').click(function () {
                            x= (x+1 <= size_li) ? x+1 : size_li;
                            $('#myList li:lt('+x+')').show();
                        });
                        $('#showLess').click(function () {
                            x=(x-1<0) ? 1 : x-1;
                            $('#myList li').not(':lt('+x+')').hide();
                        });
                    });
                </script>
                <ul id="myList">
                    <li>
                        <div class="l_g">
                          @foreach($imagem as $imagem)
                            <div class="banner-bottom-grid1">
                                <div class="col-xs-4 banner-bottom-grid-left">
                                    <img src="{{URL::to('/')}}/img-imagens/{{$imagem->foto}}" class="img-responsive" />
                                </div>
                                <div class="col-xs-8 banner-bottom-grid-left">
                                  <div class="orlando-teste1">

                                    <h4>{{$imagem->nome}}</h4>
                                    <h5>{{$imagem->breve_descricao}}</h5>
                                    <a href="{{URL::to('detalhes/' .$imagem->id. '/edit')}}"><button class="btn btn-primary" type="button" name="button">Detalhes</button></a>
                                    </button>
                                  </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                          @endforeach
                        </div>
                    </li>

                    <li>
                        <div class="l_g">
                            <div class="banner-bottom-grid1">
                                <div class="col-xs-4 banner-bottom-grid-left">
                                    <img src="{{URL::to('/')}}/images/8.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-xs-8 banner-bottom-grid-left">
                                    <h4><a href="">unde omnis iste natus error sit voluptatem</a></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="banner-bottom-grid1">
                                <div class="col-xs-4 banner-bottom-grid-left">
                                    <img src="{{URL::to('/')}}/images/9.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-xs-8 banner-bottom-grid-left">
                                    <h4><a href="">"Lorem ipsum dolor consectetur adipiscing</a></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="banner-bottom-grid1">
                                <div class="col-xs-4 banner-bottom-grid-left">
                                    <img src="{{URL::to('/')}}/images/10.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-xs-8 banner-bottom-grid-left">
                                    <h4><a href="">culpa qui officia deserunt mollit anim id</a></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <div class="col-md-4 banner-bottom-grid">
            <h3>Cursos <span>Novos</span></h3>
            <div class="banner-bottom-grid-fig">
                <div class="banner-bottom-grid-fig1">
                    <img src="{{URL::to('/')}}/images/4.jpg" alt=" " class="img-responsive" />
                    <div class="banner-bottom-grid-fig1-pos">
                        <a href="">Cursos de Panificação, entre outros, aberto a comunidade</a>
                        <p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Parceria - SEDUC e SENAI </a></p>
                    </div>
                </div>
                <div class="banner-bottom-grid-fig-grid">
                    <div class="banner-bottom-grid-fig-grid1">
                        <h4><span>T.I</span><a href="">Técnicos em Informática OF</a></h4>
                        <p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Agosto de 2017</a></p>
                    </div>
                </div>
                <div class="banner-bottom-grid-fig-grid">
                    <div class="banner-bottom-grid-fig-grid1">
                        <h4><span>Panificação</span><a href="">Curso de panificação com laboratórios</a></h4>
                        <p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>March 28, 2016 By</a></p>
                    </div>
                </div>
                <div class="banner-bottom-grid-fig-grid">
                    <div class="banner-bottom-grid-fig-grid1">
                        <h4><span>Cupckage</span><a href="">Curso para preparação de doces em geral</a></h4>
                        <p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>March 30, 2016 By <a href="">Fedrick</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

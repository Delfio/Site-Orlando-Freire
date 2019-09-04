<!DOCTYPE HTML>
<html>
@include('template-painel.head')
<body>
<div id="wrapper">

<!----->
        @include('template-painel.topo')


            <!-- Brand and toggle get grouped for better mobile display -->

		   <!-- Collect the nav links, forms, and other content for toggling -->

			<div class="clearfix">
<!-- espaçamento-->
     </div>

		    @include('template-painel.menu')
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

  		<!--Conteudo da pagina###################################################################################-->
<div class="gallery">

<h3>Listar Fotos Informativas</h3>
    <!--foreach-->
    @foreach( $foto as $foto )
        <div class="col-md-3">
            <div class="gallery-img">
            <a href="{{URL::to('foto/' .$foto->id. '/edit')}}" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
                <img class="img-responsive " src="{{URL:: to('/')}}/img-imagens/{{$foto->foto}}" alt="" />
                <span class="zoom-icon"> </span> </a>
            </a>
            </div>
            <div class="text-gallery">
                <h6>{{$foto->nome}}</h6>
            </div>
        </div>
    @endforeach
 	 	<!--foreach-->


     <!--//Conteudo da pagina###################################################################################-->
     <!--content-->

    </div>
    <div class="clearfix"> </div>
</div>
        </div>
    </div>
    <div class="clearfix"> </div>
 </div>
 <!--//content-->



 <!---->
 @include('template-painel.footer')
 </body>
 </html>

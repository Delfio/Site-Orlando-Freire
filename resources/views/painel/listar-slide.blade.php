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
        <h3 id="forms-example" class="">@yield('title')</h3>
        @if(Session::has('message'))
            <div class="alert alert-success">
                  <button type="button" class="btn btn-success warning_2" data-dismiss="alert" aria-hidden="true">×</button>
                  {!! Session::get('message') !!}
                  <a href="inserir-slide" class="alert-link">Inserir outro Banner?</a>
            </div>
        @endif

        @foreach( $banner as $banner )
            <div class="col-md-3">
                <div class="gallery-img">
                <a href="{{URL::to('banner/' .$banner->id. '/edit')}}" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
                    <img class="img-responsive " src="{{URL:: to('/')}}/img-banner/{{$banner->foto_slide}}" alt="" />
                    <span class="zoom-icon"> </span> </a>
                </a>
                </div>
                <div class="text-gallery">
                    <h6>{{$banner->nome}}</h6>
                </div>
            </div>
        @endforeach

        <div class="clearfix"> </div>
    </div>

 @include('template-painel.footer')
 </body>
 </html>

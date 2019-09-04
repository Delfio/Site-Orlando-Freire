
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
            <div class="grid-form">

                <div class="grid-form1">
                  @if(count($errors) > 0)
                  <div class="alert alert-warningr">
                      <ul>
                      @foreach($errors->all() as $error)

                      <p><b>{!!$error!!}</b></p>

                      @endforeach
                      </ul>
                  </div>
                  @endif
                    <h3 id="forms-example" class="">Inserir Slide</h3>
                    <form action="input-banner" method="POST" enctype="multipart/form-data">
                        <!--%%%%%%%% metodo de inserir no banco %%%%%%%% -->
                         {{ csrf_field() }}<!--segurança laravel-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome Da Foto</label>
                        <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="O nome da imagem sem espaços e assentos: feira_cultura_orlando" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Inserir a Foto</label>
                        <input type="file" name="foto_slide" id="exampleInputFile">
                        <p class="help-block">Insira a foto a partir deste Dispositivo</p>
                    </div>
                    <button type="submit" name="enviar" class="btn btn-default">Enviar</button>
                    </form>

               <!--%%%%%%%% metodo de inserir no banco %%%%%%%% -->

                    <span class="label label-primary">Este campo é Somente para inserir fotos de slide. Insira uma foto de 960x720 pixels .jpg para melhor aproveitamento</span>
                    </div>
        		<!--//Conteudo da pagina###################################################################################-->
        		<!--content-->

        		</div>
        		<div class="clearfix"> </div>
    		</div>
    		<!--Conteudo da pag parte de baixo###################################################################################-->

    		<!--Conteudo da pag parte de baixo###################################################################################--->


		</div>
	</div>
			<div class="clearfix"> </div>
</div>
		<!--//content-->



		<!---->
@include('template-painel.footer')
</body>
</html>


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
            <h3 id="forms-example" class="">Inserir Foto-Informativa</h3>
            <form action="input-imagens" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}<!--segurança laravel-->
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome Da Foto/Nome do Evento</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Feira de cultura! OBS: Pode conter acentos e espaços" required="">
                </div>
                <div class="col-md-12 form-group1 ">
                  <label class="control-label">Breve Descrição</label>
                  <textarea name="breve_descricao" placeholder="Um pequeno chamativo da foto/conteudo" required=""></textarea>
                </div>
                <div class="col-md-12 form-group1 ">
                  <label class="control-label">Descrição completa</label>
                  <textarea name="descricao" placeholder="Coloque toda as informações necessárias" required=""></textarea>
                </div>
                <div class="col-md-12 form-group1 group-mail">
                    <label class="control-label">Url/Caso Contenha</label>
                    <input name="link_informacao" type="text" placeholder="Caso o informe possua links - não obrigatório">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Inserir a Foto</label>
                    <input name="foto" type="file" id="exampleInputFile">
                    <p class="help-block">Insira a foto a partir deste Dispositivo</p>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
            <span class="label label-primary">Este campo é Somente para inserir fotos de eventos da escola. A foto deve ter 960x540</span>
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

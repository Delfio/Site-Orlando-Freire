
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
            <h3 id="forms-example" class="">Inserir Programação</h3>
            <!--%%%%%%%%%%%% Metodo de inserir no banco %%%%%%%% -->
            <form action="input-programacao" method="POST" enctype="multipart/form-data">
                <!--%%%%%%%% metodo de inserir no banco %%%%%%%% -->
                 {{ csrf_field() }}<!--segurança laravel-->
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome Do evento</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Reunião dos pais" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Assunto</label>
                    <input type="text" name="assunto" class="form-control" id="exampleInputPassword1" placeholder="Fechamento do Bimestre escolar" required="">
                </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Informações</label>
              <textarea name="informacoes" placeholder="Informações do que se tratará o evento" required=""></textarea>
            </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Destinado:</label>
                    <select name="destinado" id="selector1" class="form-control1" >
                        <option value="Selecione">Selecione</option>
        				<option>Pais</option>
        				<option>Alunos</option>
        				<option>Cumunidade</option>
			        </select>
                </div>
            <div class="form-group">
              <label class="control-label ">Data do Evento</label>
              <input type="date" name="data_evento" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Imagem do evento</label>
                <input name="foto" type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
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

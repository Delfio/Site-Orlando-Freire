
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
            <div class="grid-form1">
            <h3 id="forms-example" class="">Inserir Trabalhos/Tarefas Direcionado</h3>
            <!--%%%%%%%%%%%% Metodo de inserir no banco %%%%%%%% -->
            <form action="input-trabalho" method="POST" enctype="multipart/form-data">
                <!--%%%%%%%% metodo de inserir no banco %%%%%%%% -->
                 {{ csrf_field() }}<!--segurança laravel-->
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome do Trabalho</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Disertação Sobre a Poluição" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Assunto</label>
                    <input type="text" name="assunto" class="form-control" id="exampleInputPassword1" placeholder="Poluição" required="">
                </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Descrição</label>
              <textarea name="descricao" placeholder="Informações adicionais sobre o trabalo. Textos auxiliares ou informações em geral" required=""></textarea>
            </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Materia:</label>
                    <select name="id_disciplina" id="selector1" class="form-control1" >
                        @foreach ($disciplina as $disciplina)
                        <option name="id_disciplina" value="{{$disciplina->nome}}">{{$disciplina->nome}}</option>

        				<!--foreach-->
                        @endforeach
			        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Turma:</label>
                    <select name="id_turma" id="selector1" class="form-control1">
                    @foreach ($turma as $turma)
                        <option name="id_turma" value="{{$turma->nome}}">{{$turma->nome}}</option>

                        <!--foreach-->
                    @endforeach
			        </select>
                </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Data de Entrega</label>
              <input name="data_entrega" type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
            </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
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

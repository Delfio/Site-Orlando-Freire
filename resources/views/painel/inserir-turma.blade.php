
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
@include('template-painel.head')
@section('title', 'Inserir Turma')
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

                <div class="grid-form1">
                    <h3 id="forms-example" class="">Inserir Turmas</h3>
                    <form action="input-turma" method="POST" enctype="multipart/form-data">

                        <!--%%%%%%%% metodo de inserir no banco %%%%%%%% -->
                         {{ csrf_field() }}<!--segurança laravel-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome Da Turma</label>
                        <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="O nome da imagem sem espaços e assentos: feira_cultura_orlando" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Turno:</label>
                        <select name="turno" id="selector1" class="form-control1" >
                            <option value="turno">Selecione</option>
            				<option>Manhã</option>
            				<option>Tarde</option>
            				<option>Noite</option>
            			</select>
                    </div>
                    <button type="submit" name="enviar" class="btn btn-default">Enviar</button>
                    </form>
            </div>

               <!--%%%%%%%% metodo de inserir no banco %%%%%%%% -->

                    <span class="label label-primary">Este campo é Somente para inserir Turmas</span>
                    </div>
        		<!--//Conteudo da pagina###################################################################################-->
        		<!--content-->

            <div class="gallery">
              <h3>LISTA DAS TURMAS</h3>
                @if(Session::has('message'))
                    <div class="alert alert-success">
                          <button type="button" class="btn btn-success warning_2" data-dismiss="alert" aria-hidden="true">×</button>
                          {!! Session::get('message') !!}
                    </div>
                @endif


                <div class="panel-body">
                           <div class="dataTable_wrapper">
                               <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                   <thead>
                                       <tr>
                                           <th>turma</th>
                                           <th>Período</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                     @foreach( $turma as $turma )

                                       <tr>
                                         <td>{{$turma->nome}}</td>
                                         <td>{{$turma->turno}}</td>
                                         <td>
                                            <a href="{{URL::to('turma/' .$turma->id. '/edit')}}"><button class="btn btn-primary" type="button" name="button">Detalhes</button></a>
                                         </td>
                                       </tr>

                                     @endforeach
                                   </tbody>
                               </table>
                           </div>
                       </div>

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

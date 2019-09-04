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

<h3>Listar Trabalhos</h3>
    <!--foreach-->
    <div class="gallery">
        <h3 id="forms-example" class="">@yield('title')</h3>
        @if(Session::has('message'))
            <div class="alert alert-success">
                  <button type="button" class="btn btn-success warning_2" data-dismiss="alert" aria-hidden="true">×</button>
                  {!! Session::get('message') !!}
                  <a href="{{ URL:: to('inserir-trabalho')}}" class="alert-link">Inserir outro trabalho??</a>
            </div>
        @endif


        <div class="panel-body">
                   <div class="dataTable_wrapper">
                       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                           <thead>
                               <tr>
                                   <th>Nome</th>
                                   <th>Assunto</th>
                                   <th>Data Entrega</th>
                                   <th>Disciplina</th>
                                   <th>Turma</th>
                                   <th>Descrição</th>
                                   <th>Ação</th>

                               </tr>
                           </thead>
                           <tbody>
                             @foreach( $trabalho as $trabalho )

                               <tr>
                                 <td>{{$trabalho->nome}}</td>
                                 <td>{{$trabalho->assunto}}</td>
                                 <td>{{$trabalho->data_entrega}}</td>
                                 <td>{{$trabalho->id_disciplina}}</td>
                                 <td>{{$trabalho->id_turma}}</td>
                                 <td>{{$trabalho->descricao}}</td>
                                 <td>
                                    <a href="{{URL::to('trabalho/' .$trabalho->id. '/edit')}}"><button class="btn btn-primary" type="button" name="button">Detalhes</button></a>
                                 </td>

                               </tr>

                             @endforeach
                           </tbody>
                       </table>
                   </div>
               </div>
    <!-- /.table-responsive -->



    <!-- jQuery -->
    <script src="{{ URL:: asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL:: asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL:: asset('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
    <!-- DataTables JavaScript -->
    <script src="{{ URL:: asset('bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL:: asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ URL:: asset('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
    <!-- /.row -->

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

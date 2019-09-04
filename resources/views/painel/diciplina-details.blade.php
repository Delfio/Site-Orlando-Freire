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

<h3>Deletar Horario</h3>

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

<div class="panel-body">
           <div class="dataTable_wrapper">
               <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                   <thead>
                       <tr>
                           <th>Nome</th>
                       </tr>
                   </thead>
                   <tbody>

                       <tr>
                         <td>{{$disciplina->nome}}</td>
                       </tr>

                   </tbody>
               </table>
           </div>
       </div>

       {!! Form::open(['route'=> ['deletardisciplina.destroy', $disciplina->id],'method'=>'DELETE']) !!}

             <a class="btn btn-default" href="{{ URL:: to('inserir-disciplina')}}">NÃO</a>
             {!!Form::submit('DELETAR', ['class' => 'btn btn-danger', 'data' => 'modal'])!!}

      {!! Form::close() !!}


</html>

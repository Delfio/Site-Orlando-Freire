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
                                          <th>Turma</th>

                                           <th>{{$id_turma->id_turma}}</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>
                                            <div class="form-group">

                                           </div>
                                          </td>
                                          <td>segunda</td>
                                          <td>terça</td>
                                          <td>quarta</td>
                                          <td>Quinta</td>
                                          <td>Sexta</td>
                                      </tr>
                                      <tr>
                                          <td>1Tempo</td>
                                          <td>{{$id_turma->seg_1t}}</td>
                                          <td>{{$id_turma->terc_1t}}</td>
                                          <td>{{$id_turma->quart_1t}}</td>
                                          <td>{{$id_turma->quint_1t}}</td>
                                          <td>{{$id_turma->sext_1t}}</td>
                                      </tr>
                                      <tr>
                                          <td>2Tempo</td>
                                           <td>{{$id_turma->seg_2t}}</td>
                                           <td>{{$id_turma->terc_2t}}</td>
                                           <td>{{$id_turma->quart_2t}}</td>
                                           <td>{{$id_turma->quint_2t}}</td>
                                           <td>{{$id_turma->sext_2t}}</td>
                                      </tr>
                                      <tr>
                                          <td>3Tempo</td>
                                          <td>{{$id_turma->seg_3t}}</td>
                                          <td>{{$id_turma->terc_3t}}</td>
                                          <td>{{$id_turma->quart_3t}}</td>
                                          <td>{{$id_turma->quint_3t}}</td>
                                          <td>{{$id_turma->sext_3t}}</td>
                                      </tr>
                                      <tr>
                                          <td>4Tempo</td>
                                          <td>{{$id_turma->seg_4t}}</td>
                                          <td>{{$id_turma->terc_4t}}</td>
                                          <td>{{$id_turma->quart_4t}}</td>
                                          <td>{{$id_turma->quint_4t}}</td>
                                          <td>{{$id_turma->sext_4t}}</td>
                                      </tr>
                                      <tr>
                                          <td>5Tempo</td>
                                          <td>{{$id_turma->seg_5t}}</td>
                                          <td>{{$id_turma->terc_5t}}</td>
                                          <td>{{$id_turma->quart_5t}}</td>
                                          <td>{{$id_turma->quint_5t}}</td>
                                          <td>{{$id_turma->sext_5t}}</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>

                      </div>

       {!! Form::open(['route'=> ['deletarhorarios.destroy', $id_turma->id],'method'=>'DELETE']) !!}

             <a class="btn btn-default" href="{{URL:: to('listar-horarios')}}">NÃO</a>
             {!!Form::submit('DELETAR', ['class' => 'btn btn-danger', 'data' => 'modal'])!!}

      {!! Form::close() !!}
       </div>


</html>

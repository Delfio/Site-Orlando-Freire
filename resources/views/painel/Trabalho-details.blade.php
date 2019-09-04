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

       <h3 id="forms-example" class="">@yield('title')</h3>

       {!! Form::model($trabalho,['route' =>  ['edittrabalho.update', $trabalho->id], 'class' => '','method'=>'PUT']) !!}
           <div class="form-group">
            {!! Form::label('nome', 'Nome: *' ) !!}
            {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
           </div>
           <div class="form-group">
            {!! Form::label('assunto', 'assunto: *' ) !!}
            {!! Form::text('assunto', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
           </div>
           <div class="col-md-12 form-group1 ">
            {!! Form::label('descricao', 'Descrição: *' ) !!}
            {!! Form::textarea('descricao', null, ['class' => 'control-label', 'placeholder' => ''] ) !!}
           </div>
           <div class="form-group">
            {!! Form::label('data_entrega', 'data_entrega: *' ) !!}
            {!! Form::date('data_entrega', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
           </div>
           <div class="form-group">
               <select name="id_disciplina" id="selector1" class="form-control1" >
                   @foreach ($disciplina as $disciplina)
                   <option name="id_disciplina" value="{{$disciplina->nome}}">{{$disciplina->nome}}</option>

                   <!--foreach-->
                   @endforeach
               </select>
           </div>
           <select name="id_turma" id="selector1" class="form-control1">
               @foreach ($turma as $turma)
                   <option name="id_turma" value="{{$turma->nome}}">{{$turma->nome}}</option>

                   <!--foreach-->
               @endforeach
           </select>
           {!!Form::submit('ATUALIZAR', ['class' => 'btn btn-lg btn-primary'])!!}

       {!! Form::close() !!}

       @include('painel.modal-delete')
       <div class="form-group">
           <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#myModal">
            Deletar Trabalho
           </button>
       </div>


</html>
